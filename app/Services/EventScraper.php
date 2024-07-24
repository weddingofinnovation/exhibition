<?php

namespace App\Services;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;



class EventScraper
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function scrape($url)
    {
        $response = $this->client->request('GET' , $url );
        $html = $response->getBody()->getContents();

        $crawler = new Crawler($html);

        $events = $crawler->filter('.event-class')->each(function($node){
        return [
            'title' => $node->filter('.event-title')->text(),
            'date' => $node->filter('.event-date')->text(),
            'location' => $node->filter('.event-location')->text(),
            ];
        });

        return $events;
    }
}