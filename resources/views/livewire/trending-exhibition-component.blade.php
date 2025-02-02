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

      <section class="container pt-2" id="exhibit"> 
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

        

        <div class="d-flex badgese mt-1">
            @foreach ($getnamecategoryresult as $categ) 
              @php
                $findcountevent = DB::table('expos')->where('id', $categ->Category)->where('admstatus',1)->get();
              @endphp
              
              @foreach($findcountevent as $finderlo)
                  <a wire:ignore class="badge border-1 text-left border-dark text-dark mr-1" href="#" wire:click.prevent="insertEventToSess({{$finderlo->id}})">
                  {{ucwords(trans($finderlo->tag))}}</a>
              @endforeach
            @endforeach
        </div>
    
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
        <p class="card-text fs-lg fw-light textcolor">Feb 29 <sup>th</sup></p>
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


<!-- city -->
<section class="award mb-5">
                  <div class="mt-4">
                    
                  <!-- artist Section -->
                    <div class="section-title">
                      <h5>ARTISTS</h5>
                      <button class="view-all-btn">View all</button>
                    </div>

                    <div class="artist-list">
                      <div class="artist-card">
                        <img src="https://via.placeholder.com/70" alt="Artist 1">
                        <p>Anumita</p>
                      </div>

                      <div class="artist-card">
                        <img src="https://via.placeholder.com/70" alt="Artist 1">
                        <p>Anumita</p>
                      </div>

                      <div class="artist-card">
                        <img src="https://via.placeholder.com/70" alt="Artist 1">
                        <p>Anumita</p>
                      </div>

                      <div class="artist-card">
                        <img src="https://via.placeholder.com/70" alt="Artist 1">
                        <p>Anumita</p>
                      </div>

                    </div>

                    <!-- Venues Section -->
                    <div class="section-title mt-4">
                      <h5>Venues</h5>
                    </div>
                    
                    <div class="venues-list">
                      
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

                      <div class="venue-card">
                        <img src="htps:via.placeholder.com/120X80" alt="Venue 1">
                        <p>The Piano Man</p>
                        <small>2 Events</small>
                      </div>
                      
                    </div>
                  </div>
                </section>
<!-- end-city -->
      <section  class="container pt-2">
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
        
        <style>
          .venues-list{
                  display: flex;
                  overflow-x: auto;
                  padding: 10px;
                  gap: 15px;
                  }

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
            width: 150px;
            height: 180px;
            border-radius: 10px;
            overflow: hidden;
            color: white;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 255, 76, 0.4);
          }

          .venue-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
          }

          .venue-info {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.6);
            padding: 8px;
            border-radius: 5px;
            font-size: 14px;
            text-align: left;
          }

          .green-gradient{
            position: absolute;
            bottom: 0;
            right: 0;
            width: 60px;
            height: 60px;
            background: radial-gradient(circle at bottom right, rgba(0, 255, 76, 0.6), transparent);
            border-radius: 50%;
          }
        </style>

      <section class="container">
        <div class="venues-list">
          
          <div class="venue-card">
            <img src="htps:via.placeholder.com/150X180" alt="Venue 1">
            <div class="venue-info">
              <p class="fw-bold">The Piano Man</p>
              <small>2 Events</small>
            </div>
            <div class="green-gradient"></div>
          </div>

          <div class="venue-card">
            <img src="htps:via.placeholder.com/150X180" alt="Venue 1">
            <div class="venue-info">
              <p class="fw-bold">The Piano Man</p>
              <small>2 Events</small>
            </div>
            <div class="green-gradient"></div>
          </div>

          <div class="venue-card">
            <img src="htps:via.placeholder.com/150X180" alt="Venue 1">
            <div class="venue-info">
              <p class="fw-bold">The Piano Man</p>
              <small>2 Events</small>
            </div>
            <div class="green-gradient"></div>
          </div>

          <div class="venue-card">
            <img src="htps:via.placeholder.com/150X180" alt="Venue 1">
            <div class="venue-info">
              <p class="fw-bold">The Piano Man</p>
              <small>2 Events</small>
            </div>
            <div class="green-gradient"></div>
          </div>

          <div class="venue-card">
            <img src="htps:via.placeholder.com/150X180" alt="Venue 1">
            <div class="venue-info">
              <p class="fw-bold">The Piano Man</p>
              <small>2 Events</small>
            </div>
            <div class="green-gradient"></div>
          </div>
          
        </div>
      </section>






        <div class="row g-0 py-0 mx-n2 my-Slider3">
          
          
            <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'delhi', 'country' => 'india' ])}}">
              <h3 class="name">Delhi</h3>
              <p class="symbol"><img src="{{url('public/assets/image/city/ncr.png')}}" alt="#"></p>
              <!-- <p class="number">52</p> -->
                   <p class="weight" style="left: 30px;">Delhi</p>
            </a>
            <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'hyderabad', 'country' => 'india' ])}}">
              <h3 class="name">Hyderabad</h3>
              <p class="symbol"><img src="{{url('public/assets/image/city/hyd.png')}}" alt="#"></p>
              <!-- <p class="number">52</p> -->
                   <p class="weight" style="left: 20px;">Hyderabad</p>
            </a>
            <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'mumbai', 'country' => 'india' ])}}">
              <h3 class="name">Mumbai</h3>
              <p class="symbol"><img src="{{url('public/assets/image/city/mum.png')}}" alt="#"></p>
              <!-- <p class="number">52</p> -->
                   <p class="weight" style="left: 30px;">Mumbai</p>
            </a>
            <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'bangalore', 'country' => 'india' ])}}">
              <h3 class="name">Bangalore</h3>
              <p class="symbol"><img src="{{url('public/assets/image/city/bang.png')}}" alt="#"></p>
              <!-- <p class="number">52</p> -->
                   <p class="weight" style="left: 20px;">Bangalore</p>
            </a>
            <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'chennai', 'country' => 'india' ])}}">
              <h3 class="name">Chennai</h3>
              <p class="symbol"><img src="{{url('public/assets/image/city/chen.png')}}" alt="#"></p>
              <!-- <p class="number">52</p> -->
                   <p class="weight" style="left: 30px;">Chennai</p>
            </a>
            <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'chandigarh', 'country' => 'india' ])}}">
              <h3 class="name">Chandigarh</h3>
              <p class="symbol"><img src="{{url('public/assets/image/city/chd.png')}}" alt="#"></p>
              <!-- <p class="number">52</p> -->
                   <p class="weight" style="left: 20px;">Chandigarh</p>
            </a>
            <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'kolkata', 'country' => 'india' ])}}">
              <h3 class="name">Kolkata</h3>
              <p class="symbol"><img src="{{url('public/assets/image/city/kolk.png')}}" alt="#"></p>
              <!-- <p class="number">52</p> -->
                   <p class="weight" style="left: 20px;">Kolkata</p>
            </a>
            <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => 'ahmdebad', 'country' => 'india' ])}}">
              <h3 class="name">Ahmdebad</h3>
              <p class="symbol"><img src="{{url('public/assets/image/city/ahd.png')}}" alt="#"></p>
              <!-- <p class="number">52</p> -->
                   <p class="weight" style="left: 20px;">Ahmdebad</p>
            </a>
        </div>
      </section>
  </main>

  @push('scripts')
      <script>
        document.addEventListener('livewire:load' , function(){
          var slider = tns({
            container: '.badgese',   
            
            responsive: {
              300: {
                items: 3,
                controls: false,
                fixedWidth: 100,
                mouseDrag: true,
                autoplay: false,
                autoplayButtonOutput: false,
                autoplayHoverPause: true,
              },
              500: {
                items: 1,
                nav: false,
                controls: false,
                autoplayHoverPause: true,
                autoplay: false,
                autoplayButtonOutput: false,
                fixedWidth: 100,
              },
            },
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
  @endpush