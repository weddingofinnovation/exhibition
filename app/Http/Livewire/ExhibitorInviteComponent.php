<?php

namespace App\Http\Livewire;

use App\Models\bcontact;
use App\Models\Brand;
use App\Models\Lead;
use App\Models\Participant;
use App\Models\User;
use Carbon\Carbon;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class ExhibitorInviteComponent extends Component
{
    public $admstatus;
    public $status;
    public $event_id;
    public $user_id;
    public $type;
    public $email;
    public $phone;
    public $board;
    public $data;
    public $name;
    public $city;
    public $industry;
    public $company;
    public $designation;
    public $visitorid;
    public $image;

    public $grade;
    public $comment;

    public function mount($board, $visitorid = null, $event_id = null)
    {
        $this->admstatus = '0';
        $this->status = '1';
        $this->user_id = NULL;
        //$this->type = 'exhibit';
        $this->visitorid = $visitorid;
        $this->board = $board;
        $this->event_id = $event_id;

        //$findevent = DB::table('events')->where('id', $data)->first();
    }

    public function createalinkforparticularexhibition()
    {
        $meetleadgen = new Lead();
        $meetleadgen->eventname = $this->eventname;
        $meetleadgen->save();
    }


    public function submitForm()
    {
        $this->validate();

        $logoPath = null;

        if ($this->logo) {
            $logoPath = $this->logo->store('exhibitor-logos', 'public');
        }

        // Generate company slug
        $companySlug = Str::slug($this->company);

        // Clean stall number (remove spaces/special characters)
        $stallClean = strtoupper(preg_replace('/[^A-Za-z0-9]/', '', $this->stallno));

        // Generate random string
        $randomCode = strtoupper(Str::random(5));

        // Final referral code
        $referralCode = $companySlug . '-' . $stallClean . '-' . $randomCode;

        // Make sure it's unique
        while (Exhibitor ::where('referral_code', $referralCode)->exists()) {
            $randomCode = strtoupper(Str::random(5));
            $referralCode = $companySlug . '-' . $stallClean . '-' . $randomCode;
        }

        $exhibitor = new Exhibitor();
        $exhibitor->stallno = $this->stallno;
        $exhibitor->company = $this->company;
        $exhibitor->contact_person = $this->contact_person;
        $exhibitor->designation = $this->designation;
        $exhibitor->email = $this->email;
        $exhibitor->number = $this->number;
        $exhibitor->logo = $logoPath;
        $exhibitor->referral_code = $referralCode;
        $exhibitor->save();

        session()->flash('success', 'Registration Successful!');

        $this->reset();

        $uptedetail = new Brand();
        $uptedetail->brand_name = trim($this->brand_name);
        $uptedetail->brand_logo = $this->brand_logo;

        $uptedetail->organisation = trim($this->organisation);

        $uptedetail->industry = trim($this->industry);
        $uptedetail->user_id = Auth::user()->id;
        $uptedetail->status = '1';
        $uptedetail->save();


       $upted = new bcontact();
       $upted->brand_id = $uptedetail->id ;
       $upted->name = trim($this->name);
       $upted->designation = trim($this->designation);
       $upted->email = trim($this->email);
       $upted->phone = $this->phone;
       $upted->user_id = Auth::user()->id;
       $upted->status ='1';
       $upted->admstatus = '1';
       $upted->save();
    }

    public $stallno;
    public $hall;
    public $organisation;
    public $brand_name;
    public $brand_logo;
    public $short_desc;
    public $logo;
    public $poster , $official_website, $sector, $meeting_person;

    use WithFileUploads;

    public function exhibitorreferral()
    {
        $firstlevel = new user();
        $firstlevel->name = $this->name;
        $firstlevel->slug = Str::slug($this->name);
        
        $firstlevel->phone = $this->phone;
        $firstlevel->email = $this->email;
        $firstlevel->password = Hash::make($firstlevel->email);
        $firstlevel->utype = 'USR';
        $firstlevel->save();
        
        //$this->board = 'details'; /business/{board}/invitee/{event_id?}/{visitorid?}

        return redirect()->route('invitee.add', ['board' => 'details', 'event_id' => $this->event_id]);
        
        $brandupdate = New Brand();

        $brandupdate->organisation = $this->organisation;
        $brandupdate->brand_name = $this->brand_name; 
        $brandupdate->event_id = $this->event_id;
        $brandupdate->slug = Str::slug($this->brand_name); 

        $newimage = Carbon::now()->timestamp.'.'.$this->logo->extension();
        $this->logo->storeAs('exhibition', $newimage);
        $brandupdate->brand_logo = $newimage;


        $newimage = Carbon::now()->timestamp.'.'.$this->poster->extension();
        $this->poster->storeAs('exhibition', $newimage);
        $brandupdate->brand_poster = $newimage;


         $brandupdate->industry = $this->industry; 
         $brandupdate->sector = $this->sector; 
        // $brandupdate->category_id = $this->category_id; 
        
        //  $brandupdate->long_desc = $this->long_desc; 
         $brandupdate->short_desc = $this->short_desc;
        //  $brandupdate->about = $this->about;
         
         $brandupdate->official_website = $this->official_website; 
        //  $brandupdate->business_model = $this->business_model; 
        //  $brandupdate->type_business_model = $this->type_business_model; 

         $brandupdate->twitter = $this->twitter; 
         $brandupdate->facebook = $this->facebook;
         $brandupdate->instagram = $this->instagram;
         $brandupdate->youtube = $this->youtube;

         $brandupdate->status = $this->status;
         $brandupdate->save();

            $createbrandcontact = new bcontact();
            
            $createbrandcontact->name = $this->meeting_person;
            $createbrandcontact->designation = $this->designation;
            $createbrandcontact->email = $this->email;
            $createbrandcontact->phone = $this->phone; 
            $createbrandcontact->brand_id = $brandupdate->id;
            $createbrandcontact->user_id = $firstlevel->id;
            $createbrandcontact->status = $this->status;
            $createbrandcontact->admstatus = $this->admstatus; 
            $createbrandcontact->save();

        $createexhibitionstall = new Participant();
        $createexhibitionstall->brand_id = $brandupdate->id; 

        $stallNumber = 'TEN-' . $this->year 
             . '-H' . $this->hall 
             . '-' . str_pad($this->stallno, 3, '0', STR_PAD_LEFT);

        $createexhibitionstall->brand_id = $stallNumber;

        $createexhibitionstall->user_id = $firstlevel->id;
        $createexhibitionstall->status = $this->status;
        $createexhibitionstall->admstatus = $this->admstatus; 
        $createexhibitionstall->event_id = $this->event_id;
        $createexhibitionstall->year = $this->year;
        $createexhibitionstall->save();

    }
    

    public function exhibitorrequestedvisitorforpass()
    {
        $this->validate([
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|max:12|min:10',
            'name' => 'required',
        ]);

        $newEvent = new Lead();
        $newEvent->name = $this->name;
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;
        $newEvent->type = 'invitee';
        $newEvent->event_id = '1209';

        //$newEvent->user_id = Auth::user()->id;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->comment = $this->comment;
        $newEvent->grade = $this->grade;
        $newEvent->company = $this->company;
        $newEvent->save();

        $logino = new User();
        $logino->name = $this->name;
        $logino->email = $this->email;
        $logino->password = Hash::make($this->email);
        $logino->phone = $this->phone;
        $logino->save();

        //return redirect()->route('coicart');thankyou
        return redirect()->route('invitee.add', ['board' => 'thankyou', 'visitorid' => $newEvent->id]);
        //return redirect()->route('event.exhibit', ['board' => 'thankyou']);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message', 'Thanks for sharing your review.');
    }
    
    public function render()
    {
        return view('livewire.exhibitor-invite-component')->layout('layouts.eblog');
    }
}
