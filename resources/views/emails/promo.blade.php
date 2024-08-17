<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css" class="drift-base-styles">.drift-bounding-box,.drift-zoom-pane{position:absolute;pointer-events:none}@keyframes noop{0%{zoom:1}}@-webkit-keyframes noop{0%{zoom:1}}.drift-zoom-pane.drift-open{display:block}.drift-zoom-pane.drift-closing,.drift-zoom-pane.drift-opening{animation:noop 1ms;-webkit-animation:noop 1ms}.drift-zoom-pane{overflow:hidden;width:100%;height:100%;top:0;left:0}.drift-zoom-pane-loader{display:none}.drift-zoom-pane img{position:absolute;display:block;max-width:none;max-height:none}</style>
    
    
    <!-- SEO Meta Tags <link rel="canonical" href="{{url()->current()}}"/>-->
    <title> @yield('page_title') | The Exhibition Network</title>
    <meta name="description" content="@yield('page_description')">
    <meta name="keyword" content="@yield('page_keyword')">
    <meta name="author" content = "The Exhibition Network">  
    
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">

    
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('public/image/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('public/image/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/image/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('public/image/favicons/site.webmanifest')}}">
    <link rel="mask-icon" color="#fe6a6a" href="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">   
    <!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('css/theme.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/simplebar.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/tiny-slider.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/drift-basic.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/lightgallery.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('css/swiper-bundle.min.css')}}">
    
    
    <!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script> -->
    @livewireStyles
  </head>
<body>
    
        

        @php
            //$exhibition = DB::table('events')->where('status','1')->limit(7)->get();
            $exhibition = DB::table('events')->whereYear('startdate','>=','2024' )
                                  ->where('status','1')
                                  ->where('admstatus','1')
                                  ->whereMonth('startdate', $month)
                                  ->orderBy('startdate','ASC')->limit(7)
                                  ->get();
        @endphp

        <div class="container">
            
            {{$mailmessage}}
            Hi, Based on your interests in the {{$month}}  we have found events you might be interested in {{$city}}
        </div>
        <div class="container">
             <div class="fw-bold fs-md">
                Upcoming Events around your {{$city}}
             </div>
            @foreach ($exhibition as $franchise)
                <div class="container">
                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1" data-bs-toggle="offcanvas" href="#{{$franchise->slug}}"  role="button" aria-controls="offcanvasExample">
                        <div class="col  pr-0">
                            @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                                @else
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> 
                                <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

                            @endif 
                            
                                
                                <a href="#"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
                        </div>

                        <div class="col-7  p-0">
                            <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $franchise->slug])}}">
                            {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                            <div class="text-muted fs-sm text-start">
                            @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                            @else
                                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                            @endif 
                            </div>  
                            <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue ?? 'not found'))}}, {{ucfirst(trans($franchise->city ?? 'not found'))}}</div>
                        </div>

                        <div class="col-3  p-0">
                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <h2>Universal Delgates pass just select your upcoming event, get vip Entry
                <small>Right Place at Right Time to Right People</small>
            </h2>
            <a href="" class="btn btn-primary btn-sm">Select your Upcoming Events</a>
        </div>

        <div class="container">
           <h2>
            Hire us Your  Brand Event Agency
            <small>Get trend access, with free and discounted trade shows, exhibition, conference, awards yearly from your industry, book ultra premium space in advance</small>
           </h2>
           <a href="" class="btn btn-primary btn-sm">Membership</a>
        </div>


</body>
   <!-- Vendor scrits: js libraries and plugins-->
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/simplebar.min.js')}}"></script>
    <script src="{{asset('js/tiny-slider.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{asset('js/Drift.min.js')}}"></script>
    <script src="{{asset('js/lightgallery.min.js')}}"></script>
    <script src="{{asset('js/lg-video.min.js')}}"></script>
    <!-- Main theme script-->
    <script src="{{asset('js/theme.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>  
    
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script> 
    <script src="{{asset('js/isotope.pkgd.js')}}"></script> 
    <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
    @livewireScripts
   @stack('scripts')

</html>