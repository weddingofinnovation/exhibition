<?php

namespace App\Http\Livewire\User;

use App\Models\bcontact;
use App\Models\Experience;
use App\Models\Expo;
use App\Models\Hostess;
use App\Models\Magazine;
use App\Models\Skillio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Stringable;

class UserLandingComponent extends Component
{
    public $trackcustomer;
    public $board;

    public $name;
    public $slug;
    public $type;
    public $subscriber;
    public $desc;
    public $frequency;
    public $status;
    public $admstatus;
    public $user_id;


    public $released;
    public $updated;
    public $version;
    public $category;


    public $phone;
    public $email;

    
    public $aliasname;
    public $gender;
    public $dob;
    public $qualification;
    public $height;
    public $uniqueCode;
   
    public $skill;
    public $read;
    public $write;
    public $speak;
    public $eventname;
    public $event_start_date;
    public $event_end_date;
    public $booth_number;
    public $brand_name;
    public $contact;

    public $hostess_id;
    public $checkvalue = [];

    public function mount($trackcustomer)
    {
      $this->trackcustomer = $trackcustomer;
        $fattribute = Auth::user();
        $this->name = $fattribute->name;
        $this->email = $fattribute->email;
        $this->phone = $fattribute->phone;
    }



    public function added()
    {
       $magazineDetails = new Magazine();
       $magazineDetails->name = $this->name;
       $magazineDetails->slug = Str::slug($this->name,'-');
       $magazineDetails->type = $this->type;
       $magazineDetails->subscriber = $this->subscriber;
       $magazineDetails->desc = $this->desc;
       $magazineDetails->frequency = $this->frequency;
       $magazineDetails->status = '1';
       $magazineDetails->admstatus = '1';

       $magazineDetails->user_id = Auth::user()->id;
       $magazineDetails->save(); 

    }


    public function printedfacts()
    {
      $magazineDetails = new Magazine();
       $magazineDetails->released = $this->released;
       $magazineDetails->updated = $this->updated;
       $magazineDetails->version = $this->version;
       $magazineDetails->category = $this->category;

       $magazineDetails->status = '1';
       $magazineDetails->admstatus = '1';

       $magazineDetails->user_id = Auth::user()->id;
       $magazineDetails->save();
    }

    public function updatecontact()
    {
       $magazineDetails = new bcontact();
       $magazineDetails->name = $this->name;
       $magazineDetails->designation = $this->designation;
       $magazineDetails->phone = $this->phone;
       $magazineDetails->email = $this->email;
       $magazineDetails->status = '1';
       $magazineDetails->admstatus = '1';
       $magazineDetails->user_id = Auth::user()->id;
       $magazineDetails->save();
    }

    

    public function registerHostess()
    {
      $hostessDetails = new Hostess();
      $hostessDetails->name = $this->name;

      //$hostessDetails->contact = $this->contact;
      
      $hostessDetails->aliasname = $this->aliasname;
      $hostessDetails->slug = Str::slug($this->aliasname,'-');
      $hostessDetails->gender = $this->gender;
      $hostessDetails->dob = $this->dob;
      $hostessDetails->qualification = $this->qualification;
      $hostessDetails->height = $this->height;
      $hostessDetails->uniqueCode =  Str::upper(Str::random(6));
      //$hostessDetails->status = '1';
      //$hostessDetails->admstatus = '0';
      $hostessDetails->user_id = Auth::user()->id;
      $hostessDetails->save();

      $hostessContactDetails =  User::find(Auth::user()->id);
      $hostessContactDetails->phone = $this->contact;
      $hostessContactDetails->save();

      return redirect()->route('partner.magazine', ['trackcustomer' => 'expertise']);
    }

    
    //cutting, serving, stall management, inquring, attending, sales, cooking, hospitality
    public function ExpertiseHostess()
    {
        $sectry = json_encode($this->checkvalue);
        $tryi = json_decode($sectry);
        //$expoo = explode("," , $sectry );
        foreach($tryi as $trey)
        {
            $fattribute = new Skillio();
            $fattr_id = Auth::user()->id;
            $fattribute->hostess_id = Hostess::where('user_id', $fattr_id )->value('id')->first();
            $fattribute->skill = Str::lower(trim($trey));
            $fattribute->status = "1";
            $fattribute->admstatus = "1";
            $fattribute->user_id = Auth::user()->id;
            $fattribute->save();
        }

        return redirect()->route('partner.magazine', ['trackcustomer' => 'experience']);
    }

    public function codeDress()
    {
      $hostessDetails = new Wearable();

      $hostessDetails->code = $this->code;

      $hostessDetails->read = $this->read;
      $hostessDetails->write = $this->write;
      $hostessDetails->speak = $this->speak;

      $hostessDetails->status = '1';
      $hostessDetails->admstatus = '0';
      $hostessDetails->user_id = Auth::user()->id;
      $hostessDetails->save();
    }

    public function ExperienceHostess()
    {
      $hostessDetails = new Experience();

      $hostessDetails->eventname = $this->eventname;
      $hostessDetails->event_start_date = $this->event_start_date;
      $hostessDetails->event_end_date = $this->event_end_date;
      $hostessDetails->booth_number = $this->booth_number;
      $hostessDetails->brand_name = $this->brand_name;

      $hostessDetails->status = '1';
      $hostessDetails->admstatus = '0';
      $hostessDetails->user_id = Auth::user()->id;

      $hostessDetails->save();

    }

    public function socialHostess()
    {
      $hostessDetails = new social();

      $hostessDetails->social_account = $this->socialaccount;
      $hostessDetails->social_link = $this->social_link;

      $hostessDetails->tablename = 'hostess';
      $hostessDetails->status = '1';
      $hostessDetails->admstatus = '0';
      $hostessDetails->user_id = Auth::user()->id;

      $hostessDetails->save();

    }


    public function render()
    {
        $magazine = Magazine::where('user_id', Auth::user()->id)->get();

        $updatephone = Auth::user()->phone;
        $updateemail = Auth::user()->email;
        $updatename = Auth::user()->name;

        $tryin = Expo::where('type','tag')->where('admstatus', 1)->get();
        
        return view('livewire.user.user-landing-component', ['tryin' => $tryin,'updatephone' => $updatephone,'updateemail' => $updateemail,'updatename' => $updatename,'magazine' => $magazine]);
    }
}
