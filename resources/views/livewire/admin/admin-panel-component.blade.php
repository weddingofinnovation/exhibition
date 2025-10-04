<main>
       
     <div class="container mt-2">
      <div class="row">
        <div class="col-3">
          <div class="d-flex flex-column p-3 bg-white shadow-sm" style="width: 250px; border-radius: 8px;">
              <!-- Logo & Name -->
              <div class="d-flex align-items-center mb-3">
                  <img src="/your-logo.png" alt="Logo" class="rounded-circle me-2" width="40" height="40">
                  <div>
                      <h6 class="mb-0 fw-bold">The Exhibition Network</h6>
                      <small class="text-muted">60 followers</small>
                  </div>
              </div>

              <!-- Create Button -->
              <button class="btn btn-primary w-100 mb-2">+ Create</button>

              <!-- View as Member -->
              <button class="btn btn-outline-secondary w-100 mb-3">👁 View as member</button>

              <!-- Navigation Menu -->
              <ul class="nav nav-pills flex-column">
                  <li class="nav-item mb-1">
                      <a href="{{route('admin.global')}}" class="nav-link text-dark" style="background-color: #fff;">Dashboard</a>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="{{route('admin.dashboard', ['board' => 'order'])}}" class="nav-link text-dark" style="background-color: #fff;">Leads</a>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="{{route('admin.dashboard', ['board' => 'event'])}}" class="nav-link text-dark" style="background-color: #fff;">Events</a>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="{{route('admin.dashboard', ['board' => 'floor'])}}" class="nav-link text-dark" style="background-color: #fff;">Floor</a>
                  </li>

                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link text-dark" style="background-color: #fff;">Page posts</a>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link active bg-light text-success border-start border-3 border-success">Analytics</a>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link text-dark" style="background-color: #fff;">Feed</a>
                  </li>
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="#" class="nav-link text-dark" style="background-color: #fff;">Activity</a>
                      <span class="badge bg-danger rounded-pill">2</span>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link text-dark" style="background-color: #fff;">Inbox</a>
                  </li>
              </ul>
          </div>

        </div>

        <div class="col-9">
          <div class="my-0">

              <div class="card shadow-sm border-0 mb-2">
                <div class="card-body pb-1 pt-2">
                    <!-- Page Title -->
                    

                    <div class="d-flex justify-content-between align-items-center mb-2">
                      
                      @if($board == 'order')
                        <h4 class="fw-bold mb-2">Leads<small>{{$businessOrder->count()}}</small></h4>
                          <div class="d-flex justify-content-between align-items-center">
                            <input type="search" class="form-control w-auto" placeholder="Search...">
                            <button class="btn btn-primary ml-4">
                                <i class="bi bi-download"></i> Export
                            </button>
                          </div>
                      @elseif($board == 'event')
                          <h4 class="fw-bold mb-2">Events<small>{{$businessOrder->count()}}</small></h4> 
                          <div class="d-flex justify-content-between align-items-center">
                            <input type="search" class="form-control w-auto" placeholder="Search...">
                            <button class="btn btn-primary ml-4">
                                <i class="bi bi-download"></i> Export
                            </button>
                          </div>
                      @elseif($board == 'floor')
                          <h4 class="fw-bold mb-2">Floor</h4> 
                          <div class="d-flex justify-content-between align-items-center">
                            <input type="search" class="form-control w-auto" placeholder="Search...">
                            <button class="btn btn-primary ml-4">
                                <i class="bi bi-download"></i> Export
                            </button>
                          </div>
                      @else
                        <h4 class="fw-bold mb-2">Analytics</h4>
                          <div class="d-flex justify-content-between align-items-center">
                            <input type="date" class="form-control w-auto">
                            <button class="btn btn-primary ml-4">
                                <i class="bi bi-download"></i> Export
                            </button>
                          </div>
                      @endif
                      
                    </div>


                    <!-- Tabs -->
                    <ul class="nav nav-tabs mb-2" id="analyticsTabs">
                      @if($board == 'order')
                        <li class="nav-item">
                            <a class="nav-link active" href="#">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Visitors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Followers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Important</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Email</a>
                        </li>
                        @elseif($board == 'event')
                        <li class="nav-item">
                            <a class="nav-link active" href="#">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Finish</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">upcoming</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Featured</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Today</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Email</a>
                        </li>
                      @else
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Visitors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Followers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Search appearances</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Leads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Competitors</a>
                        </li>
                      @endif
                    </ul>
                </div>
              </div>

              @if($board == 'order')
                @foreach ($businessOrder as $evento)
                  <div class="my-1">
                    <div class="row text-center p-1 gx-0 mb-1 shadow-sm border rounded border-1">

                      <!-- Event Image -->
                      <div class="col-2 p-0">
                        @if($evento->event_id == 'null')
                          {{$evento->type}}
                        @else
                          @php
                            $eventdetails = DB::table('events')->where('id', $evento->event_id)->get();
                          @endphp
                          @foreach($eventdetails as $evet)
                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evet->slug])}}">
                              <img src="{{url('public/assets/image/exhibition/'.$evet->image)}}" 
                                  alt="{{Str::limit($evet->eventname, 24)}}" 
                                  class="img-fluid rounded" 
                                  style="height: 80px; width: auto; object-fit: contain;">
                            </a>
                          @endforeach
                        @endif
                      </div>

                      <!-- Event Info -->
                      <div class="col-7 p-0 text-start">
                        <div class="fs-sm fw-normal">
                          <a class="text-dark" href="">{{$evento->name}}</a>
                          <span class="fs-xs bg-success">{{ $evento->created_at->format('D d M  H:m') }}</span>
                        </div>
                        <div class="fs-sm fw-normal">
                          <a class="text-dark" href="" onclick="makeCall('{{$evento->phone}}')">{{$evento->phone}}</a>
                          <span class="fs-xs bg-danger text-light">{{$evento->type}}</span>
                          <a class="text-dark" href="" onclick="copyToclipboard('{{$evento->phone}}')"><i class="bi bi-plus"></i></a>
                        </div>
                        <div class="text-muted fs-xs">{{$evento->email}}</div>
                      </div>

                      <!-- Status Dropdown -->
                      @php
                        $businesslead = DB::table('business_calledos')->where('lead_id', $evento->id)->latest()->get();
                        $resulto = $businesslead->pluck('response')->first();
                      @endphp
                      <div class="col-3 p-0">
                        @if($businesslead->count() < 1)
                          <a href="#" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown">New</a>
                        @else
                          <a href="#" class="btn btn-outline-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown">{{$resulto}}</a>
                        @endif
                        
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'email')">Email</a></li>
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'exhibitor')">Exhibitor</a></li>
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'visitor')">Visitor</a></li>
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'service')">Service</a></li>
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'check')">Check</a></li>
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'callback')">Callback</a></li>
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'ringing')">Ringing</a></li>
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$evento->id}}, 'Not')">Not</a></li>
                          <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="DeleteCallingStatus({{$evento->id}})">Delete</a></li>
                        </ul>
                      </div>

                    </div>
                  </div>
                @endforeach
              @elseif($board == 'event')
                  <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                    <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab1' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab1')" data-bs-toggle="tab" role="tab">Request {{$expoaward->count()}}</a></li>
                    <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab2' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab2')" data-bs-toggle="tab" role="tab">Monthly {{$monthwise->count()}}</a></li>
                    <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab3' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab3')" data-bs-toggle="tab" role="tab">Search {{$searchCat->count()}}</a></li>
                    <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab4' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab4')" data-bs-toggle="tab" role="tab">ID </a></li>
                    <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab5' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab5')" data-bs-toggle="tab" role="tab">2022 {{$year22ev->count()}}</a></li>
                    <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab6' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab6')" data-bs-toggle="tab" role="tab">2023 {{$year23ev->count()}}</a></li>
                    <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab7' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab7')" data-bs-toggle="tab" role="tab">2024 {{$year24ev->count()}}</a></li>
                    <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab8' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab8')" data-bs-toggle="tab" role="tab">2025 {{$year25ev->count()}}</a></li>
                  </ul>
                  <div class="tab-content pt-1">
                    @if($currentTab === 'tab1')
                      <!-- Request tab-->
                        <div class="tab-pane fade show active" id="requuest" role="tabpanel">
                          <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchTerm">
                            <div class="row mb-5 pb-2">
                              @foreach ($expoaward as $franchise) 
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
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue ?? 'not found'))}}, {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                                    </div>

                                    <!-- <div class="col-3  p-0">
                                      
                                      @if(is_null($franchise->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                                            Add</a>
                                      @else
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      @endif
                                    </div> -->
                                    <div class="col-3 p-0">
                                        @if(is_null($franchise->image))
                                            <a class="card-img-top d-block overflow-hidden" 
                                              href="{{ route('admin.eventMultiEdit', ['event_id' => $franchise->id, 'formm' => 'image' ]) }}">
                                                Add
                                            </a>
                                        @else
                                            <a class="card-img-top d-block overflow-hidden" 
                                              href="{{ route('adminevent.detail', ['slug' => $franchise->slug]) }}">
                                                <img src="{{ url('public/assets/image/exhibition/' . $franchise->image) }}" 
                                                    alt="{{Str::limit($franchise->eventname, 24)}}" 
                                  class="img-fluid rounded" 
                                  style="height: 80px; width: auto; object-fit: contain;">
                                            </a>
                                        @endif
                                    </div>

                                    

                                  </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                        @elseif($currentTab === 'tab2')
                      <!-- Product details tab-->
                        <div class="tab-pane fade show active" id="details" role="tabpanel">
                          <!-- details test tickets-->
                          <div class="d-flex flex-nowrap align-items-center pb-3">
                              <select class="form-select form-select-sm me-2"  wire:model="month">
                                <option>Choose...</option>
                                <option value="01">Jan-01</option>
                                <option value="02">Feb-02</option>
                                <option value="03">Mar-03</option>
                                <option value="04">Apr-04</option>
                                <option value="05">May-05</option>
                                <option value="06">Jun-06</option>
                                <option value="07">Jul-07</option>
                                <option value="08">Aug-08</option>
                                <option value="09">Sep-09</option>
                                <option value="10">Oct-10</option>
                                <option value="11">Nov-11</option>
                                <option value="12">Dec-12</option>
                              </select>
                          </div> 
                          <div class="row mb-5 pb-2">
                            @foreach ($monthwise as $franchise) 
                              <div class="container">
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
                                        <div class="badge bg-secondary fs-xs">
                                          @if (Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y'))
                                              upco
                                          @elseif (Carbon\Carbon::now()->format('d M Y') == Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                              first
                                          @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') < Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                              ongoi
                                          @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') == Carbon\Carbon::parse ($franchise->enddate)->format('d M Y')) 
                                            last
                                          @elseif (Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->startdate)->format('d M Y') && Carbon\Carbon::now()->format('d M Y') > Carbon\Carbon::parse ($franchise->enddate)->format('d M Y'))
                                            ended
                                          @endif
                                        </div>


                                        {{--<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">try</button>--}}
                                  </div>

                                  <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                      {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                    <div class="text-muted fs-sm text-start">
                                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                      @else
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                      @endif 
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{$franchise -> venue}}, {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                                    <div class="text-muted fs-xs text-start"> <span class="bg-primary">  <i class="bi bi-eye"></i> {{$franchise -> view_count}}</span> 
                                    <span class="bg-primary">
                                    @php
                                        $getvalue = $franchise->id;
                                        $countReview = DB::table('rates')->where('event_id', $getvalue)->count()
                                    @endphp
                                      <i class="bi bi-pencil"></i> {{$countReview}}
                                    </span>
                                  </div>
                                  </div>

                                  <!-- <div class="col-3  p-0">
                                    @if(is_null($franchise->image))
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">Add</a>
                                    @else

                                      <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                      <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    @endif
                                  </div> -->
                                  <div class="col-3 p-0">
                                      @if(is_null($franchise->image))
                                          <a class="card-img-top d-block overflow-hidden" 
                                            href="{{ route('admin.eventMultiEdit', ['event_id' => $franchise->id, 'formm' => 'image' ]) }}">
                                              Add
                                          </a>
                                      @else
                                          <a class="card-img-top d-block overflow-hidden" 
                                            href="{{ route('adminevent.detail', ['slug' => $franchise->slug]) }}">
                                              <img src="{{ url('public/assets/image/exhibition/' . $franchise->image) }}" 
                                                   alt="{{Str::limit($franchise->eventname, 24)}}" 
                                  class="img-fluid rounded" 
                                  style="height: 80px; width: auto; object-fit: contain;">
                                          </a>
                                      @endif
                                  </div>

                                </div>
                              </div>
                            @endforeach
                          </div>
                        </div>
                        @elseif($currentTab === 'tab3')
                      <!-- Reviews tab-->
                        <div class="tab-pane fade show active" id="reviews" role="tabpanel">
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
                        @elseif($currentTab === 'tab4')
                      <!--Id-->
                        <div class="tab-pane fade show active" id="reviewID" role="tabpanel">
                          
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="findIDs" aria-label="search with ID" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">  <i class="bi bi-search"></i> </button>
                            </div>

                            <div class="row mb-5 pb-2">
                              @if(is_null($findIDs))
                                <div class=" text-center small"> Not found</div>
                              @else
                                @foreach ($searchId as $franchise) 
                                  <div class="container  ">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                            <div class="h5 fw-light mb-0">{{$franchise->id}}</div> 
                                            <div class="small text-muted">ID </div>
                                            <div class="round-circle">{{$franchise -> id}}</div> 
                                      </div>

                                      <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                          {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                          @endif 
                                        </div>  
                                        <div class="text-muted fs-sm text-start">{{$franchise -> venue ?? 'not found'}}, {{$franchise -> city}}</div>
                                      </div>

                                      <div class="col-3 p-0">
                                          <a href="{{route('admin.eventEdit',['event_id' => $franchise->id, 'board' => 'edit'])}}" class="btn btn-primary btn-sm"> <i class="bi bi-plus-circle"></i> </a>
                                          <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$franchise->id}})"> <i class="bi bi-x me-2"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                @endforeach
                              @endif
                            </div>
                        </div>
                        @elseif($currentTab === 'tab5')
                        <div class="tab-pane fade show active" id="year22find" role="tabpanel">
                            <div class="row mb-5 pb-2">
                              @foreach ($year22ev as $franchise) 
                                <div class="container">
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
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue ?? 'not found'))}}, {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      @if(is_null($franchise->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                                            Add</a>
                                      @else
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}"  alt="{{Str::limit($franchise->eventname, 24)}}" 
                                  class="img-fluid rounded" 
                                  style="height: 80px; width: auto; object-fit: contain;"></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                        @elseif($currentTab === 'tab6')
                        <div class="tab-pane fade show active" id="year23find" role="tabpanel">
                            <div class="row mb-5 pb-2">
                              @foreach ($year23ev as $franchise) 
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
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue ?? 'not found'))}}, {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      @if(is_null($franchise->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                                            Add</a>
                                      @else
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}"  alt="{{Str::limit($franchise->eventname, 24)}}" 
                                  class="img-fluid rounded" 
                                  style="height: 80px; width: auto; object-fit: contain;"></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                        @elseif($currentTab === 'tab7')
                        <div class="tab-pane fade show active" id="year24find" role="tabpanel">
                            <div class="row mb-5 pb-2">
                              @foreach ($year24ev as $franchise) 
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
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue ?? 'not found'))}}, {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      @if(is_null($franchise->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                                            Add</a>
                                      @else
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}"  alt="{{Str::limit($franchise->eventname, 24)}}" 
                                  class="img-fluid rounded" 
                                  style="height: 80px; width: auto; object-fit: contain;"></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                        @elseif($currentTab === 'tab8')
                        <div class="tab-pane fade show active" id="year25find" role="tabpanel">
                            <div class="row mb-5 pb-2">
                              @foreach ($year25ev as $franchise) 
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
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                        @endif 
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue ?? 'not found'))}}, {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                      @if(is_null($franchise->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                                            Add</a>
                                      @else
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}"  alt="{{Str::limit($franchise->eventname, 24)}}" 
                                  class="img-fluid rounded" 
                                  style="height: 80px; width: auto; object-fit: contain;"></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                    @endif
                  </div>
              @elseif($board == 'floor')
                  <div class="con">
                      <h2 class="text-xl font-bold mb-4">Draw Spaces on Floor Plan (Konva.js)</h2>

                      <div id="container" class="border w-full max-w-4xl" style="height:600px;"></div>

                      <div class="mt-4">
                          <input type="text" id="spaceName" placeholder="Enter Space Name" class="border p-2 mr-2">
                          <button id="saveSpaceBtn" class="bg-blue-500 text-white px-4 py-2 rounded">Save Space</button>
                      </div>
                  </div>
              @else
                          <!-- Date Filter + Export -->
                          <div class="card shadow-sm border-0 mb-2">
                            <div class="card-body">

                              <div class="d-flex justify-content-between align-items-center mb-3">
                                  <input type="date" class="form-control w-auto">
                                  <button class="btn btn-primary">
                                      <i class="bi bi-download"></i> Export
                                  </button>
                              </div>

                            </div>
                          </div>

                          <!-- Highlights Card -->
                          <div class="card shadow-sm border-0 mb-4">
                              <div class="card-body">
                                  <h6 class="fw-bold mb-3">Highlights</h6>
                                  <div class="row text-center">
                                      <div class="col">
                                          <h5 class="fw-bold mb-0">201</h5>
                                          <small class="text-muted">Impressions</small>
                                      </div>
                                      <div class="col">
                                          <h5 class="fw-bold mb-0">1</h5>
                                          <small class="text-muted">Reactions</small>
                                      </div>
                                      <div class="col">
                                          <h5 class="fw-bold mb-0">1</h5>
                                          <small class="text-muted">Comments</small>
                                      </div>
                                      <div class="col">
                                          <h5 class="fw-bold mb-0">0</h5>
                                          <small class="text-muted">Reposts</small>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- Metrics Card -->
                          <div class="card shadow-sm border-0">
                              <div class="card-body">
                                  <h6 class="fw-bold mb-3">Metrics</h6>
                                  <select class="form-select w-auto mb-3">
                                      <option>Impressions</option>
                                      <option>Reactions</option>
                                      <option>Comments</option>
                                  </select>
                                  <!-- Graph Placeholder -->
                                  <div class="bg-light rounded p-5 text-center text-muted">
                                      Graph / Chart Area
                                  </div>
                              </div>
                          </div>
              @endif
          </div>
        </div>
      </div>
     </div>
    
</main>