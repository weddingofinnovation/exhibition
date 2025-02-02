<main>
@section('page_title', 'Plan your Event')
@section('page_description', ('Great Exhibtion To Exhibit '))
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

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
            background: #888;
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
            left: 10px;
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

      </style>

      <div class="container mt-5">
          <!-- <input type="text" class="form-control" placeholder="search" > -->
          <form action="" wire:submit.prevent="searchbackup">
              <div class="input-group flex-nowrap">
              <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
              <input type="text" class="form-control rounded-start"  name="search" placeholder="Find your Right Place" wire:model.lazy="searchTerm">
              <button class="btn btn-primary" type="submit" name=""> Search</button>
              </div>
          </form>

          <div class="row mb-5 pb-2">
            @if(is_null($searchTerm))

              <div class="container  small">
                  Expand your Business Reach with us.
              </div>  

            @else
              @foreach ($searchCat as $franchise) 
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
                      <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
      </div>

      <section class="container mb-5 pb-5">
        <div class ="grido">
          @foreach($allcategory as $category )
              <div class="element-item bg-light" data-category="transition">

                <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                <h3 class="name">{{$category -> industry}}</h3>
                </a> 
                <p class="symbol">Hg</p>
                <!-- <p class="number">80</p>
                <p class="weight">200.59</p> -->
              </div>
          @endforeach
        </div>
      </section>
      

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
      <section>
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
      

      {{-- <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
              <p class="col-md-10 col-lg-8 mx-auto fw-bold">Industry</p>
              <div class="container">
                  <div class="row row-cols-3 row-cols-lg-6 gy-2 gx-1 g-lg-3">
                      @foreach($allcategory as $category)
                          <div class="col">
                              <a  href="{{route('coi.exhibitioncategory',['time' => 'upcoming', 'eventype' => 'exhibition', 'categry' => $category->slug])}}">
                                  <div class="p-3 border rounded border-dark bg-light text-center text-dark fs-sm">{{$category -> industry}}</div>
                              </a> 
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </section> --}}

      {{-- <div class="grido">
        <div class="element-item metalloid " data-category="metalloid">
          <h3 class="name">Tellurium</h3>
          <p class="symbol">Te</p>
          <p class="number">52</p>
          <p class="weight">127.6</p>
        </div>
        <div class="element-item post-transition metal " data-category="post-transition">
          <h3 class="name">Bismuth</h3>
          <p class="symbol">Bi</p>
          <p class="number">83</p>
          <p class="weight">208.980</p>
        </div>
        <div class="element-item post-transition metal " data-category="post-transition">
          <h3 class="name">Lead</h3>
          <p class="symbol">Pb</p>
          <p class="number">82</p>
          <p class="weight">207.2</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
          <h3 class="name">Gold</h3>
          <p class="symbol">Au</p>
          <p class="number">79</p>
          <p class="weight">196.967</p>
        </div>
        <div class="element-item alkali metal " data-category="alkali">
          <h3 class="name">Potassium</h3>
          <p class="symbol">K</p>
          <p class="number">19</p>
          <p class="weight">39.0983</p>
        </div>
        <div class="element-item alkali metal " data-category="alkali">
          <h3 class="name">Sodium</h3>
          <p class="symbol">Na</p>
          <p class="number">11</p>
          <p class="weight">22.99</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
          <h3 class="name">Cadmium</h3>
          <p class="symbol">Cd</p>
          <p class="number">48</p>
          <p class="weight">112.411</p>
        </div>
        <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
          <h3 class="name">Calcium</h3>
          <p class="symbol">Ca</p>
          <p class="number">20</p>
          <p class="weight">40.078</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
          <h3 class="name">Rhenium</h3>
          <p class="symbol">Re</p>
          <p class="number">75</p>
          <p class="weight">186.207</p>
        </div>
        <div class="element-item post-transition metal " data-category="post-transition">
          <h3 class="name">Thallium</h3>
          <p class="symbol">Tl</p>
          <p class="number">81</p>
          <p class="weight">204.383</p>
        </div>
        <div class="element-item metalloid " data-category="metalloid">
          <h3 class="name">Antimony</h3>
          <p class="symbol">Sb</p>
          <p class="number">51</p>
          <p class="weight">121.76</p>
        </div>
        <div class="element-item transition metal " data-category="transition">
          <h3 class="name">Cobalt</h3>
          <p class="symbol">Co</p>
          <p class="number">27</p>
          <p class="weight">58.933</p>
        </div>
        <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
          <h3 class="name">Ytterbium</h3>
          <p class="symbol">Yb</p>
          <p class="number">70</p>
          <p class="weight">173.054</p>
        </div>
        <div class="element-item noble-gas nonmetal " data-category="noble-gas">
          <h3 class="name">Argon</h3>
          <p class="symbol">Ar</p>
          <p class="number">18</p>
          <p class="weight">39.948</p>
        </div>
        <div class="element-item diatomic nonmetal " data-category="diatomic">
          <h3 class="name">Nitrogen</h3>
          <p class="symbol">N</p>
          <p class="number">7</p>
          <p class="weight">14.007</p>
        </div>
        <div class="element-item actinoid metal inner-transition " data-category="actinoid">
          <h3 class="name">Uranium</h3>
          <p class="symbol">U</p>
          <p class="number">92</p>
          <p class="weight">238.029</p>
        </div>
        <div class="element-item actinoid metal inner-transition " data-category="actinoid">
          <h3 class="name">Plutonium</h3>
          <p class="symbol">Pu</p>
          <p class="number">94</p>
          <p class="weight">(244)</p>
        </div>
      </div> --}}

      <!-- bottom -->
      <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100">
          <a class="d-table-cell handheld-toolbar-item" href="{{asset('/')}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-border-style"></i></span>
            <span class="handheld-toolbar-label">Home</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#shopsidebar" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="bi bi-calendar4-week"></i></span>
            <span class="handheld-toolbar-label">Filter</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('coievent.add',['board' =>'add-your-event'])}}">
              <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
              <span class="handheld-toolbar-label">Add</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
          </a>
        </div>
      </div>
</main>

  @push('scripts')
     
    
      <script type="text/javascript" src="{{asset('js/isotope.pkgd.min.js')}}">
        $(document).ready(function(){ 
          var grid = $('.grido').isotope({
          itemSelector: '.element-item',
          layoutMode: 'masonry',
          getSortData: {
            name: '.name',
            symbol: '.symbol',
            number: '.number parseInt',
            category: '[data-category]',
            weight: function( itemElem ) {
              var weight = $( itemElem ).find('.weight').text();
              return parseFloat( weight.replace( /[\(\)]/g, '') );
              }
            }
          });
         // filter functions
         var filterFns = {
          // show if number is greater than 50
          numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
          },
          // show if name ends with -ium
          ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
          }
        };

        // bind filter button click
        $('#filters').on( 'click', 'button', function() {
          var filterValue = $( this ).attr('data-filter');
          // use filterFn if matches value
          filterValue = filterFns[ filterValue ] || filterValue;
          $grid.isotope({ filter: filterValue });
        });

        // bind sort button click
        $('#sorts').on( 'click', 'button', function() {
          var sortByValue = $(this).attr('data-sort-by');
          $grid.isotope({ sortBy: sortByValue });
        });

        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = $( buttonGroup );
          $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
          });

      }); 
    });
  
      </script>
  @endpush