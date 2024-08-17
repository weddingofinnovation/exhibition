<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Services\EventScraper;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class AdminScraperComponent extends Component
{
    public $url;
    public $scrapedData;

    //protected $eventScraper;

    protected $client;

    public function __construct()
    {
        $this->client = new client();
    }
    // public function __construct($id = null, EventScraper  $eventScraper)
    // {
    //     $this->eventScraper = $eventScraper;
    //     parent::__construct($id);
    // }

    // public function scrape(EventScraper  $eventScraper)
    // {
    //     $this->scrapedData = $eventScraper->scrape($this->url);
        
    // }

    public function scrape()
    {
        $response = $this->client->request('GET' , $this->url );
        $html = $response->getBody()->getContents();

        $crawler = new Crawler($html);

        $company = $crawler->filter('.content-card')->text();
        // $eventVenue = $crawler->filter('.venue')->text();
        // $city = $crawler->filter('.city')->text();
        // $country = $crawler->filter('.country')->text();
        // $startDate = $crawler->filter('.start-date')->text();
        // $endDate = $crawler->filter('.end-date')->text();

        return [

             'company' => $company,
            //  'event_Venue' => $eventVenue,
            //  'city' => $city,
            //  'country' => $country,
            //  'startDate' => $startDate,
            //  'endDate' => $endDate,

            ];
    }

    public function render()
    {
        return view('livewire.admin.admin-scraper-component')->layout('layouts.eblog');
    }
}
