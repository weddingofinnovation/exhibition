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
            $searchVenue = Event::where('country', $this->country)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
         }
        
        elseif($this->venue != null)
        {
            $searchVenue = Event::where('venue', $this->venue)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
        elseif($this->city != null)
        {
            $searchVenue = Event::where('city', $this->city)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
         
        $mytime = Carbon::now();
        
        return view('livewire.event-search-component',['searchVenue' => $searchVenue, 'mytime' => $mytime])->layout('layouts.eblog');
    }
}
