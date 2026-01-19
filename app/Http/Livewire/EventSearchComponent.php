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
    
    public $pageTitle;
    public $pageDescription;

    public function index($city)
        {
            $city = strtolower($city);

            switch ($city) {

                case 'delhi':
                    $pageTitle = 'Exhibitions in Delhi 2026 | Upcoming Trade Fairs & Expos';
                    $pageDescription = 'Find upcoming exhibitions in Delhi including trade fairs, business expos, property shows and industry events with venue, dates and exhibitor details.';
                    break;

                case 'chandigarh':
                    $pageTitle = 'Exhibitions in Chandigarh 2026 | Trade Fairs & Events';
                    $pageDescription = 'Explore upcoming exhibitions in Chandigarh such as trade fairs, industrial expos, business events and conferences with complete schedule and venue info.';
                    break;

                case 'chennai':
                    $pageTitle = 'Exhibitions in Chennai 2026 | Upcoming Trade Shows';
                    $pageDescription = 'Discover upcoming exhibitions in Chennai including trade shows, business expos, industry fairs and conferences with venue and date details.';
                    break;

                case 'bangalore':
                    $pageTitle = 'Exhibitions in Bangalore 2026 | Trade Fairs & Expos';
                    $pageDescription = 'Browse upcoming exhibitions in Bangalore featuring technology expos, trade fairs, business events and conferences with full event information.';
                    break;

                case 'mumbai':
                    $pageTitle = 'Exhibitions in Mumbai 2026 | Trade Fairs & Business Expos';
                    $pageDescription = 'Explore upcoming exhibitions in Mumbai including international trade fairs, business expos, startup events and conferences with venue details.';
                    break;

                default:
                    $cityName = ucwords(str_replace('-', ' ', $city));
                    $pageTitle = "Exhibitions in {$city} 2026 | Trade Fairs & Expos";
                    $pageDescription = "Find upcoming exhibitions in {$city} including trade fairs, business expos and industry events with venue and date details.";
                    break;
            }

            return view('exhibitions.index', compact(
                'pageTitle',
                'pageDescription'
            ));
        }


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
