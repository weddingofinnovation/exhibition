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
            padding: 3px 7px;
            border-radius: 5px;
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
            
            
            <div class="d-flex align-items-center justify-content-between mt-2">

              <!-- Left side: Title + Search -->
              <div class="d-flex align-items-center gap-3">
                <div class="h4 fw-bold text-white mb-0">
                  Statistics & Analytics <span class="small fw-normal" style="color: #FF1628;">Business Events</span>
                </div>

                <div class="search-bar w-100">
                  <input type="text" class="form-control bg-dark text-white border-0" placeholder="Search tournament by name">
                </div>
              </div>

              <!-- Right side: Sort + Live -->
              <div class="d-flex gap-2 align-items-center">
                <select class="form-select custom-select w-auto">
                  <option selected>Sort by: Event Date</option>
                  <option>Most Viewed</option>
                  <option>Top Teams</option>
                </select>
                <button class="btn btn-sm fw-bold px-4" style="color:#FF1628;">
                  LIVE Business Events
                </button>
              </div>

            </div>


          <div class="row align-items-center mt-2">

            <!-- Left side: 70% -->
            <div class="col-12 col-md-8 d-flex align-items-center gap-3">
              <div class="h4 fw-bold text-white mb-0">
                Statistics & Analytics <span class="small fw-normal" style="color: #FF1628;">Business Events</span>
              </div>

              <div class="search-bar w-100">
                <input type="text" class="form-control bg-dark text-white border-0" placeholder="Search tournament by name">
              </div>
            </div>

            <!-- Right side: 30% -->
            <div class="col-12 col-md-4 d-flex justify-content-end gap-2 align-items-center">
              <select class="form-select custom-select w-auto">
                <option selected>Sort by: Event Date</option>
                <option>Most Viewed</option>
                <option>Top Teams</option>
              </select>
              <button class="btn btn-sm fw-bold px-4" style="color:#FF1628;">
                LIVE Business Events
              </button>
            </div>

          </div>



              @php 
                $venueoption = DB::table('locations')->whereNotNull('venue')->orderBy('created_at','asc')->limit(10)->get();
                $allcategory = DB::table('categories')->get();
              @endphp

            <!-- Filter Section -->
            <div class="filter-box mt-2">
              <div class="row g-3">
                <div class="col-md-3">

                  <select class="form-select custom-select">
                    <option selected>All Industries</option>
                    @foreach($allcategory as $category)
                      <option>{{ ucwords($category->industry) }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-md-3">
                  <select class="form-select custom-select">
                    <option selected>All Cities</option>
                    <option>Riot</option>
                    <option>Valve</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select custom-select">
                    <option selected>All Venues</option>
                    
                    @foreach($venueoption as $franchise)
                        <option>{{ucwords($franchise->venue)}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select custom-select">
                    <option selected>All Types</option>
                    <option>Entry Free</option>
                    <option>Rating</option>
                    <option>Popular</option>
                    <option>Trending</option>
                    <option>Featured</option>
                    <option>Industry Leader</option>
                    <option>B2B focus</option>
                    <option>Registration open</option>
                    <option>Early Bird</option>
                    <option>Upcoming</option>
                    <option>New Event</option>
                  </select>
                </div>
                
              </div>

              <!-- Tags -->
              <div class="mt-2 d-flex flex-wrap gap-1">
                <button class="tag-btn">Trending</button>
                <button class="tag-btn">International Trade</button>
                <button class="tag-btn">Business Supplies</button>
                <button class="tag-btn">Battle Royale</button>
                <button class="tag-btn">Collegiate</button>
              </div>
            </div>

            
          </div>
        </div>

        <div class="container py-4">
            <div class="row g-3"> <!-- g-3 adds some gap between columns -->
              <div class="border-bottom pt-2 mt-2">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h6 class="fw-bold mb-0">Search your business event get right business people for your business</h6>
                  <a href="#" class="text-primary small">View all</a>
                </div>
              </div>

              @foreach ($exhibition as $business)
                      @php
                          $franchiso = DB::table('events')->where('id', $business->EventName)->get(); 
                      @endphp

                @foreach ($franchiso as $franchise)
                  @if ($mytime < $franchise->startdate  && $mytime < $franchise->enddate)
                      <div class="col-md-4">
                        <div class="card p-3 shadow-sm rounded">
                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <a class="mb-0 fw-bold" href="{{route('event.details',['slug' => $franchise->slug])}}" style="color: #000;">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                                <small class="text-muted">
                                    <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                    @if($witems->contains($franchise->id))
                                        <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <i class=" bi bi-heart-fill"></i></button>
                                    @else
                                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                          <i class=" bi bi-heart"></i></a></button>
                                    @endif
                                  </small>
                            </div>
                            
                              

                            <!-- Company info & tags -->
                            <div class="mb-2">
                                <p class="mb-1">Leading Indian MNC in Beverage</p>
                                <div class="d-flex flex-wrap gap-0">
                                    <span class="badge bg-warning text-dark" style="margin-left: 0px;">{{$franchise->view_count}}+</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Indian MNC</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Fortune India 500 (2023)</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> 
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                  </small>
                              </div>

                            <!-- Details -->
                              <div class="d-flex justify-content-start align-items-center mb-2 gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> {{$franchise -> venue}}</small>
                                  <!-- <small><i class="bi bi-currency-rupee"></i> 14-17 Lacs P.A.</small> -->
                                  <small><i class="bi bi-geo-alt-fill"></i>  {{ucwords(trans(Str::limit($franchise -> city)))}}, {{ucwords(trans(Str::limit($franchise -> country)))}}</small>
                              </div>

                            <!-- Meet for & button -->
                              <div class="border-top pt-2 mt-2">
                                  <small class="text-muted me-2">Meet for:</small>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center gap-2">
                                          
                                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                      </div>
                                      <a class="btn btn-outline-primary btn-sm" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">Share interest</a>
                                  </div>
                              </div>
                        </div>
                      </div>
                    @elseif ($mytime == $franchise->startdate  && $mytime < $franchise->enddate)
                      <div class="col-md-4">
                        <div class="card p-3 shadow-sm rounded">
                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <a class="mb-0 fw-bold" href="{{route('event.details',['slug' => $franchise->slug])}}" style="color: #000;">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                                <small class="text-muted">
                                    <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                    @if($witems->contains($franchise->id))
                                        <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <i class=" bi bi-heart-fill"></i></button>
                                    @else
                                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                          <i class=" bi bi-heart"></i></a></button>
                                    @endif
                                  </small>
                            </div>
                            
                              

                            <!-- Company info & tags -->
                            <div class="mb-2">
                                <p class="mb-1">Leading Indian MNC in Beverage</p>
                                <div class="d-flex flex-wrap gap-1">
                                    <span class="badge bg-warning text-dark" style="margin-left: 0px;">{{$franchise->view_count}}+</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Indian MNC</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Fortune India 500 (2023)</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> 
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                  </small>
                              </div>

                            <!-- Details -->
                              <div class="d-flex justify-content-start align-items-center mb-2 gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> {{$franchise -> venue}}</small>
                                  <!-- <small><i class="bi bi-currency-rupee"></i> 14-17 Lacs P.A.</small> -->
                                  <small><i class="bi bi-geo-alt-fill"></i>  {{ucwords(trans(Str::limit($franchise -> city)))}}, {{ucwords(trans(Str::limit($franchise -> country)))}}</small>
                              </div>

                            <!-- Meet for & button -->
                              <div class="border-top pt-2 mt-2">
                                  <small class="text-muted me-2">Meet for:</small>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center gap-2">
                                          
                                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                      </div>
                                      <a class="btn btn-outline-primary btn-sm" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">Share interest</a>
                                  </div>
                              </div>
                        </div>
                      </div>
                    @elseif ($mytime > $franchise->startdate  && $mytime < $franchise->enddate)
                       <div class="col-md-4">
                        <div class="card p-3 shadow-sm rounded">
                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <a class="mb-0 fw-bold" href="{{route('event.details',['slug' => $franchise->slug])}}" style="color: #000;">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                                <small class="text-muted">
                                    <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                    @if($witems->contains($franchise->id))
                                        <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <i class=" bi bi-heart-fill"></i></button>
                                    @else
                                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                          <i class=" bi bi-heart"></i></a></button>
                                    @endif
                                  </small>
                            </div>
                            
                              

                            <!-- Company info & tags -->
                            <div class="mb-2">
                                <p class="mb-1">Leading Indian MNC in Beverage</p>
                                <div class="d-flex flex-wrap gap-1">
                                    <span class="badge bg-warning text-dark" style="margin-left: 0px;">{{$franchise->view_count}}+</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Indian MNC</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Fortune India 500 (2023)</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> 
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                  </small>
                              </div>

                            <!-- Details -->
                              <div class="d-flex justify-content-start align-items-center mb-2 gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> {{$franchise -> venue}}</small>
                                  <!-- <small><i class="bi bi-currency-rupee"></i> 14-17 Lacs P.A.</small> -->
                                  <small><i class="bi bi-geo-alt-fill"></i>  {{ucwords(trans(Str::limit($franchise -> city)))}}, {{ucwords(trans(Str::limit($franchise -> country)))}}</small>
                              </div>

                            <!-- Meet for & button -->
                              <div class="border-top pt-2 mt-2">
                                  <small class="text-muted me-2">Meet for:</small>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center gap-2">
                                          
                                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                      </div>
                                      <a class="btn btn-outline-primary btn-sm" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">Share interest</a>
                                  </div>
                              </div>
                        </div>
                      </div>
                    @elseif ($mytime > $franchise->startdate  && $mytime == $franchise->enddate)
                      <div class="col-md-4">
                        <div class="card p-3 shadow-sm rounded">
                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <a class="mb-0 fw-bold" href="{{route('event.details',['slug' => $franchise->slug])}}" style="color: #000;">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                                <small class="text-muted">
                                    <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                    @if($witems->contains($franchise->id))
                                        <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <i class=" bi bi-heart-fill"></i></button>
                                    @else
                                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                          <i class=" bi bi-heart"></i></a></button>
                                    @endif
                                  </small>
                            </div>
                            
                              

                            <!-- Company info & tags -->
                            <div class="mb-2">
                                <p class="mb-1">Leading Indian MNC in Beverage</p>
                                <div class="d-flex flex-wrap gap-1">
                                    <span class="badge bg-warning text-dark" style="margin-left: 0px;">{{$franchise->view_count}}+</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Indian MNC</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Fortune India 500 (2023)</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> 
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                  </small>
                              </div>

                            <!-- Details -->
                              <div class="d-flex justify-content-start align-items-center mb-2 gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> {{$franchise -> venue}}</small>
                                  <!-- <small><i class="bi bi-currency-rupee"></i> 14-17 Lacs P.A.</small> -->
                                  <small><i class="bi bi-geo-alt-fill"></i>  {{ucwords(trans(Str::limit($franchise -> city)))}}, {{ucwords(trans(Str::limit($franchise -> country)))}}</small>
                              </div>

                            <!-- Meet for & button -->
                              <div class="border-top pt-2 mt-2">
                                  <small class="text-muted me-2">Meet for:</small>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center gap-2">
                                          
                                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                      </div>
                                      <a class="btn btn-outline-primary btn-sm" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">Share interest</a>
                                  </div>
                              </div>
                        </div>
                      </div>
                    @elseif ($mytime > $franchise->startdate  && $mytime > $franchise->enddate)
                       <div class="col-md-4">
                        <div class="card p-3 shadow-sm rounded">
                            <!-- Header -->
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <a class="mb-0 fw-bold" href="{{route('event.details',['slug' => $franchise->slug])}}" style="color: #000;">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                                <small class="text-muted">
                                    <a class="btn-action nav-link-style me-2" href=""><i class="bi bi-shuffle me-1"></i>Compare</a>
                                    @if($witems->contains($franchise->id))
                                        <button class="btn-wishlist btn-sm" type="button" href="" wire:click.prevent="removefromWishlist({{$franchise->id}})" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <i class=" bi bi-heart-fill"></i></button>
                                    @else
                                        <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="Add to wishlist" aria-label="Add to wishlist">
                                        <a href="#" wire:click.prevent="addtoWishlist({{$franchise->id}},'{{$franchise->eventname}}', 1)">
                                          <i class=" bi bi-heart"></i></a></button>
                                    @endif
                                  </small>
                            </div>
                            
                              

                            <!-- Company info & tags -->
                            <div class="mb-2">
                                <p class="mb-1">Leading Indian MNC in Beverage</p>
                                <div class="d-flex flex-wrap gap-1">
                                    <span class="badge bg-warning text-dark" style="margin-left: 0px;">{{$franchise->view_count}}+</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Indian MNC</span>
                                    <span class="badge bg-light text-dark border" style="margin-left:0 px;">Fortune India 500 (2023)</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-start align-items-center gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> 
                                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y ')}}
                                        @else
                                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                                        @endif 
                                  </small>
                              </div>

                            <!-- Details -->
                              <div class="d-flex justify-content-start align-items-center mb-2 gap-3">
                                  <small><i class="bi bi-briefcase-fill"></i> {{$franchise -> venue}}</small>
                                  <!-- <small><i class="bi bi-currency-rupee"></i> 14-17 Lacs P.A.</small> -->
                                  <small><i class="bi bi-geo-alt-fill"></i>  {{ucwords(trans(Str::limit($franchise -> city)))}}, {{ucwords(trans(Str::limit($franchise -> country)))}}</small>
                              </div>

                            <!-- Meet for & button -->
                              <div class="border-top pt-2 mt-2">
                                  <small class="text-muted me-2">Meet for:</small>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center gap-2">
                                          
                                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="" class="rounded-circle" width="30" height="30">
                                      </div>
                                      <a class="btn btn-outline-primary btn-sm" href="#" wire:click.prevent="store({{$franchise->id}},'{{$franchise->eventname}}', 1)">Share interest</a>
                                  </div>
                              </div>
                        </div>
                      </div>
                  @endif
                @endforeach
              @endforeach
            </div>
        </div>

        <div class="container my-4">
          <div class="row g-4">
            
            <!-- Left card (invitation + jobs) -->
            <div class="col-md-6">
              <div class="card shadow-sm rounded-4 p-3">
                <div class="d-flex">
                  <!-- Left side -->
                  <div class="flex-shrink-0 text-center pe-3">
                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mb-2" style="width:60px; height:60px;">
                      <i class="bi bi-envelope fs-3 text-primary"></i>
                    </div>
                    <h6 class="fw-bold mb-1">NVites: Invitation<br>to apply</h6>
                    <a href="#" class="text-primary small">View all</a>
                  </div>

                  <!-- Divider -->
                  <div class="border-end mx-3"></div>

                  <!-- Right side -->
                  <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <div>
                        <h6 class="fw-bold mb-0">Sales Team Lead</h6>
                        <small class="text-muted">Hiring for Corporate</small>
                      </div>
                      <small class="text-muted">2:46 PM</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <div>
                        <h6 class="fw-bold mb-0">Senior Php Developer/ Tech Lead</h6>
                        <small class="text-muted">Markup Designs</small>
                      </div>
                      <small class="text-muted">2:36 PM</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div>
                        <h6 class="fw-bold mb-0">Senior Php Developer/ Tech Lead</h6>
                        <small class="text-muted">Markup Designs</small>
                      </div>
                      <small class="text-muted">2:35 PM</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right card (AI mock interview) -->
            <div class="col-md-6">
              <div class="card shadow-sm rounded-4 p-4 d-flex flex-row align-items-center" style="background: #f2f0ff;">
                <!-- Icon -->
                <div class="me-3">
                  <div class="bg-white rounded-circle d-flex align-items-center justify-content-center" style="width:70px; height:70px;">
                    <i class="bi bi-robot fs-2 text-primary"></i>
                  </div>
                </div>
                <!-- Text -->
                <div class="flex-grow-1">
                  <h6 class="fw-bold mb-1">Increase your business chances in Events with us</h6>
                  <small class="text-muted">Access AI-powered mock interview and question bank for your desired role</small>
                </div>
                <!-- Button -->
                <div class="ms-3">
                  <button class="btn btn-primary rounded-pill px-3">Start preparing</button>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="container my-4">

          <!-- Top Banner -->
          <div class="card shadow-sm rounded-4 mb-4 p-4" style="background:#e8f4ff;">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
              <!-- Left Text -->
              <div class="mb-3 mb-md-0">
                <h6 class="fw-bold mb-2">Highlight your application and stand out from rest of the applicants</h6>
                <button class="btn btn-primary rounded-pill px-3">Know more</button>
                <div class="small text-muted mt-2">Paid service by Fastforward</div>
              </div>
              <!-- Right Illustration -->
              <div>
                <img src="illustration.png" alt="illustration" class="img-fluid" style="max-height:120px;">
              </div>
            </div>
          </div>

          <!-- Match Section -->
          <div class="card shadow-sm rounded-4 p-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="fw-bold mb-0">How your applies matched your profile in last 7 days?</h6>
              <a href="#" class="text-primary small">View all</a>
            </div>

            <!-- Scrollable stats cards -->
            <div class="d-flex gap-3 overflow-auto pb-2">
              <!-- Card 1 -->
              <div class="card flex-shrink-0 rounded-4 text-center p-3" style="width:150px;">
                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width:50px; height:50px;">
                  <i class="bi bi-key fs-4 text-primary"></i>
                </div>
                <h6 class="fw-bold small mb-1">Keyskills</h6>
                <small class="text-muted">Planning, Budget...</small>
                <div class="fw-bold mt-2">% match</div>
              </div>

              <!-- Card 2 -->
              <div class="card flex-shrink-0 rounded-4 text-center p-3" style="width:150px;">
                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width:50px; height:50px;">
                  <i class="bi bi-building fs-4 text-primary"></i>
                </div>
                <h6 class="fw-bold small mb-1">Industry</h6>
                <small class="text-muted">Advertising & Marketing</small>
                <div class="fw-bold mt-2">0% match</div>
              </div>

              <!-- Card 3 -->
              <div class="card flex-shrink-0 rounded-4 text-center p-3" style="width:150px;">
                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width:50px; height:50px;">
                  <i class="bi bi-people fs-4 text-primary"></i>
                </div>
                <h6 class="fw-bold small mb-1">Department</h6>
                <small class="text-muted">Marketing & Comm..</small>
                <div class="fw-bold mt-2">29% match</div>
              </div>

              <!-- Card 4 -->
              <div class="card flex-shrink-0 rounded-4 text-center p-3" style="width:150px;">
                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2" style="width:50px; height:50px;">
                  <i class="bi bi-graph-up fs-4 text-primary"></i>
                </div>
                <h6 class="fw-bold small mb-1">Early Applicant</h6>
                <small class="text-muted">Applied to fresh jobs</small>
                <div class="fw-bold mt-2">14% match</div>
              </div>
            </div>
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




    
                              
                      