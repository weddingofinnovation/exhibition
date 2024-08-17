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
            <li>{{ $scrapedData['company'] }}</li>
            
        </ul>
        @endif
</div>

</main>