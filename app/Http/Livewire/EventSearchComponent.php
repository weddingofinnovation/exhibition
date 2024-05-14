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

    public function mount($time = null , $venue = null, $city = null, $country = null)
    {
        $this->venue = $venue;
        $this->city = $city;
        $this->country = $country;
        $this->time = $time;
    }

    // public function SearchCountry()
    // {
    //     $searchTermCountry = '%'.$this->country. '%';
    //     $searchVenue = Event::where('country','LIKE', $searchTermCountry)->where('status','1')->orderBy('startdate','desc')->get();
    //     return view('livewire.event-search-component',['searchVenue' => $searchVenue])->layout('layouts.eblog');
    // }


    // public function SearchCity()
    // {
    //     $searchTermCity = '%'.$this->city. '%';
    //     $searchVenue = Event::where('city', $searchTermCity )->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
    //     return view('livewire.event-search-component',['searchVenue' => $searchVenue])->layout('layouts.eblog');
    // }

    public function render()
    {
        $mytime = Carbon::now();
        
        if($this->venue != 'all' || $this->city != 'all' )
        {
            $searchVenue = Event::where('venue', $this->venue)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
        elseif($this->venue == 'all' || $this->city != 'all')
        {
            $searchVenue = Event::where('city', $this->city)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
        elseif($this->venue == 'all' || $this->city == 'all')
        {
            $searchVenue = Event::where('country', $this->country)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }

        
        
        return view('livewire.event-search-component',['searchVenue' => $searchVenue, 'mytime' => $mytime])->layout('layouts.eblog');
    }
}
