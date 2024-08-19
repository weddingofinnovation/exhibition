<main>
    <!--google-->
        <div class="bg-secondary d-lg-none">
          <div class=" container">
            <div class="row ">
              <div class="col-md-6 offset-md-3 d-flex justify-content-between ">

                    <div class="align-content-center py-2 ">
                    <a href="#"><i class="bi bi-chevron-left"></i></a>  
                    </div>
              
                    <div class="text-center  fs-sm py-2">
                          <div>Upcoming {{$this->venue ?? ' no venue'}}</div> 
            {{$this->city ?? ' no city'}} {{$this->country ?? ' no country'}}{{$searchVenue->count()}}
                    </div>

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
                <li class="nav-item border-bottom"><a class="nav-link px-1 active fs-sm" href="#details" data-bs-toggle="tab" role="tab">Browse</a></li>
                <li class="nav-item border-bottom"><a class="nav-link px-1 fs-sm" href="#reviews" data-bs-toggle="tab" role="tab"> Saved Events</a></li>
              </ul>

                <!-- <div class="d-flex badgese pb-2">
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
                            @if ($mytime < $franchise->startdate  && $mytime < $franchise->enddate)
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
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div>
                              @elseif ($mytime == $franchise->startdate  && $mytime < $franchise->enddate) 
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
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div>
                              @elseif ($mytime > $franchise->startdate  && $mytime < $franchise->enddate) 
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
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div>
                              @elseif ($mytime > $franchise->startdate  && $mytime == $franchise->enddate) 
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
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div> 
                              @elseif ($mytime > $franchise->startdate  && $mytime > $franchise->enddate)
                                  <!-- <div class="container">
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
                                            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                                      </div>
                                    </div>
                                  </div> -->
                            @endif
                          @endforeach
                        @endforeach

                                @foreach($searchVenue  as $franchise)
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
      </div>
  
  </main>