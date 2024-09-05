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

                  .fixed-buttons {
                    position: fixed;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    gap: 10px;
                    padding: 10px;
                    background: 1px solid #ddd;
                  }

                 
          </style>


          <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
            <div class="container">
              <div class="row">
                <div class="col-md-9">
                    <span class="badge rounded-pill bg-primary fs-xs mt-4">
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
                    <div class="">
                          <h5 class="text-dark fw-normal pt-2 pb-0">
                              @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                              @else
                                {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                              @endif 
                          </h5>
                    </div>
                  <div class="h1">{{$event->eventname}}</div>
                  <div class="">
                      <h5 class="text-dark fw-normal">{{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} </h5></div>
                 
                  <div class="my-5 py-5"></div>
                 
                  <div class="row">
                                <style>
                                    .custom-icon {
                                        font-size: 4rem; /* Size of the icon */
                                        color: #3498db; /* Color of the icon */
                                    }
                                </style>
                   <div class="col-6 mb-3">
                    <div class="row">
                      <div class="col-3 text-center px-0 border-end">
                        <div class="fw-bold text-center">{{$commentedRates->count()}}  <i class="bi bi-star-fill"></i></div>
                        <div class="fw-light fs-sm text-muted">Review</div>
                      </div>
                      <div class="col-3 text-center px-0 border-end">
                        <div class="fw-bold text-center">{{$event->edition}} <i class="bi bi-patch-check-fill"></i></div>
                        <div class="fw-light fs-sm text-muted">Edition</div>
                      </div>
                      <div class="col-3 px-0 border-end">
                        <div class="fw-bold text-center ">{{number_format(($event->auidence / 1000) , 1). 'k'}} +</div>
                        <div class="fw-light fs-sm text-muted">Visitor</div>
                      </div>
                      <div class="col-3 px-0 border-end">
                         <div class="fw-bold text-center">{{round($commentedRates->avg('rate') , 1)}}</div>
                         <div class="fw-light fs-xs text-muted">Rated for 3+</div>
                      </div>
                    </div>
                   </div>
                   <div class="col-6"></div>
                  </div>
                 
                  <div class="row">
                    <ul class="list-unstyled text-light">
                              <li class="d-flex">
                                <a class="btn btn-sm btn-primary mx-1" href="{{route('event.exhibit', ['board' => 'business'])}}">Plan to Visit</a>
                                <a class ="btn btn-sm btn-primary mx-1" href="{{$link->google()}}">Add to Calender</a>
                                <a class="btn btn-sm btn-light" href=""> <i class=" fs-md fw-dark bi bi-share"></i> Share it</a>
                                <a class="btn btn-sm btn-light" href=""> <i class="bi bi-bookmark-plus-fill"></i>Add To whislist</a>
                              </li>
                    </ul>
                  </div>

                </div>
                <div class="col-md-3">
                  <style>
                    .card {
                            --bs-card-spacer-y: 1.25rem;
                            --bs-card-spacer-x: 1.25rem;
                            --bs-card-title-spacer-y: 0.5rem;
                            --bs-card-title-color: var(--bs-gray-900);
                            --bs-card-subtitle-color: ;
                            --bs-card-border-width: 0;
                            --bs-card-border-color: var(--bs-border-color);
                            --bs-card-border-radius: 0.4rem;
                            --bs-card-box-shadow: ;
                            --bs-card-inner-border-radius: 0.4rem;
                            --bs-card-cap-padding-y: 1.25rem;
                            --bs-card-cap-padding-x: 1.25rem;
                            --bs-card-cap-bg: var(--bs-body-bg);
                            --bs-card-cap-color: ;
                            --bs-card-height: ;
                            --bs-card-color: var(--bs-body-color);
                            --bs-card-bg: var(--bs-body-bg);
                            --bs-card-img-overlay-padding: 1.25rem;
                            --bs-card-group-margin: 0.9375rem;
                            position: relative;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: flex;
                            -webkit-box-orient: vertical;
                            -webkit-box-direction: normal;
                            -ms-flex-direction: column;
                            flex-direction: column;
                            min-width: 0;
                            height: var(--bs-card-height);
                            color: var(--bs-body-color);
                            word-wrap: break-word;
                            background-color: var(--bs-card-bg);
                            background-clip: border-box;
                            border: var(--bs-card-border-width) solid var(--bs-card-border-color);
                            border-radius: var(--bs-card-border-radius);
                        }

                    @media (min-width: 576px) {
                          .d-sm-block {
                              display: block !important;
                          }
                      }
                      .shadow {
                          --bs-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
                          -webkit-box-shadow: var(--bs-box-shadow) !important;
                          box-shadow: var(--bs-box-shadow) !important;
                      }
                      .rounded-4 {
                          --bs-border-radius-xl: 0.6rem;
                          border-radius: var(--bs-border-radius-xl) !important;
                      }
                      .card-body {
                          -webkit-box-flex: 1;
                          -ms-flex: 1 1 auto;
                          flex: 1 1 auto;
                          padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
                          color: var(--bs-card-color);
                      }
                      .dark-mode-item {
                          display: none !important;
                      }
                      .h-20px {
                          height: 20px !important;
                      }
                  </style>
                    <!-- new-top-additive -->
                    <div class="d-inline-block card card-body shadow rounded-4 position-absolute end-0 top-0 p-3 me-lg-n3 me-xxl-n7 mt-n5 d-none d-sm-block">
                      <img src="https://www.exhibition.org.in/public/image/trustpilot.svg" class="light-mode-item h-20px mb-2" alt="Client-img">
                      <img src="https://www.exhibition.org.in/public/image/trustpilot-light.svg" class="dark-mode-item h-20px mb-2" alt="Client-img">
                      <div class="d-flex align-items-center">
                        <img src="https://www.exhibition.org.in/public/image/trustpilot-star.svg" class="h-30px" alt="rating-img">
                        <h6 class="font-base fw-bold ms-1 mb-0">4.8/5.0</h6>
                      </div>
                      <p class="small mb-0 mt-2">Reviewed by 365 users</p>
                    </div>
                  <img class="p-1" width="230%" src="{{url('public/assets/image/exhibition/'.$event->image)}}"  alt="{{Str::limit($event->image, 24)}}">
                    <!-- additive -->
                     <style>
                      .avatar-img {
                              width: 100%;
                              height: 100%;
                              -o-object-fit: cover;
                              object-fit: cover;
                          }

                          .avatar-group {
                              padding: 0;
                              display: -webkit-box;
                              display: -ms-flexbox;
                              display: flex;
                          }

                          .text-white {
                              --bs-text-opacity: 1;
                              --bs-white-rgb: 255, 255, 255;
                              color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
                          }

                          h6, .h6 {
                                font-size: 1.2rem;
                            }
                            h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
                                margin-top: 0;
                                margin-bottom: 0.5rem;
                                font-family: "Instrument Sans", sans-serif;
                                font-weight: 700;
                                line-height: 1.25;
                                color: var(--bs-heading-color);
                            }

                            .rounded-4 {
                                --bs-border-radius-xl: 0.6rem;
                                border-radius: var(--bs-border-radius-xl) !important;
                            }
                            .bg-dark {
                                --bs-bg-opacity: 1;
                                --bs-dark-rgb: 32, 33, 36;
                                background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
                            }

                            .avatar-group > li:not(:last-child) {
                                  margin-right: -0.8rem;
                              }
                              .avatar-group > li {
                                  position: relative;
                              }
                              .avatar {
                                  height: 3rem;
                                  width: 3rem;
                                  position: relative;
                                  display: inline-block !important;
                              }
                              .avatar-xs {
                                  height: 2.1875rem;
                                  width: 2.1875rem;
                              }
                     </style>
                    <div class="d-inline-block bg-dark rounded-4 position-absolute start-0 bottom-0 mb-md-4 ms-md-n5 p-3">
                      <div class="d-flex align-items-center">
                        <h6 class="text-white mb-0 me-2">5K+</h6>
                        <ul class="avatar-group mb-0 align-items-center">
                          <li class="avatar avatar-xs">
                            <img class="avatar-img rounded-circle" src="https://www.exhibition.org.in/public/image/visi1.jpg" alt="avatar">
                          </li>
                          <li class="avatar avatar-xs">
                            <img class="avatar-img rounded-circle" src="https://www.exhibition.org.in/public/image/visi5.jpg" alt="avatar">
                          </li>
                          <li class="avatar avatar-xs">
                            <img class="avatar-img rounded-circle" src="https://www.exhibition.org.in/public/image/visi2.jpg" alt="avatar">
                          </li>
                          <li class="avatar avatar-xs">
                            <img class="avatar-img rounded-circle" src="https://www.exhibition.org.in/public/image/visi3.jpg" alt="avatar">
                          </li>
                          <li class="avatar avatar-xs">
                            <img class="avatar-img rounded-circle" src="https://www.exhibition.org.in/public/image/visi4.jpg" alt="avatar">
                          </li>
                        </ul>
                      </div>
                      <p class="text-white mb-0 mt-2">Total visitors per month</p>
                    </div>
                </div>
              </div>
           </div>
          </section>
          
          <!--participants-->  
          <section class="container py-4 py-md-5 my-2 d-none d-sm-block">
            <div class="row text-center text-sm-start">
              <div class="col-lg-8 col-md-6 col-sm-8">
                  <ul class="list-unstyled fs-sm bg-secondary p-2">
                    {{-- <div class="fw-bold"> Click on interested to stay updated about this event.</div> -->

                    <li class="d-flex justify-content-between p-0 m-0">
                      <span class="text-dark fw-medium fs-sm">  
                      Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                  
                      @if( $rate == $event->id)
                      
                        <button class="btn btn-sm btn-outline-primary" type="button"> {{$rating}} /10</button>

                      @else
                          <div class="py-2 me-2"> 
                            <button class="btn btn-sm btn-outline-primary" type="button" ><i class="bi bi-star fs-lg me-2"></i> 
                            <a href="{{route('coi.ratenow',['slug' => $event->slug])}}">Rate Now</a> </button>
                          </div>
                      @endif --}}
                    
                    </li>

                    <li class="d-flex justify-content-between px-2 m-0 lh-1">
                      <span class="text-dark fw-medium fs-sm">  Become a Member <br><span class="text-muted fw-light fs-xs">Enjoy unlimited free registration for you and your guest(s) on every visit.</span></span>
                      <span><a href="{{route('coi.ratenow',['slug' => $event->slug])}}" class="btn btn-outline-primary btn-sm ">Join Today</a></span>
                    </li>
                  </ul>
              
                  
                <h5 class="mb-1">Understanding Expo</h5>
                <hr class="mt-md-2 mb-2">

            <div class="d-flex mb-3"><span>Industry</span> 
              @foreach($category as $cat) 
                <a class="badge badge-accent border border-1 text-right border-dark text-dark mr-1" href="{{route ('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'exhibition', 'categry' => $cat->expo->slug])}}">{{$cat->expo->tag}}</a>
              @endforeach
            </div>
          
                <p class="fs-sm mb-3 mb-lg-4 pb-2">{{$event->shtdesc}}</p>
                <span class="badge rounded-pill bg-primary">Concurrent</span>
                <h5 class="mb-3">Event</h5>

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

                <section class="container py-5">                    
                  <div class="card-group last" >

                    <div class="card border-0">
                      {{-- <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image"> --}}
                      <div class="card-body">
                        <div class="card-title text-primary fs-md">Find Business</div>
                        <p class="card-text fs-sm fw-light">Looking to partner with the right exhibitors for your event or business? Our Service connects you with a comprehensive exhibtor profiles. Find the perfect match for your needs whether you're organizing an event or seeking collaboration opportunities.</p>
                        <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-sm btn-primary">Get Directory</a>
                      </div>
                    </div>


                  </div>
                </section>
                
                <div class="row">
                  <div class="col-6">
                      <h5 class="mb-3">Pre-request for space booking</h5>
                      <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                        <li class="my-3 fs-sm fw-light">Update with your required space, budget before 3 months of exhibition start date, get special free and discounted deals</li>
                        <li><a href="{{route('event.exhibit', ['board'=> 'partner' ])}}" class="btn btn-sm btn-outline-primary">Partner with Space</a></li>
                      </ul>

                      <h5 class="mb-3">Our Data, Your Customers.</h5>
                      <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                        <li class="my-3 fs-sm fw-light">Download the exhibitor, share your email to find exhibitor</li>
                        <li><a href="{{route('event.exhibit', ['board'=> 'partner' ])}}" class="btn btn-sm btn-outline-primary">Partner with Space</a></li>
                      </ul>

                      <h5 class="mb-3">Advertise</h5>
                      <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                        <li class="my-3 fs-sm fw-light">Promote your product with your magazine The Exhibition Network distribute at airport, exhibition centre, goverment office and associations offices.</li>
                        <li><a href="{{route('event.exhibit', ['board'=> 'partner' ])}}" class="btn btn-sm btn-outline-primary">Advertise</a></li>
                      </ul>
                  </div>

                  <div class="col-6">
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
                

              </div>

              
              <div class="col-lg-4 col-md-4 col-sm-4">
                
                {{--<h5 class="m-3 fs-sm fw-light">Universal Register Now for a Seamless Expo Experience - Choose Your Event and Skip the Lines!      
                <br><small>Register online for your Chosen expo and get instant, queue-less entry with a unique QR code.</small>
                <span class="fw-bold text-primary">Skip the Lines</span></h5> --}}

                <section class="container mb-5">
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
                  <div class="row g-0 py-0 mx-n2 mt-2"> 
                    {{-- px-2 mb-1 --}}
                    @foreach ($evento as $franchise)
                      <div class="container" >
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
                                  $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
                                  $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));
                                  $name = $franchise->eventname;
                                  $venue = $franchise->venue;
                                  $city = $franchise->city;
                                  $country = $franchise->country;
                                  $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                                  
                                @endphp
                                  
                                    <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
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
                              <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent = "selectItem('{{$franchise->id}}')">
                                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                            </div>
                          </div>  
                      </div>
                    @endforeach
                  </div>
                </section>
                
                
                
                
                
                
                
              </div>
            </div>
          </section>

          <!-- mobile -->
          <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" data-bs-theme="light">
            <!-- <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" style="background-image: url('{{asset('/image/test.jpg')}}');"> -->
            <div class="container  mb-lg-0 bg-primary">
              <div class="d-flex justify-content-between py-2">

                      <i class="bi bi-list text-color-light fs-lg"></i>
                    
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
                  @php 
                          $current = strtotime(Carbon\Carbon::now());
                          $to = strtotime($event->startdate);
                          $from= strtotime($event->enddate);
                  @endphp

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
                    @if($event->latestupdat == 'postpone')
                      <div class="h5">Sorry, Event has been postponed</div> 
                    @else
                      <h5 class="text-dark fw-normal pt-2 pb-0">
                          @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                            {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                          @else
                            {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                          @endif 
                      </h5>
                    @endif

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
                



                  <section class="d-lg-none">
                    <div class="grido">
                      <div class="element-item bg-light" data-category="post-transition">
                        <h3 class="name">Edition</h3>
                        <p class="symbol text-dark">{{$event->edition}}</p>
                        <p class="number"> <i class="bi bi-add"></i> </p>
                        <p class="weight">Verified</p>
                      </div>

                      <div class="element-item bg-light" data-category="post-transition">
                        <h3 class="name">Visitor</h3>
                        <p class="symbol text-dark">{{number_format(($event->auidence / 1000) , 1). 'k'}}  <span class="fw-normal fs-sm">K</span></p>
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
                        <p class="symbol text-dark">{{Carbon\Carbon::parse($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate)) + 1}}</p>
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


                  <hr class="mt-md-2 mb-0">

                

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
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Accordion Item #1
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Accordion Item #2
                      </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Accordion Item #3
                      </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                  </div>
                </div>
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
          
          

          

        

          
              <!-- <section class="d-lg-none">
                <hr class="mt-md-2 mb-2">
                <div class="card text-center py-5 border-0"> 
                  <div class="card-body">
                    <h5 class="card-title h2">Plan your Expo Now </h5>
                    <p class="card-text fs-sm text-muted">Connect with The Exhibtion Network: Pre-book your ultra Premium Exhibtion Space - with exhibition demographic trends and save monthly calender, get space & sponser option to extend  businesss reach</p>
                    <a href="#" class="btn btn-sm btn-primary">Plan your Expo</a>
                  </div>
                </div>
              </section> -->

            @php 
              $relativeEvent = DB::table('events')->where('reference' , $event->reference)->get();
            @endphp

            @if($relativeEvent->count() >= 2 )
              <hr class="mt-md-2 mb-2">
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

                
                
                
                    <div class="row g-0 py-0 mx-n2 my-Slider4 mt-2"> 
                      {{-- px-2 mb-1 --}}
                      @foreach($relativeEvent as $eventoi)
                        <div wire:ignore class="col-lg-2 col-md-4 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
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
                              <small  class="d-none d-sm-block"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> venue ?? ''))}}, <br> {{ucwords(trans($eventoi -> city ?? ''))}}</small>

                              <small class="text-bolder d-lg-none"> <i class="bi bi-calendar3"></i>
                                @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                                  {{Carbon\Carbon::parse ($eventoi->startdate)->format('d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                                @else
                                  {{Carbon\Carbon::parse ($eventoi->startdate)->format('d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                                @endif 
                              </small><br>
                              <small class="d-lg-none"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> city ?? ''))}}</small> 
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
            @endif
          


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

            
<!-- left: 0; -->
<style>
                    .fixed-bottom-div {
                        position: fixed;
                        bottom: 0;
                        width: 100%;
                        background-color: #fff; /* Light background color */
                        border-top: 1px solid #dee2e6; /* Optional border */
                        padding: 10px;
                        z-index: 9999; /* Ensures it stays on top */
                    }
                </style>
                <!-- fixedthis -->
                <div class="d-none d-sm-block fixed-bottom-div">
                  <ul class=" container list-unstyled fs-sm  py-2">     
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
                                  <a class="btn btn-primary btn-sm mt-5" type="button" href="{{route('event.exhibit', ['board' => 'business'])}}"> Plan your Visit </a>
                                @endif
                              @else
                                <a class="btn btn-primary btn-sm mt-5" type="button" href="{{route('event.exhibit', ['board' => 'business'])}}"> Plan your Visit </a>
                            @endif
                        </span>
                    </li>

                    <!-- <li><hr class="mt-md-2 mb-2"></li>
                    <li class="p1 fw-light">
                      {{($event->shortdesc)}} | @if($event->exhibitors != null)| + {{$event->exhibitors}} Exhibitors @endif | 
                      {{Carbon\Carbon::parse ($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate)) + 1}} days @if($productPrice != null)| Rs. {{$productPrice}} Onwards @endif
                    </li> -->
                  </ul>
                </div> 
                <section class=" sectionlevel position-relative z-index-2 py-0 mb-n7 fixed-bottom-div" data-bs-theme="light">
                  <div class="container position-relative">
                    <div class="bg-primary  bg-colo rounded position-relative overflow-hidden p-4 p-sm-5">

                      <!-- SVG decoration -->
                      <figure class="position-absolute bottom-0 end-0 mb-n3">
                        <svg class="fill-dark opacity-5" width="400" height="145" viewBox="0 0 400 145" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.437348 59.1519C0.291566 59.1519 0.121486 59.0549 0.0485943 58.9093C-0.0485943 58.7153 0 58.4728 0.194377 58.3515L60.0625 18.9131L70.899 31.5499C71.0205 31.6954 71.0691 31.8652 71.0205 32.035C70.9719 32.2047 70.8504 32.3503 70.6803 32.423L0.583131 59.1034C0.534537 59.1276 0.485943 59.1519 0.437348 59.1519ZM59.9167 19.8833L2.86706 57.4541L70.1701 31.8409L59.9167 19.8833Z" fill="#202124"></path>
                          <path d="M0.851004 59.2979C0.63233 59.2979 0.413656 59.1281 0.389359 58.9098C0.365061 58.6673 0.510844 58.449 0.729518 58.4005L76.9253 38.7783L90.7504 55.7082L0.851004 59.2979ZM76.658 39.603L3.30501 58.4733L89.2683 55.0291L76.658 39.603Z" fill="#202124"></path>
                          <path d="M70.8969 32.0817L70.168 32.0859L70.2189 40.7934L70.9478 40.7892L70.8969 32.0817Z" fill="#202124"></path>
                          <path d="M72.6739 60.5583L0.851562 59.297V58.5694L71.9207 59.8064L71.7749 56.1439L72.5038 56.1196L72.6739 60.5583Z" fill="#202124"></path>
                          <path d="M16.2865 52.6087L12.1719 55.7021L12.318 55.8959L16.4327 52.8025L16.2865 52.6087Z" fill="#202124"></path>
                          <path d="M21.6213 50.601L17.4219 54.1704L17.5794 54.3551L21.7789 50.7856L21.6213 50.601Z" fill="#202124"></path>
                          <path d="M27.4394 48.3802L23.1289 52.8901L23.3047 53.0576L27.6152 48.5476L27.4394 48.3802Z" fill="#202124"></path>
                          <path d="M33.4909 46.1008L28.8633 51.4375L29.047 51.5962L33.6746 46.2596L33.4909 46.1008Z" fill="#202124"></path>
                          <path d="M39.2488 43.9004L34.6523 49.9487L34.8459 50.0953L39.4424 44.047L39.2488 43.9004Z" fill="#202124"></path>
                          <path d="M45.6875 41.4253L40.9922 48.2988L41.1929 48.4355L45.8883 41.562L45.6875 41.4253Z" fill="#202124"></path>
                          <path d="M52.8514 38.7208L47.2773 46.6982L47.4766 46.837L53.0507 38.8596L52.8514 38.7208Z" fill="#202124"></path>
                          <path d="M59.6794 36.1172L53.5391 45.0894L53.7397 45.2262L59.88 36.254L59.6794 36.1172Z" fill="#202124"></path>
                          <path d="M66.3562 33.5847L59.6758 43.5107L59.8775 43.646L66.5579 33.72L66.3562 33.5847Z" fill="#202124"></path>
                          <path d="M70.4459 34.1845L65.8281 41.9414L66.037 42.0653L70.6548 34.3084L70.4459 34.1845Z" fill="#202124"></path>
                          <path d="M393.661 145L392.273 144.88L393.152 140.401L394.54 140.521L393.661 145ZM189.936 138.628C187.484 138.568 185.124 138.297 182.949 137.846L183.366 136.975C185.448 137.395 187.669 137.636 190.028 137.696L189.936 138.628ZM196.969 138.357L196.737 137.455C198.866 137.245 201.133 136.884 203.4 136.433L203.817 137.305C201.503 137.786 199.19 138.147 196.969 138.357ZM395.419 136.073L394.031 135.953C394.309 134.45 394.586 132.977 394.864 131.474L396.252 131.564C395.974 133.067 395.697 134.57 395.419 136.073ZM176.518 135.862C174.621 135.021 172.816 133.969 171.243 132.766L172.307 132.195C173.834 133.337 175.5 134.329 177.304 135.141L176.518 135.862ZM210.387 135.712L209.832 134.9C211.868 134.329 213.95 133.668 215.986 132.917L216.633 133.698C214.598 134.45 212.469 135.111 210.387 135.712ZM222.695 131.354L221.954 130.602C223.851 129.791 225.748 128.919 227.599 128.017L228.432 128.739C226.535 129.67 224.592 130.542 222.695 131.354ZM167.31 128.949C166.246 127.687 165.32 126.274 164.488 124.771L165.783 124.47C166.57 125.943 167.495 127.296 168.513 128.528L167.31 128.949ZM396.992 127.085L395.604 126.995C395.882 125.462 396.113 123.959 396.298 122.517L397.686 122.607C397.501 124.05 397.27 125.552 396.992 127.085ZM233.799 125.883L232.874 125.192C234.586 124.23 236.252 123.208 237.825 122.216L237.917 122.156L238.889 122.787L238.797 122.847C237.27 123.869 235.558 124.891 233.799 125.883ZM162.59 120.382C162.128 118.94 161.804 117.437 161.619 115.874L163.007 115.814C163.192 117.347 163.516 118.819 163.932 120.232L162.59 120.382ZM243.794 119.541L242.776 118.91C244.303 117.858 245.876 116.745 247.449 115.603L248.467 116.204C246.894 117.377 245.321 118.489 243.794 119.541ZM398.334 118.098L396.946 118.038C397.131 116.505 397.316 115.002 397.455 113.559L398.843 113.619C398.704 115.062 398.519 116.565 398.334 118.098ZM253.094 112.838L252.03 112.237C253.464 111.155 254.945 110.042 256.518 108.81L257.582 109.381C256.009 110.614 254.528 111.756 253.094 112.838ZM162.822 111.335L161.434 111.305C161.48 109.862 161.619 108.329 161.896 106.766L163.285 106.856C163.007 108.419 162.868 109.922 162.822 111.335ZM399.213 109.081L397.825 109.051C397.918 107.548 398.01 106.015 398.057 104.542L399.445 104.572C399.398 106.045 399.306 107.578 399.213 109.081ZM262.024 105.894L260.96 105.323C262.44 104.151 263.875 103.009 265.355 101.837L266.419 102.408C264.939 103.58 263.504 104.752 262.024 105.894ZM164.21 102.408L162.822 102.257C163.007 101.476 163.238 100.664 163.47 99.8528C163.655 99.1615 163.886 98.5002 164.071 97.8089L165.413 97.9892C165.182 98.6806 164.996 99.3418 164.811 100.033C164.58 100.845 164.395 101.656 164.21 102.408ZM398.149 100.063C398.149 98.5603 398.103 97.0274 398.01 95.5545L399.398 95.5245C399.491 96.9973 399.491 98.5303 399.537 100.033L398.149 100.063ZM270.815 98.921L269.751 98.3499C271.232 97.1777 272.666 96.0054 274.146 94.8632L275.211 95.4343C273.73 96.5765 272.249 97.7488 270.815 98.921ZM166.94 93.6308L165.598 93.4204C166.107 92.0377 166.662 90.5949 167.264 89.0319L168.606 89.2724C168.004 90.8054 167.449 92.2181 166.94 93.6308ZM279.606 91.9476L278.542 91.3765C280.115 90.1441 281.596 89.0019 283.03 87.9198L284.094 88.5209C282.66 89.573 281.179 90.7152 279.606 91.9476ZM397.686 91.0759C397.548 89.573 397.362 88.0701 397.131 86.5972L398.519 86.507C398.751 87.9799 398.936 89.5129 399.074 91.0158L397.686 91.0759ZM288.629 85.1244L287.611 84.5232C289.184 83.381 290.757 82.2388 292.284 81.1868L293.302 81.818C291.775 82.87 290.202 83.9822 288.629 85.1244ZM170.41 84.914L169.068 84.6735C169.67 83.2307 170.317 81.7879 170.919 80.3151L172.261 80.5556C171.659 82.0284 171.012 83.4712 170.41 84.914ZM396.298 82.1486C396.252 81.9082 396.206 81.6677 396.159 81.4272C395.882 80.1648 395.512 78.9324 395.095 77.7602L396.437 77.5498C396.854 78.7521 397.224 80.0145 397.501 81.307C397.548 81.5475 397.594 81.7879 397.64 82.0284L396.298 82.1486ZM298.114 78.5717L297.143 77.9405C298.808 76.8584 300.52 75.7763 302.14 74.7844L303.111 75.4457C301.446 76.4376 299.78 77.4896 298.114 78.5717ZM174.158 76.2272L172.816 75.9867C173.464 74.544 174.065 73.1012 174.713 71.6584L176.055 71.8988C175.453 73.3416 174.806 74.7844 174.158 76.2272ZM393.198 73.4619C392.412 72.0491 391.44 70.6665 390.422 69.404L391.625 68.9832C392.689 70.2757 393.661 71.6884 394.494 73.1613L393.198 73.4619ZM308.201 72.4399L307.276 71.7486C309.08 70.7566 310.885 69.7647 312.643 68.863L313.522 69.5844C311.764 70.4861 309.959 71.448 308.201 72.4399ZM177.859 67.5404L176.518 67.3C177.165 65.7369 177.721 64.3242 178.23 62.9415L179.571 63.152C179.062 64.5346 178.507 65.9774 177.859 67.5404ZM319.074 66.9092L318.288 66.1578C320.185 65.2861 322.174 64.4444 324.118 63.6329L324.858 64.3843C322.868 65.1959 320.971 66.0375 319.074 66.9092ZM386.674 65.7069C385.24 64.5346 383.667 63.4525 382.001 62.4907L382.926 61.7993C384.685 62.7913 386.304 63.9034 387.785 65.1358L386.674 65.7069ZM330.781 62.16L330.133 61.3785C330.364 61.2884 330.595 61.1982 330.873 61.1381C332.724 60.5068 334.575 59.9057 336.425 59.3947L336.981 60.2363C335.176 60.7473 333.325 61.3184 331.521 61.9496C331.243 62.0097 331.012 62.0699 330.781 62.16ZM376.449 59.9658C374.505 59.2444 372.423 58.6432 370.249 58.1924L370.665 57.3207C372.932 57.8016 375.107 58.4028 377.143 59.1542L376.449 59.9658ZM181.191 58.7334L179.849 58.5531C180.358 57.0502 180.821 55.5473 181.237 54.1345L182.625 54.2848C182.163 55.7276 181.7 57.2305 181.191 58.7334ZM343.366 58.6432L342.949 57.7716C345.217 57.3207 347.53 56.9299 349.751 56.6594L349.982 57.5612C347.808 57.8317 345.587 58.1924 343.366 58.6432ZM363.632 57.2606C361.457 57.0802 359.144 57.0201 356.83 57.0802L356.784 56.1785C359.19 56.1184 361.55 56.1785 363.817 56.3588L363.632 57.2606ZM183.689 49.8362L182.301 49.716C182.625 48.2131 182.903 46.7102 183.134 45.2674L184.522 45.3576C184.291 46.8004 184.013 48.3033 183.689 49.8362ZM184.985 40.8188L183.597 40.7888C183.643 39.857 183.689 38.9252 183.689 38.0535C183.689 37.4824 183.689 36.9113 183.643 36.3101L185.031 36.2801C185.031 36.8512 185.077 37.4523 185.077 38.0234C185.077 38.9552 185.031 39.887 184.985 40.8188ZM75.8812 36.6708L74.8633 36.0396C76.2976 35.0777 77.7783 33.9956 79.4902 32.7032L80.5544 33.3043C78.8425 34.5968 77.3156 35.709 75.8812 36.6708ZM183.227 31.8315C182.995 30.3286 182.671 28.8557 182.301 27.4129L183.689 27.2626C184.106 28.7355 184.383 30.2384 184.615 31.7714L183.227 31.8315ZM85.0889 29.8777L84.0247 29.3066C85.1814 28.4049 86.3844 27.4731 87.5874 26.5112L88.4665 25.8199L89.5307 26.391L88.6516 27.0823C87.4486 28.0141 86.2456 28.9459 85.0889 29.8777ZM180.821 23.0545C180.451 22.1528 180.034 21.251 179.618 20.3493C179.34 19.8383 179.062 19.2973 178.785 18.7863L180.08 18.4556C180.404 18.9967 180.682 19.5077 180.96 20.0487C181.422 20.9505 181.839 21.8823 182.209 22.784L180.821 23.0545ZM93.9264 22.9343L92.8622 22.3632C94.5279 21.1007 96.0085 19.9585 97.3966 18.9366L98.4608 19.5377C97.0727 20.5296 95.5921 21.6418 93.9264 22.9343ZM103.088 16.1712L102.07 15.5701C103.736 14.3978 105.355 13.3157 106.928 12.3238L107.9 12.955C106.373 13.9169 104.753 14.999 103.088 16.1712ZM175.916 14.7585C174.806 13.4359 173.603 12.1735 172.261 11.0012L173.371 10.4602C174.759 11.6625 176.009 12.9851 177.165 14.3076L175.916 14.7585ZM112.989 9.91915L112.064 9.22782C113.915 8.20585 115.766 7.24399 117.524 6.40236L118.357 7.12376C116.598 7.96538 114.794 8.89718 112.989 9.91915ZM167.819 7.63474C166.153 6.58271 164.441 5.62085 162.59 4.77923L163.377 4.02778C165.274 4.89946 167.079 5.89138 168.791 6.97347L167.819 7.63474ZM124.094 4.68906L123.4 3.90755C125.482 3.12604 127.611 2.4347 129.693 1.89366L130.202 2.73528C128.212 3.24627 126.176 3.90755 124.094 4.68906ZM156.668 2.58499C154.586 1.98383 152.411 1.53296 150.19 1.26244L150.468 0.390755C152.735 0.691335 155.002 1.14221 157.223 1.77342L156.668 2.58499ZM136.726 1.41273L136.448 0.541045C138.762 0.210406 141.121 0.030058 143.435 0L143.481 0.901741C141.26 0.931799 138.993 1.11215 136.726 1.41273Z" fill="#202124"></path>
                        </svg>
                      </figure>

                      <div class="row g-4 position-relative">
                        <!-- Title and inputs -->
                        <div class="col-lg-6">
                          <!-- Title -->
                          <h3 class="text-white text-coloro text-light ">Let's talk about your digital agency goals</h3>

                          <!-- Search -->
                          <form class="col-md-10 bg-body rounded-2 p-2 mt-4">
                            <div class="input-group">
                              <input class="form-control focus-shadow-none border-0 me-1" type="email" placeholder="Your email address">
                              <button type="button" class="btn btn-dark rounded-2">Subscribe</button>
                            </div>
                          </form>
                        </div>

                        <!-- Content -->
                        <div class="col-lg-5 col-xl-4 ms-auto text-lg-end">
                          <ul class="list-group list-group-borderless mb-0">
                            <li class="list-group-item mb-0">
                              <a href="#" class="text-white fw-normal">
                                <i class="bi bi-headset me-1"></i> Call on: 0125 258 993 22
                            </a>
                            </li>
                            <li class="list-group-item text-white fw-normal mb-0">
                              <i class="bi bi-clock me-1"></i> Time: 9am to 5pm (Sunday close)
                            </li>
                            <li class="list-group-item mb-0">
                              <a href="#" class="text-white fw-normal">
                                <i class="bi bi-envelope me-1"></i> Email: example@gmail.com
                            </a>
                            </li>
                          </ul>
                        </div>
                      </div> <!-- Row END -->
                    </div>
                  </div>
                </section>
              

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
              "fixedWidth": 150,
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