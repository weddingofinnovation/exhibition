@section('page_title', 'Find Great Exhibition To Exhibit')
@section('page_description', 'Discover India premier event publishing platform, showcasing the best upcoming exhibitions, conferences, trade shows, global seminars, networking meets and providing a platform for organizers to  exhibit their remarkable events.')
@section('page_keyword', 'Great Place to Exhibit, find right place, find right time, find right people, World largest business event platform, find all upcoming events, business conferences, exhibition 2024, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers.  Manage, sell event tickets and promote your event on exhbition.org.in, exhibition')

<main> 
  
    <section class="container py-5 d-sm-none">
      <div class=" rounded-3" >
        <div class="row align-items-center ">
          <div class="col-md-4">
            <div class="row">
                <div class="px-4 pe-sm-0 ps-sm-5 "><span class=" fs-xs text-primary">Right Place, Right Time, Right People</span>
                  
                <!-- <span class="badge bg-danger">Free</span> -->
                
                {{--<h5 class="mt-4 mb-1 text-body fw-light">Free</h5>--}}
                  <div class="mb-1 display-1"> Great starts here.</div>
                  <p class=" fw-light lh-1 mt-5"></p> 
                  <!-- <a class="btn btn-outline-primary mt-2" href="{{route('coievent.add',['board' => 'add-your-event'])}}">Search Right Place<i class="bi bi-chevron-right fs-ms ms-1"></i></a> -->

                </div>

                <!-- <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Free</span>
                  {{--<h5 class="mt-4 mb-1 text-body fw-light">Free</h5>--}}
                    <h1 class="mb-1 display-1"> Great starts here.</h1>
                  <p class=" fw-light lh-1">Introducing Great Place To Business India's First Ever Event Publishing Platform</p>
                  <a class="btn btn-accent mt-4" href="{{route('coievent.add',['board' => 'add-your-event'])}}">Expand your Business <i class="bi bi-chevron-right fs-ms ms-1"></i></a>

                </div> -->
                <!-- <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Free</span>
                  {{--<h5 class="mt-4 mb-1 text-body fw-light">Free</h5>--}}
                  <h1 class="mb-1"> Add to calender <br> button</h1>
                  <p class=" fw-light lh-1">Share your events with the #1 add to calender button on the internet.</p>
                  <a class="btn btn-accent mt-4" href="{{route('coievent.add',['board' => 'add-your-event'])}}">Get your button <i class="bi bi-chevron-right fs-ms ms-1"></i></a>

                </div> -->

                {{--<div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get Certify</span>
                  <h5 class="mt-4 mb-1 text-body fw-light">Best Place to Exhbit</h5>
                  <h2 class="mb-1"> Brands More <br> Prospects & Leads</h2>
                  <p class=" fw-light">Share your unique business, vistors, experience <br> with your competitors</p>
                  <a class="btn btn-accent" href="">Join The exhibition Network <i class="bi bi-arrow-right fs-ms ms-1"></i></a>
                </div>

                <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Get access</span>
                  <h5 class="mt-4 mb-1 text-body fw-light">Helping Businesses</h5>
                  <h2 class="mb-1"> Identify More <br> Prospects & Leads</h2>
                  <p class=" fw-light">Discover leads that have engaged<br> with your competitors</p>
                  <a class="btn btn-accent" href="">Get Free COI Page <i class="bi bi-arrow-right fs-ms ms-1"></i></a>
                </div>--}}
            </div>

            <a href="{{route('search.events')}}">
              <div class="widget">
                <!-- <h3 class="widget-title">Generate QR</h3> -->
                
                  <form action="" class="subscription-form validate">
                    <div class="input-group flex-nowrap">
                      <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                      <input type="text" class="form-control rounded-start"  placeholder="Find your Right Place" >
                      <button class="btn btn-primary" type="submit" name=""> Search</button>
                    </div>

                    <div class="fs-xs form-text">*Join our movement <br> Make India a Great Exhibition To Exhibit</div>
                    <div class="subscription-status"></div>
                  </form>
                
              </div>
            </a>

          </div>
          
          <div class=" col-md-8 d-none d-sm-block pr-5">
            
            
            <div class="d-flex my-Slider1">
                  <!-- Product-->
                @foreach ($evento as $franchise)
                  <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-1">
                    <div class="card product-card">
                      <div class="card-body py-1">
                        <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                          <span class="text-bolder">
                              @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y ')}}
                              @else
                                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                              @endif 
                          </span>
                        </a>
                        <div class="d-flex justify-content-between">
                          <div class="product-price">
                            <div class="product-title h3 fs-sm mb-0">
                              <a href="{{route('event.details',['slug' => $franchise->slug])}}" class="fw-normal">
                                {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a> </div>
                            </div>
                        </div>
                      </div>

                    </div>
                    <!--<hr class="d-sm-none">-->
                  </div>
                @endforeach
            </div>

            <div class="d-flex my-Slider2">
              <!-- Product-->
              @foreach ($eventD as $franchise)
                <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-4">
                  <div class="card product-card">
                    <div class="card-body py-2">
                      <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                        <span class="text-bolder">
                            @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                              {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y ')}}
                            @else
                              {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                            @endif 
                        </span>
                      </a>
                      <div class="d-flex justify-content-between">
                        <div class="product-price">
                          <div class="product-title h3 fs-sm mb-0">
                            <a href="{{route('event.details',['slug' => $franchise->slug])}}" class="fw-normal">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                          </div>
                          
                          <!-- <div class=" fs-sm fw-light"><span class=" fs-sm fw-light">{{ucfirst(trans($franchise -> venue))}}</span>
                          {{ucfirst(trans($franchise -> city))}}</div> -->
                          </div>
                      </div>
                    </div>
                    <div class="card-body card-body-hidden">
                      <div class="mb-2">
                        <a class="btn btn-primary btn-sm d-block w-auto mx-1" type="" href="{{route('event.details',['slug' => $franchise->slug])}}"><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                      </div>
                    </div>
                  </div>
                  <!--<hr class="d-sm-none">-->
                </div>
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </section>
  
    <style>
        /* Custom Styling */
        .search-section {
            background: linear-gradient(to right, #f8f3ff, #f0e6ff);
            padding: 60px 0;
            text-align: center;
        }

        .search-title {
            /* font-size: 32px; */
            font-weight: bold;
            color: #03593e;
            margin-bottom: 20px;
        }

        .search-box {
            display: flex;
            background: white;
            border-radius: 50px;
            padding: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .search-box input, .search-box select {
            border: none;
            outline: none;
            padding: 12px;
            flex: 1;
        }

        .search-box button {
            background: #7d00ff;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: bold;
        }

        .search-box button:hover {
            background: #6600cc;
        }
    </style>

        <!-- bg-faded-info World leading fastest Introducing Great Exhibition To Exhibit Business India First Ever Event Publishing Platform.-->
        <section class="search-section d-none d-md-block">
            <div class="container">
            <span class=" fs-xs text-primary text-center">Right Place, Right Time, Right People</span>
                <h2 class="search-title text-center">Over 500 events delivered perfectly</h2>

                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="search-box d-flex">
                            <input type="text" class="form-control" placeholder="Search by event, month or today">
                            <!-- <input type="text" class="form-control" placeholder="Venue ...i.e. pragati maidian"> -->
                            <select class="form-select">
                                <option>Venue</option>
                
                            </select>
                            <button type="submit" class="btn">Plan your Event</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
             
        <style>
            /* Featured Companies - Auto Scrolling */
            .scroll-container {
                display: flex;
                overflow: hidden;
                white-space: nowrap;
                gap: 15px;
                padding: 10px;
                position: relative;
                width: 100%;
            }
            
            .scroll-content {
                display: flex;
                animation: scrollLeft 50s linear infinite;
                gap: 15px;
            }

            .scroll-content img {
                max-height: 50px;
                object-fit: contain;
                /* border: 1px solid #ddd;
                border-radius: 5px; */
                padding: 10px;
                background: #fff;
            }

            /* Keyframes for Auto Scroll */
            @keyframes scrollLeft {
                0% { transform: translateX(0%); }
                100% { transform: translateX(-100%); }
            }

            /* Duplicate content to create infinite scrolling */
            .scroll-content:hover {
                animation-play-state: paused;
            }
        </style>

        <div class="container mt-4 d-none d-md-block">
            <!-- <h5 class="mb-3">Featured Companies</h5>-->
            <div class="d-flex align-items-center mb-3">
              <h5 class="me-3">Featured Companies</h5>

              <div class="scroll-container">
                @php 
                  $photos = DB::table('brands')->whereNotNull('brand_logo')->paginate(50);
                @endphp
                  <div class="scroll-content">
                    @foreach($photos as $image)
                      <img src="{{url('public/assets/image/exhibition/'.$image->brand_logo)}}" alt="HTC">
                    @endforeach
                  </div>
              </div>
            </div>
        </div>


        <!--Trending Exhibition-->
        @livewire('trending-exhibition-component')

        
        

        
        
     
        <style>
            .featured-companies {
                display: flex;
                align-items: center;
                gap: 15px;
                overflow-x: auto;
                padding: 20px;
                white-space: nowrap;
                scrollbar-width: none;
            }
            .featured-companies img {
                height: 90px;
                object-fit: contain;
            }
            .popular-categories {
                display: flex;
                flex-wrap: wrap;
                gap: 15px;
                padding: 20px;
            }
            .category-item {
                display: flex;
                align-items: center;
                padding: 10px 15px;
                border: 1px solid #ddd;
                border-radius: 8px;
                background-color: #FCEAE4;
                font-size: 14px;
                font-weight: 500;
                white-space: nowrap;
                cursor: pointer;
                transition: background 0.3s ease-in-out;
            }
            .category-item:hover {
                background-color: #FAD4C0;
            }
            .category-item i {
                margin-right: 8px;
                color: #c47151;
            }

            
        </style>

        <div class="container mt-4 d-none d-md-block">
            <!-- Popular Companies -->
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-3">Popular Industries</h5>
                <div class="featured-companies">
                  @foreach ($getnamecategoryresult as $categ) 
                    @php
                      $findcountevent = DB::table('expos')->where('id', $categ->Category)->where('admstatus',1)->get();
                    @endphp
                    
                    @foreach($findcountevent as $finderlo)
                        <span class="category-badge" href="#" wire:click.prevent="insertEventToSess({{$finderlo->id}})">{{ucwords(trans($finderlo->tag))}}</span>
                    @endforeach
                  @endforeach
                </div>
            </div>

            <!-- Popular City -->
            <div class="d-flex align-items-center mb-3">
                <h5 class="me-3">Popular City</h5>
                <div class="featured-companies">
                <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'delhi', 'country' => 'india' ])}}" class="city-item">
                    <img src="{{url('public/assets/image/city/ncr.png')}}" alt="" class="city-icon">Delhi
                  </a>
                  <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'mumbai', 'country' => 'india' ])}}" class="city-item">
                    <img src="{{url('public/assets/image/city/mum.png')}}" alt="" class="city-icon">Mumbai
                  </a>
                  <a href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'hyderabad', 'country' => 'india' ])}}" class="city-item">
                    <img src="{{url('public/assets/image/city/hyd.png')}}" alt="" class="city-icon">Hyderabad
                  </a>

                  <a class="city-item" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'bangalore', 'country' => 'india' ])}}">
                    <img src="{{url('public/assets/image/city/bang.png')}}" alt="" class="city-icon">Bangalore</a>

                  <a class="city-item" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'chennai', 'country' => 'india' ])}}">
                    <img src="{{url('public/assets/image/city/chen.png')}}" alt="" class="city-icon">Chennai</a>

                  <a class="city-item" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'chandigarh', 'country' => 'india' ])}}">
                    <img src="{{url('public/assets/image/city/chd.png')}}" alt="" class="city-icon">Chandigarh</a>

                  <a class="city-item" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'kolkata', 'country' => 'india' ])}}">
                    <img src="{{url('public/assets/image/city/kolk.png')}}" alt="" class="city-icon">Kolkata</a>

                  <a class="city-item" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'ahmdebad', 'country' => 'india' ])}}">
                    <img src="{{url('public/assets/image/city/ahd.png')}}" alt="" class="city-icon">ahmdebad</a>
                </div>
            </div>


            <div class="d-flex align-items-center mb-3">
              <h5 class="me-3">Popular Venue</h5>
              <style>
                .scroll-container {
                            display: flex;
                            overflow-x: auto;
                            white-space: nowrap;
                            gap: 15px;
                            padding: 10px;                      
                            scrollbar-width: none;
                            -ms-overflow-style: none;
                          }
                
                .scroll-container::-webkit-scrollbar{
                  display: none;
                }
                .city-item {
                  text-decoration: none;
                  color: black;
                  font-weight: 500;
                  text-align: center;
                  flex: 0 0 auto;
                  width: 90px;
                }
                .city-icon {
                  width: 160px;
                  height: 60px;
                }
                .selected{
                  color: red !important;
                }
              </style>

              <div class="featured-companies">
                  @foreach ($getnamecategoryresult as $categ) 
                    @php
                      $findcountevent = DB::table('expos')->where('id', $categ->Category)->where('admstatus',1)->get();
                    @endphp
                    
                    @foreach($findcountevent as $finderlo)
                        <span class="category-badge" href="#" wire:click.prevent="insertEventToSess({{$finderlo->id}})">{{ucwords(trans($finderlo->tag))}}</span>
                    @endforeach
                  @endforeach
              </div>
            </div>

            <!-- Popular Categories -->
            <h5 class="mb-3">Popular Categories</h5>
            <div class="popular-categories">
                <div class="category-item">
                  
                    <i class="bi bi-bank"></i> Banking
                </div>
                <div class="category-item">
                  
                    <i class="bi bi-house"></i> Work From Home
                </div>
                <div class="category-item">
                  
                    <i class="bi bi-person"></i> HR
                </div>
                <div class="category-item">
                  
                    <i class="bi bi-briefcase"></i> Sales
                </div>
                <div class="category-item">
                  
                    <i class="bi bi-calculator"></i> Accounting
                </div>

                <div class="category-item">
                  
                    <i class="bi bi-headset"></i> Customer Support
                </div>
                <div class="category-item">
                  
                    <i class="bi bi-calendar-event"></i> Event Management
                </div>
                <div class="category-item">
                  
                    <i class="bi bi-laptop"></i> IT
                </div>
                <div class="category-item">
                  
                    <i class="bi bi-code-slash"></i> SQL
                </div>
                <div class="category-item">
                    <i class="bi bi-terminal"></i>
                    Oracle
                </div>
                <div class="category-item">
                    <i class="bi bi-palette"></i> Graphic Design
                </div>
                <div class="category-item"> 
                    <i class="bi bi-megaphone"></i>
                  Digital Marketing
                </div>
            </div>
        </div>

        <style>
          .companies-section {
              background-color: #f8f9fa;
              padding: 60px 0;
          }
          .companies-title {
              font-size: 28px;
              font-weight: bold;
              text-align: center;
              margin-bottom: 40px;
          }
          .company-card {
              background: white;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
              text-align: center;
              transition: transform 0.3s;
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              height: 100%;
          }
          .company-card:hover {
              transform: translateY(-5px);
          }
          .company-logo {
              width: 80px;
              height: 80px;
              object-fit: contain;
              margin-bottom: 15px;
          }
          .company-name {
              font-size: 18px;
              font-weight: bold;
              margin-bottom: 5px;
          }
          .company-jobs {
              color: #6c757d;
              font-size: 14px;
          }
          @media (max-width: 767px) {
              .company-card {
                  margin-bottom: 20px;
              }
          }
        </style>

   <!-- <section class="companies-section d-none d-md-block">
            <div class="container">
                <h2 class="companies-title">Featured <span class="text-primary">Companies</span></h2>
                <div class="row justify-content-center">

                    
                    <div class="col-md-3 col-6 d-flex">
                        <div class="company-card w-100">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" class="company-logo" alt="Google">
                            <h5 class="company-name">Google</h5>
                            <p class="company-jobs">500+ Openings</p>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-6 d-flex">
                        <div class="company-card w-100">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" class="company-logo" alt="Microsoft">
                            <h5 class="company-name">Microsoft</h5>
                            <p class="company-jobs">320+ Openings</p>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-6 d-flex">
                        <div class="company-card w-100">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg" class="company-logo" alt="Amazon">
                            <h5 class="company-name">Amazon</h5>
                            <p class="company-jobs">700+ Openings</p>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-6 d-flex">
                        <div class="company-card w-100">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/bd/Tesla_Motors.svg" class="company-logo" alt="Tesla">
                            <h5 class="company-name">Tesla</h5>
                            <p class="company-jobs">150+ Openings</p>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-6 d-flex">
                        <div class="company-card w-100">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg" class="company-logo" alt="IBM">
                            <h5 class="company-name">IBM</h5>
                            <p class="company-jobs">280+ Openings</p>
                        </div>
                    </div>

                    
                    <div class="col-md-3 col-6 d-flex">
                        <div class="company-card w-100">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/Meta_Platforms_Inc._logo.svg" class="company-logo" alt="Meta">
                            <h5 class="company-name">Meta</h5>
                            <p class="company-jobs">430+ Openings</p>
                        </div>
                    </div>

                </div>
            </div>
        </section> -->

        

        <!--list-->
        <!-- <section class="d-sm-none">
          <div class="d-flex  align-items-center">
            <a class="d-flex align-items-center bg-faded-info rounded-3  ps-1 mb-1 me-xl-0" href="#" style="min-width: auto;">
              <img src="image/banner-sm01.png" width="200 rem" alt="Banner">
                <div class="py-4 pr-4">
                  <h5 class="mb-2"><span class="fw-light">Gift World</span><br>Expo <span class="fw-light"></span><br>2023</h5>
                    <div class="text-info fs-sm">Register Now<i class=" bi bi-arrow-right fs-xs ms-1"></i></div>
                </div>
            </a>
            <a class="d-flex align-items-center bg-faded-info rounded-3  ps-1 mb-1 me-xl-0" href="#" style="min-width: auto;">
              <img src="image/banner-sm01.png" width="200 rem" alt="Banner">
                <div class="py-4 pr-4">
                  <h5 class="mb-2"><span class="fw-light">Next Gen</span><br>Video <span class="fw-light">with</span><br>360 Cam</h5>
                    <div class="text-info fs-sm">Shop now<i class=" bi bi-arrow-right fs-xs ms-1"></i></div>
                </div>
            </a>
            <a class="d-flex align-items-center bg-faded-info rounded-3  ps-1 mb-1 me-xl-0" href="#" style="min-width: auto;">
              <img src="image/banner-sm01.png" width="200 rem" alt="Banner">
                <div class="py-4 pr-4">
                  <h5 class="mb-2"><span class="fw-light">Next Gen</span><br>Video <span class="fw-light">with</span><br>360 Cam</h5>
                    <div class="text-info fs-sm">Shop now<i class=" bi bi-arrow-right fs-xs ms-1"></i></div>
                </div>
            </a>
          </div>
        </section> -->

        
        <!--COI Awards-->
        @livewire('trending-award-component')

        <!-- Promo banner-->
        <section class="container mt-4 mb-grid-gutter">
          <div class="bg-faded-info rounded-3 py-2">
            <div class="row align-items-center">
              <div class="col-md-4">
                <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Limited Offer</span>
                  <h3 class="mt-3 mb-1 text-body fw-light">All new</h3>
                  <h2 class="mb-1">Turn your Ideas,<br> into a <span class="text-primary">Startup.</span> </h2>
                  <p class="h5 text-body fw-light">at discounted price. Hurry up!</p>
                  <div class="countdown py-2 h4" data-countdown="07/01/2021 07:00:00 PM">
                    <div class="countdown-days"><span class="countdown-value">43</span><span class="countdown-label text-muted">d</span></div>
                    <div class="countdown-hours"><span class="countdown-value">00</span><span class="countdown-label text-muted">h</span></div>
                    <div class="countdown-minutes"><span class="countdown-value">19</span><span class="countdown-label text-muted">m</span></div>
                    <div class="countdown-seconds"><span class="countdown-value">33</span><span class="countdown-label text-muted">s</span></div>
                  </div><a class="btn btn-accent mr-3" href="{{route('login')}}">Get Started </a> Learn More <i class=" bi bi-chevron-right fs-ms ms-1"></i>
                </div>
              </div>
              
              <!--<div class="col-md-7 d-none d-sm-block">
                <img src="{{asset ('images/7.jpg')}}" alt="iPad Pro Offer"></div>-->
              <div class="col-md-8 d-none d-sm-block">
                <div class="d-flex my-Slider7">
                    <!-- Product-->
                    @foreach ($evento as $franchise)
                      <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                        <div class="card product-card">
                          <div class="card-body py-2">
                            <a class="product-meta d-block fs-xs pb-1" href="{{route('event.details',['slug' => $franchise->slug])}}">
                              <span class="text-bolder">
                                  @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y ')}}
                                  @else
                                    {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                  @endif 
                              </span>
                            </a>
                            <div class="d-flex justify-content-between">
                              <div class="product-price">
                                <div class="product-title h3 fs-sm mb-0">
                                  <a href="{{route('event.details',['slug' => $franchise->slug])}}" class="fw-normal">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                                  <span class="fs-xs fw-light">{{$franchise -> venue}}, {{$franchise -> city}}</span>
                                </div>
                            </div>
                          </div>

                        </div>
                        
                      </div>
                    @endforeach
                </div>

                <div class="d-flex my-Slider8">
                  <!-- Product-->
                  @foreach ($evento as $franchise)
                    <div class="col-lg-3 col-md-4 col-sm-6 pr-1 mb-4">
                      <div class="card product-card">
                        <div class="card-body py-2">
                          <a class="product-meta d-block fs-xs pb-1" href="#">
                            <span class="text-bolder">
                                @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                  {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y ')}}
                                @else
                                  {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                                @endif 
                            </span>
                          </a>
                          <div class="d-flex justify-content-between">
                            <div class="product-price">
                              <div class="product-title h3 fs-sm mb-0">
                                <a href="#" class="fw-normal">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                              
                              </div>
                          </div>
                        </div>
                        <div class="card-body card-body-hidden">
                          <div class="mb-2">
                            <a class="btn btn-primary btn-sm d-block w-auto mx-1" type="" href=""><i class=" bi bi-brush fs-sm me-1"></i>Know More</a>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  @endforeach
                </div>
              </div>
            
            </div>
          </div>
        </section>

        <!--Trending conference-->
        @livewire('conference-component')

        @livewire('trending-dealer-distribution-component')
          
        <!--Trending Magazine-->
        @livewire('trending-magazine-component')
       
        <!-- Creators-->
         @livewire('trending-creator-component')
        
        <!--contact-->        
        <div class="container-fluid px-0 d-none" id="listexpo">
          <div class="row g-0">
            <div class="col-lg-6 iframe-full-height-wrap">
              <div class="mx-auto py-lg-5 my-5 text-dark text-center" style="max-width: 35rem;">
                  <p>BE SEEN</p>
                  <h2 class="display-5 text-dark mb-2 ">
                Business profile
                  </h2>
                  <p class="fw-light  mx-auto lead text-dark pb-2">Create a business profile with helpful information for your business auidence like your Business Model, business description, email address, and website.
                  </p>
                  <a href="#opening" class="btn btn-lg  btn-outline-primary fw-bolder my-2">Learn more about</a>
              </div>
            </div>
          
            @livewire('event-form-component')
          </div>
        </div>

        <style>
          .job-section {
              background-color: #f8f9fa;
              padding: 60px 0;
          }
          .job-title {
              font-size: 28px;
              font-weight: bold;
              text-align: center;
              margin-bottom: 40px;
          }
          .job-card {
              background: white;
              padding: 20px;
              border-radius: 10px;
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
              text-align: center;
              transition: transform 0.3s;
              display: flex;
              flex-direction: column;
              align-items: center; /* Centers horizontally */
              justify-content: center; /* Centers vertically */
              height: 100%; /* Ensures uniform height */
          }
          .job-card:hover {
              transform: translateY(-5px);
          }
          .job-icon {
              width: 60px;
              height: 60px;
              margin-bottom: 15px;
          }
          .job-heading {
              font-size: 18px;
              font-weight: bold;
              margin-bottom: 5px;
          }
          .job-desc {
              color: #6c757d;
              font-size: 14px;
          }
          @media (max-width: 767px) {
              .job-card {
                  margin-bottom: 20px;
              }
          }
        </style>

        <section class="job-section d-none d-md-block">
            <div class="container">
                <h2 class="job-title">Find the perfect Event for <span class="text-primary">Business</span></h2>
                <div class="row justify-content-center">

                    <!-- Highlight -->
                    <div class="col-md-3 col-6 d-flex">
                        <div class="job-card w-100">
                            <img src="https://cdn-icons-png.flaticon.com/128/854/854894.png" class="job-icon" alt="Highlight">
                            <h5 class="job-heading">Highlight</h5>
                            <p class="job-desc">Stand out to events</p>
                        </div>
                    </div>

                    <!-- Prep -->
                    <div class="col-md-3 col-6 d-flex">
                        <div class="job-card w-100">
                            <img src="https://cdn-icons-png.flaticon.com/128/942/942928.png" class="job-icon" alt="Prep">
                            <h5 class="job-heading">Regional</h5>
                            <p class="job-desc">Up your interview success rate</p>
                        </div>
                    </div>

                    <!-- Learn -->
                    <div class="col-md-3 col-6 d-flex">
                        <div class="job-card w-100">
                            <img src="https://cdn-icons-png.flaticon.com/128/869/869636.png" class="job-icon" alt="Learn">
                            <h5 class="job-heading">Execute</h5>
                            <p class="job-desc">Expertise to get ahead</p>
                        </div>
                    </div>

                    <!-- Network -->
                    <div class="col-md-3 col-6 d-flex">
                        <div class="job-card w-100">
                            <img src="https://cdn-icons-png.flaticon.com/128/2972/2972385.png" class="job-icon" alt="Network">
                            <h5 class="job-heading">Network</h5>
                            <p class="job-desc">Grow with peers & mentors</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

</main>

@push('scripts')
    
    <script>
      var slider = tns({
        "container": '.my-Slider1',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider2',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider7',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

    <script>
      var slider = tns({
        "container": '.my-Slider8',            
        "responsive": {
          "300": {
            "items": 1,
            "controls": false,
            "mouseDrag": true,
            "autoplay": true,
            "autoplayButtonOutput":false,
            "autoplayHoverPause": true,
          },
          "500": {
            "items": 4,
            "nav": false,
            "controls": false,
            "autoplayHoverPause": true,
            "autoplay":true,
            "autoplayButtonOutput":false
          },
          
        },
        "autoplayButtonOutput":false
      });
    </script>

@endpush