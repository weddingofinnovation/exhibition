<main>
  @if(!empty($searchCat) && count($searchCat) > 0)
    @foreach($searchCat as $franchise)
        {{-- your rendering logic --}} {{$franchise}}
    @endforeach
@else
    <div class="container">Find Some Events</div>
@endif

</main>