<main>
    <div class="container">
        @if($board == 'badge-application-form')
            <div>submit your website get badge</div>
            <form wire:submit.prevent="submit">
                <input type="text" class="form-control" required wire:model="website_url" placeholder="Your Website URL">

                <select class="form-control" type="text"   wire:model.lazy="type"   placeholder="type">
                            <option selected>Choose</option>
                                <option value="strategic">Strategic Partner</option>
                                <option value="space">Space Partner</option>
                            
                </select>

                <button type="submit" class="btn btn-primary form-control">Apply for Badge</button>
            </form>

        @elseif($board == 'badge-code')

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
    </div>
</main>

