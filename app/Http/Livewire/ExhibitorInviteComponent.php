<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

    public function exhibitorrequestedvisitorforpass()
    {
        $this->validate([
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|max:12|min:10',
            'name' => 'required|alpha:ascii',
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
        return redirect()->route('event.exhibit', ['board' => 'thankyou-for-request', 'visitorid' => $newEvent->id]);
        //return redirect()->route('event.exhibit', ['board' => 'thankyou']);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message', 'Thanks for sharing your review.');
    }


    public function render()
    {
        return view('livewire.exhibitor-invite-component');
    }
}
