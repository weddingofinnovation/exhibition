<?php

namespace App\Http\Livewire;

use App\Mail\EventToClient;
use App\Mail\MonthlyEvent;
use App\Models\Award;
use App\Models\Category;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Franchise;
use App\Models\Lead;
use App\Models\Mag;
use App\Models\Speaker;
use App\Models\User;
use App\Models\Viewso;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EventComponent extends Component
{
  public $board;
  public $searchoo;

  public $search = '';
  public $venue = '';
  public $venues = [];

  public $showEmailModal = false;
  public $email = '';
  public $name;
  public $phone;
  public $co_name;

  public $selectedEvents = []; // store selected event IDs

  public function mount()
  {
    $this->venues = Event::select('venue')->distinct()->pluck('venue');
  }

  public function toggleEvent($id)
  {
    if (in_array($id, $this->selectedEvents)) {
      // Unselect
      $this->selectedEvents = array_diff($this->selectedEvents, [$id]);
    } else {
      // Select
      $this->selectedEvents[] = $id;
    }
  }

  public function openEmailModal()
  {
    if (count($this->selectedEvents) === 0) {
      session()->flash('message', 'Please select at least one event first.');
      return;
    }

    $this->showEmailModal = true;
  }



  public function sendSelectedEvents()
  {
    $this->validate([
      'email' => 'required|email',
      'phone' => 'required',
      'name' => 'required',
      'co_name' => 'required',
    ]);

    $newEvent = new Lead();
    $newEvent->name = $this->name;
    $newEvent->email = $this->email;
    $newEvent->phone = $this->phone;
    $newEvent->type = 'email';   // save board type
    // $newEvent->event_id = session()->get('eventID');
    $newEvent->status = 1;
    $newEvent->admstatus = '1';
    $newEvent->save();

    $logino = new User();
    $logino->name = $this->name;
    $logino->email = $this->email;
    $logino->password = Hash::make($this->email);
    $logino->phone = $this->phone;
    $logino->save();

    $selectedEventDetails = Event::whereIn('id', $this->selectedEvents)->get();
    // Example: send email (you can implement Mail logic later)
    $sendeaml = Mail::to($this->email)->send(new MonthlyEvent($selectedEventDetails));

    $this->showEmailModal = false;
    $this->email = '';
    $this->selectedEvents = [];

    session()->flash('message', 'Your selected events list has been sent to your email!');
  }


  public function store($event_id, $event_eventname, $event_eventype)
  {
    Cart::instance('cart')->add($event_id, $event_eventname, 18000, $event_eventype)->associate('App\Models\Event');
    $this->emitTo('cart-component', 'refreshComponent');
    session()->flash('success_message', 'Item has been added in cart');
    return redirect()->route('checkout');
  }

  public function insertEventToSess($id)
  {
    $event = Expo::where('id', $id)->first();
    $evento = new Viewso();
    if (Auth::check()) {
      $evento->user_id = Auth::user()->id;
    } else {
      $evento->user_id = NULL;
    }

    $evento->view_count = '1';
    $evento->requestedPage = url()->route('coi.exhibitioncategory', ['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $event->slug]);
    $evento->redirecTlink = url()->current();
    $evento->save();
    return redirect()->route('coi.exhibitioncategory', ['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $event->slug]);
  }


  public function render()
  {
    $industry = Category::get();
    $mytime = Carbon::today()->format("Y-m-d");
    $evento = Event::where('admstatus', '1')->where('status', '1')->where('eventype', 'expo')->where('startdate', '>=', $mytime)->orderBy('startdate', 'ASC')->limit(10)->get();
    $eventD = Event::where('admstatus', '1')->where('status', '1')->where('eventype', 'expo')->where('startdate', '>=', $mytime)->orderBy('startdate', 'DESC')->limit(10)->get();
    $newlead = Event::where('admstatus', '1')->where('status', '1')->where('eventype', 'award')->latest()->paginate(1);

    //$test = Franchise::where('id', '202')->get();
    //dd($awardo);
    //DB::table('cags')->insert([
    //['admstatus' => '1','user_id' =>'1','status' =>'1','name' =>'expo', 'organisation' => 'Buildings India' , 'slug' => 'buildingsindia.png', 'image' => 'Exhibitions India Group' ],

    //$finder = Denco::select('expo_id')->groupBy('expo_id')->get();
    //$categoryo = Denco::select('expo_id')->groupBy('expo_id')->get();
    //$categoryo = Denco::all()->groupBy('expo_id')->count('expo_id');
    //$cate = $categoryo->count();
    //dd($categoryo);

    $finder = Expo::where('admstatus', '1')->where('status', '1')->get();
    $getnamecategoryresult = DB::table('events')
      ->join('dencos', 'dencos.event_id', '=', 'events.id')
      ->join('expos', 'expos.id', '=', 'dencos.expo_id')
      ->select('expos.id as Category', DB::raw('count(events.id) as total'), DB::raw('GROUP_CONCAT(events.eventname) as Eventlo'), DB::raw('GROUP_CONCAT(events.startdate) as Evento'))
      ->orderBy('total', 'desc')
      ->groupBy('expos.id')
      ->get();

    $evento = Event::where('admstatus', '1')->where('status', '1')->where('eventype', 'expo')->wheredate('startdate', '>=', $mytime)->orderBy('startdate', 'ASC')->limit(15)->get();

    $current = Carbon::today();
    $newcurrent = strtotime($current);


    $events = collect();
    if ($this->search || $this->venue) {
      $query = Event::query();

      // Search by name, month, or today’s date
      if ($this->search) {

        $query->where(function ($q) {
          $q->where('eventname', 'like', '%' . $this->search . '%')
            ->orWhereMonth('startdate', 'like', '%' . $this->search . '%')
            ->orWhereDate('startdate', 'like', '%' . $this->search . '%');
        });
      }

      // Filter by venue/location
      if ($this->venue) {
        $query->where('venue', $this->venue);
      }

      $events = $query->get();
    }

    return view('livewire.event-component', ['events' =>  $events, 'newcurrent' =>  $newcurrent, 'evento' => $evento, 'getnamecategoryresult' => $getnamecategoryresult, 'eventD' => $eventD, 'finder' => $finder, 'newlead' => $newlead, 'industry' => $industry, 'evento' => $evento])->layout('layouts.eblog');
  }
}
