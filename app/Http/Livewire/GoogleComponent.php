<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GoogleComponent extends Component
{


    public function loginwithGoogle()
    {
         return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
            try {

                    $user = Socialite::driver('google')->user();
                        $is_user = user::where('email', $user->getEmail())->first();

                        if(!$is_user)
                            {
                                $saveUser = User::updateOrCreate
                                (
                                    [
                                        'google_id' => $user->getId()
                                    ],
                                    [
                                        'name' => $user->getName(),
                                        'email' => $user->getEmail(),
                                        'password' => Hash:: make ($user->getName().'@'.$user -> getId())
                                    ]
                                );

                            }
                        else
                            {
                                $saveUser = User::where('email',$user->getEmail())->update(['google_id' => $user->getId()]);
                                $saveUser = user::where('email', $user->getEmail())->first();
                            }

                Auth::loginUsingId($saveUser->id);
                return redirect()->route('business.exhibition');
             }
             catch(\Throwable $th){
                throw $th;
             }
    }




    public function loginWithLinkedIn()
    {
        //return redirect()->to(Socialite::driver('linkedin')->redirect()->getTargetUrl());
        return Socialite::driver('linkedin')->redirect();
    }

    // https://www.linkedin.com/oauth/v2/authorization?client_id=86kaed0t9vmsui
    
    // &redirect_uri=https%3A%2F%2Fexhibition.org.in%2Flinkedinlogin
    // &scope=r_liteprofile+r_emailaddress
    // &response_type=code
    // &state=cheMLDd9f5dclrPApfN0AX6W8swmDbfrHNCrIv8B

    public function handleLinkedInCallback()
    {
        $user = Socialite::driver('linkedin')->user();

        //dd($user);
        // Handle user data, e.g., log them in or register them
        $linkedinUser = Socialite::driver('linkedin')->user();

        $user = User::firstOrCreate([
            'linkedin_id' => $linkedinUser->getId(),
        ], [
            'name' => $linkedinUser->getName(),
            'email' => $linkedinUser->getEmail(),
            'avatar' => $linkedinUser->getAvatar(),
        ]);

        Auth::login($user);
        return redirect()->intended('home');
    }

    

    public function redirectToLinkedInforpost()
    {
        $params = [
            'response_type' => 'code',
            'client_id' => env('LINKEDIN_CLIENT_ID'),
            'redirect_uri' => route('linkedin.callback'),
            'scope' => 'r_liteprofile r_emailaddress w_member_social',
        ];

        return redirect('https://www.linkedin.com/oauth/v2/authorization?' . http_build_query($params));
    }

    public function handleLinkedInCallbackupload(Request $request)
    {
        $http = new Client;

        $response = $http->post('https://www.linkedin.com/oauth/v2/accessToken', [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'code' => $request->code,
                'redirect_uri' => route('linkedin.callback'),
                'client_id' => env('LINKEDIN_CLIENT_ID'),
                'client_secret' => env('LINKEDIN_CLIENT_SECRET'),
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $accessToken = $data['access_token'];

        // Store the access token for future use
        session(['linkedin_access_token' => $accessToken]);

        return redirect()->route('home')->with('status', 'LinkedIn connected!');
    }

    public function postToLinkedIn()
    {
        $accessToken = session('linkedin_access_token'); // Retrieve access token from session or storage
        $pageId = 'YOUR_LINKEDIN_PAGE_ID'; // Replace with your LinkedIn Page ID
        $articleUrl = 'https://yourwebsite.com/your-article-url';
        $articleTitle = 'Your Article Title';
        $articleDescription = 'Brief description of your article.';

        $client = new Client();

        $response = $client->post("https://api.linkedin.com/v2/shares", [
            'headers' => [
                'Authorization' => "Bearer $accessToken",
                'Content-Type' => 'application/json',
                'x-li-format' => 'json',
            ],
            'json' => [
                "owner" => "urn:li:organization:$pageId",
                "subject" => $articleTitle,
                "text" => [
                    "text" => $articleDescription
                ],
                "content" => [
                    "contentEntities" => [
                        [
                            "entityLocation" => $articleUrl,
                            "thumbnails" => [
                                [
                                    "resolvedUrl" => "https://yourwebsite.com/path-to-image.jpg"
                                ]
                            ]
                        ]
                    ],
                    "title" => $articleTitle
                ],
                "distribution" => [
                    "linkedInDistributionTarget" => [
                        "visibleToGuest" => true
                    ]
                ]
            ]
        ]);

        if ($response->getStatusCode() == 201) {
            return back()->with('status', 'Article posted to LinkedIn successfully!');
        }

        return back()->with('error', 'Failed to post article to LinkedIn.');
    }

    public function render()
    {
        
        return view('livewire.google-component');
    }
}
