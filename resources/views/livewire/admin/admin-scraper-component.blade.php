<main>

<div class="container">
        <form wire:submit.prevent = "scrapeo">
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


<!-- resources/views/livewire/scrape-participants.blade.php -->
<div>
    <button wire:click="scrape"  class="form-control btn btn-primary btn-sm">Scrape Participants</button>

    @if($participantNames)
        <ul>
            @foreach($participantNames as $name)
                <li>{{ $name }}</li>
            @endforeach
        </ul>
    @endif
</div>


</main>