<main>

    @if($board = 'badge-application-form')

        <form wire:submit.prevent="submit">
            <input type="text" class="" required wire:model="website_url" placeholder="Your Website URL">
            <input type="text" class="" required wire:model="type" placeholder="Your Website URL">
            <button type="submit" class="btn btn-primary">Apply for Badge</button>
        </form>

    @elseif($board = 'badge-code')

        <div>
            @if($badgeCode)
            <p>Your badge Code is: {{$badgeCode->code}}</p>
            <p>To display our badge on your site, use the following code:</p>
            <pre>
                &lt;a href="https://yourwebsite.com" target="_blank" rel="noopener noreferrer"&gt;
                &lt;img src="https://yourwebsite.com/path/to/badge/logo.png" alt="Trust Partner Badge" /&gt;
                $lt;/a&gt;
            </pre>
            @else
            <p>Invalid or Expired code.</p>
            @endif
        </div>

    @endif

</main>