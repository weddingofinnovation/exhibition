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
        
        if($this->country != null )
         {
            //$searchVenue = Event::where('country', $this->country)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
            $searchTermCountry = '%'.$this->country. '%';
            $searchVenue = Event::Where('country','LIKE', $searchTermCountry)->where('status','1')->orderBy('eventname','ASC')->get();
         }
        
        elseif($this->venue != null)
        {
            $searchTermVenue = '%'.$this->venue. '%';
            $searchVenue = Event::where('venue', $searchTermVenue)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
        elseif($this->city != null)
        {
            $searchTermCity = '%'.$this->city. '%';
            $searchVenue = Event::where('city', $searchTermCity )->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
         
        $mytime = Carbon::now();
        
        return view('livewire.event-search-component',['searchVenue' => $searchVenue, 'mytime' => $mytime])->layout('layouts.eblog');
    }
}
