@section('page_title','Expand Your Business')

@section('content_description','Sell Your Business ')
@section('content_keywords', 'Sell', 'Business', 'expansion')

@section('page_name',' All Job')
@section('page_path',' Job')
@section('page_list',' addJob')
@section('page_name',' All Job')

<!-- Custom CSS -->
<style>
  .custom-select {
    background-color: #1a1a1a;
    color: #fff;
    border: 1px solid #333;
  }

  .custom-select:focus {
    border-color: #00ff99;
    box-shadow: 0 0 5px rgba(0, 255, 153, 0.5);
  }

  .tag-btn {
    background-color: #1a1a1a;
    color: #fff;
    border: 1px solid #333;
    padding: 3px 7px;
    border-radius: 5px;
    font-size: 0.9rem;
    transition: 0.3s;
  }

  .tag-btn:hover {
    background-color: #00ff99;
    color: #000;
    border-color: #00ff99;
  }

  .search-bar input::placeholder {
    color: #aaa;
  }
</style>

<div class="py-4 d-none d-sm-block" style="background-color: #000;">
  <div class="container">

    <div class="row align-items-center mt-2">

      <!-- Left side: 70% -->
      <div class="col-12 col-md-8 d-flex align-items-center gap-3">
        <div class="h4 fw-bold text-white mb-0">
          Exhibitor and product search <span class="small fw-normal" style="color: #FF1628;">Business Events</span>
        </div>

        <div class="search-bar w-100">
          <input type="text" class="form-control bg-dark text-white border-0" placeholder="Search tournament by name">
        </div>
      </div>

      <!-- Right side: 30% -->
      <div class="col-12 col-md-4 d-flex justify-content-end gap-2 align-items-center">
        <select class="form-select custom-select w-auto">
          <option selected>Sort by: Event Date</option>
          <option>Most Viewed</option>
          <option>Top Teams</option>
        </select>
        <button class="btn btn-sm fw-bold px-4" style="color:#FF1628;">
          LIVE Business Events
        </button>
      </div>

    </div>


    @php
    $venueoption = DB::table('locations')->whereNotNull('venue')->orderBy('created_at','asc')->limit(10)->get();
    $allcategory = DB::table('categories')->get();
    @endphp

    <!-- Filter Section -->
    <div class="filter-box mt-2">
      <div class="row g-3">
        <div class="col-md-3">

          <select class="form-select custom-select">
            <option selected>All Industries</option>
            @foreach($allcategory as $category)
            <option>{{ ucwords($category->industry) }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-3">
          <select class="form-select custom-select">
            <option selected>All Cities</option>
            <option>Riot</option>
            <option>Valve</option>
          </select>
        </div>
        <div class="col-md-3">
          <select class="form-select custom-select">
            <option selected>All Venues</option>

            @foreach($venueoption as $franchise)
            <option>{{ucwords($franchise->venue)}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-3">
          <select class="form-select custom-select">
            <option selected>All Types</option>
            <option>Entry Free</option>
            <option>Rating</option>
            <option>Popular</option>
            <option>Trending</option>
            <option>Featured</option>
            <option>Industry Leader</option>
            <option>B2B focus</option>
            <option>Registration open</option>
            <option>Early Bird</option>
            <option>Upcoming</option>
            <option>New Event</option>
          </select>
        </div>

      </div>

      <!-- Tags -->
      <div class="mt-2 d-flex flex-wrap gap-1">
        <button class="tag-btn">Trending</button>
        <button class="tag-btn">International Trade</button>
        <button class="tag-btn">Business Supplies</button>
        <button class="tag-btn">Battle Royale</button>
        <button class="tag-btn">Collegiate</button>
      </div>
    </div>


  </div>
</div>

<div class="container">
  @if($board == 'normal')
    @php
      $exhibitordata = DB::table('participants')
      ->get()
      ->groupBy('event_id');

      $events = DB::table('events')
          ->pluck('eventname', 'id'); // id => name

    @endphp

   

    <div class="container my-3">
        <div class="masonry-grid">
            @foreach($exhibitordata as $eventId => $participants)
                <a
                    href="{{ route('expand.business', ['board' => 'exhibitor', 'event_id' => $eventId]) }}"
                    class="masonry-item p-3 border rounded border-primary bg-light"
                >
                    {{ $events[$eventId] ?? 'Unknown Event' }}
                    <span class="count">| {{ $participants->count() }}</span>
                </a>
            @endforeach
        </div>
    </div>


  @elseif ($board == 'exhibitor')

    @php
      $geteventexhibitors = DB::table('participants')->where('event_id', $this->event_id)->get();
    @endphp

    {{$this->event_id}} {{$geteventexhibitors->count()}}

    @foreach($geteventexhibitors as $exhibitor)
          
      @php
        $exhibitors = DB::table('brands')->where('id', $exhibitor->brand_id)->first();
      @endphp

      <div class="exhibitor-item border-bottom py-3">
        <div class="row align-items-center g-2">

          <div class="col-12 col-md-4">
            <a href="#"
              class="fw-semibold text-decoration-none text-dark">
              {{ $exhibitor->brand_id ?? '' }} {{$exhibitors->brand_name}}
            </a>
            <span class="text-muted small d-block">India</span>
          </div>

          <div class="col-12 col-md-4 d-flex justify-content-center">
            <img src="{{ $exhibitors->logo ?? '' }}" alt="{{ $exhibitors->brand_name }}">
          </div>

          <div class="col-12 col-md-4 text-md-end">
            <div class="small"><i class="bi bi-geo-alt"></i> {{ $exhibitors->hall ?? '' }}</div>
            <a href="#" class="small text-decoration-none"><i class="bi bi-star"></i> Favorites</a>
          </div>

        </div>
      </div>
    @endforeach
  @endif
</div>

<section class="container-fluid py-5 my-5 py-lg-5  ">
  <div class="text-center mt-4 mb-3">
    <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
    </div>
    <h2 class="display-5 fw-normal">Expand your Business</h2>
    <p class="col-md-6 col-lg-8  mx-auto lead">How to Transform Your Small Business Into a Big Business?</p>
    <a href="#opening" class="btn btn-lg btn-outline-primary mb-3">Strategize Market Expansion to your Business</a>
    <a class="btn btn-lg btn-outline-primary mb-3" href="{{url('/downloadExpand')}}"><i class="bi bi-arrow-up"></i></a>
  </div>
</section>

<!--Our culture and values-->
<section class="container py-3 py-lg-5 pt-5 mt-5 mb-3">
  <h2 class="display-5 text-center my-2">Optimize Online Opportunities, Offering </h2>
  <p class="fs-sm  text-center">Powered by #COI</p>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col col-md-3">
      <div class="card h-100  border-0">

        <div class="card-body text-center">
          <h5 class="card-title " style="color:#ff0440;">Reaching more people</h5>
          <p class="card-text">

            Market to the world, share business to customers ready to do business.
          </p>
        </div>
      </div>
    </div>
    <div class="col col-md-3">
      <div class="card h-100 border-0">

        <div class="card-body text-center">
          <h5 class="card-title " style="color:#ff0440;">Listen to your customers</h5>
          <p class="card-text">Power-up your selling efforts with us.</p>
        </div>
      </div>
    </div>

    <div class="col col-md-3">
      <div class="card h-100 border-0">

        <div class="card-body text-center">
          <h5 class="card-title " style="color:#ff0440;">Build on market trends</h5>
          <p class="card-text">Develop talent and keep skill-up.</p>
        </div>
      </div>
    </div>
    <div class="col col-md-3 ">
      <div class="card h-100 border-0">

        <div class="card-body text-center">
          <h5 class="card-title" style="color:#ff0440;">Go into new places</h5>
          <p class="card-text">Get social, starts with making the right connections.</p>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>

<!--Our culture and values-->
<section class="container py-3 py-lg-5 mt-4 mb-3">
  <div class="text-center mb-5">
    <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">


    </div>
    <!--<h2 class="lead" id="opening">OUR MISSION</h2>-->
    <p class="col-md-10 col-lg-8 mx-auto  display-6 fw-normal">
      Reach your business goals with COI Marketing Solutions.

    </p>
    <p class="fs-sm  text-center pb-2">When you market on COI, you reach customers ready to do business.
    </p>
    <a href="" class="btn btn-lg btn-outline-primary mb-3">Let's Connect!!</a>
  </div>


</section>
<!--vacancies-->

<!--jobs apply form-->
<section class="row g-0" id="apply">
  <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
    style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
  </div>
  <div class="col-md-6 px-3 px-md-5 py-5 order-md-1" id="jobapplication">
    <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

      <h2 class="display-5 text-center mb-2 ">
        Reaching more people
      </h2>

      <p class="fs-sm  text-center pb-2">
        People come to discover new business idea they search, including businesses like yours.
        , you can reach people who aren’t following you and inspire them to become your next customer.
        <br>
        digitalize your business with us to reach big set of customer, to drive actions that are relevant to your business.<br>
        Marketing on COI helps you engage a community of professionals to drive actions that are relevant to your business.
      </p>
      <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Let's connect!!</a>
    </div>
  </div>
</section>

<!--jobs apply form-->
<section class="row g-0" id="apply">
  <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-1"
    style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
  </div>
  <div class="col-md-6 px-3 px-md-5 py-5 order-md-2" id="jobapplication">
    <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

      <h2 class="display-5 text-center mb-2 ">
        Listen to your customers
      </h2>
      <p class="fs-sm  text-center pb-2">
        customer sends business request to your COI business account,track by calling, mailing and follow them.
        <br>
        Attract business customer, innovators and build brand awareness by posting business opportunities on a free COI Page.
      </p>
      <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Let's connect!!</a>
    </div>
  </div>
</section>

<!--jobs apply form-->
<section class="row g-0" id="apply">
  <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
    style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
  </div>
  <div class="col-md-6 px-3 px-md-5 py-5 order-md-1" id="jobapplication">
    <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

      <h2 class="display-5 text-center mb-2 ">
        Building on market trends
      </h2>
      <p class="fs-sm  text-center pb-2">
        login with our print and digital magazine, keep posting to become sensation trend into your business community and customers.<br>
        Marketing on COI helps you engage a community of professionals to drive actions that are relevant to your business.
      </p>
      <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Let's connect!!</a>
    </div>
  </div>
</section>

<!--jobs apply form-->
<section class="row g-0" id="apply">
  <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-1"
    style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
  </div>
  <div class="col-md-6 px-3 px-md-5 py-5 order-md-2" id="jobapplication">
    <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

      <h2 class="display-5 text-center mb-2 ">
        Go into new places
      </h2>
      <p class="fs-sm  text-center pb-2">
        list businss places with us, where you want to get high voltage business spark.<br>
        Attract business professionals, innovators and build brand awareness by posting business opportunities on a free COI Page.
      </p>
      <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Let's connect!!</a>
    </div>
  </div>
</section>

<!-- Why join-->
<section class="container py-3 py-lg-5 mt-5 my-3">
  <h2 class="h1 text-center mt-5">Promote your business with COI </h2>
  <p class="fs-lg lead text-center col-md-10 col-lg-8 mx-auto  ">At COI, we are constantly iterating, solving problems and working together to connect people all over the world.
    That’s why it’s important that our workforce reflects the diversity of the people we serve.
  </p>
  <div class="row row-cols-1 row-cols-md-3  pt-5 g-4">

    <div class="col col-md-3 col-lg-4">
      <div class="card h-100  border-0">
        <div class="card-body text-center">
          <h5 class="card-title" style="color:#ff0440;">Brand Search Campaigns</h5>
          <p class="card-text"> Show-up when people search for what you offer</p>
        </div>
      </div>
    </div>

    <div class="col col-md-3 col-lg-4">
      <div class="card h-100 border-0">
        <div class="card-body text-center">
          <h5 class="card-title" style="color:#ff0440;">Brand Display Campaigns</h5>
          <p class="card-text">Capture attention with brands ads and images</p>
        </div>
      </div>
    </div>

    <div class="col col-md-3 col-lg-4">
      <div class="card h-100 border-0">
        <div class="card-body text-center">
          <h5 class="card-title" style="color:#ff0440;">Brand Jourey Campagins</h5>
          <p class="card-text mb-0"> Bring your business's story to life</p><!-- with your journey story-->
          <p class="card-text"> Help people express themselves and connect</p>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="row g-0" id="apply">
  <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-1"
    style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?job,interview);">
  </div>
  <div class="col-md-6 px-3 px-md-5 py-5 order-md-2" id="jobapplication">
    <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">

      <h2 class="display-5 text-center mb-2 ">
        Business Magazine
      </h2>
      <p class="fs-sm  text-center pb-2">COI Business is free to use and was built with the small business owner in mind. It makes it easy to personally connect with your business ownerss, innovators and ready to business,
        highlight your business products and services, connect with answering their questions throughout their experience.
        Create a business portfolio to showcase your achievement and future aspects growth and
        use as special tools to automate interested business leads, sort and quickly respond to their interest.


      </p>
      <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Learn more about</a>
    </div>
  </div>
</section>

<section class="row g-0" id="apply">
  <div class="col-md-6 bg-position-center bg-size-cover bg-dark order-md-1"
    style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?business,interview);">
    <!--<div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-1"
           style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?business,interview);">-->
    <div class="mx-auto py-lg-5 my-5 text-white text-center" style="max-width: 35rem;">
      <p>BE SEEN</p>
      <h2 class="display-5 text-light mb-2 ">
        Business profile
      </h2>
      <p class="fw-light  mx-auto lead text-light pb-2">Create a business profile with helpful information for your business auidence like your Business Model, business description, email address, and website.
      </p>
      <a href="#opening" class="btn btn-lg  btn-outline-primary fw-bolder my-2">Learn more about</a>
    </div>
  </div>
  <div class="col-md-6 px-3 px-md-5 py-5 order-md-2" id="jobapplication">
    <div class="mx-auto py-lg-5 text-center" style="max-width: 35rem;">
      <p>Connect MORE, WORK LESS</p>
      <h2 class="display-5 text-center mb-2 ">

        Quick Community Connect

      </h2>
      <p class="fs-sm  text-center pb-2">Quick replies let you connect with descision makers, effective selling leads to turn easily cold calling into warm conversations.
      </p>
      <a href="#opening" class="btn btn-lg btn-outline-primary my-2">Learn more about</a>
    </div>
  </div>
</section>

<section class="container-fluid  py-3 py-lg-5 mt-5 my-3">
  <h2 class="h1 text-center mt-5">Manage your business success with us</h2>
  <p class="fs-lg lead text-center col-md-10 col-lg-8 mx-auto">
    Create, measure and optimize your business success. COI is the business advertising platform that streamlines all marketing efforts.
  </p>
  <div class="row row-cols-1 row-cols-md-3  pt-5 g-4">

    <!--<div class="col col-md-3 ">
                  <div class="card h-100 border-0">    
                    <div class="card-body">
                      <h5 class="card-title">Give People a Voice</h5>
                      <p class="card-text">
                             People deserve to be heard and to have a voice — even when that means defending the right of people we disagree with.
                            <br>
                            we a voice of entrpreneur — to advertise business thoughts with the best presentible way to explore new bright light to way up.
                            <br>
                            COI is a entrpreneur voice, be bold and strong to represent  business with confidence to  connect  right peaple to exapnd more. 
                          </p>
                      </div>
                      </div>
                      </div>-->

    <div class="col col-md-3">
      <div class="card h-100 border-0">
        <div class="card-body">
          <h5 class="card-title">Build Connection and Community</h5>
          <p class="card-text">
            Our services help people connect, and when they’re at their best, they bring Community closer together.
          </p>
        </div>
      </div>
    </div>

    <div class="col col-md-3">
      <div class="card h-100 border-0">
        <div class="card-body">
          <h5 class="card-title">Serve Everyone</h5>
          <p class="card-text">
            We work to make technology accessible to everyone, and our business model is advertise business so our services can be free.</p>
        </div>
      </div>
    </div>

    <div class="col col-md-3">
      <div class="card h-100 border-0">

        <div class="card-body">
          <h5 class="card-title">Keep Innovative Idea's Safe and Protect Privacy</h5>
          <p class="card-text">
            We have a responsibility to promote the best of what people can do together by keeping Innovation safe and preventing harm.</p>
        </div>
      </div>
    </div>

    <div class="col col-md-3">
      <div class="card h-100 border-0">

        <div class="card-body">
          <h5 class="card-title">Promote Economic Opportunity</h5>
          <p class="card-text">


            Our tools level the playing field so businesses grow, create jobs and strengthen the economy.
          </p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!--Freelancers-->
<section class="container py-3 py-lg-5 mt-4 mb-3">
  <div class="text-center">
    <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
    </div>
    <h2 class="display-6 fw-normal">Trending Industry</h2>
    <p class="col-md-10 col-lg-8 mx-auto lead">
      We occasionally work with freelancers on projects. If you would be interested, please
      <a href="">official Bootstrap Themes marketplace</a>.
    </p>
    <div class="container py-5 ">
      <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
        @foreach($cat as $type)
        <div class="col">
          <div class="p-3 border rounded border-primary bg-light">{{$type->industry}}</div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section class="row g-0 mb-2">
  <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2"
    style="min-height: 15rem; background-image: url(https://source.unsplash.com/535x535/?office,career);"></div>
  <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
    <div class="mx-auto py-lg-5" style="max-width: 35rem;">
      <div class="text-center">
        <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
        </div>
        <h2 class="display-6 fw-normal">Share your company story and attract your target auidence</h2>
        <p class="col-md-10 pb-2 col-lg-8 mx-auto ">
          Council of Innovation recognises the positive value of diversity, promotes equality and challenges discrimination. We welcome and encourage people of all backgrounds to apply. Our common trademark is our passion for innovation. </p>
        <a href="{{asset('/contact-us#contact')}}" class="btn btn-lg btn-outline-primary mb-3">Connect with us.</a>
      </div>

      <!--<h2 class="h3 mb-2">International top talent, valued for their getting-things-done-mentality.</h2>
              <p class="fs-sm text-muted pb-2">Council of Innovation recognises the positive value of diversity, promotes equality and challenges discrimination. We welcome and encourage people of all backgrounds to apply. Our common trademark is our passion for innovation.</p>-->

    </div>
  </div>
</section>