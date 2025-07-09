<main>
  <div class="container"> Mayanksing


  <input type="text" class="form-control" placeholder="search" wire:model.lazy="searchTerm">


      @if(!empty($searchCat) && count($searchCat) > 0)
          @foreach($this->searchCat as $franchise)
          {{-- your rendering logic --}} {{$franchise}}
          @endforeach
      @else
          <div class="container">Find Some Events</div>
      @endif
  </div>

</main>