
@section('page_description','Dashboard')
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')
<main>
     
       
     <div class="container">
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
                      <a href="#" class="nav-link text-dark">Dashboard</a>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link text-dark">Page posts</a>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link active bg-light text-success border-start border-3 border-success">Analytics</a>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link text-dark">Feed</a>
                  </li>
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="#" class="nav-link text-dark">Activity</a>
                      <span class="badge bg-danger rounded-pill">2</span>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link text-dark">Inbox</a>
                  </li>
              </ul>
          </div>

        </div>

        <div class="col-9">
          <div class="my-0">
              <div class="card shadow-sm border-0 mb-2">
                <div class="card-body">
                    <!-- Page Title -->
                    

                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <h4 class="fw-bold mb-2">Analytics</h4>
                      <div class="d-flex justify-content-between align-items-center">
                        <input type="date" class="form-control w-auto">
                        <button class="btn btn-primary">
                            <i class="bi bi-download"></i> Export
                        </button>
                      </div>
                  </div>

                    <!-- Tabs -->
                    <ul class="nav nav-tabs mb-2" id="analyticsTabs">
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
                    </ul>
                </div>
              </div>

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
          </div>
        </div>
      </div>
     </div>
    
      






      <!--Mobile event start View-->      
      @if($board == 'event')   
        <div class="container d-lg-none">  
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="mb-4 mb-lg-5">
                  <!-- Nav tabs-->
                  
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

                                    <div class="col-3  p-0">
                                      @if(is_null($franchise->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                                            Add</a>
                                      @else
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
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

                                  <div class="col-3  p-0">
                                    @if(is_null($franchise->image))
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">Add</a>
                                    @else

                                      <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                      <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
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
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
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
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
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
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
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
                                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            </div>
                        </div>
                    @endif
                  </div>

              </div>
            </div>
          </div>
        </div>
      @endif


      <!-- laptop -->
      @if($board == 'event')
        <div class="container d-none d-md-block">
          
          <div class="row g-1 ">

            <div class="col-sm-3">
                <select class="form-control" type="text"   wire:model.lazy="serachforma"  placeholder="Provide short title of your request">
                <option >Choose</option>
                <option value="expire">Expire</option>
                <option value="ongoing">ongoing</option>
                <option value="ongoing">ongoing</option>
              </select>
            </div>


            <div class="col-sm-3">
              <select class="form-control" type="text"   wire:model.lazy="month"  placeholder="Provide short title of your request">
                <option >Choose</option>
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

            <div class="col-sm-4">
                <input class="form-control" type="text" placeholder="Search ID" wire:model.lazy="searchTerm">
            </div>

          </div>

          @if( $searchforma == "expire")
          
            @php 
                $expiredo = DB::table('events')
                    ->where('status', '1')
                    ->whereYear('startdate', '=', 2025)
                    ->whereDate('enddate', '<', \Carbon\Carbon::now())
                    ->orderBy('enddate', 'desc')
                    ->get();
            @endphp

            
            <div class="row mb-5 pb-2 d-sm-block">
              @foreach ($expiredo as $franchise) 
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

                    <div class="col-3  p-0">
                      @if(is_null($franchise->image))
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">Add</a>
                      @else

                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                      @endif
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          
          @else
            <div class="row">
              <div class="col-6">
                <!-- Left column content -->
                <p>Monthwise</p>
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
                            <div class="text-muted fs-sm text-start">
                              {{$franchise -> venue}}, {{ucfirst(trans($franchise -> city ?? 'not found'))}}
                            </div>

                            <div class="text-muted fs-xs text-start d-flex flex-wrap align-items-center gap-2">

                              <!-- Review Count -->
                              @php
                                  $getvalue = $franchise->id;
                                  $countReview = DB::table('rates')->where('event_id', $getvalue)->count();
                              @endphp
                              {{-- <span class="bg-primary text-white px-2 py-1 rounded">
                                <i class="bi bi-pencil"></i> {{ $countReview }}
                              </span> --}}

                              <a class="navbar-tool d-none d-lg-flex align-items-center" href="dashboard-favorites.html">
                                <span class="navbar-tool-label">{{ $countReview ?? '' }}</span>
                                <span class="navbar-tool-tooltip">views</span>
                                <div class="navbar-tool-icon-box">
                                  <i class="navbar-tool-icon bi bi-pencil"></i>
                                </div>
                              </a>

                              <!-- Action Icons Group (Structured like $upcoming example) -->
                              <a class="navbar-tool d-none d-lg-flex align-items-center" href="dashboard-favorites.html">
                                <span class="navbar-tool-label">{{ $franchise->view_count ?? '' }}</span>
                                <span class="navbar-tool-tooltip">views</span>
                                <div class="navbar-tool-icon-box">
                                  <i class="navbar-tool-icon bi bi-eye"></i>
                                </div>
                              </a>

                            </div>



                          </div>

                          <div class="col-3  p-0">
                            @if(is_null($franchise->image))
                              <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">Add</a>
                            @else

                              <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                              
                              
                              <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" 
                                alt="{{Str::limit($franchise->eventname, 24)}}" 
                                class="img-fluid" 
                                style="max-height: 80px; object-fit: cover; width: 100%;"></a>
                            @endif
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
              </div>

              <div class="col-6">
                <!-- Right column content -->
                <p>Request</p>
                <div class="mb-5 pb-2">
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

                        <div class="col-3  p-0">
                          @if(is_null($franchise->image))
                            <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                                Add</a>
                          @else
                            <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                          @endif
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          @endif

          @if($selectedYear)
            <h4 class="mt-4">Events in {{ $selectedYear }}</h4>
            <ul class="list-group">
              @forelse($eventsByYear as $event)
                <li class="list-group-item">
                  <strong>{{ $event->eventname }}</strong> —
                  {{ \Carbon\Carbon::parse($event->startdate)->format('d M Y') }} to
                  {{ \Carbon\Carbon::parse($event->enddate)->format('d M Y') }}<br>
                  Venue: {{ $event->venue }}, {{ ucfirst($event->city) }}
                </li>
              @empty
                <li class="list-group-item">No events found for {{ $selectedYear }}</li>
              @endforelse
            </ul>
            @endif

        </div>
      @endif
    
      <!--event stop--> 
      @if($board == 'findSearch')
        <div class ="container">
          @foreach($findSearch as $searcho)
            {{$searcho->search}}  | {{$searcho->created_at}}
            <hr>
          @endforeach
        </div>
      @endif

      @if($board == 'visitcard')
          
        <div class=" container small">
            <input type="checkbox" value="1" wire:model="lookingAddFromIMage" name="" id=""> Search
        </div>

        @if($lookingAddFromIMage == 1)
                  <div class="container">
                      <div class="fs-md">Update Contact Card</div>
                      <form wire:submit.prevent="directbrandBcontact">
                          <input type="text" class="form-control" placeholder="organisation" wire:model.lazy="organisation">
                          <input type="text" class="form-control" placeholder="brand_name" wire:model.lazy="brand_name">
                          
                          <input type="text" class="form-control" placeholder="industry" wire:model.lazy="industry">
                          
                          <input type="text" class="form-control" placeholder="name" wire:model.lazy="name">
                          <input type="text" class="form-control" placeholder="designation" wire:model.lazy="designation">
                          <input type="number" class="form-control" placeholder="phone" wire:model.lazy="phone">
                          <input type="email" class="form-control" placeholder="email" wire:model.lazy="email">
                          
                          <button class="form-control  btn btn-primary" type="submit">Submit</button>
                      </form>
                  </div>
        
                  <div class="container my-5">
                      <div class="fs-md">
                      Contact details 
                      </div>
                          @foreach ($getContact as $franchise) 
                              <div class="">
                                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          <div class="h4 fw-light mb-0"> 1 </div> 
                                          <div class="small text-muted">chk</div>
                                          <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                      </div>

                                      <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                          {{$franchise->name}} {{$franchise->designation}}</a></div>
                                      <div class="text-muted fs-sm text-start">
                                          {{$franchise->email}}
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                          {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                              <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                              
                                          {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                              <i class="bi bi-chevron-double-right"></i></a> 
                                              <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}
                                              <a class="btn btn-primary btn-sm" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="del({{$franchise->id}})"> <i class="bi bi-x"></i>
                                             </a>

                                              <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="detecto({{$franchise->id}})"> 
                                                <i class="bi bi-plus"></i>
                                              </a>
                                          </div>
                                  </div>
                              </div>
                          @endforeach
                  </div>

        @else
           <div class="container mt-5">
              <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchBrandTerm">
              
              <div class="row mb-5 pb-2">
                @if(is_null($searchBrandTerm))

                  <div class="container">
                    Find Some Events
                  </div>  

                @else

                  @if($searchBrandcat->count() == 0)
                   
                    <div class="container">
                      <div class="fs-md">Update Contact Card</div>
                      <form wire:submit.prevent="directbrandBcontact">
                          <input type="text" class="form-control" placeholder="organisation" wire:model.lazy="organisation">
                          <input type="text" class="form-control" placeholder="brand_name" wire:model.lazy="brand_name">
                          
                          <input type="text" class="form-control" placeholder="industry" wire:model.lazy="industry">
                          
                          <input type="text" class="form-control" placeholder="name" wire:model.lazy="name">
                          <input type="text" class="form-control" placeholder="designation" wire:model.lazy="designation">
                          <input type="number" class="form-control" placeholder="phone" wire:model.lazy="phone">
                          <input type="email" class="form-control" placeholder="email" wire:model.lazy="email">
                          
                          <button class="form-control  btn btn-primary" type="submit">Submit</button>
                      </form>
                    </div>
          
                    <div class="container my-5">
                        <div class="fs-md">
                        Contact details 
                        </div>
                            @foreach ($getContact as $franchise) 
                                <div class="">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                        <div class="col  pr-0">
                                        
                                            <div class="h4 fw-light mb-0"> 1 </div> 
                                            <div class="small text-muted">chk </div>
                                            
                                            <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                        </div>

                                        <div class="col-7  p-0">
                                          <div class="fs-md fw-normal text-start">
                                            <a class="text-dark" href="#">{{$franchise->name}} {{$franchise->designation}}</a>
                                          </div>
                                          <div class="text-muted fs-sm text-start">
                                              {{$franchise->email}}
                                          </div>  
                                          <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                                        </div>

                                        <div class="col-3  p-0">
                                            {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                                <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                                
                                            {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                                <i class="bi bi-chevron-double-right"></i></a> 
                                                <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}
                                                <a class="btn btn-primary btn-sm" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="del({{$franchise->id}})"> <i class="bi bi-x"></i>
                                             </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>

                  @else

                    @foreach ($searchBrandcat as $franchiseo) 
                        <div class="">
                          <div class="fw-light h5 mb-0 pb-0">{{$franchiseo -> brand_name}}</div>
                          <div class="small text-muted fw-bold">{{$franchiseo -> organisation}}</div>
                            
                          @php
                            $findBcontact = DB::table('bcontacts')->where('brand_id', $franchiseo -> id)->get();
                          @endphp

                          @if($findBcontact->count() == 0)
                            <h3 class="fw-light h5 mb-0 pb-0">Add Contact</h3>
                            <a href="{{route('admin.brandDetail',['brand_id' => $franchiseo->id])}}" class="btn btn-primary btn-sm">NO More Reference</a>

                          @else

                          <a href="{{route('admin.brandDetail',['brand_id' => $franchiseo->id])}}" class="btn btn-primary btn-sm">Add</a>
                            @foreach($findBcontact as $franchise)
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                    
                                        <div class="h4 fw-light mb-0"> 1 </div> 
                                        <div class="small text-muted">chk</div>
                                        
                                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    </div>

                                    <div class="col-7  p-0">
                                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                          {{$franchise->name}}  <span class="badge badge-primary">{{$franchise->designation}}</span> </a></div>
                                      <div class="text-muted fs-sm text-start">
                                          {{$franchise->email}}
                                      </div>  
                                      <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                        {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                            <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                            
                                        {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <i class="bi bi-chevron-double-right"></i></a> 
                                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}

                                            <a class="btn btn-primary btn-sm" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="del({{$franchise->id}})"> <i class="bi bi-x"></i>
                                              </a>
                                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="detecto({{$franchiseo->id}},'update')">
                                                  <i class="bi bi-plus"></i></a>
                                    </div>
                                </div>
                            @endforeach
                          @endif
                        </div>

                        <hr class="">
                    @endforeach

                  @endif

                @endif
              </div>
            </div>
        @endif
      @endif

      <!--Start job -->
      @if($board == 'job')
        <div class="container d-lg-none">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              
              <div class="mb-4 mb-lg-5">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm active" href="#jobrequuest" data-bs-toggle="tab" role="tab">Job</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm " href="#Appletdetails" data-bs-toggle="tab" role="tab">Applet</a></li>
                </ul>

                    
                  <div class="tab-content pt-1">
                      <!-- Request tab-->
                      <div class="tab-pane fade show active" id="jobrequuest" role="tabpanel">
                        <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchTerm">
                          <div class="row mb-5 pb-2">
                            @foreach ($jobs as $franchise) 
                              <div class="container  ">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col  pr-0">
                                     
                                        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->updated_at)->format('d')}}</div> 
                                        <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->updated_at)->format('M')}} </div>
                                     
                                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                  </div>

                                  <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('admin.job',['slug' => $franchise->slug])}}">
                                      {{ucwords(trans(Str::limit($franchise->title, 24)))}}</a></div>
                                    <div class="text-muted fs-sm text-start">
                                     
                                        {{Carbon\Carbon::parse ($franchise->updated_at)->format('D, d M')}}
                                     
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> location_state))}}, {{ucfirst(trans($franchise -> location_country))}}</div>
                                  </div>

                                  <div class="col-3  p-0">
                                   {{-- <a class="card-img-top d-block overflow-hidden" href="{{route('admin.job',['slug' => $franchise->slug])}}">
                                        <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                  </div>
                                </div>
                              </div>
                            @endforeach
                          </div>
                      </div>
                  
                      
                  </div>

              </div>
            </div>
          </div>
        </div>
    
        <!--desktop version-->
        <div class="continer d-none d-sm-block">
          <div class="table-responsive fs-md mb-4">
            <table class="table table-hover mb-0">
                    <thead>
                      <tr> <th>#</th>
                      <th>title:slug:type</th>
                      <th>skills:level</th>
                      <th>desc:req</th>
                      <th>qual:exp.</th>
                      <th>Status</th>
                      <th>Action</th></tr>
                    </thead>
                    <tbody>
                      <!--<tr>
                        <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                        <td class="py-3">09/27/2019 | 09/30/2019</td>
                        <td class="py-3">Website problem</td>
                        <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                        <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                      </tr>--> 
                    
                        @foreach ($jobs as $info)
                          <tr><td class="py-3 align-middle">{{$info->id}}</td>
                            <td class="py-3 align-middle"><span class="align-middle badge bg-info ms-2">{{$info->title}},{{$info->department}}<br>{{$info->experience}},{{$info->type}}<br>{{$info->location_state}},{{$info->location_country}}</span></td>
                            <td class="py-3 align-middle fw-sm">{{Str::limit($info->skills, 25)}}<br>{{$info->level}}</td>
                            <td class="py-3 align-middle fw-sm">{{Str::limit($info->description, 25)}}<br>{{Str::limit($info->requirement, 25)}}</td>
                            <td class="py-3 align-middle fw-sm"><span class="align-middle badge  bg-info ms-2">{{$info->qualification}}<br></span></td>
                            <td class="py-3 align-middle">
                              @if($info->status == 'active')
                                <span class="badge bg-success m-0">Active</span>
                                @else
                                <span class="badge bg-danger m-0">Deactive</span>
                              @endif </td>
                            <td class="py-3 align-middle"><a class=" nav-link-style me-2"  data-bs-toggle="tooltip" title="" data-bs-original-title="Edit" aria-label="Edit"><i class="bi bi-pencil"></i></a><a class="nav-link-style  me-2 text-danger" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$info->id}})" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove">
                                <div class=" bi bi-x"></div></a> </td></tr>
                        @endforeach          
                    
                    </tbody>
            </table>
          </div>
        </div>
      @endif
      <!--Stop job -->

      <!--Stop blog -->
      @if($board == 'blog')
        <div class="container d-lg-none">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              
              <div class="mb-4 mb-lg-5">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                  <li class="nav-item border-bottom"><a class="nav-link px-1  fs-sm" href="#requuest" data-bs-toggle="tab" role="tab">Request</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#details" data-bs-toggle="tab" role="tab">Monthly</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm active" href="#blog" data-bs-toggle="tab" role="tab">blog</a></li>
                </ul>


                  <div class="tab-content pt-1">
                    <!-- Request tab-->
                      <div class="tab-pane fade show active" id="blog" role="tabpanel">
                        <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchTerm">
                          <div class="row mb-5 pb-2">
                            @foreach ($blogfindo as $franchise) 
                              <div class="container  ">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col  pr-0">
                                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                        <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                      @else
                                        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                        <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                      @endif 
                                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                  </div>

                                  <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('admin.blogdashboard',['blog_id' => $franchise -> id , 'board' => 'all'])}}">
                                      {{ucwords(trans(Str::limit($franchise->tittle, 24)))}}</a></div>
                                    <div class="text-muted fs-sm text-start">
                                    {{ucwords(trans(Str::limit($franchise->desc, 24)))}}
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{ucwords(trans(Str::limit($franchise->s_desc, 24)))}}</div>
                                    @if($category->count() == 0)
                       
                            <a href="{{route('admin.editcategories',['event_id' => $franchise->id])}}" class="badge bg-primary mt-0">
                              no category</a>
                        
                        @else
                          @foreach($category as $cat)
                             
                              @php
                                  $categ = DB::table('expos')->where('id', $cat->expo_id)->get();
                              @endphp
                              @foreach($categ as $ficateg)
                               <span class="badge bg-primary mt-0">{{$ficateg->tag}}</span>
                              @endforeach
                          @endforeach
                        @endif
                                  </div>

                                  <div class="col-3  p-0">
                                    <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="bloGdelete({{$franchise->id}})"> 
                                    <i class="bi bi-x me-2"></i></a>
                                    @if(is_null($franchise->image))
                                      {{--<a class="card-img-top d-block overflow-hidden" href="{{route('admin.blogpost',['blog_id' => $franchise->id, 'board' => 'image' ])}}">
                                          Add</a>--}}
                                    @else
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                                      <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            @endforeach
                          </div>
                      </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
      @endif
      <!--Stop blog-->

      <!-- Start Cleint-->
      @if($board == 'client')
          <div class="container">
            @foreach($findInspection as $franchise)
              
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
                            end
                          @endif
                        </div>


                        {{--<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">try</button>--}}
                  </div>

                  <div class="col-7  p-0"> 
                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                      {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                    <div class="text-muted fs-sm text-start">
                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M You')}}
                      @else
                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                      @endif 
                    </div>  
                    <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue ?? 'not found'))}}, {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
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

                  <div class="col-3  p-0">
                    @if(is_null($franchise->image))
                      <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">Add</a>
                      <a class="card-img-top d-block overflow-hidden" href="{{route('admin.multipartners',['event_id' => $franchise->id, 'formm' => 'client' ])}}">Meetups</a>
                    @else

                      <a class="card-img-top d-block overflow-hidden" href="{{route('admin.multipartners',['event_id' => $franchise->id, 'formm' => 'client' ])}}">
                      <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                    @endif
                  </div>
                </div>
              
            @endforeach
        </div>
      @endif
      <!--Stop Client-->

      @if($board == "msme")
          @php 
            
              $findmsme = DB::table('associations')
                  ->where('reference_id', 1)
                  ->pluck('event_id'); // just association IDs

              $events = DB::table('events')
                  ->whereIn('id', $findmsme)
                  ->get();

          @endphp

          

        <div class="container">
        
          <div class="row mb-5 pb-2">
            @foreach ($events as $franchise) 
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
                      <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                    @endif
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endif



      @if($board == 'magazine')
        <div class="container">
          <a class="btn btn-primary" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">List Magazine</a>
        </div>
        
        @foreach ($magazine as $evento)
          <div class="container my-3">
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    <div class="h4 fw-light mb-0">18</div> 
                    <div class="small text-muted">Jul</div>
                    <div class="round-circle">1</div> 
                </div>

                <div class="col-7  p-0">
                  <div class="fs-md fw-normal text-start">
                    <a class="text-dark" href="{{route('admin.magazinedetails',['magazine_id' => $evento->id])}}">
                      {{ucwords(trans(Str::limit($evento->name, 24)))}}
                    </a>
                  </div>
                  <div class="text-muted fs-sm text-start">
                      
                  </div>  
                  <div class="text-muted fs-sm text-start"></div>
                </div>

                <div class="col-3  p-0">
                    @if(is_null($evento->image))
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine', ['slug' => $evento->slug, 'formm' => 'image'])}}">Add</a>
                        <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Magazinedelete({{$evento->id}})">  <i class="bi bi-x"></i> </a>
                        @else
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine', ['slug' => $evento->slug, 'formm' => 'multiimage'])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->name, 24)}}">
                        </a>
                        <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Magazinedelete({{$evento->id}})">  <i class="bi bi-x"></i> </a>
                    @endif
                </div>
            </div>
          </div>
        @endforeach

      @endif

      @if($board == 'add-magazine')     
        <div class="container">
          <p>List your Business Magazine</p>
            <form wire:submit.prevent="added">
             <input type="text" class="form-control mb-1"  placeholder = "name"  wire:model.lazy="name" >
             <input type="text" class="form-control mb-1"  placeholder = "type"  wire:model.lazy="type" >
             <input type="text" class="form-control mb-1"  placeholder = "subscriber"  wire:model.lazy="subscriber" >
             <textarea type="text" class="form-control mb-1"  placeholder = "desc" rows="3" wire:model.lazy="desc" > </textarea>
             <input type="text" class="form-control mb-1"  placeholder = "frequency"  wire:model.lazy="frequency" >

             <div class="col-sm-3">
                  <label class="form-label" for="seniority">Find Organiser</label>
                  <select class="form-control" type="text" wire:model.lazy="brand_id"  placeholder="Provide short title of your request">
                  <option >Choose</option>
                      @foreach($findoorganizer as $organiserowner)
                          <option value="{{$organiserowner->id}}">{{$organiserowner->brand_name}}</option>
                      @endforeach                        
                  </select>
                  @error('brand_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
              </div>

             <button class="btn btn-primary form-control mt-2" type="submit">Submit</button>
            </form>
        </div>
      @endif

      @if($board == 'image-magazine')
        <div class="container">
          <form wire:submit.prevent = "image">
          <input type="file" class="form-control mb-1"  placeholder = "image"  wire:model="image" >
            <div class="btn btn-primary form-control mb-1">Submit</div>
          </form>
        </div>
      @endif

      @if($board == 'review')     
        <div class="container">
          <p>List your Statement</p>

          <form wire:submit.prevent = "createStatement">
             <textarea class="form-control" type="text" rows="9" wire:model.lazy = "businessstatement"></textarea>
             <button type="submit" class="form-control"  >Submit</button>
           </form>
        

        @foreach($nEwComment as $comment)
       
          <div class="bg-secondary mb-2 lh-1 fs-sm" >
            {{$comment ->statement}}
        
          <a class="btn btn-primary btn-sm" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Reviewdelet({{$comment->id}})"> Delete</a>
        </div>
       
        @endforeach
        </div>
      @endif

      @if($board == 'crowd')     
        <div>
          <p>create user</p>

           <form wire:submit.prevent="tryingfaker">
             <input type="number" wire:model="howMany">
             <button type="submit">Submit</button>
           </form>

        </div>
      @endif
     
      @if($board == 'visitor')
        @foreach ($visitors as $evento)
          <div class="container my-3">
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                  
                      <div class="p fw-light mb-0">{{$evento->utype}}</div> 
                      <div class="small text-muted">{{$evento->id}}</div>
                    
                    @if(is_null($evento->email_verified_at))   
                        <div class="round-circle">0</div> 
                      @else
                        <div class="round-circle">1</div> 
                    @endif
                    
                </div>

                <div class="col-7  p-0">
                  <div class="fs-md fw-normal text-start">
                    <a class="text-dark" href="">
                      {{ucwords(trans(Str::limit($evento->name ?? 'null')))}}
                    </a>
                  </div>
                  <div class="text-muted fs-sm text-start">
                      {{$evento->email}} <br>
                      @if(is_null($evento->email_verified_at)) 
                      <span class="fs-xs bg-success">{{ $evento->created_at}}</span>
                      @else
                      
                      <span class="fs-xs">{{ $evento->email_verified_at}}</span>
                      @endif
                  </div>  
                  <div class="text-muted fs-sm text-start"></div>
                </div>

                <div class="col-3  p-0">
                    {{--@if(is_null($evento->image))
                            <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine',['slug' => $evento->slug, 'formm' => 'image' ])}}">Add</a>
                          @else
                          <a class="card-img-top d-block overflow-hidden" href="">
                          <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->name, 24)}}"></a>
                        @endif--}}
                    <span>
                      <a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{$evento->utype}}</a>
                     
                      <ul class="dropdown-menu" width="auto">

                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'ADM')">ADM</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'SLR')">SLR</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'MSR')">MSR</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'EMP')">EMP</a></li>
                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateVisitorStatus({{$evento->id}}, 'USR')">USR</a></li>
                      
                      </ul>

                    </span>
                </div>
            </div>
          </div>
        @endforeach
      @endif

      @if($board == 'createhashtagss')
          <div class="container">
            <form wire:submit.prevent="addHastag">
                <div class="col-sm-6 mb-3">
                    <label class="form-label" for="unp-standard-price">Create Hashtag 
                    </label>
                    <div class="input-group">
                    <textarea class="form-control" type="text" rows="5" wire:model.lazy="hastag"></textarea>
                    </div>
                    @error('hastag')
                    <div class="form-text">Create hashtag, separate with comma </div>
                    <div class="form-text">{{$message}}</div>
                    @enderror
                </div>
                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
            </form>

            <div>
              <span class="badge">#{{$hastag}}</span> 
            </div>

            <div class="d-flex badgeseTag pb-2">
                @foreach($hastago as $cat)
                    <span class="badge border border-1 text-right border-dark text-dark mr-1">{{$cat->hastag}}
                        <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Hashdelete({{$cat->id}})"> <i class="bi bi-x me-2"></i> </a> 
                    </span>
                @endforeach
            </div>
          </div>
      @endif

      @if($board == 'createShtDesc')
        <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
          <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab10' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab10')" data-bs-toggle="tab" role="tab">new</a></li>
          <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab20' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab20')" data-bs-toggle="tab" role="tab">2023 {{$year23ev->count()}}</a></li>
          <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab30' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab30')" data-bs-toggle="tab" role="tab">2024 {{$year24ev->count()}}</a></li>
          <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm {{$currentTab === 'tab40' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab40')" data-bs-toggle="tab" role="tab">2025 {{$year25ev->count()}}</a></li>
        </ul>

        <div class="tab-content pt-1">
          <!-- Request tab-->
          @if($currentTab === 'tab10')
            <div class="tab-pane show active" role="tabpanel">
              <!-- new 2024 2025 2023-->
              <div class="container">
                <div class="row mb-5 pb-2">

                  @foreach ($eventShtdesc as $franchise) 

                    <div class="fs-sm fw-normal">{{$franchise->shtdesc}}</div>
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
                            <div class="text-muted fs-sm text-start">
                              @if(is_null($franchise -> venue) )
                              
                              @else
                              {{ucfirst(trans($franchise -> venue ?? 'not found'))}}
                              @endif
                            , {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                          </div>

                          <div class="col-3  p-0">
                            @if(is_null($franchise->image))  
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                                  Auto</a>
                            @else
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                              <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            @endif
                          </div>
                        </div>
                      </div>
                    

                  @endforeach

                </div>
              </div>
            </div>
          @elseif($currentTab === 'tab20')
            <div class="tab-pane show active" role="tabpanel">
              <!-- eventShtdesc2025Year -->
              <div class="container">
                <div class="row mb-5 pb-2">

                  @foreach ($eventShtdesc2023Year as $franchise) 

                  <div class="fs-sm fw-normal">{{$franchise->shtdesc}}</div>
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
                            <div class="text-muted fs-sm text-start">
                              @if(is_null($franchise -> venue) )
                              
                              @else
                              {{ucfirst(trans($franchise -> venue ?? 'not found'))}}
                              @endif
                            , {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                          </div>

                          <div class="col-3  p-0">
                            @if(is_null($franchise->image))  
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                                  Auto</a>
                            @else
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                              <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            @endif
                          </div>
                        </div>
                      </div>
                    

                  @endforeach

                </div>
              </div>
            </div>
          @elseif($currentTab === 'tab30')
            <div class="tab-pane show active" role="tabpanel">
              <!-- eventShtdesc2024Year -->
              <div class="container">
                <div class="row mb-5 pb-2">

                  @foreach ($eventShtdesc2024Year as $franchise) 

                  <div class="fs-sm fw-normal">{{$franchise->shtdesc}}</div>
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
                            <div class="text-muted fs-sm text-start">
                              @if(is_null($franchise -> venue) )
                              
                              @else
                              {{ucfirst(trans($franchise -> venue ?? 'not found'))}}
                              @endif
                            , {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                          </div>

                          <div class="col-3  p-0">
                            @if(is_null($franchise->image))  
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                                  Auto</a>
                            @else
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                              <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            @endif
                          </div>
                        </div>
                      </div>
                    

                  @endforeach

                </div>
              </div>
            </div>
          @elseif($currentTab === 'tab40')
            <div class="tab-pane show active" role="tabpanel">
              <!-- eventShtdesc2023Year -->
              <div class="container">
                <div class="row mb-5 pb-2">

                  @foreach ($eventShtdesc2025Year as $franchise) 

                  <div class="fs-sm fw-normal">{{$franchise->shtdesc}}</div>
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
                            <div class="text-muted fs-sm text-start">
                              @if(is_null($franchise -> venue) )
                              
                              @else
                              {{ucfirst(trans($franchise -> venue ?? 'not found'))}}
                              @endif
                            , {{ucfirst(trans($franchise -> city ?? 'not found'))}}</div>
                          </div>

                          <div class="col-3  p-0">
                            @if(is_null($franchise->image))  
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                                  Auto</a>
                            @else
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent="CreateAutoDesc({{$franchise->id}})">
                              <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            @endif
                          </div>
                        </div>
                      </div>
                    

                  @endforeach

                </div>
              </div>
            </div>
          @endif
        </div>
      @endif

      @if($board == 'upgradeContent')

        upgrade Error
        <div class="col-lg-8 col-sm-7 ">
            <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
            <a  class="btn btn-primary">Search</a>
        </div>
        
        <div class=" border-0">
              @foreach($resultAdded as $resultAdd)
                 @php
                   $findcountevent = DB::table('dencos')->where('expo_id', $resultAdd->id)->count()
                 @endphp
                 
                <a class="badge bg-success m-0 border-1 text-right border-dark text-dark mr-1" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="eventodelete({{$resultAdd->id}})">
                {{$resultAdd -> tag}} {{$findcountevent}}<i class="bi bi-x me-2"></i></a>
              @endforeach
        </div>


        <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="Upgrade"> upgrade</a>
      @endif

      @if($board == 'multiple_images')
        <div class=" container my-3">
          <form wire:submit.prevent="multiImage">
            <label class="form-label">Upload Multi Image<span class="text-danger">*</span></label> 
              <input type="file" class="form-control" placeholder="multiple Image" wire:model="brand_lgo"  multiple="multiple">
              <button class="btn btn-primary btn-shadow d-block w-100 mt-2"  type="submit">Submit</button>
          </form>  

          <hr> find Images
            @foreach($photos as $imgo)
              <div class="container">
                  <img src="{{url('public/assets/image/exhibition/'.$imgo->brand_lgo)}}" width="50%" alt="">
                  <a href="" wire:click.prevent="delphoto({{$imgo->id}})"><i class="bi bi-x"></i> </a>
              </div>
            @endforeach  
        </div>
      @endif

      @if($board == 'fabrication_multiple_images')
        <div class=" container my-3">
          <form wire:submit.prevent="fabricationmultiImage">
            <label class="form-label">Upload Multi Image<span class="text-danger">*</span></label> 
              <input type="file" class="form-control" placeholder="multiple Image" wire:model="brand_lgo"  multiple="multiple">
              <button class="btn btn-primary btn-shadow d-block w-100 mt-2"  type="submit">Submit</button>
          </form>  
        </div>
        @php 
          $photos = DB::table('photos')->where('usago', 'fabric')->get();
        @endphp
        <hr> find Images
            @foreach($photos as $imgo)
              <div class="container">
                  <img src="{{url('public/assets/image/exhibition/'.$imgo->brand_lgo)}}" width="50%" alt="">
                  <a href="" wire:click.prevent="delphoto({{$imgo->id}})"><i class="bi bi-x"></i> </a>
              </div>
            @endforeach  
      @endif


      @if($board == 'viewso')

          <div class="d-table table-layout-fixed w-100"> 
  
          {{--<div>{{$descRankingViews->pluck('view_count')->sum()}} T.Views</div>
                <div>R.Event/{{$descRankingViews->count()}}T.event</div>--}}
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" 
                  href="{{route('admin.dashboard',['board' => 'event'])}}">
                    <span class="handheld-toolbar-icon">
                    {{$descRankingViews->pluck('view_count')->sum()}}</span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}"> T.Views</span>
                  </a>
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" 
                  href="{{route('admin.dashboard',['board' => 'event'])}}">
                    <span class="handheld-toolbar-icon">
                    {{$descRankingViews->count()}}</span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}"> T.Event</span>
                  </a>
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" 
                  href="#" value="1" wire:model="$board">
                    <span class="handheld-toolbar-icon">
                    {{$upcomingViews->count()}}</span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}"> Upcoming</span>
                  </a>
          </div>
       
            @foreach( $upcomingViews as $franchise)
                <div class="container">
                        

                @if($franchise->updated_at->format("Y-m-d") == $mytime)
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col bg-dark pr-0">
                          <div class="fs-xs  fw-light mb-0">
                        

                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                          @endphp
                          

                          @if ($current < $to && $current < $from)
                            upcom
                            @elseif ($current == $to && $current < $from) 
                                first
                            @elseif ($current > $to && $current < $from) 
                                ongoi
                            @elseif ($current > $to && $current == $from) 
                              last 
                            @elseif ($current > $to && $current > $from)
                              ended
                          @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
                    </div>

                    <div class="col-7  p-0">
                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                      </div>
                      <div class="text-muted fs-sm text-start">
                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @endif 
                      </div>  
                      <div class="text-muted fs-sm text-start">
                        @if($category->count() == 0)
                       
                            <a href="{{route('admin.editcategories',['event_id' => $franchise->id])}}" class="badge bg-primary mt-0">
                              no category</a>
                        
                        @else
                          @foreach($category as $cat)
                             
                              @php
                                  $categ = DB::table('expos')->where('id', $cat->expo_id)->get();
                              @endphp
                              @foreach($categ as $ficateg)
                              <span class="badge bg-primary mt-0">{{$ficateg->tag}}</span>
                              @endforeach
                          @endforeach
                        @endif
                      </div>
                    </div>

                    <div class="col-3  p-0">
                      @if(is_null($franchise->image))
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                            Add</a>
                      @else
                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                      @endif
                    </div>
                  </div>
                @else
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                          <div class="fs-xs fw-light mb-0">
                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                          @endphp
                          

                          @if ($current < $to && $current < $from)
                            upcom
                            @elseif ($current == $to && $current < $from) 
                                first
                            @elseif ($current > $to && $current < $from) 
                                ongoi
                            @elseif ($current > $to && $current == $from) 
                              last 
                            @elseif ($current > $to && $current > $from)
                              ended
                            @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
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
                      
                    </div>

                    <div class="col-3  p-0">
                      @if(is_null($franchise->image))
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                            Add</a>
                      @else
                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                      @endif
                    </div>
                  </div>
                @endif

                </div>
            @endforeach

            @foreach( $descRankingViews as $franchise)
                <div class="container">
                        

                @if($franchise->updated_at->format("Y-m-d") == $mytime)
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col bg-dark pr-0">
                          <div class="fs-xs  fw-light mb-0">
                        

                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                          @endphp
                          

                          @if ($current < $to && $current < $from)
                            upcom
                            @elseif ($current == $to && $current < $from) 
                                first
                            @elseif ($current > $to && $current < $from) 
                                ongoi
                            @elseif ($current > $to && $current == $from) 
                              last 
                            @elseif ($current > $to && $current > $from)
                              ended
                          @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
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
                      
                    </div>

                    <div class="col-3  p-0">
                      @if(is_null($franchise->image))
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                            Add</a>
                      @else
                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                      @endif
                    </div>
                  </div>
                @else
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                          <div class="fs-xs fw-light mb-0">
                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                              $category = DB::table('dencos')->where('event_id', $franchise->id)->get();
                          @endphp
                          

                            @if ($current < $to && $current < $from)
                                <span class="text-light">upcom</span>
                              @elseif ($current == $to && $current < $from) 
                              <span class="text-light">first</span>
                              @elseif ($current > $to && $current < $from) 
                              <span class="text-light">ongoi</span>
                              @elseif ($current > $to && $current == $from) 
                              <span class="text-light">last</span>
                              @elseif ($current > $to && $current > $from)
                              <span class="text-light">ended</span>
                            @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
                    </div>

                    <div class="col-7  p-0">
                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                      </div>
                      <div class="text-muted fs-sm text-start">
                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @endif 
                      </div>  
                      <div class="text-muted fs-sm text-start">
                        @if($category->count() == 0)
                       
                            <a href="{{route('admin.editcategories',['event_id' => $franchise->id])}}" class="badge bg-primary mt-0">
                              no category</a>
                        
                        @else
                          @foreach($category as $cat)
                             
                              @php
                                  $categ = DB::table('expos')->where('id', $cat->expo_id)->get();
                              @endphp
                              @foreach($categ as $ficateg)
                               <span class="badge bg-primary mt-0">{{$ficateg->tag}}</span>
                              @endforeach
                          @endforeach
                        @endif
                      </div>
                    </div>

                    <div class="col-3  p-0">
                      @if(is_null($franchise->image))
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                            Add</a>
                      @else
                        <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                      @endif
                    </div>
                  </div>
                @endif

                </div>
            @endforeach
         
      @endif

      @if($board == 'order')

      <div class="container-fluid vh-100">
        <div class="row h-100">
          
          <!-- LEFT SCREEN (Laptop) -->
          <div class="col-md-6 d-none d-md-block bg-light p-3 overflow-auto">
            <!-- Put your left panel content here -->
            <div class="container">
              <h4 class="mb-3">Search Records</h4>

              <form class="row g-2 align-items-center">
                <!-- Main Search Input -->
                <div class="col-sm-9 col-12">
                  <input type="text" class="form-control" placeholder="Search by name, phone, email, date, or event name">
                </div>

                <!-- Filter Dropdown -->
                <div class="col-sm-3 col-12">
                  <select class="form-select">
                    <option value="">All Fields</option>
                    <option value="name">Name</option>
                    <option value="phone">Phone Number</option>
                    <option value="email">Email</option>
                    <option value="date">Date</option>
                    <option value="event">Event Name</option>
                  </select>
                </div>

                <!-- Search Button -->
                <div class="col-12 mt-2">
                  <button class="btn btn-primary w-100" type="submit">Search</button>
                </div>
              </form>

              <div class="d-flex justify-content-center">
                <div class="position-relative" style="width:120px; height:120px;">
                  <!-- Event Image Circle -->
                  <img src="https://via.placeholder.com/120" 
                      class="rounded-circle img-fluid" 
                      alt="Event"
                      style="width:120px; height:120px; object-fit:cover;">
                  
                  <!-- Lead Count Badge -->
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    25
                  </span>
                </div>
              </div>
              
            </div>
          </div>

          <!-- RIGHT SCREEN (List) -->
          <div class="col-12 col-md-6 bg-white p-3 overflow-auto">
            @foreach ($businessOrder as $evento)
              <div class="container my-1">
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
          </div>

        </div>
      </div>


      @elseif($board == 'all')
      @elseif($board == 'eventwise')
      @endif

      @if($board == 'bulkReview')
        
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                      <!-- details test tickets-->
                      
                        <div class="d-flex flex-nowrap align-items-center pb-3">
                           
                        <form wire:submit.prevent="bulkReview">
                              <select class="form-select form-select-sm me-2"  wire:model="monthly">
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
                              <input type="text" wire:model.lazy="howMany" placeholder="how Many" class="form-control">
                              <input type="submit" class="form-control btn btn-primary">
                        </form>
                         
                        </div> 
                      
                    </div>
      @endif

      @if($board == 'organizer')
          <div class="mb-5">
            @if($board == 'requested')
              <div class="fw-bold mb-0 lh-0 pb-0">Requested Event</div>
              <div class="lh-0 mt-0 small">customize as your business</div>
            
                  @foreach ($checkSelected as $fibder) 

                      @php
                      $franchiseo = DB::table('events')->where('id' , $fibder -> event_id)->get();
                      @endphp

                      @foreach($franchiseo as $franchise )
                          <div class="container  ">
                              <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col  pr-0">
                                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                      <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                      @else
                                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                      <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                      @endif 
                                      <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                  </div>

                                  <div class="col-7  p-0">
                                  <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                      {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                  <div class="text-muted fs-sm text-start">
                                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                      @else
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                      @endif 
                                  </div>  
                                  <div class="text-muted fs-sm text-start"></div>
                                  </div>

                                  <div class="col-3  p-0">
                                    

                                      <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                                        <ul class="dropdown-menu" width="auto">
                                          <li><a class="dropdown-item" href="#">Reject</a></li>
                                          <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Accept</a></li>    

                                        </ul>
                                      </span>
                                      </div>
                              </div>
                          </div>
                      @endforeach

                  @endforeach

            @elseif($board == 'organizer')
              <div class="fw-bold mb-0 lh-0 pb-0">Organiser</div>
              <div class="lh-0 mt-0 small">Find Organiser</div>

                  @php
                      $findOrganiser = DB::table('brands')->where('dtype','organiser')->orderBy('brand_name','ASC')->get();
                  @endphp

                  @foreach($findOrganiser as $franchise )
                      <div class="container  ">
                          <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                              <div class="col  pr-0">
                                  
                                  <div class="h4 fw-light mb-0"> Te</div> 
                                  <div class="small text-muted text-capitalize">DEc</div>
                                  <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                              </div>

                              <div class="col-7  p-0">
                              <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                  {{ucwords(trans(Str::limit($franchise->brand_name, 24)))}}</a></div>
                              <div class="text-muted fs-sm text-start">
                                  
                              </div>  
                              <div class="text-muted fs-sm text-start"></div>
                              </div>

                              <div class="col-3  p-0">
                                  

                                  <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                                    <ul class="dropdown-menu" width="auto">
                                      <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="delorganiser({{$franchise->id}})">Delete</a></li>
                                      <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">contact</a></li>
                                    </ul>
                                  </span>
                                  </div>
                          </div>
                      </div>
                  @endforeach
            @endif
          </div>
      @endif

      @if($board == 'new-organiser')
        <div class="container">
          <h3>Add Organiser</h3>

          <form wire:submit.prevent="organiser">
            <hr class="my-2">
              <div class="row">
                  <div class="col-sm-4">
                      <label class="form-label" for="cf-name">Organizer</label>
                      <input class="form-control" type="text" placeholder="Organizer"   wire:model.lazy="brand_name" >
                      @error( 'organizer' ){{ $message}}@enderror
                  </div>
                  <div class="col-sm-4">
                      <label class="form-label" for="cf-name">Email</label>
                      <input class="form-control" type="email" placeholder="Your email"   wire:model.lazy="email" >
                      @error( 'email' ){{ $message}}@enderror
                  </div>

                  <div class="col-sm-4">
                      <label class="form-label" for="cf-name">Phone</label>
                      <input class="form-control" type="number" placeholder="Your Phone"   wire:model.lazy="phone" >
                      @error( 'phone' ){{ $message}}@enderror
                  </div>
              </div>
              <button class="btn btn-primary mt-2 form-control" type="submit">Submit</button>
          </form>

          <!-- Multi-organiser -->
          <form wire:submit.prevent="mUltiorganiser">
            <hr class="my-2">
              Add organiser, Govt bodies
              <div class="row">
                  <div class="col-sm-4">
                      <label class="form-label" for="cf-name">Organizer</label>
                      <input class="form-control" type="text" placeholder="organisation"  wire:model.lazy="organisation" >
                      @error( 'organisation' ){{ $message}}@enderror
                  </div>

                  <div class="col-sm-3">
                            <label class="form-label" for="seniority">Type</label>
                            <select class="form-control" type="text"   wire:model.lazy="dtype"  placeholder="Provide short title of your request">
                                <option> Choose</option>
                                <option value="organiser">organiser</option>
                                <option value="magazine">Magazine</option>
                                <option value="association">Association</option>
                                <option value="govtbodies">Govt. Bodies</option>
                            </select>
                            @error('dtype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                  </div>
              </div>
              <button class="btn btn-primary mt-2 form-control" type="submit">Submit</button>
          </form>

          @php
            $findoorganizer = DB::table('brands')->orderBy('created_at', 'desc')->get();
          @endphp
      
          @foreach($findoorganizer as $franchise )
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    
                    <div class="h4 fw-light mb-0"> Te</div> 
                    <div class="small text-muted text-capitalize">DEc</div>
                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                </div>

                <div class="col-7  p-0">
                <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                    {{ucwords(trans(Str::limit($franchise->brand_name ?? 'null ', 24)))}}</a></div>
                <div class="text-muted fs-sm text-start">
                    {{$franchise->dtype}}
                </div>  
                <div class="text-muted fs-sm text-start"></div>
                </div>

                <div class="col-3  p-0">
                    

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="delorganiser({{$franchise->id}})">Delete</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">contact</a></li>
                      </ul>
                    </span>
                    </div>
            </div>
          @endforeach
        </div>
      @endif

      @if($board == 'venue')
        <div class="container mb-5">
          <h3>Add Organiser</h3>

          <form wire:submit.prevent="venue">
            <hr class="my-2">
              <div class="row">
                  <div class="col-sm-4">
                      <label class="form-label" for="cf-name">Address</label>
                      <input class="form-control" type="text" placeholder="address" wire:model.lazy="address">
                      @error( 'address' ){{ $message}}@enderror
                  </div>
                  <div class="col-sm-4">
                      <label class="form-label" for="cf-name">Venue</label>
                      <input class="form-control" type="text" placeholder="Venue" wire:model.lazy="venue" >
                      @error( 'organizer' ){{ $message}}@enderror
                  </div>
                  <div class="col-sm-4">
                      <label class="form-label" for="cf-name">City</label>
                      <input class="form-control" type="text" placeholder="city" wire:model.lazy="city" >
                      @error( 'city' ){{ $message}}@enderror
                  </div>

                  <div class="col-sm-4">
                      <label class="form-label" for="cf-name">Country</label>
                      <input class="form-control" type="text" placeholder="Country" wire:model.lazy="country" >
                      @error( 'country' ){{ $message}}@enderror
                  </div>
              </div>
              <button class="btn btn-primary mt-2 form-control" type="submit">Submit</button>
          </form>

          
          @php 
            $venueoption = DB::table('locations')->whereNotNull('venue')->orderBy('created_at','desc')->get();
          @endphp
          @foreach($venueoption as $franchise)
            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    <!-- <div class="h4 fw-light mb-0"> Te</div> 
                    <div class="small text-muted text-capitalize">DEc</div>
                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div>  -->

                    @if(is_null($franchise->image))
                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine',['slug' => $franchise->slug, 'formm' => 'image' ])}}">Add</a>
                      @else
                      <a class="card-img-top d-block overflow-hidden" href="">
                      <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->name, 24)}}"></a>
                    @endif
                </div>

                {{-- <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => $franchise->venue , 'city' => $franchise->city , 'country' => $franchise->country ?? 'null' ])}}">venue</a>
                <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => $franchise->city , 'country' => $franchise->country ?? 'null' ])}}">city</a>
                <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'all' , 'country' => $franchise->country ?? 'null'  ])}}">country</a> --}}

                <div class="col-7  p-0">
                    {{-- <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('search.venue',['time' => 'upcoming', 'venue' =>$franchise->venue , 'city' => $franchise->city , 'country' => $franchise->country ?? 'null' ])}}">
                        {{ucwords(trans(Str::limit($franchise->venue, 24)))}}</a></div> --}}
                
                    <div class="text-muted fs-sm text-start">
                      <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'all', 'country' => $franchise->country ?? 'null' ])}}">
                      
                      @if($franchise->address)
                        {{$franchise->address ?? 'null'}}
                      @else
                        <a href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'address' , 'location_id' => $franchise->id,])}}">edit/add</a>
                      @endif
                      </a>
                    </div>

                    <div class="fs-md fw-normal text-start">
                      <a class="text-dark" href="{{route('search.venue',['time' => 'upcoming', 'venue' =>$franchise->venue , 'city' => $franchise->city , 'country' => $franchise->country ?? 'null'])}}">
                        {{$franchise->venue}}</a></div>
                    <div class="text-muted fs-sm text-start">
                        <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => $franchise->city, 'country' => $franchise->country ?? 'null' ])}}">{{$franchise->city}}</a>   
                    </div>  
                    <div class="text-muted fs-sm text-start">
                      <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'all', 'country' => $franchise->country ?? 'null' ])}}">{{$franchise->country}}</a>
                    </div>

                </div>

                <div class="col-3  p-0">
                    

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="delvenue({{$franchise->id}})">Delete</a></li>
                        
                        <li><a class="dropdown-item" 
                        href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'address' , 'location_id' => $franchise->id,])}}">edit</a></li>

                        @if($franchise->status == '0')
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updatelocationStatus({{$franchise->id}} , '1')">status</a></li>
                        @else
                          <li><a class="dropdown-item" href="#" wire:click.prevent="updatelocationStatus({{$franchise->id}} , '0')">destatus</a></li>
                        @endif

                        @if($franchise->admstatus == '0')
                        <li><a class="dropdown-item" href="#" wire:click.prevent="UpdateLocationAdmStatus({{$franchise->id}}, '1')">live</a></li>
                          @else
                        <li><a class="dropdown-item" href="#" wire:click.prevent="UpdateLocationAdmStatus({{$franchise->id}}, '0')">de-active</a></li>
                        @endif
                      </ul>
                    </span>
                    </div>
            </div>
          @endforeach
        </div>
      @endif


      @if($board == 'ticketPlan')
          <div class="mb-5">
            @foreach($ticket as $franchise)
                <div class="container">
                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                        <div class="col  pr-0">
                           
                              <div class="fs-xs fw-normal mb-0">{{$franchise->packagge}}</div> 
                              <div class="small text-muted text-capitalize">Adm</div>

                            @if($franchise->admstatus == '0')
                              <div class="small text-muted text-capitalize">DeA </div>
                              @else
                              <div class="small text-muted text-capitalize">Act</div>
                            @endif

                        </div>

                        <div class="col-7  p-0">
                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                            {{ucwords(trans(Str::limit($franchise->package, 100)))}}</a></div>
                        <div class="text-muted fs-sm text-start">

                        </div>  
                        <div class="text-muted fs-sm text-start"> {{$franchise->packagge}} | {{$franchise->type}}</div>
                        </div>

                        <div class="col-3  p-0">
                            <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                              <ul class="dropdown-menu" width="auto">
                                <li><a class="dropdown-item" href="#" wire:click.prevent="ticketstatusedit({{$franchise->id}})">Edit</a></li>
                                <li><a class="dropdown-item" href="#" wire:click.prevent="ticketPackagge({{$franchise->id}}, 'universal')">Universal</a></li>
                                <li><a class="dropdown-item" href="#" wire:click.prevent="ticketstatus({{$franchise->id}}, '1')">Active</a></li>   
                                <li><a class="dropdown-item" href="#" wire:click.prevent="ticketstatus({{$franchise->id}}, '0')">DeActive</a></li>
                                <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="delTicket({{$franchise->id}})">Delete</a></li>
                              </ul>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
      @endif

      @if($board == 'badge')
        @php 
          $requested_badge_application = DB::table('badge_applications')->get();
        @endphp

         @foreach($requested_badge_application as $badge)
           <div class="container">
            {{$badge -> website_url}}
            {{$badge -> type}}
            {{$badge -> user_id}}
            <a href="#" wire:click.prevent="approveApplication({{$badge->id}}, 'approved')">Approved</a>
            <a href="#" wire:click.prevent="approveApplication({{$badge->id}}, 'rejected')">Rejected</a>
           </div>
         @endforeach
         
      @endif

      @if($board == 'email')
        <div class="container">
          <form action="" wire:submit.prevent="sendpromoemail">
            <input type="text" placeholder="subject" required class="form-control mb-1" wire:model.lazy="subject">  
            <input type="text" placeholder="email" required class="form-control mb-1" wire:model.lazy="email">
            <input type="text" placeholder="month" required class="form-control mb-1" wire:model.lazy="month">
            <input type="text" placeholder="city" required class="form-control mb-1" wire:model.lazy="city">
            <button class="btn btn-primary mt-2 form-control" type="submit">Submit</button>
          </form>
        </div>
      @endif

      @if($board == 'own-plan-add-ticket')

            <form wire:submit.prevent="universalticket">
                <!-- Title-->
                <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                    <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Ticket</h2>
                </div>

                <div class="container mb-4">
                
                  <div class="row">
                      

                      <div class="col-sm-6 mb-3">
                          <label class="form-label" for="unp-product-name">Ticket Name</label>
                          <input class="form-control" type="text" wire:model.lazy="package" >
                          <div class="form-text">Create unique ticket name</div>
                          @error('package')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-product-name">Ticket Price </label>
                          <input class="form-control" type="number" wire:model.lazy="price">
                          <div class="form-text">Price of the ticket</div>
                          @error('price')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-product-name">Category </label>

                          <select class="form-select form-select-sm me-2"  wire:model="type">
                            <option selected >Choose...</option>
                            <option value="plan">Plan</option>
                            <option value="visit">Visit</option>
                            <option value="exhibit">Exhibit</option>
                            <option value="membership">Membership</option>
                            <option value="advertise">Advertise</option>
                          </select>

                          <div class="form-text">Price of the ticket</div>
                          @error('type')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                      <div class="col-sm-3 mb-3">
                          <label class="form-label" for="unp-product-name">Packagge </label>

                          <select class="form-select form-select-sm me-2"  wire:model="packagge">
                            <option selected >Choose...</option>
                            <option value="universal">Universal</option>
                            <option value="visit">Visitor</option>
                            <option value="exhibit">Exhibitor</option>
                            <option value="membership">Membership</option>
                          </select>

                          <div class="form-text">Price of the ticket</div>
                          @error('packagge')
                              <div class="form-text">{{$message}}</div>
                          @enderror
                      </div>

                          
                  </div>

                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                      <textarea class="form-control"  rows="6" wire:model.lazy="desc"></textarea>
                      <div class="form-text">Describle your tickets plan</div>
                      @error('desc')
                          <div class="form-text">{{$message}}</div>
                      @enderror
                  </div>


                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" checked wire:model.lazy="terms">
                      <label class="form-check-label fs-xs" for="flexCheckChecked">By clicking "submit" you agree to our Terms of Service.</label>
                      @error('terms')
                          <div class="form-text">{{$message}}</div>
                      @enderror
                  </div>

                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
              </div>
            </form>
      @endif
      
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
      @if($board == 'job')
        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'job'])}}">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Job</span>
        </a>
         
        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.jobCreate')}}">
          <span class="handheld-toolbar-icon"><i class="bi bi"></i></span>
          <span class="handheld-toolbar-label">Add</span>
        </a>
      @elseif($board == 'magazine')
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'magazine'])}}">
            <span class="handheld-toolbar-icon">
            <i class="bi bi-book"></i></span>
            <span class="handheld-toolbar-label">Magazine</span>
          </a>
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'new-organiser'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-building"></i></span>
            <span class="handheld-toolbar-label">Organisation</span>
          </a>
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>
      @elseif($board == 'blog')

          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'blog'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Blog</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.blogpost',[ 'board' => 'addBlog' ])}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>

      @elseif($board == 'event')
          
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Event</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'venue'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Venue</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>
      
      @elseif($board == 'visitor')
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Add</span>
          </a>
      @elseif($board == 'client')
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Brand</span>
          </a>
      @elseif($board == 'organizer')
          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Brand</span>
          </a>
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'new-organiser'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Organiser</span>
          </a>
      @elseif($board == 'new-organiser')
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'organizer'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Organiser</span>
          </a>
      @elseif($board == 'createShtDesc')
          <a class="d-table-cell handheld-toolbar-item" href="#" wire:click.prevent="BulkCreateAutoDesc('2023')">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">2023</span>
          </a>
          <a class="d-table-cell handheld-toolbar-item" href="" wire:click.prevent="BulkCreateAutoDesc('2024')">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">2024</span>
          </a>
          <a class="d-table-cell handheld-toolbar-item" href="" wire:click.prevent="BulkCreateAutoDesc('2025')">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">2025</span>
          </a>
      @elseif($board == 'own-plan-add-ticket')
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'ticketPlan'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">All</span>
          </a>
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'own-plan-add-ticket'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Create</span>
          </a>
      @elseif($board == 'ticketPlan')
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'ticketPlan'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">All</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'own-plan-add-ticket'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Create</span>
          </a>
      @elseif($board == 'order')
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'eventwise'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Event</span>
          </a>
          <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'all'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Event</span>
          </a>
      @endif
      

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>

      </div>
    </div>
      
</main>

    @push('scripts')
      <script>
        var slider = tns({
          "container": '.badgese',   
          
          "responsive": {
            "300": {
              "items": 3,
              "controls": false,
              "fixedWidth": 100,
              "mouseDrag": true,
              "autoplay": false,
              "autoplayButtonOutput": false,
              "autoplayHoverPause": true,
            },
            "500": {
              "items": 1,
              "nav": false,
              "controls": false,
              "autoplayHoverPause": true,
              "autoplay": false,
              "autoplayButtonOutput": false,
              "fixedWidth": 100,
            },
            
          },
          "autoplayButtonOutput":false
        });
      </script>

      <script>
        // function makeCall(phone)
        // {
        //   window.location.href = 'tel:${}';
        // }

        function copyToclipboard()
        {
          navigator.clipboard.writeText(text).then(() => {
            alert("phone copied");
          }).catch((err) => {
            alert("failed to copy" + err);
          });
        }
      </script>
    @endpush
