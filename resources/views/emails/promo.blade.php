<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Upcoming Events</title>
  </head>
  <body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color: #f5f5f5;">
    <table align="center" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px; background:#ffffff; margin-top:20px;">
      <tr>
        <td align="center" bgcolor="#007BFF" style="padding: 20px 0; color: #fff; font-size: 24px; font-weight: bold; border-radius: 8px 8px 0 0;">
          Upcoming Events
        </td>
      </tr>

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

            <!-- Event 1 -->
            <tr>
                <td style="padding: 20px;">
                <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                    <td style="width: 40%; padding-right: 15px;">
                        <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="Vodafone" style="width: 100%; border-radius: 6px;" />
                    </td>
                    <td style="width: 60%;">
                        <h3 style="margin:0 0 5px 0;">{{ ucwords(trans(Str::limit($franchise->eventname, 30))) }}</h3>
                        <p style="margin:0;">{{ ucfirst(trans($franchise->venue ?? 'Not Available')) }}</p>
                        <!-- <p style="margin:0;">October 15–17, 2024</p> -->
                        <p style="margin:10px 0;">Asia’s premier mobile and digital technology event.</p>
                        <a href="{{ route('event.details', ['slug' => $franchise->slug]) }}" style="background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold;">View Details</a>
                    </td>
                    </tr>
                </table>
                </td>
            </tr>
            <tr><td><hr style="border:none; border-top:1px solid #ddd;" /></td></tr>

        @endforeach
      
      <!-- Footer -->
      <tr>
        <td style="padding: 20px; font-size: 14px;">
          <table width="100%">
            <tr>
              <td style="width: 70%;">
                <strong>The Exhibition Network</strong><br/>
                New Delhi, India<br/>
                <a href="mailto:info@exhibition.org.in">info@exhibition.org.in</a>
              </td>
              <td align="right" style="width: 30%;">
                <strong>Register Online</strong><br/>
                <img src="https://via.placeholder.com/80x80?text=QR" alt="QR Code" style="width: 80px;" />
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td align="center" style="padding: 10px; font-size: 12px; color: #888;">
          <a href="#" style="color: #888; text-decoration: none;">Unsubscribe</a>
        </td>
      </tr>
    </table>
  </body>
</html>

