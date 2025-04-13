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
        $exhibitioon = DB::table('events')
                        ->whereYear('startdate','>=','2024')
                        ->where('status','1')
                        ->where('admstatus','1')
                        ->whereMonth('startdate', $month)
                        ->orderBy('startdate','ASC')
                        ->limit(5)
                        ->get();
      @endphp
      @foreach ($exhibitioon as $franchisel)
        <tr>
            <td style="padding: 20px;">
            <table width="100%" cellpadding="0" cellspacing="0" style="vertical-align: top;">
                <tr>
                @if($loop->iteration % 2 != 0)
                    <!-- Image Left -->
                    <td style="width: 40%; padding-right: 15px;">
                    <img src="{{url('public/assets/image/exhibition/'.$franchisel->image)}}" alt="Event Image" style="width: 100%; border-radius: 6px;" />
                    </td>
                    <td style="width: 60%;">
                    <h3 style="margin:0 0 5px 0;">{{ ucwords(trans(Str::limit($franchisel->eventname, 30))) }}</h3>
                    <p style="margin:0;">{{ ucfirst(trans($franchisel->venue ?? 'Not Available')) }}</p>
                    <p style="margin:10px 0;">Asia’s premier mobile and digital technology event.</p>
                    <a href="{{ route('event.details', ['slug' => $franchisel->slug]) }}" style="display:inline-block; background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold;">View Details</a>
                    </td>
                @else
                    <!-- Image Right -->
                    <td style="width: 60%;">
                    <h3 style="margin:0 0 5px 0;">{{ ucwords(trans(Str::limit($franchisel->eventname, 30))) }}</h3>
                    <p style="margin:0;">{{ ucfirst(trans($franchisel->venue ?? 'Not Available')) }}</p>
                    <p style="margin:10px 0;">Asia’s premier mobile and digital technology event.</p>
                    <a href="{{ route('event.details', ['slug' => $franchisel->slug]) }}" style="display:inline-block; background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold;">View Details</a>
                    </td>
                    <td style="width: 40%; padding-left: 15px;">
                    <img src="{{url('public/assets/image/exhibition/'.$franchisel->image)}}" alt="Event Image" style="width: 100%; border-radius: 6px;" />
                    </td>
                @endif
                </tr>
            </table>
            </td>
        </tr>
        <tr><td><hr style="border:none; border-top:1px solid #ddd;" /></td></tr>
      @endforeach


      <tr>
        <td style="padding: 20px; background-color: #f0f8ff; text-align: center;">
          <p style="margin: 10px 0; font-size: 14px;">
            Want to see events for a different location? 
            <a href="{{ url('/update-location') }}" style="color: #007BFF; text-decoration: none;">Update location</a>.
          </p>
        </td>
      </tr>

      @php
        $exhibition = DB::table('events')
                        ->whereYear('startdate','>=','2024')
                        ->where('status','1')
                        ->where('admstatus','1')
                        ->whereMonth('startdate', $month)
                        ->orderBy('startdate','ASC')
                        ->limit(3)
                        ->get();
      @endphp

      @foreach ($exhibition as $franchise)
        <tr>
          <td style="padding: 20px;">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td style="width: 40%; padding-right: 15px;">
                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="Event Image" style="width: 100%; border-radius: 6px;" />
                </td>
                <td style="width: 60%;">
                  <h3 style="margin:0 0 5px 0;">{{ ucwords(trans(Str::limit($franchise->eventname, 30))) }}</h3>
                  <p style="margin:0;">{{ ucfirst(trans($franchise->venue ?? 'Not Available')) }}</p>
                  <p style="margin:10px 0;">Asia’s premier mobile and digital technology event.</p>
                  <a href="{{ route('event.details', ['slug' => $franchise->slug]) }}" style="background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold;">View Details</a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr><td><hr style="border:none; border-top:1px solid #ddd;" /></td></tr>
      @endforeach

      <!-- Update location and category message -->
      <tr>
        <td style="padding: 20px; background-color: #f0f8ff; text-align: center;">
          <p style="margin: 10px 0; font-size: 14px;">
            Not seeing relevant events? 
            <a href="{{ url('/update-categories') }}" style="color: #007BFF; text-decoration: none;">Change what categories you like</a>.
          </p>
        </td>
      </tr>

      


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
    
    <div style="margin: 0; padding: 0; font-family: Arial, sans-serif; background: #f4f4f4;">
        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff;">
            
            <!-- Profile Card Section -->
            <tr>
            <td style="padding: 20px;">
                <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <!-- Card 1 -->
                    <td style="width: 50%; padding: 10px;">
                    <table style="border: 1px solid #ddd; border-radius: 12px; padding: 15px; width: 100%; text-align: center;">
                        <tr>
                        <td>
                            <img src="https://via.placeholder.com/80" alt="Profile" style="border-radius: 50%; margin-bottom: 10px;" />
                        </td>
                        </tr>
                        <tr>
                        <td style="font-weight: bold;">Sonal Gupta</td>
                        </tr>
                        <tr>
                        <td style="font-size: 14px; color: #555;">Soft Skills Coach & Corporate Trainer</td>
                        </tr>
                        <tr>
                        <td style="padding-top: 10px; font-size: 12px; color: #888;">
                            👥 20 mutual connections
                        </td>
                        </tr>
                        <tr>
                        <td style="padding-top: 10px;">
                            <a href="#" style="display: inline-block; padding: 8px 16px; background-color: #0a66c2; color: #ffffff; text-decoration: none; border-radius: 20px; font-size: 14px;">Connect</a>
                        </td>
                        </tr>
                    </table>
                    </td>

                    <!-- Card 2 -->
                    <td style="width: 50%; padding: 10px;">
                    <table style="border: 1px solid #ddd; border-radius: 12px; padding: 15px; width: 100%; text-align: center;">
                        <tr>
                        <td>
                            <img src="https://via.placeholder.com/80" alt="Profile" style="border-radius: 50%; margin-bottom: 10px;" />
                        </td>
                        </tr>
                        <tr>
                        <td style="font-weight: bold;">Shubham Kumar Singh</td>
                        </tr>
                        <tr>
                        <td style="font-size: 14px; color: #555;">Pursuing PGDM Dual Specialisation</td>
                        </tr>
                        <tr>
                        <td style="padding-top: 10px; font-size: 12px; color: #888;">
                            👥 1 mutual connection
                        </td>
                        </tr>
                        <tr>
                        <td style="padding-top: 10px;">
                            <a href="#" style="display: inline-block; padding: 8px 16px; background-color: #0a66c2; color: #ffffff; text-decoration: none; border-radius: 20px; font-size: 14px;">Connect</a>
                        </td>
                        </tr>
                    </table>
                    </td>
                </tr>
                </table>
            </td>
            </tr>

            <!-- Footer -->
            <tr>
            <td style="padding: 20px; font-size: 12px; color: #777; text-align: center;">
                This email was intended for K Roy (Corporate Communication Manager)<br />
                <a href="#" style="color: #0073b1; text-decoration: none;">Learn why we included this</a><br /><br />
                You are receiving this email because members like you have also taken these actions.<br />
                <a href="#" style="color: #0073b1; text-decoration: none;">Unsubscribe</a> • <a href="#" style="color: #0073b1; text-decoration: none;">Help</a><br /><br />
                <strong>LinkedIn</strong><br />
                © 2025 LinkedIn Corporation, 1000 West Maude Avenue, Sunnyvale, CA 94085.<br />
            </td>
            </tr>

        </table>
    </div>

  </body>
  <body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color: #f5f5f5;">
    
    <table align="center" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px; background:#ffffff; margin-top:20px;">
      <tr>
        <td align="center" bgcolor="#007BFF" style="padding: 20px 0; color: #fff; font-size: 24px; font-weight: bold; border-radius: 8px 8px 0 0;">
          Upcoming Events
        </td>
      </tr>

      @php
        $exhibitioon = DB::table('events')
                        ->whereYear('startdate','>=','2024')
                        ->where('status','1')
                        ->where('admstatus','1')
                        ->whereMonth('startdate', $month)
                        ->orderBy('startdate','ASC')
                        ->limit(5)
                        ->get();
      @endphp
      @foreach ($exhibitioon as $franchisel)
        <tr>
            <td style="padding: 20px;">
            <table width="100%" cellpadding="0" cellspacing="0" style="vertical-align: top;">
                <tr>
                @if($loop->iteration % 2 != 0)
                    <!-- Image Left -->
                    <td style="width: 40%; padding-right: 15px;">
                    <img src="{{url('public/assets/image/exhibition/'.$franchisel->image)}}" alt="Event Image" style="width: 100%; border-radius: 6px;" />
                    </td>
                    <td style="width: 60%;">
                    <h3 style="margin:0 0 5px 0;">{{ ucwords(trans(Str::limit($franchisel->eventname, 30))) }}</h3>
                    <p style="margin:0;">{{ ucfirst(trans($franchisel->venue ?? 'Not Available')) }}</p>
                    <p style="margin:10px 0;">Asia’s premier mobile and digital technology event.</p>
                    <a href="{{ route('event.details', ['slug' => $franchisel->slug]) }}" style="display:inline-block; background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold;">View Details</a>
                    </td>
                @else
                    <!-- Image Right -->
                    <td style="width: 60%;">
                    <h3 style="margin:0 0 5px 0;">{{ ucwords(trans(Str::limit($franchisel->eventname, 30))) }}</h3>
                    <p style="margin:0;">{{ ucfirst(trans($franchisel->venue ?? 'Not Available')) }}</p>
                    <p style="margin:10px 0;">Asia’s premier mobile and digital technology event.</p>
                    <a href="{{ route('event.details', ['slug' => $franchisel->slug]) }}" style="display:inline-block; background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold;">View Details</a>
                    </td>
                    <td style="width: 40%; padding-left: 15px;">
                    <img src="{{url('public/assets/image/exhibition/'.$franchisel->image)}}" alt="Event Image" style="width: 100%; border-radius: 6px;" />
                    </td>
                @endif
                </tr>
            </table>
            </td>
        </tr>
        <tr><td><hr style="border:none; border-top:1px solid #ddd;" /></td></tr>
      @endforeach


      <tr>
        <td style="padding: 20px; background-color: #f0f8ff; text-align: center;">
          <p style="margin: 10px 0; font-size: 14px;">
            Want to see events for a different location? 
            <a href="{{ url('/update-location') }}" style="color: #007BFF; text-decoration: none;">Update location</a>.
          </p>
        </td>
      </tr>

      @php
        $exhibition = DB::table('events')
                        ->whereYear('startdate','>=','2024')
                        ->where('status','1')
                        ->where('admstatus','1')
                        ->whereMonth('startdate', $month)
                        ->orderBy('startdate','ASC')
                        ->limit(3)
                        ->get();
      @endphp

      @foreach ($exhibition as $franchise)
        <tr>
          <td style="padding: 20px;">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td style="width: 40%; padding-right: 15px;">
                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="Event Image" style="width: 100%; border-radius: 6px;" />
                </td>
                <td style="width: 60%;">
                  <h3 style="margin:0 0 5px 0;">{{ ucwords(trans(Str::limit($franchise->eventname, 30))) }}</h3>
                  <p style="margin:0;">{{ ucfirst(trans($franchise->venue ?? 'Not Available')) }}</p>
                  <p style="margin:10px 0;">Asia’s premier mobile and digital technology event.</p>
                  <a href="{{ route('event.details', ['slug' => $franchise->slug]) }}" style="background-color: #007BFF; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 6px; font-weight: bold;">View Details</a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr><td><hr style="border:none; border-top:1px solid #ddd;" /></td></tr>
      @endforeach

      <!-- Update location and category message -->
      <tr>
        <td style="padding: 20px; background-color: #f0f8ff; text-align: center;">
          <p style="margin: 10px 0; font-size: 14px;">
            Not seeing relevant events? 
            <a href="{{ url('/update-categories') }}" style="color: #007BFF; text-decoration: none;">Change what categories you like</a>.
          </p>
        </td>
      </tr>

      


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
    
    <div style="margin: 0; padding: 0; font-family: Arial, sans-serif; background: #f4f4f4;">
        <table align="center" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff;">
            
            <!-- Profile Card Section -->
            <tr>
            <td style="padding: 20px;">
                <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <!-- Card 1 -->
                    <td style="width: 50%; padding: 10px;">
                    <table style="border: 1px solid #ddd; border-radius: 12px; padding: 15px; width: 100%; text-align: center;">
                        <tr>
                        <td>
                            <img src="https://via.placeholder.com/80" alt="Profile" style="border-radius: 50%; margin-bottom: 10px;" />
                        </td>
                        </tr>
                        <tr>
                        <td style="font-weight: bold;">Sonal Gupta</td>
                        </tr>
                        <tr>
                        <td style="font-size: 14px; color: #555;">Soft Skills Coach & Corporate Trainer</td>
                        </tr>
                        <tr>
                        <td style="padding-top: 10px; font-size: 12px; color: #888;">
                            👥 20 mutual connections
                        </td>
                        </tr>
                        <tr>
                        <td style="padding-top: 10px;">
                            <a href="#" style="display: inline-block; padding: 8px 16px; background-color: #0a66c2; color: #ffffff; text-decoration: none; border-radius: 20px; font-size: 14px;">Connect</a>
                        </td>
                        </tr>
                    </table>
                    </td>

                    <!-- Card 2 -->
                    <td style="width: 50%; padding: 10px;">
                    <table style="border: 1px solid #ddd; border-radius: 12px; padding: 15px; width: 100%; text-align: center;">
                        <tr>
                        <td>
                            <img src="https://via.placeholder.com/80" alt="Profile" style="border-radius: 50%; margin-bottom: 10px;" />
                        </td>
                        </tr>
                        <tr>
                        <td style="font-weight: bold;">Shubham Kumar Singh</td>
                        </tr>
                        <tr>
                        <td style="font-size: 14px; color: #555;">Pursuing PGDM Dual Specialisation</td>
                        </tr>
                        <tr>
                        <td style="padding-top: 10px; font-size: 12px; color: #888;">
                            👥 1 mutual connection
                        </td>
                        </tr>
                        <tr>
                        <td style="padding-top: 10px;">
                            <a href="#" style="display: inline-block; padding: 8px 16px; background-color: #0a66c2; color: #ffffff; text-decoration: none; border-radius: 20px; font-size: 14px;">Connect</a>
                        </td>
                        </tr>
                    </table>
                    </td>
                </tr>
                </table>
            </td>
            </tr>

        <div style="margin: 0; padding: 0; font-family: Arial, sans-serif; background: #f4f4f4;">
  <table align="center" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff;">
    <!-- Heading -->
    <tr>
      <td style="padding: 20px 20px 0; font-size: 18px; font-weight: bold; color: #333;">
        Business Details
      </td>
    </tr>

    <!-- Business Table -->
    <tr>
      <td style="padding: 20px;">
        <table cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; border: 1px solid #ddd; border-radius: 12px; overflow: hidden;">
          <tr style="background-color: #f4f4f4;">
            <th style="padding: 12px; font-size: 14px; color: #333; border-bottom: 1px solid #ddd; text-align: left;">Field</th>
            <th style="padding: 12px; font-size: 14px; color: #333; border-bottom: 1px solid #ddd; text-align: left;">Details</th>
          </tr>

          <tr>
            <td style="padding: 10px; font-size: 14px; color: #555;">Business Name</td>
            <td style="padding: 10px; font-size: 14px; color: #000;">The Exhibition Network</td>
          </tr>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; font-size: 14px; color: #555;">Core Offering</td>
            <td style="padding: 10px; font-size: 14px; color: #000;">Event Management, Brand Integration</td>
          </tr>
          <tr>
            <td style="padding: 10px; font-size: 14px; color: #555;">Clients</td>
            <td style="padding: 10px; font-size: 14px; color: #000;">LG, AMD, Vodafone, Organic India</td>
          </tr>
          <tr style="background-color: #f9f9f9;">
            <td style="padding: 10px; font-size: 14px; color: #555;">Membership Offers</td>
            <td style="padding: 10px; font-size: 14px; color: #000;">Free 6-month with B2C/B2B participation</td>
          </tr>
          <tr>
            <td style="padding: 10px; font-size: 14px; color: #555;">Email Support</td>
            <td style="padding: 10px; font-size: 14px; color: #0a66c2;"><a href="mailto:hello@exhibitionnetwork.com" style="color: #0a66c2; text-decoration: none;">hello@exhibitionnetwork.com</a></td>
          </tr>
        </table>
      </td>
    </tr>

    <!-- Call to Action -->
    <tr>
      <td style="padding: 0 20px 20px; text-align: center;">
        <a href="#" style="display: inline-block; padding: 10px 24px; background-color: #0a66c2; color: #ffffff; text-decoration: none; border-radius: 20px; font-size: 14px; font-weight: bold;">Join the Network</a>
      </td>
    </tr>

    <!-- Footer -->
    <tr>
      <td style="padding: 20px; font-size: 12px; color: #777; text-align: center;">
        You’re receiving this email as part of our B2B outreach program.<br />
        <a href="#" style="color: #0073b1; text-decoration: none;">Unsubscribe</a> • <a href="#" style="color: #0073b1; text-decoration: none;">Contact Us</a><br /><br />
        <strong>The Exhibition Network</strong><br />
        © 2025 The Exhibition Network, All rights reserved.
      </td>
    </tr>
  </table>
</div>


            <!-- Footer -->
            <tr>
            <td style="padding: 20px; font-size: 12px; color: #777; text-align: center;">
                This email was intended for K Roy (Corporate Communication Manager)<br />
                <a href="#" style="color: #0073b1; text-decoration: none;">Learn why we included this</a><br /><br />
                You are receiving this email because members like you have also taken these actions.<br />
                <a href="#" style="color: #0073b1; text-decoration: none;">Unsubscribe</a> • <a href="#" style="color: #0073b1; text-decoration: none;">Help</a><br /><br />
                <strong>LinkedIn</strong><br />
                © 2025 The Exhibition Network, 1000 West Maude Avenue, Sunnyvale, CA 94085.<br />
            </td>
            </tr>

        </table>
    </div>

  </body>
</html>
