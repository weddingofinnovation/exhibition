<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upcoming Events</title>
  <style>
    @media only screen and (max-width: 600px) {
      .container {
        width: 100% !important;
        padding: 10px !important;
      }
      .event-image {
        width: 100% !important;
        height: auto !important;
      }
    }
  </style>
</head>

<body style="margin:0; padding:0; background-color:#f5f5f5; font-family: Arial, sans-serif;">

        @php
            //$exhibition = DB::table('events')->where('status','1')->limit(7)->get();
            $exhibition = DB::table('events')->whereYear('startdate','>=','2024' )
                                  ->where('status','1')
                                  ->where('admstatus','1')
                                  ->whereMonth('startdate', $month)
                                  ->orderBy('startdate','ASC')->limit(7)
                                  ->get();
        @endphp
  <table align="center" cellpadding="0" cellspacing="0" width="100%" style="padding: 20px;">
    <tr>
      <td align="center">
        <table class="container" cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-radius: 10px; overflow: hidden;">
          
          <!-- Header -->
          <tr>
            <td align="center" style="background-color: #0d6efd; padding: 20px;">
              <h2 style="color: #ffffff; margin: 0;">🌟 Upcoming Events</h2>
              <p style="color: #ffffff; font-size: 14px; margin: 5px 0 0;">Don't miss out on these exciting opportunities!</p>
            </td>
          </tr>

          <!-- Event Card -->
          <tr>
            <td style="padding: 20px;">
            
              <!-- Repeat this block for each event -->
              @foreach ($exhibition as $franchise)
                <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 20px; border-bottom: 1px solid #eee;">
                    <tr>
                    <td width="100%" style="padding-bottom: 10px;">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="Event Image" class="event-image" style="width: 100%; border-radius: 6px;">
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <h3 style="margin: 0 0 5px;">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</h3>
                        <p style="margin: 0; font-size: 14px;">📍 <strong>{{ucfirst(trans($franchise->venue ?? 'not found'))}}</strong><br>🗓️ 
                            @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                            @else
                                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                            @endif 
                        </p>
                        <p style="margin: 10px 0; font-size: 13px; color: #444;">{{ucfirst(trans($franchise->city ?? 'not found'))}}</p>
                        <a href="{{route('event.details',['slug' => $franchise->slug])}}" style="background-color: #0d6efd; color: #ffffff; padding: 10px 15px; text-decoration: none; border-radius: 4px; font-size: 14px;">View Details</a>
                    </td>
                    </tr>
                </table>
              @endforeach
              <!-- End of event block -->
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td align="center" style="background-color: #f0f0f0; padding: 15px; font-size: 12px; color: #777;">
              You're receiving this email from <strong>The Exhibition Network</strong><br>
              📍 Delhi, India<br>
              📧 <a href="mailto:support@exhibition.org.in" style="color: #0d6efd;">support@exhibition.org.in</a><br>
              <p style="margin-top: 10px;"><a href="#" style="color: #888;">Unsubscribe</a> if you no longer wish to receive emails.</p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

</body>
</html>
