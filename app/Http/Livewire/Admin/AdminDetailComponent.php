<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Seller\HastagComponent;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Hashtag;
use App\Models\Pavillion;
use App\Models\Rate;
use App\Models\Speaker;
use App\Models\Sponsership;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BrandsImport;
use App\Mail\EventToClient;
use App\Models\Agenda;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;

class AdminDetailComponent extends Component
{  
   public $slug;
    public $category_id;
    public $webo;
    public $link;
    public $formm;
    public $eventname;

    public $rate;
    public $hasttag;
    public $status;
    public $admstatus;
    public $event_id;
    public $opinion;

    public $howMany;

    public $eventTitle;
    public $eventDescription;
    public $eventDate;
    public $eventWebsite;
    public $eventImage;

    public function mount($slug)
    {
       $this->slug = $slug;
    }

    protected $listeners = ['createcomment' => 'referencereview'];

    public function catUpdate($id, $category_id)
    {
        $updateDetials = Event::where('slug', $this->slug)->first();
        $updateDetials = $updateDetials->find($id);
        $updateDetials->category_id = $category_id;
        $updateDetials->save();
        $this->referencereview(3);
    }

    public function updateEventstatus($id, $status) 
    {
      $eVent = Event::find($id);
      $eVent->admstatus = $status;
      $eVent->save();
      $this->referencereview(3);
      session()->flash('message',' Status Successfully Changed');
    } 

    //for updating postponse, Cancelled
    public function updateEventPostpone($id, $status) 
    {
      $eVent = Event::find($id);
      $eVent->latestupdat = $status;
      $eVent->save();
      $this->referencereview(3);
      session()->flash('message',' Status Successfully Changed');
    } 

    public $country, $city , $venue, $eventStartDate , $eventEndDate; 

    public function postToLinkedIn($id)
    {   
        $eVent = Event::find($id);
        $this->eventTitle = $eVent->eventname;
        $this->eventDescription = $eVent->desc;
        $this->venue = $eVent->venue;
        $this->city = $eVent->city;
        $this->eventStartDate = strtotime($eVent->startdate);
        $this->eventEndDate = strtotime($eVent->enddate);
        $this->eventWebsite = route('event.details', ['slug' => $eVent->slug]);
        $this->eventImage =  $eVent->image;
        $this->country = $eVent->country;
         
        $accessToken = session('AQUK2cpsfBjwAWBzNTB-5t8IEipMDzuq5Uw9BBuUKLSX7T06yue6u0jg6e76sO-tDJqIwdpnzGXVdPkR1vi1TmXjvnC0JaFU0rXujPKanxXw0ie4FcAIzO49eZ7MeFaaiuDGILpof8fcrkf0qD2CKj--eiFho3m_b0D20PPSL_qL2cbMLXSvmV380LpAF03IeSsWT6h_kXFZkslAd7prXIVCTU_mRDVRiGAaAsXDWq-lXlZV7Kg1stKQi7OG7ijtZoFTALFFJ1ojtb4Fz2O9m9A2hSKYhQ6Llg2N3LWEfN-kitO935krkwb3Tgf6ESX9eDrmWCEEMWl-QATuFbbE1CtlKfHSrg');
        $pageId = 'YOUR_LINKEDIN_PAGE_ID'; // Replace with your LinkedIn Page ID

        $client = new Client();

        $response = $client->post("https://api.linkedin.com/v2/shares", [
            'headers' => [
                'Authorization' => "Bearer $accessToken",
                'Content-Type' => 'application/json',
                'x-li-format' => 'json',
            ],
            'json' => [
                "owner" => "urn:li:organization:$pageId",
                "subject" => $this->eventTitle,
                "text" => [
                    "text" => $this->eventDescription . "\nEvent Date: " . $this->eventDate . "\nMore details: " . $this->eventWebsite . "\nMore details: " . $this->country . "\nMore details: " . $this->city . "\nMore details: " . $this->venue,
                ],
                "content" => [
                    "contentEntities" => [
                        [
                            "entityLocation" => $this->eventWebsite,
                            "thumbnails" => [
                                [
                                    "resolvedUrl" => $this->eventImage
                                ]
                            ]
                        ]
                    ],
                    "title" => $this->eventTitle,
                ],
                "distribution" => [
                    "linkedInDistributionTarget" => [
                        "visibleToGuest" => true
                    ]
                ]
            ]
        ]);

        if ($response->getStatusCode() == 201) {
            session()->flash('status', 'Event posted to LinkedIn successfully!');
        } else {
            session()->flash('error', 'Failed to post event to LinkedIn.');
        }
    }


    public function updatebusinessrevenue($id, $businessrevenue) 
    {
      $eVent = Event::find($id);
      $eVent->businessrevenue = $businessrevenue;
      $eVent->save();
      $this->referencereview(3);
      session()->flash('message',' Status Successfully Changed');
    } 


    

    public function updateIDstatus($id) 
    {
      $eVent = Event::find($id);
      $eVent->reference = Str::uuid()->toString();
      $eVent->save();
      $this->referencereview(3);
      session()->flash('message',' Status Successfully Changed');
    } 

    

    public function updateCreate($id) 
    {
      $eVent = Event::find($id);
      $eVent->created_at = Carbon::today();
      $eVent->save();
      $this->referencereview(3);
      session()->flash('message',' Status Successfully Changed');
    } 

    public function EventLink($id, $webo) 
    {
      $eVent = Event::find($id);
      $eVent->link = $webo;
      $eVent->save();
      $this->referencereview(3);
      session()->flash('message',' Status Successfully Changed');
    } 

    //@for($i = 0; $i < 10; $i++) @endfor

    public function tryingfaker()
    {
      //$findComment = Comment::where('admstatus','1')->where('status','1')->get();
        
      //$usero->opinion =  $findComment->random();
      
      for($i = 0; $i < $this->howMany; $i++)
      {
        $indoyui = Event::where('slug', $this->slug)->first();

        $usero =  new Rate ();
        $trynigtocreate = collect([4,5,6,7,8,9]);
        $usero->rate = $trynigtocreate->random();

        $findhastag = Hashtag::where('admstatus','0')->where('status','1')->where('event_id', $indoyui->id)->get();
        $findhastagID = $findhastag->random();
        $usero->hasttag = $findhastagID->hastag; 
        
        $findComment = Comment::where('admstatus','1')->where('status','1')->get();
        $findCommentID = $findComment->random();
        $usero->opinion =  $findCommentID->statement;
       
        $usero->event_id = $indoyui->id;

        $uertyui = User::where('utype', 'USR')->get();
        $useroID = $uertyui->random();
        $usero->user_id = $useroID->id;

        $usero->status = '1'; 
        $usero->admstatus = '1';

        $currenttime = Carbon::now();
        $currento =  strtotime($currenttime);
        $Subtracttime =  Carbon::now()->subHours(24);
        $Subtracttimeo = strtotime($Subtracttime);
        $getmid = rand($currento, $Subtracttimeo);
        $finall = date('Y/m/d h:i:s', $getmid);

        $usero->created_at = $finall;
        $usero->updated_at = $finall;
        $usero->save();
      }
      $this->reset();
    }

    public function withoutHashtag()
    {
      //$findComment = Comment::where('admstatus','1')->where('status','1')->get();
        
      //$usero->opinion =  $findComment->random();
      
      for($i = 0; $i < $this->howMany; $i++)
      {
        $indoyui = Event::where('slug', $this->slug)->first();

        $usero =  new Rate ();
        $trynigtocreate = collect([4,5,6,7,8,9]);
        $usero->rate = $trynigtocreate->random();

        // $findhastag = Hashtag::where('admstatus','0')->where('status','1')->where('event_id', $indoyui->id)->get();
        // $findhastagID = $findhastag->random();
        // $usero->hasttag = $findhastagID->hastag; 
        
        $findComment = Comment::where('admstatus','1')->where('status','1')->get();
        $findCommentID = $findComment->random();
        $usero->opinion =  $findCommentID->statement;
       
        $usero->event_id = $indoyui->id;

        $uertyui = User::where('utype', 'USR')->get();
        $useroID = $uertyui->random();
        $usero->user_id = $useroID->id;

        $usero->status = '1'; 
        $usero->admstatus = '1';

        $currenttime = Carbon::now();
        $currento =  strtotime($currenttime);
        $Subtracttime =  Carbon::now()->subHours(24);
        $Subtracttimeo = strtotime($Subtracttime);
        $getmid = rand($currento, $Subtracttimeo);
        $finall = date('Y/m/d h:i:s', $getmid);

        $usero->created_at = $finall;
        $usero->updated_at = $finall;
        $usero->save();
        
      }

      
      return redirect()->back();
      $this->reset();
    }

    public function referencereview($numberofreview)
    {
      //$findComment = Comment::where('admstatus','1')->where('status','1')->get();
        
      //$usero->opinion =  $findComment->random();
      
      for($i = 0; $i < $numberofreview; $i++)
      {
        $indoyui = Event::where('slug', $this->slug)->first();

        $usero =  new Rate ();
        $trynigtocreate = collect([4,5,6,7,8,9]);
        $usero->rate = $trynigtocreate->random();

        // $findhastag = Hashtag::where('admstatus','0')->where('status','1')->where('event_id', $indoyui->id)->get();
        // $findhastagID = $findhastag->random();
        // $usero->hasttag = $findhastagID->hastag; 
        
        $findComment = Comment::where('admstatus','1')->where('status','1')->get();
        $findCommentID = $findComment->random();
        $usero->opinion =  $findCommentID->statement;
       
        $usero->event_id = $indoyui->id;

        $uertyui = User::where('utype', 'USR')->get();
        $useroID = $uertyui->random();
        $usero->user_id = $useroID->id;

        $usero->status = '1'; 
        $usero->admstatus = '1';

        $currenttime = Carbon::now();
        $currento =  strtotime($currenttime);
        $Subtracttime =  Carbon::now()->subHours(24);
        $Subtracttimeo = strtotime($Subtracttime);
        $getmid = rand($currento, $Subtracttimeo);
        $finall = date('Y/m/d h:i:s', $getmid);

        $usero->created_at = $finall;
        $usero->updated_at = $finall;
        $usero->save();
        
      }

      
      return redirect()->back();
      $this->reset();
    }

    public function Upgrade($id)
    {  
      //  $eventShtdesc = Event::where('status','1')->where('admstatus','1')->orderBy('startdate','asc')->get();
      //  foreach($eventShtdesc as $errorimprove)
      //  {
        $statementID = Event::find($id);
        
        $statementEventName = trim($statementID->eventname); 
        $statementEventSlug = trim($statementID->slug); 
        $statementEventVenue = trim($statementID->venue); 
        $statementEventCity = trim($statementID->city); 
        $statementEventStartDate = trim(Carbon::parse ($statementID->startdate)->format('Y-m-d')); 
        $statementEventEndDate = trim(Carbon::parse ($statementID->enddate)->format('Y-m-d'));

       
        $statementID = Event::find($id);

        $statementID->eventname =  $statementEventName;
        $statementID->slug =  $statementEventSlug;
        $statementID->venue =  $statementEventVenue;
        $statementID->city = $statementEventCity;
        $statementID->startdate = $statementEventStartDate;
        $statementID->enddate = $statementEventEndDate;

        $statementID->save();
       //}

    }

    public function updateCallingStatus($id)
    {
      
         
        $user = Lead::find('event_id', $id)->first();

        if (!$user) {
            session()->flash('error', 'User not found.');
            return;
        }

        Mail::to($user->email)->send(
            new EventToClient ($this->subject ?? 'Hello from our app', $this->message ?? 'This is a test email.')
        );

        session()->flash('success', 'Email sent to ' . $user->name);
    

    }

    

    public $csvFile;
    use WithFileUploads;

    protected $rules = [
      'csvFile' => 'required|mimes:csv,txt|max:2048',
  ];

  public function upload()
  {
      $this->validate();

      // Use Maatwebsite Excel to import the CSV file
      Excel::import(new BrandsImport, $this->csvFile->getRealPath());

      session()->flash('success', 'CSV file uploaded and data imported successfully.');
  }

    use WithPagination;

    public $date;
    public $starttime;
    public $endtime;
    public $desc;

    public function addagenda()
    {
      $agenda = New Agenda();
      $agenda->date = $this->date;
      $agenda->starttime = $this->starttime;
      $agenda->endtime = $this->endtime;
      $agenda->desc = $this->desc;

      $agendao = Event::where('slug', $this->slug)->first();
      $agenda->event_id = $agendao->id;

      $agenda->status = '1'; 
      $agenda->admstatus = '1';
      $agenda->user_id = Auth::user()->id;
      $agenda->save();
    }

    public function render()
    {
        $evento = Event::where('slug', $this->slug)->first();
        $pendingDetails = $evento;
        $catevent = Category::get();

        $event = Event::where('slug', $this->slug)->value('id');
        $category = Denco::where('event_id', $event)->get();
        
        $speaker = Speaker::where('event_id',  $event)->get();

        $pavillion = Pavillion::where('event_id',  $event)->get();
        
        $sponsership = Sponsership::where('event_id' , $event)->get();
        $participants = Brand::where('event_id' , $event)->get();
        $hastag = Hashtag::where('event_id' , $event)->get();
        $EventCountRate = Rate::where('event_id' , $event)->get();

        //dd($hastag);
        
        return view('livewire.admin.admin-detail-component',['EventCountRate'=>$EventCountRate,'hastag'=>$hastag,'participants'=>$participants,'speaker'=>$speaker,'sponsership'=>$sponsership,'pavillion'=>$pavillion,'category'=>$category,'catevent'=>$catevent,'pendingDetails'=>$pendingDetails,'evento' => $evento])->layout('layouts.admin');
    }
}
