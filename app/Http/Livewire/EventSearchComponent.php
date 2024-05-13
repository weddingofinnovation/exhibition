<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class EventSearchComponent extends Component
{
    public $venue;
    public $city;
    public $country;
    public $time;

    public function mount($venue = null, $city = null, $country = null, $time = null)
    {
        $this->venue = $venue;
        $this->city = $city;
        $this->country = $country;
        $this->time = $time;
    }

    public function render()
    {
        $mytime = Carbon::now();
        
        if($this->country == 'india')
         {
            $searchVenue = Event::where('country', $this->country)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
         }
        
        elseif(!empty($this->venue))
        {
            $searchVenue = Event::where('venue', $this->venue)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
        elseif(!empty($this->city))
        {
            $searchVenue = Event::where('city', $this->city)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
         
        


        // where('enddate', '<', $mytime)->where('country', $this->country)->where('city', $this->city)->
        $mytime = Carbon::now();
        // if($this->sorting =='date'){
        //     $franchises = Event::orderBy('created_at','DESC')->paginate($this->pagesize); 
        // }
        // elseif ($this->sorting =='investment'){
        //     $franchises = Event::orderBy('max_investment','DESC')->paginate($this->pagesize); 
        // }
        // elseif ($this->sorting =='area'){
        //     $franchises = Event::orderBy('max_area','DESC')->paginate($this->pagesize); 
        // }
        // else{
        //     $franchises = Event::paginate($this->pagesize); 
        // }
        //dd($mytime);
        return view('livewire.event-search-component',['searchVenue' => $searchVenue, 'mytime' => $mytime])->layout('layouts.eblog');
    }
}
