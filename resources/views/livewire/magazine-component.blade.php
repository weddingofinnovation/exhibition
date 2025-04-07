@section('page_title', 'Great Exhibition To Exhibit')
@section('page_description', 'Discover India premier event publishing platform, showcasing the best upcoming exhibitions, conferences, trade shows, global seminars, networking meets and providing a platform for organizers to  exhibit their remarkable events.')
@section('page_keyword', 'the exhibition network, Great Place to Exhibit, find right place, find right time, find right people, World largest business event platform, find all upcoming events, business conferences, exhibition 2024, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers.  Manage, sell event tickets and promote your event on exhbition.org.in, exhibition')

  <main>
    <!-- <section class="hero font-poppins py-5">
        <div class="container">
            <div class="row align-items-center">
            
            LEFT SIDE: Text
            <div class="col-md-6 order-md-1 order-2 text-left">
                <h2 class="text-primary fw-bolder hero-text-primary">Great Exhibition To Exhibit</h2>
                <div class="text-dark fw-bold display-1">For all Summit</div>
                <div class="text-dark fw-bold h3 text-uppercase">India</div>
                <p class="text-dark fw-bold pt-5">
                India's largest and most sought-after workplace culture Summit
                </p>
                <a href="#register" class="btn btn-primary btn-lg text-uppercase mt-3">Register for 2026 Summit</a>
            </div>

            RIGHT SIDE: Image
            <div class="col-md-6 order-md-2 order-1 text-center">
                <a class="card-img-top d-block overflow-hidden" href="{{ route('business.magazine', ['slug' => $magazine->slug]) }}">
                <img src="{{ url('public/assets/image/exhibition/' . $magazine->image) }}" 
                    class="img-fluid img-thumbnail" 
                    alt="{{ $magazine->name }}">
                </a>
            </div>

            </div>
        </div>
    </section> -->


    <style>
        .hero-section {
        background: linear-gradient(to right, #11131C, #1a1c28);
        padding: 60px 0;
        overflow: hidden;
        }

        .image-blur-container {
        position: relative;
        }

        .image-blur {
        border-radius: 30px;
        filter: brightness(1.05) contrast(1.1);
        mix-blend-mode: screen;
        box-shadow: 0 0 40px rgba(255, 255, 255, 0.05);
        transition: transform 0.3s ease-in-out;
        }

        .image-blur:hover {
        transform: scale(1.03);
        }
    </style>

    <section class="hero-section text-white">
        <div class="container">
            <div class="row align-items-center py-5">

            <!-- LEFT: TEXT -->
            <!-- <div class="col-md-6">
                <h2 class="text-uppercase" style="color: #FF1628; font-family: 'GilroySemiBold', sans-serif; font-weight: 600; font-size: 48px;">
                Great Exhibition To Exhibit
                </h2>
                <div style="font-family: 'GilroySemiBold', sans-serif; font-weight: 600; font-size: 48px; color: #ffffff;">
                For all Summit
                </div>
                <div class="text-uppercase fw-bold mb-4" style="color: #ffffff;">India</div>

                <p class="fw-bold" style="color: #cccccc;">
                India's largest and most sought-after workplace culture Summit
                </p>
                <a href="#register" class="btn btn-danger btn-lg text-uppercase mt-3">Register for 2026 Summit</a>
            </div> -->

            <!-- LEFT SIDE: Text -->
            <div class="col-md-6 order-md-1 order-2 text-left">
                <h2 class="fw-bolder hero-text-primary" style="color: #FF1628; ">Great Exhibition To Exhibit</h2>
                <div class="text-dark fw-bold display-1 text-white">For all Summit</div>
                <div class="text-dark fw-bold h3 text-uppercase text-white">India</div>
                <p class="text-dark fw-bold pt-5 text-white">
                India's largest and most sought-after workplace culture Summit
                </p>
                <a href="#register" class="btn btn-primary btn-lg text-uppercase mt-3" style="color: #FF1628; "> Register for 2026 Summit</a>
            </div>

            <!-- RIGHT: IMAGE with blending -->
            <div class="col-md-6 order-md-2 order-1 text-left">
                <div class="image-blur-container">
                <img src="{{ url('public/assets/image/exhibition/' . $magazine->image) }}"
                    alt="{{ $magazine->name }}"
                    class="img-fluid image-blur" />
                </div>
            </div>

            </div>
        </div>
    </section>


<!-- <section class="hero font-poppins">
        <div class="container">
          <div class="row">
            <div class="text-left">
              <h2 class="text-primary fw-bolder hero-text-primary">Great Exhibition To Exhibit</h2>
              <div class="text-dark fw-bold display-1">For all Summit</div>
              <div class="text-dark fw-bold h3 text-uppercase">India</div>

              <p class="text-dark fw- bold pt-5">India's largest and most sought-after workplace culture Summit</p>
              {{-- <p>Join us for an inspiring event filled with thought leaders and innovators.</p> --}}
              <a href="#register" class="btn btn-primary btn-lg text-uppercase">Register for 2026 Summit</a>
            </div>
            <div class="">
            
            </div>
          </div>
            
        </div>
    </section> -->

    <style>
      .custom-grid {
          display: grid;
          grid-template-columns: repeat(3, 1fr);
          margin-top: 30px;
      }

      .grid-item {
          padding: 20px;
          border-right: 1px solid black;
          border-bottom: 1px solid black;
      }

      /* Remove right border for the last column items */
      .grid-item:nth-child(3n) {
          border-right: none;
      }

      /* Remove bottom border for the last row items */
      .grid-item:nth-last-child(-n+3) {
          border-bottom: none;
      }

      #sponsorship-benefits h2 {
          font-weight: 1000;
          color: #333;
      }

      #sponsorship-benefits h4 {
          font-weight: 900;
          color: #333;
      }
    </style>
   
    <section id="sponsorship-benefits" class="py-5 font-poppins">
        <div class="container text-center">
        <h2 class="agenda-title mb-3 mb-md-0">Sponsorship Benefits</h2>
            <!-- <h2 class="mb-5">Sponsorship Benefits</h2> -->
            <div class="custom-grid mt-5">
                <div class="grid-item">
                    <h4>Showcase Thought Leadership</h4>
                    <p>Position your brand as a thought leader in workplace culture among top CXOs and HR leaders.</p>
                </div>
                <div class="grid-item">
                    <h4>Exhibit & Drive Engagement</h4>
                    <p>Showcase your solutions and create customized experiences with stalls, polls, and activations that foster meaningful connections.</p>
                </div>
                <div class="grid-item">
                    <h4>Connect with Decision-Makers</h4>
                    <p>Engage directly with 1,400+ attendees, including 53% CXOs and 47% Senior HR Professionals.</p>
                </div>
                <div class="grid-item">
                    <h4>Grow Your Business</h4>
                    <p>Accelerate growth by connecting with the right audience, leveraging market-leading opportunities.</p>
                </div>
                <div class="grid-item">
                    <h4>Elevate Your Brand</h4>
                    <p>Boost your brand’s visibility with prominent exposure across diverse platforms and networking opportunities.</p>
                </div>
                <div class="grid-item">
                    <h4>Build Long-Term Relationships</h4>
                    <p>Boost your brand’s visibility with prominent exposure across diverse platforms and networking opportunities.</p>
                </div>
                <div class="grid-item">
                    <h4>Leverage Market Insights</h4>
                    <p>Accelerate growth by connecting with the right audience, leveraging market-leading opportunities.</p>
                </div>
                <div class="grid-item">
                    <h4>Exclusive Networking</h4>
                    <p>Participate in VIP networking and one-on-one meetings.</p>
                </div>
                <div class="grid-item">
                    
                </div>
            </div>
        </div>
    </section>

    <style>
        .agenda-strip {
        background-color: #ff1c25; /* Red background */
        color: #fff;
        font-family: 'Poppins', sans-serif;
        }

        .agenda-title {
        font-size: 2.5rem; /* Large, bold text */
        font-weight: 600;
        margin: 0;
        }

        .agenda-btn {
        background-color: #0a0a0e; /* Black button */
        color: #fff;
        padding: 12px 32px;
        font-weight: 600;
        text-decoration: none;
        border: none;
        font-size: 1rem;
        border-radius: 2px;
        transition: background-color 0.3s ease;
        }

        .agenda-btn:hover {
        background-color: #1a1a1f;
        }

    </style>

    <section class="agenda-strip py-5 font-poppins">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center py-4">
            <h2 class="agenda-title mb-3 mb-md-0 text-white">See 2025 Agenda</h2>
            <a href="#" class="btn agenda-btn">VIEW</a>
        </div>
    </section>

    <style>
        @font-face {
        font-family: 'GilroySemiBold';
        src: url('/fonts/Gilroy-SemiBold.woff2') format('woff2'),
            url('/fonts/Gilroy-SemiBold.woff') format('woff');
        font-weight: 600;
        font-style: normal;
        }

        .agenda-title {
        font-size: 48px;
        font-weight: 600;
        color: #11131C;
        font-family: 'GilroySemiBold', sans-serif;
        }
    </style>

    <section id="speakers" class="py-5 font-poppins">
        <div class="container text-center">
        <h2 class="agenda-title mb-3 mb-md-0">Our Partners</h2>
            <h2></h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="{{url('public/assets/image/exhibition/'.$magazine->image)}}" alt="Speaker">
                    <h5>John Doe</h5>
                    <p>CEO, TechCorp</p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('public/assets/image/exhibition/'.$magazine->image)}}" alt="Speaker">
                    <h5>Jane Smith</h5>
                    <p>Founder, InnovateX</p>
                </div>
            </div>
        </div>
    </section>

    <section id="speakers" class="py-5 font-poppins">
        <div class="container text-center">
        <h2 class="agenda-title mb-3 mb-md-0">Our Speakers</h2>
            <h2></h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/100" alt="Speaker">
                    <h5>John Doe</h5>
                    <p>CEO, TechCorp</p>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/100" alt="Speaker">
                    <h5>Jane Smith</h5>
                    <p>Founder, InnovateX</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda Strip Section -->
    <style>
        
        .agenda-strip {
        background-color: #FF1628;
        color: #11131C;
        font-family: 'GilroySemiBold', sans-serif;
        }

        .agenda-title {
        font-size: 48px;
        font-weight: 600;
        color: #11131C;
        font-family: 'GilroySemiBold', sans-serif;
        }

        .agenda-btn {
        background-color: #11131C;
        color: #fff;
        padding: 12px 32px;
        border: none;
        border-radius: 2px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        font-family: 'GilroySemiBold', sans-serif;
        transition: background-color 0.3s ease;
        }

        .agenda-btn:hover {
        background-color: #000;
        }
    </style>

    <section class="agenda-strip py-5 font-poppins">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-5 px-3">
            <h2 class="agenda-title mb-3 mb-md-0 text-white">See 2025 Agenda</h2>
            <a href="#agenda" class="agenda-btn">VIEW</a>
        </div>
    </section>

    <section class="agenda-strip py-5 font-poppins">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-5 px-3">
            <h2 class="agenda-title mb-3 mb-md-0 text-white">Get Certified Today</h2>
            <p class="mb-3 mb-md-0 text-white">Start your application process for Great Place To Work Certification and join us.</p>
            <a href="#agenda" class="agenda-btn">Get certified</a>
        </div>
    </section>

    <style>
        .client-feedback {
        background-color: #11131C;
        color: white;
        font-family: 'Poppins', sans-serif; /* Replace with Gilroy if available */
        }

        .feedback-title h2 {
        font-size: 48px;
        font-weight: 600;
        line-height: 1.2;
        color: #fff;
        }

        .red-boxes {
        display: flex;
        gap: 8px;
        }

        .square {
        width: 30px;
        height: 30px;
        background-color: #FF1628;
        }

        .video-thumb {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        }

        .video-thumb img {
        width: 100%;
        border-radius: 8px;
        }

        .play-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 48px;
        color: white;
        opacity: 0.9;
        pointer-events: none;
        }
    </style>

    <section class="client-feedback py-5 font-poppins">
        <div class="container">
            <div class="row align-items-center mb-4">
            <div class="col-md-6 text-white text-md-start text-center">
                <div class="feedback-title">
                <div class="red-boxes mb-2">
                    <div class="square"></div>
                    <div class="square ml-2"></div>
                </div>
                <h2 class="mb-0">CLIENT<br>FEEDBACK</h2>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block"></div>
            </div>

            <div class="row g-4">
            <div class="col-md-4 col-sm-6">
                <div class="video-thumb">
                <img src="{{url('public/assets/image/exhibition/'.$magazine->image)}}" class="img-fluid" alt="Client 1">
                {{-- <a class="card-img-top d-block overflow-hidden" href="{{route('business.magazine', ['slug' => $magazine->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$magazine->image)}}" class="img-thumbnail" alt="$magazine->name">
                        </a> --}}
                <span class="play-icon">&#9658;</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="video-thumb">
                <img src="{{url('public/assets/image/exhibition/'.$magazine->image)}}" class="img-fluid" alt="Client 2">
                <span class="play-icon">&#9658;</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="video-thumb">
                <img src="{{url('public/assets/image/exhibition/'.$magazine->image)}}" class="img-fluid" alt="Client 3">
                <span class="play-icon">&#9658;</span>
                </div>
            </div>
            </div>
        </div>
    </section>


    <style>
        .why-attend-section {
        background-color: #fff;
        font-family: 'GilroySemiBold', sans-serif;
        }

        .section-label {
        color: #FF1628;
        /* font-weight: 600;
        font-size: 16px;
        letter-spacing: 1px;
        margin-bottom: 15px; */
        font-family: "GilroySemibold";
        font-size: 28px;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 33px;
        letter-spacing: -0.56px;
        }

        
    

        .main-title {
        font-size: 56px;
        font-weight: 600;
        color: #11131C;
        line-height: 64px;
        margin-bottom: 20px;
        letter-spacing: -1.4px
        }

        .description {
        font-size: 18px;
        font-weight: 400;
        color: #11131C;
        line-height: 28px;
        letter-spacing: 0px;
        }

        .feature-block {
        margin-bottom: 24px;
        }

        .feature-title {
        color: #FF1628;
        font-weight: 600;
        font-size: 15px;
        text-transform: uppercase;
        margin-bottom: 10px;
        }

        .feature-text {
        font-size: 18px;
        color: #11131C;
        font-weight: 400;
        line-height: 28px;
        }

    </style>

    <section class="why-attend-section py-5 px-5 font-poppins">
        <div class="container px-5">
            <div class="row">
            <!-- Left Content -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h6 class="section-label my-5">WHY ATTEND</h6>
                <h2 class="main-title">
                    From promise to <br />
                    progress Change <br />
                    happens here.
                </h2>
                <p class="description">
                The Great Place To Work® For All™ Summit 2025 is the definitive company culture and leadership event of 1000+ leaders from across 20+ industries on their journey to create Great workplaces for all.
                </p>
            </div>

            <!-- Right Column -->
            <div class="col-md-6 my-5">
                <div class="feature-block mb-4">
                <h6 class="feature-title">CONNECT</h6>
                <p class="feature-text my-5">Join an energizing community of visionary leaders of award-winning great workplaces, Great Place To Work culture experts, and thought leaders in HR and across industries.</p>
                </div>
                <div class="feature-block mb-4">
                <h6 class="feature-title">INNOVATE</h6>
                <p class="feature-text my-5">Learn how the most innovative organizations are creating new solutions and strategies to meet the changing needs of their people and business in the most challenging times.</p>
                </div>
                <div class="feature-block">
                <h6 class="feature-title">LEAD</h6>
                <p class="feature-text my-5">Transform yourself into a better and more inspired leader. You’ll return to work ready to lead and equipped with a strengthened community, fresh ideas, and best practices that you can implement immediately</p>
                </div>
            </div>
            </div>
        </div>
    </section>


    <section id="speakers" class="py-5 font-poppins">
        <div class="container text-center">
        <h2 class="agenda-title mb-3 mb-md-0">2025 Participating organizations</h2>
            <h2></h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/100" alt="Speaker">
                    <h5>John Doe</h5>
                    <p>CEO, TechCorp</p>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/100" alt="Speaker">
                    <h5>Jane Smith</h5>
                    <p>Founder, InnovateX</p>
                </div>
            </div>
        </div>
    </section>

    <section id="speakers" class="py-5 font-poppins">
        <div class="container text-center">
        <h2 class="agenda-title mb-3 mb-md-0">Some of Our Past Partners</h2>
            <h2></h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/100" alt="Speaker">
                    <h5>John Doe</h5>
                    <p>CEO, TechCorp</p>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/100" alt="Speaker">
                    <h5>Jane Smith</h5>
                    <p>Founder, InnovateX</p>
                </div>
            </div>
        </div>
    </section>

    <section id="speakers" class="py-5 font-poppins">
        <div class="container text-center">
        <h2 class="agenda-title mb-3 mb-md-0">Highlights</h2>
            <h2></h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/100" alt="Speaker">
                    <h5>John Doe</h5>
                    <p>CEO, TechCorp</p>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/100" alt="Speaker">
                    <h5>Jane Smith</h5>
                    <p>Founder, InnovateX</p>
                </div>
            </div>
        </div>
    </section>

  </main>