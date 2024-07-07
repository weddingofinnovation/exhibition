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

      @if(Route::currentRouteName() === 'event.product')
      @elseif(Route::currentRouteName() === 'event.productreview')
      @elseif(Route::currentRouteName() === 'lead.business')
      @elseif(Route::currentRouteName() === 'lead.business.other')
      @elseif(Route::currentRouteName() === 'seller.dashboard')
      @else
        <footer class="footer bg-dark pt-5 d-none d-sm-block">
            <div class="container">
              <div class="row pb-2">

                <div class="col-md-4 col-sm-6">
                  <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light" style="font-weight: 720; font-size: 39px;">One step closer to meaningful innovation</h3>
                    
                  <p class="fs-sm text-white opacity-70 pb-1">High quality events created by our global community.</p>

                  <h6 class="d-inline-block col-sm-3 pe-3 me-3 border-end border-light"><span class="text-primary">65,478 </span>
                  <span class="fw-normal text-white">Events</span></h6>
                  <h6 class="d-inline-block col-sm-3 pe-3 me-3 border-end border-light"><span class="text-primary">2,521 </span>
                  <span class="fw-normal text-white">Members</span></h6>
                  <h6 class="d-inline-block col-sm-3 me-3"><span class="text-primary">897 </span>
                  <span class="fw-normal text-white">Vendors</span></h6>
                <div class="widget mt-4 text-md-nowrap text-center text-md-start">
                  <a class="btn-social bs-light bs-twitter me-2 mb-2"  target="_blank" href="{{$infos->twitter}}"><i class=" bi bi-twitter"></i></a>
                  <a class="btn-social bs-light bs-facebook me-2 mb-2"  target="_blank" href="{{$infos->facebook}}"><i class=" bi bi-facebook"></i></a>
                  <a class="btn-social bs-light bs-instagram me-2 mb-2"  target="_blank" href="{{$infos->instagram}}"><i class=" bi bi-instagram"></i></a>
                  <a class="btn-social bs-light bs-youtube me-2 mb-2"  target="_blank" href="{{$infos->youtube}}"><i class=" bi bi-youtube"></i></a>
                  <a class="btn-social bs-light bs-linkedin me-2 mb-2"  target="_blank" href="{{$infos->linkedin}}"><i class=" bi bi-linkedin"></i></a>
                </div>
            
          
                    <!--<ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="">Sneakers &amp; Athletic</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Athletic Apparel</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Sandals</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Jeans</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Shirts &amp; Tops</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Shorts</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">T-Shirts</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Swimwear</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Clogs &amp; Mules</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Bags &amp; Wallets</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Accessories</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Sunglasses &amp; Eyewear</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Watches</a></li>
                    </ul>-->
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light" style="font-size: 13px; font-weight: 400;">
                    <a target="_blank" href="{{asset('/contact-us#contact')}}">Beep us if you want to reach us</a> <br>
                      Some of the work we are proud of ,<br>
                      <a target="_blank" href="{{asset('/contact-us')}}">More about us</a> ,<br>
                      <a target="_blank" href="{{asset('/career')}}">Check out our job openings</a><br>
                      <a target="_blank" href="{{asset('/contact-us')}}">Contact us</a></h3>
                    <ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Exhibition</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Magazine</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="#">Award</a></li>
                    </ul>
                  </div>

                  <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">About us</h3>
                    <!--<ul class="widget-list">
                      <li class="widget-list-item"><a class="widget-list-link" href="">About company</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Our team</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">Careers</a></li>
                      <li class="widget-list-item"><a class="widget-list-link" href="">News</a></li>
                    </ul>-->
                  </div>

                </div>
                <div class="col-md-4">
                  <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1">Stay informed</h3>

                    <form class="subscription-form validate" action="" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                      <div class="input-group flex-nowrap"><i class="bi bi-envelope position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                        <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required="">
                        <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                      </div>
                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                      </div>
                      <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                      <div class="subscription-status"></div>
                    </form>

                  </div>
                  <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1">Download our app</h3>
                    <div class="d-flex flex-wrap">
                      <div class="me-2 mb-2"><a class="btn-market btn-apple" href="" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                      <div class="mb-2"><a class="btn-market btn-google" href="" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
                    </div>
                  </div>
                </div>

                  <!--testing-->          
                <hr class="hr-light mb-5">
                <div class="row  pb-2 ">
                  <div class="col-md-6 text-center text-md-start mb-4">
                    <div class="text-nowrap mb-4">
                      <a class="d-inline-block align-middle mt-n1 me-3" style="line-height:17px;" href="{{asset('/')}}">
                        <div class="fs-4 text-light lh-1" style=" font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> 
                          The<br>Exhibition<br>Network</div>
                          <!--<img class="d-block" src="./franciz_files/footer-logo-light.png" width="117" alt="Council of Innovation">-->
                      </a>

                      {{-- <div class="btn-group dropdown disable-autohide">
                        <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown">
                          <img class="me-2" src="" width="20" alt="English">Eng / $</button>
                        <ul class="dropdown-menu my-1">
                          <li class="dropdown-item">
                            <select class="form-select form-select-sm">
                              <option value="usd">$ USD</option>
                              <option value="eur">€ EUR</option>
                              <option value="ukp">£ UKP</option>
                              <option value="jpy">¥ JPY</option>
                            </select>
                          </li>
                          <li><a class="dropdown-item pb-1" href=""><img class="me-2" src="" width="20" alt="Français">Français</a></li>
                          <li><a class="dropdown-item pb-1" href=""><img class="me-2" src="" width="20" alt="Deutsch">Deutsch</a></li>
                          <li><a class="dropdown-item" href=""><img class="me-2" src="" width="20" alt="Italiano">Italiano</a></li>
                        </ul>
                      </div> --}}

                    </div>
                    <div class="widget widget-links widget-light">
                      <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                        <li class="widget-list-item me-4"><a class="widget-list-link" href="">Partner</a></li>
                        <li class="widget-list-item me-4"><a class="widget-list-link" href="">Affiliates</a></li>
                        <li class="widget-list-item me-4"><a class="widget-list-link" href="">Support</a></li>
                        <li class="widget-list-item me-4"><a class="widget-list-link" href="{{route('terms.condition')}}">Privacy</a></li>
                        <li class="widget-list-item me-4"><a class="widget-list-link" href="{{route('terms.condition')}}">Terms of use</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 text-center text-md-end mb-4">
                    <div class="mb-3">
                      <a class="btn-social bs-light bs-twitter ms-2 mb-2" target="_blank" href="{{$infos->twiter}}"><i class="bi bi-twitter"></i></a>
                      <a class="btn-social bs-light bs-facebook ms-2 mb-2" target="_blank" href="{{$infos->facebook}}"><i class="bi bi-facebook"></i></a>
                      <a class="btn-social bs-light bs-instagram ms-2 mb-2" target="_blank" href="{{$infos->instagram}}"><i class="bi bi-instagram"></i></a>
                      <a class="btn-social bs-light bs-youtube ms-2 mb-2" target="_blank" href="{{$infos->youtube}}"><i class=" bi bi-youtube"></i></a>
                      <a class="btn-social bs-light bs-linkedin ms-2 mb-2" target="_blank" href="{{$infos->linkedin}}"><i class=" bi bi-linkedin"></i></a>
                    </div>
                    <img class="d-inline-block" src="./franciz_files/cards-alt.png" width="187" alt="Payment methods">
                  </div>
                </div>
                <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="{{asset('/')}}" target="_blank" rel="noopener">COI | The Exhibition Network</a></div>
              </div>
              </div>
            </div>
            </div>
        </footer>
      @endif
   
  
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">

        @if('/' == request()->path() ? 'active' : '')
            <a class="d-table-cell handheld-toolbar-item" href="#exhibit">
              <!-- <span class="handheld-toolbar-icon"><i class="bi bi-calendar4-week"></i></span> -->
              <span class="handheld-toolbar-label">We are trusted By</span>
            </a> 

            <a class="d-table-cell handheld-toolbar-item" href="#conference">
              <span class="handheld-toolbar-icon"><i class="bi bi-border-style"></i></span>
              <span class="handheld-toolbar-label">Conference</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" href="#awards">
              <span class="handheld-toolbar-icon"><i class=" bi bi-trophy"></i></span>
              <span class="handheld-toolbar-label">Awards</span>
            </a>
            
            <a class="d-table-cell handheld-toolbar-item" href="#exhibit">
              <span class="handheld-toolbar-icon"><i class="bi bi-calendar4-week"></i></span>
              <span class="handheld-toolbar-label">Exhibition</span>
            </a>

            @if (Auth::check())
              @if(Auth::user()->utype == 'ADM')
              <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasUSR" role="button" aria-controls="offcanvasUSR">
                <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
                <span class="handheld-toolbar-label">Menu</span>
              </a>
              @elseif(Auth::user()->utype == 'USR')
              <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
                <span class="handheld-toolbar-label">Menu</span>
              </a>
              @endif
            @else
                <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasExample">
                  <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
                  <span class="handheld-toolbar-label">Menu</span>
                </a>
            @endif

          
            
          
        @endif
        
        @if(Route::currentRouteName() == 'coi.exhibition' )
            <a class="d-table-cell handheld-toolbar-item" href="{{asset('/')}}">
              <span class="handheld-toolbar-icon"><i class="bi bi-border-style"></i></span>
              <span class="handheld-toolbar-label">Home</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" href="#shop-sidebar" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar" aria-controls="offcanvasRight">
              <span class="handheld-toolbar-icon"><i class="bi bi-calendar4-week"></i></span>
              <span class="handheld-toolbar-label">Filter</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" href="{{route('coievent.add',['board' => 'add-your-event'])}}">
                <span class="handheld-toolbar-icon"><i class="bi bi-heart"></i></span>
                <span class="handheld-toolbar-label">Add</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
              <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
              <span class="handheld-toolbar-label">Menu</span>
            </a>

        @elseif(Route::currentRouteName() == 'coi.exhibitioncategory' || Route::currentRouteName() == 'search.events' || Route::currentRouteName() == 'search.venue')

            <a class="d-table-cell handheld-toolbar-item" href="{{asset('/')}}">
              <span class="handheld-toolbar-icon"><i class="bi bi-home"></i></span>
              <span class="handheld-toolbar-label">Home</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#shopsidebar" role="button" aria-controls="offcanvasExample">
              <span class="handheld-toolbar-icon"><i class="bi bi-funnel"></i></span>
              <span class="handheld-toolbar-label">Filter</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" href="{{route('coievent.add',['board' =>'add-your-event'])}}">
                <span class="handheld-toolbar-icon"><i class="bi bi-save"></i></span>
                <span class="handheld-toolbar-label">Saved</span>
            </a>

            <!-- <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
              <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
              <span class="handheld-toolbar-label">Menu</span>
            </a> 

            <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">-->
            <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
              <span class="handheld-toolbar-label">Menu</span>
            </a>
        @endif
          
          {{--@if(Cart::instance('cart')->count() > 0)
            <a class="d-table-cell handheld-toolbar-item" href="#">
              <span class="handheld-toolbar-icon"><i class="bi bi-cart"></i>
              @if(Cart::instance('cart')->count() > 0)
              <span class="badge bg-primary rounded-pill ms-1">{{Cart::instance('cart')->count()}}</span></span>
              
                <span class="handheld-toolbar-label">{{Cart::instance('cart')->subtotal()}}</span>
              @else
              <span class="handheld-toolbar-label">Cart</span>
              @endif  
            </a>
          @endif --}}

          @if(Route::currentRouteName() === 'coievent.add')
              <a class="d-table-cell handheld-toolbar-item" href="{{asset('/')}}">
                <span class="handheld-toolbar-icon"><i class="bi bi-border-style"></i></span>
                <span class="handheld-toolbar-label">Home</span>
              </a>

              <a class="d-table-cell handheld-toolbar-item" href="{{asset('/')}}">
                <span class="handheld-toolbar-icon"><i class="bi bi-border-style"></i></span>
                <span class="handheld-toolbar-label">Advertise</span>
              </a>

              <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
                <span class="handheld-toolbar-label">Menu</span>
              </a>
          @endif
      </div>

      @if(Route::currentRouteName() === 'business.exhibition')
        <div class="container text-center border-1 bg-secondary">
          <a href="{{route('business.membership')}}" class="fs-xs fw-bold text-primary ">Become Our Client</a>
        </div>
      @endif

    </div>

    <span class="navbar-tool-label"> </span> 
          
    <!-- Back To Top Button-->
    <a class="btn-scroll-top" href="{{asset('/#top')}}" data-scroll="">
     <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="bi bi-chevron-up"></i></a>

     
      <!-- Filter -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="shopsidebar" aria-labelledby="offcanvasExampleLabel" style="width: 380px;">
        
        <div class="offcanvas-header align-items-center shadow-sm">
          <h2 class="h5 mb-0">{{$this->eventype}}</h2>
          <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
          {{-- <div class="d-flex badgeose pb-2">
            <span class="badge border border-1 text-right border-dark text-dark mr-1">Today</span>
            <span class="badge border border-1 text-right border-dark text-dark mr-1">Tomorrow</span>
            <span class="badge border border-1 text-right border-dark text-dark mr-1">This weekend</span>
            <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Week</span>
            <span class="badge border border-1 text-right border-dark text-dark mr-1">Next weekend</span>
            <span class="badge border border-1 text-right border-dark text-dark mr-1">This Month</span>
            <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Month</span>
          </div> --}}

        <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
          <!-- Categories-->
            <div class="widget widget-categories mb-4 pb-4 border-bottom">
              <h3 class="widget-title d-none d-sm-block">{{$this->eventype}}</h3>
              <div class="accordion mt-n1" id="shop-categories" wire:model="categ" >
                  @foreach ($catego as $category)
                    <!-- Shoes-->
                    <div class="accordion-item">
                      <h3 class="accordion-header">
                          @if($this->eventype ==  'exhibition')
                              <a class="accordion-button" href="{{route('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'expo', 'categry' => $category->slug])}}">
                                {{$category->expoindustry}}
                              </a>
                              @elseif ($this->eventype ==  'award')
                              <a class="accordion-button" href="{{route('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'award', 'categry' => $category->slug])}}">
                                {{$category->expoindustry}}
                              </a>
                              @elseif ($this->eventype ==  'conference')
                              <a class="accordion-button" href="{{route('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'conference', 'categry' => $category->slug])}}">
                                {{$category->expoindustry}}
                              </a>
                          @endif
                    </div>
                  @endforeach
              </div>
            </div>
        </div>


        <div class="handheld-toolbar">
          <div class="d-table table-layout-fixed w-100">
              @if($board == 'job')
                <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'job'])}}">
                  <span class="handheld-toolbar-icon">
                  <i class="ci-filter-alt"></i></span>
                  <span class="handheld-toolbar-label">Job</span>
                </a>
                
                <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.jobCreate')}}">
                  <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                  <span class="handheld-toolbar-label">Add</span>
                </a>
              @elseif($board == 'magazine')
                <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'magazine'])}}">
                    <span class="handheld-toolbar-icon">
                    <i class="ci-filter-alt"></i></span>
                    <span class="handheld-toolbar-label">Magazine</span>
                  </a>
                  
                  <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">
                    <span class="handheld-toolbar-icon"><i class="bi bi"></i></span>
                    <span class="handheld-toolbar-label">Add</span>
                  </a>
              @elseif($board == 'blog')

                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'blog'])}}">
                    <span class="handheld-toolbar-icon">
                    <i class="ci-filter-alt"></i></span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Blog</span>
                  </a>
                  
                  <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.blogpost',[ 'board' => 'addBlog' ])}}">
                    <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                    <span class="handheld-toolbar-label">Add</span>
                  </a>

              @elseif($board == 'event')
                  
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                    <span class="handheld-toolbar-icon">
                    <i class="ci-filter-alt"></i></span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Event</span>
                  </a>
                  
                  <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
                    <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                    <span class="handheld-toolbar-label">Add</span>
                  </a>
              
              @elseif($board == 'visitor')
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                    <span class="handheld-toolbar-icon">
                    <i class="ci-filter-alt"></i></span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
                  </a>
                  
                  <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
                    <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                    <span class="handheld-toolbar-label">Add</span>
                  </a>
              @elseif($board == 'client')
                  <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                    <span class="handheld-toolbar-icon">
                    <i class="ci-filter-alt"></i></span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
                  </a>
                  
                  <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
                    <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                    <span class="handheld-toolbar-label">Brand</span>
                  </a>
              @endif
                  
                  <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
                    <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                    <span class="handheld-toolbar-label">Country</span>
                  </a>

                  <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#citysidebar" role="button" aria-controls="offcanvasExample">
                    <span class="handheld-toolbar-icon">
                    <i class="bi bi-location"></i></span>
                    <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">City</span>
                  </a> 
                  
                  <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#venuesidebar" role="button" aria-controls="offcanvasExample">
                    <span class="handheld-toolbar-icon"><i class="bi bi-building"></i></span>
                    <span class="handheld-toolbar-label">Venue</span>
                  </a>
            
                  <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="handheld-toolbar-icon"><i class=" bi bi-list"></i></span>
                    <span class="handheld-toolbar-label">Menu</span>
                  </a>

          </div>
        </div>
      </div>
      
      <!-- venue Filter -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="venuesidebar" aria-labelledby="offcanvasExampleLabel" style="width: 380px;">
        
              <div class="offcanvas-header align-items-center shadow-sm">
                <h2 class="h5 mb-0">{{$this->eventype}}</h2>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              
                {{-- <div class="d-flex badgeose pb-2">
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Today</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Tomorrow</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">This weekend</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Week</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next weekend</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">This Month</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Month</span>
                </div> --}}

              <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                <!-- Categories-->
                  <div class="widget widget-categories mb-4 pb-4 border-bottom">
                    <h3 class="widget-title d-none d-sm-block">{{$this->eventype}}</h3>
                    <div class="accordion mt-n1" id="shop-categories" wire:model="categ" >

                      @php  
                         
                         $locationo = DB::table('locations')->where('status', 1)->whereNotNull('venue')->orderBy('venue','ASC')->get();
                      @endphp

                        @foreach ($locationo as $category)
                          <!-- Shoes-->
                          <div class="accordion-item">
                            <h3 class="accordion-header">
                               
                                    {{-- <a class="accordion-button" href="{{route('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'expo', 'categry' => $category->slug])}}">
                                      {{$category->venue}}
                                    </a> --}}

                                    <a class="accordion-button text-dark" href="{{route('search.venue',['time' => 'upcoming', 'venue' => $category->venue , 'city' => $category->city, 'country' => $category->country ])}}">
                                    {{ucwords(trans(Str::limit($category->venue, 24)))}}
                                    </a>
                          </div>
                        @endforeach
                    </div>
                  </div>
              </div>

              <div class="handheld-toolbar">
                <div class="d-table table-layout-fixed w-100">
                    @if($board == 'job')
                      <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'job'])}}">
                        <span class="handheld-toolbar-icon">
                        <i class="ci-filter-alt"></i></span>
                        <span class="handheld-toolbar-label">Job</span>
                      </a>
                      
                      <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.jobCreate')}}">
                        <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                        <span class="handheld-toolbar-label">Add</span>
                      </a>
                    @elseif($board == 'magazine')
                      <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'magazine'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label">Magazine</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">
                          <span class="handheld-toolbar-icon"><i class="bi bi"></i></span>
                          <span class="handheld-toolbar-label">Add</span>
                        </a>
                    @elseif($board == 'blog')

                        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'blog'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Blog</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.blogpost',[ 'board' => 'addBlog' ])}}">
                          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                          <span class="handheld-toolbar-label">Add</span>
                        </a>

                    @elseif($board == 'event')
                        
                        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Event</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
                          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                          <span class="handheld-toolbar-label">Add</span>
                        </a>
                    
                    @elseif($board == 'visitor')
                        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
                          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                          <span class="handheld-toolbar-label">Add</span>
                        </a>
                    @elseif($board == 'client')
                        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
                          <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                          <span class="handheld-toolbar-label">Brand</span>
                        </a>
                    @endif
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
                          <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                          <span class="handheld-toolbar-label">Country</span>
                        </a>

                        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#citysidebar" role="button" aria-controls="offcanvasExample">
                          <span class="handheld-toolbar-icon">
                          <i class="bi bi-location"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">City</span>
                        </a> 
                        
                        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                          <span class="handheld-toolbar-icon"><i class="bi bi-building"></i></span>
                          <span class="handheld-toolbar-label">Venue</span>
                        </a>
                  
                        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                          <span class="handheld-toolbar-icon"><i class=" bi bi-list"></i></span>
                          <span class="handheld-toolbar-label">Menu</span>
                        </a>

                </div>
              </div>
      </div>

      <!-- City Filter -->
      <div class="offcanvas offcanvas-bottom" tabindex="-1" id="citysidebar" aria-labelledby="offcanvasExampleLabel" style="height: 380px;">
        
              <div class="offcanvas-header align-items-center shadow-sm">
                <h2 class="h5 mb-0">City</h2>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              
                {{-- <div class="d-flex badgeose pb-2">
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Today</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Tomorrow</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">This weekend</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Week</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next weekend</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">This Month</span>
                  <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Month</span>
                </div> --}}

                <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                    {{-- @php  
                        $locationo = DB::table('locations')->where('status', 1)
                                                           ->where('admstatus', 1)
                                                           ->whereNotNull('venue')
                                                           ->select('city', 'country', 'image')
                                                           ->groupBy('city', 'country', 'image')
                                                           ->orderBy('city','asc')
                                                           ->get();
                    @endphp --}}
                      
                    @foreach ($locationo as $category)
                      <a class="element-item bg-light" data-category="metalloid" href="{{route('search.venue',['time' => 'upcoming', 'venue' => 'all' , 'city' => $category->city, 'country' => $category->country ])}}">
                        <h3 class="name">{{ucwords(trans(Str::limit($category->city, 24)))}}</h3>
                        <p class="symbol">
                          <img src="{{url('public/assets/image/exhibition/'.$category->image)}}" alt="{{Str::limit($category->image, 24)}}">
                        </p>
                        <!-- <p class="number">52</p> -->
                        <!-- <p class="weight">127.6</p> -->
                      </a>
                    @endforeach
                </div>


              <div class="handheld-toolbar">
                <div class="d-table table-layout-fixed w-100">
                    @if($board == 'job')
                      <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'job'])}}">
                        <span class="handheld-toolbar-icon">
                        <i class="ci-filter-alt"></i></span>
                        <span class="handheld-toolbar-label">Job</span>
                      </a>
                      
                      <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.jobCreate')}}">
                        <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                        <span class="handheld-toolbar-label">Add</span>
                      </a>
                    @elseif($board == 'magazine')
                      <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'magazine'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label">Magazine</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">
                          <span class="handheld-toolbar-icon"><i class="bi bi"></i></span>
                          <span class="handheld-toolbar-label">Add</span>
                        </a>
                    @elseif($board == 'blog')

                        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'blog'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Blog</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.blogpost',[ 'board' => 'addBlog' ])}}">
                          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                          <span class="handheld-toolbar-label">Add</span>
                        </a>

                    @elseif($board == 'event')
                        
                        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Event</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
                          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                          <span class="handheld-toolbar-label">Add</span>
                        </a>
                    
                    @elseif($board == 'visitor')
                        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventadd')}}">
                          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                          <span class="handheld-toolbar-label">Add</span>
                        </a>
                    @elseif($board == 'client')
                        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'event'])}}">
                          <span class="handheld-toolbar-icon">
                          <i class="ci-filter-alt"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Visitor</span>
                        </a>
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
                          <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                          <span class="handheld-toolbar-label">Brand</span>
                        </a>
                    @endif
                        
                        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard', ['board' => 'visitcard'])}}">
                          <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
                          <span class="handheld-toolbar-label">Country</span>
                        </a>

                        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#citysidebar" role="button" aria-controls="offcanvasExample">
                          <span class="handheld-toolbar-icon">
                          <i class="bi bi-location"></i></span>
                          <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">City</span>
                        </a> 
                        
                        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                          <span class="handheld-toolbar-icon"><i class="bi bi-building"></i></span>
                          <span class="handheld-toolbar-label">Venue</span>
                        </a>
                  
                  <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="handheld-toolbar-icon"><i class=" bi bi-list"></i></span>
                    <span class="handheld-toolbar-label">Menu</span>
                  </a>

                </div>
              </div>
            
      </div>

</main>