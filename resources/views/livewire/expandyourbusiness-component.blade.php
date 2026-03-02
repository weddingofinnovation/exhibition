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

  <style>
    .masonry-grid {
    column-count: 6;
    column-gap: 12px;
      }

      .masonry-item {
          display: inline-block;
          width: 100%;
          margin-bottom: 12px;

          padding: 10px 14px;
          border: 1px solid #000;
          border-radius: 6px;
          background-color: #f8f9fa;

          color: #000;
          font-size: 14px;
          text-decoration: none;
          line-height: 1.4;

          transition: all 0.2s ease;
      }

      .masonry-item:hover {
          background-color: #000;
          color: #ffffff;
      }

      .masonry-item .count {
          font-weight: 600;
      }

      /* Responsive */
      @media (max-width: 1200px) {
          .masonry-grid { column-count: 4; }
      }
      @media (max-width: 992px) {
          .masonry-grid { column-count: 3; }
      }
      @media (max-width: 768px) {
          .masonry-grid { column-count: 2; }
      }
      @media (max-width: 576px) {
          .masonry-grid { column-count: 1; }
      }

  </style>

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
                    class="masonry-item"
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
              {{ $exhibitor->brand_id ?? '' }} {{$exhibitors->brand_name ?? ''}} 
            </a>
            <span class="text-muted small d-block" >India</span> 
          </div>

          <div class="col-12 col-md-4 d-flex justify-content-center">
            <img src="{{ $exhibitors->logo ?? '' }}" alt="{{ $exhibitors->brand_name ?? ''}}">
          </div>

          @auth
              @if(auth()->user()->utype === 'ADM')
                  <a href="#" wire:click.prevent="delete({{ $exhibitor->id }})" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                          class="btn btn-danger btn-sm">
                      Delete - {{$exhibitor->id}}
                  </a> 
              @endif
          @endauth

          <div class="col-12 col-md-4 text-md-end">
            <div class="small"><i class="bi bi-geo-alt"></i> {{ $exhibitors->hall ?? '' }}</div>
            <a href="#" class="small text-decoration-none"><i class="bi bi-star"></i> Favorites</a>
          </div>

        </div>
      </div>
    @endforeach
  @endif
</div>