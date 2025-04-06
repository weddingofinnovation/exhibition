@section('page_title', 'Great Exhibition To Exhibit')
@section('page_description', 'Discover India premier event publishing platform, showcasing the best upcoming exhibitions, conferences, trade shows, global seminars, networking meets and providing a platform for organizers to  exhibit their remarkable events.')
@section('page_keyword', 'the exhibition network, Great Place to Exhibit, find right place, find right time, find right people, World largest business event platform, find all upcoming events, business conferences, exhibition 2024, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers.  Manage, sell event tickets and promote your event on exhbition.org.in, exhibition')

  <main>

    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            background: url('https://source.unsplash.com/1600x900/?conference') center/cover no-repeat;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .btn-primary {
            background-color: #e60012;
            border: none;
        }

        .hero-text-primary {
          color: #e60012;
        }

        .speakers img {
            width: 100px;
            border-radius: 50%;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 24px;
            text-transform: uppercase;
        }
        
        .navbar-nav .nav-link {
            font-size: 16px;
            font-weight: 500;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light font-poppins">
        <div class="container">
            <a class="navbar-brand text-uppercase fs-5 lh-1" href="#">For <br>All<br> Summit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">2025 theme</a></li>
                    <li class="nav-item"><a class="nav-link" href="#speakers">2025 Speakers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#register">Client Feedback</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Why Attend</a></li>

                    <li class="nav-item"><a class="nav-link" href="#speakers">Highlights</a></li>
                    <li class="nav-item"><a class="nav-link" href="#register">Become Sponsor</a></li>
                    
                    <li class="nav-item"><a class="btn btn-sm btn-outline-primary my-2 text-uppercase" href="#register">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero font-poppins">
        <div class="container">
          <div class="row">
            <div class="text-left">
              <h2 class="text-primary fw-bolder hero-text-primary">Great Exhibition To Exhibit</h2>
              <div class="text-dark fw-bold display-1">For all Summit</div>
              <div class="text-dark fw-bold h3 text-uppercase">India</div>

              <p class="text-dark fw- bold pt-5">India's largest and most sought-after workplace culture Summit</p>
              <!-- <p>Join us for an inspiring event filled with thought leaders and innovators.</p> -->
              <a href="#register" class="btn btn-primary btn-lg text-uppercase">Register for 2026 Summit</a>
            </div>
            <div class="">

            </div>
          </div>
            
        </div>
    </section>

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
       
        .custom-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        margin-top: 30px;
        border-collapse: collapse;
        }

        .grid-item {
            padding: 20px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
        }

        /* Remove right border from last column (desktop 3-column layout) */
        .grid-item:nth-child(3n) {
            border-right: none;
        }

        /* Remove bottom border from last row (desktop) */
        .grid-item:nth-last-child(-n+3) {
            border-bottom: none;
        }

        /* Responsive for tablets: 2 columns */
        @media (max-width: 992px) {
            .custom-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .grid-item {
                border-right: 2px solid black;
                border-bottom: 2px solid black;
            }

            .grid-item:nth-child(2n) {
                border-right: none;
            }

            .grid-item:nth-last-child(-n+2) {
                border-bottom: none;
            }
        }

        /* Responsive for mobile: 1 column */
        @media (max-width: 576px) {
            .custom-grid {
                grid-template-columns: 1fr;
            }

            .grid-item {
                border-right: none;
                border-bottom: 2px solid black;
            }

            .grid-item:last-child {
                border-bottom: none;
            }
        }
    </style>


    <section class="py-5 font-poppins">
        <div class="container text-center">
            <h2 class="mb-4">Sponsorship Benefits</h2>
            <div class="custom-grid">
                <div class="grid-item">
                    <h4>Showcase Your Thought Leadership</h4>
                    <p>Position your brand as a thought leader in workplace culture.</p>
                </div>
                <div class="grid-item">
                    <h4>Exhibit & Drive Engagement</h4>
                    <p>Create customized experiences that foster meaningful connections.</p>
                </div>
                <div class="grid-item">
                    <h4>Connect with Decision-Makers</h4>
                    <p>Engage directly with CXOs and Senior HR Professionals.</p>
                </div>
                <div class="grid-item">
                    <h4>Grow Your Business</h4>
                    <p>Accelerate growth by connecting with the right audience.</p>
                </div>
                <div class="grid-item">
                    <h4>Elevate Your Brand</h4>
                    <p>Boost your brand’s visibility across diverse platforms.</p>
                </div>
                <div class="grid-item">
                    <h4>Build Long-Term Relationships</h4>
                    <p>Network and build lasting industry connections.</p>
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

    <section class="agenda-strip py-5">
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

    <section class="agenda-strip py-5">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between py-5 px-3">
            <h2 class="agenda-title mb-3 mb-md-0 text-white">See 2025 Agenda</h2>
            <a href="#agenda" class="agenda-btn">VIEW</a>
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

    <section class="why-attend-section py-5 px-5">
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
            <div class="col-md-6">
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

    <section id="register" class="bg-light py-5 font-poppins">
        <div class="container text-center">
            <h2>Register Now</h2>
            <form class="mt-3">
                <input type="text" class="form-control mb-2" placeholder="Your Name">
                <input type="email" class="form-control mb-2" placeholder="Your Email">
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>



    <section class="section">
      <div class="container">
        <div class="row">                              
          <div class="col">
              <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                  <div class="woocommerce-notices-wrapper">

                  </div>
                      <h1 class="d-none d-lg-block mb-3">{{$magazine->name}}</h1>
                      <div class="row">

                      <a class="card-img-top d-block overflow-hidden" href="{{route('business.magazine', ['slug' => $magazine->slug])}}">
                          <img src="{{url('public/assets/image/exhibition/'.$magazine->image)}}" class="img-thumbnail" alt="$magazine->name">
                        </a>


                          <div class="col-lg-8 mb-md-0 mb-3">
                              <div id="product-35287" class="post-35287 product type-product status-publish has-post-thumbnail product_cat-ecommerce-retail first instock downloadable shipping-taxable purchasable product-type-simple">
                                  <div class="feature-screenshot">
                                        <div class="" data-columns="4" style="opacity: 1; transition: opacity .25s ease-in-out;">

                                          <div data-thumb="{{url('public/assets/image/exhibition/'.$magazine->image)}}" 
                                            class="woocommerce-product-gallery__image">
                                            <a href="#">
                                              <img width="1200" height="900" src="{{url('public/assets/image/exhibition/'.$magazine->image)}}"
                                              class="attachment-large_crop size-large_crop" alt="" title="screenshot" data-caption="" 
                                              data-src="{{url('public/assets/image/exhibition/'.$magazine->image)}}" 
                                              data-large_image="{{url('public/assets/image/exhibition/'.$magazine->image)}}"
                                              data-large_image_width="1200" data-large_image_height="900" 
                                              srcset="{{url('public/assets/image/exhibition/'.$magazine->image)}} 1200w, 
                                              {{url('public/assets/image/exhibition/'.$magazine->image)}} 800w, 
                                              {{url('public/assets/image/exhibition/'.$magazine->image)}} 768w, 
                                              {{url('public/assets/image/exhibition/'.$magazine->image)}} 600w, 
                                              {{url('public/assets/image/exhibition/'.$magazine->image)}} 200w, 
                                              {{url('public/assets/image/exhibition/'.$magazine->image)}} 400w, 
                                              {{url('public/assets/image/exhibition/'.$magazine->image)}} 540w" 
                                              sizes="(max-width: 1200px) 100vw, 1200px">
                                              </a>
                                          </div>
                                        </div>
                                      <a class="feature-screenshot__overlay" target="_blank" href="#">
                                          <button class="btn btn-inverted">Advertise with us</button>
                                      </a>
                                  </div>

                                  <!-- Responsive sidebar put below the theme -->
                                  <div class="d-lg-none">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div>
                                                <h4 class="mt-3 mb-1">{{$magazine->name}}</h4>
                                                  <div class="dropdown">
                                                      <a class="dropdown-toggle link--dark" js-price-dropdown="true" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Standard License</a>
                                                        <div class="dropdown-menu dropdown-menu--xl dropdown-menu--centered dropdown-menu--has-triangle">
                                                            <button class="dropdown-block-item switch_price_prod" data-type="Standard License" data-price="49.00" data-price_label="$49.00" data-label="Standard License">
                                                                <div class="d-flex justify-content-between align-items-center mb-2"><span>Standard License</span><span class="d-flex align-items-center"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>49.00</span></span></div>
                                                                <ul class="fs-13 text-gray-soft mb-2">
                                                                    <li>Use for a single product</li>
                                                                    <li>Non-paying users only</li>
                                                                </ul>
                                                                <p class="fs-11 text-gray-soft">Read the full <a href="#">Standard License</a></p>
                                                            </button>
                                                            
                                                            <div class="dropdown-divider"></div>

                                                            <button class="dropdown-block-item switch_price_prod" data-type="Multisite License" data-price="149.00" data-price_label="$149.00" data-label="Multisite License">
                                                                <div class="d-flex justify-content-between align-items-center mb-2"><span>Multisite License</span><span class="d-flex align-items-center">$149.00</span></div>
                                                                <ul class="fs-13 text-gray-soft mb-2">
                                                                  <li>Use for a unlimited product</li>
                                                                  <li>Non-paying users only</li>
                                                                </ul>
                                                                <p class="fs-11 text-gray-soft">Read the full <a href="#">Multisite License</a></p>
                                                            </button>

                                                            <div class="dropdown-divider"></div>

                                                            <button class="dropdown-block-item switch_price_prod" data-type="Extended License" data-price="499.00" data-price_label="$499.00" data-label="Extended License">
                                                                <div class="d-flex justify-content-between align-items-center mb-2"><span>Extended License</span><span class="d-flex align-items-center">$499.00</span></div>
                                                                <ul class="fs-13 text-gray-soft mb-2">
                                                                    <li>Use for a single product</li>
                                                                    <li>Paying users allowed</li>
                                                                </ul>
                                                                <p class="fs-11 text-gray-soft">Read the full <a href="#">Extended License</a></p>
                                                            </button>
                                                        </div>
                                                  </div>
                                            </div>
                                            <h3 class="d-flex align-items-center" js-price-value="main_price_div">
                                              <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>49.00</span></h3>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                          <a class="btn btn-brand btn-block" target="_blank" href="#">Live preview</a>
                                          <form action="" method="POST" class="d-block w-100">
                                              <input type="hidden" js-license-type="license_type" name="license_type" value="Standard License">
                                              <input type="hidden" name="add-to-cart" value="35287">
                                              <button type="submit" class="btn btn-brand btn-block btn-checkout mt-0 ml-1"> <span class="btn-text">Add to cart</span>
                                            </button>
                                          </form>
                                        </div>
                                        <div class="theme-purchases">
                                            <div class="theme-purchases__item">
                                                <a class="theme-purchases__item__inner text-center" data-toggle="tab" href="#" role="tab" js-handle="review-toggler">
                                                    <ul class="rating justify-content-center">
                                                        <li class="rating__item rating__item--active"></li>
                                                        <li class="rating__item rating__item--active"></li>
                                                        <li class="rating__item rating__item--active"></li>
                                                        <li class="rating__item rating__item--active"></li>
                                                        <li class="rating__item rating__item--active"></li>
                                                    </ul>

                                                    <p>4.71/5 (21 reviews)</p>
                                                </a>
                                                <div class="theme-purchases__item__inner text-center">
                                                    <h5 class="mb-0"><i class="bootstrap-themes-icon-cart"></i>2178</h5>
                                                    <p>Purchases</p>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                  <div class="d-flex justify-content-between align-items-center has-border">
                                      <ul class="nav sub-nav sub-nav--has-border" role="tablist">
                                          <li class="nav-item"><a class="nav-link sub-nav-link active" data-toggle="tab" href="#description-tab" role="tab">Print Facts</a></li>
                                          <li class="nav-item"><a class="nav-link sub-nav-link" data-toggle="tab" href="#changelog-tab" role="tab">Description</a></li>
                                          <li class="nav-item"><a class="nav-link sub-nav-link" data-toggle="tab" href="#advertise-tab" role="tab">Advertise</a></li>
                                          <li class="nav-item"><a class="nav-link sub-nav-link" data-toggle="tab" href="#reviews-tab" role="tab">Reviews</a></li>
                                      </ul>
                                      <ul class="d-none list-social justify-content-end">
                                          <li class="list-social__item">Share:</li>
                                          <li class="list-social__item"><a class="bootstrap-themes-icon-facebook-squared list-social__link" target="_blank" href="#"></a></li>
                                          <li class="list-social__item"><a class="bootstrap-themes-icon-pinterest-squared list-social__link" target="_blank" href="#"></a></li>
                                          <li class="list-social__item"><a class="bootstrap-themes-icon-twitter list-social__link" target="_blank" href="#"></a></li>
                                      </ul>
                                  </div>

                                  <div class="tab-content">

                                      <div class="tab-pane fade show mt-2 mt-lg-5 active" id="description-tab" role="tabpanel">
                                          <div class="theme-description__list d-lg-none mb-4">
                                            <div class="theme-description__list__item">
                                              <span class="theme-description__item__title">Bootstrap</span>
                                              <span>v5.2.3</span>
                                            </div>
                                            <div class="theme-description__list__item">
                                              <span class="theme-description__item__title">Released</span>
                                              <span>4 years ago</span>
                                            </div>
                                            <div class="theme-description__list__item">
                                              <span class="theme-description__item__title">Updated</span>
                                              <span>6 months ago</span>
                                            </div>
                                            <div class="theme-description__list__item">
                                              <span class="theme-description__item__title">Version</span>
                                              <span>2.5.1</span>
                                            </div>
                                            <div class="theme-description__list__item">
                                              <span class="theme-description__item__title">Category</span>
                                              <a href="">E-Commerce &amp; Retail</a>                        
                                            </div>
                                            <div class="theme-description__list__item align-items-center">
                                              <span class="theme-description__item__title">Questions?</span>
                                              <a class="btn btn-xs btn-outline-brand" href="mailto:team@exhibition.org.in" target="_blank">Contact Us</a>
                                            </div>
                                          </div>

                                          <div class="theme-description">
                                              <p><strong>Magazine Focus</strong>{{$magazine->desc}}</p>
                                              <h2>{{$magazine->name}} Features</h2>

                                              <ul>
                                                  <li>Mono Brand Store</li>
                                              </ul>

                                              <h2>Circulation By Industries</h2>
                                              <p>Please see the list of available UI components <a href="#">here</a>. &nbsp;</p>
                                              
                                              <h2>Readership</h2>
                                              <p>Need help to get started?&nbsp; Please follow the link below: <a href="#">Link to online documentation</a> &nbsp;</p>
                                              
                                              <h2>Geographical Reach</h2>
                                              <p>Sketch file with mockups of some core pages is included in the download package.</p>
                                            
                                              <h2>Free Advertise and support</h2>
                                              <p><strong>Free Updates:</strong> With the purchase of The Exhibition Network Membership, you are entitled to lifetime free updates. <strong>Support:</strong> Our team will be happy to help you with any issues or answer any questions 24/7. Email address for support&nbsp;inquiry:&nbsp;<a href="mailto:team@exhibition.org.in">team@exhibition.org.in</a>
                                              We normally reply within 24-48 hours. &nbsp;</p>
                                              
                                              <h2>Customization Services</h2>
                                              <p>Maximize your business potential with our monthly free advertising and support. From social media shoutouts to featured blog posts, we offer diverse pormotional avenues. Engage with our community, enjoy priority support, and showcase your success indedicated spotlights. Collaborate on events and webinars to amplify your expertise, and benefit frmom cross-pormotions within our network. Join us for a dynamic partnership that propels your brand to new heights.
                                                Need help with The Exhibition Network customization?&nbsp;Reach us out at&nbsp;<a href="mailto:team@exhibition.org.in">team@exhibition.org.in</a> Our Team will be happy to bring your ideas to life. &nbsp;</p>
                                              
                                              <h2>Copyrighted images</h2>
                                              <p>Most of the demo images are included in the download package. But some images like brand logos, products are pixelated due to copyright restrictions. &nbsp;</p>
                                              
                                              <h2>Subscribe to newsletter</h2>
                                              <p>Interested in receiving email about new themes and updates?&nbsp;<a href="#">Subscribe here</a></p>
                                          </div>
                                      </div>

                                      <div class="tab-pane fade" id="reviews-tab" role="tabpanel">
                                              <div class="theme-review__submission-prompt d-flex justify-content-between align-items-center">
                                                  <div id="start_review_msg" class="">
                                                      <h6 class="mb-0">You must purchase this theme to leave a review.</h6>
                                                      <p class="text-gray fs-14">If you have already purchased it, <a href="#">login</a> to leave a review.</p>
                                                  </div>
                                              </div>
                                              
                                          <div id="review_form_response1" style="display:none;" class="alert"></div>
                                            <div class="theme-review">
                                                <form action="#" id="review_submit_form">
                                                    <input type="hidden" name="action" value="review_submit">
                                                    <input type="hidden" name="post_id" value="35287">
                                                    <div id="review_submit_form_overlay">
                                                        <i class="fa fa-spinner fa-spin"></i>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-8 mb-3">
                                                            <label class="col-form-label" for="reviewTitle">Review title</label>
                                                            <input class="form-control required" type="text" name="reviewTitle" id="reviewTitle">
                                                            <div class="invalid-feedback">Please provide a title</div>
                                                        </div>
                                                        <div class="form-group col-md-4 mb-3">
                                                            <label class="col-form-label" for="reviewScore">Review</label>

                                                            <select class="form-control required" name="reviewScore" id="reviewScore">
                                                                <option value="5">★★★★★ (5/5)</option>
                                                                <option value="4">★★★★☆ (4/5)</option>
                                                                <option value="3">★★★☆☆ (3/5)</option>
                                                                <option value="2">★★☆☆☆ (2/5)</option>
                                                                <option value="1">★☆☆☆☆ (1/5)</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please select a score</div>
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <label class="col-form-label" for="reviewBody">Review</label>
                                                            <span class="form-sublink" id="reviewBody_count">0/500</span>
                                                            <textarea class="form-control required" name="reviewBody" id="reviewBody"></textarea>
                                                            <div class="invalid-feedback">Please enter a review</div>
                                                        </div>
                                                        <div class="form-group col-12">
                                                            <button class="btn btn-brand btn-block" id="post_review" type="button">Post review</button>
                                                        </div>
                                                        <script>
                                                            jQuery(document).ready(function () {
                                                                jQuery("#reviewBody").on("keyup change", function () {
                                                                    var tex = jQuery(this).val();
                                                                    if (tex.length > 500) {
                                                                        tex = tex.substring(0, 500);
                                                                        jQuery(this).val(tex);
                                                                    }
                                                                    jQuery("#reviewBody_count").html(tex.length + "/500");
                                                                });

                                                                jQuery("#reviewBody").change();
                                                            });

                                                        </script>
                                                    </div>
                                                </form>
                                            </div>
                                          
                                            <div id="review_list" class="mt-4">
                                                    <div class="theme-review" id="comment_263387">
                                                        <div class="theme_review_item">
                                                            <div class="review_submit_form_overlay">
                                                                <i class="fa fa-spinner fa-spin"></i>
                                                            </div>
                                                            <div class="theme-review__heading">
                                                                <div class="theme-review__heading__item">
                                                                    <h6>Dashboard</h6>
                                                                    <ul class="list-dotted">
                                                                        <li class="list-dotted__item">by Sunday</li>
                                                                        <li class="list-dotted__item">2 months ago</li>
                                                                                                      </ul>
                                                                </div>
                                                                <div class="theme-review__heading__item">
                                                                    <ul class="rating">
                                                                      <li class="rating__item rating__item--active"></li>
                                                                      <li class="rating__item rating__item--active"></li>
                                                                      <li class="rating__item rating__item--active"></li>
                                                                      <li class="rating__item rating__item--active"></li>
                                                                      <li class="rating__item rating__item--active"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="theme-review__body">
                                                                <div class="main_reply_form">
                                                                    <div class="media-body">
                                                                        <form action="#" class="review_edit_form">
                                                                            <input type="hidden" name="action" value="review_edit">
                                                                            <input type="hidden" name="post_id" value="35287">
                                                                            <input type="hidden" name="comm_id" value="263387">


                                                                            <div class="row">
                                                                                <div class="form-group col-md-8 mb-3">
                                                                                    <label class="col-form-label" for="reviewTitle">Review title</label>
                                                                                    <input class="form-control required" type="text" name="reviewTitle" id="reviewTitle" value="Dashboard">
                                                                                    <div class="invalid-feedback">Please provide a title</div>
                                                                                </div>
                                                                                <div class="form-group col-md-4 mb-3">
                                                                                    <label class="col-form-label" for="reviewScore">Review</label>
                                                                                    <select class="form-control required" name="reviewScore" id="reviewScore">
                                                                                        <option value="5" selected="selected">★★★★★ (5/5)</option>
                                                                                        <option value="4">★★★★☆ (4/5)</option>
                                                                                        <option value="3">★★★☆☆ (3/5)</option>
                                                                                        <option value="2">★★☆☆☆ (2/5)</option>
                                                                                        <option value="1">★☆☆☆☆ (1/5)</option>
                                                                                    </select>
                                                                                    <div class="invalid-feedback">Please select a score</div>
                                                                                </div>
                                                                                <div class="form-group col-12">
                                                                                    <label class="col-form-label" for="reviewBody">Review</label>
                                                                                    <span class="form-sublink" id="reviewBody_edit_count">31/500</span>
                                                                                    <textarea class="form-control required" name="reviewBody" id="reviewBody_edit">Can you please add a dashboard </textarea>
                                                                                    <div class="invalid-feedback">Please enter a review</div>
                                                                                </div>
                                                                                <div class="form-group col-12">
                                                                                    <button class="btn btn-brand btn-block review_edit_button" type="button">Update review</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="main_reply_body">
                                                                    <p>Can you please add a dashboard </p>	                        </div>
                                                            </div>
                                                              <div class="theme_review_item">
                                                                <div class="review_submit_form_overlay">
                                                                    <i class="fa fa-spinner fa-spin"></i>
                                                                </div>
                                                                
                                                                        <div class="theme-review__reply media">
                                                                            <div class="profile-author__logo d-flex mr-3"><img class="profile-author__img" src="./Cartzilla – Multipurpose eCommerce Template - Bootstrap Themes_files/Createx_Logo_Icon-300x300.png" alt=""></div>
                                                                            <div class="media-body">
                                                                                <div class="theme-review__reply__heading mt-0 d-block">Createx Studio</div>
                                                                                <ul class="list-dotted mb-2">
                                                                                    <li class="list-dotted__item">Theme Creator</li>
                                                                                    <li class="list-dotted__item">2 months ago</li>

                                                                                                                              </ul>
                                                                                <div class="comm_reply_form">
                                                                                    <div class="media-body">
                                                                                        <form action="https://themes.getbootstrap.com/product/cartzilla-bootstrap-e-commerce-template-ui-kit/" class="reply_box">

                                                                                            <span class="form-sublink">490/500</span>
                                                                                            <input type="hidden" name="action" value="review_reply_edit">
                                                                                            <input type="hidden" name="post_id" value="35287">
                                                                                            <input type="hidden" name="comm_id" value="263388">
                                                                                            <textarea name="reply_body" class="reply_body theme-review__reply_input form-control mb-2">Hi Sunday,

                                                                                                Thank you very much for your review! We are working on a major update right now. It will bring fresh look, dark mode and more. Cartzilla is meant to be a front-end ui kit for e-commerce app. There are plenty of Dashboards available on the marketplace. However, since we are getting more requests for dashboard we'll think about including e-commerce focused dashboard components and layout into Cartzilla package in the future. Unfortunately, I can't give you ETA at this point.
                                                                                                </textarea>
                                                                                                                                                      <button class="btn btn-brand edit_reply" type="button">Update reply</button>
                                                                                                                                                  </form>
                                                                                                                                              </div>
                                                                                                                                          </div>
                                                                                                                                          <div class="comm_reply_body">
                                                                                                                                              <p class="theme-review__reply__body">Hi Sunday,<br>
                                                                                                <br>
                                                                                                Thank you very much for your review! We are working on a major update right now. It will bring fresh look, dark mode and more. Cartzilla is meant to be a front-end ui kit for e-commerce app. There are plenty of Dashboards available on the marketplace. However, since we are getting more requests for dashboard we'll think about including e-commerce focused dashboard components and layout into Cartzilla package in the future. Unfortunately, I can't give you ETA at this point.<br>
                                                                                                </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                                              </div>
                                                        </div>
                                                    </div>
                                            </div>
                                      </div>
                                                          
                                      <div class="tab-pane fade mt-4 mt-lg-5" id="changelog-tab" role="tabpanel">
                                              <div class="theme-description">
                                                  <h3>v2.5.1 –&nbsp; January 9, 2023</h3>
                                                      <p><strong>UPDATED:</strong> Plugins and libraries to latest versions including Bootstrap to v5.2.3</p>
                                                      <p><strong>FIXED:</strong> Product Gallery component to work correctly with the latest LightGallery plugin. Affected file is&nbsp;<strong>src/js/components/product-gallery.js</strong></p>
                                                      <p><strong>FIXED:&nbsp;</strong>Paths to correct LightGallery files in the following pages:&nbsp;<strong>home-electronics-store.html</strong>,&nbsp;<strong>shop-single-v1.html</strong>,&nbsp;<strong>shop-single-v2.html</strong>.</p>
                                                      <hr>
                                                      <h3>v2.5.0 –&nbsp; October 28, 2022</h3>
                                                      <p><strong>UPDATED:</strong> Plugins and libraries to latest versions including Bootstrap to v5.2.2</p>
                                                      <p><strong>UPDATED:</strong> Added support for CSS Custom Properties (aka CSS variables). Now you can change Primary and Accent colors globally via CSS variables</p>
                                                      <p><strong>FIXED:</strong> Gallery component to work correctly with the latest lightGallery plugin. Included plugin license key</p>
                                                      <p><strong>FIXED:</strong> Minor bug fixes and Documentation typos</p>
                                                      <hr>
                                                      <h3>v2.4.0 –&nbsp; January 31, 2022</h3>
                                                      <p><strong>NEW:</strong> NFT Marketplace Demo</p>
                                                      <ul>
                                                      <li>Homepage. <a href="https://cartzilla.createx.studio/home-nft.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Catalog v.1. <a href="https://cartzilla.createx.studio/nft-catalog-v1.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Catalog v.2. <a href="https://cartzilla.createx.studio/nft-catalog-v2.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Single Item – Auction Live. <a href="https://cartzilla.createx.studio/nft-single-auction-live.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Single Item – Auction Ended. <a href="https://cartzilla.createx.studio/nft-single-auction-ended.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Single Item – Buy Now. <a href="https://cartzilla.createx.studio/nft-single-buy.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Vedor Page. <a href="https://cartzilla.createx.studio/nft-vendor.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Connect Wallet. <a href="https://cartzilla.createx.studio/nft-connect-wallet.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Create New Item. <a href="https://cartzilla.createx.studio/nft-create-item.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Account – Profile Settings. <a href="https://cartzilla.createx.studio/nft-account-settings.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Account – My Items. <a href="https://cartzilla.createx.studio/nft-account-my-items.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Account – My Collections. <a href="https://cartzilla.createx.studio/nft-account-my-collections.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Account – Favorites. <a href="https://cartzilla.createx.studio/nft-account-favorites.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Account – Notifications. <a href="https://cartzilla.createx.studio/nft-account-notifications.html" target="_blank" rel="noopener">View demo</a></li>
                                                      </ul>
                                                      <p><strong>UPDATED:</strong> Plugins and libraries to latest versions including Bootstrap to v5.1.3</p>
                                                      <p><strong>UPDATED:</strong> Range slider component. It now accepts new&nbsp;data-currency&nbsp;attribute to change default ‘$’ inside tooltips</p>
                                                      <hr>
                                                      <h3>v2.3.0 –&nbsp; August 18, 2021</h3>
                                                      <p><strong>NEW:</strong> Loading placeholders component page. <a href="https://cartzilla.createx.studio/components/placeholders.html">View demo</a></p>
                                                      <p><strong>NEW:</strong> Navbar offcanvas example. <a href="https://cartzilla.createx.studio/components/navbar.html#navbar-offcanvas">View demo</a></p>
                                                      <p><strong>UPDATED:</strong> Plugins and libraries to latest versions including Bootstrap to v5.1.0</p>
                                                      <p><strong>UPDATED:</strong> Mobile menu. Now all 2nd-level sub-menus are hidden by default and expanded on parent click. Applied&nbsp;<strong>data-bs-autohide=”outside”</strong>&nbsp;attribute to the 1st-level dropdowns so they are not auto-closing when child dropdowns are expanding. Removed lines of CSS that shows 2nd-level dropdowns on mobile by default.<strong> Affected files:&nbsp;_navbar.scss,&nbsp;menu-primary.pug,&nbsp;menu-primary-dark.pug,&nbsp;menu-departments-electronics.pug</strong> and all compiled&nbsp;.html&nbsp;files.</p>
                                                      <hr>
                                                      <h3>v2.2.0 –&nbsp; July 28, 2021</h3>
                                                      <p><strong>NEW:</strong> Font icons added: WhatsApp and Rupee.</p>
                                                      <p><strong>NEW:</strong> WhatsApp social button</p>
                                                      <p><strong>UPDATED:</strong> Node.js to latest version 16x. Switched from deprecated&nbsp;node-sass&nbsp;to&nbsp;dart-sass. Replaced all cases of division&nbsp;/&nbsp;with multiplication&nbsp;*&nbsp;inside SCSS code.</p>
                                                      <p><strong>UPDATED:</strong> Plugins and libraries to latest versions including Bootstrap to v5.0.2</p>
                                                      <p><strong>UPDATED:</strong> README.md now includes basic installation instructions</p>
                                                      <hr>
                                                      <h3>v2.1.0 –&nbsp; May 17, 2021&nbsp;</h3>
                                                      <p><strong>NEW:</strong> Offcanvas component page. <a href="https://cartzilla.createx.studio/components/offcanvas.html">View demo</a></p>
                                                      <p><strong>NEW:</strong> Sticky Footer – to keep footer at the bottom even when there is little content on the page. <a href="https://cartzilla.createx.studio/sticky-footer.html">View demo</a></p>
                                                      <p><strong>UPDATED:</strong> Bootstrap to version 5.0.1</p>
                                                      <p><strong>UPDATED:</strong> All plugins, npm modules and dependencies to latest versions</p>
                                                      <p><strong>UPDATED:</strong> Icon font. Added 2 new brand icons: Discord and TikTok</p>
                                                      <p><strong>FIXED:</strong> Compatibility issue with new Bootstrap Offcanvas component. NOTE changes in class names, previously offcanvas-cap used as offcanvas header and footer. Now offcanvas-header, offcanvas-footer.</p>
                                                      <p><strong>FIXED:</strong> Gallery item hover state on Safari Mac OS</p>
                                                      <h3>v2.0.0 –&nbsp; February 10, 2021&nbsp;</h3>
                                                      <p><strong>NEW:</strong> Rebuilt Cartzilla core to fully support Bootstrap v5.0.0-beta1</p>
                                                      <ul>
                                                      <li>Dropped jQuery entirely. Redesigned Cartzilla JS to be modular (ES6 modules) and library agnostic.</li>
                                                      <li>Renamed custom CSS classes to follow the Bootstrap 5 naming</li>
                                                      <li>Rewrote Cartzilla utility classes to support new Bootstrap 5 Utility API</li>
                                                      <li>No longer supports IE &lt;=11</li>
                                                      </ul>
                                                      <p><strong>NEW:</strong> Off-canvas component that replaced the old one</p>
                                                      <p><strong>NEW:</strong> Product Bundle component. <a href="https://cartzilla.createx.studio/components/shop-components.html#product-bundle" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>UPDATED:</strong> Added navbar support for new dark dropdowns. It is possible to have 100% dark navbar now. <a href="https://cartzilla.createx.studio/navbar-3-level-dark.html" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>UPDATED:</strong> Cartzilla icon font. Added half start, filled thumb upd/down, etc. icons. <a href="https://cartzilla.createx.studio/components/icon-font.html">View demo</a></p>
                                                      <p><strong>UPDATED: </strong>Comment Like/Dislike buttons to have active (filled) state. <a href="https://cartzilla.createx.studio/components/buttons.html#buttons-like-dislike">View demo</a></p>
                                                      <p><strong>UPDATED: </strong>Added half-star to product rating pug mixin. It’s now possible to display 3.5 stars (+star-rating(3.5))</p>
                                                      <p><strong>UPDATED:</strong> All plugins, npm modules and dependencies to latest versions</p>
                                                      <p><strong>UPDATED:</strong> Removed transparent navigation bar (navbar-floating) due to bad compatibility with Bootstrap 5</p>
                                                      <p><strong>UPDATED:</strong> Documentation</p>
                                                      <p><strong>FIXED:</strong> Minor bug fixes and improvements</p>
                                                      <hr>
                                                      <h3>v1.4.0 –&nbsp; July 13, 2020&nbsp;</h3>
                                                      <p><strong>NEW:</strong> Food Delivery Service Demo</p>
                                                      <ul>
                                                      <li>Front Page (Homepage). <a href="https://cartzilla.createx.studio/home-food-delivery.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Category Page. <a href="https://cartzilla.createx.studio/food-delivery-category.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Single Item (Restaurant) Page. <a href="https://cartzilla.createx.studio/food-delivery-single.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Cart (Your Order). <a href="https://cartzilla.createx.studio/food-delivery-cart.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Checkout (Address &amp; Payment). <a href="https://cartzilla.createx.studio/food-delivery-checkout.html" target="_blank" rel="noopener">View demo</a></li>
                                                      </ul>
                                                      <p><strong>NEW:</strong> Single Post no Sidebar Template</p>
                                                      <p><strong>UPDATED:&nbsp;</strong>Bootstrap to latest stable version 4.5.0</p>
                                                      <p><strong>UPDATED:&nbsp;</strong>All plugins, npm modules and dependencies to latest versions</p>
                                                      <p><strong>UPDATED:&nbsp;</strong>Changed CSS class name of transparent navigation bar from&nbsp;navbar-transparent&nbsp;to&nbsp;navbar-floating. Updated&nbsp;stickyNavbar()&nbsp;function inside&nbsp;theme.js</p>
                                                      <p><strong>UPDATED:</strong> ajaxifySubscribeForm()&nbsp;inside&nbsp;theme.js. Rewrote code from jQuery to vanilla JavaScript</p>
                                                      <p><strong>UPDATED:</strong> Redesigned the structure of PUG templates dependencies: Moved&nbsp;navbar&nbsp;and&nbsp;footer&nbsp;partials from&nbsp;layout.pug&nbsp;to page templates. Now template inheritance works via&nbsp;block&nbsp;keyword. These changes made the compilation process 1.5x faster when you channge something in&nbsp;navbar&nbsp;or&nbsp;footer&nbsp;partials. Plus now you have more flexibility to adjust navigation bars and footers for individual pages.</p>
                                                      <p><strong>UPDATED:</strong> package.json&nbsp;and&nbsp;gulpfile.js&nbsp;files. Now all 3rd party plugins and libraries are installed via npm automatically when you run&nbsp;npn install&nbsp;command (previously manually) and moved from&nbsp;node_modules&nbsp;to&nbsp;dist&nbsp;folder by Gulp on project init. Read more about how add new vendor plugins to the project in&nbsp;<a href="https://cartzilla.createx.studio/docs/install-vendor-plugin.html" target="_blank" rel="noopener">this article</a></p>
                                                      <p><strong>UPDATED:&nbsp;</strong>Getting started and components documentation: Fixed components code examples. Updated section:&nbsp;<a href="https://cartzilla.createx.studio/docs/navbar-footer.html" target="_blank" rel="noopener">Navbar / Page title / Footer variants (Pug)</a>. Added section:&nbsp;<a href="https://cartzilla.createx.studio/docs/install-vendor-plugin.html" target="_blank" rel="noopener">Installing Vendor plugins with npm and Gulp</a></p>
                                                      <p><strong>UPDATED:</strong> Sketch file: added new Food Delivery Service demo frontpage mockup</p>
                                                      <p><strong>FIXED:&nbsp;</strong>Minor bug fixes and improvements</p>
                                                      <hr>
                                                      <h3>v1.3.0 –&nbsp; February 29, 2020&nbsp;</h3>
                                                      <p><strong>NEW:</strong> Grocery Store Demo</p>
                                                      <ul>
                                                      <li>Front Page (Homepage). <a href="https://cartzilla.createx.studio/home-grocery-store.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Product Catalog. <a href="https://cartzilla.createx.studio/grocery-catalog.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Single Product Page. <a href="https://cartzilla.createx.studio/grocery-single.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Checkout. <a href="https://cartzilla.createx.studio/grocery-checkout.html" target="_blank" rel="noopener">View demo</a></li>
                                                      </ul>
                                                      <p><strong>NEW:</strong> Single Product / Brand Store. <a href="https://cartzilla.createx.studio/home-single-store.html" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>NEW:</strong> Navbar with Side Menu. See live example on Grocery Store Demo page</p>
                                                      <p><strong>NEW:</strong> Transparent Navbar version. See live example on Single Product/Brand Store Demo page</p>
                                                      <p><strong>NEW:</strong> Javascript behavior when radio buttons behave like tabs by switching linked content. See live example on Single Product/Brand Demo page (Choose your style section)</p>
                                                      <p><strong>NEW:</strong> Added empty state for Cart dropdown. See live example on Single Product/Brand Demo page</p>
                                                      <p><strong>UPDATED: </strong>Replaced&nbsp;Salvattore.js&nbsp;with&nbsp;Shuffle.js&nbsp;and&nbsp;imagesLoaded.js&nbsp;for masonry grid (particularly Blog grid) layouts</p>
                                                      <p><strong>UPDATED:</strong> Color presets (radio buttons) now changing labels dynamically via Javascript. See it in action on Shop Single Product pages v1 and v2</p>
                                                      <p><strong>UPDATED:</strong> Added new icons to Cartzilla icon font</p>
                                                      <p><strong>UPDATED:</strong> Sketch file with new demo page design mockups</p>
                                                      <p><strong>UPDATED:</strong> Security patch: Added rel=’noopener’ to all links with target=’_blank’ attribute. For more info <a href="https://developers.google.com/web/tools/lighthouse/audits/noopener" target="_blank" rel="noopener">read&nbsp;this article</a></p>
                                                      <p><strong>UPDATED:</strong> Node modules to latest versions</p>
                                                      <p><strong>FIXED:</strong> Handheld Toolbar styles: Removed padding-bottom that equals to Toolbar height from body by default. Now you can add bottom padding to body by applyoing css class toolbar-enabled to body. If you use PUG it applies automatically if var isToolbar = true is added to particular page template or globally enabled via templates/helpers/config.pug. It’s done to ensure that you can remove bottom padding from body without editing core theme styles if you don’t need Handheld Toolbar.</p>
                                                      <p><strong>FIXED: </strong>SCSS maps in theme&nbsp;_variable.scss. Special thanks to Kevin Ramharak for the fix suggestion</p>
                                                      <p><strong>FIXED:</strong> Minor bug fixes and improvements</p>
                                                      <hr>
                                                      <h3>v1.2.0 –&nbsp; December 20, 2019&nbsp;</h3>
                                                      <p><strong>NEW:</strong> Added new Toolbar for Handheld devices that is fixed to bottom (similar to iOS) and holds all important buttons like Menu, Cart, Wishlist, Sidebar togglers, etc. This will improve user experience on handheld devices.</p>
                                                      <p><strong>NEW:</strong> Added .gitignore file to the download package that tells git which files (or patterns) it should ignore. Make sure to enable hidden files visibility on your system.</p>
                                                      <p><strong>UPDATED:</strong> Navigation bars (Headers): added tooltips for action buttons. Added separate wishlist button for cases when wishlist is available not only for registered users.</p>
                                                      <p><strong>UPDATED:</strong> 404 Error page templates</p>
                                                      <p><strong>UPDATED:</strong>&nbsp;JavaScript plugins to latest versions</p>
                                                      <p><strong>UPDATED:</strong>&nbsp;Node modules to latest versions</p>
                                                      <p><strong>FIXED:&nbsp;</strong>Documentation typos and wrong content</p>
                                                      <p><strong>FIXED:</strong> Minor bug fixes and improvements</p>
                                                      <hr>
                                                      <h3>v1.1.0 –&nbsp; November 30, 2019</h3>
                                                      <p><strong>NEW:</strong>&nbsp;Digital Products Marketplace Demo</p>
                                                      <ul>
                                                      <li>Front Page (Homepage). <a href="https://cartzilla.createx.studio/home-marketplace.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Catalog (Category) page with filters. <a href="https://cartzilla.createx.studio/marketplace-category.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Single Item Page. <a href="https://cartzilla.createx.studio/marketplace-single.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Vendor (Seller) Page. <a href="https://cartzilla.createx.studio/marketplace-vendor.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Cart page template. <a href="https://cartzilla.createx.studio/marketplace-cart.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Checkout page template. <a href="https://cartzilla.createx.studio/marketplace-checkout.html" target="_blank" rel="noopener">View demo</a></li>
                                                      </ul>
                                                      <p><strong>NEW:&nbsp;</strong>Marketplace Vendor / User Dashboard</p>
                                                      <ul>
                                                      <li>Profile Settings. <a href="https://cartzilla.createx.studio/dashboard-settings.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Purchases. <a href="https://cartzilla.createx.studio/dashboard-purchases.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Favorites. <a href="https://cartzilla.createx.studio/dashboard-favorites.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Sales. <a href="https://cartzilla.createx.studio/dashboard-sales.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Products. <a href="https://cartzilla.createx.studio/dashboard-products.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Add New Product. <a href="https://cartzilla.createx.studio/dashboard-add-new-product.html" target="_blank" rel="noopener">View demo</a></li>
                                                      <li>Payouts. <a href="https://cartzilla.createx.studio/dashboard-payouts.html" target="_blank" rel="noopener">View demo</a></li>
                                                      </ul>
                                                      <p><strong>NEW:&nbsp;</strong>Electronics Store Homepage. <a href="https://cartzilla.createx.studio/home-electronics-store.html" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>NEW:</strong>&nbsp;Single Product Page v2. <a href="https://cartzilla.createx.studio/shop-single-v2.html" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>NEW:</strong>&nbsp;Product Comparison Page (Table). <a href="https://cartzilla.createx.studio/comparison.html" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>NEW:</strong>&nbsp;Navbar Versions for: Marketplace and Electronics Store</p>
                                                      <p><strong>NEW:</strong>&nbsp;Footer Version for: Marketplace</p>
                                                      <p><strong>NEW:</strong>&nbsp;Qucik View Popup v2 (for Electronics Store)</p>
                                                      <p><strong>NEW:</strong>&nbsp;404 Error Page Template (Text variant). <a href="https://cartzilla.createx.studio/404-simple.html" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>NEW:</strong>&nbsp;Charts Component. <a href="https://cartzilla.createx.studio/components/charts.html" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>NEW:</strong>&nbsp;Countdown Timer Component. <a href="https://cartzilla.createx.studio/components/countdown.html" target="_blank" rel="noopener">View demo</a></p>
                                                      <p><strong>NEW:</strong>&nbsp;Product Card for Digital (Downloadable) Products</p>
                                                      <p><strong>NEW:</strong>&nbsp;Drag &amp; Drop File Uploader. See updated Forms component page for more details</p>
                                                      <p><strong>UPDATED:</strong>&nbsp;Bootstrap to latest version 4.4.1</p>
                                                      <p><strong>UPDATED:</strong>&nbsp;Homepage Hero Slider. Added Animations to Slider Text Layers</p>
                                                      <p><strong>UPDATED:</strong>&nbsp;Icon Font. Added new Icons to the collection</p>
                                                      <p><strong>UPDATED:&nbsp;</strong>_variables.scss&nbsp;Added&nbsp;$path-to-fonts&nbsp;variable. Now it’s easier to change theme font via&nbsp;_user-variables.scss</p>
                                                      <p><strong>UPDATED:</strong>&nbsp;Sketch file. Added new page mockups</p>
                                                      <p><strong>UPDATED:</strong>&nbsp;Documentation and Components</p>
                                                      <p><strong>FIXED:</strong> Minor bug fixes and improvements</p>
                                                      <hr>
                                                      <h3>&nbsp;v1.0.0 –&nbsp; October 21, 2019</h3>
                                                      <ul>
                                                          <li>Initial release</li>
                                                      </ul>
                                              </div>
                                      </div>
                                  </div>

                                  <div class="summary entry-summary">
                                  </div><!-- .summary -->
                              </div>
                          </div>

                          <div class="col-lg-4 d-none d-lg-block pl-xs-0 pl-lg-5">
                              <div class="d-flex align-items-center mb-3">
                                <h2 class="fs-20 mb-0">License Options</h2>
                                <span class="fs-13 ml-auto">
                                  <a href="#">Full details →</a>
                                </span>
                              </div>

                              <form class="mb-4">
                                <div class="form-group mb-4 switch_price_prod" data-type="Standard License">
                                  <div class="custom-control custom-control-license">
                                    <input class="custom-control-input" id="licenseSingle" name="license" type="radio" checked="">
                                    <label class="custom-control-label d-flex align-items-center" for="licenseSingle">
                                      <div class="mr-auto">
                                        <h6 class="mb-0">Standard</h6>
                                        <span class="fs-13 text-gray-soft">Single Site</span>
                                      </div>
                                      <div class="d-flex align-items-center ml-auto">
                                        <strong class="fs-18 mr-1">$</strong>
                                        <strong class="h2">49</strong>
                                      </div>
                                    </label>
                                  </div>
                                </div>

                                <div class="form-group mb-4 switch_price_prod" data-type="Multisite License">
                                  <div class="custom-control custom-control-license">
                                    <input class="custom-control-input" id="licenseMultisite" name="license" type="radio">
                                    <label class="custom-control-label d-flex align-items-center" for="licenseMultisite">
                                      <div class="mr-auto">
                                        <h6 class="mb-0">Multisite</h6>
                                        <span class="fs-13 text-gray-soft">Unlimited sites</span>
                                      </div>
                                      <div class="d-flex align-items-center ml-auto">
                                        <strong class="fs-18 mr-1">$</strong>
                                        <strong class="h2">149</strong>
                                      </div>
                                    </label>
                                  </div>
                                </div>
                                <div class="form-group mb-4 switch_price_prod" data-type="Extended License">
                                  <div class="custom-control custom-control-license">
                                    <input class="custom-control-input" id="licenseExtended" name="license" type="radio">
                                    <label class="custom-control-label d-flex align-items-center" for="licenseExtended">
                                      <div class="mr-auto">
                                        <h6 class="mb-0">Extended</h6>
                                        <span class="fs-13 text-gray-soft">For paying users</span>
                                      </div>
                                      <div class="d-flex align-items-center ml-auto">
                                        <strong class="fs-18 mr-1">$</strong>
                                        <strong class="h2">499</strong>
                                      </div>
                                    </label>
                                  </div>
                                </div>
                              </form>



                              <form action="#" method="POST" class=" btn-block">
                                  <input type="hidden" js-license-type="license_type" name="license_type" value="Standard License">
                                  <input type="hidden" name="add-to-cart" value="35287">
                                  <button type="submit" class="btn btn-brand btn-block btn-checkout"> 
                                    <span class="btn-text">Add to cart</span></button>
                              </form>

                              <a class="btn btn-outline-brand btn-block mb-4 ml-0" target="_blank" href="#">Live preview</a>
                              <div class="theme-purchases">
                                  <div class="theme-purchases__item">
                                      <a class="theme-purchases__item__inner text-center" data-toggle="tab" href="#reviews-tab" role="tab" js-handle="review-toggler">
                                          <ul class="rating justify-content-center">
                                              <li class="rating__item rating__item--active"></li><li class="rating__item rating__item--active"></li>
                                              <li class="rating__item rating__item--active"></li>
                                              <li class="rating__item rating__item--active"></li><li class="rating__item rating__item--active"></li>
                                          </ul>

                                          <p>4.71/5 (21 reviews)</p>
                                      </a>
                                      <div class="theme-purchases__item__inner text-center">
                                          <h5 class="mb-0"><i class="bootstrap-themes-icon-cart"></i>2178</h5>
                                          <p>Purchases</p>
                                      </div>
                                  </div>
                                  <div class="theme-purchases__item">
                                      <div class="theme-purchases__item__inner px-0">
                                          <ul class="guarantees">
                                              <li> <i class="bootstrap-themes-icon-check-circle"></i>Reviewed by the Bootstrap team</li>
                                              <li><i class="bootstrap-themes-icon-check-circle"></i><a href="#">6 months technical support</a></li>
                                              <li><i class="bootstrap-themes-icon-check-circle"></i>100% money back guarantee</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>


                              <div class="theme-description__list">
                                                  <div class="theme-description__list__item"><span class="theme-description__item__title">Bootstrap</span><span>v5.2.3</span></div>
                                              <div class="theme-description__list__item"><span class="theme-description__item__title">Released</span><span>4 years ago</span></div>

                                                  <div class="theme-description__list__item"><span class="theme-description__item__title">Updated</span><span>6 months ago</span></div>
                                                              <div class="theme-description__list__item"><span class="theme-description__item__title">Version</span><span>2.5.1</span></div>
                                              <div class="theme-description__list__item"><span class="theme-description__item__title">Category</span>
                                      <a href="#">E-Commerce &amp; Retail</a>            </div>
                                                  <div class="theme-description__list__item align-items-center"><span class="theme-description__item__title">Questions?</span><a class="btn btn-xs btn-outline-brand" href="mailto:support@createx.studio" target="_blank">Contact Seller</a></div>
                                              <div class="theme-description__list__item">
                                      <a class="profile-author" href="https://themes.getbootstrap.com/store/createx-studio">
                                          <div class="profile-author__logo">
                                              <img class="profile-author__img" src="./Cartzilla – Multipurpose eCommerce Template - Bootstrap Themes_files/Createx_Logo_Icon-300x300.png" alt="">
                                          </div>
                                          <div class="profile-author__author__description">
                                              <p>Created by</p>
                                              <h6 class="profile-logo__author__title">Createx Studio</h6>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="theme-cards-holder mt-5 pt-5" style="border-top: 1px solid #D5DCE5; border-bottom-width: 0; margin-bottom: -60px;">
                        <div class="theme-cards__heading">
                            <div>
                              <h5 class="theme-cards__title">Related Exhibition</h5>
                              <p class="text-gray-soft">Related Exhibition in the same category.</p>
                            </div>
                                <a class="theme-cards__heading__button btn btn-outline-brand btn-sm" href="#">View All</a>
                        </div>
                            <ul class="row">
                                
                                    <li class="col-md-4 col-6">
                                        <div class="theme-card">
                                            <div class="theme-card__body">
                                                <a class="d-block" href="#">
                                                    <img width="400" height="300" src="./Cartzilla – Multipurpose eCommerce Template - Bootstrap Themes_files/screenshot-400x300.jpg" class="theme-card__img wp-post-image" alt="" srcset="https://themes.getbootstrap.com/wp-content/uploads/2021/06/screenshot-400x300.jpg 400w, https://themes.getbootstrap.com/wp-content/uploads/2021/06/screenshot-800x600.jpg 800w, https://themes.getbootstrap.com/wp-content/uploads/2021/06/screenshot.jpg 1200w, https://themes.getbootstrap.com/wp-content/uploads/2021/06/screenshot-768x576.jpg 768w, https://themes.getbootstrap.com/wp-content/uploads/2021/06/screenshot-600x450.jpg 600w, https://themes.getbootstrap.com/wp-content/uploads/2021/06/screenshot-200x150.jpg 200w, https://themes.getbootstrap.com/wp-content/uploads/2021/06/screenshot-540x405.jpg 540w" sizes="(max-width: 400px) 100vw, 400px">            </a>

                                                <a class="theme-card__body__overlay btn btn-brand btn-sm" target="_blank" href="https://themes.getbootstrap.com/preview/?theme_id=92316">Live preview</a>
                                            </div>
                                            <div class="theme-card__footer">
                                                <div class="theme-card__footer__item">
                                                  <a class="theme-card__title mr-1" href="https://themes.getbootstrap.com/product/finder-directory-listings-template-ui-kit/">Finder – Directory &amp; Listings Template + UI Kit</a>
                                                    <p class="theme-card__info"></p>
                                                      <ul class="prod_cats_list">
                                                        <li>
                                                          <a href="https://themes.getbootstrap.com/product-category/ecommerce-retail/">E-Commerce &amp; Retail</a>
                                                        </li>
                                                      </ul>                
                                                    <p></p>
                                                </div>

                                                <div class="theme-card__footer__item">
                                                    <p class="theme-card__price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>49.00</span></p>

                                                    <ul class="rating">
                                                        <li class="rating__item rating__item--active"></li>
                                                        <li class="rating__item rating__item--active"></li>
                                                        <li class="rating__item rating__item--active"></li>
                                                        <li class="rating__item rating__item--active"></li>
                                                        <li class="rating__item rating__item--active"></li>                
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                  
                            </ul>
                      </div>
                </main>
              </div>
          </div>
        </div>
      </div>
    </section>
  </main>