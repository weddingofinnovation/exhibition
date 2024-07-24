<?php

namespace App\Http\Livewire\Livewire\Admin;

use Livewire\Component;
use App\Services\EventScraper;
use Illuminate\Http\Request;

class AdminScraperComponent extends Component
{
    protected $EventScraper;


    public function __construct(EventScraper  $EventScraper)
    {
        $this->EventScraper = $EventScraper;
    }

    public function scrape (Request $request)
    {
        $url = $request->input('url');
        if(!$url)
        {
            return response()->json(['error' => 'url is required'], 400);
        }

        $data = $this->EventScraper->scrape($url);
        return response()->json($data);
    }

    public function render()
    {
        return view('livewire.livewire.admin.admin-scraper-component');
    }
}
