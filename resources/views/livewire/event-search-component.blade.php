@section('page_title', $pageTitle)
@section('page_description', $pageDescription)
@section('page_keywords', 'Council, Innovation, sell your business, market, expand your franchise, buy a brand licenese, business_design, business_strategy, business_design_sprint, innovation_accelerator, product_service, go_to_market, entrepreneur_residence, strategy_sprint, creative')

<main>
    <!--google-->
        <div class="bg-secondary d-lg-none">
          <div class=" container">
            <div class="row ">
              <div class="col-md-6 offset-md-3 d-flex justify-content-between ">

                    <div class="align-content-center py-2 ">
                    <a href="#"><i class="bi bi-chevron-left"></i></a>  
                    </div>
              
                    {{-- <div class="text-center fs-sm py-1">
                          <div>Upcoming {{$this->venue ?? ' no venue'}}</div> 
                            {{$this->city ?? ' no city'}} {{$this->country ?? ' no country'}}{{$searchVenue->count()}}
                    </div> --}}


                    <div class="text-center fs-sm py-2">
                          exhibition in {{$this->city ?? ' no city'}},{{$this->country ?? ' no country'}}</div>



                    <div class="align-content-center py-2">
                    <a href=""><i class="bi bi-filter"></i></a>    
                    </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container d-lg-none">
          <div class="row">
            <div class="col-md-6 offset-md-3">
              
            <div class="mb-4 mb-lg-5">
              <!-- Nav tabs-->
              <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
                <li class="nav-item border-bottom"><a class="nav-link px-1 active fs-sm" href="#details" data-bs-toggle="tab" role="tab">Browse {{$searchVenue->count()}}</a></li>
                <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#reviews" data-bs-toggle="tab" role="tab"> Saved Events</a></li>
              </ul>

                <!-- <div class="d-flex pb-2">
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Today</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Tomorrow</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">This weekend</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Week</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next weekend</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">This Month</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Month</span>
                </div> -->

                <div class="tab-content pt-1">
                
                    <!-- Product details tab-->
                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                      <!-- details test tickets-->
                      @php
                            $witems = Cart::instance('wishlist')->content()->pluck('id'); 
                      @endphp

                      <div class="row mb-5 pb-2">
                        
                        @foreach ($searchVenue  as $business)
                          @php
                              $franchiso = DB::table('events')->where('id', $business->EventName)->get(); 
                          @endphp

                          @foreach ($franchiso as $franchise)
                            test1
                                  <div class="container">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                      <div class="col  pr-0">
                                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                            @else
                                              <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                              <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                          @endif 
                                          @php 
                                            
                                            
                                          @endphp
                                            
                                              <a href="#"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
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
                                        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
                                      </div>

                                      <div class="col-3  p-0">
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="exhibition in {{Str::limit($franchise->city, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div>
                             
                             
                          @endforeach
                        @endforeach

                        @foreach($searchVenue  as $franchise)
                        test2
                          <div class="container">
                            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                              <div class="col  pr-0">
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                      <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                    @else
                                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                      <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                                  @endif 
                                  @php 
                                    
                                    
                                  @endphp
                                    
                                      <a href="#"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
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
                                <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue ?? 'not found'))}}, {{ucfirst(trans($franchise->city ?? 'not found'))}}</div>
                              </div>

                              <div class="col-3  p-0">
                                <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                    <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                
                    <!-- Reviews tab-->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                      <div class="container mt-5">

                        <div class="row text-center">
                          <i class="bi bi-bookmark"></i>
                          <p>Saving an event will add it to this tab so that you can find it later</p>
                          <a href="" class="btn btn-primary text-capitalize">return to search results</a>
                          
                              <div class="text-center  fs-md fw-bold">Our Data, Your Customer ...</div>
                                <div class="grido">
                                <a class="element-item transition metal" data-category="transition" href="#">

                                    <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                                      <h3 class="name">Visit Plan</h3>
                                    <!-- </a>  -->
                                    <!-- <p class="symbol">count</p> -->
                                    <!-- <p class="number">80</p>
                                    <p class="weight">200.59</p> -->
                                </a>

                                <a class="element-item transition metal" data-category="transition" href="#">

                                    <!-- <a  href="{{route('admin.dashboard', ['board' => 'event'])}}"> -->
                                      <h3 class="name">Exhibit Plan</h3>
                                    <!-- </a>  -->
                                    <!-- <p class="symbol">count</p> -->
                                    <!-- <p class="number">80</p>
                                    <p class="weight">200.59</p> -->
                                </a>
                              </div>
                          

                          
                        </div>
                       
        <h1>Plan Your Exhibition</h1>

        <div class="section">
            <h2>Choose Your Event</h2>
            <p>Find the right exhibition to showcase your products or explore the latest trends.</p>
        </div>

        <div class="section">
            <h2>Why Exhibit?</h2>
            <p>Connect with potential clients and elevate your brand.</p>
        </div>

        <div class="section">
            <h2>Why Visit?</h2>
            <p>Discover new products and network with industry experts.</p>
        </div>

        <div class="cta">
            <a href="#">Explore Events</a>
        </div>
    </div>

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
          box-shadow: 0 0 5px rgba(0, 255, 153, 0.5);
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

          <div class="row align-items-center mt-2">

            <!-- Left side: 70% -->
            <div class="col-12 col-md-8 d-flex align-items-center gap-3">
              <div class="h4 fw-bold text-white mb-0">
                Upcoming Exhibition, Conference, Awards <span class="small fw-normal" style="color: #FF1628;">Business Events</span>
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

     {{-- 
      <div class="page-title-overlap bg-accent pt-4 d-none d-sm-block">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="{{asset('/')}}"><i class=" bi bi-house-fill"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{asset('/')}}"><i class=" bi bi-chevron-right"></i>Exhibition</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page"><i class=" bi bi-chevron-right"></i>Business </li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">{{$this->venue ?? ' no venue'}}</h1>
            {{$this->city ?? ' no city'}} {{$this->country ?? ' no country'}}{{$searchVenue->count()}}
          </div>
        </div>
      </div> --}}
  
      <div class="container pb-5 mb-2 mb-md-4 d-none d-sm-block">
        <div class="row">
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
         
            <!-- Item -->
            <div class="row mx-n2">
              @php $witems = Cart::instance('wishlist')->content()->pluck('id');  @endphp
             

             
                    @foreach ($searchVenue as $franchise) 
                    
                    <!-- new test laptop -->
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
                        
                  @endforeach
              
            </div>

            

            <!-- Banner-->
            <div class="py-sm-2">
              <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-3">
                <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                  <h4 class="fs-lg fw-light mb-2">Converse All Star</h4>
                  <h3 class="mb-4">Make Your Day Comfortable</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
                </div><img class="d-block ms-auto" src="{{asset ('assets/images/04.jpg')}}" width="100" alt="Shop Converse">
              </div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">

               <!-- Product-->
               <div class="col-md-4 col-sm-6 px-2 mb-4">
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
              </div>

            </div>
            <hr class="my-3">

           {{--{{$searchVenue->links('pagination-links')}}--}}

          </section>         
        </div>
      </div>
  </main>