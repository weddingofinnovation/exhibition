<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Services\EventScraper;

class AdminScraperComponent extends Component
{
    public $url;
    public $scrapedData;

    protected $eventScraper;


    public function __construct($id= null, EventScraper  $eventScraper)
    {
        $this->eventScraper = $eventScraper;
        parent::__construct($id);
    }

    public function scrape()
    {
        $this->scrapedData = $this->EventScraper->scrape($this->url);
    }

    public function render()
    {
        return view('livewire.admin.admin-scraper-component')->layout('layouts.eblog');
    }
}
