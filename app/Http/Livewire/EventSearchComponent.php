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

    public $pageTitle;
    public $pageDescription;
    public $cityName;

    public function mount($time = null , $venue = null, $city = null, $country = null)
    {
        $this->venue = $venue;
        $this->city = $city;
        $this->country = $country;
        $this->time = $time;

         // ✅ SEO LOGIC HERE (Livewire way)
        if ($this->city !== 'all') {

            $citySlug = strtolower($this->city);
            $this->cityName = ucwords(str_replace('-', ' ', $citySlug));

            switch ($citySlug) {

                case 'delhi':
                    $this->pageTitle = 'Exhibitions in Delhi 2026 | Upcoming Trade Fairs & Expos';
                    $this->pageDescription = 'Find upcoming exhibitions in Delhi including trade fairs, business expos, property shows and industry events with venue, dates and exhibitor details.';
                    break;

                case 'chandigarh':
                    $this->pageTitle = 'Exhibitions in Chandigarh 2026 | Trade Fairs & Events';
                    $this->pageDescription = 'Explore upcoming exhibitions in Chandigarh such as trade fairs, industrial expos, business events and conferences with complete schedule and venue info.';
                    break;

                case 'chennai':
                    $this->pageTitle = 'Exhibitions in Chennai 2026 | Upcoming Trade Shows';
                    $this->pageDescription = 'Discover upcoming exhibitions in Chennai including trade shows, business expos, industry fairs and conferences with venue and date details.';
                    break;

                case 'bangalore':
                    $this->pageTitle = 'Exhibitions in Bangalore 2026 | Trade Fairs & Expos';
                    $this->pageDescription = 'Browse upcoming exhibitions in Bangalore featuring technology expos, trade fairs, business events and conferences with full event information.';
                    break;

                case 'mumbai':
                    $this->pageTitle = 'Exhibitions in Mumbai 2026 | Trade Fairs & Business Expos';
                    $this->pageDescription = 'Explore upcoming exhibitions in Mumbai including international trade fairs, business expos, startup events and conferences with venue details.';
                    break;

                default:
                    $this->pageTitle = "Exhibitions in {$this->cityName} 2026 | Trade Fairs & Expos";
                    $this->pageDescription = "Find upcoming exhibitions in {$this->cityName} including trade fairs, business expos and industry events with venue and date details.";
                    break;
            }

        } else {
            // Default SEO (no city)
            $this->pageTitle = 'Upcoming Exhibitions in India 2026 | Trade Fairs & Expos';
            $this->pageDescription = 'Explore upcoming exhibitions across India including trade fairs, business expos and industry events with venue and date details.';
            $this->cityName = 'India';
        }
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

        if($this->venue != 'all' && $this->city != 'all' )
        {
            //dd('tst1',$this->venue, $this->country, $this->city);
            $searchVenue = Event::where('venue', $this->venue)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
        elseif($this->venue == 'all' && $this->city != 'all')
        {
            //dd('tst2',$this->venue, $this->country, $this->city);
           $searchVenue = Event::where('city', $this->city)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }
        elseif($this->venue == 'all' && $this->city == 'all')
        {
            //dd('tst3',$this->venue, $this->country, $this->city);
            $searchVenue = Event::where('country', $this->country)->where('status', '1')->where('admstatus', '1')->orderBy('startdate','desc')->get();
        }

        return view ('livewire.event-search-component',[ 'searchVenue' => $searchVenue,'mytime' => $mytime])->layout('layouts.eblog');
    }
}
