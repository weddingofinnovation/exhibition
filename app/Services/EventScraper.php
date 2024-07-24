<?php

namespace App\Services;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;



class EventScraper
{
    protected $client;

    public function __construct()
    {
        $this->client = new client();
    }

    public function scrape($url)
    {
        $response = $this->client->request('GET' , $url );
        $html = $response->getBody()->getContents();

        $crawler = new Crawler($html);

        $eventName = $crawler->filter('.event-name')->text();
        $eventVenue = $crawler->filter('.venue')->text();
        $city = $crawler->filter('.city')->text();
        $country = $crawler->filter('.country')->text();
        $startDate = $crawler->filter('.start-date')->text();
        $endDate = $crawler->filter('.end-date')->text();

        return [

             'event_Name' => $eventName,
             'event_Venue' => $eventVenue,
             'city' => $city,
             'country' => $country,
             'startDate' => $startDate,
             'endDate' => $endDate,

            ];
    }
}