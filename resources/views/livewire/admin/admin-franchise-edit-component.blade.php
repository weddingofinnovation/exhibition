<main>
  <div class="" id="reviews" role="tabpanel">
    <input type="text" class="form-control" placeholder="search" wire:model.lazy="searchTerm">
      <div class="row mb-5 pb-2">
        @if(is_null($searchTerm))

          <div class="container">
          Find Some Events
          </div>  

        @else
          @foreach($searchCat as $franchise)
            <div class="container  ">
              <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                      <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M y')}} </div>
                    @else
                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                      <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M y')}} </div>

                    @endif 
                    <div class="round-circle">{{$franchise -> id}}</div>
                </div>

                <div class="col-7  p-0">
                  <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                    {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                  <div class="text-muted fs-sm text-start">
                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                    @else
                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                    @endif 
                  </div>  
                  <div class="text-muted fs-sm text-start">{{$franchise -> venue}}, {{$franchise -> city}}</div>
                </div>

                <div class="col-3  p-0">
                  
                <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$franchise->id}})"> 
                <i class="bi bi-x me-2"></i></a>
                
                <a class="btn btn-sm btn-primary" href="#" wire:click.prevent="updateInspectionStatus({{$franchise->id}}, '1')">Visit</a>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
  </div>
</main>