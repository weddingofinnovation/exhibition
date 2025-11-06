  <main>

    @if(Route::currentRouteName() === 'event.details')


    <!-- Mobile Header -->
    <header class="d-block d-md-none">
      <!-- <div class="container"> -->
      <!-- <div class="d-flex justify-content-between align-items-center">
          <h4 class="m-0">MySite</h4>
          <button class="btn btn-outline-light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu">
            Menu
          </button> 
        </div>-->

      <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="mobileMenu" data-bs-backdrop="true" data-bs-scroll="false">

        <div class="offcanvas-header border-bottom">
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Collapsible menu -->
        <div class="collapse mt-2" id="mobileMenuLinks">
          <ul class="list-group">
            <li class="list-group-item bg-dark text-white border-0">
              <a href="#" class="text-white text-decoration-none d-block">About</a>
              <small class="text-secondary d-block" style="font-size: 12px;">Learn more about our event overview and purpose.</small>
            </li>

            <li class="list-group-item bg-dark text-white border-0">
              <a href="#" class="text-white text-decoration-none d-block">Exhibitors & Products</a>
            </li>
            <li class="list-group-item bg-dark text-white border-0"><a href="#" class="text-white text-decoration-none">Themes & Events</a></li>
            <li class="list-group-item bg-dark text-white border-0"><a href="#" class="text-white text-decoration-none">Planning & Preparation</a></li>
            <li class="list-group-item bg-dark text-white border-0"><a href="#" class="text-white text-decoration-none">Exhibitor Services</a></li>
            <li class="list-group-item bg-dark text-white border-0"><a href="#" class="text-white text-decoration-none">Networking</a></li>
            <li class="list-group-item bg-dark text-white border-0"><a href="#" class="text-white text-decoration-none">Planning & Preparation</a></li>
            <li class="list-group-item bg-dark text-white border-0 border-bottom"><a href="#" class="text-white text-decoration-none">Buy Your Ticket</a></li>
            <li class="list-group-item bg-dark text-white border-0"><a href="#" class="text-white text-decoration-none">Get Involved</a></li>
          </ul>
        </div>

      </div>

      <!-- </div> -->
    </header>



    @elseif(Route::currentRouteName() === 'event.product')
    @elseif(Route::currentRouteName() === 'event.productreview')
    @elseif(Route::currentRouteName() === 'checkout')
    @elseif(Route::currentRouteName() === 'coicart')
    @elseif(Route::currentRouteName() === 'lead.business')
    @elseif(Route::currentRouteName() === 'lead.business.other')
    @elseif(Route::currentRouteName() === 'coi.exhibition')
    @elseif(Route::currentRouteName() === 'coi.ratenow')
    @elseif(Route::currentRouteName() === 'search.venue')
    @elseif(Route::currentRouteName() === 'award.details')
    @elseif(Route::currentRouteName() === 'coi.exhibitioncategory')
    @elseif(Route::currentRouteName() === 'business.magazine')
    <style>
      .font-poppins {
        font-family: 'Poppins', sans-serif;
      }

      .hero {
        background: url('https://source.unsplash.com/1600x900/?conference') center/cover no-repeat;
        color: white;
        padding: 100px 0;
        text-align: center;
      }

      .btn-primary {
        background-color: #e60012;
        border: none;
      }

      .hero-text-primary {
        color: #e60012;
      }

      .speakers img {
        width: 100px;
        border-radius: 50%;
      }

      .navbar-brand {
        font-weight: 700;
        font-size: 24px;
        text-transform: uppercase;
      }

      .navbar-nav .nav-link {
        font-size: 16px;
        font-weight: 500;
      }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light font-poppins">
      <div class="container">
        <a class="navbar-brand text-uppercase fs-5 lh-1" href="#">For <br>All<br> Summit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#about">2025 theme</a></li>
            <li class="nav-item"><a class="nav-link" href="#speakers">2025 Speakers</a></li>
            <li class="nav-item"><a class="nav-link" href="#register">Client Feedback</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">Why Attend</a></li>

            <li class="nav-item"><a class="nav-link" href="#speakers">Highlights</a></li>
            <li class="nav-item"><a class="nav-link" href="#register">Become Sponsor</a></li>

            <li class="nav-item"><a class="btn btn-sm btn-outline-primary my-2 text-uppercase" href="#register">Register</a></li>
          </ul>
        </div>
      </div>
    </nav>
    @else
    <header class="shadow-sm ">

      <div class="topbar topbar-dark bg-dark d-none d-md-block" style="padding: 3px; font-size: 12px; background-color: #000">
        <div class="container">
          <div>
            <div class="topbar-text dropdown disable-autohide">
              <a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="me-2" src="" width="20">India</a>
              <ul class="dropdown-menu my-1" style="">
                <!-- <li class="dropdown-item">
                    <select class="form-select form-select-sm">
                      <option value="usd">$ USD</option>
                      <option value="eur">€ EUR</option>
                      <option value="ukp">£ UKP</option>
                      <option value="jpy">¥ JPY</option>
                    </select>
                  </li> -->
                <li><a class="dropdown-item pb-1" href=""><img class="me-2" src="{{asset('image/5.png')}}" width="20" alt="Français">Switerland</a></li>
                <li><a class="dropdown-item pb-1" href=""><img class="me-2" src="{{asset('image/6.png')}}" width="20" alt="Deutsch">Canada</a></li>
                <li><a class="dropdown-item" href=""><img class="me-2" src="{{asset('image/7.png')}}" width="20" alt="Italiano">India</a></li>
              </ul>
            </div>
            <div class="topbar-text text-nowrap d-none d-md-inline-block border-start border-light ps-3 ms-3">
              <span class="text-muted me-1">Publish your Event at</span>
              <a class="topbar-link" href="tel:00331697720">(+91) 999-185-6776</a>
            </div>
          </div>
          <div class="topbar-text dropdown d-md-none ms-auto">
            <a class="topbar-link dropdown-toggle" href="" data-bs-toggle="dropdown">
              Our Data, Your Customer</a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href=""><i class=" bi bi-heart text-muted me-2"></i>Plan your Event ({{Cart::instance('wishlist')->count()}})</a></li>
              <li><a class="dropdown-item" href=""><i class="bi bi-shuffle text-muted me-2"></i>Be a Right People</a></li>
              <li><a class="dropdown-item" href=""><i class="ci-location text-muted me-2"></i>Book your Space</a></li>
            </ul>
          </div>

          <div class="d-none d-md-block ms-3 text-nowrap">
            <a class="topbar-link d-none d-md-inline-block" href=""><i class=" bi bi-heart mt-n1"></i>Plan your Event {{Cart::instance('wishlist')->count()}}</a>
            <a class="topbar-link ms-3 ps-3 border-start border-light d-none d-md-inline-block" href="">
              <i class="bi bi-shuffle mt-n1"></i>Be a Right People</a>
            <a class="topbar-link ms-3 border-start border-light ps-3 d-none d-md-inline-block" href="">
              <i class="bi bi-loaction mt-n1"></i>Book your Space</a>
          </div>

        </div>
      </div>

      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <div class="navbar-sticky bg-light">
        <div class="navbar navbar-expand-lg navbar-light py-0">
          <div class="container p-0">
            <a class="navbar-brand d-none d-sm-block  flex-shrink-0 mx-0" href="{{asset('/')}}"></a>
            <a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0 ml-1 py-0" href="{{asset('/')}}">
              <img src="{{asset('image/Yoyo.png')}}" width="142" alt="COI">
            </a>
            <a class="navbar-brand d-sm-none me-0 py-0 mr-0" href="{{asset('/')}}">
              <img src="{{asset('image/Yoyo.png')}}" width="130" alt="COI">
            </a>


            <div class="justify-content-end d-none d-md-block">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <!-- <a class="nav-link" href="{{asset('/exhibitions')}}">Great Exhibition To Exhibt</a> -->
                  <a class="nav-link" href="{{route('design.strategy')}}">Great Exhibition To Exhibt</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('expand.business')}}">Find Exhibitor</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{asset('/magazine')}}">List your Event</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{asset('/investment')}}">Plan your Event</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('buy.license')}}">Design & Fabrication</a>
                </li>

              </ul>
            </div>


            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
              <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">-->
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-tool navbar-stuck-toggler" href=""><span class="navbar-tool-tooltip">Toggle menu</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-list"></i></div>
              </a>
              @if(Route::has('login'))
              @auth
              @if(Auth::user()->utype === 'ADM')
              <div class=" ms-1 toggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <div class="navbar-tool ms-1">
                  <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">

                    <div class="rounded-circle">
                      <img class="rounded-circle" src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}" style="max-width: 50%;">
                    </div>

                    <div class="navbar-tool-text ms-n3"><small>Hello, </small>{{Auth::user()->name}}</div>
                  </a>
                  {{--<div class="dropdown-menu dropdown-menu-end">
                                          <div style="min-width: 14rem;">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item d-flex align-items-center {{'admin/dashboard' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="bi bi-dashboard opacity-60 me-2"></i>Dashboard</a>
                  <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href=""><i class="ci-settings opacity-60 me-2"></i>Profile</a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/entity' == request()->path() ? 'active' : '' }}" href="{{route('admin.info') }}"><i class="bi bi-sliders opacity-60 me-2"></i>Setting</a>
                  <div class="dropdown-divider"></div>
                  <h6 class="dropdown-header">Dashboard</h6>
                  <a class="dropdown-item d-flex align-items-center {{'admin/users' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="bi bi-people opacity-60 me-2"></i>Event<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/users' == request()->path() ? 'active' : '' }}" href="{{route('admin.user')}}"><i class="bi bi-people opacity-60 me-2"></i>User<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/categories' == request()->path() ? 'active' : '' }}" href="{{route('admin.categories')}}"><i class="bi bi-bookmark opacity-60 me-2"></i>Category<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/brands' == request()->path() ? 'active' : '' }}" href="{{route('admin.brand')}}"><i class="ci-dollar opacity-60 me-2"></i>Brand<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/dashboard' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="ci-dollar opacity-60 me-2"></i>Franchise<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/contacts' == request()->path() ? 'active' : '' }}" href="{{route('admin.contact')}}"><i class="bi bi-envelope opacity-60 me-2"></i>Contact<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <a class="dropdown-item d-flex align-items-center {{'admin/job/applicat' == request()->path() ? 'active' : '' }}" href="{{route('admin.resume')}}"><i class="bi bi-envelope opacity-60 me-2"></i>Resume<span class="fs-xs text-muted ms-auto">Active</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right opacity-60 me-2"></i>Sign Out</a>
                  <form id="logout-form" action="{{route('logout')}}" method="POST">
                    @csrf
                  </form>
                </div>
              </div>--}}
            </div>
          </div>

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 380px;">

            <div class="offcanvas-header">
              <div class="offcanvas-title h5" id="offcanvasExampleLabel">adminList your Show <br>
                <span class="fs-xs fw-lighter">Got an event? Partner with us</span>
              </div>

              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="list-group list-group-flush border-bottom scrollarea">

              <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Notifications</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
              </a>

              <a href="{{route('user.Orders')}}" class=" border-0 list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Your Orders</normal>
                  <small>
                    @if (Auth::check())
                    <i class="bi bi-chevron-right"></i>
                    @else
                    <i class="bi bi-lock-fill"></i>

                    @endif
                  </small>
                </div>
                <div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>
              </a>

              <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">COI Recommends</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter">Get COI business picked just for you</div>
              </a>

              <a href="{{route('admin.global')}}" class=" border-0 list-group-item list-group-item-action {{'admin/global' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Global</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">Satisfy your palates</div>
              </a>

              <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Luggage, Travel & Stay</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">Plan your business trip headache's</div>
              </a>

              <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Rewards</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">View your rewards & unlock new ones</div>
              </a>

              <a href="#" class="list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Offers</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">View your rewards & unlock new ones</div>
              </a>

              <a href="{{route('user.profile')}}" class="list-group-item list-group-item-action {{'user/profile' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Accounts & Settings</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">Location, Payments, permissions & More</div>
              </a>

              <a href="#" class="list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Help & Support</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
              </a>

              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Logout</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
              </a>
              <form id="logout-form" action="{{route('logout')}}" method="POST">
                @csrf
              </form>


            </div>

          </div>

          @elseif(Auth::user()->utype === 'SLR')
          <div class="navbar-tool dropdown ms-1">
            <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">
              <div class=" rounded-circle" style="width: 50%;">
                <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{Auth::user()->name}}" style="max-width: 50%;">
              </div>
              <div class="navbar-tool-text ms-n3"><small>Hello, </small>{{Auth::user()->name}}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-end">
              <div style="min-width: 14rem;">
                <h6 class="dropdown-header">Business Account</h6>
                <!-- <a class="dropdown-item d-flex align-items-center" href=""><i class="ci-settings opacity-60 me-2"></i>Account</a>-->
                <a class="dropdown-item d-flex align-items-center {{'seller/account' == request()->path() ? 'active' : '' }}" href="{{ route('seller.account') }}"><i class="ci-settings opacity-60 me-2"></i>Account</a>
                <a class="dropdown-item d-flex align-items-center {{'seller/dashboard' == request()->path() ? 'active' : '' }}" href="{{ route('seller.dashboard') }}"><i class="ci-settings opacity-60 me-2"></i>Dashboard</a>

                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Dashboard</h6>
                <a class="dropdown-item d-flex align-items-center {{'seller/profile' == request()->path() ? 'active' : '' }}" href="{{ route('seller.profile') }}"><i class="ci-settings opacity-60 me-2"></i>Profile</a>
                <a class="dropdown-item d-flex align-items-center {{'seller/brand' == request()->path() ? 'active' : '' }}" href="{{ route('seller.brand') }}"><i class="ci-settings opacity-60 me-2"></i>Brand</a>
                <a class="dropdown-item d-flex align-items-center {{'seller/franchise' == request()->path() ? 'active' : '' }}" href="{{ route('seller.franchise') }}"><i class="ci-settings opacity-60 me-2"></i>Franchise</a>
                <a class="dropdown-item d-flex align-items-center {{'seller/contact' == request()->path() ? 'active' : '' }}" href="{{ route('seller.contact') }}"><i class="ci-settings opacity-60 me-2"></i>Contact</a>
                <a class="dropdown-item d-flex align-items-center {{'seller/blog' == request()->path() ? 'active' : '' }}" href="{{ route('seller.blog') }}"><i class="ci-settings opacity-60 me-2"></i>Blog</a>
                <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{ route('seller.dashboard') }}"><i class="ci-settings opacity-60 me-2"></i>Search</a>
                <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{ route('seller.dashboard') }}"><i class="ci-settings opacity-60 me-2"></i>Actions</a>
                <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST">
                  @csrf
                </form>
              </div>
            </div>
          </div>
          @elseif(Auth::user()->utype === 'MSR')
          <div class="navbar-tool dropdown ms-1">
            <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">
              <div class=" rounded-circle" style="width: 50%;">
                <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="" style="max-width: 50%;">

              </div>
              <div class="navbar-tool-text ms-n3"><small>Hello, </small>{{Auth::user()->name}}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-end">
              <div style="min-width: 14rem;">
                <h6 class="dropdown-header">Basic Account</h6>
                <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('master.dashboard')}}"><i class="ci-settings opacity-60 me-2"></i>Dashboard</a>
                <!--<a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{ route('profile.show') }}"><i class="ci-settings opacity-60 me-2"></i>Profile</a>-->
                <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}"><i class="ci-basket opacity-60 me-2"></i>Categories</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST">
                  @csrf
                </form>
              </div>
            </div>
          </div>
          @elseif(Auth::user()->utype === 'EMP')
          <div class="navbar-tool dropdown ms-1">
            <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">
              <div class=" rounded-circle" style="width: 50%;"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="" style="max-width: 50%;"></div>
              <div class="navbar-tool-text ms-n3"><small>Hello, </small>{{Auth::user()->name}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <div style="min-width: 14rem;">
                <h6 class="dropdown-header">Account</h6>
                <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('user.account')}}"><i class="ci-settings opacity-60 me-2"></i>Account</a>
                <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href="{{route('employee.dashboard')}}"><i class="ci-settings opacity-60 me-2"></i>Mybrand</a>
                <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}"><i class="ci-basket opacity-60 me-2"></i>Categories</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST">@csrf</form>
              </div>
            </div>
          </div>
          @elseif(Auth::user()->utype === 'USR')
          <div class=" ms-1 toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUSR" aria-controls="offcanvasUSR">
            <div class="navbar-tool ms-1">
              <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="modal">

                <div class="rounded-circle">
                  <img class="rounded-circle" src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}" style="max-width: 50%;">
                </div>

                <div class="navbar-tool-text ms-n3"><small>Hello, </small>{{Auth::user()->name}}</div>
              </a>
              {{--<div class="dropdown-menu dropdown-menu-end">
                                          <div style="min-width: 14rem;">
                                            <h6 class="dropdown-header">Settings</h6>
                                            <a class="dropdown-item d-flex align-items-center {{'admin/dashboard' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="bi bi-dashboard opacity-60 me-2"></i>Dashboard</a>
              <a class="dropdown-item d-flex align-items-center {{'user/account' == request()->path() ? 'active' : '' }}" href=""><i class="ci-settings opacity-60 me-2"></i>Profile</a>
              <a class="dropdown-item d-flex align-items-center {{'admin/entity' == request()->path() ? 'active' : '' }}" href="{{route('admin.info') }}"><i class="bi bi-sliders opacity-60 me-2"></i>Setting</a>
              <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Dashboard</h6>
              <a class="dropdown-item d-flex align-items-center {{'admin/users' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="bi bi-people opacity-60 me-2"></i>Event<span class="fs-xs text-muted ms-auto">Active</span></a>
              <a class="dropdown-item d-flex align-items-center {{'admin/users' == request()->path() ? 'active' : '' }}" href="{{route('admin.user')}}"><i class="bi bi-people opacity-60 me-2"></i>User<span class="fs-xs text-muted ms-auto">Active</span></a>
              <a class="dropdown-item d-flex align-items-center {{'admin/categories' == request()->path() ? 'active' : '' }}" href="{{route('admin.categories')}}"><i class="bi bi-bookmark opacity-60 me-2"></i>Category<span class="fs-xs text-muted ms-auto">Active</span></a>
              <a class="dropdown-item d-flex align-items-center {{'admin/brands' == request()->path() ? 'active' : '' }}" href="{{route('admin.brand')}}"><i class="ci-dollar opacity-60 me-2"></i>Brand<span class="fs-xs text-muted ms-auto">Active</span></a>
              <a class="dropdown-item d-flex align-items-center {{'admin/dashboard' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard')}}"><i class="ci-dollar opacity-60 me-2"></i>Franchise<span class="fs-xs text-muted ms-auto">Active</span></a>
              <a class="dropdown-item d-flex align-items-center {{'admin/contacts' == request()->path() ? 'active' : '' }}" href="{{route('admin.contact')}}"><i class="bi bi-envelope opacity-60 me-2"></i>Contact<span class="fs-xs text-muted ms-auto">Active</span></a>
              <a class="dropdown-item d-flex align-items-center {{'admin/job/applicat' == request()->path() ? 'active' : '' }}" href="{{route('admin.resume')}}"><i class="bi bi-envelope opacity-60 me-2"></i>Resume<span class="fs-xs text-muted ms-auto">Active</span></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right opacity-60 me-2"></i>Sign Out</a>
              <form id="logout-form" action="{{route('logout')}}" method="POST">
                @csrf
              </form>
            </div>
          </div>--}}
        </div>
      </div>
      @endif
      @else
      <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="{{route('login')}}" data-bs-toggle="">
        <div class="navbar-tool-icon-box"><i class="navbar-tool-icon bi bi-person-circle"></i></div>
        <div class="navbar-tool-text ms-n3"><small>Hello, Sign in</small>My Account</div>
      </a>

      <!-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 380px;">
                            
                            <div class="offcanvas-header">
                              <div class="offcanvas-title h5" id="offcanvasExampleLabel">logoutList your Show <br>
                              <span class="fs-xs fw-lighter">Got an event? Partner with us</span></div>
                              
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                        
                            <div class="list-group list-group-flush border-bottom scrollarea">

                                <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">Notifications</normal>
                                    <small><i class="bi bi-chevron-right"></i></small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>
                                </a>

                                <a href="{{route('user.Orders')}}" class=" border-0 list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">Your Orders</normal>
                                    <small>
                                    @if (Auth::check()) 
                                      <i class="bi bi-chevron-right"></i>
                                      @else
                                      <i class="bi bi-lock-fill"></i>
                                      
                                      @endif
                                    </small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>
                                </a>

                                <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">COI Recommends</normal>
                                    <small><i class="bi bi-chevron-right"></i></small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter">Get COI business picked just for you</div>
                                </a>

                                <a href="{{route('admin.global')}}" class=" border-0 list-group-item list-group-item-action {{'admin/global' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">Global</normal>
                                    <small><i class="bi bi-chevron-right"></i></small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter ">Satisfy your palates</div>
                                </a>

                                <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">Luggage, Travel & Stay</normal>
                                    <small><i class="bi bi-chevron-right"></i></small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter ">Plan your business trip headache's</div>
                                </a>
                                                                              
                                <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">Rewards</normal>
                                    <small><i class="bi bi-chevron-right"></i></small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter ">View your rewards & unlock new ones</div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">Offers</normal>
                                    <small><i class="bi bi-chevron-right"></i></small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter ">View your rewards & unlock new ones</div>
                                </a>

                                <a href="{{route('user.profile')}}" class="list-group-item list-group-item-action {{'user/profile' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">Accounts & Settings</normal>
                                    <small><i class="bi bi-chevron-right"></i></small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter ">Location, Payments, permissions & More</div>
                                </a>
                                
                                <a href="#" class="list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                                  <div class="d-flex w-100 align-items-center justify-content-between">
                                    <normal class="mb-1">Help & Support</normal>
                                    <small><i class="bi bi-chevron-right"></i></small>
                                  </div>
                                  <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
                                </a>
                            </div>
                              
                        </div>  -->
      @endif

      @endif
      @livewire('wishlist-component')
      @livewire('cart-component')
      </div>

      </div>
      </div>

      <!-- <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2"> -->
      <!-- <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">-->
      <!-- Search-->
      <!--<div class="input-group d-lg-none my-3"><i class=" bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input class="form-control rounded-start" type="text" placeholder="Search for opportunity">
                </div> -->

      <!-- Departments menu-->
      <!-- <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ps-lg-0" href="" data-bs-toggle="dropdown">
                      <i class=" bi bi-list align-middle mt-n1 me-2"></i>Industry</a>
                      <ul class="dropdown-menu">
                        @foreach ($catego as $category)
                       
                          <li class="dropdown mega-dropdown">
                              <a class="dropdown-item" href="{{route('coi.exhibitioncategory',['time' => 'upcoming','eventype' => 'exhibition', 'categry' => $category->slug])}}">
                              <i class=" opacity-60 fs-lg mt-n1 me-2"></i> {{ucwords(trans($category->expoindustry))}}</a>
                              

                          {{--<li class="dropdown mega-dropdown">
                              <a class="dropdown-item dropdown-toggle" href="#{{$category->id}}" data-bs-toggle="dropdown">
                              <i class=" opacity-60 fs-lg mt-n1 me-2"></i> {{ucwords(trans($category->industry))}}</a>
                              
                            <div class="dropdown-menu p-0">
                              <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                            
                                <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                  <div class="widget widget-links">                     
                                    @foreach($category->sector as $seet)
                                      <h6 class="fs-base my-1" >
                                          <a href="{{route('coi.exhibitioncategory',['sector_slug'=> $seet->slug])}}">{{ucwords(trans($seet->sector))}}</a>
                                      </h6>
                                    
                                      <ul class="widget-list">
                                          @foreach($seet->service as $soet)
                                              <li class="widget-list-item py-0">
                                                <a class="widget-list-link" href="{{route('coi.exhibitioncategory',['sector_slug'=> $soet->slug])}}">
                                              {{ucwords(trans($soet->business))}}</a></li> 
                                          @endforeach
                                      </ul>
                                    @endforeach
                                  </div>
                                </div>
                              
                                <div class="mega-dropdown-column d-none d-lg-block py-4 text-center">
                                  @foreach($category->franchise as $soet)
                                    @if ($loop->first or $loop->iteration <= 3)
                                      <a class="d-block mb-2" href="{{route('franchise.details',['slug' => $soet->slug])}}"><img src="{{url('Storage/brands/'.$soet->image)}}" width="150" alt=""></a>
                                      <div class="fs-sm mb-3">Starting from <br><span class="fw-medium">{{$soet->min_investment}} Lac Investment </span></div>
                                    @endif
                                  @endforeach
                                    <a class="btn btn-primary btn-shadow btn-sm" href="{{asset('/franchise')}}">See offers<i class=" bi bi-chevron-right fs-xs ms-1"></i></a>
                                </div>
                              
                              </div>
                            </div>--}}

                          </li>
                        @endforeach 
                      </ul>
                  </li>
                </ul> -->
      <!--<ul class="navbar-nav">
                  <li  class="nav-item {{'/' == request()->path() ? 'active' : '' }}">
                  <a class="nav-link" href="{{asset('/') }}" >Home</a>
                  </li>

                  <li  class="nav-item {{'sell-your-business' == request()->path() ? 'active' : '' }}"">
                  <a class="nav-link" href="{{route('sell.business')}}">Exhibition Navigator</a>
                  </li>

                  <li  class="nav-item {{'expand-your-business' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('expand.business') }}" >Great Exhibition To Exhibit</a>
                  </li>

                  <li  class="nav-item {{'buy-a-brand-license' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('buy.license') }}" >Find Exhibitor</a>
                  </li>

                  <li  class="nav-item {{'buy-a-brand-license' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('buy.license') }}">Stall Design</a>
                  </li>

                  <li  class="nav-item {{'buy-a-brand-license' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('buy.license') }}">Online Contract Form</a>
                  </li>

                  <li  class=" nav-item dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="{{asset('/checkout')}}" data-bs-toggle="dropdown">Directory</a>
                     <ul class="dropdown-menu">
                      <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Business Design</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="{{route('design.strategy')}}">Directory Design Sprint</a></li>
                        </ul>
                      </li>
                      <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Strategy Design</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Insights & Growth</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Review & Rating</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Strategy sprint</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation transformation</a></li>
                          <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Future exploration</a></li>
                        </ul>
                      </li>
                    
                     </ul>
                  </li>

                  @if('exhibition' == request()->path() ? 'active' : '')
                    <li  class=" nav-item dropdown {{'exhibition' == request()->path() ? 'active' : '' }}">
                      <a class="nav-link dropdown-toggle" href="{{asset('/')}}" data-bs-toggle="dropdown">Exhibition</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Business Design</a>
                          <ul class="dropdown-menu">
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="{{route('design.strategy')}}">Business Design Sprint</a></li>
                            
                          </ul>
                        </li>
                        <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Strategy</a>
                          <ul class="dropdown-menu">
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Insights & growth strategy</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation & growth audit</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Strategy sprint</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation transformation</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Future exploration</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="">Franchise report</a></li>
                      </ul>
                    </li>
                  @endif
                       
                  
                </ul> -->

      <!-- <ul class="navbar-nav">
                  <li  class="nav-item {{'/' == request()->path() ? 'active' : '' }}">
                  <a class="nav-link" href="{{asset('/') }}" >Home</a>
                  </li>

                  <li  class="nav-item {{'product/great-exhibition-to-exhibit' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('service.product',['productservice' => 'great-exhibition-to-exhibit'])}}" >Great Exhibition To Exhibit</a>
                  </li>

                  <li  class="nav-item {{'product/exhibition-navigator' == request()->path() ? 'active' : '' }}"">
                    <a class="nav-link" href="{{route('service.product',['productservice' => 'exhibition-navigator'])}}">Exhibition Navigator</a>
                  </li>

                  <li  class="nav-item {{'product/find-exhibitor' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('service.product',['productservice' => 'find-exhibitor'])}}" >Find Exhibitor</a>
                  </li>

                  <li  class="nav-item {{'product/stall-fabrication' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('service.product',['productservice' => 'stall-fabrication'])}}">Stall Design</a>
                  </li>

                  <li  class="nav-item {{'product/online-contract-form' == request()->path() ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('service.product',['productservice' => 'online-contract-form'])}}">Online Contract Form</a>
                  </li> 

                  @if('exhibition' == request()->path() ? 'active' : '')
                    <li  class=" nav-item dropdown {{'exhibition' == request()->path() ? 'active' : '' }}">
                      <a class="nav-link dropdown-toggle" href="{{asset('/')}}" data-bs-toggle="dropdown">Exhibition</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Business Design</a>
                          <ul class="dropdown-menu">
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="{{route('design.strategy')}}">Business Design Sprint</a></li>
                            
                          </ul>
                        </li>
                        <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Strategy</a>
                          <ul class="dropdown-menu">
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Insights & growth strategy</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation & growth audit</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Strategy sprint</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation transformation</a></li>
                            <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Future exploration</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="">Franchise report</a></li>
                      </ul>
                    </li>
                  @endif
                       
                  
                </ul> -->
      <!-- </div>

            </div>
           </div> -->

      <!--test-->
      <div class="offcanvas offcanvas-end" data-bs-toggle="offcanvas" tabindex="-1" id="offcanvasRig" aria-labelledby="offcanvasRigLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasRightLabel">Add Event</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
            <!--<li  class="nav-item {{'/' == request()->path() ? 'active' : '' }}">
                  <a class="nav-link" href="{{asset('/') }}" >Home</a>
                  </li>-->
            <li class="nav-item {{'sell-your-business' == request()->path() ? 'active' : '' }}"">
                  <a class=" nav-link" href="{{route('sell.business')}}">Sell your Business</a>
            </li>

            <li class="nav-item {{'expand-your-business' == request()->path() ? 'active' : '' }}">
              <a class="nav-link" href="{{route('expand.business') }}">Expand your Business</a>
            </li>

            <li class="nav-item {{'buy-a-brand-license' == request()->path() ? 'active' : '' }}">
              <a class="nav-link" href="{{route('buy.license') }}">Buy a Brand License</a>
            </li>

            <li class=" nav-item dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="{{asset('/checkout')}}" data-bs-toggle="dropdown">Business Design & Strategy</a>
              <ul class="dropdown-menu">
                <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Business Design</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="{{route('design.strategy')}}">Business Design Sprint</a></li>

                  </ul>
                </li>
                <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Strategy Design</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Insights & growth strategy</a></li>
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation & growth audit</a></li>
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Strategy sprint</a></li>
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation transformation</a></li>
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Future exploration</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="">Franchise report</a></li>
              </ul>
            </li>

            @if('exhibition' == request()->path() ? 'active' : '')
            <li class=" nav-item dropdown {{'exhibition' == request()->path() ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="{{asset('/')}}" data-bs-toggle="dropdown">Exhibition</a>
              <ul class="dropdown-menu">
                <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Business Design</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="{{route('design.strategy')}}">Business Design Sprint</a></li>

                  </ul>
                </li>
                <li class="dropdown {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Strategy</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Insights & growth strategy</a></li>
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation & growth audit</a></li>
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Strategy sprint</a></li>
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Innovation transformation</a></li>
                    <li class="nav-item {{'business-design-strategy' == request()->path() ? 'active' : '' }}"><a class="dropdown-item" href="">Future exploration</a></li>
                  </ul>
                </li>
                <li><a class="dropdown-item" href="">Franchise report</a></li>
              </ul>
            </li>
            @endif


          </ul>
        </div>
      </div>

      <!--product stop-->
      <div class="offcanvas offcanvas-start" data-bs-toggle="offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 380px;">
        <div class=" ms-1 toggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">

          <div class="offcanvas-header">
            <div class="offcanvas-title fs-sm">
              <a href="{{route('coievent.add', ['board' => 'add-your-event'])}}">
                List your Show <br>
                <span class="fs-sm fw-lighter">Got an event? Partner with us</span>
              </a>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="list-group list-group-flush scrollarea">

            <a href="{{route('service.product',['productservice' => 'great-exhibition-to-exhibit'])}}" class=" border-0 list-group-item list-group-item-action {{'product/great-exhibition-to-exhibit' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Great Exhibition To Exhibit</normal>
                <small>certified</small>
              </div>
              <div class="col-10 mb-1 small fw-lighter">Did your event certified yet?</div>
            </a>

            <a href="{{route('service.product',['productservice' => 'exhibition-navigator'])}}" class=" border-0 list-group-item list-group-item-action {{'product/exhibition-navigator' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Exhibition Navigator</normal>
                <small>571 events</small>
              </div>
              <div class="col-10 mb-1 small fw-lighter">Premium Discounted Space</div>
            </a>

            <a href="{{route('service.product',['productservice' => 'find-exhibitor'])}}" class=" border-0 list-group-item list-group-item-action {{'product/find-exhibitor' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Find Exhibitor</normal>
                <small>1,000</small>
              </div>
              <div class="col-10 mb-1 small fw-lighter">Our Data, your Customer</div>
            </a>

            <a href="{{route('service.product',['productservice' => 'stall-fabrication'])}}" class=" border-0 list-group-item list-group-item-action {{'product/stall-fabrication' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Stall-fabrication</normal>
                <small>571</small>
              </div>
              <div class="col-10 mb-1 small fw-lighter">Find your theme</div>
            </a>

            <a href="{{route('service.product',['productservice' => 'contract-form'])}}" class="border-0 list-group-item list-group-item-action {{'contract-form' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Online Contract Form</normal>
                <small>Try it!</small>
              </div>
              <div class="col-10 mb-1 small fw-lighter ">Our online Contract form, design instant.</div>
            </a>

            <a href=mailto:"team@exhibition.org.in" class=" list-group-item list-group-item-action py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Talk to Team</normal>
              </div>
              <div class="col-10 mb-1 small fw-lighter">team@exhibition.org.in</div>
            </a>


            @if(Auth::check())
            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Logout</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="POST">
              @csrf
            </form>
            @endif

          </div>



          <div class="handheld-toolbar border-top-0">
            <div class="container py-4">
              <div class="col-sm-12 ">
                <div class="small fw-lighter">Exhibition Navigator</div>
                <small class="lh-1">Find <span class="fw-bold">Great Exhibition To Exhibit</span> certified upcoming exhibition, conference, awards, trade show.</small>
                <div class="bold text-primary fs-sm"> See what's new</div>
              </div>

              @if(Auth::check())
              <div class="col-sm-12 py-3">

              </div>

              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Logout</normal>
                  <a class="fw-normal text-accent fs-md lh-1" href="{{route('user.dashboard',['board'=> 'dashboard'])}}">Dashboard<i class="bi bi-right-chevron"></i> </a>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
              </a>
              <form id="logout-form" action="{{route('logout')}}" method="POST">
                @csrf
              </form>
              @else

              <div class="col-sm-12 py-3">
                <div class="fw-normal text-accent fs-md lh-1">Find Exhibitor<i class="bi bi-right-chevron"></i> </div>
              </div>


              @endif


            </div>
          </div>

        </div>
      </div>
      <!--stop-->

      <!-- secure <div class="offcanvas offcanvas-start" data-bs-toggle="offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 380px;">                  
                <div class=" ms-1 toggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">    

                  <div class="offcanvas-header">
                    <div class="offcanvas-title fs-sm">
                      <a href="{{route('coievent.add', ['board' => 'add-your-event'])}}">
                          Product List your Show <br>
                          <span class="fs-sm fw-lighter">Got an event? Partner with us</span>
                      </a>
                    </div>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button> 
                  </div>
                
                  <div class="list-group list-group-flush scrollarea">

                      <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <normal class="mb-1">Products</normal>
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        <div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>
                      </a>

                      @if(Auth::check())
                        <a href="{{route('user.Orders')}}" class=" border-0 list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                          <div class="d-flex w-100 align-items-center justify-content-between">
                            <normal class="mb-1">Your Orders</normal>
                            <small>
                            @if (Auth::check()) 
                              <i class="bi bi-chevron-right"></i>
                              @else
                              <i class="bi bi-lock-fill"></i>
                              
                              @endif
                            </small>
                          </div>
                          <div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>
                        </a>
                      @endif
                      {{--<a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <normal class="mb-1">COI Recommends</normal>
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        <div class="col-10 mb-1 small fw-lighter">Get COI business picked just for you</div>
                      </a>--}}

                      <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <normal class="mb-1">Resources</normal>
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        {{--<div class="col-10 mb-1 small fw-lighter ">View your rewards & unlock new ones</div>--}}
                      </a>

                      <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <normal class="mb-1">Inspiration</normal>
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        {{--<div class="col-10 mb-1 small fw-lighter ">Plan your business trip headache's</div>--}}
                      </a>
                                                                    
                      <a href="{{route('service.product',['productservice' => 'great-exhibition-to-exhibit'])}}" class=" border-0 list-group-item list-group-item-action {{'product/great-exhibition-to-exhibit' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <normal class="mb-1">Great Exhibition To Exhibit</normal>
                          <small>571</small>
                        </div>
                        <div class="col-10 mb-1 small fw-lighter">Did your event certified yet?</div>
                      </a>

                      <a href="{{route('service.product',['productservice' => 'great-exhibition-to-exhibit'])}}" class=" border-0 list-group-item list-group-item-action {{'product/great-exhibition-to-exhibit' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <normal class="mb-1">Great Exhibition To Exhibit</normal>
                          <small>571</small>
                        </div>
                        <div class="col-10 mb-1 small fw-lighter">Did your event certified yet?</div>
                      </a>

                      <a href="#" class="border-0 list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <normal class="mb-1">Exhibition Directory</normal>
                          <small>Try it!</small>
                        </div>
                        <div class="col-10 mb-1 small fw-lighter ">Our online Contract form, design instant.</div>
                      </a>

                      <a href="#" class=" list-group-item list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <normal class="mb-1">Talk to Sales</normal>
                        </div>
                      </a>


                      {{--<a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                              <normal class="mb-1">Offers</normal>
                              <small><i class="bi bi-chevron-right"></i></small>
                            </div>
                            <div class="col-10 mb-1 small fw-lighter ">View your rewards & unlock new ones</div>
                          </a>

                          <a href="{{route('user.profile')}}" class=" border-0 list-group-item list-group-item-action {{'user/profile' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                              <normal class="mb-1">Accounts & Settings</normal>
                              <small><i class="bi bi-chevron-right"></i></small>
                            </div>
                            <div class="col-10 mb-1 small fw-lighter ">Location, Payments, permissions & More</div>
                      </a>--}}
                      
                      @if(Auth::check())
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                          <div class="d-flex w-100 align-items-center justify-content-between">
                            <normal class="mb-1">Logout</normal>
                            <small><i class="bi bi-chevron-right"></i></small>
                          </div>
                          <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
                        </a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST">
                          @csrf
                        </form>
                      @endif

                          <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                              <normal class="mb-1">Help & Support</normal>
                              <small><i class="bi bi-chevron-right"></i></small>
                            </div>
                            <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
                          </a>
                  </div>
                  
                    

                  <div class="handheld-toolbar border-top-0">
                    <div class="container py-4">
                      <div class="col-sm-12 ">
                        <div class="small fw-lighter">Exhibition Navigator</div>
                        <small class="lh-1">Find <br>Great Exhibition To Exhibit<br> certified upcoming exhibition, conference, awards, trade show.</small>
                        <div class="bold text-primary fs-sm"> See what's new</div> 
                      </div>

                      @if(Auth::check())
                      <div class="col-sm-12 py-3">
                        
                      </div>

                      <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                          <div class="d-flex w-100 align-items-center justify-content-between">
                            <normal class="mb-1">Logout</normal>
                            <a class="fw-normal text-accent fs-md lh-1" href="{{route('user.dashboard',['board'=> 'dashboard'])}}">Dashboard<i class="bi bi-right-chevron"></i> </a>
                          </div>
                          <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
                        </a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST">
                          @csrf
                        </form>
                      @else
                      
                      <div class="col-sm-12 py-3">
                        <div class="fw-normal text-accent fs-md lh-1">Find Exhibitor<i class="bi bi-right-chevron"></i> </div>
                      </div>


                      @endif


                    </div>
                  </div>

                </div>
              </div> -->

      <!--USR stop-->
      <div class="offcanvas offcanvas-start" data-bs-toggle="offcanvas" tabindex="-1" id="offcanvasUSR" aria-labelledby="offcanvasRightLabel" style="width: 380px;">
        <div class=" ms-1 toggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">

          <div class="offcanvas-header">
            <div class="offcanvas-title fs-sm">
              <a href="{{route('coievent.add', ['board' => 'add-your-event'])}}">
                Usr Add your Event <br>
                <span class="fs-sm fw-lighter">Got an event? Partner with us</span>
              </a>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>


          <div class="list-group list-group-flush scrollarea">
            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Orders</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Wishlist</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Payment methods</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">My Reviews</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Personal info</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Addresses</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Notifications</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Help center</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

            <a href="{{route('user.dashboard', ['board' => 'dashboard'])}}" class=" border-0 list-group-item list-group-item-action {{'user/dashboard/dashboard' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
              <div class="d-flex w-100 align-items-center justify-content-between">
                <normal class="mb-1">Terms and conditions</normal>
                <small><i class="bi bi-chevron-right"></i></small>
              </div>
              <!--<div class="col-10 mb-1 small fw-lighter">View all your booking & purchases</div>-->
            </a>

          </div>


          <div class="handheld-toolbar border-top-0">
            <div class="container py-4">
              <div class="col-sm-12 ">
                <div class="small fw-lighter">Product updates</div>
                <small class="lh-1">Get the latest on new features, product improvement, and other announcements.</small>
                <div class="bold text-primary fs-sm"> See what's new</div>
              </div>

              @if(Auth::check())
              <div class="col-sm-12 py-3">
                <a class="fw-normal text-accent fs-md lh-1" href="{{route('user.dashboard',['board'=> 'dashboard'])}}">Dashboard<i class="bi bi-right-chevron"></i> </a>
              </div>
              @else
              <div class="col-sm-12 py-3">
                <div class="fw-normal text-accent fs-md lh-1">Start Free Trial <i class="bi bi-right-chevron"></i> </div>
              </div>
              @endif
              @if(Auth::check())
              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <normal class="mb-1">Logout</normal>
                  <small><i class="bi bi-chevron-right"></i></small>
                </div>
                <div class="col-10 mb-1 small fw-lighter ">View commonly asked Queries Chat</div>
              </a>
              <form id="logout-form" action="{{route('logout')}}" method="POST">
                @csrf
              </form>
              @endif

            </div>
          </div>

        </div>
      </div>
      <!--stop-->

      </div>

    </header>
    @endif
  </main>