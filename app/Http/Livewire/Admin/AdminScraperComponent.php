<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Services\EventScraper;
use DOMDocument;
use DOMXPath;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class AdminScraperComponent extends Component
{
    //public $url;
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

    public function scrapeo()
    {
        $response = $this->client->request('GET' , $this->url );
        $html = $response->getBody()->getContents();

        $crawler = new Crawler($html);

        $company = $crawler->filter('div[@class="participant-name-class"]')->text();
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

    public $url = 'https://mmiconnect.in/app/exhibition/catalogue/ep2024';
    public $participantNames = [];

    public function scrape()
    {
        // Initialize Guzzle client
        $client = new Client();

        // Send a GET request to the URL
        $response = $client->get($this->url);

        // Get the HTML content of the page
        $html = $response->getBody()->getContents();

        // Load the HTML into DOMDocument
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Suppress warnings due to malformed HTML
        $dom->loadHTML($html);
        libxml_clear_errors();

        // Use DOMXPath to query specific elements (update the XPath query based on the actual page structure)
        $xpath = new DOMXPath($dom);
        $nodes = $xpath->query('//div[@class="participant-name-class"]'); // Replace with the actual XPath query

        // Extract text content from the nodes
        foreach ($nodes as $node) {
            $this->participantNames[] = trim($node->textContent);
        }
    }
    public function render()
    {
        return view('livewire.admin.admin-scraper-component')->layout('layouts.eblog');
    }
}
