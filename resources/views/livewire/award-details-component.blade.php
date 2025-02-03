@section('page_title', ($event->eventname))
@section('page_description', ('Great Exhibtion To Exhibit '.$event->shtdesc))
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

    <main>

    <style>
        body {
        background-color: #151515;
        }

      .award {
        font-family: Segoe UI, Tahoma, sans-serif; 
        font-size: 75%;
        background-color: #151515;
        
      }

      .textcolor {
        color: #fff;
      }
      
    </style>

    <section class=" award container text-light">
        <ul class="nav nav-tabs nav-fill mb-1" role="tablist">
            <li class="nav-item border-bottom textcolor"><a class="nav-link px-1 {{$currentTab === 'tab1' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab1')" data-bs-toggle="tab" role="tab">Home</a></li>
            <li class="nav-item border-bottom textcolor"><a class="nav-link px-1 {{$currentTab === 'tab2' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab2')" data-bs-toggle="tab" role="tab">Guide</a></li>
            <li class="nav-item border-bottom textcolor"><a class="nav-link px-1 {{$currentTab === 'tab3' ? 'active' : ''}}" href="#" wire:click.prevent = "switchTab('tab3')" data-bs-toggle="tab" role="tab">Showcase</a></li>
        </ul>
    </section>

    <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9" 
      style="">
      
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
          
            <div class="col-lg-3 col-md-6 col-sm-8 px-1 d-none d-sm-block">
                <a class="card-img-top d-block overflow-hidden"  href="{{route('event.product',['slug' => $event->slug])}}">
                    <img src="{{url('public/assets/image/exhibition/'.$event->image)}}" alt="{{Str::limit($event->eventname, 24)}}">
                </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8  border border-white border-1 px-3 py-5 ">
                <div class="position-relative me-n4 mb-3 d-none d-sm-block">
                  <div class="product-badge product-available  lh-1 fs-sm" style="right: 19.25rem;">
                    <strong>Great <br>Place <br>To <br>Exhibit</strong>
                  </div>
                </div>
                <h5 class="text-light fw-normal pt-2 pb-0">
                    @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                      {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                    @else
                      {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                    @endif 
                </h5>
                <h1 class="text-primary mb-3">{{$event->eventname}}</h1>
                <h5 class="text-light fw-normal">{{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} </h5>
                  @if(count($eventbrand) > 0)
                      <span class="text-light fs-sm fw-light"> <small>Powered by The Exhibtion Network</small></span>
                      <div class="d-flex bg-transparent border-bottom"> 
                      
                        @foreach($eventbrand as $franchise)
                            <img class="p-1" width="24%" src="{{url('public/assets/images/exhibition/'.$franchise->brand_logo)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                        @endforeach
                      </div>
                  @endif
                <h5 class="text-light fw-light fs-xs mt-3">Book business Space with us. <br>Get pre-post business.</h5>
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

                        <a class="btn btn-gradient-border mt-4" href="{{$link->google()}}">Add to Calender</a>
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
    
    <!-- <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" 
      style="background-image: url('{{asset('/image/test.jpg')}}');">
  
      <div class="container pt-0 mb-3 mb-lg-0">
        <div class="row gy-0">
      
          <div class="col-lg-3 col-md-6 col-sm-8 px-1 d-none d-sm-block">
                <a class="card-img-top d-block overflow-hidden"  href="{{route('event.product',['slug' => $event->slug])}}">
                    <img src="{{url('assets/image/exhibition/'.$event->image)}}" alt="{{Str::limit($event->eventname, 24)}}">
                </a>
                
          </div>
          <div class="col-lg-7 col-md-6 col-sm-8">
            <div class="col-lg-6 col-md-6 border border-white border-1 px-3 py-5">
            <span class="badge badge-primary bg-primary fs-sm">
              

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
                <div class="text-light fw-normal fs-md pt-2 pb-0">
                    @if(Carbon\Carbon::parse ($event->startdate)->format('M') != Carbon\Carbon::parse ($event->enddate)->format('M'))
                      {{Carbon\Carbon::parse ($event->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y ')}}
                    @else
                      {{Carbon\Carbon::parse ($event->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($event->enddate)->format('D, d M y')}}
                    @endif 
                </div>
                
                <h1 class="text-primary mb-3">{{$event->eventname}}</h1>
                <h5 class="text-light fw-normal">{{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}} </h5>

                @if(count($sponserbrand) > 0)
                    <span class="text-light fs-sm fw-light"> <small>Powered by The Exhibtion Network</small></span>
                    <div class="d-flex bg-transparent border-bottom"> 
                      @foreach($sponserbrand as $franchise)
                          <img class="p-1" width="24%" src="{{url('public/assets/image/exhibition/'.$franchise->brand_logo)}}"  alt="{{Str::limit($franchise->brand_name, 24)}}">
                      @endforeach
                    </div>
                @endif
                
                <h5 class="text-light fw-light fs-xs mt-3">Book business Space with us. <br>Get pre-post business.</h5>
                
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
    </section> -->

          <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10 award" data-bs-theme="light">
            <!-- <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" style="background-image: url('{{asset('/image/test.jpg')}}');"> -->
            <!-- <div class="container  mb-lg-0 bg-primary">
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

                     <a class="navbar-tool navbar-stuck-toggler" href=""><span class="navbar-tool-tooltip">Toggle menu</span>
                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-list"></i></div>
                    </a> 
                    <i class="navbar-tool-icon bi bi-list"></i>
                </div>


                 <div class="container">
                Expand your Businesss       
                </div>
            </div> -->

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

                      <h1 class="textcolor mb-0">{{ucwords(trans($event->eventname))}}</h1>
                      <h5 class="textcolor fw-normal">{{ucwords(trans($event->venue))}} {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}}</h5>
                      
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
                              <a class="btn btn-gradient-border mt-4" href="{{$link->google()}}">Add to Calender</a>
                              <a href="#" id="shareBtn" class="btn btn-gradient-border mt-4 mx-2"><i class="bi bi-share"></i></a>
                            </li>
                      </ul>


                  </div>    
                </div>
              </div>
              <div class="container">
                          
              </div>
            </div>
          </section>

          <section class="container mb-4 mb-lg-5">
            <div class="tab-content pt-2">
              @if($currentTab === 'tab2')
                <div class="tab-pane fade show active">

                      <section class="card text-center award py-5 border-0">
                        <div class="card-body">
                          <h5 class="card-title h2 textcolor">Award Jury</h5>
                          <p class="card-text fs-sm text-muted">Connect with The Exhibtion Network: Exhibtion Magazine - Where You Meet the Right People at the Right Time and Right Place.</p>
                          <a href="#" class="btn btn-sm btn-primary">Expand your Reach</a>
                        </div>
                      </section>

                      <section class="card text-center award py-5 border-0">
                        <div class="card-body">
                          <h5 class="card-title h2 textcolor">Got Good Design?</h5>
                          <p class="card-text fs-sm text-muted">Connect with The Exhibtion Network: Exhibtion Magazine - Where You Meet the Right People at the Right Time and Right Place.</p>
                          <a href="#" class="btn btn-sm btn-primary">Expand your Reach</a>
                        </div>
                      </section>

                      <section class="card text-center award py-5 border-0">
                        <div class="card-body">
                          <h5 class="card-title h2 textcolor">Exhibition</h5>
                          <p class="card-text fs-sm text-muted">A Design Award Exhibtiion, organized shortly after results announcement at The Exhibition Network, India, and later moved to several countries and cities, marks the grand opening of a new edition of the annual design competition. The design exhibition provides aan opportunity for architects, designers and business to showcase their latest products, projects and services the design trends for the year.</p>
                          <a href="#" class="btn btn-sm btn-primary">Expand your Reach</a>
                        </div>
                      </section>

                      <section class="card text-center award py-5 border-0">
                        <div class="card-body">
                          <h5 class="card-title h2 textcolor">Design Prize</h5>
                          <p class="card-text fs-sm text-muted">A Design Prize is the highest prize awarded in design industry with a specific aim of promoting, advertising and acknowledging good design worldwide. The A Design Prize includes public relations and publicity services in addition to the award trophy, certificate, yearbook and of course the winner logo which laureates could use to differentiate and add further value their award-winning products, projects and services.</p>
                          <a href="#" class="btn btn-sm btn-primary">Expand your Reach</a>
                        </div>
                      </section>
                    
                      <section class="card text-center award py-5 border-0">
                        <div class="card-body">
                          <h5 class="card-title h2 textcolor">Award Categories</h5>
                          <p class="card-text fs-sm text-muted">A Design Prize is the highest prize awarded in design industry with a specific aim of promoting, advertising and acknowledging good design worldwide. The A Design Prize includes public relations and publicity services in addition to the award trophy, certificate, yearbook and of course the winner logo which laureates could use to differentiate and add further value their award-winning products, projects and services.</p>
                          <a href="#" class="btn btn-sm btn-primary">Expand your Reach</a>
                        </div>
                      </section>

                      <section class="card text-center award py-5 border-0">
                        <div class="card-body">
                          <h5 class="card-title h2 textcolor">News</h5>
                          <p class="card-text fs-sm text-muted">Results will be Announced to public on April 15,2024. Visit our winners' page on April 15, 2024 to see the worlds' leading designs, ideas, trends and concepts in 2024.</p>
                          <a href="#" class="btn btn-sm btn-primary">Expand your Reach</a>
                        </div>
                      </section>

                      <section class="card text-center award py-5 border-0">
                        <div class="card-body">
                          <h5 class="card-title h2 textcolor">Registrations Open</h5>
                          <p class="card-text fs-sm text-muted">Registration to A Design Award & Competition 2023-2024 period is now open. Register and upload your design today to know how good your design is get a complimentary preliminary score.</p>
                          <a href="#" class="btn btn-sm btn-primary">Expand your Reach</a>
                        </div>
                      </section>
                </div>
              @elseif($currentTab === 'tab1')

              <style>
                .btn-gradient-border {
                  position: relative;
                  background-color: transparent;
                  color: white;
                  border: 2px solid transparent;
                  border-radius: 5px;
                  padding: 10px 20px;
                  font-weight: bold;
                  text-transform: all 0.4s ease-in-out;
                }

                .btn-gradient-border::before{
                  content: "";
                  position: absolute;
                  inset: 0;
                  padding: 2px;
                  /* background: linear-gradient(90deg, #ff7e5f, #feb47b); */
                  background: linear-gradient(90deg, #0c1e0e, #153b1e);
                  border-radius: 5px;
                  -webkit-mask: linear-gradient(white 0 0) content-box, linear-gradient(white 0 0);
                  mask: linear-gradient(white 0 0) content-box, linear-gradient(white 0 0);
                  -webkit-mask-composite: destination-out;
                  mask-composite: exclude;
                }

                .btn-gradient-border:hover{
                  /* background: linear-gradient(90deg, #ff7e5f, #feb47b); */
                  background: linear-gradient(90deg, #0c1e0e, #153b1e);
                  color: white;
                }
               
                .subscribe-btn{
                  padding: 10px 20px;
                  border-radius: 30px;
                  border: 2px solid transparent;
                  background-image: linear-gradient(white white), linear-gradient(to right, #6a11cb #2575fc);
                  background-origin: border-box;
                  background-clip: content-box, border-box;
                  color: #2575fc;
                  font-weight: bold;
                  text-transform: uppercase;
                  font-size: 14px;
                  transition: all 0.3s ease-in-out;               
                }

                .subscribe-btn:hover {
                  background-image: linear-gradient(to right, #6a11cb, #2575fc);
                  color: white;
                  border: 2px solid transparent;
                }

              </style>

              <style>

                .card-custom{
                  background: linear-gradient(to right, #0c1e0e, #153b1e);
                  color: white;
                  padding: 20px;
                  border-radius: 10px;
                  max-width: 400px;
                  text-align: left;  
                }

                .btn-custom{
                background-color: #00ff4c;
                color: black;
                font-weight: bold;
                padding: 12px 20px;
                border-radius: 5px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                text-decoration: none;
                }

                .btn-custom span {
                background: black;
                color: white;
                padding: 4px 10px;
                border-radius: 5px;
                font-size: 14px;
                margin-left: 10px;
                }

                .category-container{
                  max-width: 800px;
                  text-align: center;
                }

                .category-box {
                  background: linear-gradient(to right, #0c1e0e, #153b1e);
                  color: white;
                  padding: 20px;
                  border-radius: 10px;
                  text-align: center;
                  font-weight: bold;
                  font-size: 16px;
                  box-shadow: 0px 4px 10px rgba(0,255, 76, 0.2);
                  transition: transform 0.3s ease-in-out;
                }

                .category-box:hover{
                transform:scale(1.05);
                }

                /* Artist & venue */

                .section-title {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 15px;
                }

                .section-title h5 {
                font-weight: bold;
                margin: 0;
                }

                .view-all-btn{
                border: 1px solid #ccc;
                border-radius: 20px;
                padding: 5px 15px;
                font-size: 14px;
                background: white;
                }

                .artist-list{
                display: flex;
                overflow-x: auto;
                padding: 10px;
                gap: 15px;
                }

                .artist-card{
                  text-align: center;
                  flex: 0 0 auto;
                  width: 90px;
                }

                .artist-card img {
                width: 70px;
                height: 70px;
                object-fit: cover;
                border-radius: 50%;
                border: 3px solid white;
                }

                .venues-list{
                display: flex;
                overflow-x: auto;
                padding: 10px;
                gap: 15px;
                }

                .venue-card{
                flex: 0 0 auto;
                width: 120px;
                border-radius: 10px;
                background: linear-gradient(to right, #0c1e0e,#153b1e);
                color: white;
                padding: 10px;
                text-align: center;
                box-shadow: 0px 4px 10px rgba(0, 255, 76, 0.2);
                }

                .venue-card img{
                width: 100%;
                height: 80px;
                object-fit: cover;
                border-radius: 8px;
                }

                .venue-card p {
                margin: 5px 0;
                font-size: 14px;
                }

                .artist-list, .venues-list {
                  display: flex;
                  overflow-x: auto;
                  padding: 10px;
                  gap: 15px;
                  scrollbar-width: none;
                  -ms-overflow-style: none;
                }

                .artist-list::-webkit-scrollbar, .venues-list::-webkit-scrollbar {
                  display: none;
                }

              </style>

                <!-- timeline -->
                <section class="card text-center py-5 award rounded-0">
                  <div class="card-body">
                    <h5 class="card-title h2 textcolor">Timeline</h5>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                      <div class="text-center">
                        <p class="card-text fs-lg fw-light textcolor">Feb 29<sup>th</sup></p>
                        <p class="fs-9 text-muted">Open for Submissions</p>
                      </div>
                      <div class="text-center">
                        <p class="card-text fs-lg fw-light textcolor">June 30<sup>th</sup></p>
                          <p class="fs-9 text-muted">Submission Deadline</p>
                      </div>
                      <div class="text-center">
                        <p class="card-text fs-lg fw-light textcolor">August 30<sup>th</sup></p>
                        <p class="fs-9 text-muted">Winner Announcement</p>
                      </div>
                    </div>
                  <!-- <a href="#" class="btn btn-sm btn-primary mt-4">Subscribe</a> -->
                  <a href="#" class="btn btn-gradient-border mt-4">Subscribe</a>
                 
                  </div>

                  <div class="mt-5">
                    <div class="card-custom">
                    <p>Get access to channels and languages' advanced viewership statistics in 
                      <strong style="color: #00ff4c;">Esports Charts Event Dashboard</strong></p>

                    <a href="" class="btn-custom">Dive into stats <span>from $100</span></a>
                    </div>
                  </div>   
                  
                </section>

                <section class="award mb-5">
                  <div class="mt-4">
                    
                  <!-- artist Section -->
                    <div class="section-title">
                      <h5>ARTISTS</h5>
                      <button class="view-all-btn">View all</button>
                    </div>

                    <div class="artist-list">
                    @foreach ($network as $franchise)
                      <div class="artist-card">
                        <img src="{{url('public/speaker/'.$franchise->image)}}" alt="Artist 1">
                        <p>{{$franchise->name}}</p>
                      </div>
                    @endforeach

                    </div>

                    <!-- Venues Section -->
                    <div class="section-title mt-4">
                      <h5>Venues</h5>
                    </div>
                    
                    <div class="venues-list">
                      @foreach ($network as $franchise)
                        <div class="venue-card">
                          <img src="{{url('public/speaker/'.$franchise->image)}}" alt="Venue 1">
                          <p>{{$franchise->name}}</p>
                          <small>2 Events</small>
                        </div>
                      @endforeach
                      <div class="venue-card">
                        <img src="htps:via.placeholder.com/120X80" alt="Venue 1">
                        <p>The Piano Man</p>
                        <small>2 Events</small>
                      </div>

                      <div class="venue-card">
                        <img src="htps:via.placeholder.com/120X80" alt="Venue 1">
                        <p>The Piano Man</p>
                        <small>2 Events</small>
                      </div>

                      <div class="venue-card">
                        <img src="htps:via.placeholder.com/120X80" alt="Venue 1">
                        <p>The Piano Man</p>
                        <small>2 Events</small>
                      </div>

                      <div class="venue-card">
                        <img src="htps:via.placeholder.com/120X80" alt="Venue 1">
                        <p>The Piano Man</p>
                        <small>2 Events</small>
                      </div>
                      
                    </div>
                  </div>
                </section>

                <section class="container award mb-5">
                  <h1 class="text-light"> Competition Categories</h1>
                  <div class="card-group">
                      <!-- Card -->
                      <div class="card rounded-0 award">
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="Card image">
                        <div class="card-body">
                          <p class="card-text fs-sm textcolor">{{$event->eventname}} director reflects on current discussions about business property, provides background on the collection, and previews several important initiatives.</p>
                          <a href="#" class="text-primary fw-bold">Read More</a>
                        </div>
                      </div>
                  </div>

                
                      <!-- Card -->
                      <div class="card rounded-0 award">
                        <img src="https://source.unsplash.com/1600x900/?discussion, initiatives" class="card-img-top" alt="Card image">
                        <div class="card-body">
                          <p class="card-text fs-sm textcolor">{{$event->eventname}} director reflects on current discussions about business property, provides background on the collection, and previews several important initiatives.</p>
                          <a href="#" class="text-primary fw-bold">Read More</a>
                        </div>
                      </div>
                  
                      <!-- Card -->
                      <div class="card rounded-0 award">
                        <img src="https://source.unsplash.com/1600x900/?discussion, initiatives" class="card-img-top" alt="Card image">
                        <div class="card-body">
                          <p class="card-text fs-sm textcolor">{{$event->eventname}} director reflects on current discussions about business property, provides background on the collection, and previews several important initiatives.</p>
                          <a href="#" class="text-primary fw-bold">Read More</a>
                        </div>
                      </div>
                  </div>
                </section>

                <section class="container py-5">
                  <div class="card-group">
                      <!-- Card -->
                      <div class="card rounded-0 award">
                        <div class="card-body">
                          <h5 class="card-title">Reflections on {{$event->eventname}} Brand Collection and Business cultural Property Brands Opportunities.  </h5>
                          <p class="card-text fs-sm textcolor">{{$event->eventname}} director reflects on current discussions about business property, provides background on the collection, and previews several important initiatives.</p>
                          <a href="#" class="text-primary fw-bold">Read More</a>
                        </div>
                      </div>
                  </div>
                </section>

                <section class="award text-light my-5 py-5">
                  <h1 class="mt-5 textcolor text-center">Awards And Prizes</h1>
                  <div class="container">
                    <div class="row mb-3">
                      <div class="col-3"> <i class="bi bi-money"></i></div>
                      <div class="col-9"> 
                          <div class="fw-bold fs-md">Main Prize</div>
                          <span class = "text-muted fs-xs">$10,000 cash prize</span>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-3"> <i class="bi bi-money"></i></div>
                      <div class="col-9"> 
                          <div class="fw-bold fs-md">Exposure Opportunity</div>
                          <span class = "text-muted fs-xs lh-0">Winning works will be showcased on official The Exhibition Network channels & IPA Channels</span>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <div class="col-3"> <i class="bi bi-money"></i></div>
                      <div class="col-9"> 
                          <div class="fw-bold fs-md">The Exhibition Influcence Partner</div>
                          <span class = "text-muted fs-sm">The title The Exhibition Network Expert and The exhibition Network Ambassador </span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3"> <i class="bi bi-money"></i></div>
                      <div class="col-9"> 
                          <div class="fw-bold fs-md">Offline Event</div>
                          <span class = "text-light fs-sm">Chance to attend the prestige Lucie Awards Gala Ceremony</span>
                      </div>
                    </div>
                  </div>
                </section>            
                
                <!--details-->
                <div class="container d-lg-none">
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
                          @if($event->exhibitors != null) <span class="fs-xs fw-bold"> + {{$event->exhibitors}}</span> <span class="fs-xs fw-normal">Exhibitors</span>  @endif |
                            @if($event->exhibitors != null) <span class="fs-xs fw-bold">+ {{$event->auidence}}</span> <span class="fs-xs fw-normal"> Visitors </span>@endif
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
                                  <a class="btn btn-gradient-border mt-4" type="button" href="{{route('event.product',['slug' => $event->slug])}}"> Attend </a>
                                    @elseif( $ticketOrExhibit == 0 )
                                  <a class="btn btn-gradient-border mt-4" type="button" href="{{route('event.exhibit', ['board' => 'business'])}}"> Nominate </a>
                                @endif
                              @else
                                <a class="btn btn-gradient-border mt-4" type="button" href="{{route('event.exhibit', ['board' => 'business'])}}"> Nominate </a>
                            @endif
                        </span>                      
                        
                    </li>
                    <li><hr class="mt-md-2 mb-2"></li>
                    <li class="p1 fw-light">
                      {{($event->shortdesc)}} | @if($event->exhibitors != null)| + {{$event->exhibitors}} Exhibitors @endif | {{Carbon\Carbon::parse ($event->startdate)->diffInDays(Carbon\Carbon::parse ($event->enddate))}} days @if($productPrice != null)| Rs. {{$productPrice}} Onwards @endif
                    </li>
                  </ul>
                </div>

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
              @elseif($currentTab === 'tab3')
                <section class="container pt-2 pb-5 pb-md-3">
                    <!--<h2 class="h3 mb-4 pb-2">Top Creators</h2>-->
                    <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-1 mb-1">  
                      <div class="fs-sm" >Business Community
                      
                          <h4 class="mb-0 me-2">Speaker</h4>
                          
                      </div>
                        <!--<div class="pt-3">
                          <a class="btn btn-outline-primary btn-sm" href="#listexpo"> 
                            Connect <i class="bi bi-caret-down-fill ms-1 me-n1"></i></a>
                        </div>-->

                          <div class="pt-3">
                            <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              All
                            </a>

                            <ul class="dropdown-menu" width="auto">
                            <li><a class="dropdown-item" href="#">More</a></li>
                              <li><a class="dropdown-item" href="#">Speaker</a></li>
                              <li><a class="dropdown-item" href="#">Subscribe</a></li>
                            </ul>
                          </div>
                    </div>

                      <div class="row my-Slider23">

                        <!-- Bestsellers-->
                        <div class="col-md-4 col-sm-6 mb-2 py-1">
                          <div class="widget">
                            <!--<h3 class="widget-title fw-bolder">Network</h3>-->
                          
                            @foreach ($network as $franchise)
                              <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                                <div class="d-flex align-items-center position-relative">
                                  
                                  <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}"  width="17%"  alt="Avatar">
                                  <div class="ms-2">
                                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="#">{{$franchise->name}}</a></h4>
                                    <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="#">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                                  <!--<span class="fs-xs text-muted">730 followers</span>-->
                                  </div>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary ms-2">Vote</button>
                              </div>
                            @endforeach
                          </div>
                        </div>

                        <!-- New arrivals-->
                        <div class="col-md-4 col-sm-6 mb-2 py-3">
                          <div class="widget">
                            <!--<h3 class="widget-title fw-bolder">Speaker</h3>-->
                            @foreach ($speker as $franchise)
                              <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                                <div class="d-flex align-items-center position-relative">
                                  
                                  <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}" width="17%"  alt="Avatar">
                                  <div class="ms-2">
                                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="#">{{$franchise->name}}</a></h4>
                                    <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="#">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                                    <!--<span class="fs-xs text-muted">730 followers</span>-->
                                  </div>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary ms-2">Vote</button>
                              </div>
                              
                            @endforeach
                          </div>
                        </div>

                        <!-- Top rated-->
                        <div class="col-md-4 col-sm-6 mb-2 py-3">
                          <div class="widget">
                            <!--<h3 class="widget-title fw-bolder">Social</h3>-->
                            @foreach ($social as $franchise)
                              <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                                <div class="d-flex align-items-center position-relative">
                                  
                                  <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}" width="17%"  alt="Avatar">
                                  <div class="ms-2">
                                    <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->name}}</a></h4>
                                    <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="nft-vendor.html">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                                    <!--<span class="fs-xs text-muted">730 followers</span>-->
                                  </div>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary ms-2">Vote</button>
                              </div>
                              
                            @endforeach
                          </div>
                        </div>

                      </div>
                </section>

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
              @endif
            </div>
          </section>

        <style>

            .img-fluid {
              border-radius: 8px;
              box-shadow: 0 4px 8px rgba(0,0, 0, 0.2);
              margin-bottom: 15px;
            }

            .img-container{
              text-align: center;
              margin-bottom: 15px;
            }

            .img-container img{
              border-radius: 8px;
              box-shadow: 0 4px 8px rgba(0,0, 0, 0.2);
              max-width: 100%;
              height: auto;
            }

            .text-container{
              text-align: center;
              margin-top: 10px;
            }

            .name .designation {
              color:#fff;
            }

            @media(min-width:768px){
              .text-container{
                text-align: left;
                margin-top: 10px;
              }
            }
        </style>

        <div class="">
          <div class="container">
            <div class="row">
              <div class="col-6 img-container">
                <img src="https://picsum.photos/200/300" alt="Image 1">
                <div class="text-container">
                  <div class="name"> Jane Smith</div>
                  <div class="designation">Product Manager</div>
                </div>
              </div>

              <div class="col-6 img-container">
                <img src="https://picsum.photos/200/301" alt="image 2">
                <div class="text-container">
                  <div class="name"> Jane Smith</div>
                  <div class="designation">Product Manager</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        

        <!-- HSBC-CreditCard -->

        <style>
          .modal-content {
            border-radius: 10px;
          }
          
          .modal-header {
            background-color: #fff;
            border-bottom: none;
            display: flex;
            align-items: center;
          } 

          .modal-header img{
            width: 40px;
            margin-right: 10px;
          }

          .modal-title {
            font-size: 18px;
            font-weight: bold;
          }

          /* .benefit-card {
            border: 2px solid #d4d4d4;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 15px;
          } */

          /* .benefit-card i {
            font-size: 25px;
            color: red;
            display: block;
            margin-bottom: 10px;
          } */

          .benefit-box {
            border: 2px solid #d4d4d4;
            border-radius: 10px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
          }

          .benefit-box i {
            font-size: 24px;
            color: red;
          }

          .benefit-text {
            font-size: 14px;
            font-weight: 500;
          }
          
          .apply-btn {
            background-color: #d71920;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
          }
        </style>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hsbcModal"> 
          Open HSBC Live+ Offer
        </button>


        <div class="modal fade" id="hsbcModal" tabindex="-1" aria-labelledby="hsbcModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <img src="" alt="">
                <h5 class="modal-title">Save More with HSBC Live+ Credit Card!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h6 class="text-dark fw-bold">Benefits of HSBC Live+</h6>


                <div class="row">
                  <div class="col-6">
                    <div class="benefit-box">
                      <i class="bi bi-basket-fill"></i>
                      <p class="benefit-text">10% cashback on food & 15% off at 200+ restaurants in Asia*</p>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="benefit-box">
                      <i class="bi bi-basket-fill"></i>
                      <p class="benefit-text">Buy One, Get One movie tickets on BookMyShow*</p>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="benefit-box">
                      <i class="bi bi-basket-fill"></i>
                      <p class="benefit-text">Earn 1.5% cashback on most spends*</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="benefit-box">
                      <i class="bi bi-basket-fill"></i>
                      <p class="benefit-text">Enjoy complimentary domestic airport lounge access*</p>
                    </div>
                  </div>
                </div>
                <h6 class="fw-bold mt-3">Eligibility Criteria</h6>
                <button class="apply-btn">Apply Now</button>
              </div>
            </div>
          </div>
        </div>
        <!-- end-HSBC-CreditCard -->


            <!--participants-->  
            <section class="container py-4 py-md-5 my-2 d-none d-sm-block">
              <div class="row text-center text-sm-start">
                <div class="col-lg-3 col-md-4 col-sm-4 bg-secondary">
                  <span class="badge bg-primary mt-3">Participate</span>
                    <h5 class="mb-3">Nominate</h5>
                    <div class="row">
                      <div>
                        <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                          <li>Bespoke B2B forums that connect you with the people you really want to meet. </li>
                          <li>Our business partnered space events include participation in live Q&A and polls, plus access to the community where you can network with other attendees.</li>
                          {{-- <li><a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'award' ])}}" class="btn btn-outline-primary btn-sm bg-light">Nominate a Speaker</a></li> --}}
                        </ul>
                      </div>
                        <div>
                          <h5 class="mb-3">Business Directory</h5>
                          <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                            <li>List business directory to educate with your business potential</li>
                            {{-- <li> <a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'directory' ])}}" class="btn btn-sm btn-primary">Expand your business</a> </li> --}}
                          </ul>
                        </div>
                    </div>
                    <h5 class="mb-3">Attend a Space event</h5>
                    
                    <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                      <li>Attend a Space event near you featuring live speakers and Talk business owners, sparking conversation and connections.</li>
                      {{-- <li><a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'find' ])}}" class="btn btn-outline-primary btn-sm bg-light">Find an event near you</a></li> --}}
                      
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
                              
                                {{-- <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary text-light">Learn more</a> --}}
                              </div>
                            </div>
                          @endforeach
                        </div>
                        
                        <div class="row">
                          <!-- Card -->
                          <div class=" col-4 card border-0 px-0 hover-overlay shadow-1-strong">
                            <img src="image/banner-sm01.png" class="card-img-top" alt="Card image">
                            <div class="mask text-light">
                              <h5 class="card-title">Special Pavillions</h5>
                              <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              {{-- <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a> --}}
                            </div>
                          </div>

                          <!-- Card -->
                          <div class="col-4 card border-0 px-0">
                            <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                            <div class="card-body">
                              <h5 class="card-title">Country Pavillions</h5>
                              <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                              {{-- <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a> --}}
                            </div>
                          </div>

                          <!-- Card -->
                          <div class="col-4 card border-0 px-0">
                            <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                            <div class="card-body">
                              <h5 class="card-title">Partner Pavillions</h5>
                              <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                              {{-- <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a> --}}
                            </div>
                          </div>
                    
                      

                          <!-- Card -->
                          <div class="col-4 card border-0 px-0">
                            <img src="image/banner-sm01.png" class="card-img-top" alt="Card image">
                            <div class="card-body">
                              <h5 class="card-title">Organisations Pavillions</h5>
                              <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              {{-- <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a> --}}
                            </div>
                          </div>

                          <!-- Card -->
                          <div class="col-4 card border-0 px-0">
                            <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                            <div class="card-body">
                              <h5 class="card-title">Country Pavillions</h5>
                              <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                              {{-- <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a> --}}
                            </div>
                          </div>

                          <!-- Card -->
                          <div class="col-4 card border-0 px-0">
                            <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                            <div class="card-body">
                              <h5 class="card-title">Partner Pavillions</h5>
                              <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                              {{-- <a href="{{route('lead.business', ['slug' => $event->slug])}}" class="text-primary">Learn more</a> --}}
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
                          <span>
                            
                          {{-- <a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'startup' ])}}" class="btn btn-outline-primary btn-sm bg-light"> BOOK NOW</a></span></li> --}}
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
                    <li></li>
                      {{-- <a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'meet' ])}}" class="btn btn-outline-primary btn-sm bg-light">BOOK NOW</a></li> --}}
                  </ul>
                  <h5 class="mb-3">Partner with Space</h5>
                  <ul class="list-unstyled fs-sm mb-3 mb-lg-4 pb-1">
                    <li class="m-3 fs-sm fw-light">When you support the Space program, you enable our efforts to empower and grow the global Space community of volunteers.</li>
                    <li>
                      
                    {{-- <a href="{{route('lead.business.other',['slug' => $event->slug, 'type'=> 'partner' ])}}" class="btn btn-outline-primary btn-sm bg-light">Partner with Space</a></li> --}}
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

            <!-- Product description + Reviews + Comments-->
            <section class="container mb-4 mb-lg-5">
              <div class="tab-content pt-2">

                {{-- Product details tab
                <div class="tab-pane fade show active" id="details" role="tabpanel">
                  <div class="row">
                    <div class="col-lg-8">
                    
                      
                      <p class="fs-md"> {{Str::limit($event->desc,289)}}...</p>

                      <h3 class="h5 pt-2">Main features</h3>
                      <ul class="fs-md">
                        <li>Nemo enim ipsam voluptatem quia voluptas sit</li>
                        <li>Ut enim ad minima veniam, quis nostrum exercitationem</li>
                        <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                        <li>At vero eos et accusamus et iusto odio dignissimos</li>
                        <li>Omnis voluptas assumenda est omnis dolor</li>
                        <li>Quis autem vel eum iure reprehenderit qui in ea voluptate</li>
                      </ul>
                    </div>
                  </div>

            

                </div>--}}

                <!-- Reviews tab-->
                <div class="tab-pane fade" id="reviews" role="tabpanel">
                  <!-- Reviews-->
                  <div class="row pt-2 pb-3">
                    <div class="col-lg-4 col-md-5">

                      <h3 class="h4 mb-4">74 Reviews</h3>
                      <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star fs-sm text-muted me-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
                      <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
                    </div>
                  {{-- <div class="col-lg-8 col-md-7">
                          <div class="d-flex align-items-center mb-2">
                            <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                            <div class="w-100">
                              <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div><span class="text-muted ms-3">43</span>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                            <div class="w-100">
                              <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div><span class="text-muted ms-3">16</span>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                            <div class="w-100">
                              <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div><span class="text-muted ms-3">9</span>
                          </div>
                          <div class="d-flex align-items-center mb-2">
                            <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                            <div class="w-100">
                              <div class="progress" style="height: 4px;">
                                <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div><span class="text-muted ms-3">4</span>
                          </div>
                          <div class="d-flex align-items-center">
                            <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                            <div class="w-100">
                              <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div><span class="text-muted ms-3">2</span>
                          </div>
                    </div>--}}
                  </div>
                  <hr class="mt-4 mb-3">
                  <div class="row py-4">
                    <!-- Reviews list-->
                    <div class="col-md-7">
                      <div class="d-flex justify-content-end pb-4">
                        <div class="d-flex align-items-center flex-nowrap">
                          <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                          <select class="form-select form-select-sm" id="sort-reviews">
                            <option>Newest</option>
                            <option>Oldest</option>
                            <option>Popular</option>
                            <option>High rating</option>
                            <option>Low rating</option>
                          </select>
                        </div>
                      </div>
                      <!-- Review-->
                      <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                          <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="#" width="50" alt="Rafael Marquez">
                            <div class="ps-3">
                              <h6 class="fs-sm mb-0">Rafael Marquez</h6><span class="fs-ms text-muted">June 28, 2019</span>
                            </div>
                          </div>
                          <div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                            <div class="fs-ms text-muted">83% of users found this review helpful</div>
                          </div>
                        </div>
                        <p class="fs-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                        <ul class="list-unstyled fs-ms pt-1">
                          <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                          <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                        </ul>
                        <div class="text-nowrap">
                          <button class="btn-like" type="button">15</button>
                          <button class="btn-dislike" type="button">3</button>
                        </div>
                      </div>
                      <!-- Review-->
                      <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                          <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="#" width="50" alt="Barbara Palson">
                            <div class="ps-3">
                              <h6 class="fs-sm mb-0">Barbara Palson</h6><span class="fs-ms text-muted">May 17, 2019</span>
                            </div>
                          </div>
                          <div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                            </div>
                            <div class="fs-ms text-muted">99% of users found this review helpful</div>
                          </div>
                        </div>
                        <p class="fs-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="list-unstyled fs-ms pt-1">
                          <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                          <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                        </ul>
                        <div class="text-nowrap">
                          <button class="btn-like" type="button">34</button>
                          <button class="btn-dislike" type="button">1</button>
                        </div>
                      </div>
                      <!-- Review-->
                      <div class="product-review pb-4 mb-4 border-bottom">
                        <div class="d-flex mb-3">
                          <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="#" width="50" alt="Daniel Adams">
                            <div class="ps-3">
                              <h6 class="fs-sm mb-0">Daniel Adams</h6><span class="fs-ms text-muted">May 8, 2019</span>
                            </div>
                          </div>
                          <div>
                            <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                            </div>
                            <div class="fs-ms text-muted">75% of users found this review helpful</div>
                          </div>
                        </div>
                        <p class="fs-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                        <ul class="list-unstyled fs-ms pt-1">
                          <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi</li>
                          <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae,  quis autem, voluptatem sequ</li>
                        </ul>
                        <div class="text-nowrap">
                          <button class="btn-like" type="button">26</button>
                          <button class="btn-dislike" type="button">9</button>
                        </div>
                      </div>
                      <div class="text-center">
                        <button class="btn btn-outline-accent" type="button"><i class="ci-reload me-2"></i>Load more reviews</button>
                      </div>
                    </div>
                    <!-- Leave review form-->
                    
                  </div>
                </div>

                <!-- Comments tab-->
                  <div class="tab-pane show" id="comments" role="tabpanel">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                              <h6 class="fs-md mb-0">Top reviews</h6>
                              <a class="nav-link-style fs-xs fw-normal text-primary" href="#"> 203K
                              reviews<i class="bi bi-chevron-right me-2"></i></a>
                        </div>
        
                        <div class="fs-xs fw-normal">Summary of 203K reviews.</div> 
                        <div class="d-flex  badgses">
                        
                                <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2911</span></div>
                                <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2912</span></div>
                                <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2913</span></div>
                        
                        </div>

                      <div class="d-flex abced gx-2">
                      
                      @foreach($commentedRates  as $comment)
                        <div class=" border-1 d-flex align-items-end py-2 mx-2 border-bottom rounded shadow-sm">
                          <img class="rounded-circle" src="#" width="50" alt="">
        
                          <div class="ps-0">
                            <div class="d-flex justify-content-between align-items-end mb-2">
                              <p class="fs-md mb-0">{{$comment->hasttag}}</p>
                              <a class="nav-link-style fs-sm fw-medium" href="#">
                                <i class="bi bi-star me-2"></i>{{$comment->rate}}/10</a>
                            </div>

                            <h4 class="fs-md mb-3">{{$comment->opinion}}</h4>
                            
                            <div class="d-flex justify-content-between align-items-center">
                              <span class="fs-ms text-muted">9 <i class=" bi bi-hand-thumbs-up align-middle me-2"></i>12 <i class=" bi bi-hand-thumbs-down align-middle me-2"></i></span>
                              <span class="fs-ms text-muted">{{Carbon\Carbon::parse ($comment->updated_at)->format('Y-m-d')}}<i class=" bi bi-share align-middle me-2"></i></span>
                            </div>
                          </div>
                        </div>
                      @endforeach
                      </div>

                      </div>
                    </div>
                  </div>
              </div>
            </section>

            <div class="container text-center">
              <small class="text-primary fs-sm fw-normal">Right Place, Right Time, Right People</small>
              <h1 class="text-center fw-bold display-3 lh-1">Market Leaders Rely on Great Place To Business</h1>

            </div> 

            <!-- copy Card group sec_last-->
            <section class="container py-5">
              <!-- Card group -->
              <div class="card-group">

                  <!-- Card -->
                  <div class="card rounded-0 award">
                    <img src="https://source.unsplash.com/1600x900/?discussion, initiatives" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Reflections on {{$event->eventname}} Brand Collection and Business cultural Property Brands Opportunities.  </h5>
                      <p class="card-text fs-sm text-muted">{{$event->eventname}} director reflects on current discussions about business property, provides background on the collection, and previews several important initiatives.</p>
                      <a href="#" class="text-primary fw-bold">Read More</a>
                    </div>
                  </div>

                  

                  <!-- Card -->
                  <div class="card rounded-0 award">
                    <img src="https://source.unsplash.com/1600x900/?brand, studio" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Backdoor brand Studio</h5>
                      <p class="card-text fs-sm text-muted">The Exhibition Network families, join us Saturday, to celebrate the opening of our new drop-in discovery and play space for new start business ideas. </p>
                      <a href="#" class="text-primary fw-bold">Learn more</a>
                    </div>
                  </div>

                   <!-- Card -->
                   <div class="card rounded-0 award">
                    <img src="https://source.unsplash.com/1600x900/?visit, exhibition" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Plan to {{$event->eventname}}</h5>
                      <p class="card-text fs-sm text-muted">Through {{Carbon\Carbon::parse ($event->startdate)->format('M d ')}}, visit to the {{$event->eventname}} enjoy service on the {{ucwords(trans($event->venue))}}, {{ucwords(trans($event->city))}}, {{ucwords(trans($event->country))}}. </p>
                      <a href="#" class="text-primary fw-bold">Plan your visit</a>
                    </div>
                  </div>


                   <!-- Card -->
                   <div class="card rounded-0 award">
                    <img src="https://source.unsplash.com/1600x900/?Membership, benefits" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Membership at The Exhibition Network</h5>
                      <p class="card-text fs-sm text-muted">The Network Members enjoy a rich variety of specialized benefits- from free guest passes to Member Preview Days for new exhibitons -all while supporting our mission.</p>
                      <a href="#" class="text-primary fw-bold">See the benefits</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card rounded-0 award">
                    <img src="https://source.unsplash.com/1600x900/?Switzerland, office" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">New at {{$event->eventname}}</h5>
                      <p class="card-text fs-sm text-muted">Discover our newest business-inspired business designs, including publishing the brand, Search new opportunities, assess your business and many more..</p>
                      <a href="#" class="text-primary  fs-sm fw-bold">Go somewhere</a>
                    </div>
                  </div>
              </div>
            </section>
            
            
            <section class="card text-center py-5 rounded-0 award">
              <div class="card-body">
                <h5 class="card-title h2">Buy your Expo 2023 Tickets Now </h5>
                <p class="card-text fs-sm text-muted">Connect with The Exhibtion Network: Exhibtion Magazine - Where You Meet the Right People at the Right Time and Right Place.</p>
                <a href="#" class="btn btn-sm btn-primary">Expand your Reach</a>
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

           


            <!--footer-->
            @if($event->eventype == 'award')
              <div class="handheld-toolbar bg-secondary">
                <div class="d-flex justify-content-between py-2 px-2">
                  <div class="text-dark  pl-3 lh-1">  <span class = "fw-medium fs-sm">Rs.{{$productPrice}}</span><br><span class=" fw-normal fs-xs">Onwards</span></div>
                    @if( $event->businessrevenue == 'visitor' )  
                      @if( $ticketOrExhibit != 0 )
                          <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Nominate</a>
                        @elseif( $ticketOrExhibit == 0 )
                          {{--<a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Nominate</a>{{route('event.product',['slug' => $event->slug])}}--}}
                        
                          <a href="#" class="btn btn-primary btn-sm"  wire:click.prevent="insertEventToSess({{$event->id}})">Nominate</a>
                      @endif
                    @else
                    <a href="{{route('event.exhibit', ['board' => 'business'])}}" class="btn btn-primary btn-sm">Nominate</a>
                    @endif
                </div>
              </div>
            @elseif($event->eventype == 'conference')
              <div class="handheld-toolbar bg-secondary">
                <div class="d-flex justify-content-between py-2 px-2">
                <div class="text-dark  pl-3 lh-1">  <span class = "fw-medium fs-sm">Rs.{{$productPrice}}</span><br><span class=" fw-normal fs-xs">Onwards</span></div>
                  @if( $event->businessrevenue == 'visitor' )  
                    @if( $ticketOrExhibit != 0 )
                        <a href="#"  wire:click.prevent="insertEventToSess({{$event->id}})" class="btn btn-primary btn-sm">Attend</a>
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

          <script>
            var slider = tns({
              "container": '.my-Slider23',            
              "responsive": {
                "300": {
                  "items": 1,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,

                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                },
                "500": {
                  "items": 3,
                  "nav": false,
                  "controls": false,
                  "autoplayHoverPause": true,
                  "autoplay":false,
                  "autoplayButtonOutput":false
                },
                
              },
              "autoplayButtonOutput":false
            });
          </script>
        
    @endpush

</main>