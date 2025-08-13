<main>
@section('page_title', 'Great Exhibition to Exhibit')
@section('page_description', 'Great Exhibtion To Exhibit, plan with rank and rating review your upcoming trade show, conference, awards  and get subsidies space to find right people at right time at right place')
@section('page_keyword',  'Exhibition Navigator, The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in')

    
      <div class="container">
    @foreach($descRankingViews as $franchise)
        <div class="row text-center p-2 gx-0 mb-2 shadow-sm border rounded border-1 align-items-center">
            
            {{-- Status --}}
            <div class="col-3 col-md-2 bg-dark text-light p-1">
                @php
                    $to = strtotime($franchise->startdate);
                    $from = strtotime($franchise->enddate);
                @endphp
                <div class="fs-xs fw-light mb-1">
                    @if ($current < $to && $current < $from)
                        Upcoming
                    @elseif ($current == $to && $current < $from) 
                        First Day
                    @elseif ($current > $to && $current < $from) 
                        Ongoing
                    @elseif ($current > $to && $current == $from) 
                        Last Day
                    @else
                        Ended
                    @endif
                </div>
                <div class="text-primary fw-bold fs-sm">{{$franchise->view_count}}</div> 
            </div>

            {{-- Event details --}}
            <div class="col-9 col-md-7 text-start p-2">
                <div class="fs-md fw-semibold">
                    <a class="text-dark" href="{{ route('adminevent.detail',['slug' => $franchise->slug]) }}">
                        {{ ucwords(trans(Str::limit($franchise->eventname, 24))) }}
                    </a>
                </div>
                <div class="text-muted fs-sm">
                    @if(Carbon\Carbon::parse($franchise->startdate)->format('M') != Carbon\Carbon::parse($franchise->enddate)->format('M'))
                        {{ Carbon\Carbon::parse($franchise->startdate)->format('D, d M') }} - {{ Carbon\Carbon::parse($franchise->enddate)->format('D, d M y') }}
                    @else
                        {{ Carbon\Carbon::parse($franchise->startdate)->format('D, d') }} - {{ Carbon\Carbon::parse($franchise->enddate)->format('D, d M y') }}
                    @endif
                </div>
            </div>

            {{-- Image --}}
            <div class="col-12 col-md-3 p-2 text-center">
                @if(is_null($franchise->image))
                    <a href="{{ route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image']) }}" class="btn btn-outline-primary btn-sm">Add Image</a>
                @else
                    <a href="{{ route('adminevent.detail',['slug' => $franchise->slug]) }}">
                        <img class="img-fluid rounded" style="max-height:100px; object-fit:cover;" 
                             src="{{ url('public/assets/image/exhibition/'.$franchise->image) }}" 
                             alt="{{ Str::limit($franchise->eventname, 24) }}">
                    </a>
                @endif
            </div>

        </div>
    @endforeach
</div>

    
</main>