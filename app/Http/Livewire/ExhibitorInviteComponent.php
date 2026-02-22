<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

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

        $exhibitor = Exhibitor::create([
            'stallno'        => $this->stallno,
            'company'        => $this->company,
            'contact_person' => $this->contact_person,
            'designation'    => $this->designation,
            'email'          => $this->email,
            'number'         => $this->number,
            'logo'           => $logoPath,
            'referral_code'  => $referralCode,
        ]);

        session()->flash('success', 'Registration Successful!');

        $this->reset();
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
