<main>
  <div class="container"> Mayanksing


  <input type="text" class="form-control" placeholder="search" wire:model.lazy="searchTerm">


      @if(!empty($searchCat) && count($searchCat) > 0)
          
          <ul class="list-group">
              @foreach($this->searchCat as $franchise)
                  <li class="list-group-item p-2">
                      <div class="row text-center gx-0">
                          <div class="col">
                              @if(Carbon\Carbon::parse($franchise->startdate)->format('M') != Carbon\Carbon::parse($franchise->enddate)->format('M'))
                                  <div class="h4 fw-light mb-0">{{ Carbon\Carbon::parse($franchise->startdate)->format('d') }}</div>
                                  <div class="small text-muted">{{ Carbon\Carbon::parse($franchise->startdate)->format('M y') }}</div>
                              @else
                                  <div class="h4 fw-light mb-0">{{ Carbon\Carbon::parse($franchise->startdate)->format('d') }}</div>
                                  <div class="small text-muted">{{ Carbon\Carbon::parse($franchise->startdate)->format('M y') }}</div>
                              @endif
                              <div class="round-circle">{{ $franchise->id }}</div>
                          </div>

                          <div class="col-7 p-0 text-start">
                              <div class="fs-md fw-normal">
                                  <a class="text-dark" href="{{ route('adminevent.detail', ['slug' => $franchise->slug]) }}">
                                      {{ ucwords(Str::limit($franchise->eventname, 24)) }}
                                  </a>
                              </div>
                              <div class="text-muted fs-sm">
                                  @if(Carbon\Carbon::parse($franchise->startdate)->format('M') != Carbon\Carbon::parse($franchise->enddate)->format('M'))
                                      {{ Carbon\Carbon::parse($franchise->startdate)->format('D, d M') }} - {{ Carbon\Carbon::parse($franchise->enddate)->format('D, d M') }}
                                  @else
                                      {{ Carbon\Carbon::parse($franchise->startdate)->format('D, d') }} - {{ Carbon\Carbon::parse($franchise->enddate)->format('D, d M') }}
                                  @endif
                              </div>
                              <div class="text-muted fs-sm">{{ $franchise->venue }}, {{ $franchise->city }}</div>
                          </div>

                          <div class="col-3 p-0 d-flex flex-column justify-content-center">
                              <a class="text-danger mb-1" href="#"
                              onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"
                              wire:click.prevent="eventdelete({{ $franchise->id }})">
                                  <i class="bi bi-x me-2"></i> Delete
                              </a>
                              <a class="btn btn-sm btn-primary" href="#"
                              wire:click.prevent="updateInspectionStatus({{ $franchise->id }}, '1')">
                                  Visit
                              </a>
                          </div>
                      </div>
                  </li>
              @endforeach
          </ul>
          
      @else
          <div class="container">Find Some Events</div>
      @endif
  </div>

</main>