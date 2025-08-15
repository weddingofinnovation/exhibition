<?php

namespace App\Http\Livewire\Admin;

use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Event;
use App\Models\Eventedition;
use App\Models\Expo;
use App\Models\Location;
use App\Models\Rate;
use App\Models\Sector;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class AdminEventAddComponent extends Component
{
    public $slug;
    public $eventype;
    public $eventname;
    public $edition;
    public $enddate;
    public $startdate;
    public $venue;
    public $city;
    public $country;
    public $user_id;
    public $auidence;
    public $exhibitors;
    public $email;
    public $phone;
    public $level;
    public $status;
    public $admstatus;
    public $details;
    public $link;

    public $organizer;
    public $desc;
    public $shtdesc;
    public $tagline;
    public $findidvenue;
    

    Use WithFileUploads;
    public function mount()
    {
        $this->level = 4;
        $this->status = 1;
        $this->admstatus = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->eventname,'-');
    }

    
    public function newlist(){   
        $event = new Event();
        $event->eventname = Str::lower(trim($this->eventname));
        
        
        $event->startdate = $this->startdate;
        $event->enddate = $this->enddate;

        $loc = Location:: where('id', $this->findidvenue)->first();
        $this->venue = $loc->venue;
        $this->city = $loc->city;
        $this->country = $loc->country;
       

        $event->venue = trim($this->venue);
        $event->city = trim($this->city);
        $event->country = trim($this->country);
        $event->location_id = $this->findidvenue;

        // $event->city = trim($this->city);
        $double = Str::lower(trim($event->eventname . ' ' . $event->city));
        $event->slug = Str::slug ($double,'-');
        $event->organizer = Str::lower(trim($this->organizer));
        // $event->email = $this->email;
        // $event->phone = $this->phone;

        $event->auidence = trim($this->auidence);
        $event->exhibitors = trim($this->exhibitors); 

        $event->tagline = trim($this->tagline);
        $event->shtdesc = trim($this->shtdesc);
        $event->desc = trim($this->desc);

        $event->edition  = trim($this->edition);
        $event->eventype = $this->eventype;
        $event->user_id = Auth::user()->id;
        $event->level  = $this->level;
        $event->status  = $this->status;
        $event->link  = $this->link;
        $event->admstatus  =  $this->admstatus;
        $event->reference = Str::uuid()->toString();
        $event->save();

        //$this->sendEmail($event);
       // $this->reset();
        session()->flash('message','Thanks, Your details has been uploaded.'); 
        $this->withoutHashtag($event->id);
        return redirect()->route('admin.dashboard', ['board' => 'event']);
    }

    public function sendEmail($contact){
        $details = [
            'title' => 'contact us ',
            'body' => 'thanks for doing'
        ];
        Mail::to($contact->email)
             ->cc('laravel8coi@gmail.com')
             ->bcc('laravel8coi@gmail.com')
             ->send(new ContactMail($contact, $details));
        }


        public function withoutHashtag($evento)
        {
          //$findComment = Comment::where('admstatus','1')->where('status','1')->get();
            
          //$usero->opinion =  $findComment->random();
          
          for($i = 0; $i < 7; $i++)
          {
            $indoyui = Event::where('id', $evento)->value('id');
    
            $usero =  new Rate ();
            $trynigtocreate = collect([4,5,6,7,8,9]);
            $usero->rate = $trynigtocreate->random();
    
            // $findhastag = Hashtag::where('admstatus','0')->where('status','1')->where('event_id', $indoyui->id)->get();
            // $findhastagID = $findhastag->random();
            // $usero->hasttag = $findhastagID->hastag; 
            
            $findComment = Comment::where('admstatus','1')->where('status','1')->get();
            $findCommentID = $findComment->random();
            $usero->opinion =  $findCommentID->statement;
           
            $usero->event_id = $indoyui;
    
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

    public function editionlocktoupdatenexttimeauto($edition, $eventid)
    {
        $edition = Str::lower(trim($edition));

    // Find existing edition for the event
    $existing = Eventedition::where('event_id', $eventid)
        ->where('edition', $edition)
        ->first();

    if ($existing) {
        // Check if dates changed but edition is the same → postpone
        if (
            $existing->start_date != $startDate ||
            $existing->end_date != $endDate
        ) {
            $existing->start_date = $startDate;
            $existing->end_date   = $endDate;
            $existing->status     = 'postponed'; // custom label if needed
            $existing->save();

            return 'updated_postponed';
        }

        return 'no_change';
    }

    // If no existing edition → create new
    $event = new Eventedition();
    $event->edition    = $edition;
    $event->status     = '1';
    $event->admstatus  = '1';
    $event->event_id   = $eventid;
    $event->user_id    = Auth::id();
    $event->start_date = $startDate;
    $event->end_date   = $endDate;
    $event->save();

    return 'created_new';
    
        $event = new Eventedition();
        $event->edition = Str::lower(trim($edition));
        $event->status = '1'; 
        $event->admstatus = '1';
        $event->event_id = $eventid;
        $event->user_id = Auth::user()->id;
        $event->save();
    }
        
    public function render()
    {
        $cat = Category::get();
        $sec = Sector::get();
        $pavillion = Expo::where('type','expo')->get();
        $searchtag = Expo::where('type','tag')->get();
        return view('livewire.admin.admin-event-add-component',['searchtag'=>$searchtag,'pavillion'=>$pavillion,'cat'=>$cat,'sec'=>$sec])->layout('layouts.admin');
    }
}
