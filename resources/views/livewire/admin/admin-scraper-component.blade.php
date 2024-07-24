<main>


<form id = "scrape-form">
    <input type="text" class="form-control"  required>
    <button class="form-control" type="submit"> submit</button>
</form>

<div id="results"></div>

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