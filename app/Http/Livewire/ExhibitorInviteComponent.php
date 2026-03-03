<?php

namespace App\Http\Livewire;

use App\Models\bcontact;
use App\Models\Brand;
use App\Models\Event;
use App\Models\Lead;
use App\Models\Participant;
use App\Models\User;
use Carbon\Carbon;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    public $referencecode;

    public $events = [];
    public $search = '';
    public $venue = '';
    public $selectedEvents = [];

    public function mount($board, $visitorid = null, $event_id = null, $referencecode = null)
    {
        $this->admstatus = '0';
        $this->status = '1';
        $this->user_id = NULL;
        //$this->type = 'exhibit';
        $this->visitorid = $visitorid;
        $this->board = $board;
        $this->event_id = $event_id;
        $this->referencecode = $referencecode;
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
    public $poster , $official_website, $sector, $meeting_person, $year;

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

        $brandupdate = New Brand();

        $brandupdate->organisation = $this->organisation;
        $brandupdate->brand_name = $this->brand_name; 
        $brandupdate->event_id = $this->event_id;
        $brandupdate->slug = Str::slug($this->brand_name); 

        $newimage = 'logo-'.Carbon::now()->timestamp.'.'.$this->logo->extension();
        $this->logo->storeAs('exhibition', $newimage);
        $brandupdate->brand_logo = $newimage;

        $newimage = 'poster-'.Carbon::now()->timestamp.'.'.$this->poster->extension();
        $this->poster->storeAs('exhibition', $newimage);
        $brandupdate->product_video = $newimage;

        $brandupdate->save();

         // Store user id in session
         session(['user_id' => $firstlevel->id, 'brand_id' => $brandupdate->id, 'stallno' => $this->stallno, 'hall' => $this->hall, 'year' => $this->year ]);

        //$this->board = 'details'; /business/{board}/invitee/{event_id?}/{visitorid?}

        return redirect()->route('invitee.add', ['board' => 'details', 'event_id' => $this->event_id]);
        
    }

    public function branddetailsformeeting()
    {
 
        $brandupdate = Brand::find(session('brand_id'));
        if ($brandupdate) {
            
                 // $brandupdate->organisation = $this->organisation;
        // $brandupdate->brand_name = $this->brand_name; 
        // $brandupdate->event_id = $this->event_id;
        // $brandupdate->slug = Str::slug($this->brand_name); 

        // $newimage = Carbon::now()->timestamp.'.'.$this->logo->extension();
        // $this->logo->storeAs('exhibition', $newimage);
        // $brandupdate->brand_logo = $newimage;


        // $newimage = Carbon::now()->timestamp.'.'.$this->poster->extension();
        // $this->poster->storeAs('exhibition', $newimage);
        // $brandupdate->brand_poster = $newimage;

         $brandupdate->industry = $this->industry; 
         $brandupdate->sector = $this->sector; 
        // $brandupdate->category_id = $this->category_id; 
        
        //  $brandupdate->long_desc = $this->long_desc; 
         $brandupdate->short_desc = $this->short_desc;
        //  $brandupdate->about = $this->about;
         
         $brandupdate->official_website = $this->official_website; 
        //  $brandupdate->business_model = $this->business_model; 
        //  $brandupdate->type_business_model = $this->type_business_model; 

        //  $brandupdate->twitter = $this->twitter; 
        //  $brandupdate->facebook = $this->facebook;
        //  $brandupdate->instagram = $this->instagram;
        //  $brandupdate->youtube = $this->youtube;

         $brandupdate->status = $this->status;
         $brandupdate->user_id = session('user_id');
         $brandupdate->save();

        };

        // $brandupdate = New Brand();

        $getexhibitorcontact = User::find(session('user_id'));

        $createbrandcontact = new bcontact();        
        $createbrandcontact->name = $this->meeting_person;

        $createbrandcontact->designation = $getexhibitorcontact->designation;
        $createbrandcontact->email = $getexhibitorcontact->email;
        $createbrandcontact->phone = $getexhibitorcontact->phone; 

        $createbrandcontact->brand_id = session('brand_id');
        $createbrandcontact->user_id = session('user_id');
        $createbrandcontact->status = $this->status;
        $createbrandcontact->admstatus = $this->admstatus; 
        $createbrandcontact->save();

        $createexhibitionstall = new Participant();
        // $createexhibitionstall->brand_id = $brandupdate->id; 

        $stallNumber = 'TEN-' . session('year') 
             . '-H' . $this->hall 
             . '-' . str_pad($this->stallno, 3, '0', STR_PAD_LEFT);
        
        $createexhibitionstall->stallno = session('stallno');
        $createexhibitionstall->hall = session('hall');

        // Unique random 4 character code
        $uniqueCode = strtoupper(Str::random(4));

        $referenceCode = $stallNumber . '-' . $uniqueCode;
        $createexhibitionstall->referencecode = $referenceCode;
        $createexhibitionstall->brand_id = session('brand_id');
        $createexhibitionstall->event_id = $this->event_id;
        $createexhibitionstall->user_id = session('user_id');
        $createexhibitionstall->status = $this->status;
        $createexhibitionstall->admstatus = $this->admstatus; 
       
        $createexhibitionstall->year = session('year');
        
        $createexhibitionstall->save();

        return redirect()->route('invitee.add', ['board' => 'thanks', 'event_id' => $this->event_id])->with('reference_code', $createexhibitionstall->referencecode);;
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

    $events = collect();

    if (!empty($this->search)) {

        $events = Event::where('eventname', 'like', '%' . $this->search . '%')->get();
    }
   

        return view('livewire.exhibitor-invite-component', ['events' => $events])->layout('layouts.eblog');
    }
}
