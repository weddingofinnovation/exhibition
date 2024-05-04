<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Lead;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;


class ExhibitComponent extends Component
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

    public function mount($board , $visitorid = null)
    {
        $this->admstatus= '0';  
        $this->status = '1'; 
        $this->user_id = NULL; 
        //$this->type = 'exhibit';
        $this->visitorid = $visitorid;  
        $this->board = $board;
        
        //$findevent = DB::table('events')->where('id', $data)->first();

    }

    public function add()
    {
        $this->validate([
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|max:12|min:10',
            'name'=>'required|alpha:ascii', 
        ]);

        $newEvent = new Lead();
        $newEvent->name = $this->name;
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;
        $newEvent->type = 'business';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;
        
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        $logino = new User();
        $logino->name = $this->name;
        $logino->email = $this->email;
        $logino->password = Hash::make($this->email);
        $logino->phone = $this->phone;
        $logino->save();

        //return redirect()->route('coicart');thankyou
        return redirect()->route('event.exhibit', ['board' => 'thankyou']);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message','Thanks for sharing your review.');
        
    }

    public function otheradd()
    {
        $this->validate([
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|max:12|min:10',
            'name'=>'required|alpha:ascii', 
        ]);

        $newEvent = new Lead();
        $newEvent->name = $this->name;
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;
        $newEvent->type = $this->board;
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;
        
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        $logino = new User();
        $logino->name = $this->name;
        $logino->email = $this->email;
        $logino->password = Hash::make($this->email);
        $logino->phone = $this->phone;
        $logino->save();

        //return redirect()->route('coicart');thankyou
        return redirect()->route('event.exhibit', ['board' => 'thankyou']);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message','Thanks for sharing your review.');
        
    }

    public function addregistration()
    {
        $this->validate([
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|max:12|min:10',
            'name'=>'required|alpha:ascii', 
            'city' => 'required|alpha:ascii',
            'industry' => 'required|alpha:ascii',
            'company' => 'required|alpha-num:ascii',
            'designation' => 'required|alpha:ascii',
        ]);

        $newEvent = new Lead();
        $newEvent->name = $this->name;
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;

        $newEvent->city = $this->city;

        $newEvent->industry = $this->industry;
        $newEvent->company = $this->company;
        $newEvent->designation = $this->designation;

        $newEvent->type = 'register';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;
        
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        $logino = new User();
        $logino->name = $this->name;
        $logino->email = $this->email;
        $logino->password = Hash::make($this->email);
        $logino->phone = $this->phone;
        $logino->save();

        //return redirect()->route('coicart');thankyou
        //return redirect()->route('event.exhibit', ['type' => 'visitor', 'visitorid' => $newEvent->id]);
        return redirect()->route('event.exhibit', ['board' => 'thankyou', 'visitorid' => $newEvent->id]);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message','Thanks for sharing your review.');
    }

    //{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}

    public function genratepdf($visitorid)
    {
        $wantdata = Lead::where('id', $visitorid)->first();
        $data = [
            'name' => '{{$wantdata->name}}',
            'designation' => '{{$wantdata->designation}}',
            'company' => '{{$wantdata->company}}',
        ];
        $visitorsticker = PDF::loadView('livewire.thankyou-component', $data);

        return $visitorsticker->download('visitor.pdf');
    }

    public function savecont($visitorid)
    {
        // $data = Lead::where('id', $visitorid)->first();
        $savecnt = new Lead();
        $savecnt->type = 'contact-sv';
        $savecnt->event_id = session()->get('eventID');
        $savecnt->contactid = $visitorid;

          if (Auth::check()) 
          {
              $savecnt->user_id = Auth::user()->id;
          }   
              else
          {
              $savecnt->user_id = $this->user_id;
          }

        $savecnt->status = $this->status;
        $savecnt->admstatus = $this->admstatus;
        $savecnt->save();
        return redirect()->route('event.exhibit', ['board' => 'connect-business-partner']);
    }
    
    //for visitor
    public function addTicket()
    {
        $this->validate([
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|max:12|min:10',
            'name'=>'required|alpha:ascii', 
        ]);

        $newEvent = new Lead();
        $newEvent->name = $this->name;
        $newEvent->email = $this->email;
        $newEvent->phone = $this->phone;
        $newEvent->type = 'ticket';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        $logino = new User();
        $logino->name = $this->name;
        $logino->email = $this->email;
        $logino->password = Hash::make($this->email);
        $logino->phone = $this->phone;
        $logino->save();

        return redirect()->route('coicart');
        session()->flash('message','Thanks for sharing your review.');
        
    }


    public function render()
    {
    //     $data = session()->all();
    //    dd($data);

       $findID = session()->get('eventID');
       $findevent = Event::where('id', $findID)->first();
       $franchise = $findevent; 
       
        return view('livewire.exhibit-component', ['findevent' => $findevent, 'franchise' => $franchise]);
    }
}
