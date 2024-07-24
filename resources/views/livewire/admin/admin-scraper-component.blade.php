<main>

<div class="container">
        <form wire:submit.prevent = "scrape">
            <input type="text" id="url" class="form-control" wire:model="url" required>
            <button class="form-control btn btn-primary btn-sm" type="submit">Scrabe</button>
        </form>

        @if($scrapedData)
        <h2>Scraped Data</h2>
        <pre>{{json_encode($scrapedData, JSON_PRETTY_PRINT)}}</pre>
        <ul>
            <li>{{ $scrapedData['event_Name'] }}</li>
            <li>{{ $scrapedData['event_Venue'] }}</li>
            <li>{{ $scrapedData['city'] }}</li>
            <li>{{ $scrapedData['country'] }}</li>
            <li>{{ $scrapedData['startDate'] }}</li>
            <li>{{ $scrapedData['endDate'] }}</li>
        </ul>
        @endif
</div>

</main>