<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Category;
use App\Models\Denco;
use App\Models\Event;
use App\Models\Expo;
use App\Models\Franchise;
use App\Models\Mag;
use App\Models\Speaker;
use App\Models\Viewso;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EventComponent extends Component
{
  public $board;
  public $searchoo;

  public $search = '';
  public $venue = '';
  public $venues = [];

  public function mount()
  {
    $this->venues = Event::select('venue')->distinct()->pluck('venue');
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

    $query = Event::query();

    // Search by name, month, or today’s date
    if ($this->search) {
      $query->where('eventname', 'like', '%' . $this->search . '%')
        ->orWhereMonth('startdate', 'like', '%' . $this->search . '%')
        ->orWhereDate('startdate', 'like', '%' . $this->search . '%');
    }

    // Filter by venue/location
    if ($this->venue) {
      $query->where('venue', $this->venue);
    }

    $events = $query->get();

    return view('livewire.event-component', ['events' =>  $events, 'newcurrent' =>  $newcurrent, 'evento' => $evento, 'getnamecategoryresult' => $getnamecategoryresult, 'eventD' => $eventD, 'finder' => $finder, 'newlead' => $newlead, 'industry' => $industry, 'evento' => $evento])->layout('layouts.eblog');
  }
}
