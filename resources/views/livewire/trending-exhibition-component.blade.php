  <main>

      <style>
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

      <!-- Trending Events -->
      <section class=" container award mb-5 d-none d-sm-block">
        <div class="mt-4">
          
        <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
          <div class="d-flex justify-content-between px-0 m-0 lh-1 ">
            <span class="fs-sm"> Upcoming<br><span class="fw-medium h5">Exhibition</span></span>
            <a  class="btn btn-outline-primary btn-sm" href="#">Submit event</a>
              <!-- <a  class="btn btn-outline-primary btn-sm dropdown-toggle" href="#">Submit event</a> -->
              <!-- <ul class="dropdown-menu" width="auto">
                    <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'expo'])}}">More</a></li>
                    <li><a class="dropdown-item" href="#">Exhibit</a></li>
                    <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>
                    <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                  </ul> -->
            </span>
          </div>
        </div>

        <!-- start-categories -->
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
            @foreach ($getnamecategoryresult as $categ) 
              @php
                $findcountevent = DB::table('expos')->where('id', $categ->Category)->where('admstatus',1)->get();
              @endphp
              
              @foreach($findcountevent as $finderlo)
                  <span class="category-badge" href="#" wire:click.prevent="insertEventToSess({{$finderlo->id}})">{{ucwords(trans($finderlo->tag))}}</span>
              @endforeach
            @endforeach
          </div>
        <!-- end-categories -->

          <style>
            .venues-list {
              display: flex;
              overflow-x: auto;
              padding: 10px;
              gap: 15px;
              scrollbar-width: none;
              -ms-overflow-style: none;
            }

            .venues-list::-webkit-scrollbar {
              display: none;
            }

            .venue-card {
              position: relative;
              flex: 0 0 auto;
              width: 120px;
              height: 120px;
              background: white;
              color: black;
              padding: 0;
              text-align: center;
              box-shadow: none;
              overflow: hidden;
            }

            .venue-card img {
              width: 100%;
              height: 100%;
              object-fit: cover;
            }

            /* Event Status Badge at Top-Left */
            .event-status {
              position: absolute;
              top: 5px;
              left: 5px;
              background: rgba(0, 0, 0, 0.7);
              color: #fff;
              font-size: 10px;
              padding: 2px 8px;
              border-radius: 3px;
              font-weight: bold;
              z-index: 2;
            }

            /* Event Name at Bottom */
            .event-name {
              position: absolute;
              bottom: 0;
              width: 100%;
              background: rgba(0, 0, 0, 0.7);
              color: #fff;
              font-size: 12px;
              padding: 4px 5px;
              text-align: left;
              z-index: 2;
            }

            .event-name a {
              color: #fff;
              text-decoration: none;
              font-weight: bold;
            }

            .event-name a:hover {
              text-decoration: underline;
            }

            /* Gradient overlay for the event name */
            .event-overlay {
              position: absolute;
              bottom: 0;
              left: 0;
              width: 100%;
              height: 20%;
              background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
            }

            .venue-container {
              display: flex;
              flex-direction: column;
              align-items: center;
              width: 120px; /* Adjust based on your design */
            }

            .event-title {
            /* text-align: center;
            font-size: 14px;
            font-weight: bold; */
            margin-top: 5px; /* Space between image and text */
            /* z-index: 2; */
            }

            .event-title a {
              color: black;
              text-decoration: none;
            }

            .event-title a:hover {
              text-decoration: underline;
            }
          </style>

          <!-- Venues Section -->
          <div class="venues-list"> mobile
            @foreach($evento as $eventoi)
              <div class="venue-container">
                <div class="venue-card">
                  <img src="{{url('public/assets/image/exhibition/'.$eventoi->image)}}" alt="">

                  <div class="event-status">
                    @php
                      $to = strtotime($eventoi->startdate);
                      $from = strtotime($eventoi->enddate);
                    @endphp

                    @if ($current < $to && $current < $from)
                      Upcoming
                    @elseif ($current == $to && $current < $from) 
                      First Day
                    @elseif ($current > $to && $current < $from) 
                      Ongoing
                    @elseif ($current > $to && $current == $from) 
                      Last Day
                    @elseif ($current > $to && $current > $from)
                      Ended
                    @endif
                  </div>

                  <!-- Gradient overlay -->
                  <div class="event-overlay"></div>

                    <a class="event-name" href="{{route('event.details',['slug' => $eventoi->slug])}}">{{$eventoi->view_count}}+</a>
                </div>

                <!-- Event Name (Separate from Image) -->
                <div class="event-title">
                    <a href="{{route('event.details',['slug' => $eventoi->slug])}}" class="text-left fw-normal">{{ ucwords(trans($eventoi->eventname)) }}</a>
                    
                    <small class="text-left text-bolder d-none d-sm-block">
                      <i class="bi bi-calendar3"></i>
                      @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                        {{Carbon\Carbon::parse ($eventoi->startdate)->format('d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                      @else
                        {{Carbon\Carbon::parse ($eventoi->startdate)->format('d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                      @endif
                    </small>

                    <small class="d-none d-sm-block text-left"><i class="bi bi-geo-alt-fill fs-sm"></i>
                      {{ucwords(trans($eventoi -> city))}}
                    </small>
                    <br>
                    <small class="text-bolder d-lg-none"> <i class="bi bi-calendar3"></i>
                      @if(Carbon\Carbon::parse ($eventoi->startdate)->format('M') != Carbon\Carbon::parse ($eventoi->enddate)->format('M'))
                        {{Carbon\Carbon::parse ($eventoi->startdate)->format('d M')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                      @else
                        {{Carbon\Carbon::parse ($eventoi->startdate)->format('d ')}} - {{Carbon\Carbon::parse ($eventoi->enddate)->format('d M, y')}}
                      @endif 
                    </small><br>

                    <small class="d-lg-none"><i class="bi bi-geo-alt-fill fs-sm"></i>{{ucwords(trans($eventoi -> city))}}</small>
                </div>

              </div>
            @endforeach
          </div>

        </div>
      </section>
         
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
              color: #fff;
            }

            /* //color: #262524; */

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
              font-size: 42px;
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
              left: 30px;
              top: 76px;
              font-size: 12px;
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

            .tns-outer {
              padding:0 !important;
              margin:0 !important;
            }

            .tns-nav, .tns-controls {
              display:none !important;
            }

      </style>

      <section class="container pt-2 d-lg-none" id="exhibit"> 
        <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
          <div class="d-flex justify-content-between px-0 m-0 lh-1 ">
            <span class="fs-sm"> Upcoming<br><span class="fw-medium h5">Exhibition</span></span>
            <a  class="btn btn-outline-primary btn-sm" href="#">Submit event</a>
              <!-- <a  class="btn btn-outline-primary btn-sm dropdown-toggle" href="#">Submit event</a> -->
              <!-- <ul class="dropdown-menu" width="auto">
                    <li><a class="dropdown-item" href="{{route('coi.exhibition', ['eventype' => 'expo'])}}">More</a></li>
                    <li><a class="dropdown-item" href="#">Exhibit</a></li>
                    <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>
                    <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                  </ul> -->
            </span>
          </div>
        </div>

        <!-- start-categories -->
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
            @foreach ($getnamecategoryresult as $categ) 
              @php
                $findcountevent = DB::table('expos')->where('id', $categ->Category)->where('admstatus',1)->get();
              @endphp
              
              @foreach($findcountevent as $finderlo)
                  <span class="category-badge" href="#" wire:click.prevent="insertEventToSess({{$finderlo->id}})">{{ucwords(trans($finderlo->tag))}}</span>
              @endforeach
            @endforeach
          </div>
        <!-- end-categories -->

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
        </style>
        
        <div class="scroll-container">
          @foreach($evento as $eventoi)
            <div class="col-lg-3 col-md-3 col-sm-6 px-2 mb-1" href="{{route('event.details',['slug' => $eventoi->slug])}}">
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
                        <a href="{{route('event.details',['slug' => $eventoi->slug])}}">{{ucwords(trans($eventoi -> eventname))}}</a>
                      </div>
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

        
      </style>

       <!-- city -->
      <section  class="container pt-2 d-sm-none">
        <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
          <div class="d-flex justify-content-between px-0 m-0 lh-1 ">
            <span class="fs-sm"> Explore<br><span class="fw-medium h5">City</span></span>
            <span>
              
            <a href="" class="btn btn-outline-primary btn-sm" href="#" role="button">All</a>
            
          </div>
        </div>

         @php  
            $locationo = DB::table('locations')->where('status', 1)
                                               ->where('admstatus', 1)
                                               ->whereNotNull('venue')
                                               ->select('city', 'country', 'image')
                                               ->groupBy('city', 'country', 'image')
                                               ->orderBy('city','asc')
                                               ->get();
        @endphp
        
        
        <!-- new start city -->
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
              width: 60px;
              height: 60px;
            }
            .selected{
              color: red !important;
            }
          </style>
            
          <div class="scroll-container">
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
        <!-- new start city -->
      </section>

      <!-- timeline -->
      <!-- <section class="card text-center py-5 award rounded-0">
      
        <div class="container mt-5">
          <div class="card-custom">
          <p>Get access to channels and languages' advanced viewership statistics in 
            <strong style="color: #00ff4c;">Esports Charts Event Dashboard</strong></p>

          <a href="" class="btn-custom">Dive into stats <span>from $100</span></a>
          </div>
        </div>           
      </section> -->

      
  </main>
