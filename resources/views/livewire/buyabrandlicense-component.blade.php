<main>


<!-- new -->

<!-- new -->
    <section class="container-fluid py-5 my-5 py-lg-5">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center mt-4 mb-3">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
            </div>
            <h2 class="display-5 fw-normal">Boost your Brand</h2>
            <p class="col-md-6 col-lg-8  mx-auto lead">Smart exhibition solutions that reduce cost, simplify participation, and maximize visibility for growing brands.</p>
            <a href="#opening" class="btn btn-lg btn-outline-primary mb-3">Strategize Market Expansion to your Business</a>
            <a href="" class="btn btn-sm" style="color:#000">Get Started</a>
          </div>
        </div>

        <div class="col-md-6">
          <ul>
          <li><a href="" class="btn btn-lg btn-outline-primary mb-2">Premium Design <span>20,000 per sqm</span></a></li>
          <li><a href="" class="btn btn-lg btn-outline-primary mb-2">Economic Design <span>15,000 per sqm</span></a></li>
          <li><a href="" class="btn btn-lg btn-outline-primary mb-2">Free Design <span>3,000 per sqm</span></a></li>
            
          </ul>
          
        </div>

      </div>
        

        


    </section>


 <!-- new-try -->
    <section class="pt-4 sticky-section">
        <div class="container">
            <!-- Trust / Rating Bar -->
            <div class="d-flex flex-wrap align-items-center justify-content-center gap-3 mb-4 small">

            <span class="text-muted">Our customers say</span>

            <strong class="fs-6">Excellent</strong>

            <!-- Stars -->
            <div class="d-flex align-items-center gap-1">
                <span class="text-success">★★★★★</span>
            </div>

            <span class="text-muted">
                4.5 out of 5 stars based on <strong>129,972</strong> reviews
            </span>

            <!-- Trustpilot -->
            <div class="d-flex align-items-center gap-1">
                <span class="text-success fs-5">★</span>
                <strong>Great Exhibition To Exhibit</strong>
            </div>

            </div>
        </div>

        <style>
            /* Pills container */
            .custom-pills {
                background: #f5f5f5;
                border-radius: 50px;
                padding: 6px;
                display: flex;
                gap: 6px;
            }

            /* Pills */
            .custom-pills .nav-link {
                border-radius: 50px;
                padding: 8px 18px;
                color: #000;
                font-weight: 500;
                white-space: nowrap;
            }

            /* Active pill */
            .custom-pills .nav-link.active {
                background: #dcdcdc;
                color: #000;
            }

            /* Arrow icon */
            .icon-circle {
                width: 36px;
                height: 36px;
                border-radius: 50%;
                background: #f5f5f5;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: 600;
                cursor: pointer;
            }
        </style>

        <div class="pt-3  pb-2">
            <div class="container">

                <div class="d-flex align-items-center gap-3">
                    <!-- Pills -->
                    <ul class="nav custom-pills">

                       <!-- Arrow Item -->
                        <li class="nav-item">
                            <a class="nav-link arrow-pill" href="#event-header">
                                ↑
                            </a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="#">Marketing Planner</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="#">Social and Email</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Search Engine Optimization
                        </a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>

<!-- new-end -->

    <div class="columns-1 sm:columns-2 md:columns-3 gap-6 px-4">
        @foreach($photos as $imgo)
            <div class="mb-6 break-inside-avoid rounded-2xl overflow-hidden bg-white shadow-md hover:shadow-xl transition">
                
                <img 
                    src="{{ url('public/assets/image/exhibition/'.$imgo->brand_lgo) }}" 
                    class="w-full"
                    alt="Exhibition Stall"
                >

                <div class="p-3">
                    <h4 class="text-sm font-semibold text-gray-800">
                        {{ $imgo->brand_name ?? 'Stall Design' }}
                    </h4>
                    <p class="text-xs text-gray-500">
                        9 sqm | Modular Booth
                    </p>
                </div>

            </div>
        @endforeach
    </div>

<!-- optimize -->
 
<!--Our culture and values-->
<section class="container py-3 py-lg-5 pt-5 mt-5 mb-3">
  <h2 class="display-5 text-center my-2">Boost your brand with O'lero Studio.</h2>
  <p class="fs-sm  text-center">No design experience needed. Easily create content that elevates your brand everywhere, from your website to social posts and advertising.</p>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col col-md-3">
      <div class="card h-100  border-0">

        <div class="card-body">
          <h5 class="card-title">Individual Opportunity</h5>
          <p class="card-text" style="color:#ff0440;">Exhibit without booking a full stall</p>

          <p class="card-text">Individual Opportunity allows brands, entrepreneurs, and service providers to participate in exhibitions without taking a full-sized booth. You get a dedicated display or participation slot within a shared or curated zone.</p>
          <a href="" class="btn btn-lg btn-outline-primary mb-3"> Get Started</a>
        </div>
      </div>
    </div>

    <div class="col col-md-3">
      <div class="card h-100 border-0">

        <div class="card-body">
          <h5 class="card-title">Free Stand Access</h5>
          <p class="card-text" style="color:#ff0440;"Subsidized or sponsored exhibition space</p>
          <p class="card-text">Free Stand Access gives eligible members the opportunity to secure fully or partially sponsored exhibition space, usually supported by government bodies, partners, or organizers.</p>
          <a href="" class="btn btn-lg btn-outline-primary mb-3"> Get Started</a>
        </div>
      </div>
    </div>

    <div class="col col-md-3">
      <div class="card h-100 border-0">

        <div class="card-body">
          <h5 class="card-title">New Product Showcase</h5>
          <p class="card-text" style="color:#ff0440;" >Launch, display, and validate your product</p>

          <p class="card-text">New Product Showcase allows exhibitors to present newly launched or innovative products in a dedicated showcase or innovation zone at exhibitions.</p>
          <a href="" class="btn btn-lg btn-outline-primary mb-3"> Get Started</a>
        </div>
      </div>
    </div>
    <div class="col col-md-3 ">
      <div class="card h-100 border-0">

        <div class="card-body">
          <h5 class="card-title" >Manage Your Stand</h5>
          <p class="card-text" style="color:#ff0440;">End-to-end stand coordination & support</p>
          <p class="card-text">Manage Your Stand is a done-for-you operational service where we handle all coordination and logistics related to your exhibition stand.</p>
          <a href="" class="btn btn-lg btn-outline-primary mb-3"> Get Started</a>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>

<!--Our culture and values-->
<section class="container py-3 py-lg-5 pt-5 mt-5 mb-3">
  <h2 class="display-5 text-center my-2">Optimize Offline Opportunities, Offering </h2>
  <p class="fs-sm  text-center">Powered by #ol'ero</p>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col col-md-3">
      <div class="card h-100  border-0">

        <div class="card-body text-center">
          <h5 class="card-title " style="color:#ff0440;">Reaching more people</h5>
          <p class="card-text">

            Market to the world, share business to customers ready to do business.
          </p>
        </div>
      </div>
    </div>
    <div class="col col-md-3">
      <div class="card h-100 border-0">

        <div class="card-body text-center">
          <h5 class="card-title " style="color:#ff0440;">Listen to your customers</h5>
          <p class="card-text">Power-up your selling efforts with us.</p>
        </div>
      </div>
    </div>

    <div class="col col-md-3">
      <div class="card h-100 border-0">

        <div class="card-body text-center">
          <h5 class="card-title " style="color:#ff0440;">Build on market trends</h5>
          <p class="card-text">Develop talent and keep skill-up.</p>
        </div>
      </div>
    </div>
    <div class="col col-md-3 ">
      <div class="card h-100 border-0">

        <div class="card-body text-center">
          <h5 class="card-title" style="color:#ff0440;">Go into new places</h5>
          <p class="card-text">Get social, starts with making the right connections.</p>
        </div>
      </div>
    </div>

  </div>
  </div>
</section>
<!-- end optimize -->


    <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
    <section class="col-lg-8">

              <!-- Order details-->
      <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Review your order</h2>
      <!-- Item-->
      <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
        <div class="d-sm-flex text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="img/shop/cart/01.jpg" width="160" alt="Product"></a>
          <div class="pt-2">
            <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
            <div class="fs-sm"><span class="text-muted me-2">Size:</span>8.5</div>
            <div class="fs-sm"><span class="text-muted me-2">Color:</span>White &amp; Blue</div>
            <div class="fs-lg text-accent pt-2">$154.<small>00</small></div>
          </div>
        </div>
        <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-end" style="max-width: 9rem;">
          <p class="mb-0"><span class="text-muted fs-sm">Quantity:</span><span>&nbsp;1</span></p>
          <button class="btn btn-link px-0" type="button"><i class="ci-edit me-2"></i><span class="fs-sm">Edit</span></button>
        </div>
      </div>
      <!-- Item-->
      <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
        <div class="d-sm-flex text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="img/shop/cart/02.jpg" width="160" alt="Product"></a>
          <div class="pt-2">
            <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
            <div class="fs-sm"><span class="text-muted me-2">Brand:</span>Tommy Hilfiger</div>
            <div class="fs-sm"><span class="text-muted me-2">Color:</span>Khaki</div>
            <div class="fs-lg text-accent pt-2">$79.<small>50</small></div>
          </div>
        </div>
        <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-end" style="max-width: 9rem;">
          <p class="mb-0"><span class="text-muted fs-sm">Quantity:</span><span>&nbsp;1</span></p>
          <button class="btn btn-link px-0" type="button"><i class="ci-edit me-2"></i><span class="fs-sm">Edit</span></button>
        </div>
      </div>
      <!-- Item-->
      <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
        <div class="d-sm-flex text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="img/shop/cart/03.jpg" width="160" alt="Product"></a>
          <div class="pt-2">
            <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h3>
            <div class="fs-sm"><span class="text-muted me-2">Brand:</span>The North Face</div>
            <div class="fs-sm"><span class="text-muted me-2">Color:</span>Pink / Beige / Dark blue</div>
            <div class="fs-lg text-accent pt-2">$22.<small>50</small></div>
          </div>
        </div>
        <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-end" style="max-width: 9rem;">
          <p class="mb-0"><span class="text-muted fs-sm">Quantity:</span><span>&nbsp;1</span></p>
          <button class="btn btn-link px-0" type="button"><i class="ci-edit me-2"></i><span class="fs-sm">Edit</span></button>
        </div>
      </div>
      <!-- Item-->
      <div class="d-sm-flex justify-content-between my-4 pb-3 border-bottom">
        <div class="d-sm-flex text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="img/shop/cart/04.jpg" width="160" alt="Product"></a>
          <div class="pt-2">
            <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h3>
            <div class="fs-sm"><span class="text-muted me-2">Size:</span>42</div>
            <div class="fs-sm"><span class="text-muted me-2">Color:</span>Light blue</div>
            <div class="fs-lg text-accent pt-2">$9.<small>00</small></div>
          </div>
        </div>
        <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-end" style="max-width: 9rem;">
          <p class="mb-0"><span class="text-muted fs-sm">Quantity:</span><span>&nbsp;1</span></p>
          <button class="btn btn-link px-0" type="button"><i class="ci-edit me-2"></i><span class="fs-sm">Edit</span></button>
        </div>
      </div>
      
    </section>
     </div>
    </div>

      <!-- Bootstrap Icons CDN -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


      <style>
        .hero-section h1, .hero-section p {
          text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
        }
        .hero-section .btn {
          letter-spacing: 0.5px;
          border-radius: 0.375rem;
        }
        .hero-section .bg-danger {
          font-size: 0.9rem;
        }
      </style>

      <!-- Hero Section -->
      <section class="hero-section d-flex align-items-center text-white text-center px-3 py-5" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('your-background.jpg') no-repeat center center / cover; min-height: 100vh;">
        <div class="container">
          
          <!-- Header Badge Row -->
          <div class="d-flex align-items-center justify-content-center mb-4">
            <div class="text-center me-3">
              <h2 class="mb-0 fw-bold" style="font-size: 2.2rem;">30<sup style="font-size: 1rem;">a</sup></h2>
              <small class="text-uppercase">edition</small>
            </div>

            <div class="bg-danger px-3 py-2 text-uppercase fw-bold me-3">
              Artigiano <br> in Fiera
            </div>

            <div class="display-5 fw-semibold">2025</div>
          </div>

          <!-- Tagline -->
          <h1 class="display-6 fw-bold mb-3">We put each artisan under the spotlight</h1>
          <p class="lead mb-4">Artigiano in fiera is the most important worldwide event dedicated to artisanship and small businesses</p>

          <!-- Buttons -->
          <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mb-4">
            <a href="#" class="btn btn-danger btn-lg fw-bold text-uppercase px-4">Book Your Stand</a>
            <a href="#" class="btn btn-danger btn-lg fw-bold text-uppercase px-4">Stand Out From the Rest</a>
          </div>

          <!-- Optional Calendar (You can plug in live data) -->
          <div class="d-inline-block bg-white text-dark p-3 rounded shadow-sm">
            <div class="d-flex gap-4">
              <div class="text-center">
                <div class="fw-bold text-danger">Saturday</div>
                <div class="fs-3 fw-bold">28</div>
              </div>
              <div class="text-center">
                <div class="fw-bold">Sunday</div>
                <div class="fs-3 fw-bold">11</div>
              </div>
            </div>
          </div>

        </div>
      </section>

</main>



        <section  class="container-fluid py-3 py-lg-5  ">
          <div class="text-center mt-4 mb-3">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
              

            </div>
              <h2 class="display-3 fw-normal"></h2>
            <p class="col-md-10 col-lg-8 mx-auto lead">
            <span class="fs-sm fw-bolder "> Presents by</span> <a href="" style="color:#ff0440;">Council of Innovation</a> <br>
            
             <strong>Connect World's professionals to make them more productive and successfull.</strong> 
             <br><span class="fs-lg fw-bolder">Market to the world, share to professional auidence</span>
            </p>
            <a href="" class="btn btn-lg btn-outline-primary mb-3">Reserve your spot</a>
          </div>
        
        </section>

        <section  class="container-fluid py-3 py-lg-5  ">
          <div class="text-center mt-4 mb-3">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
              

            </div>
              <h2 class="display-3 fw-normal">Webinars</h2>
            <p class="col-md-10 col-lg-8 mx-auto lead">
            <span class="fs-sm fw-bolder "> Presents by</span> <a href="" style="color:#ff0440;">Council of Innovation</a> <br>
            
             <strong>Check out our free webinars brought to you by our innovation professionals.</strong> 
             <br><span class="fs-lg fw-bolder">Market to the world, share to professional auidence</span>
            </p>
            <a href="" class="btn btn-lg btn-outline-primary mb-3">Reserve your spot</a>
          </div>
        
        </section>


        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <h2 class="h1 my-2" style="color: #ff0440;">Our core team</h2>
          <p class="fs-sm text-muted">People behind your great shopping experience</p>
          <div class="row pt-3">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/03.jpg" width="96" alt="Jonathan Doe">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Jonathan Doe</h6>
                  <p class="fs-ms text-muted mb-0">CEO, Co-founder</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:johndoe@example.com"><i class="ci-mail me-2"></i>johndoe@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/04.jpg" width="96" alt="Barbara Palson">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Barbara Palson</h6>
                  <p class="fs-ms text-muted mb-0">Chief of Marketing</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.palson@example.com"><i class="ci-mail me-2"></i>b.palson@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/06.jpg" width="96" alt="William Smith">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">William Smith</h6>
                  <p class="fs-ms text-muted mb-0">Financial director</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:w.smith@example.com"><i class="ci-mail me-2"></i>w.smith@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/02.jpg" width="96" alt="Amanda Gallaher">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Amanda Gallaher</h6>
                  <p class="fs-ms text-muted mb-0">Lead UX designer</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:a.gallaher@example.com"><i class="ci-mail me-2"></i>a.gallaher@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/01.jpg" width="96" alt="Benjamin Miller">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Benjamin Miller</h6>
                  <p class="fs-ms text-muted mb-0">Website development</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i class="ci-mail me-2"></i>b.miller@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/07.jpg" width="96" alt="Miguel Rodrigez">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Miguel Rodrigez</h6>
                  <p class="fs-ms text-muted mb-0">Content manager</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i class="ci-mail me-2"></i>m.rodrigez@example.com</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <h2 class="h1 my-2 text-center" style="color:#ff0440;">Our Clients</h2>
          <p class="fs-sm text-muted text-center">People behind your great shopping experience</p>
          <div class="row pt-3">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/03.jpg" width="96" alt="Jonathan Doe">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Jonathan Doe</h6>
                  <p class="fs-ms text-muted mb-0">CEO, Co-founder</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:johndoe@example.com"><i class="ci-mail me-2"></i>johndoe@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/04.jpg" width="96" alt="Barbara Palson">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Barbara Palson</h6>
                  <p class="fs-ms text-muted mb-0">Chief of Marketing</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.palson@example.com"><i class="ci-mail me-2"></i>b.palson@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/06.jpg" width="96" alt="William Smith">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">William Smith</h6>
                  <p class="fs-ms text-muted mb-0">Financial director</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:w.smith@example.com"><i class="ci-mail me-2"></i>w.smith@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/02.jpg" width="96" alt="Amanda Gallaher">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Amanda Gallaher</h6>
                  <p class="fs-ms text-muted mb-0">Lead UX designer</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:a.gallaher@example.com"><i class="ci-mail me-2"></i>a.gallaher@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/01.jpg" width="96" alt="Benjamin Miller">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Benjamin Miller</h6>
                  <p class="fs-ms text-muted mb-0">Website development</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i class="ci-mail me-2"></i>b.miller@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/07.jpg" width="96" alt="Miguel Rodrigez">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Miguel Rodrigez</h6>
                  <p class="fs-ms text-muted mb-0">Content manager</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i class="ci-mail me-2"></i>m.rodrigez@example.com</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="container py-3 py-lg-5 mt-4 mb-3">
          <h2 class="h1 my-2" style="color: #ff0440;">Business Consultant</h2>
          <p class="fs-sm text-muted">People behind your great shopping experience</p>
          <div class="row pt-3">
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/03.jpg" width="96" alt="Jonathan Doe">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Jonathan Doe</h6>
                  <p class="fs-ms text-muted mb-0">CEO, Co-founder</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:johndoe@example.com"><i class="ci-mail me-2"></i>johndoe@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/04.jpg" width="96" alt="Barbara Palson">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Barbara Palson</h6>
                  <p class="fs-ms text-muted mb-0">Chief of Marketing</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.palson@example.com"><i class="ci-mail me-2"></i>b.palson@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/06.jpg" width="96" alt="William Smith">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">William Smith</h6>
                  <p class="fs-ms text-muted mb-0">Financial director</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:w.smith@example.com"><i class="ci-mail me-2"></i>w.smith@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/02.jpg" width="96" alt="Amanda Gallaher">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Amanda Gallaher</h6>
                  <p class="fs-ms text-muted mb-0">Lead UX designer</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:a.gallaher@example.com"><i class="ci-mail me-2"></i>a.gallaher@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/01.jpg" width="96" alt="Benjamin Miller">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Benjamin Miller</h6>
                  <p class="fs-ms text-muted mb-0">Website development</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i class="ci-mail me-2"></i>b.miller@example.com</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-grid-gutter">
              <div class="d-flex align-items-center"><img class="rounded-circle" src="img/team/07.jpg" width="96" alt="Miguel Rodrigez">
                <div class="ps-3">
                  <h6 class="fs-base pt-1 mb-1">Miguel Rodrigez</h6>
                  <p class="fs-ms text-muted mb-0">Content manager</p><a class="nav-link-style fs-ms text-nowrap" href="mailto:b.miller@example.com"><i class="ci-mail me-2"></i>m.rodrigez@example.com</a>
                </div>
              </div>
            </div>
          </div>
        </section>