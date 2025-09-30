@section('page_title',  ('Great Exhibtion To Exhibit '.$this->categry))
@section('page_description',"Find the business opportunity in the '.$this->categry 'with The Exhibition Network, World leading event publishing company.")
@section('page_keyword',  'Great Exhibition To Exhibit, Great Exhibition To Visit, Great Exhibition to Business, upcoming ,Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese,  business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')

    <main>

      <style>
          .tns-outer {
            padding: 0 !important;
            margin: 0 !important;
          }

          .tns-nav, .tns-controls {
            display:none !important;
          }

          .delete-notification {
            width: 15px;
            height: 15px;
            background-color: red;
            border-radius: 50%;
            top: 5px;
            right: 5px;
          }

          .used-notification {
            width: 15px;
            height: 15px;
            background-color: green;
            border-radius: 50%;
            top: 5px;
            left: 5px;
          }

          @media (max-width: 768px) {
            .delete-notification {
              width: 10px;
              height: 10px;
            }

            .used-notification {
              width: 10px;
              height: 10px;
            }

            img.img-fluid {
              height: 80px; /* Adjust image height for mobile */
              object-fit: cover;
            }
          }
      </style>

      <!--google-->
        <div class="bg-secondary d-lg-none">
          <div class=" container">
            <div class="row ">
              <div class="col-md-6 offset-md-3 d-flex justify-content-between ">

                    <div class="align-content-center py-2 ">
                    <a href="{{$previous}}"><i class="bi bi-chevron-left"></i></a>  
                    </div>
              
                    <div class="text-center py-2">
                          <div>{{$this->time}} {{$this->eventype}}</div> 
                    </div>

                    <div class="align-content-center py-2"><a href=""><i class="bi bi-search"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
        
        @php
          $findcategoryid = DB::table('categories')->where('slug', $categry)->value('id');
          $findsubcategory = DB::table('indsecs')->where('category_id', $findcategoryid)->get(); 
          $subcategory = DB::table('indsecs')->where('category_id', $findcategoryid)->value('subtag_id'); 
        @endphp

        <hr>
      
        <div class="d-lg-none">
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                
              <div class="mb-4 mb-lg-5">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs nav-fill mb-0" role="tablist">
                  <li class="nav-item border-bottom"><a class="nav-link px-1 active fs-sm" href="#details" data-bs-toggle="tab" role="tab">Browse</a></li>
                  <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#reviews" data-bs-toggle="tab" role="tab"> Plan your Event</a></li>
                </ul>

                  <div class="tab-content pt-1">                
                      <!-- Product details tab-->
                      <div class="tab-pane fade show active" id="details" role="tabpanel">
                        
                        <!-- details test tickets-->
                        @php
                              $witems = Cart::instance('wishlist')->content()->pluck('id'); 
                        @endphp

                        @php 
                          $industryhead = DB::table('categories')->where('slug', $this->categry)->get();
                        @endphp

                        <style>
                          .categories-list {
                            display: flex;
                            overflow-x: auto;
                            padding: 5px;
                            gap: 5px;
                            white-space: nowrap;
                            scrollbar-width: none;
                          }

                          .categories-list::-webkit-scrollbar{
                            display: none;
                          }

                          
                          .category-badge {
                            flex: 0 0 auto;
                            padding: 4px 7px;
                            border-radius: 5px;
                            border: 1px solid #ccc ;
                            background-color: #fff;
                            
                            font-weight: 400;
                            text-align: center;
                            display: inline-block;
                            font-size: 14px;
                          }

                          
                          .category-badge:hover {
                            background-color: black;
                            color: white;
                            
                          }

                        </style>

                        <div class="categories-list">
                          @foreach($industryhead as $headcategories)
                            @php 
                              $findsubcateory = DB::table('indsecs')->where('category_id', $headcategories->id )->get();
                            @endphp

                              @foreach($findsubcateory as $findo)
                                @php
                                  $findsubcat = DB::table('expos')->where('id', $findo -> subtag_id )->where('type','tag')->get();
                                @endphp


                                <!-- start-categories -->
                                  
                                  <div class="categories-li">
                                      @foreach($findsubcat as $finderlo)
                                          <span class="category-badge" href="#" wire:click.prevent="insertEventToSess({{$finderlo->id}})">{{ucwords(trans($finderlo->tag))}}</span>
                                      @endforeach
                                  </div>
                                <!-- end-categories -->
                              @endforeach
                          @endforeach
                        </div>
                          
                        <div class="row mb-5 pb-2">
                          @foreach($industryhead as $headcategories)
                            @php 
                              $findsubcateory = DB::table('indsecs')->where('category_id', $headcategories->id )->get();
                            @endphp

                              @foreach($findsubcateory as $findo)
                                @php
                                  $findsubcat = DB::table('expos')->where('id', $findo -> subtag_id )->where('type','tag')->get();
                                @endphp

                                @foreach($findsubcat as $eventooo)
                                  @php
                                    $eventcat = DB::table('dencos')->where('expo_id', $eventooo -> id )->get();
                                  @endphp

                                  
                                  @foreach ($eventcat as $eventooo)
                                    @php
                                        $franchiso = DB::table('events')->where('expo_id', $eventooo -> event_id )->get(); 
                                    @endphp

                                    @foreach ($franchiso as $franchise)
                                      <div class="container">
                                          <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                            <div class="col  pr-0">
                                                @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                                    {{-- <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> --}}
                                                    <div class="small fw-light">{{Carbon\Carbon::parse ($franchise->startdate)->format('Y')}} </div> 
                                                    <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                                  @else
                                                    {{--<div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div>--}}
                                                    <div class="small fw-light">{{Carbon\Carbon::parse ($franchise->startdate)->format('Y')}} </div>
                                                    <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                                @endif

                                                
                                            </div>

                                            <div class="col-7  p-0">
                                              <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                                {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                              <div class="text-muted fs-sm text-start">
                                                @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                                  {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                                @else
                                                  {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                                @endif 
                                              </div>  
                                              <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue ?? 'null'))}}, {{ucfirst(trans($franchise->city ?? 'null'))}}</div>
                                            </div>

                                            <div class="col-3  p-0">
                                                <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent = "selectImage('{{$franchise->id}}')">
                                                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}">
                                                </a>
                                                @if(in_array($franchise->id, $selectedImages))
                                                  <!-- <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-primary bg-opacity-50 d-flex justify-content-center align-items-center">
                                                    <span class="text-white">Selected</span>
                                                  </div> -->
                                                  <!-- <span class="badge bg-success position-absolute top-0 end-0 m-2">Selected</span> -->
                                                  <!-- Checkmark Icon -->
                                                  <!-- <span class="position-absolute top-0 start-0 m-2 text-success">
                                                    <i class="fas fa-check-circle fa-2x"></i>
                                                  </span> -->
                                                  
                                                  <!-- Mobile view: icon notification -->
                                                  <!-- <span class="position-absolute top-0 start-0 m-2 text-success d-md-none">
                                                    m<i class="fas fa-check-circle fa-2x"></i> 
                                                  </span> -->
                                                  <span class="position-absolute delete-notification"></span>

                                                  <!-- Desktop view: "Selected" text -->
                                                  <span class="badge bg-success position-absolute top-0 end-0 m-2 d-none d-md-inline">
                                                    Selected <!-- Desktop text -->
                                                  </span>
                                                @endif
                                            </div>
                                          </div>  
                                      </div>
                                    @endforeach                            
                                  @endforeach

                                @endforeach
                              
                              @endforeach
                          @endforeach 



                          @foreach($exhibition as $business)
                            @php 
                              $franchiso = DB::table('events')->where('id', $business->EventName)->get();
                            @endphp
                            @foreach($franchiso as $franchise)
                                <div class="container">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              {{-- <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> --}}
                                              <div class="small fw-light">{{Carbon\Carbon::parse ($franchise->startdate)->format('Y')}} </div> 
                                              <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                            @else
                                              {{--<div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div>--}}
                                              <div class="small fw-light">{{Carbon\Carbon::parse ($franchise->startdate)->format('Y')}} </div>
                                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                          @endif

                                          
                                      </div>

                                      <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @endif 
                                        </div>  
                                        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue ?? 'null'))}}, {{ucfirst(trans($franchise->city ?? 'null'))}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                          <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent = "selectImage('{{$franchise->id}}')">
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}">
                                          </a>
                                          @if(in_array($franchise->id, $selectedImages))
                                            <!-- <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-primary bg-opacity-50 d-flex justify-content-center align-items-center">
                                              <span class="text-white">Selected</span>
                                            </div> -->
                                            <!-- <span class="badge bg-success position-absolute top-0 end-0 m-2">Selected</span> -->
                                            <!-- Checkmark Icon -->
                                            <!-- <span class="position-absolute top-0 start-0 m-2 text-success">
                                              <i class="fas fa-check-circle fa-2x"></i>
                                            </span> -->
                                            
                                            <!-- Mobile view: icon notification -->
                                            <!-- <span class="position-absolute top-0 start-0 m-2 text-success d-md-none">
                                              m<i class="fas fa-check-circle fa-2x"></i> 
                                            </span> -->
                                            <span class="position-absolute delete-notification"></span>

                                            <!-- Desktop view: "Selected" text -->
                                            <span class="badge bg-success position-absolute top-0 end-0 m-2 d-none d-md-inline">
                                              Selected <!-- Desktop text -->
                                            </span>
                                          @endif
                                      </div>
                                    </div>  
                                </div>
                            @endforeach
                          @endforeach 

                          @foreach($eventscato as $date => $franchise)
                                <div class="container">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              {{-- <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> --}}
                                              <div class="small fw-light">{{Carbon\Carbon::parse ($franchise->startdate)->format('Y')}} </div> 
                                              <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                            @else
                                              {{--<div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div>--}}
                                              <div class="small fw-light">{{Carbon\Carbon::parse ($franchise->startdate)->format('Y')}} </div>
                                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                          @endif

                                          
                                      </div>

                                      <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @else
                                            {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                                          @endif 
                                        </div>  
                                        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue ?? 'null'))}}, {{ucfirst(trans($franchise->city ?? 'null'))}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                          <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent = "selectImage('{{$franchise->id}}')">
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}">
                                          </a>
                                          @if(in_array($franchise->id, $selectedImages))
                                            <!-- <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-primary bg-opacity-50 d-flex justify-content-center align-items-center">
                                              <span class="text-white">Selected</span>
                                            </div> -->
                                            <!-- <span class="badge bg-success position-absolute top-0 end-0 m-2">Selected</span> -->
                                            <!-- Checkmark Icon -->
                                            <!-- <span class="position-absolute top-0 start-0 m-2 text-success">
                                              <i class="fas fa-check-circle fa-2x"></i>
                                            </span> -->
                                            
                                            <!-- Mobile view: icon notification -->
                                            <!-- <span class="position-absolute top-0 start-0 m-2 text-success d-md-none">
                                              m<i class="fas fa-check-circle fa-2x"></i> 
                                            </span> -->
                                            <span class="position-absolute delete-notification"></span>

                                            <!-- Desktop view: "Selected" text -->
                                            <span class="badge bg-success position-absolute top-0 end-0 m-2 d-none d-md-inline">
                                              Selected <!-- Desktop text -->
                                            </span>
                                          @endif
                                      </div>
                                    </div>  
                                </div>
                          @endforeach
                          
                        </div> 
                      </div>
                  
                      <!-- Reviews tab-->
                      <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <!-- <div class="container">
                          <div class="row text-center">
                            <i class="bi bi-bookmark"></i>
                            <p>Saving an event will add it to this tab so that you can find it later</p>
                            <a href="" class="btn btn-primary text-capitalize">return to search results</a>
                          </div>
                        </div> -->
                        <header>
                          <img src="logo.png" alt="The Exhibition Network Logo">
                        </header>

                        <div class="banner">
                          Unlock Premium Exhibition Spaces!
                        </div>

                        <button>Register Now</button>

                        <div class="section">
                          <div><img src="priority.png" alt="Priority Access">Priority Access: Get first dibs on ultra-premium spaces.</div>
                          <div><img src="tailored.png" alt="Tailored Events">Tailored Events: Personalized exhibition recommendations.</div>
                          <div><img src="earlybird.png" alt="Early Bird Deals">Early Bird Deals: Exclusive discounts for registered users.</div>
                          <div><img src="network.png" alt="Network & Grow">Network & Grow: Connect with top industry professionals.</div>
                          <div><img src="vip.png" alt="VIP Invites">VIP Invites: Special access to exclusive events.</div>
                        </div>

                        <div class="divider"></div>

                        <div class="section">
                          Get Started:
                          <div>1. Register Now</div>
                          <div>2. Save Your Interests</div>
                          <div>3. Enjoy Premium Benefits</div>
                        </div>

                        <button>Join The Exhibition Network</button>
                      </div>

                  </div>
              </div>

              </div>
            </div>
          </div>
        </div>
      <!--end Google--> 


      
        <!-- Custom CSS -->
        <style>
          .custom-select {
            background-color: #1a1a1a;
            color: #fff;
            border: 1px solid #333;
          }
          .custom-select:focus {
            border-color: #00ff99;
            box-shadow: 0 0 5px rgba(0,255,153,0.5);
          }
          .tag-btn {
            background-color: #1a1a1a;
            color: #fff;
            border: 1px solid #333;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.9rem;
            transition: 0.3s;
          }
          .tag-btn:hover {
            background-color: #00ff99;
            color: #000;
            border-color: #00ff99;
          }
          .search-bar input::placeholder {
            color: #aaa;
          }
        </style>

        <div class="py-4 d-none d-sm-block" style="background-color: #000;">
          <div class="container">
            <!-- Title -->
            <h5 class="fw-bold text-white">Business events- Statistics and Analytics</h2>

            <!-- Filter Section -->
            <div class="filter-box mt-4">
              <div class="row g-3">
                <div class="col-md-3">
                  <select class="form-select custom-select">
                    <option selected>All Games / Categories</option>
                    <option>LoL</option>
                    <option>CS2</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select custom-select">
                    <option selected>All Publishers</option>
                    <option>Riot</option>
                    <option>Valve</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select custom-select">
                    <option selected>All Time</option>
                    <option>2023</option>
                    <option>2024</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select custom-select">
                    <option selected>All Teams</option>
                    <option>Navi</option>
                    <option>OG</option>
                  </select>
                </div>
              </div>

              <!-- Tags -->
              <div class="mt-3 d-flex flex-wrap gap-2">
                <button class="tag-btn">Esports only</button>
                <button class="tag-btn">Mobile Esports</button>
                <button class="tag-btn">Female Esports</button>
                <button class="tag-btn">Battle Royale</button>
                <button class="tag-btn">Collegiate</button>
              </div>
            </div>

            <!-- Search and Sorting -->
            <div class="d-flex align-items-center justify-content-between mt-4">
              <div class="search-bar w-50">
                <input type="text" class="form-control bg-dark text-white border-0" placeholder="Search tournament by name">
              </div>
              <div class="d-flex gap-2">
                <select class="form-select custom-select w-auto">
                  <option selected>Sort by: Event Date</option>
                  <option>Most Viewed</option>
                  <option>Top Teams</option>
                </select>
                <button class="btn btn-danger fw-bold px-4">LIVE Business Events</button>
              </div>
            </div>

          </div>
        </div>

        <!-- Styles -->
        <style>
          .custom-select {
            background-color: #1a1a1a;
            color: #fff;
            border: 1px solid #333;
          }
          .custom-select:focus {
            border-color: #00ff99;
            box-shadow: 0 0 5px rgba(0,255,153,0.5);
          }
          .tag-btn {
            background-color: #1a1a1a;
            color: #fff;
            border: 1px solid #333;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.9rem;
            transition: 0.3s;
          }
          .tag-btn:hover {
            background-color: #00ff99;
            color: #000;
            border-color: #00ff99;
          }
          .pop-filter {
            padding: 6px 12px;
            background-color: #111;
            border: 1px solid #333;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
          }
          .pop-filter:hover {
            background-color: #00ff99;
            color: #000;
          }
          .table th, .table td {
            vertical-align: middle;
          }
          .badge {
            font-size: 0.7rem;
            margin-left: 6px;
          }
        </style>

        <div class="container py-4">
            <div class="row g-3"> <!-- g-3 adds some gap between columns -->

                <div class="col-md-4">
                    <div class="card p-3 shadow-sm rounded">
                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="mb-0 fw-bold">Product Manager</h5>
                            <small class="text-muted">4d ago</small>
                        </div>
                        <!-- Company info & tags -->
                        <div class="mb-2">
                            <p class="mb-1">Leading Indian MNC in Beverage</p>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="badge bg-warning text-dark" style="margin-left:0 px">3.5+</span>
                                <span class="badge bg-light text-dark border" style="margin-left:0 px">Indian MNC</span>
                                <span class="badge bg-light text-dark border" style="margin-left:0 px">Fortune India 500 (2023)</span>
                            </div>
                        </div>
                        <!-- Details -->
                        <div class="d-flex justify-content-start align-items-center text-muted mb-2 gap-3">
                            <small><i class="bi bi-briefcase-fill"></i> 10-16 Yrs</small>
                            <small><i class="bi bi-currency-rupee"></i> 14-17 Lacs P.A.</small>
                            <small><i class="bi bi-geo-alt-fill"></i> Faridabad, Delhi</small>
                        </div>
                        <!-- Meet for & button -->
                        <small class="text-muted me-2">Meet for:</small>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <img src="company1.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company2.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company3.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company4.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company5.png" alt="" class="rounded-circle" width="30" height="30">
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Share interest</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Repeat card 2 content here (same structure as card 1) -->
                    <div class="card p-3 shadow-sm rounded">
                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="mb-0 fw-bold">Product Manager</h5>
                            <small class="text-muted">4d ago</small>
                        </div>
                        <!-- Company info & tags -->
                        <div class="mb-2">
                            <p class="mb-1">Leading Indian MNC in Beverage</p>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="badge bg-warning text-dark">3.5+</span>
                                <span class="badge bg-light text-dark border">Indian MNC</span>
                                <span class="badge bg-light text-dark border">Fortune India 500 (2023)</span>
                            </div>
                        </div>
                        <!-- Details -->
                        <div class="d-flex justify-content-start align-items-center text-muted mb-2 gap-3">
                            <small><i class="bi bi-briefcase-fill"></i> 10-16 Yrs</small>
                            <small><i class="bi bi-currency-rupee"></i> 14-17 Lacs P.A.</small>
                            <small><i class="bi bi-geo-alt-fill"></i> Faridabad, Delhi</small>
                        </div>
                        <!-- Meet for & button -->
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <img src="company1.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company2.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company3.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company4.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company5.png" alt="" class="rounded-circle" width="30" height="30">
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Share interest</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Repeat card 3 content here (same structure as card 1) -->
                    <div class="card p-3 shadow-sm rounded">
                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <h5 class="mb-0 fw-bold">Product Manager</h5>
                            <small class="text-muted">4d ago</small>
                        </div>
                        <!-- Company info & tags -->
                        <div class="mb-2">
                            <p class="mb-1">Leading Indian MNC in Beverage</p>
                            <div class="d-flex flex-wrap gap-1">
                                <span class="badge bg-warning text-dark">3.5+</span>
                                <span class="badge bg-light text-dark border">Indian MNC</span>
                                <span class="badge bg-light text-dark border">Fortune India 500 (2023)</span>
                            </div>
                        </div>
                        <!-- Details -->
                        <div class="d-flex justify-content-start align-items-center text-muted mb-2 gap-3">
                            <small><i class="bi bi-briefcase-fill"></i> 10-16 Yrs</small>
                            <small><i class="bi bi-currency-rupee"></i> 14-17 Lacs P.A.</small>
                            <small><i class="bi bi-geo-alt-fill"></i> Faridabad, Delhi</small>
                        </div>
                        <!-- Meet for & button -->
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center gap-2">
                                <img src="company1.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company2.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company3.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company4.png" alt="" class="rounded-circle" width="30" height="30">
                                <img src="company5.png" alt="" class="rounded-circle" width="30" height="30">
                            </div>
                            <button class="btn btn-outline-primary btn-sm">Share interest</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

     
    
      <div class="container pb-5 mb-2 mb-md-4 d-none d-sm-block">
        <div class="row">
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
              <div class="d-flex flex-wrap">
                <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                  <label class="text-light fs-sm opacity-75 text-nowrap me-2 d-none d-sm-block" for="sorting">Sort by:</label>
                  <select class="form-select"  wire:model="sorting">
                    <option value="today" selected="selected">Today</option>
                    <option value="tomorrow"  >Tomorrow</option>
                    <option value="weekend">This weekend</option>
                  </select>
                  <span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">of {{$exhibition->count()}} {{$this->eventype}} </span>
                </div>

                <div class="d-flex pb-3">
                  <select class="form-select"  wire:model="pagesize">
                    <!--<option value="12" selected="selected">12 per page</option>-->
                              <option value="12">12 per page</option>
                              <option value="16">16 per page</option>
                              <option value="18">18 per page</option>
                              <option value="21">21 per page</option>
                              <option value="24">24 per page</option>
                              <option value="30">30 per page</option>
                              <option value="32">32 per page</option>
                  </select>
                </div>
              </div>
              <!--<div class="d-flex pb-3">
                    <a class="nav-link-style nav-link-light me-3" href="#"><i class="bi bi-chevron-left"></i></a>
                    <span class="fs-md text-light">1 / 5</span>
                    <a class="nav-link-style nav-link-light ms-3" href="#"><i class="bi bi-chevron-right"></i></a></div>

                    <div class="d-none d-sm-flex pb-3">
                    <a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 me-2" href="#">
                      <i class=" bi bi-view-grid"></i></a><a class="btn btn-icon nav-link-style nav-link-light" href="shop-list-rs.html">
                        <i class="ci-view-list"></i></a>
                  </div>--> 

            </div>

            <!-- Item -->
            <div class="row mx-n2">
              @php $witems = Cart::instance('wishlist')->content()->pluck('id');  @endphp
              @foreach ($exhibition as $business)
                  @php
                      $franchiso = DB::table('events')->where('id', $business->EventName)->get(); 
                  @endphp

                    @foreach ($franchiso as $franchise)
                      @if ($mytime < $franchise->startdate  && $mytime < $franchise->enddate)
                        <div class="col-md-4 col-sm-6 px-2 mb-4">

                          <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                            <div class="product-card-actions d-flex align-items-center">
                              <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                @if($witems->contains($franchise->id))
                                    <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                    <i class=" bi bi-heart-fill"></i></button>
                                @else
                                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                    <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                      <i class=" bi bi-heart"></i></a></button>
                                @endif
                            </div>

                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            
                            <div class="card-body py-2">
                                  <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                    </a>
                                    {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                              
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><h3 class="product-title fs-sm">
                                    <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                  <div class="star-rating align-center">
                                  <!--untitled-1 line 558 -574-->
                                  </div>
                                </div>

                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text">
                                      <small> <i class="bi bi-calendar3"></i>
                                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                      </small></span>
                                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                      </div>
                                      
                                      <div class="star-rating">
                                      <span class="text">
                                      <small></small></span>
                                      </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text">
                                      <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                      </div>

                                      
                                      <div class="star-rating">
                                      <span class="text">
                                      <small></small></span>
                                      </div>
                                    </div>
                            </div>

                            <div class="card-body card-body-hidden">
                              <div class="text-center pb-2">
                                <!--<div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                  <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="blue">
                                  <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="yellow">
                                  <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="pink">
                                  <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                                </div>-->
                              </div>

                              <div class="d-flex mb-2">
                                
                                <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                                <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                                href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                                
                                </div>
                                <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                            
                            </div>
                          
                          </div>

                          <hr class="d-sm-none">
                        </div>
                        @elseif ($mytime == $franchise->startdate  && $mytime < $franchise->enddate)
                        <div class="col-md-4 col-sm-6 px-2 mb-4">

                              <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                                <div class="product-card-actions d-flex align-items-center">
                                  <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                    @if($witems->contains($franchise->id))
                                        <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <i class=" bi bi-heart-fill"></i></button>
                                      @else
                                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                          <i class=" bi bi-heart"></i></a></button>
                                    @endif
                                </div>

                                <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                
                                <div class="card-body py-2">
                                      <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                        </a>
                                        {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                                  
                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><h3 class="product-title fs-sm">
                                        <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                      <div class="star-rating align-center">
                                      <!--untitled-1 line 558 -574-->
                                      </div>
                                    </div>

                                        <div class="d-flex justify-content-between">
                                          <div class="product-price"><span class="text">
                                          <small> <i class="bi bi-calendar3"></i>
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                            @else
                                              {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                            @endif 
                                          </small></span>
                                            <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                          </div>
                                          
                                          <div class="star-rating">
                                          <span class="text">
                                          <small></small></span>
                                          </div>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                          <div class="product-price"><span class="text">
                                          <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                            <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                          </div>

                                          
                                          <div class="star-rating">
                                          <span class="text">
                                          <small></small></span>
                                          </div>
                                        </div>
                                </div>

                                <div class="card-body card-body-hidden">
                                  <div class="text-center pb-2">
                                    <!--<div class="form-check form-option form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                      <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="color1" id="blue">
                                      <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="color1" id="yellow">
                                      <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                      <input class="form-check-input" type="radio" name="color1" id="pink">
                                      <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                                    </div>-->
                                  </div>

                                  <div class="d-flex mb-2">
                                    
                                    <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                                    <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                                    href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                    <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                                    
                                    </div>
                                    <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                                
                                </div>
                              </div>
                          <hr class="d-sm-none">
                        </div>
                        @elseif ($mytime > $franchise->startdate  && $mytime < $franchise->enddate)
                        <div class="col-md-4 col-sm-6 px-2 mb-4">

                          <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                            <div class="product-card-actions d-flex align-items-center">
                              <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                @if($witems->contains($franchise->id))
                                    <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                    <i class=" bi bi-heart-fill"></i></button>
                                @else
                                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                    <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                      <i class=" bi bi-heart"></i></a></button>
                                @endif
                            </div>

                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            
                            <div class="card-body py-2">
                                  <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                    </a>
                                    {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                              
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><h3 class="product-title fs-sm">
                                    <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                  <div class="star-rating align-center">
                                  <!--untitled-1 line 558 -574-->
                                  </div>
                                </div>

                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text">
                                      <small> <i class="bi bi-calendar3"></i>
                                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                      </small></span>
                                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                      </div>
                                      
                                      <div class="star-rating">
                                      <span class="text">
                                      <small></small></span>
                                      </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text">
                                      <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                      </div>

                                      
                                      <div class="star-rating">
                                      <span class="text">
                                      <small></small></span>
                                      </div>
                                    </div>
                            </div>

                            <div class="card-body card-body-hidden">
                              <div class="text-center pb-2">
                                <!--<div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                  <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="blue">
                                  <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="yellow">
                                  <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="pink">
                                  <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                                </div>-->
                              </div>

                              <div class="d-flex mb-2">
                                
                                <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                                <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                                href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                                
                                </div>
                                <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                            
                            </div>
                          
                          </div>

                          <hr class="d-sm-none">
                        </div>
                        @elseif ($mytime > $franchise->startdate  && $mytime == $franchise->enddate) 
                        <div class="col-md-4 col-sm-6 px-2 mb-4">

                          <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                            <div class="product-card-actions d-flex align-items-center">
                              <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                @if($witems->contains($franchise->id))
                                    <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                    <i class=" bi bi-heart-fill"></i></button>
                                @else
                                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                    <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                      <i class=" bi bi-heart"></i></a></button>
                                @endif
                            </div>

                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            
                            <div class="card-body py-2">
                                  <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                    </a>
                                    {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                              
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><h3 class="product-title fs-sm">
                                    <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                  <div class="star-rating align-center">
                                  <!--untitled-1 line 558 -574-->
                                  </div>
                                </div>

                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text">
                                      <small> <i class="bi bi-calendar3"></i>
                                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                      </small></span>
                                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                      </div>
                                      
                                      <div class="star-rating">
                                      <span class="text">
                                      <small></small></span>
                                      </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text">
                                      <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                      </div>

                                      
                                      <div class="star-rating">
                                      <span class="text">
                                      <small></small></span>
                                      </div>
                                    </div>
                            </div>

                            <div class="card-body card-body-hidden">
                              <div class="text-center pb-2">
                                <!--<div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                  <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="blue">
                                  <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="yellow">
                                  <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="pink">
                                  <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                                </div>-->
                              </div>

                              <div class="d-flex mb-2">
                                
                                <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                                <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                                href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                                
                                </div>
                                <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                            
                            </div>
                          
                          </div>

                          <hr class="d-sm-none">
                        </div>
                        @elseif ($mytime > $franchise->startdate  && $mytime > $franchise->enddate)
                        <div class="col-md-4 col-sm-6 px-2 mb-4">

                          <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                            <div class="product-card-actions d-flex align-items-center">
                              <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                @if($witems->contains($franchise->id))
                                    <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                    <i class=" bi bi-heart-fill"></i></button>
                                @else
                                    <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                    <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                      <i class=" bi bi-heart"></i></a></button>
                                @endif
                            </div>

                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            
                            <div class="card-body py-2">
                                  <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                    </a>
                                    {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                              
                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><h3 class="product-title fs-sm">
                                    <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                  <div class="star-rating align-center">
                                  <!--untitled-1 line 558 -574-->
                                  </div>
                                </div>

                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text">
                                      <small> <i class="bi bi-calendar3"></i>
                                      @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                      </small></span>
                                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                      </div>
                                      
                                      <div class="star-rating">
                                      <span class="text">
                                      <small></small></span>
                                      </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                      <div class="product-price"><span class="text">
                                      <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                        <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                      </div>

                                      
                                      <div class="star-rating">
                                      <span class="text">
                                      <small></small></span>
                                      </div>
                                    </div>
                            </div>

                            <div class="card-body card-body-hidden">
                              <div class="text-center pb-2">
                                <!--<div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                  <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="blue">
                                  <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="yellow">
                                  <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                                </div>
                                <div class="form-check form-option form-check-inline mb-2">
                                  <input class="form-check-input" type="radio" name="color1" id="pink">
                                  <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                                </div>-->
                              </div>

                              <div class="d-flex mb-2">
                                
                                <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                                <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                                href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                                
                                </div>
                                <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                            
                            </div>
                          
                          </div>

                          <hr class="d-sm-none">
                        </div>
                      @endif
                  @endforeach
              @endforeach
            </div>

            <div class="row mx-n2">
                @foreach($findsubcategory as $findsubcateg)
                  
                  @php
                    $findcategoryoutput = DB::table('expos')->where('id', $findsubcateg->subtag_id)->value('tag');
                  @endphp

                  @php
                    $findcategput = DB::table('dencos')->where('expo_id', $findsubcateg->subtag_id)->get();
                  @endphp

                  @foreach($findcategput as $findcategpu)

                    @php
                      $findcategput = DB::table('events')->where('id', $findcategpu->event_id)->get();
                    @endphp

                    
                    @foreach($findcategput as $franchise)
                    @if ($mytime < $franchise->startdate  && $mytime < $franchise->enddate)
                      <div class="col-md-4 col-sm-6 px-2 mb-4">

                        <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                          <div class="product-card-actions d-flex align-items-center">
                            <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                              @if($witems->contains($franchise->id))
                                  <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <i class=" bi bi-heart-fill"></i></button>
                              @else
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                    <i class=" bi bi-heart"></i></a></button>
                              @endif
                          </div>

                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                          
                          <div class="card-body py-2">
                                <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                  </a>
                                  {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                            
                              <div class="d-flex justify-content-between">
                                <div class="product-price"><h3 class="product-title fs-sm">
                                  <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                <div class="star-rating align-center">
                                <!--untitled-1 line 558 -574-->
                                </div>
                              </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small> <i class="bi bi-calendar3"></i>
                                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                      @else
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                      @endif 
                                    </small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>
                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>

                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>
                          </div>

                          <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                              <!--<div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="blue">
                                <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="yellow">
                                <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="pink">
                                <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                              </div>-->
                            </div>

                            <div class="d-flex mb-2">
                              
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                              href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                              <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                              
                              </div>
                              <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                          
                          </div>

                        </div>

                        <hr class="d-sm-none">
                      </div>
                      @elseif ($mytime == $franchise->startdate  && $mytime < $franchise->enddate)
                      <div class="col-md-4 col-sm-6 px-2 mb-4">

                        <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                          <div class="product-card-actions d-flex align-items-center">
                            <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                              @if($witems->contains($franchise->id))
                                  <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <i class=" bi bi-heart-fill"></i></button>
                              @else
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                    <i class=" bi bi-heart"></i></a></button>
                              @endif
                          </div>

                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                          
                          <div class="card-body py-2">
                                <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                  </a>
                                  {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                            
                              <div class="d-flex justify-content-between">
                                <div class="product-price"><h3 class="product-title fs-sm">
                                  <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                <div class="star-rating align-center">
                                <!--untitled-1 line 558 -574-->
                                </div>
                              </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small> <i class="bi bi-calendar3"></i>
                                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                      @else
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                      @endif 
                                    </small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>
                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>

                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>
                          </div>

                          <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                              <!--<div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="blue">
                                <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="yellow">
                                <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="pink">
                                <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                              </div>-->
                            </div>

                            <div class="d-flex mb-2">
                              
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                              href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                              <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                              
                              </div>
                              <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                          
                          </div>

                        </div>

                        <hr class="d-sm-none">
                      </div>
                      @elseif ($mytime > $franchise->startdate  && $mytime < $franchise->enddate)
                      <div class="col-md-4 col-sm-6 px-2 mb-4">

                        <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                          <div class="product-card-actions d-flex align-items-center">
                            <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                              @if($witems->contains($franchise->id))
                                  <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <i class=" bi bi-heart-fill"></i></button>
                              @else
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                    <i class=" bi bi-heart"></i></a></button>
                              @endif
                          </div>

                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                          
                          <div class="card-body py-2">
                                <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                  </a>
                                  {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                            
                              <div class="d-flex justify-content-between">
                                <div class="product-price"><h3 class="product-title fs-sm">
                                  <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                <div class="star-rating align-center">
                                <!--untitled-1 line 558 -574-->
                                </div>
                              </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small> <i class="bi bi-calendar3"></i>
                                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                      @else
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                      @endif 
                                    </small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>
                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>

                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>
                          </div>

                          <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                              <!--<div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="blue">
                                <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="yellow">
                                <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="pink">
                                <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                              </div>-->
                            </div>

                            <div class="d-flex mb-2">
                              
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                              href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                              <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                              
                              </div>
                              <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                          
                          </div>

                        </div>

                        <hr class="d-sm-none">
                      </div>
                      @elseif ($mytime > $franchise->startdate  && $mytime == $franchise->enddate)
                      <div class="col-md-4 col-sm-6 px-2 mb-4">

                        <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                          <div class="product-card-actions d-flex align-items-center">
                            <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                              @if($witems->contains($franchise->id))
                                  <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <i class=" bi bi-heart-fill"></i></button>
                              @else
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                    <i class=" bi bi-heart"></i></a></button>
                              @endif
                          </div>

                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                          
                          <div class="card-body py-2">
                                <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                  </a>
                                  {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                            
                              <div class="d-flex justify-content-between">
                                <div class="product-price"><h3 class="product-title fs-sm">
                                  <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                <div class="star-rating align-center">
                                <!--untitled-1 line 558 -574-->
                                </div>
                              </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small> <i class="bi bi-calendar3"></i>
                                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                      @else
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                      @endif 
                                    </small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>
                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>

                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>
                          </div>

                          <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                              <!--<div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="blue">
                                <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="yellow">
                                <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="pink">
                                <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                              </div>-->
                            </div>

                            <div class="d-flex mb-2">
                              
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                              href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                              <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                              
                              </div>
                              <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                          
                          </div>

                        </div>

                        <hr class="d-sm-none">
                      </div>
                      @elseif ($mytime > $franchise->startdate  && $mytime > $franchise->enddate)
                      <div class="col-md-4 col-sm-6 px-2 mb-4">

                        <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                          <div class="product-card-actions d-flex align-items-center">
                            <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                              @if($witems->contains($franchise->id))
                                  <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <i class=" bi bi-heart-fill"></i></button>
                              @else
                                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                  <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                    <i class=" bi bi-heart"></i></a></button>
                              @endif
                          </div>

                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                          
                          <div class="card-body py-2">
                                <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                  </a>
                                  {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                            
                              <div class="d-flex justify-content-between">
                                <div class="product-price"><h3 class="product-title fs-sm">
                                  <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                                <div class="star-rating align-center">
                                <!--untitled-1 line 558 -574-->
                                </div>
                              </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small> <i class="bi bi-calendar3"></i>
                                    @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                      @else
                                        {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                      @endif 
                                    </small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>
                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>

                                  <div class="d-flex justify-content-between">
                                    <div class="product-price"><span class="text">
                                    <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                      <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                    </div>

                                    
                                    <div class="star-rating">
                                    <span class="text">
                                    <small></small></span>
                                    </div>
                                  </div>
                          </div>

                          <div class="card-body card-body-hidden">
                            <div class="text-center pb-2">
                              <!--<div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                                <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="blue">
                                <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="yellow">
                                <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                              </div>
                              <div class="form-check form-option form-check-inline mb-2">
                                <input class="form-check-input" type="radio" name="color1" id="pink">
                                <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                              </div>-->
                            </div>

                            <div class="d-flex mb-2">
                              
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                              <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                              href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                              <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                              
                              </div>
                              <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                          
                          </div>

                        </div>

                        <hr class="d-sm-none">
                      </div>
                    @endif
                    @endforeach
                  
                  @endforeach
                  
                @endforeach
            </div>

            @foreach ($exhibition as $business)
                @php
                    $franchiso = DB::table('events')->where('id', $business->EventName)->get(); 
                @endphp

                @foreach ($franchiso as $franchise)
                  @if ($mytime < $franchise->startdate  && $mytime < $franchise->enddate)
                    <div class="col-md-4 col-sm-6 px-2 mb-4">

                      <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                        <div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                            @if($witems->contains($franchise->id))
                                <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <i class=" bi bi-heart-fill"></i></button>
                            @else
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                  <i class=" bi bi-heart"></i></a></button>
                            @endif
                        </div>

                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                        
                        <div class="card-body py-2">
                              <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                </a>
                                {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                          
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><h3 class="product-title fs-sm">
                                <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                              <div class="star-rating align-center">
                              <!--untitled-1 line 558 -574-->
                              </div>
                            </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small> <i class="bi bi-calendar3"></i>
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                    @else
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                    @endif 
                                  </small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>
                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>

                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>
                        </div>

                        <div class="card-body card-body-hidden">
                          <div class="text-center pb-2">
                            <!--<div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                              <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="blue">
                              <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="yellow">
                              <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="pink">
                              <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                            </div>-->
                          </div>

                          <div class="d-flex mb-2">
                            
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                            href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                            <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                            
                            </div>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                        
                        </div>

                      </div>

                      <hr class="d-sm-none">
                    </div>
                  @elseif ($mytime == $franchise->startdate  && $mytime < $franchise->enddate)
                    <div class="col-md-4 col-sm-6 px-2 mb-4">

                      <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                        <div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                            @if($witems->contains($franchise->id))
                                <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <i class=" bi bi-heart-fill"></i></button>
                            @else
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                  <i class=" bi bi-heart"></i></a></button>
                            @endif
                        </div>

                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                        
                        <div class="card-body py-2">
                              <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                </a>
                                {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                          
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><h3 class="product-title fs-sm">
                                <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                              <div class="star-rating align-center">
                              <!--untitled-1 line 558 -574-->
                              </div>
                            </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small> <i class="bi bi-calendar3"></i>
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                    @else
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                    @endif 
                                  </small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>
                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>

                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>
                        </div>

                        <div class="card-body card-body-hidden">
                          <div class="text-center pb-2">
                            <!--<div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                              <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="blue">
                              <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="yellow">
                              <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="pink">
                              <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                            </div>-->
                          </div>

                          <div class="d-flex mb-2">
                            
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                            href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                            <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                            
                            </div>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                        
                        </div>

                      </div>

                      <hr class="d-sm-none">
                    </div>
                  @elseif ($mytime > $franchise->startdate  && $mytime < $franchise->enddate)
                    <div class="col-md-4 col-sm-6 px-2 mb-4">

                      <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                        <div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                            @if($witems->contains($franchise->id))
                                <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <i class=" bi bi-heart-fill"></i></button>
                            @else
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                  <i class=" bi bi-heart"></i></a></button>
                            @endif
                        </div>

                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                        
                        <div class="card-body py-2">
                              <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                </a>
                                {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                          
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><h3 class="product-title fs-sm">
                                <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                              <div class="star-rating align-center">
                              <!--untitled-1 line 558 -574-->
                              </div>
                            </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small> <i class="bi bi-calendar3"></i>
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                    @else
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                    @endif 
                                  </small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>
                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>

                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>
                        </div>

                        <div class="card-body card-body-hidden">
                          <div class="text-center pb-2">
                            <!--<div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                              <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="blue">
                              <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="yellow">
                              <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="pink">
                              <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                            </div>-->
                          </div>

                          <div class="d-flex mb-2">
                            
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                            href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                            <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                            
                            </div>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                        
                        </div>

                      </div>

                      <hr class="d-sm-none">
                    </div>
                  @elseif ($mytime > $franchise->startdate  && $mytime == $franchise->enddate)
                    <div class="col-md-4 col-sm-6 px-2 mb-4">

                      <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                        <div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                            @if($witems->contains($franchise->id))
                                <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <i class=" bi bi-heart-fill"></i></button>
                            @else
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                  <i class=" bi bi-heart"></i></a></button>
                            @endif
                        </div>

                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                        
                        <div class="card-body py-2">
                              <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                </a>
                                {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                          
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><h3 class="product-title fs-sm">
                                <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                              <div class="star-rating align-center">
                              <!--untitled-1 line 558 -574-->
                              </div>
                            </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small> <i class="bi bi-calendar3"></i>
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                    @else
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                    @endif 
                                  </small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>
                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>

                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>
                        </div>

                        <div class="card-body card-body-hidden">
                          <div class="text-center pb-2">
                            <!--<div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                              <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="blue">
                              <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="yellow">
                              <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="pink">
                              <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                            </div>-->
                          </div>

                          <div class="d-flex mb-2">
                            
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                            href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                            <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                            
                            </div>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                        
                        </div>

                      </div>

                      <hr class="d-sm-none">
                    </div>
                  @elseif ($mytime > $franchise->startdate  && $mytime > $franchise->enddate)
                    <div class="col-md-4 col-sm-6 px-2 mb-4">

                      <div class="card product-card"> <!--<span class="badge bg-danger badge-shadow">Sale</span>-->
                        <div class="product-card-actions d-flex align-items-center">
                          <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                            @if($witems->contains($franchise->id))
                                <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <i class=" bi bi-heart-fill"></i></button>
                            @else
                                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                  <i class=" bi bi-heart"></i></a></button>
                            @endif
                        </div>

                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                        
                        <div class="card-body py-2">
                              <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                </a>
                                {{--<h3 class="product-title fs-sm"><a href="">{{Str::limit($franchise->brand_name, 24)}}</a></h3>--}}
                          
                            <div class="d-flex justify-content-between">
                              <div class="product-price"><h3 class="product-title fs-sm">
                                <a href="{{route('event.details',['slug' => $franchise->slug])}}"><strong>{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</strong></a></h3></div>
                              <div class="star-rating align-center">
                              <!--untitled-1 line 558 -574-->
                              </div>
                            </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small> <i class="bi bi-calendar3"></i>
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                    @else
                                      {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                    @endif 
                                  </small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>
                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                  <div class="product-price"><span class="text">
                                  <small><i class="bi bi-geo-alt-fill fs-sm"></i>{{$franchise -> venue}}, {{$franchise -> city}}</small></span>
                                    <!--<del class="fs-sm text-muted">38.<small>50</small></del>-->
                                  </div>

                                  
                                  <div class="star-rating">
                                  <span class="text">
                                  <small></small></span>
                                  </div>
                                </div>
                        </div>

                        <div class="card-body card-body-hidden">
                          <div class="text-center pb-2">
                            <!--<div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                              <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="blue">
                              <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="yellow">
                              <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                            </div>
                            <div class="form-check form-option form-check-inline mb-2">
                              <input class="form-check-input" type="radio" name="color1" id="pink">
                              <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                            </div>-->
                          </div>

                          <div class="d-flex mb-2">
                            
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a></li>
                            <a class=" text-center btn btn-primary btn-sm mx-1" type="button" 
                            href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                            <i class=" bi bi-cart fs-sm me-1"></i>Apply</a></li>
                            
                            </div>
                            <div class="text-center"><a class="nav-link-style fs-ms" href="{{route('event.details',['slug' => $franchise->slug])}}" data-bs-toggle="modal"><i class=" bi bi-eye align-middle me-1"></i>Contact details</a></div> 
                        
                        </div>

                      </div>

                      <hr class="d-sm-none">
                    </div>
                  @endif
                @endforeach
            @endforeach

            <!-- Banner-->
            <!--<div class="py-sm-2">
              <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-3">
                <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                  <h4 class="fs-lg fw-light mb-2">Converse All Star</h4>
                  <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                </div><img class="d-block ms-auto" src="{{asset ('assets/images/04.jpg')}}" width="100" alt="Shop Converse">
              </div>
            </div>-->
            <!-- Products grid-->
            <div class="row mx-n2">

               <!-- Product-->
               <!--<div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card"><span class="badge bg-danger badge-shadow">Sale</span>
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/02.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s T-shirt</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                        <del class="fs-sm text-muted">38.<small>50</small></del>
                      </div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star-fill active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="white" checked="">
                        <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="blue">
                        <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="yellow">
                        <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="pink">
                        <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                      </div>
                    </div>
                    <div class="d-flex mb-2">
                      <select class="form-select form-select-sm me-2">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                      </select>
                      <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                    </div>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>-->

            </div>
            <hr class="my-3">

           {{--{{$exhibition->links('pagination-links')}}--}}

          </section>         
        </div>
      </div>

      @if(count($selectedImages) > 0)
        <div class="fixed-bottom bg-light p-3 border-top">
          <p class="text-dark"> {{ count($selectedImages) }} Selected Exhibition</p>

          <hr class="">
          <div class="row">
            @foreach($selectedImages as $key => $selectedImageId)
              @if($key < 5)
                @php
                  $selectedImage = DB::table('events')->find($selectedImageId)
                @endphp
                <div class="col-4 col-md-2 position-relative mb-3 mx-1">
                  <img 
                    src="{{url('public/assets/image/exhibition/'.$selectedImage->image)}}" 
                    class="img-fluid"
                    style="cursor: pointer;"
                  >
                </div>
                <!-- Delete Icon -->
                <span class="position-absolute top-0 end-0 m-2">
                  <i 
                    class="text-danger fas fa-times-circle" 
                    style="cursor: pointer;" 
                    wire:click="deleteImage({{ $selectedImageId }})">
                  </i>
                </span>
              @endif
            @endforeach
          </div>

          <div class="d-flex justify-content-between mt-2">
            <!-- Show count and email button -->
            <p>{{ count($selectedImages) }}selected</p>
            <button wire:click="sendEmail" class="btn btn-dark-outline btn-sm">Send Email</button>
          </div>
        </div>
      @endif
      
      
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
        document.addEventListener('DOMContentLoaded', function() {
          document.addEventListener('open-offcanvas' , function() {
            var offCanvas = new bootstrap.Offcanvas(document.getElementById('ooooffCanvasExampleo'));
            offCanvas.show();
          });
        });
      </script>
    @endpush




    
                              
                      