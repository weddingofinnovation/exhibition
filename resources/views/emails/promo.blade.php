<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
  <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">

    <div style="background-color: #0d6efd; color: white; padding: 30px 20px; text-align: center;">
      <h2 style="margin: 0; font-size: 26px; letter-spacing: 0.5px;">🌟 Upcoming Events</h2>
      <p style="margin-top: 8px; font-size: 14px; opacity: 0.9;">Stay updated with our latest experiences and business opportunities!</p>
    </div>

    @php
      $exhibition = DB::table('events')
                      ->whereYear('startdate','>=','2024')
                      ->where('status','1')
                      ->where('admstatus','1')
                      ->whereMonth('startdate', $month)
                      ->orderBy('startdate','ASC')
                      ->limit(7)
                      ->get();
    @endphp

    @foreach ($exhibition as $franchise)
      <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="Event Image" style="width: 100%; max-height: 250px; object-fit: cover; display: block;">

      <div style="padding: 20px;">
        <h3 style="margin: 0 0 10px; font-size: 20px; color: #222; font-weight: 600;">{{ ucwords(trans(Str::limit($franchise->eventname, 30))) }}</h3>

        <p style="font-size: 14px; color: #555; line-height: 1.6; margin-bottom: 10px;">
          📍 {{ ucfirst(trans($franchise->venue ?? 'Not Available')) }}<br>
          🗓️ 
          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
            {{ Carbon\Carbon::parse ($franchise->startdate)->format('D, d M') }} - {{ Carbon\Carbon::parse ($franchise->enddate)->format('D, d M') }}
          @else
            {{ Carbon\Carbon::parse ($franchise->startdate)->format('D, d') }} - {{ Carbon\Carbon::parse ($franchise->enddate)->format('D, d M') }}
          @endif<br>
          🎯 Discover B2B Opportunities & Innovations
        </p>

        <p style="font-size: 14px; color: #444; margin-bottom: 20px;">
          Join top brands, emerging innovators, and industry leaders. Your gateway to future-ready networking and commerce.
        </p>

        <a href="{{ route('event.details', ['slug' => $franchise->slug]) }}" 
           style="display: inline-block; background-color: #0d6efd; color: #fff; padding: 10px 24px; border-radius: 6px; text-decoration: none; font-size: 14px;">
          View Event
        </a>
      </div>
    @endforeach

    <div style="background-color: #f8f9fa; text-align: center; padding: 18px 15px; font-size: 12px; color: #888;">
      The Exhibition Network<br>
      📧 support@exhibition.org.in<br>
      <a href="https://wa.me/91XXXXXXXXXX?text=Interested%20in%20Exhibition%20details" style="color: #0d6efd; text-decoration: none;">Chat on WhatsApp</a> | 
      <a href="#" style="color: #999; text-decoration: none;">Unsubscribe</a>
    </div>
  </div>
</body>


  <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">

      <div style="background-color: #0d6efd; color: white; padding: 20px; text-align: center;">
        <h2 style="margin: 0; font-size: 24px;">🌟 Upcoming Events</h2>
        <p style="margin: 5px 0 0;">Stay updated with our latest experiences!</p>
      </div>

        @php
            //$exhibition = DB::table('events')->where('status','1')->limit(7)->get();
            $exhibition = DB::table('events')->whereYear('startdate','>=','2024' )
                                  ->where('status','1')
                                  ->where('admstatus','1')
                                  ->whereMonth('startdate', $month)
                                  ->orderBy('startdate','ASC')->limit(7)
                                  ->get();
        @endphp


        @foreach ($exhibition as $franchise)

            <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="Event Image" style="width: 100%; height: auto; display: block;">

            <div style="padding: 20px;">
                <h3 style="margin: 0 0 10px; font-size: 20px; color: #333;">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</h3>
                <p style="font-size: 14px; color: #666; margin-bottom: 15px;">
                📍 {{ucfirst(trans($franchise->venue ?? 'not found'))}}<br>
                🗓️ @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                            @else
                                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                            @endif <br>
                🎯 Discover B2B Opportunities & Innovations
                </p>
                <p style="font-size: 14px; color: #555; margin-bottom: 20px;">
                    Join leading brands, tech innovators, and business minds. A must-attend event to explore partnerships and next-gen commerce!
                </p>
                <a href="{{route('event.details',['slug' => $franchise->slug])}}"" style="display: inline-block; background-color: #0d6efd; color: white; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-size: 14px;">View Event</a>
            </div>

        @endforeach


      <div style="background-color: #f0f0f0; text-align: center; padding: 15px; font-size: 12px; color: #777;">
        The Exhibition Network | 📧 support@exhibition.org.in<br>
        <a href="https://wa.me/91XXXXXXXXXX?text=Interested%20in%20Exhibition%20details" style="color:#0d6efd; text-decoration: none;">Chat on WhatsApp</a> |
        <a href="#" style="color:#888; text-decoration: none;">Unsubscribe</a>
      </div>

    </div>
  </body>


</html>
