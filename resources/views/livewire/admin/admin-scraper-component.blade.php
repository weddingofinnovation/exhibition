<main>


<form wire:submit.prevent = "scrape">
    <input type="text" id="url" class="form-control" wire:model="url" required>
    <button class="form-control" type="submit">Scrabe</button>
</form>

@if($scrabedData)
  <h2>Scraped Data</h2>
  <pre>{{json_encode($scrabedData, JSON_PRETTY_PRINT)}}</pre>
@endif

@push('scripts')
    <script>
        $(document).ready(function(){
            $('#scrape-form').on('submit', function(e){
                e.preventDefault();

                let url = $('#url').val();

                $.ajax({
                    url:'/scrape',
                    method: 'POST',
                    data:{
                        url:url,
                        _token:$('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response){
                        $('#results').html('<pre>' + JSON.stringify(response,null, 2)+ '</pre>');
                    },
                    error: function(xhr, status, error){
                        $('#results').html('<p>Error:' + error +  '</p>');
                    }
                });
            });
        });
    </script>
@endpush

</main>