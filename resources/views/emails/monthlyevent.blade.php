<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Your Selected Exhibitions — Exhibition Network</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body style="margin:0;padding:0;background-color:#f4f6f8;font-family: Arial, Helvetica, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8;padding:24px 0;">
        <tr>
            <td align="center">
                <table width="700" cellpadding="0" cellspacing="0" style="background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 4px 18px rgba(0,0,0,0.06);">
                    <tr>
                        <td style="padding:20px 30px;border-bottom:1px solid #e5e7eb;">
                            <h1 style="margin:0;font-size:22px;color:#111827;">Your Selected Exhibitions</h1>
                            <p style="margin:5px 0 0 0;color:#6b7280;">Dear {{ ucwords($lname) }}, here’s a summary of your selected trade shows and expos.</p>
                        </td>
                    </tr>

                    @foreach($selectedEventDetails as $event)
                    <!-- Each Event Card -->
                    <tr>
                        <td style="padding:22px 30px;border-bottom:1px solid #f1f5f9;">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="80" valign="top">
                                        <img src="{{ url('public/assets/image/exhibition/' . $event->image) }}" alt="{{ $event->eventname }}" width="80" style="border-radius:6px;display:block;">
                                    </td>
                                    <td valign="top" style="padding-left:16px;">
                                        <h2 style="margin:0;font-size:18px;color:#0f1724;">{{ ucwords($event->eventname) }}</h2>
                                        <p style="margin:4px 0;color:#475569;font-size:14px;">
                                            📍 {{ ucwords($event->venue) }}, {{ ucwords($event->city) }}, {{ ucwords($event->country) }}<br>
                                            📅 {{ \Carbon\Carbon::parse($event->startdate)->format('d M Y') }} – {{ \Carbon\Carbon::parse($event->enddate)->format('d M Y') }}
                                        </p>
                                        <a href="{{ route('event.details', ['slug' => $event->slug]) }}" target="_blank"
                                            style="text-decoration:none;background:#e11d48;color:#fff;padding:8px 14px;border-radius:5px;font-weight:bold;font-size:13px;display:inline-block;">
                                            View Event Details
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    @endforeach

                    <!-- Final Message -->
                    <tr>
                        <td style="padding:20px 30px;">
                            <p style="margin:0;color:#374151;font-size:15px;line-height:1.6;">
                                We’ll be happy to assist you with booth bookings, sponsorship, or promotional options for these exhibitions.
                                <br><br>
                                📧 <a href="mailto:team@exhibition.org.in" style="color:#e11d48;text-decoration:none;">team@exhibition.org.in</a> |
                                ☎️ +91 999-185-6776
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding:12px 30px;background:#fafafa;color:#9ca3af;font-size:12px;border-top:1px solid #f3f4f6;">
                            <p style="margin:0;">
                                © {{ date('Y') }} The Exhibition Network. You are receiving this email because you selected exhibitions on our website.
                                <br>
                                <a href="%%unsubscribe_link%%" style="color:#9ca3af;text-decoration:underline;">Unsubscribe</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>