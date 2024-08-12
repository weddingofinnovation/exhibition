<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;


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


    public function redirectToLinkedIn()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function handleLinkedInCallback()
    {
        $user = Socialite::driver('linkedin')->user();
        // Handle user data, e.g., log them in or register them
    }

    public function loginWithLinkedIn()
    {
        return redirect()->to(Socialite::driver('linkedin')->redirect()->getTargetUrl());
    }

    public function render()
    {
        $linkedinUser = Socialite::driver('linkedin')->user();

        $user = User::firstOrCreate([
            'linkedin_id' => $linkedinUser->getId(),
        ], [
            'name' => $linkedinUser->getName(),
            'email' => $linkedinUser->getEmail(),
            'avatar' => $linkedinUser->getAvatar(),
        ]);

        Auth::login($user);
        //return redirect()->intended('home');

        return view('livewire.google-component');
    }
}
