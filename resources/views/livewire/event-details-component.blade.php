@section('page_title', ($event->eventname))
@section('page_description', ('Great Exhibtion To Exhibit '.$event->shtdesc))
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

  <main>

          <style>
              * { box-sizing: border-box; }

              body {
                font-family: sans-serif;
              }

              /* ---- button ---- */

              .button {
                display: inline-block;
                padding: 0.5em 1.0em;
                background: #EEE;
                border: none;
                border-radius: 7px;
                background-image: linear-gradient( to bottom, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.2) );
                color: #222;
                font-family: sans-serif;
                font-size: 16px;
                text-shadow: 0 1px white;
                cursor: pointer;
              }

              .button:hover {
                background-color: #8CF;
                text-shadow: 0 1px hsla(0, 0%, 100%, 0.5);
                color: #222;
              }

              .button:active,
              .button.is-checked {
                background-color: #28F;
              }

              .button.is-checked {
                color: white;
                text-shadow: 0 -1px hsla(0, 0%, 0%, 0.8);
              }

              .button:active {
                box-shadow: inset 0 1px 10px hsla(0, 0%, 0%, 0.8);
              }

              /* ---- button-group ---- */

              .button-group {
                margin-bottom: 20px;
              }

              .button-group:after {
                content: '';
                display: block;
                clear: both;
              }

              .button-group .button {
                float: left;
                border-radius: 0;
                margin-left: 0;
                margin-right: 1px;
              }

              .button-group .button:first-child { border-radius: 0.5em 0 0 0.5em; }
              .button-group .button:last-child { border-radius: 0 0.5em 0.5em 0; }

              /* ---- isotope ---- */

              .grid {
                border: 1px solid #333;
              }

              /* clear fix */
              .grid:after {
                content: '';
                display: block;
                clear: both;
              }

              /* ---- .element-item ---- */

              .element-item {
                position: relative;
                float: left;
                width: 100px;
                height: 100px;
                margin: 5px;
                padding: 10px;
                background: #fff;
                color: #262524;
              }

              .element-item > * {
                margin: 0;
                padding: 0;
              }

              .element-item .name {
                position: absolute;

                left: 10px;
                top: 60px;
                text-transform: none;
                letter-spacing: 0;
                font-size: 12px;
                font-weight: normal;
              }

              .element-item .symbol {
                position: absolute;
                left: 10px;
                top: 0px;
                font-size: 12px;
                font-weight: bold;
                color: white;
              }

              .element-item .number {
                position: absolute;
                right: 8px;
                top: 5px;
              }

              .element-item .weight {
                position: absolute;
                left: 10px;
                top: 76px;
                font-size: 12px;
              }

              .element-item .symbol {
                position: absolute;
                left: 10px;
                top: 0px;
                font-size: 42px;
                font-weight: bold;
                color: white;
              }

              .element-item.alkali          { background: #F00; background: hsl(   0, 100%, 50%); }
              .element-item.alkaline-earth  { background: #F80; background: hsl(  36, 100%, 50%); }
              .element-item.lanthanoid      { background: #FF0; background: hsl(  72, 100%, 50%); }
              .element-item.actinoid        { background: #0F0; background: hsl( 108, 100%, 50%); }
              .element-item.transition      { background: #0F8; background: hsl( 144, 100%, 50%); }
              .element-item.post-transition { background: #0FF; background: hsl( 180, 100%, 50%); }
              .element-item.metalloid       { background: #08F; background: hsl( 216, 100%, 50%); }
              .element-item.diatomic        { background: #00F; background: hsl( 252, 100%, 50%); }
              .element-item.halogen         { background: #F0F; background: hsl( 288, 100%, 50%); }
              .element-item.noble-gas       { background: #F08; background: hsl( 324, 100%, 50%); }

              :root [data-bs-theme=light] {
                    --bs-blue: #1d3b53;
                    --bs-indigo: #6610f2;
                    --bs-purple: #6f42c1;
                    --bs-pink: #e83e8c;
                    --bs-red: #d6293e;
                    --bs-orange: #fd7e14;
                    --bs-yellow: #f7c32e;
                    --bs-green: #0cbc87;
                    --bs-teal: #20c997;
                    --bs-cyan: #17a2b8;
                    --bs-black: #000;
                    --bs-white: #fff;
                    --bs-gray: #606261;
                    --bs-gray-dark: #222427;
                    --bs-gray-100: #f8f8f8;
                    --bs-gray-200: #dce0e5;
                    --bs-gray-300: #c5c5c7;
                    --bs-gray-400: #96969a;
                    --bs-gray-500: #85878a;
                    --bs-gray-600: #606261;
                    --bs-gray-700: #3e403f;
                    --bs-gray-800: #222427;
                    --bs-gray-900: #202124;
                    --bs-primary: #09B850;
                    --bs-white: #fff;
                    --bs-secondary: #85878a;
                    --bs-success: #0cbc87;
                    --bs-info: #17a2b8;
                    --bs-warning: #f7c32e;
                    --bs-danger: #d6293e;
                    --bs-light: #f8f8f8;
                    --bs-dark: #202124;
                    --bs-primary-rgb: 9, 184, 80;
                    --bs-white-rgb: 255, 255, 255;
                    --bs-secondary-rgb: 133, 135, 138;
                    --bs-success-rgb: 12, 188, 135;
                    --bs-info-rgb: 23, 162, 184;
                    --bs-warning-rgb: 247, 195, 46;
                    --bs-danger-rgb: 214, 41, 62;
                    --bs-light-rgb: 248, 248, 248;
                    --bs-dark-rgb: 32, 33, 36;
                    --bs-primary-text-emphasis: #068138;
                    --bs-secondary-text-emphasis: #5d5f61;
                    --bs-success-text-emphasis: #08845f;
                    --bs-info-text-emphasis: #107181;
                    --bs-warning-text-emphasis: #ad8920;
                    --bs-danger-text-emphasis: #961d2b;
                    --bs-light-text-emphasis: #3e403f;
                    --bs-dark-text-emphasis: #161719;
                    --bs-primary-bg-subtle: #cef1dc;
                  --bs-primary-bg-subtle: #cef1dc;
                  --bs-secondary-bg-subtle: #e7e7e8;
                  --bs-success-bg-subtle: #cef2e7;
                  --bs-info-bg-subtle: #d1ecf1;
                  --bs-warning-bg-subtle: #fdf3d5;
                  --bs-danger-bg-subtle: #f7d4d8;
                  --bs-light-bg-subtle: #fcfcfc;
                  --bs-dark-bg-subtle: #d2d3d3;
                  --bs-primary-border-subtle: #9de3b9;
                  --bs-secondary-border-subtle: #cecfd0;
                  --bs-success-border-subtle: #9ee4cf;
                  --bs-info-border-subtle: #a2dae3;
                  --bs-warning-border-subtle: #fce7ab;
                  --bs-danger-border-subtle: #efa9b2;
                  --bs-light-border-subtle: #dce0e5;
                  --bs-dark-border-subtle: #a6a6a7;
                  --bs-white-rgb: 255, 255, 255;
                  --bs-black-rgb: 0, 0, 0;
                  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
                  --bs-body-font-family: "Inter", sans-serif;
                  --bs-body-font-size: 1rem;
                  --bs-body-font-weight: 400;
                  --bs-body-line-height: 1.5;
                  --bs-body-color: #606261;
                  --bs-body-color-rgb: 96, 98, 97;
                  --bs-body-bg: #fff;
                  --bs-body-bg-rgb: 255, 255, 255;
                  --bs-emphasis-color: #000;
                  --bs-emphasis-color-rgb: 0, 0, 0;
                  --bs-secondary-color: rgba(96, 98, 97, 0.75);
                  --bs-secondary-color-rgb: 96, 98, 97;
                  --bs-secondary-bg: #dce0e5;
                  --bs-secondary-bg-rgb: 220, 224, 229;
                  --bs-tertiary-color: rgba(96, 98, 97, 0.5);
                  --bs-tertiary-color-rgb: 96, 98, 97;
                  --bs-tertiary-bg: #f8f8f8;
                  --bs-tertiary-bg-rgb: 248, 248, 248;
                  --bs-heading-color: var(--bs-gray-900);
                  --bs-link-color: #09B850;
                  --bs-link-color-rgb: 9, 184, 80;
                  --bs-link-decoration: none;
                  --bs-link-hover-color: #079340;
                  --bs-link-hover-color-rgb: 7, 147, 64;
                  --bs-code-color: #d63384;
                  --bs-highlight-color: #212529;
                  --bs-highlight-bg: #fff3cd;
                  --bs-border-width: 1px;
                  --bs-border-style: solid;
                  --bs-border-color: var(--bs-gray-200);
                  --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
                  --bs-border-radius: 0.313rem;
                  --bs-border-radius-sm: 0.2rem;
                  --bs-border-radius-lg: 0.4rem;
                  --bs-border-radius-xl: 0.6rem;
                  --bs-border-radius-xxl: 2rem;
                  --bs-border-radius-2xl: var(--bs-border-radius-xxl);
                  --bs-border-radius-pill: 50rem;
                  --bs-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                  --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15);
                  --bs-box-shadow-lg: 0 1rem 3rem rgba(29, 58, 83, 0.15);
                  --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
                  --bs-focus-ring-width: 0.25rem;
                  --bs-focus-ring-opacity: 0.25;
                  --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
                  --bs-form-valid-color: #198754;
                  --bs-form-valid-border-color: rgba(12, 188, 135, 0.8);
                  --bs-form-invalid-color: #dc3545;
                  --bs-form-invalid-border-color: rgba(214, 41, 62, 0.5);

                  }

                  h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
                  margin-top: 0;
                  margin-bottom: 0.5rem;
                  font-family: "Instrument Sans", sans-serif;
                  font-weight: 700;
                  line-height: 1.25;
                  color: var(--bs-heading-color);
                  }

                  h1, .h1 {
                      font-size: 3.6rem;
                  }

                  @media (min-width: 1200px)
                  {h2, .h2 {
                    font-size: 2.75rem;
                  }}

                  @media (min-width: 1200px)
                  {h5, .h5 {
                    font-size: 1.5rem;
                  }}

                  /* h1, .h1 {
                  font-size: calc(1.375rem + 1.5vw);
                  } */
          </style>

          <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
            <!-- <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9" 
            style="background-image: url('{{('/image/test.jpg')}}')"> -->
              
              <div class=" product-available   text-center bg-primary" style="right: 1.75rem; top: 7.25%; position: absolute;padding-top: 0.425rem; padding-left: 0.625rem; padding-right: 1rem;
                padding-bottom: 0.425rem;
                transform: translateY(-50%);
                border-radius: 0.3125rem;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                font-size: .8125rem;">
                <div class = "h1 pt-5 text-light pb-0 mb-0" style="font-family: Cambria, Cochin, Georgia, Times, Times New Roman, serif;">COI</div>  
                <div class = "fw-bold text-dark pb-2 lh-1">Exhibition</div> 
              </div>
            
              <div class="container pt-4 mb-3 mb-lg-0 ">
                  <div class="row gy-0 ">
                  test laptop
                    <div class="col-lg-3 col-md-6 col-sm-8 px-1 d-none d-sm-block">
                        <!-- <a class="card-img-top d-block overflow-hidden"  href="{{route('event.product',['slug' => $event->slug])}}">
                            <img src="{{url('public/assets/image/exhibition/'.$event->image)}}" alt="{{Str::limit($event->eventname, 24)}}">
                        </a> -->
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-8  border border-white border-1 px-3 py-5 ">
                        <div class="position-relative me-n4 mb-3 d-none d-sm-block">
                          <div class="product-badge product-available  lh-1 fs-sm" style="right: 19.25rem;">
                            <strong>Great <br>Place <br>To <br>Exhibit</strong>
                          </div>
                        </div>
                        <h5 class="text-dark fw-normal pt-2 pb-0">
                            @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                              {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                            @else
                              {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                            @endif 
                        </h5>
                        <h1 class="text-dark mb-3" style="font-size: 3.6rem !important;">{{$event->eventname}}</h1>
                        <h5 class="text-dark fw-normal">{{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} </h5>
                          @if(count($eventbrand) > 0)
                              <span class="text-dark fs-sm fw-light"> <small>Powered by The Exhibtion Network</small></span>
                              <div class="d-flex bg-transparent border-bottom"> 
                              
                                @foreach($eventbrand as $franchise)
                                    <img class="p-1" width="24%" src="{{url('public/assets/images/exhibition/'.$franchise->brand_logo)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                                @endforeach
                              </div>
                          @endif
                        <h5 class="text-dark fw-light fs-xs mt-3">Book business Space with us. <br>Get pre-post business.</h5>
                        <ul class="list-unstyled text-light mb-0 mt-2">
                              <li class="d-flex">
                              @if( $event->businessrevenue == 'visitor' )
                                  @if( $ticketOrExhibit != 0 )
                                      <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                      href="{{route('event.product',['slug' => $event->slug])}}">Book Tickets</a>
                                    @else ( $ticketOrExhibit == 0 )
                                      <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                      href="{{route('event.exhibit', ['board' => 'business'])}}">Exhibit</a>
                                  @endif
                                @else
                                  <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                      href="{{route('event.exhibit', ['board' => 'business'])}}">Exhibit</a>
                              @endif

                                <a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>
                              </li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-8  px-3 py-5 d-none d-sm-block">
                          <h5 class="text-light fw-normal fs-sm pt-2 pb-0">
                              Upcoming Expo
                          </h5>
                                    
                        <h2 class="text-primary mb-3 lh-1"> <span class="fw-light"> MAKING</span> <br>BIG GROWTH <br>
                        <span class="fw-light">IN INDIA</span> <br>BUSINESS <br><span class="fw-light">A REALITY</span></h1>
                            <ul class="list-unstyled text-light mb-0 mt-0 border-top">
                                  <li class="d-flex pt-1">
                                    <a class="fs-xs  text-center border-end px-0" href="{{$link->google()}}"> <span class="fw-bold">100 +</span> <br>Thought Leadership</a>
                                    <a class="fs-xs  text-center border-end px-2" href="{{$link->google()}}"><span class="fw-bold">> 800</span> <br>Business Matching Meetings</a>
                                    <a class="fs-xs  text-center  px-0" href="{{$link->google()}}"><span class="fw-bold">300 +</span> <br>Business Ideas Opportunities</a>
                                  </li>
                            </ul>
                    </div>  
                      
                    <div class="col-lg-3 d-none d-sm-block">
                    
                    </div>
                  </div>

                  <div class="container d-none">
                    <div class="row text-light mb-0 mt-0">
                      <ul class="list-unstyled text-light mb-0 mt-5">
                            <li class="d-flex">
                              <a class="" href="{{$link->google()}}">4095+ <br>Exhibitors</a>
                              <a class="" href="{{$link->google()}}">5500+ <br>Brands on Display</a>
                              <a class="" href="{{$link->google()}}">4095+ <br>Exhibitors</a>
                            </li>
                      </ul>
                    </div>
                  </div>

                </div>
          </section>

          <!-- mobile -->
          <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" data-bs-theme="light">
            <!-- <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" style="background-image: url('{{asset('/image/test.jpg')}}');"> -->
            <div class="container  mb-lg-0 bg-primary">
              <div class="d-flex justify-content-between py-2">

                    <i class="bi bi-list"></i>
                    
                    <a class="z-2 text-dark  pl-3 lh-1" href="{{route('design.strategy')}}"> 
                      <span class= "fw-bold text-light fs-xs">Great Exhibition To Business</span>
                      <br>
                      <span class="text-light fw-normal fs-xs">Certified</span>
                    </a>


                    @if( $event->businessrevenue == 'visitor' )  
                        <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-outline-light btn-sm">Advertise</a>
                      @else
                    
                      @if( $ticketOrExhibit != 0 )
                          <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-outline-light btn-sm">Plan Your Visit</a>
                        @elseif( $ticketOrExhibit == 0 )
                          {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-outline-light btn-sm">Plan Your Visit</a>{{route('event.product',['slug' => $event->slug])}}--}}
                        
                          <a href="#" class="btn btn-outline-light btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Plan Your Visit</a>
                      @endif
                    @endif

                    <a class="navbar-tool navbar-stuck-toggler" href=""><span class="navbar-tool-tooltip">Toggle menu</span>
                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-list"></i></div>
                    </a>

                    <!-- <a class="navbar-tool navbar-stuck-toggler" href=""><span class="navbar-tool-tooltip">Toggle menu</span>
                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-list"></i></div>
                    </a> -->
                    <!-- <i class="navbar-tool-icon bi bi-list"></i> -->
                </div>


                <!-- <div class="container">
                Expand your Businesss       
                </div> -->
            </div>

            <div class="container pt-0 mb-3 mb-lg-0">
              <div class="row gy-0">
              
              
                <div class="col-lg-3 col-md-6 col-sm-8 px-1 d-none d-sm-block">
                      <a class="card-img-top d-block overflow-hidden"  href="{{route('event.product',['slug' => $event->slug])}}">
                          <img src="{{url('assets/image/exhibition/'.$event->image)}}" alt="{{Str::limit($event->eventname, 24)}}">
                      </a>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-8">
                  <div class="col-lg-6 col-md-6  px-0 py-3">
                  
                      <h4 class="text-dark fw-bold fs-md pt-3 pb-0 lh-0">
                            @if ($current < $to && $current < $from)
                              {{-- Upcoming --}}
                              @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M Y ')}}
                              @else
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M Y')}}
                              @endif
                            @elseif ($current == $to && $current < $from) 
                              {{--First Day--}}
                              @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M Y ')}}
                              @else
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M Y')}}
                              @endif
                            @elseif ($current > $to && $current < $from) 
                              {{-- Ongoing --}}
                              @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M Y ')}}
                              @else
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M Y')}}
                              @endif
                            @elseif ($current > $to && $current == $from) 
                              {{-- Last Business Day  --}}
                              @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M Y ')}}
                              @else
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M Y')}}
                              @endif
                            @elseif ($current > $to && $current > $from)
                                {{Carbon\Carbon::parse ($event->enddate)->format('M Y ')}}
                            @endif
                          
                      </h4>

                      <span class="badge badge-primary bg-primary fs-xs mt-4">
                            @if ($current < $to && $current < $from)
                              Upcoming
                            @elseif ($current == $to && $current < $from) 
                              First Day
                            @elseif ($current > $to && $current < $from) 
                              Ongoing
                            @elseif ($current > $to && $current == $from) 
                              Last Business Day 
                            @elseif ($current > $to && $current > $from)
                              ended
                            @endif
                      </span>

                      <h1 class="text-dark mb-0">{{ucwords(trans($event->eventname))}}</h1>
                      <h5 class="text-dark fw-normal">{{ucwords(trans($event->venue ?? ''))}} {{ucwords(trans($event->city ?? ''))}}, {{ucwords(trans($event->country ?? ''))}}</h5>
                      
                      @if(count($sponserbrand) > 0)
                          <span class="text-dark fs-sm fw-light"> <small>Powered by The Exhibtion Network</small></span>
                          <div class="d-flex bg-transparent border-bottom"> 
                            @foreach($sponserbrand as $franchise)
                                <img class="p-1" width="24%" src="{{url('public/assets/image/exhibition/'.$franchise->brand_logo)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                            @endforeach
                          </div>
                      @endif
                      
                      <h5 class="text-dark fw-light fs-xs mt-3">Book business Space with us. <br>Get pre-post business.</h5>
                      
                      <ul class="list-unstyled text-light mb-0 mt-2">
                            <li class="d-flex">
                                @if( $event->businessrevenue == 'visitor' )
                                  @if( $ticketOrExhibit != 0 )
                                        <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                        href="{{route('event.product',['slug' => $event->slug])}}">Book Tickets</a>
                                      @else( $ticketOrExhibit == 0 )
                                        <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                        href="{{route('event.exhibit', ['board' => 'business'])}}">Exhibit</a>
                                  @endif
                                @else
                                  <a class="btn btn-primary btn-sm mx-2 d-none d-sm-block" type="button" 
                                        href="{{route('event.exhibit', ['board' => 'business'])}}">Exhibit</a>
                                @endif  
                              <a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>
                              <a href="#" id="shareBtn" class="btn btn-primary btn-sm mx-2"><i class="bi bi-share"></i></a>
                            </li>
                      </ul>


                  </div>    
                </div>
              </div>
              <div class="container">
                          
              </div>
            </div>
          </section>

          <!-- tab heading-->  
          <section class="container d-lg-none ">
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link px-1 {{$currentTab === 'tab1' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab1')">  Understanding</a>
                  </li>

                  <li class="nav-item">
                   <a class="nav-link px-1 {{$currentTab === 'tab2' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab2')">  Membership</a>
                  </li> 

                  <li class="nav-item">
                   <a class="nav-link px-1 {{$currentTab === 'tab3' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab3')">  Exhibitor</a>  
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link px-1 {{$currentTab === 'tab4' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab4')">  FAQ</a>  
                  </li>                  
              </ul>
          </section>
      
          <!--Tab Step up-->
          <section class="container mb-4 mb-lg-5">
            <div class="tab-content pt-2">

            @if($currentTab === 'tab1')
              <div class="tab-pane fade show active">
                 <!--details-->
                 <!-- mobile -->
                <div class="d-lg-none">
                        <!--<div class="col-lg-4 col-md-5 pt-2 pb-0">
                          <div class="star-rating me-2"><i class="bi bi-star-filled text-accent me-1"></i>
                          <span class="fs-md fw-bold">77% </span><span class="d-inline-block align-middle fs-sm"> 58K rating</span></div>        
                        </div>-->
                        
                          @if($commentedRates->count() > 0)
                            <div class="col-lg-4 col-md-5 pt-2 pb-0">
                                <a class="star-rating me-2 pb-2" href="{{route('business.award', ['slug'=> $event->slug])}}"> 
                              
                                      <i class = "bi bi-star-filled text-accent me-1"></i>
                                        <span class="fs-md fw-bold">
                                        <i class="bi bi-star-fill text-primary me-1"></i> {{round($commentedRates->avg('rate') , 1)}}/10 </span>
                                        <span class="d-inline-block align-middle fs-xs"> {{$commentedRates->count()}} Reviews</span>
                                    
                                          <i class="bi bi-chevron-right fs-xs text-primary me-1"></i>
                                </a>        
                            </div>
                          @endif
                      
                        <ul class="list-unstyled  bg-secondary py-1">
                              @if(Auth::check())
                                @php
                                    $find = DB::table('rates')->where('user_id', Auth::user()->id)->get();
                                    $checkComment = DB::table('rates')->where('user_id', Auth::user()->id)->where('event_id', $findEvent)->get();
                                    $checkCommentop = DB::table('rates')->where('user_id', Auth::user()->id)->where('event_id', $findEvent)->value('rate');
                                @endphp

                                @if(count($checkComment) > '0')
                                  <li class="d-flex justify-content-between px-2 m-0 lh-1">
                                    <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-xs">Your ratings matter</span></span>
                                    <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm ">{{$checkCommentop}}/10</a></span>
                                  </li>
                                @else
                                  <li class="d-flex justify-content-between px-2 m-0 lh-1">
                                    <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-xs">Your ratings matter</span></span>
                                    <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm"> Rate Now</a></span>
                                  </li>
                                @endif

                              @else
                                  <li class="d-flex justify-content-between px-2 m-0 lh-1">
                                    <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-xs">Your ratings matter</span></span>
                                    <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm ">Rate Now</a></span>
                                  </li>
                              @endif
                        </ul>

                        
                        <div>
                          @if($event->exhibitors != null) <span class="fs-xs fw-bold"> + {{number_format(($event->exhibitors / 1000) , 1). 'k'}}</span> <span class="fs-xs fw-normal">Exhibitors</span>  @endif |
                          
                          @if($event->exhibitors != null) <span class="fs-xs fw-bold">+ {{$event->auidence}}</span> 
                          <span class="fs-xs fw-normal"> Visitors </span>@endif
                          {{Carbon\Carbon::parse($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate))}} days
                          <div class="fs-lg fw-bolder"> {{Str::limit($event->eventname,289)}}</div>

                          <p class="fs-md fw-bold mt-0"> {{Str::limit($event->tagline,289)}}</p>
                          <div class="fs-xs fw-normal pb-2 pt-0">{{Str::limit($event->shtdesc,289)}}</div> 
                          <!-- 170 -->
                        </div>

                </div>  

                <div class="container d-none d-sm-block">
                  <ul class="list-unstyled fs-sm  py-4">     
                    <li class="d-flex justify-content-between p-0 m-0">
                        <span class="col bg-light mb-0">
                          <span class="badge bg-primary mt-0">{{$event->edition}}th</span>
                            <h3 class="mb-0">{{$event->eventname}}</h3>
                              
                              @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                              @else
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M, Y')}}
                              @endif 
                              
                              <i class="bi bi-geo-alt-fill"></i> {{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}}
                          </span>
                        <span>
                            @if( $event->businessrevenue == 'visitor' )       
                                @if( $ticketOrExhibit != 0 )
                                  <a class="btn btn-primary btn-sm mt-5" type="button" href="{{route('event.product',['slug' => $event->slug])}}"> Book your Tickets </a>
                                    @elseif( $ticketOrExhibit == 0 )
                                  <a class="btn btn-primary btn-sm mt-5" type="button" href="{{route('event.exhibit', ['board' => 'business'])}}"> Book your Space </a>
                                @endif
                              @else
                                <a class="btn btn-primary btn-sm mt-5" type="button" href="{{route('event.exhibit', ['board' => 'business'])}}"> Book your Space </a>
                            @endif
                        </span>
                      
                        
                    </li>

                    <li><hr class="mt-md-2 mb-2"></li>
                    <li class="p1 fw-light">
                      {{($event->shortdesc)}} | @if($event->exhibitors != null)| + {{$event->exhibitors}} Exhibitors @endif | 
                      {{Carbon\Carbon::parse ($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate)) + 1}} days @if($productPrice != null)| Rs. {{$productPrice}} Onwards @endif
                    </li>
                  </ul>

                </div> 


              <section class="">
                <div class="grido">
                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Edition</h3>
                    <p class="symbol text-dark">{{$event->edition}}</p>
                    <p class="number"> <i class="bi bi-add"></i> </p>
                    <p class="weight">Verified</p>
                  </div>

                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Visitor</h3>
                    <p class="symbol text-dark">{{number_format(($event->exhibitors / 1000) , 1). 'k'}}  <span class="fw-normal fs-sm">K</span></p>
                    <p class="number"></p>
                    <p class="weight">Verified</p>
                  </div>

                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Exhibitor</h3>
                    <p class="symbol text-dark">{{$event->exhibitors}}</p>
                    <p class="number"></p>
                    <p class="weight">Verified</p>
                  </div>

                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Rating</h3>
                    <p class="symbol text-dark">{{round($commentedRates->avg('rate') , 1)}}</p>
                    <p class="number">83</p>
                    <p class="weight">Verified</p>
                  </div>

                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Business Days</h3>
                    <p class="symbol text-dark">{{Carbon\Carbon::parse($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate))}}</p>
                    <p class="number"></p>
                    <p class="weight">Verified</p>
                  </div>

                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Contract Form</h3>
                    <p class="symbol">Bi</p>
                    <p class="number">83</p>
                    <p class="weight">Space</p>
                  </div>

                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Design</h3>
                    <p class="symbol">Bi</p>
                    <p class="number">83</p>
                    <p class="weight">Stall</p>
                  </div>

                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Material</h3>
                    <p class="symbol">Bi</p>
                    <p class="number">83</p>
                    <p class="weight">Marketing</p>
                  </div>

                  <div class="element-item bg-light" data-category="post-transition">
                    <h3 class="name">Fabrication</h3>
                    <p class="symbol">Bi</p>
                    <p class="number">83</p>
                    <p class="weight">Verified</p>
                  </div>
                </div>
              </section>

              <hr class="mt-md-2 mb-2">

              
              <!-- membership -->
              <section class="container mt-5">
                <div class="mt-4 d-lg-none"> 
                  <div class="text-dark fw-bold fs-md">Membership</div> 
                  
                  <div class=" card-group locationhours">
                    @foreach( $pavillion as $pavo)
                    <div class="card border-0">
                      {{-- <img src="https://source.unsplash.com/1600x900/?{{$pavo -> pavillion_name}}, office" class="card-img-top" alt="Card image"> --}}
                      
                      <div class="card-body">
                      {{-- <h5 class="card-title">{{$pavo -> pavillion_name}}</h5> --}}
                        <h5 class="card-title">Plan next 3 Exhibition</h5>
                        {{-- <p class="card-text fs-sm text-muted">{{$pavo -> desc}}</p> --}}
                        <p class="card-text fs-sm text-muted">Plan next three exhibition, book your business potential space with subsidies discount without documentation hassle free</p>
                            {{-- <p class="fs-xs"> <span class="fs-xs fw-bold">Hours:</span> 10:00 - 11:00  {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}}</p> 
                            <p class="fs-xs"> <span class="fs-xs fw-bold">Closed:</span> 10:00 - 11:00 {{Carbon\Carbon::parse ($event->enddate)->format('D, d M')}}</p>  --}}
                        <!-- <a href="#" class="btn btn-sm btn-primary">Go somewhere</a> -->
                        <div class="d-flex badgeseTag">
                              @foreach($category as $cat) 
                                <a class="badge badge-accent border border-1 text-right border-dark text-dark mr-1" href="{{route ('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'exhibition', 'categry' => $cat->expo->slug])}}">{{$cat->expo->tag}}</a>
                              @endforeach
                            </div>
                      </div>

                    </div>
                    @endforeach

                    <div class="card border-0">
                      <!-- <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image"> -->
                      <div class="card-body">
                        <h5 class="card-title">Plan next 3 Exhibition</h5>
                        <p class="card-text fs-sm text-muted">Plan next three exhibition, book your business potential space with subsidies discount, hassle free documentation Where You Meet the Right People at the Right Time and Right Place</p>
                        
                              <a href="#" class="btn btn-sm btn-primary">Go Membership</a>
                            <div class="d-flex badgeseTag">
                              @foreach($category as $cat)
                                <a class="badge badge-accent border border-1 text-right border-dark text-dark mr-1" href="{{route ('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'exhibition', 'categry' => $cat->expo->slug])}}">{{$cat->expo->tag}}</a>
                              @endforeach
                            </div>
                      </div>
                    </div>
                      <!-- 
                        <ul class="list-unstyled fs-sm  p-2">
                            <li class="d-flex justify-content-between p-0 m-0">
                                <span class="text-dark fw-medium fs-sm">  Pavillion <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                                <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span>

                                Hours: {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}}
                                closed: {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}}

                                <div class="d-flex badgeseTag">
                                  @foreach($category as $cat)
                                    <span class="badge badge-accent border border-1 text-right border-dark text-dark mr-1">{{$cat->expo->tag}}</span>
                                  @endforeach
                                </div>
                            </li>
                        </ul>

                        <ul class="list-unstyled fs-sm  p-2">
                            <li class="d-flex justify-content-between p-0 m-0">
                            <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                            <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                        </ul>
                      
                        <ul class="list-unstyled fs-sm  p-2">
                          <li class="d-flex justify-content-between p-0 m-0">
                          <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                          <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                        </ul> 
                      -->
                  </div>

                </div>
              </section>


                  <hr class="mt-md-2 mb-2">

                  <!--participants-->  
                  <section class="container py-4 py-md-5 my-2 d-none d-sm-block">
                    <div class="row text-center text-sm-start">
                      <div class="col-lg-3 col-md-4 col-sm-4 bg-secondary">
                        <span class="badge bg-primary mt-3">Participate</span>
                          <h5 class="mb-3">Nominate</h5>
                          <div class="row">
                            <div>
                              <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">{{route('event.exhibit', ['board' => 'business'])}}
                                <li>Bespoke B2B forums that connect you with the people you really want to meet. </li>
                                <li>Our business partnered space events include participation in live Q&A and polls, plus access to the community where you can network with other attendees.</li>
                                <li><a href="{{route('event.exhibit', ['board'=> 'award' ])}}" class="btn btn-outline-primary btn-sm bg-light">Nominate a Speaker</a></li>
                              </ul>
                            </div>
                              <div>
                                <h5 class="mb-3">Business Directory</h5>
                                <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                                  <li>List business directory to educate with your business potential</li>
                                  <li> <a href="{{route('event.exhibit', ['board' => 'directory' ])}}" class="btn btn-sm btn-primary">Expand your business</a> </li>
                                </ul>
                              </div>
                          </div>
                          <h5 class="mb-3">Attend a Space event</h5>
                          
                          <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                            <li>Attend a Space event near you featuring live speakers and Talk business owners, sparking conversation and connections.</li>
                            <li><a href="{{route('event.exhibit', ['board' => 'find' ])}}" class="btn btn-outline-primary btn-sm bg-light">Find an event near you</a></li>
                            
                          </ul>
                          <h5 class="mb-3">Share this event</h5>
                          <!-- Wishlist + Sharing-->
                            <div class="  d-flex flex-wrap justify-content-between align-items-center border-top pt-3">
                              
                              <!--<div class="py-0"><i class="ci-share-alt fs-lg align-middle text-muted me-2"></i>
                                <a class="btn-social bs-outline bs-facebook bs-sm ms-2" href="#"><i class="ci-facebook"></i></a>
                                <a class="btn-social bs-outline bs-twitter bs-sm ms-2" href="#"><i class="ci-twitter"></i></a>
                                <a class="btn-social bs-outline bs-pinterest bs-sm ms-2" href="#"><i class="ci-pinterest"></i></a>
                                <a class="btn-social bs-outline bs-instagram bs-sm ms-2" href="#"><i class="ci-instagram"></i></a>
                              </div>-->

                              <div class="mb-1">
                                  <a class="btn-social bs-dark bs-twitter ms-2 mb-2" target="_blank" href="https://twitter.com/coi_Innovation"><i class="bi bi-twitter"></i></a>
                                  <a class="btn-social bs-dark bs-facebook ms-2 mb-2" target="_blank" href="www.facebook.com"><i class="bi bi-facebook"></i></a>
                                  <a class="btn-social bs-dark bs-instagram ms-2 mb-2" target="_blank" href="https://in.pinterest.com/CouncilofInnovation/_saved/"><i class="bi bi-instagram"></i></a>
                                  <a class="btn-social bs-dark bs-youtube ms-2 mb-2" target="_blank" href="https://www.youtube.com/channel/UCFq3khqbTIecQxeqj1GscFA"><i class=" bi bi-youtube"></i></a>
                                  <a class="btn-social bs-dark bs-linkedin ms-2 mb-2" target="_blank" href=""><i class=" bi bi-linkedin"></i></a>
                              </div>
                            </div>

                            <h5 class="mb-3">Programme for People and Planet</h5>
                            <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                                  <li>Inspiring collective and meaningful action to address the world's most critical Challenges and opportunities.</li>
                                <li>
                                  <div class="card ">
                                  <div class="expo_Initiat">
                                      <div class="card-body ">
                                        <h5 class="card-title">Sustainability District</h5>
                                        <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                      </div>

                                      <div class="card-body">
                                        <h5 class="card-title">Mobility District</h5>
                                        <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                      </div>

                                      <div class="card-body">
                                        <h5 class="card-title">Opportunity District</h5>
                                        <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                      </div>                  
                                  </div>
                                </div>
                              </li>
                            </ul>
                          
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-8">
                      
                          
                          <ul class="list-unstyled fs-sm bg-secondary p-2">
                        <div class="fw-bold"> Click on interested to stay updated about this event.</div>
                            <li class="d-flex justify-content-between p-0 m-0">
                            <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                            

                          
                            {{--@if( $rate == $event->id)
                            
                            <button class="btn btn-sm btn-outline-primary" type="button" > 
                            {{$rating}} /10</button>

                            @else
                                <div class="py-2 me-2"> 
                                  <button class="btn btn-sm btn-outline-primary" type="button" ><i class="bi bi-star fs-lg me-2"></i> 
                                  <a href="{{route('coi.ratenow',['slug' => $event->slug])}}">Rate Now</a> </button>
                                </div>
                            @endif--}}
                            
                            </li>
                            </ul>
                      
                        <h5 class="mb-3">Understanding Expo</h5>
                        <p class="fs-sm mb-3 mb-lg-4 pb-2">{{$event->shtdesc}}</p>
                        <span class="badge rounded-pill bg-primary">Participants</span>
                        <h5 class="mb-3">Pavillion</h5>

                        <!-- Card group -->
                          

                              <!-- Card -->
                              <div class="row">
                                @foreach($pavillion as $pav)
                                  <div class="col-4 card border-0 px-2">
                                    <img src="{{url('assets/image/exhibition/'.$pav->image)}}" class="card-img-top" alt="Card image">
                                  
                                    <div class="card-image-overlay" >
                                      <h5 class="card-title text-light">{{$pav -> pavillion_name}}</h5>
                                      <p class="card-text fs-sm text-muted text-light">{{ $pav -> desc}}</p>
                                    
                                      <a href="#" class="text-primary text-light">Learn more</a>
                                    </div>
                                  </div>
                                @endforeach
                              </div>
                              
                              <div class="row">
                                
                                  <div class=" col-4 card border-0 px-0 hover-overlay shadow-1-strong">
                                    <img src="image/banner-sm01.png" class="card-img-top" alt="Card image">
                                    <div class="mask text-light">
                                      <h5 class="card-title">Special Pavillions</h5>
                                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <a href="#" class="text-primary">Learn more</a>
                                    </div>
                                  </div>

                              </div>


                      </div>

                      <div class="col-lg-3 col-md-4 col-sm-4  bg-secondary">
                        <h5 class="m-3 fs-sm fw-light">Contactless Ticketing & Fast-track Entry with M-ticket. <span class="fw-bold text-primary">Learn How</span></h5>
                        <div class="row">
                          <div>
                          <h5 class="mb-3">Start-ups</h5>
                            
                            <ul class="list-unstyled fs-sm bg-secondary p-2">
                                <li class="d-flex justify-content-between p-0 m-0">
                                <span class="text-dark fw-medium fs-sm">  Book direct with us. <br><span class="text-muted fw-light fs-xs" style ="line-height: 1;">and avail a special discount<br> of 25% along with special benefits. </span></span>
                                <span><a href="{{route('event.exhibit',['board' => 'startup' ])}}" class="btn btn-outline-primary btn-sm bg-light"> BOOK NOW</a></span></li>
                          </ul>
                          </div>
                          <!--<div>
                            <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                              <li>Height: 7.8 in / 19.8 cm</li>
                              <li>Weight: 7.58 oz / 215 g</li>
                              <li>Form factor: On ear</li>
                            </ul>
                          </div>-->
                        </div>
                        <h5 class="mb-3">Meet-ups</h5>
                        <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                          <li class="m-3 fs-sm fw-light">Conducts exhibitions, one-to-one meetings and discussions, experiences delivering maximum engagement.</li>
                          <li><a href="{{route('event.exhibit',['board'=> 'meet' ])}}" class="btn btn-outline-primary btn-sm bg-light">BOOK NOW</a></li>
                        </ul>
                        <h5 class="mb-3">Partner with Space</h5>
                        <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                          <li class="m-3 fs-sm fw-light">When you support the Space program, you enable our efforts to empower and grow the global Space community of volunteers.</li>
                          <li><a href="{{route('event.exhibit', ['board'=> 'partner' ])}}" class="btn btn-outline-primary btn-sm bg-light">Partner with Space</a></li>
                        </ul>

                        <h5 class="mb-3">Expo Initiatives</h5>
                        <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                          <li class="my-3 fs-sm fw-light">Togethor with people from across the world, we are creating meaningful impact through a range of Expo programmes and initiatives. </li>
                          <li><!-- No image -->
                            <div class="card ">
                              <div class="expo_Initiatives">
                                    <div class="card-body ">
                                      <h5 class="card-title">Expo live</h5>
                                      <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                    </div>

                                    <div class="card-body">
                                      <h5 class="card-title">Global Best Practice Programme</h5>
                                      <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                    </div>

                                    <div class="card-body">
                                      <h5 class="card-title">Sustainability at Expo</h5>
                                      <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                    </div>

                                    <div class="card-body">
                                      <h5 class="card-title">World Majlis</h5>
                                      <p class="card-text fs-sm text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                                    </div>
                              </div>
                            </div>
                          </li>
                          
                        </ul>

                  


                      </div>
                    </div>
                  </section>


              <section class="card text-center py-5 border-0">
                <div class="card-body">
                  <h5 class="card-title h2">Plan your Expo 2024 Now </h5>
                  <p class="card-text fs-sm text-muted">Connect with The Exhibtion Network: Pre-book your ultra Premium Exhibtion Space - with exhibition demographic trends and save monthly calender, get space & sponser option to extend  businesss reach</p>
                  <a href="#" class="btn btn-sm btn-primary">Plan your Expo</a>
                </div>
              </section>
      
              <!-- Card group last-->
                <!-- <section class="container py-5">
                    
                    <div class="card-group last" >

                    
                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                        <div class="card-body">
                          <h5 class="card-title">Find Business</h5>
                          <p class="card-text fs-sm text-muted">Looking to partner with the right exhibitors for your event or business? Our Service connects you with a comprehensive exhibtor profiles. Find the perfect match for your needs whether you're organizing an event or seeking collaboration opportunities.</p>
                          <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-sm btn-primary">Get Directory</a>
                        </div>
                      </div>

                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                        <div class="card-body">
                          <h5 class="card-title">The Exhibition Magazine</h5>
                          <p class="card-text fs-sm text-muted">Unlock unparalleled visibility for your business by advertising in the prestigious Exhibition Magazine. Reach a Diverse and engaged audience that shares your passion for innovation and creativity. Showcase your brand on a platform that resonates with forward-thinkers and industry leaders, and seize the opportunity to connect, inspire, and leave an enduring impact.

                          Elevate your brand's visibility and influence by featuring in The Exhibition Magazine. Reach a select audience of industry insiders, enthusiasts, and decision-makers who align with your values. With our Smart Presence Solution, your brand will be positioned in front of the Right People, at the Right Time and in the Right Place.
                          </p>
                          <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-sm btn-primary">Advertise</a>
                        </div>
                      </div>

                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                        <div class="card-body">
                          <h5 class="card-title">Build a Network</h5>
                          <p class="card-text fs-sm text-muted">Join The Exhibition Network and skip the queue at business events. No more business cards - exchange proposals and introductions hassle-free. Streamline your brand approach, enchance ROI. Elevate your business connections for elevated success.</p>
                          <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-sm btn-primary">Join Right Place</a>
                        </div>
                      </div>

                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                        <div class="card-body">
                          <h5 class="card-title">Business Brand Managers</h5>
                          <p class="card-text fs-sm text-muted">Let our expert Business Brand Managers guide your brand to success. From identifying the perfect platforms for your capabilities to crafting strategic messages, we ensure your brand's message resonates with thee right audience. Seamlessly align your business goals with targeted placements and engagements to maximize your impact and growth potential.</p>
                          <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-sm btn-primary">Hire Us.</a>
                        </div>
                      </div>

                      
                    </div>
                </section> -->

                <!-- <li class="d-flex justify-content-between px-2 m-0 lh-1">
                  <span class="text-dark fw-medium fs-sm">  Become a Member <br><span class="text-muted fw-light fs-xs">Enjoy unlimited free registration for you and your guest(s) on every visit.</span></span>
                  <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm ">Join Today</a></span>
                </li> -->

                @if(count($eventbrand) > 0)
                  <section class="container mb-4 mb-lg-5" >
                    <div class="row mb-5 pb-2">
                        @foreach ($eventbrand as $participant) 
                            {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                            <div class=" col col-auto my-1 px-2"> 
                                <img src="{{url('public/assets/image/exhibition/'.$participant->brand_logo)}}" alt="#" width="60px">
                            </div>
                        @endforeach  
                    </div>
                  </section>
                @endif
                
                <!--exhibitor-->
                @if(count($eventbrand) > 0)
                  <hr class="mt-md-2 mb-2">
                  <section class="container pt-2 pt-md-5">
                    <h6 class="text-left mb-2"> Participants</h6>
                    <div class="my-sliderexpo d-none d-sm-block">
                          @foreach ($eventbrand as $franchise)
                              <div class="col-sm-3 mb-grid-gutter">
                                <div class="card product-card-alt">
                                        
                                      <div class="product-thumb p-3">
                                        
                                        
                                          <div class="product-card-actions p-2">
                                          
                                            <div class="fs-sm text-light" href="">Booth 3</div>
                                            <div class="fs-sm text-light" href="">Elite Sponsor</div>
                                            <div class="fs-sm text-light" href="">View Website</div>
                                          </div>

                                          <a class="product-thumb-overlay" href=""></a>

                                          <img class="p-3" width="auto" src="{{url('public/assets/images/exhibition/'.$franchise->brand_logo)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                                      </div>  
                                </div>
                              </div>
                          @endforeach
                    </div>

                    <div class="my-sliderexpo d-lg-none">
                        <a class="d-flex align-items-center" href="#">
                          <img class="rounded-circle" width="90%" src="{{url('public/assets/images/exhibition/'.$franchise->brand_logo)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                        </a>
                    </div>
                  </section>
                @endif

                @if($speaker->count() > 0 )
                  <hr class="mt-md-2 mb-2">
                  <!-- Speaker-->
                  <section class="container pt-2 pt-md-5">
                    <h6 class="text-left mb-2"> Speaker</h6>
                    <div class="my-sliderSpeaker">
                          @foreach ($speaker as $speaker)
                            
                              <div class="card product-card">
                                <a class=" align-items-center" href="#">
                                  <img class="" width="90%" src="{{url('speaker/'.$speaker->image)}}"  alt="{{Str::limit($speaker->name, 24)}}">
                                </a>
                                <div class="fs-sm text-center lh-1"> <small>{{$speaker->name}} <br><strong>{{$speaker->organisation}}</strong></small></div>
                              </div>
                          
                          @endforeach
                    </div>
                  </section>
                @endif

              <!-- Partner-->
              @if(count($eventbrand)>0)
                <hr class="mt-md-2 mb-2">
                <section class="container py-2 pt-md-5">
                  <h6 class="text-left mb-2">Partner</h6>
                  <div class="my-sliderPartner">
                        @foreach ($eventbrand as $franchise)
                        
                          <div class="card product-card-alt">
                            <div class="product-thumb p-3">
                              <div class="product-card-actions p-2">
                                <div class="fs-sm text-light" href="">Booth 3</div>
                                <div class="fs-sm text-light" href="">Elite Sponsor</div>
                                <div class="fs-sm text-light" href="">View Website</div>
                              </div>   
                              <a class="product-thumb-overlay" href=""> </a>
                              <img class="p-3" width="auto" src="{{url('public/assets/images/exhibition/'.$franchise->brand_logo)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                            
                            </div>
                          </div>
                        @endforeach
                  </div>
                </section>
              @endif

              <section class="container py-5">
                <div class="text-dark text-center fw-bold fs-md display-3">Our Offerings</div>
                  <div class="text-dark text-center fw-bold fs-md h5">More to Explore</div>
                  <!-- Card group -->
                  <div class="card-group moretoexplore">
                      <!-- Card -->
                      <div class="card border-0">
                          <img src="https://source.unsplash.com/1600x900/?Group, business tours" class="card-img-top" alt="Card image">
                        <div class="card-img-overlay">
                          <div class="card-footer text-secondary h3">Group Tours</div>
                        </div>
                        <!-- <div class="card-body">
                          <h5 class="card-title">Group Tours</h5>
                          <p class="card-text fs-sm text-muted">The Network Members enjoy a rich variety of specialized benefits- from free guest passes to Member Preview Days for new exhibitons -all while supporting our mission.</p>
                          <a href="#" class="text-primary fw-bold">See the benefits</a>
                        </div> -->
                      </div>

                      <!-- Card -->
                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?business, perspectives" class=" bg-dark bg-opacity-50 card-img-top" alt="Card image">
                        <div class="card-img-overlay">
                          <div class="card-footer text-secondary h3">Business Perspectives</div>
                        </div>
                        
                        
                        <!-- <div class="card-body">
                          <h5 class="card-title">Business Perspectives</h5>
                          <p class="card-text fs-sm text-muted">{{$event->eventname}} director reflects on current discussions about business property, provides background on the collection, and previews several important initiatives.</p>
                          <a href="#" class="text-primary fw-bold">Read More</a>
                        </div> -->
                      </div>

                      <!-- Card -->
                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?business, guides" class="card-img-top" alt="Card image">
                        <div class="card-img-overlay">
                          <div class="card-footer text-secondary h3">Business Guides</div>
                        </div>
                        <!-- <div class="card-body">
                          <h5 class="card-title">Business Guides</h5>
                          <p class="card-text fs-sm text-muted">The Exhibition Network families, join us Saturday, to celebrate the opening of our new drop-in discovery and play space for new start business ideas. </p>
                          <a href="#" class="text-primary fw-bold">Learn more</a>
                        </div> -->
                      </div>

                      <!-- Card -->
                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?learning, resources" class="card-img-top" alt="Card image">
                        <div class="card-img-overlay">
                          <div class="card-footer text-secondary h3">Learning Resources</div>
                        </div>
                        <!-- <div class="card-body">
                          <h5 class="card-title">Learning Resources</h5>
                          <p class="card-text fs-sm text-muted">Through {{Carbon\Carbon::parse ($event->startdate)->format('m D, d ')}}, visit to the {{$event->eventname}} enjoy service on the {{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}}. </p>
                          <a href="#" class="text-primary fw-bold">Plan your visit</a>
                        </div> -->
                      </div>

                      <!-- Card -->
                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?magazine, advertise" class="card-img-top" alt="Card image">
                        <div class="card-img-overlay">
                          <div class="card-footer text-secondary h3">Publications</div>
                        </div>
                        <!-- <div class="card-body">
                          <h5 class="card-title">Publications</h5>
                          <p class="card-text fs-sm text-muted">Discover our newest business-inspired business designs, including publishing the brand, Search new opportunities, assess your business and many more..</p>
                          <a href="#" class="text-primary fw-bold">Go somewhere</a>
                        </div> -->
                      </div>

                      <div class="card border-0">
                        <img src="https://source.unsplash.com/1600x900/?networking, research" class="card-img-top" alt="Card image">
                        <div class="card-img-overlay">
                          <div class="card-footer text-secondary h3">Conversation and Scientific Research</div>
                        </div>
                        <!-- <div class="card-body">
                          <h5 class="card-title">Conversation and Scientific Research</h5>
                          <p class="card-text fs-sm text-muted">Discover our newest business-inspired business designs, including publishing the brand, Search new opportunities, assess your business and many more..</p>
                          <a href="#" class="text-primary fw-bold">Go somewhere</a>
                        </div> -->
                      </div>
                    
                  </div>
              </section>


              @if($board == 'exhibitor ')
                <div class="container">Download Exhibition Directory</div>
              @endif

              </div>
            @elseif($currentTab === 'tab2')
              <!-- membership tab-->
              <div class="tab-pane fade show active">
                <div class="row">
                  <div class="col-lg-8">
                  
                    <p class="fs-md"> {{Str::limit($event->desc,289)}}...</p>

                    <h3 class="h5 pt-2">Plans</h3>
                    <ul class="fs-md">
                      <li>Nemo enim ipsam voluptatem quia voluptas sit</li>
                    </ul>
                  </div>
                </div>
              </div>
            @elseif($currentTab === 'tab3')
              <!-- exhibitor tab-->
               <div class="container">
                <div class="row">
                  <div class="col-sm-10">Download Exhibitor Directory <span class="fs-md fw-light text-primary">Our Data, your Customer</span></div>
                  <div class="col-sm-2">
                    <i class="bi bi-download"></i>
                  </div>
                </div>
                @if($optional == 'exhibitor')
                  <!-- Exhibitor -->
                  <div class="container">
                    <div class="grido">
                      
                      <div class="element-item" data-category="post-transition">
                        <h3 class="name">Exhibitor</h3>
                        <p class="symbol">54</p>
                        <p class="number">82</p>
                        <p class="weight">Verified</p>
                      </div>

                      <div class="element-item" data-category="transition">
                        <h3 class="name">Visitors</h3>
                        <p class="symbol">3,300</p>
                        <p class="number">79</p>
                        <p class="weight">Verified</p>
                      </div>

                      <div class="element-item" data-category="alkali">
                        <h3 class="name">Business</h3>
                        <p class="symbol">25k</p>
                        <p class="number">19</p>
                        <p class="weight">Verified</p>
                      </div>
                      
                      <div class="element-item" data-category="alkali">
                        <h3 class="name">Sodium</h3>
                        <p class="symbol">Na</p>
                        <p class="number">11</p>
                        <p class="weight">22.99</p>
                      </div>
                    </div>
                  </div>
                @endif
               </div>

                <div class="tab-pane fade show active">
                  <div class="container">
                      <div class="grido">
                          @foreach($exhibitor as $participants)
                          <div class="element-item" data-category="post-transition">
                            <h3 class="name text-light">{{$participants->brand_name}}</h3>
                            <p class="symbol">{{$participants->brand_name}}</p>
                            <p class="number">82</p>
                            <p class="weight">Verified</p>
                          </div>
                          @endforeach
                      </div>
                  </div>
                </div>
            @elseif($currentTab === 'tab4')
              <!-- Faq tab-->
                <div class="tab-pane fade show active">
                 
                </div>
            @endif
            </div>
          </section>
         
          <!--share hidden-->
          <div class="d-none">            
                <a href="#" id="gmail-btn">gmail</a>
                <a href="#" id="facebook-btn">facebook</a>
                <a href="#" id="twitter-btn">twitter</a>
                <a href="#" id="linkedin-btn">linkedin</a>
                <a href="#" id="whatsapp-btn">whatsapp</a> 
                <i class="bi bi-share"></i>
                <a href="#" id="shareBtn" class="btn btn-primary btn-sm mx-2"><i class="bi bi-share"></i></a>
          </div>
          

          
              
          @php 
            $eventc =  DB::table('dencos')-> where('event_id', $event->id)->value('expo_id');
            $eventf = DB::table('dencos')->where('expo_id', $eventc)->get();
          @endphp




          <div>
            {{$eventc}}
          </div>
            
          <section class="container">
            <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1 ">
                    <span class="fs-sm"> Concurrent<br><span class="fw-medium h5">Event</span></span>
                    <a class="btn btn-outline-primary btn-sm" href="#">Submit event</a>
                      <!-- <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#">Submit event</a>
                      <ul class="dropdown-menu" width="auto">
                            <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'expo'])}}">More</a></li>
                            <li><a class="dropdown-item" href="#">Exhibit</a></li>
                            <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>
                            <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                          </ul> -->
                    </span>
                  </div>
            </div>

            @php 
              $relativeEvent = DB::table('events')->where('reference' , $event->reference)->get();
            @endphp
            
            @if($relativeEvent->count() == '0')
            @else
              <div class="row g-0 py-0 mx-n2 my-Slider4 mt-2"> 
                {{-- px-2 mb-1 --}}
                @foreach($relativeEvent as $eventoi)
                  <div wire:ignore class="col-lg-3 col-md-4 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                    <div class="card product-card">
                      
                      <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                      <img src="{{url('public/assets/image/exhibition/'.$eventoi->image)}}" alt=""> </a>

                      <div class="card-body p-1">
                        <div class="d-flex justify-content-between">
                            <div class="product-price"><small>{{$eventoi -> edition}}  
                              <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
                                  <span class="fs-xs">
                                    @php
                                        $to = strtotime($eventoi->startdate);
                                        $from= strtotime($eventoi->enddate);
                                    @endphp
                                    

                                    @if ($current < $to && $current < $from)
                                        Upcom
                                      @elseif ($current == $to && $current < $from) 
                                        First
                                      @elseif ($current > $to && $current < $from) 
                                        Ongoi
                                      @elseif ($current > $to && $current == $from) 
                                        Last 
                                      @elseif ($current > $to && $current > $from)
                                        Ended
                                    @endif
                                  </span>
                                <i class="bi bi-lightning-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="upcoming" aria-label="upcoming"></i></i></small>
                              <div class="product-title fs-sm h3 mb-0">
                              <a href="{{route('event.details',['slug' => $eventoi->slug])}}">{{ucwords(trans($eventoi -> eventname))}}
                                </a></div>
                            </div>

                            <div class="star-rating d-none d-sm-block"> 
                              <small> <span class="badge bg-primary opacity-75" style="position: unset;"> Visitor</span> | <span class="badge bg-primary opacity-75" style="position: unset;"> Exhibit</span></small>       
                              <div class=" align-center fs-sm py-1"> 
                                <small class="mx-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Visitor" aria-label="Visitor"> + {{$eventoi -> auidence}} <i class="bi bi-people-fill"></i></small> 
                                <small class="mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Exhibitor" aria-label="Exhibior">+ {{$eventoi -> exhibitors}}K <i class="bi bi-person-workspace"></i></small>
                              </div>
                            </div>
                        </div>
                        <!--<small>World's best demanding business</small><br>-->
                        <small class="text-bolder d-none d-sm-block"> <i class="bi bi-calendar3"></i>
                          @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                            {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y ')}}
                          @else
                            {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y')}}
                          @endif 

                        </small>
                        <small  class="d-none d-sm-block"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> venue))}}, <br> {{ucwords(trans($eventoi -> city))}}</small>

                        <small class="text-bolder d-lg-none"> <i class="bi bi-calendar3"></i>
                          @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                            {{Carbon\Carbon::parse ($eventoi->startdate)->format('d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                          @else
                            {{Carbon\Carbon::parse ($eventoi->startdate)->format('d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                          @endif 
                        </small><br>
                        <small class="d-lg-none"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> city))}}</small> 
                        <!--ucfirst-->
                      </div>

                      
                      
                      <div class="card-body card-body-hidden">
                        <div class="d-flex justify-content-between mb-2">
                          <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#"><i class=" bi bi-brush fs-sm me-1"></i>Exhibit</a>
                          <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#"><i class=" bi bi-cart fs-sm me-1"></i>Visit</a>
                        </div>
                      
                        <div class="text-center">
                          @guest<a class="nav-link-style fs-ms" href="#" data-bs-toggle="modal">
                          <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                          @endguest
                        </div>
                      </div>
                    
                    </div>
                  </div>
                @endforeach
              </div>
            @endif

          </section>
          
          <section class="container">
            <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1 ">
                    <span class="fs-sm">Upcoming<br><span class="fw-medium h5">Event</span></span>
                    <a class="btn btn-outline-primary btn-sm" href="#">Submit event</a>
                      <!-- <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#">Submit event</a>
                      <ul class="dropdown-menu" width="auto">
                            <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'expo'])}}">More</a></li>
                            <li><a class="dropdown-item" href="#">Exhibit</a></li>
                            <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>
                            <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                          </ul> -->
                    </span>
                  </div>
            </div>
            @php 
              $evento = DB::table('events')->where('admstatus','1')->where('status','1')->where('eventype','expo')->wheredate('startdate', '>=' , $mytime)->orderBy('startdate','ASC')->limit(10)->get();
            @endphp

            <div class="row g-0 py-0 mx-n2 my-Slider3 mt-2"> 
              {{-- px-2 mb-1 --}}
              @foreach($evento as $eventoi)
                <div wire:ignore class="col-lg-3 col-md-4 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                  <div class="card product-card">
                    
                    <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $eventoi->slug])}}">
                    <img src="{{url('public/assets/image/exhibition/'.$eventoi->image)}}" alt=""> </a>

                    <div class="card-body p-1">
                      <div class="d-flex justify-content-between">
                          <div class="product-price"><small>{{$eventoi -> edition}}  
                            <i class="bi bi-shield-check" data-bs-toggle="tooltip" data-bs-placement="left" title="" data-bs-original-title="certified" aria-label="certified">
                                <span class="fs-xs">
                                  @php
                                      $to = strtotime($eventoi->startdate);
                                      $from= strtotime($eventoi->enddate);
                                  @endphp
                                  

                                  @if ($current < $to && $current < $from)
                                      Upcom
                                    @elseif ($current == $to && $current < $from) 
                                      First
                                    @elseif ($current > $to && $current < $from) 
                                      Ongoi
                                    @elseif ($current > $to && $current == $from) 
                                      Last 
                                    @elseif ($current > $to && $current > $from)
                                      Ended
                                  @endif
                                </span>
                              <i class="bi bi-lightning-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="upcoming" aria-label="upcoming"></i></i></small>
                            <div class="product-title fs-sm h3 mb-0">
                            <a href="{{route('event.details',['slug' => $eventoi->slug])}}">{{ucwords(trans($eventoi -> eventname))}}
                              </a></div>
                          </div>

                          <div class="star-rating d-none d-sm-block"> 
                            <small> <span class="badge bg-primary opacity-75" style="position: unset;"> Visitor</span> | <span class="badge bg-primary opacity-75" style="position: unset;"> Exhibit</span></small>       
                            <div class=" align-center fs-sm py-1"> 
                              <small class="mx-0" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Visitor" aria-label="Visitor"> + {{$eventoi -> auidence}} <i class="bi bi-people-fill"></i></small> 
                              <small class="mx-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Exhibitor" aria-label="Exhibior">+ {{$eventoi -> exhibitors}}K <i class="bi bi-person-workspace"></i></small>
                            </div>
                          </div>
                      </div>
                      <!--<small>World's best demanding business</small><br>-->
                      <small class="text-bolder d-none d-sm-block"> <i class="bi bi-calendar3"></i>
                        @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y ')}}
                        @else
                          {{Carbon\Carbon::parse ($eventoi->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('D, d M Y')}}
                        @endif 

                      </small>
                      <small  class="d-none d-sm-block"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> venue))}}, <br> {{ucwords(trans($eventoi -> city))}}</small>

                      <small class="text-bolder d-lg-none"> <i class="bi bi-calendar3"></i>
                        @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($eventoi->startdate)->format('d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                        @else
                          {{Carbon\Carbon::parse ($eventoi->startdate)->format('d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                        @endif 
                      </small><br>
                      <small class="d-lg-none"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> city))}}</small> 
                      <!--ucfirst-->
                    </div>

                    
                    
                    <div class="card-body card-body-hidden">
                      <div class="d-flex justify-content-between mb-2">
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#"><i class=" bi bi-brush fs-sm me-1"></i>Exhibit</a>
                        <a class="btn btn-primary btn-sm d-block w-50 mx-1" type="button" href="#"><i class=" bi bi-cart fs-sm me-1"></i>Visit</a>
                      </div>
                    
                      <div class="text-center">
                        @guest<a class="nav-link-style fs-ms" href="#" data-bs-toggle="modal">
                        <i class=" bi bi-eye align-middle me-1"></i>Contact</a>
                        @endguest
                      </div>
                    </div>
                  
                  </div>
                </div>
              @endforeach
            </div>
          </section>

          
          <!--Applicable Offers-->
          <div class="container mb-5 d-lg-none">
            <div class="text-dark fw-medium fs-sm">Applicable Offers</div> 
            
            <div class="my-sliderOffers">
                <ul class="list-unstyled fs-sm  p-2">
                    <li class="d-flex justify-content-between p-0 m-0 bg-secondary">
                    <span class="text-dark fw-medium fs-sm">Advertise your Business<br><span class="text-muted fw-light fs-sm">Right Place, Right Time, Right People</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm bg-light">Offer</a></span></li>
                </ul>

                <ul class="list-unstyled fs-sm  p-2">
                    <li class="d-flex justify-content-between p-0 m-0 bg-secondary">
                    <span class="text-dark fw-medium fs-sm">Presence your Business<br><span class="text-muted fw-light fs-sm">Next Three your Industry Expo</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                </ul>
              
                <ul class="list-unstyled fs-sm  p-2">
                  <li class="d-flex justify-content-between p-0 m-0 bg-secondary">
                  <span class="text-dark fw-medium fs-sm">Get Membership<br><span class="text-muted fw-light fs-sm">Eye on Business Competition Opportunity.</span></span>
                  <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                </ul>
            </div>
          </div>

          <!-- mobile Applicable Offers-->
          <div class="container mb-5 d-lg-none">
            <div class="text-dark fw-medium fs-sm">Certified</div> 
            
            <div class="my-sliderOffers2">
                <ul class="list-unstyled fs-sm p-2 bg-secondary" >
                  <li class="d-flex justify-content-between p-0 m-0">
                  <span class="text-dark fw-medium fs-sm">Plan your Exhibition<br>
                  <span class="text-muted fw-light fs-xs">Save your Ultra Premium Space </span></span>
                  <span><a href="" class="btn btn-outline-primary btn-sm bg-light">Plan</a></span></li>
                </ul>

                <ul class="list-unstyled fs-sm  p-2 bg-secondary">
                    <li class="d-flex justify-content-between p-0 m-0">
                    <span class="text-dark fw-medium fs-sm">Great Exhibition To Exhibit<br>
                    <span class="text-muted fw-light fs-sm">Right Place, Right Time, Right People</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm bg-light">Get Certified</a></span></li>
                </ul>

                <ul class="list-unstyled fs-sm  p-2 bg-secondary">
                    <li class="d-flex justify-content-between p-0 m-0">
                    <span class="text-dark fw-medium fs-sm">Nominate your Event<br><span class="text-muted fw-light fs-sm">Next Three your Industry Expo</span></span>
                    <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                </ul>
              
                <ul class="list-unstyled fs-sm  p-2 bg-secondary">
                  <li class="d-flex justify-content-between p-0 m-0">
                  <span class="text-dark fw-medium fs-sm">Get Membership<br><span class="text-muted fw-light fs-sm">Eye on Business Competition Opportunity.</span></span>
                  <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                </ul>
            </div>
          </div>


          <!--footer-->
          @if($event->eventype == 'award')
            <div class="handheld-toolbar bg-secondary">
              <div class="d-flex justify-content-between py-2 px-2">
                <div class="text-dark  pl-3 lh-1">  <span class = "fw-medium fs-sm">Rs.{{$productPrice}}</span><br><span class=" fw-normal fs-xs">Onwards</span></div>
                  @if( $event->businessrevenue == 'visitor' )  
                    @if( $ticketOrExhibit != 0 )
                        <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Plan Your Visit</a>
                      @elseif( $ticketOrExhibit == 0 )
                        {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>{{route('event.product',['slug' => $event->slug])}}--}}
                      
                        <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Book your Space</a>
                    @endif
                  @else
                  <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>
                  @endif
              </div>
            </div>
          @elseif($event->eventype == 'conference')
            <div class="handheld-toolbar bg-secondary">
              <div class="d-flex justify-content-between py-2 px-2">
              <div class="text-dark  pl-3 lh-1">  <span class = "fw-medium fs-sm">Rs.{{$productPrice}}</span><br><span class=" fw-normal fs-xs">Onwards</span></div>
                @if( $event->businessrevenue == 'visitor' )  
                  @if( $ticketOrExhibit != 0 )
                      <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Plan Your Visit</a>
                    @elseif( $ticketOrExhibit == 0 )
                      {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>{{route('event.product',['slug' => $event->slug])}}--}}
                    
                      <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Book your Space</a>
                  @endif
                @else
                <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>
                @endif
              </div>
            </div>
          @elseif($event->eventype == 'expo')

            @if($event->businessrevenue == 'visitor')
              <div class="handheld-toolbar bg-secondary">
                <div class="d-flex justify-content-between py-2 px-2">
                  @php
                    $currentTime = now()->format( 'H:m:s');
                    $currentDate = now()->format( 'Y-m-d'); 
                    $productfreeorcost = DB::table('tickets')->where('admstatus','1')->where('status','1')->where('event_id', $event -> id)->count();
                    $productminPrice = DB::table('tickets')->where('admstatus','1')->where('status','1')->where('event_id', $event -> id)->where('expiry_date', '>=' , $currentDate)->where('expiry_time', '>=' , $currentTime)->min('price');
                  @endphp
                  <div class="text-dark  pl-3 lh-1">
                    <span class = "fw-medium fs-sm">
                      @if($productfreeorcost == '0')
                        Free
                      @else
                        Rs.{{$productminPrice}}
                      @endif
                    </span>
                    <br>
                    <span class=" fw-normal fs-xs">Onwards</span>
                  </div>
                  <a href="{{route('event.exhibit', ['board' => 'registration-great-exhibition-to-visit'])}}" class="btn btn-primary btn-sm">Registration</a>
                    <!-- @if( $event->businessrevenue == 'visitor' )  
                      @if( $ticketOrExhibit != 0 )
                          <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Plan Your Visit</a>
                        @elseif( $ticketOrExhibit == 0 )
                          {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>{{route('event.product',['slug' => $event->slug])}}--}}
                        
                          <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Book your Space</a>
                      @endif
                      @else
                      <a href="{{route('event.exhibit', ['board' => 'registration-great-exhibition-to-exhibit'])}}" class="btn btn-primary btn-sm">Book your Space</a>
                    @endif -->

                  </div>
              </div>
            @else
              <div class="handheld-toolbar bg-secondary">
                <div class="d-flex justify-content-between py-2 px-2">
                  <div class="text-dark  pl-3 lh-1">
                    <span class = "fw-medium fs-sm">Call us 999 185 6776</span><br>
                    <span class=" fw-normal fs-xs">Get extra ad-ons</span></div>
                    @if( $event->businessrevenue == 'visitor' )  
                      @if( $ticketOrExhibit != 0 )
                          <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Plan Your Visit</a>
                        @elseif( $ticketOrExhibit == 0 )
                          {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>{{route('event.product',['slug' => $event->slug])}}--}}
                        
                          <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Book your Space</a>
                      @endif
                    @else
                    <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Book your Space</a>
                    @endif
                  </div>
              </div>
            @endif

          @endif

            

              

    @push('scripts')

          <script>
            document.addEventListener('DOMContentLoaded', function(){
              if(localStorage.getItem('currentTab')) {
                this.call('switchTab', localStorage.getItem('currentTab'));
              }

              document.querySelectorAll('.nav-link').forEach(function (element) {
                element.addEventListener('click', function(){
                  localStorage.setItem('currentTab', this.getAttribute('wire:click.prevent').replace('switchTab(','').replace(')',''));
                });
              });
            });
          </script>

      <script>
        var slider = tns({
          "container": '.my-Slider3',          
          "responsive": {
            "300": {
              "items": 2,
              "controls": false,
              "mouseDrag": true,
              "autoplay": false,
              "fixedWidth": 150,
              "autoplayButtonOutput": false,
              "autoplayHoverPause": true,
            },
            "500": {
              "items": 4,
              "nav": false,
              "controls": false,
              "autoplayHoverPause": true,
              "autoplay": false,
              "fixedWidth": 300,
              "autoplayButtonOutput": false
            },
            
          },
          "autoplayButtonOutput":false
        });
      </script>

      <script>
        var slider = tns({
          "container": '.my-Slider4',          
          "responsive": {
            "300": {
              "items": 2,
              "controls": false,
              "mouseDrag": true,
              "autoplay": false,
              "fixedWidth": 150,
              "autoplayButtonOutput": false,
              "autoplayHoverPause": true,
            },
            "500": {
              "items": 4,
              "nav": false,
              "controls": false,
              "autoplayHoverPause": true,
              "autoplay": false,
              "fixedWidth": 300,
              "autoplayButtonOutput": false
            },
            
          },
          "autoplayButtonOutput":false
        });
      </script>

          <script type = "application/ld+json">
            {
                  "@context": "https://schema.org",
                  "@type": "Event",
                  "name": "{{$event->eventname}}",
                  "startDate": "{{Carbon\Carbon::parse ($event->startdate)->format('Y-m-d')}}",
                  "endDate": "{{Carbon\Carbon::parse ($event->enddate)->format('Y-m-d')}}",
                  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
                  "eventStatus": "https://schema.org/EventScheduled",

                  "location": {
                    "@type": "Place",
                    "name": "{{$event->venue}}",

                    "address": {
                      "@type": "PostalAddress",
                      "streetAddress": "{{$event->venue}}",
                      "addressLocality": "{{$event->venue}}",
                      "postalCode": "110011",
                      "addressRegion": "{{$event->city}}",
                      "addressCountry": "IN"
                    }
                  },

                  "image": [
                    "{{url('assets/image/exhibition/'.$event->image)}}"
                  ],

                  "description": "{{$event->shtdesc}}",
                  "offers": {
                    "@type": "Offer",
                    "url": "{{route('event.product',['slug' => $event->slug])}}",
                    "price": "{{$productPrice}}",
                    "priceCurrency": "INR",
                    "availability": "{{Carbon\Carbon::parse ($event->startdate)->format('Y-m-d')}}",
                    "validFrom": "{{Carbon\Carbon::parse ($event->startdate)->format('Y-m-d')}}"
                  },


                  "performer": {
                    "@type": "PerformingGroup",
                    "name": "The Exhibition Network"
                  },

                  "organizer": {
                    "@type": "Organization",
                    "name": "The Exhibition Network",
                    "url": "https://exhibition.org.in"
                  },

                  "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "{{round($commentedRates->avg('rate') , 1)}}",
                    "ratingCount": "{{$commentedRates->count()}}",
                    "bestRating": "10"
                  }
                  
            }
          </script>

          <script type="text/javascript">

            const gmailbtn = document.getElementById('gmail-btn');
            const facebookbtn = document.getElementById('facebook-btn');
            const twitterbtn = document.getElementById('twitter-btn');
            const linkedinbtn = document.getElementById('linkedin-btn');
            const whatsappbtn = document.getElementById('whatsapp-btn');

            //url
            let postUrl = encodeURI(document.location.href);
            let postTitle = encodeURI('{{$event->eventname}}');
            let postIMage = encodeURI('{{$event->eventname}}');
          
           
            gmailbtn.setAttribute("href",'https://mail.gmail.com/mail/?view=cm&su=${postTitle}&body=${postUrl}');

            facebookbtn.setAttribute("href",'https://wwww.facebook.com/sharer.php?u=${postUrl}');

            twitterbtn.setAttribute("href",'https://twitter.com/share?url=${postUrl}&text=${postTitle}');

            linkedinbtn.setAttribute("href",'https://wwww.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}');
           
            whatsappbtn.setAttribute("href",'https://wa.me/?text=${postTitle}${postUrl}');

            const shareBtn = document.getElementById('shareBtn');
            if(navigator.share){
              shareBtn.style.display = 'block';
              shareBtn.addEventListener('click',()=>{
                navigator.share({
                  title : postTitle,
                  url : postUrl,

                }).then((result)=>{
                  alert('Thank you for sharing.')
                }).catch((err)=>{
                  console.log(err);
                });
                });
              }else{

            }

          </script>

          <script>
            var slider = tns({
              "container": '.my-sliderexpo',  
              "responsive": {
                "300": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 8,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                }
              },
              
             
            });
          </script>

        <!--speaker-->
          <script>
            var slider = tns({
              "container": '.my-sliderSpeaker',  
              "responsive": {
                "300": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 8,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                }
              },
              
             
            });
          </script>

        <!--partner-->
          <script>
            var slider = tns({
              "container": '.my-sliderPartner',  
              "responsive": {
                "300": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 8,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                }
              },
              
             
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-sliderOffers',  
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                 
                },
                "500": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": true,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                }
              },
              
              
              
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-sliderOffers2',  
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":true,
                  "autoplayHoverPause": true,
                  "nav": false,
                 
                },
                "500": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": true,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                }
              },
              
              
              
            });
          </script>

           <script>
            var slider = tns({
              "container": '.locationhours',  
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                 
                },
                "500": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": true,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                }
              },
              
              
              
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-Slider',  
              "responsive": {
                "350": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 4
                }
              },
              
              "nav": false,
              "mouseDrag": true,
              "controls": false,
              "swipeAngle": false,
              "speed": 400,
              "autoplay": true,
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-slider1',  
              "responsive": {
                "350": {
                  "items": 3,
                  "controls": false,
                  "edgePadding": 30
                },
                "500": {
                  "items": 4
                }
              },
              
              "nav":false,
              "mouseDrag":true,
              "controls": falses,
              "swipeAngle": false,
              "speed": 400,
              "autoplay":true,
            });
          </script>

          <script>
            var slider = tns({
              "container": '.my-slider2',  
              "responsive": {
                "350": {
                  "items": 3,
                  "controls": true,
                  "edgePadding": 30
                },
                "500": {
                  "items": 4
                }
              },
              "autoplay":true,
              "nav":false,
              "mouseDrag":true,
              "controls": true,
              "swipeAngle": false,
              "speed": 400
            });
          </script>

          <!--test 1-->
          <script>
            var slider = tns({
              "container": '.expo_Initiatives', 
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                }
              },
              
            });
          </script>

          <script>
            var slider = tns({
              "container": '.expo_Initiat',  
              "responsive": {
                "350": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                },
                "500": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                }
              },
            });
          </script>
          <!--test2-->

          <script>
            var slider = tns({
              "container": '.last',  
              "responsive": {
                "300": {
                  "items": 1,
                  "controls": false,
                  "nav": false,
                  "autoplay":false,
                  "mouseDrag":true,
                  "controls": false,
                  "fixedWidth": 280,
                },
                "500": {
                  "items": 3,
                  "nav": false,
                }
              },
              
            });
          </script>

          <script>
            var slider = tns({
              "container": '.moretoexplore',  
              "responsive": {
                "300": {
                  "items": 1,
                  "controls": false,
                  "nav": false,
                  "autoplay":false,
                  "mouseDrag":true,
                  "controls": false,
                  "fixedWidth": 280,
                },
                "500": {
                  "items": 3,
                  "nav": false,
                }
              },
              
            });
          </script>

        <script>
          var slider = tns({
            "container": '.my-Slider3',          
            "responsive": {
              "300": {
                "items": 2,
                "controls": false,
                "mouseDrag": true,
                "autoplay": false,
                "fixedWidth": 150,
                "autoplayButtonOutput": false,
                "autoplayHoverPause": true,
              },
              "500": {
                "items": 4,
                "nav": false,
                "controls": false,
                "autoplayHoverPause": true,
                "autoplay": false,
                "fixedWidth": 300,
                "autoplayButtonOutput": false
              },
              
            },
            "autoplayButtonOutput":false
          });
        </script>

          <script>
            var slider = tns({
              "container": '.sec_last',  
              "responsive": {
                "300": {
                  "items": 1,
                  "controls": false,
                  "nav": false,
                  "autoplay":false,
                  "mouseDrag":true,
                  "controls": false,
                },
                "500": {
                  "items": 3,
                  "nav": false,
                }},
            });
          </script>

          <script>
            var slider = tns({
              "container": '.topp',  
              "responsive": {
                "300": {
                  "items": 1,
                  "controls": false,
                  "nav": false,
                  "autoplay":false,
                  "mouseDrag":true,
                  "controls": false,
                },
                "500": {
                  "items": 4,
                  "nav": false,
                }},
            });
          </script>

          <script>
            var slider = tns({
              "container": '.badgese',   
              
              "responsive": {
                "300": {
                  "items": 2,
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
            var slider = tns({
              "container": '.badgeseTag',   
              
              "responsive": {
                "300": {
                  "items": 2,
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
            var slider = tns({
              "container": '.badgses',   
              
              "responsive": {
                "300": {
                  "items": 2,
                  "controls": false,
                  "fixedWidth": 150,
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
            var slider = tns({
              "container": '.abced',   
              
              "responsive": {
                "300": {
                  "items": 1,
                  "controls": false,
                  "fixedWidth": 250,
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
        
    @endpush

  </main>