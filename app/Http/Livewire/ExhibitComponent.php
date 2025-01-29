<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Lead;
use App\Models\User;
use Carbon\Carbon;
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

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
    public $image;

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
        return redirect()->route('event.exhibit', ['board' => 'thankyou', 'visitorid' => $newEvent->id ]);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message','Thanks for sharing your review.');
        
    }

    public function multiadd()
    {
        $this->validate([
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|max:12|min:10',
            'name'=>'required|alpha:ascii', 
        ]);

        $newEvent = new Lead();
        $newEvent->name = Str::lower(trim($this->name));
        $newEvent->email = Str::lower(trim($this->email));
        $newEvent->phone = Str::trim($this->phone);
        $newEvent->type = Str::lower(trim($this->board));
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
        return redirect()->route('event.exhibit', ['board' => 'thankyou', 'visitorid' => $newEvent->id ]);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message','Thanks for sharing your review.');
        
    }
    
    public function hostessadd()
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
        $newEvent->type = 'hostess';
        $newEvent->event_id = session()->get('hostessID');

        //$newEvent->user_id = Auth::user()->id;
        
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        //return redirect()->route('coicart');thankyou
        return redirect()->route('event.exhibit', ['board' => 'thankyou-for-request']);
        //{{route('event.exhibit', ['board' => 'business'])}}
        session()->flash('message','Thanks for sharing your review.');
    }

    use WithFileUploads;

    public function vipentryadd()
    {
        $this->validate([
            'email'=>'required|email:rfc,dns',
            'phone'=>'required|max:12|min:10',
            'name'=>'required|alpha:ascii', 
        ]);

        $newEvent = new Lead();
        $newEvent->name = Str::lower(trim($this->name));
        $newEvent->email = $this->email;
        

        $newEvent->type = Str::lower(trim($this->type));
        //$newEvent->event_id = session()->get('hostessID');

        //$newEvent->user_id = Auth::user()->id;
        if($this->type == 'company')
        { 
            $newEvent->phone = $this->phone; 
            $newEvent->company = Str::lower(trim($this->company));
        }

        elseif($this->type == 'embassy')
        {
            
            $newEvent->company = Str::lower(trim($this->company));
        }
        
        $newEvent->designation = Str::lower(trim($this->designation));

        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        $newEvent->image = $newimage;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();
 
        
        //return redirect()->route('coicart');thankyou
        return redirect()->route('event.exhibit', ['board' => 'thankyou-for-request']);
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
        return redirect()->route('event.exhibit', ['board' => 'thankyou', 'visitorid' => $newEvent->id ]);
        //return redirect()->route('event.exhibit', ['board' => 'thankyou']);
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
        $newEvent->name = Str::lower(trim($this->name));
        $newEvent->email = trim($this->email);
        $newEvent->phone = trim($this->phone);

        $newEvent->city = Str::lower(trim($this->city));

        $newEvent->industry = Str::lower(trim($this->industry));
        $newEvent->company = Str::lower(trim($this->company));
        $newEvent->designation = Str::lower(trim($this->designation));

        $newEvent->type = 'register';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;
        
        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        $logino = new User();
        $logino->name = Str::lower(trim($this->name));
        $logino->email = trim($this->email);
        $logino->password = Hash::make($this->email);
        $logino->phone = trim($this->phone);
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
        // $visitorsticker = PDF::loadView('livewire.thankyou-component', $data);
        // return $visitorsticker->download($wantdata->name.'the-exhibition-network.pdf');

        $visitorsticker = PDF::loadView('livewire.document.expand-component', compact('data'));
      return $visitorsticker -> download('the-exhibition-network.pdf');


        //return $visitorsticker->stream($wantdata->name.'the-exhibition-network.pdf')->header('Content-type','application/pdf');
        //return response()->file();
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
        $newEvent->name = Str::lower(trim($this->name));
        $newEvent->email = trim($this->email);
        $newEvent->phone = trim($this->phone);
        $newEvent->type = 'ticket';
        $newEvent->event_id = session()->get('eventID');

        //$newEvent->user_id = Auth::user()->id;

        $newEvent->status = $this->status;
        $newEvent->admstatus = $this->admstatus;
        $newEvent->save();

        $logino = new User();
        $logino->name = Str::lower(trim($this->name));
        $logino->email = trim($this->email);
        $logino->password = Hash::make($this->email);
        $logino->phone = trim($this->phone);
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
