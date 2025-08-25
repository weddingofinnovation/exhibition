<main>
@section('page_title', 'Great Exhibition to Exhibit')
@section('page_description', 'Great Exhibtion To Exhibit, plan with rank and rating review your upcoming trade show, conference, awards  and get subsidies space to find right people at right time at right place')
@section('page_keyword',  'Exhibition Navigator, The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

<style>
        .event-row {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 8px 0;
          color: #fff;
          font-family: sans-serif;
      }

      .event-details {
          display: flex;
          align-items: center;
          gap: 8px;
      }

      .event-logo {
          width: 24px;
          height: 24px;
          object-fit: contain;
      }

      .event-title {
          font-weight: bold;
          font-size: 14px;
      }

      .event-date {
          font-size: 12px;
          color: #aaa;
      }

      .event-stats {
          display: flex;
          flex-direction: column;
          align-items: flex-end;
      }

      .event-viewers {
          font-size: 12px;
          font-weight: bold;
          color: #f27da0; /* pink like in image */
      }

      .progress-line {
          width: 40px;
          height: 2px;
          background-color: rgba(255, 255, 255, 0.2); /* faded base line */
          margin-top: 2px;
          position: relative;
      }

      .progress-fill {
          height: 100%;
          background-color: #f27da0; /* progress color */
      }


        .fs-xxs {
        font-size: 0.65rem; /* adjust as needed */
        }

        .fs-xss {
          font-size: 0.75rem; /* adjust as needed */
          }

      .match-card {
        display: flex;
        align-items: stretch;
        height: 60px;
        overflow: hidden;
        border-radius: 6px;
        background: #222;
      }

      /* LIVE strip */
      .live-strip {
        background: linear-gradient(to bottom, #ff2b2b, #a50000);
        color: #fff;
        font-weight: bold;
        writing-mode: vertical-rl;
        transform: rotate(180deg); /* Makes text bottom-to-top */
        text-align: center;
        font-size: 12px;
        padding: 5px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        /* width: 24px; */
      }

      /* Middle info section */
      .match-info {
        flex: 1;
        padding: 8px 12px;
        background: linear-gradient(to right, rgba(255, 43, 43, 0.3), transparent);
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .match-info .title {
        font-size: 14px;
        font-weight: bold;
        color: #fff;
      }
      .match-info .subtitle {
        font-size: 12px;
        color: #bbb;
      }

      /* Arrow section */
      .arrow-btn {
        width: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: transparent;
        color: #fff;
        font-size: 18px;
      }

</style>

    <div class="container-fluid py-5 text-center" style="background: linear-gradient(to bottom, #000000, #005baa);">
      <div class="container">
        <h2 class="fw-bold text-white">Everything about the Events popularity</h2>
        <p class="text-white-50 mb-5">
          Great Exhibition To Exhibit Charts makes events transparent and helps sponsors, organizers, and viewers discover 
          the popularity level of any event.
        </p>

        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
          
          <!-- Esports Charts -->
          <div class="d-flex align-items-center bg-dark rounded-pill px-3 py-2 text-white">
            <img src="icon1.png" alt="Esports" class="me-2" width="24">
            <span class="">Great Exhibition To Exhibit</span>

            
          </div>

          <span class="text-white fs-4">=</span>

          <!-- Streaming Data -->
          <div class="d-flex align-items-center bg-dark rounded-pill px-3 py-2 text-white">
            <img src="icon2.png" alt="Streaming" class="me-2" width="24">
          

            <div class="d-flex flex-column lh-1">
              <small class="fw-light">Streaming</small>
              <span class="fs-sm fw-bold">DATA</span>
            </div>
          </div>

          <span class="text-white fs-4">+</span>

          <!-- Event Schedule -->
          <div class="d-flex align-items-center bg-dark rounded-pill px-3 py-2 text-white">
            <img src="icon3.png" alt="Events" class="me-2" width="24">
            <div class="d-flex flex-column lh-1">
              <small class="fw-light">Events</small>
              <span class="fs-sm fw-bold">SCHEDULE</span>
            </div>
          </div>

          <span class="text-white fs-4">+</span>

          <!-- Analytics -->
        


          <div class="d-flex align-items-center bg-dark rounded-pill px-3 py-2 text-white">
            <img src="icon4.png" alt="Analytics" class="me-2" width="24">
            <div class="d-flex flex-column lh-1">
              <small class="fw-light">Up-to-date</small>
              <span class="fs-sm fw-bold">ANALYTICS</span>
            </div>
          </div>


        </div>
      </div>
    </div>


    <div class="container-fluid text-white py-4" style="background-color: #000000;">
      <div class="row text-center border-bottom border-secondary pb-3 mb-4">
         <div class="col border-end">
          <small>Our database include:</small>
        </div>

        <div class="col border-end">
          <div class="fw-bold fs-lg">74 918</div>
          <div class="fs-xxs">TOURNAMENTS & EVENTS</div>
        </div>
        <div class="col border-end">
          <div class="fw-bold fs-lg">320 466</div>
          <div class="fs-xxs">MATCHES</div>
        </div>
        <div class="col border-end">
          <div class="fw-bold fs-lg">51 293</div>
          <div class="fs-xxs">TEAMS</div>
        </div>
        <div class="col border-end">
          <div class="fw-bold fs-lg">80 248</div>
          <div class="fs-xxs">PLAYERS</div>
        </div>
        <div class="col border-end">
          <div class="fw-bold fs-lg">152</div>
          <div class="fs-xxs">GAMES</div>
        </div>
      </div>

      <div class="row g-3">
        <!-- Recent tournaments -->
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="fw-bold">Recent Viewers</span>
            <button class="btn btn-secondary btn-sm">More</button>
          </div>

          @foreach( $descRankingViews as $franchise)
              @if($franchise->updated_at->format("Y-m-d") == $mytime)
                    <div class="p-3 rounded d-flex justify-content-between align-items-center" style="background-color: {{ $loop->odd ? '#373f5059' : '#373f5030' }};">
                      <!-- Left content -->
                       <div class="d-flex align-items-center">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="Icon" class="me-2" style="width: 32px; height: 32px;">
                          <div>
                            <div class="small fw-bold">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</div>
                            <div class="text-muted small">PUBG, PUBG Players Tour, KRAFTON</div>
                          </div>
                      </div>
                      
                      <!-- Right content (date) -->
                      <div class="small text-end">
                        <!-- 09.08.25 - 11.08.25 -->

                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                        @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M Y')}}
                        @endif
                      </div>
                    </div>
              @else
                      <div class="p-3 bg-dark rounded d-flex justify-content-between align-items-center">
                          <!-- Left content -->
                          <div>
                            <div class="small fw-bold">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</div>
                            <div class="text-muted small">PUBG, PUBG Players Tour, KRAFTON</div>
                          </div>
                          
                          <!-- Right content (date) -->
                          <div class="small text-end">
                            <!-- 09.08.25 - 11.08.25 -->

                            @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                              {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                            @else
                              {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                            @endif
                          </div>
                      </div>
              @endif
          @endforeach

        </div>

        <!-- Upcoming tournaments -->
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="fw-bold">Upcoming MSME Events</span>
            <button class="btn btn-secondary btn-sm">More</button>
          </div>
                  @php
                    $findmsme = DB::table('associations')
                            ->where('reference_id', 1)
                            ->pluck('event_id'); // just association IDs

                        $events = DB::table('events')
                            ->whereIn('id', $findmsme)
                            ->get();
                  @endphp

                  @foreach($events as $franchise)

                    <div class="p-3 rounded" style="background-color: {{ $loop->odd ? '#373f5059' : '#373f5030' }};">

                      <div class="fw-bold">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</div>
                      <div class="text-muted small">RL</div>
                      <div class="small mt-1">
                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @endif
                      </div>
                    </div>

                  @endforeach
        </div>

        <!-- Live matches -->
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="fw-bold">Ongoing Events</span>
          </div>

          <!-- latest -->
           <div class="match-card">
            <!-- LIVE Strip -->
            <div class="live-strip">
              <span>LIVE</span>
            </div>

            <!-- Middle Gradient Info -->
            <div class="match-info">
              <div class="title">PUBG Players Cup Americas #11</div>
              <div class="subtitle">PUBG, PUBG Players Tour, KRAFTON</div>
            </div>

            <!-- Arrow -->
            <div class="arrow-btn">➜</div>
          </div>


          
          @foreach($evento as $franchise)
            <div class="event-row">
                <div class="event-details">
                    <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="Logo" class="event-logo">
                    <div>
                        <div class="event-title">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</div>
                        <div class="event-date">@if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @endif</div>
                        
                    </div>
                </div>
                <div class="event-stats">
                    <div class="event-viewers">{{$franchise->view_count}}M</div>
                    <div class="progress-line">
                        <div class="progress-fill" style="width: 80%;"></div>
                    </div>
                </div>
            </div>
          @endforeach


        </div>

      </div>
    </div>


   
<!-- $findmsme = DB::table('associations')
                  ->where('reference_id', 1)
                  ->pluck('event_id'); // just association IDs

              $events = DB::table('events')
                  ->whereIn('id', $findmsme)
                  ->get(); -->



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
                      {{-- <div class="small text-muted">{{$franchise->id}}</div> --}}
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
                    <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}" class="img-fluid rounded" style="max-width: 80px; height: auto;"></a>
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
                    <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}" class="img-fluid rounded" 
                              style="height: 80px; width: auto; object-fit: contain;"></a>
                  @endif
                </div>
              </div>
            @endif
          </div>
      @endforeach
    
</main>