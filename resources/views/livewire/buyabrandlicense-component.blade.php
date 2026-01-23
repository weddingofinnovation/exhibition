<main>

    <style>
          .plus-badge {
                background: #00e3c8;
                color: #000;
                font-weight: 700;
                padding: 6px 10px;
                font-size: 12px;
                border-radius: 4px;
            }

          .btn-outline-primary{
            border-color: #000;
            color: #000;
          }

          .text-muted {
            color: #000;
          }

          .sectionlevel { 
              padding-bottom: 7.5rem;
              padding-top: 7.5rem;
            }

            .bg-light {
              --bs-bg-opacity: 1;
              /* --bs-light-rgb: 248, 248, 248; */
              background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
            }

    :root [data-bs-theme=light] {
          --bs-blue: #1d3b53;
          --bs-indigo: #6610f2;
          --bs-purple: #6f42c1;
          --bs-pink: #e83e8c;
          --bs-red: #d6293e;
          --bs-orange: #fd7e14;
          --bs-yellow: #f7c32e;
          --bs-green: #0cbc87;
          --bs-teal: #20c997;
          --bs-cyan: #17a2b8;
          --bs-black: #000;
          --bs-white: #fff;
          --bs-gray: #606261;
          --bs-gray-dark: #222427;
          --bs-gray-100: #f8f8f8;
          --bs-gray-200: #dce0e5;
          --bs-gray-300: #c5c5c7;
          --bs-gray-400: #96969a;
          --bs-gray-500: #85878a;
          --bs-gray-600: #606261;
          --bs-gray-700: #3e403f;
          --bs-gray-800: #222427;
          --bs-gray-900: #202124;
          --bs-primary: #09B850;
          --bs-white: #fff;
          --bs-secondary: #85878a;
          --bs-success: #0cbc87;
          --bs-info: #17a2b8;
          --bs-warning: #f7c32e;
          --bs-danger: #d6293e;
          --bs-light: #f8f8f8;
          --bs-dark: #202124;
          --bs-primary-rgb: 9, 184, 80;
          --bs-white-rgb: 255, 255, 255;
          --bs-secondary-rgb: 133, 135, 138;
          --bs-success-rgb: 12, 188, 135;
          --bs-info-rgb: 23, 162, 184;
          --bs-warning-rgb: 247, 195, 46;
          --bs-danger-rgb: 214, 41, 62;
          --bs-light-rgb: 248, 248, 248;
          --bs-dark-rgb: 32, 33, 36;
          --bs-primary-text-emphasis: #068138;
          --bs-secondary-text-emphasis: #5d5f61;
          --bs-success-text-emphasis: #08845f;
          --bs-info-text-emphasis: #107181;
          --bs-warning-text-emphasis: #ad8920;
          --bs-danger-text-emphasis: #961d2b;
          --bs-light-text-emphasis: #3e403f;
          --bs-dark-text-emphasis: #161719;
          --bs-primary-bg-subtle: #cef1dc;
          --bs-primary-bg-subtle: #cef1dc;
          --bs-secondary-bg-subtle: #e7e7e8;
          --bs-success-bg-subtle: #cef2e7;
          --bs-info-bg-subtle: #d1ecf1;
          --bs-warning-bg-subtle: #fdf3d5;
          --bs-danger-bg-subtle: #f7d4d8;
          --bs-light-bg-subtle: #fcfcfc;
          --bs-dark-bg-subtle: #d2d3d3;
          --bs-primary-border-subtle: #9de3b9;
          --bs-secondary-border-subtle: #cecfd0;
          --bs-success-border-subtle: #9ee4cf;
          --bs-info-border-subtle: #a2dae3;
          --bs-warning-border-subtle: #fce7ab;
          --bs-danger-border-subtle: #efa9b2;
          --bs-light-border-subtle: #dce0e5;
          --bs-dark-border-subtle: #a6a6a7;
          --bs-white-rgb: 255, 255, 255;
          --bs-black-rgb: 0, 0, 0;
          --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
          --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
          --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
          --bs-body-font-family: "Inter", sans-serif;
          --bs-body-font-size: 1rem;
          --bs-body-font-weight: 400;
          --bs-body-line-height: 1.5;
          --bs-body-color: #606261;
          --bs-body-color-rgb: 96, 98, 97;
          --bs-body-bg: #fff;
          --bs-body-bg-rgb: 255, 255, 255;
          --bs-emphasis-color: #000;
          --bs-emphasis-color-rgb: 0, 0, 0;
          --bs-secondary-color: rgba(96, 98, 97, 0.75);
          --bs-secondary-color-rgb: 96, 98, 97;
          --bs-secondary-bg: #dce0e5;
          --bs-secondary-bg-rgb: 220, 224, 229;
          --bs-tertiary-color: rgba(96, 98, 97, 0.5);
          --bs-tertiary-color-rgb: 96, 98, 97;
          --bs-tertiary-bg: #f8f8f8;
          --bs-tertiary-bg-rgb: 248, 248, 248;
          --bs-heading-color: var(--bs-gray-900);
          --bs-link-color: #09B850;
          --bs-link-color-rgb: 9, 184, 80;
          --bs-link-decoration: none;
          --bs-link-hover-color: #079340;
          --bs-link-hover-color-rgb: 7, 147, 64;
          --bs-code-color: #d63384;
          --bs-highlight-color: #212529;
          --bs-highlight-bg: #fff3cd;
          --bs-border-width: 1px;
          --bs-border-style: solid;
          --bs-border-color: var(--bs-gray-200);
          --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
          --bs-border-radius: 0.313rem;
          --bs-border-radius-sm: 0.2rem;
          --bs-border-radius-lg: 0.4rem;
          --bs-border-radius-xl: 0.6rem;
          --bs-border-radius-xxl: 2rem;
          --bs-border-radius-2xl: var(--bs-border-radius-xxl);
          --bs-border-radius-pill: 50rem;
          --bs-box-shadow: 0px 0px 40px rgba(29, 58, 83, 0.1);
          --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(29, 58, 83, 0.15);
          --bs-box-shadow-lg: 0 1rem 3rem rgba(29, 58, 83, 0.15);
          --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
          --bs-focus-ring-width: 0.25rem;
          --bs-focus-ring-opacity: 0.25;
          --bs-focus-ring-color: rgba(13, 110, 253, 0.25);
          --bs-form-valid-color: #198754;
          --bs-form-valid-border-color: rgba(12, 188, 135, 0.8);
          --bs-form-invalid-color: #dc3545;
          --bs-form-invalid-border-color: rgba(214, 41, 62, 0.5);
			}

      h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
          margin-top: 0;
          margin-bottom: 0.5rem;
          font-family: "Instrument Sans", sans-serif;
          font-weight: 700;
          line-height: 1.25;
          color: var(--bs-heading-color);
      }

      .heading-color {
          /* --bs-gray-900: #202124; */
          color: var(--bs-gray-900) !important;
      }

      .rounded-3 {
          border-radius: .4375rem !important;
      }

      .bg-dark {
      --bs-bg-opacity: 1;
      --bs-dark-rgb: 32, 33, 36;
      background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
      }

      p{
				--bs-body-font-family: "Inter", sans-serif;
				--bs-body-font-size: 1rem;
				--bs-body-font-weight: 400;
				--bs-body-line-height: 1.5;
				
				font-family: var(--bs-body-font-family);
				font-size: var(--bs-body-font-size);
				font-weight: var(--bs-body-font-weight);
				line-height: var(--bs-body-line-height);
				
			}
			
			.bi-quote::before {
				content: "\f6b0";
			}
			
			.bi::before, [class^="bi-"]::before, [class*=" bi-"]::before {
				display: inline-block;
				font-family: bootstrap-icons !important;
				font-style: normal;
				font-weight: normal !important;
				font-variant: normal;
				text-transform: none;
				line-height: 1;
				vertical-align: -.125em;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}

			.nav-pills .nav-link {
				cursor: pointer;
				padding: 0.5rem 1rem;
				color: var(--bs-primary);
				white-space: nowrap;
			}
			.nav-pills .nav-link {
				border-radius: var(--bs-nav-pills-border-radius);
			}

     
      
      h2, .h2 {
          font-size: calc(1.4rem + 1.8vw);
      }

      .list-group-item:first-child {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
      }

      .list-group-borderless .list-group-item {
          border: none !important;
          padding: 0.425rem 0;
      }

      .bg-colo {
          background-color: #09B850 !important;
      }
    </style>

    <style>
     /* Emotional theme */
      [data-bs-theme="emotional"] {
        --bs-body-bg: #fff7f4;
        --bs-body-color: #2b2b2b;
        --bs-heading-color: #1a1a1a;
      }

      /* Apply styles INSIDE the themed section */
      [data-bs-theme="emotional"] {
        font-family: var(--bs-body-font-family);
      }

      [data-bs-theme="emotional"] .inner-container {
        max-width: 900px;
        margin-inline: auto;
      }

      [data-bs-theme="emotional"] h1,
      [data-bs-theme="emotional"] h2,
      [data-bs-theme="emotional"] h3,
      [data-bs-theme="emotional"] h4,
      [data-bs-theme="emotional"] h5,
      [data-bs-theme="emotional"] h6 {
        font-family: "Instrument Sans", sans-serif;
        font-weight: 700;
        line-height: 1.25;
        color: var(--bs-heading-color);
      }

      @media (min-width: 576px) {
        [data-bs-theme="emotional"] .mb-sm-6 {
          margin-bottom: 3.5rem !important;
        }
      }

      [data-bs-theme="emotional"] .row {
            --bs-gutter-x: 1.875rem;
            --bs-gutter-y: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: calc(-0.5 * var(--bs-gutter-x));
            margin-left: calc(-0.5 * var(--bs-gutter-x));
        }
    </style>

    <!-- new -->
    <section class="container-fluid py-0 my-3 bg-light">
      <div class="container">
        <div class="row align-items-center g-5">

          <!-- LEFT CONTENT -->
          <div class="col-lg-7">
            <span class="heading-color text-dark bg-light small rounded-3 px-3 py-2">Exhibition Stall Design</span>

            <h4 class="display-5 fw-semibold mb-3" style="font-family: Instrument Sans, sans-serif; font-weight: 700; color:#000;">
              Your Stall Has <span class="text-primary">Just 3 Seconds</span> to Get Noticed.
            </h4>

            <p class="lead text-muted mb-3">
              We design & fabricate exhibition stalls that attract attention, engage visitors,
              and help your brand stand out on the show floor.
            </p>

            <p class="text-muted mb-4" style="color: #000;">
              From concept to on-site installation — <strong>we handle everything.</strong>
            </p>

            <div class="d-flex flex-wrap gap-3">
              <a href="#opening" class="btn btn-primary btn-lg">
                Get Free Stall Consultation
              </a>
              <a href="#work" class="btn btn-outline-primary btn-lg">
                View Our Work
              </a>
            </div>

            <a href="#start" class="d-inline-block mt-3 text-decoration-none">
              <small class="text-dark fw-semibold">Get Started →</small>
            </a>
          </div>

          <!-- RIGHT OPTIONS -->
          <div class="col-lg-5">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">

                <h5 class="fw-semibold mb-2">Planning to Exhibit Soon?</h5>
                <p class="text-muted mb-4">
                  Let’s design a stall that works as hard as you do.
                </p>

                <div class="d-grid gap-3">

                  <a href="#" class="btn btn-outline-primary text-start p-3">
                    <strong>Premium Design</strong><br>
                    <small class="text-muted">
                      Custom-built, high-impact, luxury finishes for strong brand presence.
                    </small>
                  </a>

                  <a href="#" class="btn btn-outline-primary text-start p-3">
                    <strong>Economic Design</strong><br>
                    <small class="text-muted">
                      Smart layouts, optimized materials, maximum value.
                    </small>
                  </a>

                  <a href="#" class="btn btn-outline-primary text-start p-3">
                    <strong>Individual / Free Design</strong><br>
                    <small class="text-muted">
                      Exhibit without booking a full stall — ideal for first-time participants.
                    </small>
                  </a>

                </div>

                <small class="text-muted d-block mt-3">
                  No matter the size or budget, your stall will look professional and purposeful.
                </small>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    {{-- <section class="container-fluid py-5 my-5 py-lg-5">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center mt-4 mb-3">
            <div class="masthead-followup-icon d-inline-block mb-2 text-white bg-danger">
            </div>
            <h2 class="display-5 fw-normal">Your Stall Has <br> Just 3 Seconds <br>to Get Noticed</h2>
            <p class="col-md-6 col-lg-8  mx-auto lead">We design & fabricate exhibition stalls that attract attention, engage visitors, and help your brand stand out on the show floor.</p>
             <small>From concept to on-site installation — we handle everything.</small>
            <a href="#opening" class="btn btn-lg btn-outline-primary mb-3">Get Free Stall Consultation</a>
            <a href="#opening" class="btn btn-lg btn-outline-primary mb-3"> View Our Work</a>
           
            <a href="" class="btn btn-sm" style="color:#000">Get Started</a>
          </div>
        </div>

        <div class="col-md-6">
          <ul>
            <p>Planning to Exhibit Soon?
            <small>Let’s design a stall that works as hard as you do.</small>
            </p>
          <li><a href="" class="btn btn-lg btn-outline-primary mb-2">Premium Design <span>Custom-built, high-impact, luxury finishes for strong brand presence.</span></a></li>
          <li><a href="" class="btn btn-lg btn-outline-primary mb-2">Economic Design <span>Smart layouts, optimized materials, maximum value.</span></a></li>
          <li><a href="" class="btn btn-lg btn-outline-primary mb-2">Free Design <span>Exhibit without booking a full stall — ideal for first-time participants.</span></a></li>
             <small>No matter the size or budget, your stall will look professional and purposeful.</small>
          </ul>
          
        </div>

      </div>
    </section>--}}

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




    <!-- heading to boost up -->
    <div class="pt-5 mt-5">
        <h2 class="display-5 text-center my-5">Boost your brand with O'lero Airo™ Studio.</h2>
        <p class="fs-sm  text-center">No design experience needed. Easily create content that elevates your brand everywhere, from your website to social posts and advertising.</p>
    </div>

    <!-- secondary try -->
    <style>
        .marketing-card {
            background: #f7f8f8;
            border-radius: 18px;
        }

        .plus-badge {
            background: #00e3c8;
            color: #000;
            font-weight: 700;
            padding: 6px 10px;
            font-size: 12px;
            border-radius: 4px;
        }

        .feature-item h6 {
            font-weight: 600;
            margin-top: 12px;
        }

        .feature-item p {
            font-size: 14px;
            color: #555;
            margin-bottom: 0;
        }

        .feature-item .icon {
            width: 26px;
            height: 26px;
            color: #000;
        }
    </style>

    <style>
        .feature-box {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .feature-box .icon {
            height: 40px;
            /* FIXED icon height */
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            color: #000;
        }

        .feature-box .title {
            min-height: 44px;
            /* FIX title height */
            font-weight: 600;
            margin-bottom: 8px;
            color: #000;
        }

        .feature-box .desc {
            font-size: 14px;
            line-height: 1.5;
            color: #000;
            margin-top: 1rem;
        }
    </style>

    <section class="py-5">
        <div class="container">
            <div class="marketing-card p-4 p-lg-5">    
                  <div class="row g-4 align-items-start">

                      <!-- LEFT CONTENT -->
                      <div class="col-lg-3">
                          <span class="badge plus-badge mb-3">PLUS</span>
                          <h3 class="fw-bold display-6" style="color: #000;">
                              A Simple,<br>Stress-Free Journey<br>includes:
                          </h3>
                      </div>

                      <!-- RIGHT FEATURES -->
                      <div class="col-lg-9">
                          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">

                              <!-- Item -->
                              <div class="col">
                                  <div class="feature-box h-100">
                                      <div class="icon">
                                          <!-- SVG ICON -->
                                          <svg class="icon fs-md" viewBox="0 0 24 24">
                                              <path d="M4 4h16v12H4z" fill="none" stroke="currentColor" stroke-width="1.5" />
                                              <path d="M8 20h8" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                      </div>

                                      <h6 class="title">Understand Your Brand</h6>
                                      <p class="desc">We learn about your goals, space size, audience, and budget.
                                        Take advantage of Ol'ero Airo™ to create customizable busienss design.</p>
                                  </div>
                              </div>

                              <!-- Repeat -->
                              <div class="col">
                                  <div class="feature-box h-100">
                                      <div class="icon">
                                          <!-- SVG ICON -->
                                          <svg class="icon fs-md" viewBox="0 0 24 24">
                                              <path d="M4 4h16v12H4z" fill="none" stroke="currentColor" stroke-width="1.5" />
                                              <path d="M8 20h8" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                      </div>
                                      <h6 class="title">Design the Stall</h6>
                                      <p class="desc">
                                          3D designs that show exactly how your stall will look.
                                      </p>
                                  </div>
                              </div>


                              <div class="col">
                                  <div class="feature-box h-100">
                                      <div class="icon">
                                          <svg class="icon" viewBox="0 0 24 24">
                                              <rect x="3" y="4" width="18" height="16" rx="2"
                                                  fill="none" stroke="currentColor" stroke-width="1.5" />
                                              <path d="M7 9h10M7 13h6" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                      </div>
                                      <h6 class="title">Finalize & Fabricate</h6>
                                      <p class="desc">Clear pricing. Quality materials. No middlemen. Create visual content with photos and videos.</p>
                                  </div>
                              </div>

                              <div class="col">
                                  <div class="feature-box h-100">
                                      <div class="icon">
                                          <svg class="icon" viewBox="0 0 24 24">
                                              <rect x="3" y="5" width="18" height="14" rx="2"
                                                  fill="none" stroke="currentColor" stroke-width="1.5" />
                                              <circle cx="9" cy="10" r="2" stroke="currentColor" stroke-width="1.5" fill="none" />
                                              <path d="M21 17l-5-5-4 4-2-2-5 5"
                                                  stroke="currentColor" stroke-width="1.5" fill="none" />
                                          </svg>
                                      </div>

                                      <h6 class="title">On-Site Installation</h6>
                                      <p class="desc">Timely setup, clean finish, exhibition-ready delivery.</p>
                                  </div>
                              </div>

                              <div class="col">
                                  <div class="feature-box h-100">
                                      <div class="icon">
                                          <svg class="icon" viewBox="0 0 24 24">
                                              <path d="M12 3l3 6 6 3-6 3-3 6-3-6-6-3 6-3z"
                                                  fill="none" stroke="currentColor" stroke-width="1.5" />
                                          </svg>
                                      </div>
                                      <h6 class="title">You focus on visitors. We handle everything else.</h6>
                                      <p class="desc">your stall will look professional and purposeful.</p>
                                  </div>
                              </div>


                          </div>
                      </div>

                  </div>
            </div>
        </div>
    </section>


      <section class="sectionlevel" data-bs-theme="light">
				<div class="container">
					<div class="row g-4 align-items-xl-center">

						<!-- About image START -->
						<div class="col-lg-7">
							<div class="row pe-xl-5">
								<div class="col-sm-6">
									<!-- About image  -->
									<img src="{{asset('public/image/02.jpg')}}" class="rounded" alt="about-img">

									<!-- SVG decoration -->
									<figure class="text-end me-3 mt-n3">
										<svg class="fill-primary" width="106px" height="96px" viewBox="0 0 106 96" style="enable-background:new 0 0 106 96;" xml:space="preserve">
											<path d="M104.7,50.4c0,0.1-0.1,0.4-0.3,0.7c0.1,0.1,0.2,0.1,0.4,0.2c0.1,0.3,0.5,0.6,0.3,1c-0.2,0.4,0.4,0.7-0.1,1 c0.1,0.7-0.4,1.3-0.8,1.8c-0.3,0.5-0.4,1.1-0.9,1.5c-0.4,0.4-0.6,0.9-1,1.4c-0.3,0-0.5,0-0.9,0c0.1,0.2,0.1,0.4,0.2,0.6 c-0.1,0.1-0.2,0.3-0.4,0.5c0.1,0.3,0.2,0.6,0.3,1c-0.2,0.2-0.3,0.4-0.5,0.6c0.1,0,0.3,0.1,0.5,0.2c-0.3,0.2-0.5,0.3-0.7,0.5 c0,0.1,0.1,0.1,0.2,0.2c-0.7,0.3-1.4-0.4-2.2-0.1c-0.5,0.4-0.9,1.1-1.6,1.4c-0.3,0.1,0,0.6-0.5,0.6c-0.2,0,0,0.6-0.5,0.4 c-0.2,0.5-0.6,0.7-1,1.1c-0.3,0.3-0.6,0.6-0.8,1c-0.2,0.3-0.4,0.6-0.6,0.9c-0.2,0.3-0.4,0.5-0.6,0.8c-0.1,0.2-0.1,0.6-0.3,0.8 c-0.2,0.1-0.4,0.3-0.5,0.6c-0.2-0.1-0.4-0.2-0.5-0.3c-0.5,0.2-0.9,0.4-1.4-0.1v-1.2c-0.9-0.5-1.8-0.9-2.2-2.1c0-0.4-0.1-0.9,0.2-1.3 c-0.5-1-0.1-1.9,0.4-2.8c0.6-1.1,1.4-1.9,2.3-2.8c-0.5-0.8-1.1-1.6-1.6-2.4c-0.3-0.6-0.7-1.2-0.7-1.8c0-0.7-0.2-1.4,0.2-2.1 c0.2-0.3,0-0.8,0.2-1.2c0.1-0.2,0.2-0.5,0.4-0.7c0.1-0.1,0.1-0.3,0.2-0.7c0.2-0.2,0.7-0.4,0.7-0.7c0.1-0.5,0.8-0.3,0.8-0.9 c0.2,0.1,0.2,0.2,0.3,0.3c0.3-0.1,0.6-0.2,0.9-0.3c0.1,0.2,0.2,0.4,0.3,0.6c-0.2,0.4-0.5,0.9-0.8,1.4c0.6-0.1,1-0.1,1.4-0.1 c0.2,0.2,0.2,0.2,0.3,0.3c-0.2,0.3-0.3,0.6-0.5,1c0.4,0,0.6,0.1,1,0.1c-0.1,0.4-0.2,0.8-0.3,1.2c-0.1,0.1-0.3,0.3-0.5,0.4 c0.1,0.1,0.1,0.2,0.2,0.2c0.1-0.1,0.3-0.2,0.5-0.3c0.1,0.2,0.1,0.3,0.1,0.4c-0.3,0.2-0.6,0.3-1,0.5c0.2,0.1,0.3,0.1,0.5,0.2 c-0.3,0.3-0.5,0.5-0.8,0.8c0.4,0.3,0.7,0.6,1.1,0.9c0.6,0.1,1-0.1,1.4-0.5c1-0.9,2.1-1.6,3.1-2.5c1-0.9,2.1-1.8,2.8-3 c0.2-0.3,0.5-0.5,0.7-0.7h1.2c0.1,0.1,0.2,0.2,0.3,0.4c-0.1,0.4-0.3,0.8-0.4,1.2c0.4-0.1,0.7-0.2,1-0.3 C104.4,50,104.5,50.1,104.7,50.4"></path>
											<path d="M33,74.2c-0.4,0.1-0.7,0.2-1.1,0.3c0.1-0.2,0.2-0.3,0.2-0.5c-0.3-0.4-0.6-0.7-1.1-0.7c0-0.2-0.1-0.3-0.1-0.4H30 c-0.1-0.1-0.2-0.1-0.2-0.2c-0.1-0.4-0.2-0.9-0.4-1.3c-0.3-0.4-0.2-0.9-0.2-1.3c0-0.3,0.1-0.7,0.2-1c0.3-1.2,0.8-2.4,1.4-3.5 c0.4-0.7,0.8-1.3,1.2-2c0.4-0.6,1-1.2,1.4-1.8c-0.1-0.1-0.3-0.2-0.4-0.3c-1.5-0.9-2.8-2-4-3.2c-0.6-0.6-0.6-1.4-0.7-2.1 c-0.1-0.3,0-0.6,0-0.9c0.3-0.6,0.9-0.6,1.5-0.9c0.2,0.4,0.4,0.7,0.6,1.1c0,0,0.1-0.1,0.2-0.2c0.1,0.1,0.2,0.2,0.3,0.3 c0.2,0.7,0.8,1,1.4,1.3c1.2,0.6,2.4,1.2,3.7,1.8c0.3-0.3,0.6-0.8,1-1c0.4-0.2,0.4-0.9,1-0.8c-0.1-0.1-0.2-0.2-0.2-0.3 c0.2-0.1,0.4-0.3,0.7-0.5c0.1-0.2,0.2-0.5,0.3-0.8c0.2,0,0.4,0,0.6,0c-0.1-0.1-0.2-0.2-0.3-0.3c0.5-0.1,0.5-0.6,0.8-0.8 c0.3-0.3,0.5-0.7,0.8-1.1c0.1,0,0.1,0.1,0.3,0.2c0.1-0.1,0.1-0.3,0.2-0.4c0.1,0.1,0.2,0.1,0.3,0.2c0.1-0.8,0.6-1.4,1.1-2 c0.5-0.6,0.9-1.3,1.7-1.7c0.1,0.1,0.2,0.2,0.4,0.3c-0.3,0.6-0.6,1.2-1.3,1.5v0.9c0.2,0,0.3,0,0.3-0.1c0.1-0.2,0.2-0.5,0.3-0.6 c0.5-0.4,1-0.8,1.5-1.3c0,0.4,0.1,0.7,0.1,1c-0.2,0.1-0.3,0.1-0.4,0.2c0,0,0.1,0.1,0.1,0.1c0.3-0.1,0.5-0.1,0.9-0.2 c0.1,0.2,0.2,0.4,0.3,0.6c-0.1,0.1-0.1,0.2-0.2,0.2c0,0.3,0.4,0.6,0.1,1c-0.1-0.1-0.2-0.2-0.2-0.2c0,0.1-0.1,0.1-0.1,0.2 c0,0.1,0.1,0.3,0.2,0.4c-0.1,0.6-0.5,1-0.9,1.3c-0.4,0.4-0.8,0.7-1.4,1.1c0.2,0.1,0.4,0.2,0.6,0.3c-0.1,0.2-0.2,0.4-0.3,0.6 c0,0.1,0.1,0.1,0.2,0.3c-0.2,0-0.5,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.2,0.6h-0.8c-0.1,0.3-0.3,0.5-0.4,0.8c0.1,0.1,0.2,0.2,0.3,0.3 c-0.2,0-0.4,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.2,0.6c-0.2,0-0.4,0.1-0.7,0.1c0.1,0.2,0.1,0.4,0.3,0.7c-0.3-0.1-0.5-0.2-0.8-0.3 c-0.1,0.2-0.2,0.5-0.4,0.7c0,0.1,0.1,0.2,0.1,0.2c0.1,0,0.2,0,0.3,0.1c0.3,0.2,0.4,0.6,0.8,0.8c0.4,0.2,0.5,0.6,0.8,0.9 c0.2,0.3,0.4,0.5,0.3,0.9c0,0.1,0.1,0.3,0.2,0.4c-0.1,0.1-0.1,0.2-0.3,0.4c-0.3,0-0.5,0.4-1.1,0.2c-1-0.4-2-0.7-3-0.8 c-0.1,0-0.1-0.1-0.2-0.2c-0.3,0.3-0.6,0.7-1,1.1c0,0,0,0.2,0,0.4c-0.2,0-0.4,0.1-0.7,0.1c0.2,0.3,0.4,0.5,0.6,0.9 c-0.3-0.1-0.4-0.1-0.7-0.2c0,0.1-0.1,0.2-0.2,0.3c0.1,0.4,0,0.6-0.4,0.8c-0.1,0.5-0.2,0.9-0.4,1.3c-0.2,0.1-0.3,0.1-0.4,0.2L36,69 c-0.3,0.3-0.7,0.5-1,0.8c-0.2,0.3-0.3,0.7-0.5,1.1c0,0,0.1,0.1,0.2,0.3c-0.2,0.3-0.5,0.5-0.7,0.8c0.1,0.1,0.2,0.2,0.3,0.3 c-0.2,0.2-0.3,0.4-0.5,0.6v0.7C33.4,73.7,33.2,74,33,74.2"></path>
											<path d="M60.7,78.7c0.5,0.6,0.5,0.6,1.2,0.3c0,0.2,0,0.4,0.1,0.5c0,0.1,0.1,0.2,0.2,0.3C62.1,79.9,62,80,62,80 c0.2,0.1,0.3,0.1,0.6,0.3c-0.3,0.4-0.5,0.7-0.7,1.1c0.3,0.6-0.3,0.7-0.4,1c-0.1,0.5-0.7,0.6-0.7,1.1c0,0.6-0.6,0.6-0.9,1 c-0.2,0.3-0.6,0.5-0.7,0.9c0.1,0.2,0.2,0.3,0.3,0.5c-0.3,0.2-0.6,0.4-0.9,0.5l-0.7,0.3c-0.2,0.3-0.4,0.5-0.7,0.8v0.2 c-0.7,0.5-1.4,1-2.2,1.6c0.2,0.1,0.4,0.2,0.6,0.3c-0.3,0.4-0.6,0.9-1,1.3c0.9,0.3,1.7,0.6,2.5,0.9c-0.1,0.2-0.2,0.3-0.2,0.5 c0.4,0.1,0.7,0.3,1.1,0.4v0.5c0.3,0.2,0.5,0.4,0.7,0.6c0,0.3,0,0.5,0,0.8l0.4,0.4l-1,0.9c-0.2,0.3-0.5,0.2-0.8,0 c-0.1-0.1-0.2-0.1-0.3-0.1c-1.2,0-2.2-0.4-3.3-0.8c-0.8-0.3-1.5-0.7-2.3-1c-0.2,0.2-0.6,0.4-0.6,0.8c-0.5,0.1-0.9,0.2-1.4,0.3 c-0.2-0.2-0.4-0.4-0.6-0.6c0.1-0.1,0.1-0.2,0.3-0.3c-0.1-0.2-0.2-0.5-0.3-0.6c-0.3,0.1-0.7,0.1-1,0.1c-0.2-0.3-0.3-0.6-0.5-0.9 c-0.1,0.1-0.1,0.1-0.1,0.1c-0.2-0.3-0.5-0.5-0.8-0.9c0.1-0.8-0.4-1.7-0.3-2.7c0-0.2-0.1-0.5-0.3-0.7c-0.7-0.6-0.7-1.5-1-2.3 c-0.1-0.3-0.2-0.7-0.3-1c0-0.6-0.1-1.1,0-1.7c0.2-0.9,0.3-1.8,1.3-2.1c0.3-0.1,0.7-0.1,1.1-0.2v1.8c0.4-0.2,0.6-0.4,1-0.7 c0.1,0.2,0.1,0.3,0.2,0.5c0.1,0,0.1-0.1,0.2-0.1v1c0.2-0.1,0.3-0.2,0.5-0.2c0.5,0.4,0.5,1,0.4,1.5c0.2,0.1,0.3,0.1,0.5,0.2 c-0.1,0.2-0.2,0.5-0.3,0.8c0.1,0,0.2,0,0.2,0c0.1-0.1,0.1-0.2,0.2-0.2c1-0.4,1.5-1.4,2.4-1.7c0.2-0.7,0.9-0.9,1.4-1.3 c0.4-0.5,1.1-0.8,1.6-1.2c0.5-0.4,0.8-1.1,1.5-1.3c0.4-0.8,1.1-1.4,1.9-1.9c0-0.6,0.7-0.6,0.7-1.2h1c0.1,0.1,0.2,0.2,0.3,0.3 c-0.5,0.2-0.7,0.7-1,1.2c0.7,0.1,1.1-0.7,1.7-0.3C61.1,78.5,61,78.6,60.7,78.7"></path>
											<path d="M58.1,66.7c-0.1-0.5,0.7-0.6,0.3-1.1c-0.1,0.1-0.2,0.2-0.2,0.2c0,0-0.1-0.1-0.1-0.1c-0.1-0.6-0.1-1.1,0.3-1.5 c0.4-0.5,0.9-1,1.3-1.5c0.1-0.2,0.2-0.4,0.3-0.6c-0.2-0.5-0.5-1.1-0.7-1.6c-0.3-0.6-0.3-1.2-0.5-1.8c-0.2-0.3,0.2-0.9,0.2-1.2 c-0.1-0.4-0.4-0.8,0-1.2c0-1.1,0.8-1.8,1.4-2.6h1.9c0.1,0.1,0.2,0.2,0.4,0.4c-0.3,0.4-0.6,0.7-0.9,1.1c0,0.1,0.1,0.3,0.2,0.5 c0.1,0,0.3,0.1,0.4,0c0.3-0.3,0.7-0.2,1-0.2c0.1,0.3,0.2,0.5,0.3,0.7c-0.2,0.2-0.3,0.4-0.6,0.8c0.4,0.1,0.7,0.1,1,0.1v1.1 c0.8,0,0.8-0.9,1.5-0.9c0.3-0.4,0.7-0.8,1.1-1.1c0.4-0.4,0.9-0.8,1.3-1.3c0.4-0.4,0.8-0.8,1.1-1.2c0.4-0.4,0.7-0.9,0.9-1.2 c0.5-0.2,0.7-0.3,1.1-0.4c0.1,0.2,0.3,0.3,0.3,0.5c0,0.1-0.1,0.3-0.2,0.5c-0.1,0.2-0.2,0.3-0.2,0.6c0.3-0.1,0.7-0.3,1-0.4 c0.2,0.4,0.4,0.8,0.7,1.4c0,0,0,0.2,0,0.4c0,0.2,0.1,0.3,0.2,0.5c0,0.1-0.1,0.2-0.2,0.4c0.1,0.1,0.2,0.2,0.3,0.3 c-0.7,1-1.2,2.1-2,3.1c-0.6,0.9-0.5,0.9-1,1.2c0.1,0.1,0.1,0.2,0.2,0.2c-0.9,1-1.8,2-2.7,3v0.4c0.7,0.5,1.4,0.9,2.1,1.3 c-0.1,0.2-0.2,0.3-0.3,0.5c0.3,0.2,0.5,0.7,1,0.5c0.1,0.2,0.2,0.4,0.3,0.6c-0.1,0.1-0.1,0.2-0.3,0.4c0.3,0.3,0.5,0.5,0.8,0.8 c-0.1,0.3-0.2,0.5-0.3,0.8c0.1,0.1,0.2,0.3,0.2,0.4c0,0.1-0.1,0.2-0.1,0.2c-0.1,0.1-0.3,0.1-0.4,0.2c-0.5,0.5-0.6,0.6-1.2,0.4 c-0.8-0.3-1.6-0.4-2.4-0.8c-1-0.5-1.8-1.2-2.8-1.9c-0.4,0.3-0.9,0.7-1.3,1.2c-0.4,0.5-1,0.8-1.8,1.1c0.1-0.2,0.2-0.3,0.3-0.5 c-0.5,0.1-0.9,0.2-1.3,0.3l-0.1-0.1c0.3-0.2,0.5-0.4,0.8-0.6l-0.4-0.4h-0.8c-0.1-0.3-0.2-0.5-0.4-0.9h-0.9 C58.3,67.2,58.2,66.9,58.1,66.7"></path>
											<path d="M63,44.6c-0.4,0.1-0.7,0.2-1.2,0.3c-0.5-0.4-1.1-0.8-1.7-1.2c-0.7-0.5-1.4-1.2-2.2-1.5 c-0.2-0.1-0.4-0.1-0.7-0.2c-0.3-0.5-0.4-1.4-1.3-1.3c-0.4-0.4-0.5-1.1-1.1-1.1c-0.2-0.4-0.3-0.8-0.6-1c-1.2-1.1-2.1-2.5-2.9-4.2 c-0.1-0.5-0.1-1.2-0.2-1.9c-0.2-1.1,0.4-2,1.3-2.6c0.3-0.2,0.4-0.5,0.8-0.5c0.3,0,0.6-0.1,1-0.2c0.1,0.1,0.3,0.2,0.5,0.4 c-0.3,0.5-0.9,0.9-1,1.6c0.7,0.2,1-0.6,1.7-0.6c0.1,0.1,0.2,0.2,0.4,0.3c-0.3,0.4-0.4,0.6-0.7,1.1c0.5-0.2,0.8-0.2,1-0.3 c0.3-0.4,0.8-0.6,1.2-1.1c0.3-0.4,0.7-0.8,1.2-1.1c0.7-0.4,1.2-1.1,1.8-1.6c0.9-0.7,1.8-1.6,2.8-2.2c0.4-0.2,0.7-0.7,1-1 c0.3-0.3,0.8-0.5,0.9-0.9h1.5v1c0,0-0.2,0.2-0.4,0.4c0.2,0,0.4-0.1,0.6-0.1c0.2,0,0.4-0.1,0.7-0.2c0,0.7,0,1.4,0.5,1.8 c-0.1,0.1-0.2,0.2-0.3,0.4c0.2,0.1,0.3,0.2,0.7,0.4c-0.4,0.1-0.5,0.1-0.6,0.2c0.1,0.1,0.1,0.3,0.2,0.4c0,0.1,0,0.3,0,0.4 c-0.4,0.6-0.8,1.1-1.3,1.8c-0.1,0-0.3,0-0.5,0.1c0.1,0.1,0.1,0.2,0.2,0.3c-0.1,0.2-0.1,0.3-0.2,0.5c-1,0-1,1-1.6,1.4 c0.1,0.2,0.2,0.3,0.2,0.3c-0.4,0.4-0.8,0.8-1.2,1.2c0,0,0,0,0,0c-0.2,0.2-0.4,0.4-0.6,0.6c-0.1,0-0.1-0.1-0.2-0.1V35 c-0.1-0.1-0.2-0.2-0.4-0.3c0,0.3,0.1,0.4,0.1,0.7c-0.3,0.4-0.6,0.8-1,1.3c-0.2-0.1-0.3-0.2-0.4-0.3c-0.4,0.5-0.8,1-1.2,1.5 c0.2,0.1,0.3,0.2,0.5,0.3c-0.2,0.3-0.4,0.5-0.5,0.7c0,0.1,0,0.2,0.1,0.2c0.7,0.8,1.5,1.5,2,2.3C62.6,42.3,63.4,43.3,63,44.6"></path>
											<path d="M78.7,28.3c0.1-0.1,0.1-0.1,0.2-0.2c0-0.1-0.1-0.1-0.1-0.2c-0.3-0.3-0.7-0.5-0.9-0.8c-0.2-0.3-0.5-0.5-0.7-0.7 c-0.3-0.3-0.7-0.8-0.7-1.2c0-0.7-0.1-1.4,0.1-2.2c0.3-1.3,1-2.3,1.9-3.2c1.1-1.1,2.3-2.3,3.5-3.5c-0.5-0.4-0.5-1.1-1.2-1.3 c-0.3-0.6-0.6-1.2-0.9-1.8c-0.3-0.5-0.2-1.1-0.2-1.7c0-0.4,0-0.8,0-1.2c0.4-0.5,0.8-1,1.1-1.4h1.9c-0.3,0.5-0.6,1-0.8,1.4 c0.7,0.5,1-0.6,1.6-0.3c0.4,0.5-0.3,0.8-0.6,1.3c0.4-0.1,0.7-0.2,1-0.2c0.2,0.5,0.1,1-0.2,1.5c0.2,0.1,0.3,0.1,0.5,0.2 c0.1,0.1-0.1,0.2-0.2,0.4c0.2,0.3,0.4,0.6,0.7,1c1.9-2,4.2-3.3,5.7-5.5h1.1c-0.1,0.4-0.2,0.7-0.3,1.1c0.3-0.1,0.6-0.2,0.9-0.3v0.9 c0.2,0,0.3,0.1,0.4,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0,0.2,0,0.3c0.2,1.2-0.4,2.1-1,3c-0.7,1-1.4,1.8-2.2,2.8c0.6,0.7,1.4,1,2.2,1.6 c0,0.1,0,0.3,0.1,0.5c0.2,0.3,0.5,0.5,0.6,0.8c0.2,0.7,0.7,1.4,0.4,2.3c-0.1,0-0.3,0.1-0.5,0.2c-0.2,0.1-0.4,0.2-0.6,0.2 c-0.3-0.3-1-0.2-0.9-0.8c-0.7-0.2-1.3-0.4-1.9-0.5c-0.1-0.2-0.3-0.4-0.4-0.7h-1.2c0-0.1-0.1-0.2-0.1-0.4c-0.5-0.4-0.8,0.1-1.1,0.1 c-0.4,0.4-0.7,0.8-1,1.1c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1,0.2-0.3,0.4-0.5,0.6c0,0,0,0,0.1,0.2c-0.5,0.1-0.6,0.7-0.8,1.1 c-0.2-0.1-0.3-0.2-0.5-0.3c0,0.2-0.1,0.4-0.1,0.6c-0.1,0-0.2,0-0.4,0.1c0,0.5-0.1,1-0.8,0.9c-0.2,0.3-0.6,0.6-0.6,0.8 c0.1,0.7-0.5,1-0.7,1.6c-0.1,0.7-0.1,0.7,0.1,1.1c-0.5,0.4-1,0.7-1.7,0.8C78.9,28.5,78.8,28.4,78.7,28.3"></path>
											<path d="M12.6,15.5c-0.3,0-0.5,0.1-0.7,0.1c0.1,0.1,0.2,0.2,0.3,0.4c-0.3,0.5-0.8,0.8-1.2,1.3l0.2,0.2 c-0.3,0.2-0.6,0.5-0.8,0.6c-0.1,0.4,0.2,0.8-0.3,1c0.4,0.3,0.8,0.5,1.2,0.8c1.2,0.8,2.5,1.5,3.4,2.6c0.6,0.6,1.1,1.2,1.1,2.1 c0,0.2,0.2,0.3,0.3,0.5c-0.3,0.2-0.7,0.4-1.1,0.7c-2.3-1.3-4.6-2.5-6.7-4.2c-0.2,0.1-0.5,0.2-0.5,0.3c-0.2,0.7-0.7,1.2-1.2,1.6 c-0.1,0.1,0,0.2-0.1,0.3c-0.2,0-0.4,0-0.7,0.1C6,24.1,6,24.2,6.1,24.5c-0.4,0.4-0.8,0.9-0.9,1.6c-0.1,0.4-0.5,0.7-0.8,1.2v2.5 c-0.2,0-0.4,0-0.6,0c0,0.1-0.1,0.3-0.1,0.4H2.8c-0.1-0.4-0.2-0.7-0.4-1.1c-0.2,0.1-0.4,0.2-0.7,0.3c-0.1-0.2-0.1-0.3-0.1-0.4 c-0.1,0-0.1-0.1-0.2-0.1c-0.5,0.1-0.8-0.3-0.9-0.6c-0.2-1-0.9-2.1-0.3-3.2c0-1.1,0.7-2,1.1-2.9c0.1-0.3,0.7-0.3,0.5-0.8 c-0.1-0.2,0.3-0.6,0.5-0.9c0.2-0.3,0.4-0.5,0.6-0.8c0.2-0.3,0.5-0.5,0.8-0.8c0.2-0.2,0.4-0.5,0.6-0.8c-1.4-1-2.2-2.5-3.2-3.9 c-0.3-1.3-0.8-2.6-0.6-4.2c0.3-0.4,0.7-0.8,1.2-1.3c0.5,0.1,1-0.2,1.5,0.3c-0.3,0.4-0.6,0.8-0.9,1.2c0.1,0.1,0.2,0.2,0.2,0.2 C3.1,10.6,3.4,9.7,4,9.9c0.1,0.2,0.2,0.4,0.3,0.6c-0.2,0.1-0.4,0.3-0.7,0.4C3.8,11,3.9,11.1,4,11.2c0.3-0.3,0.6-0.3,1,0.1 c0,0.3,0.2,0.6-0.2,0.9c0.2,0.1,0.3,0.1,0.5,0.3C5.1,12.7,5,13,4.8,13.2c0.2,0.1,0.3,0.1,0.6,0.2c-0.3,0.1-0.4,0.1-0.6,0.2 c0,0.2,0,0.4,0.1,0.6c0.4,0.6,0.9,1.1,1.4,1.8c0.3-0.3,0.5-0.4,0.7-0.6c1.2-1.2,2.3-2.5,3.8-3.4c0-0.4,0.4-0.4,0.6-0.6 c0.2-0.3,0.5-0.5,0.6-0.7h0.8c-0.3,0.5-0.9,0.8-0.7,1.5c0.5-0.3,1-0.6,1.6-0.9c-0.1,0.3-0.1,0.6-0.1,0.9c0.2,0.1,0.5,0.3,0.8,0.4 c-0.1,0.2-0.2,0.3-0.2,0.5c0.1,0,0.2,0,0.3,0.1c0,0,0.1,0.1,0,0.1c-0.3,0.4-0.6,0.7-0.8,1.1C13.4,14.8,12.9,15.1,12.6,15.5"></path>
											<path d="M33.3,27c0.9-1.1,1.7-2,2.4-3c0.7-0.9,1.3-1.8,1.9-2.8c-0.1-0.1-0.1-0.2-0.3-0.3c0.2-0.2,0.4-0.4,0.6-0.7h0.7 c0.3,0.3,0.5,0.7,0.8,0.8c0.4,0.1,0.4,0.4,0.6,0.7c0.5,0.8,0.9,1.6,0.5,2.7c-0.3,0.6-0.5,1.3-0.8,1.9c-0.1,0.2-0.1,0.4-0.2,0.7 l-0.6,0.6v0.7c-0.4,0.8-0.8,1.5-1.2,2.2c0.6,0.4,1.1,0.8,1.6,1.1c1.1,0.7,1.9,1.5,2.5,2.7c0.1,0.3,0.2,0.5,0.3,0.9 c0,0.1-0.1,0.3-0.2,0.5c-0.2,0.1-0.5,0.2-0.7,0.3c-0.5-0.2-1-0.3-1.4-0.5c-0.4-0.2-0.9-0.4-1.3-0.6c-0.1-0.7-0.8-0.4-1.1-0.8 c-0.3-0.4-0.8-0.5-1.3-0.8c-1.5,1.5-2.8,3.1-4,4.9c-0.1,0.1-0.1,0.3-0.1,0.5c-0.5,0.4-1,0.3-1.5,0v-0.4c-0.7-0.4-1.3-0.8-2-1.2 c-0.3-0.4-0.2-1-0.4-1.5c-0.2-0.5,0-1-0.1-1.4c0.7-1.7,1.6-3.1,2.9-4.4v-0.8c-0.7-0.5-1.2-1.3-1.6-2.1c-0.2-0.3-0.2-0.6-0.2-0.9 c-0.1-0.6-0.4-1.2-0.3-1.9c0-1.3,0.8-2.2,2-2.6c0.8-0.3,1.5-0.1,2.3-0.2c-0.4,0.9-1.5,0.8-2.1,1.6c1.1,0,1.7-1.1,2.8-0.9 c0,0.3-0.1,0.5-0.1,0.8c0.2,0.1,0.5,0.2,0.8,0.3v1.4c-0.3,0.5-0.6,1-0.9,1.5C33.2,26.3,33.3,26.6,33.3,27"></path>
											<path d="M52.3,13c-0.4,0.5-0.8,1-1.2,1.6V16c-0.4,0.2-0.8,0.3-1.2,0.5c-0.5-0.5-0.7-1.2-0.9-1.8 c-0.2,0.1-0.4,0.2-0.7,0.3c-0.2-0.3-0.5-0.6-0.7-1c-0.4-1-0.4-2.1-0.4-3.2c0.2-0.4,0.4-0.8,0.6-1.3c-0.3,0-0.6,0-0.7-0.1 c-0.7-0.7-1.5-1.5-2.1-2.3c-0.4-0.4-0.7-0.9-0.9-1.4c-0.2-0.8-0.2-1.6-0.3-2.4c0.3-0.5,0.6-1,1.1-1.4c0.4-0.4,1-0.5,1.6-0.8 c0.1,0.2,0.3,0.3,0.4,0.5c-0.1,0.1-1.2,1.1-1.2,1.1c0.1,0.1,0.2,0.2,0.3,0.3c0.5-0.4,1-0.8,1.8-0.5c-0.2,0.3-0.4,0.5-0.6,0.9 c0.4-0.1,0.6-0.2,0.9-0.3c0.1,0.2,0.3,0.4,0.5,0.7c-0.3,0.3-0.6,0.6-0.9,0.9c0.2,0,0.3,0.1,0.5,0.1c-0.3,0.4-0.1,1-0.8,1.2 C48,6.5,48.7,7,49.5,7.5c2.5-2.1,4.9-4.1,7.4-6.1H58c-0.2,0.4-0.3,0.7-0.5,1c0.3,0.2,0.6,0,0.9-0.2c0.8,0.8,1,1.8,0.9,2.8 c-0.3,0.4-0.7,0.9-1.1,1.4c0,0,0.1,0.1,0.2,0.2c-0.2,0-0.4,0.1-0.6,0.1c0.1,0.1,0.2,0.2,0.2,0.2h-0.4c-0.8,1.5-2.1,2.4-3,3.8 c1.3,0.7,2.8,1.3,4.2,2.1c0,0.2,0.1,0.4,0.1,0.7c0.2-0.2,0.3-0.3,0.4-0.4c0.6,0.1,0.5,0.7,1,1c0.4,0.2,0.7,0.8,1,1.2v1.3 c-0.1,0.1-0.2,0.2-0.4,0.4c-1.2-0.1-2.1-0.8-3.2-1.3c0,0-0.1,0.1-0.1,0.1c-0.7-0.2-1.2-1-2-0.9c-0.4-0.5-1.1-0.6-1.6-0.9 C53.5,13.7,53,13.3,52.3,13"></path>
											<path d="M85.2,31c0.2,0.1,0.4,0.2,0.7,0.4c-0.1,0.4-0.1,0.7-0.2,1.2c0.2,0.3,0.3,0.8,0.9,1c0.3-0.4,0.4-0.8,0.9-1 c0.3-0.1,0.6-0.6,0.8-1c0.3-0.4,0.7-0.6,0.9-1.1c0.2-0.4,0.6-0.6,0.9-1c0.3-0.4,0.5-0.8,0.7-1.2h1.3c0.1,0.4,0.2,0.7-0.2,1.1 c0.4,0,0.6,0,0.9,0c0.1,0.5,0.2,1,0.3,1.5c-0.2,0.1-0.3,0.1-0.5,0.2c0,0.1,0,0.2,0.1,0.3c0.3,0.8,0.3,1-0.3,1.6 c-0.3,0.3-0.4,0.6-0.3,0.9c0.2,0.4-0.3,0.2-0.1,0.6c-0.2-0.2-0.3-0.3-0.5-0.4v0.6c-0.2,0-0.4,0.1-0.7,0.1v0.6 c-0.3,0.3-0.5,0.5-0.7,0.7c0.4,0.4,0.8,0.7,1.1,1v0.9c0.2,0.2,0.5,0.5,0.8,0.8c-0.1,0.1-0.1,0.2-0.2,0.4c0.1,0.2,0.3,0.5,0.5,0.9 c-0.2,0.5-0.5,1-0.7,1.4h-0.9c-1.1-0.6-2.2-1.2-3.2-1.8c-0.2,0.3-0.3,0.5-0.5,0.7c-0.2-0.1-0.3-0.2-0.6-0.3v1.1 c-0.3-0.1-0.6-0.2-1-0.4c0.2,0.3,0.2,0.3,0.3,0.5c-0.2,0.2-0.4,0.4-0.8,0.7c-0.1-0.4-0.1-0.7-0.2-1c0.2-0.1,0.3-0.1,0.5-0.2 c0-0.1,0-0.2,0.1-0.3c-0.1,0-0.3-0.1-0.4-0.1c0-0.2,0.1-0.4,0.2-0.7c-0.2,0.2-0.3,0.3-0.3,0.3c-0.5-0.1-0.9-0.2-1.4-0.3 c-0.1-0.1-0.2-0.3-0.3-0.5c0.1-0.3,0.2-0.7,0.3-1.1c0.2,0,0.5,0.1,0.8,0.1c0,0,0-0.1,0-0.1c-0.3-0.1-0.6-0.3-0.8-0.4 c0.2-0.3,0.3-0.6,0.5-0.9c-0.7-1.3-1.6-2.5-2-3.8c-0.3-0.9,0.1-1.9,0.2-2.8c0.1-0.7,0.7-1.2,1.4-1.6c0.1-0.1,0.2-0.1,0.3-0.2h1.1 c0.2,0.2,0.3,0.3,0.4,0.4c-0.2,0.2-0.4,0.4-0.6,0.6v0.7c0.2-0.1,0.5-0.1,0.8-0.2c0.1,0.1,0.3,0.3,0.5,0.4 C85.6,30.6,85.4,30.8,85.2,31"></path>
											<path d="M17.3,42.6c0.1,0.1,0.2,0.2,0.4,0.4c-0.7,0.6-1.4,1.2-2.1,1.8c0,0,0,0.1,0,0.1c0.1,0,0.3,0,0.4-0.1 c0.2-0.2,0.4-0.4,0.6-0.4c0.5-0.3,1-0.5,1.4-0.8c0.4,0.3,0.1,0.6-0.1,1c0.3-0.1,0.4-0.2,0.6-0.2c0.1,0.1,0.2,0.2,0.3,0.3 c0,0.5,0,0.9,0,1.4c-0.1,0.1-0.3,0.3-0.4,0.4c0,0.1,0,0.1,0.1,0.2c0.3,0.2,0.5,0.4,0.8,0.6c0.3,0.2,0.7,0.2,0.7,0.7 c0,0.1,0.1,0.1,0.2,0.2c0.2,0.2,0.5,0.3,0.7,0.5c0.2,0.2,0.3,0.5,0.5,0.8c0,0.2,0,0.5,0,0.8c-0.2,0.2-0.4,0.4-0.5,0.5 c-1.4-0.5-2.8-1-4.2-1.5c-0.3,0.2-0.6,0.3-1,0.5c0,0,0,0,0-0.1c-0.3,0.3-0.6,0.6-1,1c0,0.1,0,0.3,0,0.5c-0.6,0.6-1.2,1.2-1.7,1.7 c-0.3,0.8-0.1,1.6-1.2,1.7c-0.2-0.3-1-0.4-0.8-1.2c-0.2-0.1-0.5-0.1-0.8-0.2c-0.1,0-0.2,0.1-0.3,0.2c-0.3-0.3-0.5-0.6-0.9-1 c-0.1-0.7-0.2-1.6-0.3-2.6c0.9-1,1.9-2,2.8-3.1c-0.4-0.2-0.8-0.4-1.1-0.7c-0.4-0.3-0.6-0.6-1-1c0.1-0.3,0.2-0.6,0.3-0.9 c-0.2-0.1-0.3-0.1-0.5-0.2v-0.8c0.1-0.1,0.1-0.1,0.2-0.2c0.3-0.1,0.7-0.1,1.1-0.2c1.1,0.6,2.3,1.3,3.5,2C15.4,44,16.1,43,17.3,42.6"></path>
										</svg>
									</figure>
								</div>

								<div class="col-sm-6">
									<!-- Skill set -->
									<div class="row mb-4">
										<div class="col-sm-6 mb-4 mb-sm-0">
											<div class="bg-dark rounded text-center p-3">
												<span class="h2 text-white" >10+</span>
												<p class="mb-0 text-white">years of experience</p>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="bg-colo rounded text-center p-3">
												<span class="h2 text-white">571</span>
												<p class="mb-0 text-white">event in a year</p>
											</div>
										</div>
									</div>
									
									<!-- About image -->
									<img src="{{asset('public/image/01.jpg')}}" class="rounded" alt="about-img-2">
								</div>
							</div> <!-- Row END -->
						</div>
						<!-- About image END -->

						<!-- About content START -->
						<div class="col-lg-5">
							<span class="heading-color text-dark bg-light small rounded-3 px-3 py-2">🤝 Your gateway to exact success</span>
							<h2 class="my-4 texto-bg">Defining the future of experiences!</h2>
							<p class="mb-4">Streamline event planning with The Exhibition Navigator, offering comprehensive solutions for successful exhibitions.</p>
							<!-- List -->
							<ul class="list-group list-group-borderless mb-4">
								<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Tie-ups with leading industry events for enchanced exposure and opportunities.</li>
								<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>Over 571 events successfully managed, ensuring industry expertise and reliability.</li>
								<li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>The Exhibition Network handles end-to-end event management, from planning to execution, for seamless experiences.</li>
							</ul>
							<!-- Button -->
							<a href="about-v1.html" class="btn btn-dark mb-0">Discover more</a>
						</div>
						<!-- About content END -->

					</div>
				</div>
			</section>


    <!-- new-end -->
      <style>
        .masonry-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        grid-auto-rows: 8px;
        gap: 16px;
        }

        .masonry-item {
          grid-row: span var(--rows);
          border-radius: 14px;
          overflow: hidden;
          position: relative;
          background: #fff;
        }

      </style>

      @php 
			  $photos = DB::table('photos')->where('usago', 'fabric')->get();
			@endphp
      
      <div class="masonry-grid">
        @foreach($photos as $imgo)
          <div class="masonry-item" style="--rows: {{ rand(18, 40) }}">
            
            <img 
              src="{{ url('public/assets/image/exhibition/'.$imgo->brand_lgo) }}"
              class="w-full h-full object-cover"
            >

            <!-- Hover Overlay -->
            <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 hover:opacity-100 transition">
              <span class="text-white text-sm font-semibold">View Stall</span>
            </div>

          </div>
        @endforeach
      </div>

    <div class="container py-5">
      <!-- optimize -->
      <hr class="border-primary opacity-2 mt-sm-7 my-5">
      
      <div class="row">
        <!-- Client -->
        <div class="col-md-6 col-xl-7 mb-5 mb-md-0">
          <p class="mb-0"><i class="bi bi-shield-check"></i> | We believe in going above and beyond to exceed. We reached <b class="text-primary fs-6">19k</b></p>
          
          <!-- Slider START -->
          <div class="swiper mt-2 mt-md-4 swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper-options="{
              &quot;loop&quot;: true, 
              &quot;slidesPerView&quot;: 2, 
              &quot;spaceBetween&quot;: 30, 
              &quot;autoplay&quot;:{
                &quot;delay&quot;: 2000, 
                &quot;disableOnInteraction&quot;: false
              },
              &quot;breakpoints&quot;: { 
                &quot;576&quot;: {&quot;slidesPerView&quot;: 3}, 
                &quot;768&quot;: {&quot;slidesPerView&quot;: 2}, 
                &quot;992&quot;: {&quot;slidesPerView&quot;: 3}, 
                &quot;1200&quot;: {&quot;slidesPerView&quot;: 4}
              }}">

              <!-- Slider items -->
              <div class="swiper-wrapper align-items-center" id="swiper-wrapper-7d7e92960c217792" aria-live="off">
                <!-- Image -->
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" data-swiper-slide-index="0" style="width: 136.25px; margin-right: 30px;">
                  <img src="assets/images/client/01.svg" class="px-3 ps-0" alt="client-img">
                </div>
                <!-- Image -->
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" data-swiper-slide-index="1" style="width: 136.25px; margin-right: 30px;">
                  <img src="assets/images/client/02.svg" class="px-3" alt="client-img">
                </div>
                <!-- Image -->
                <div class="swiper-slide" role="group" aria-label="3 / 4" data-swiper-slide-index="2" style="width: 136.25px; margin-right: 30px;">
                  <img src="assets/images/client/03.svg" class="px-3" alt="client-img">
                </div>
                <!-- Image -->
                <div class="swiper-slide" role="group" aria-label="4 / 4" data-swiper-slide-index="3" style="width: 136.25px; margin-right: 30px;">
                  <img src="assets/images/client/04.svg" class="px-3" alt="client-img">
                </div>
              </div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    
        <!-- Skill sets -->
        <div class="col-md-6 col-lg-5 col-xl-3 ms-auto text-md-end">
          <!-- Title -->
          <p class="mb-0 me-2">Trusted by Customers <span class="badge bg-dark">Active</span></p>

          <!-- Counter -->
          <div class="d-flex justify-content-md-end mt-2 mt-md-4">
            <!-- Counter item -->
            <div>
              <div class="d-flex justify-content-md-end">
                <h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="15" data-purecounter-delay="300" data-purecounter-duration="0">15</h4>
                <span class="h4 mb-0">k+</span>
              </div>
              <p class="mb-0">Active users</p>
            </div>

            <div class="vr mx-3 mx-sm-4"></div> <!-- Divider -->

            <!-- Counter item -->
            <div>
              <div class="d-flex justify-content-md-end">
                <h4 class="purecounter mb-0" data-purecounter-start="0" data-purecounter-end="56" data-purecounter-delay="300" data-purecounter-duration="0">56</h4>
                <span class="h4 mb-0">+</span>
              </div>
              <p class="mb-0">Completed projects</p>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    

    <!-- start-6-emotional-payoff -->
    <section class="my-5 py-5" data-bs-theme="emotional">
      <div class="container">
        <!-- Title -->
        <div class="inner-container text-center mb-4 mb-sm-6">
          <h2 class="mb-4">Showcasing Recent Projects</h2>
          <p class="mb-0">Discover a selection of our most recent client projects, showcasing our expertise, creativity, and commitment to delivering outstanding results.</p>
        </div>

        <div class="row g-4">
          <!-- Tabs -->
          <div class="col-md-4 col-lg-3">
            <div class="d-flex flex-column h-100">
              <h6 class="mb-sm-3">Browse by:</h6>
              <!-- Tab item START -->
              <div class="grid-menu mb-4" data-target=".filter-container">
                <ul class="nav flex-md-column gap-1 nav-pills nav-pills-primary">
                  <li class="nav-item">
                    <a class="nav-link active" data-filter="*">All work</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-filter=".marketing">Digital Marketing</a>          
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-filter=".design">Web design</a>        
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-filter=".business">Business development</a>        
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-filter=".brand">Brand design</a>        
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-filter=".ui">UI/UX design</a>        
                  </li>
                </ul>

                <!--Tab item END  -->
              </div>
              
              <!-- Button -->
              <a href="portfolio-showcase.html" class="btn btn-light mt-auto mb-5">View all projects<i class="fa-solid fa-arrow-right-long ms-2"></i></a>
            </div>
          </div>

          <!-- Tab content START -->
          <div class="col-md-8 col-lg-9">
            <div class="row g-4 filter-container" data-isotope='{"layoutMode":"masonry"}'>

              <!-- Work item -->
              <div class="col-sm-6 col-lg-4 grid-item marketing business brand">
                <div class="card card-element-hover card-metro-hover overflow-hidden">
                  
                  <!-- Card Image -->
                  <img src="assets/images/portfolio/masonry/01.jpg"
                      class="card-img"
                      alt="Dynamic Workflows Website">

                  <!-- Overlay -->
                  <div class="card-img-overlay hover-element d-flex">
                    <div class="card-text mt-auto">
                      <h6 class="mb-0">
                        <a href="portfolio-case-studies-v1.html"
                          class="text-white stretched-link">
                          Dynamic Workflows Website
                        </a>
                      </h6>
                      <small class="text-white">UI/UX design</small>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Work item -->
              <div class="col-sm-6 col-lg-4 grid-item brand ui">
                <div class="card card-element-hover card-metro-hover overflow-hidden">

                  <img src="assets/images/portfolio/masonry/04.jpg"
                      class="card-img"
                      alt="ElevateTech Redesign">

                  <div class="card-img-overlay hover-element d-flex">
                    <div class="card-text mt-auto">
                      <h6 class="mb-0">
                        <a href="portfolio-case-studies-v1.html"
                          class="text-white stretched-link">
                          ElevateTech Redesign
                        </a>
                      </h6>
                      <small class="text-white">Brand design</small>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Work item -->
              <div class="col-sm-6 col-lg-4 grid-item business design brand">
                <div class="card card-element-hover card-metro-hover overflow-hidden">

                  <img src="assets/images/portfolio/masonry/02.jpg"
                      class="card-img"
                      alt="User-Centric Redesign">

                  <div class="card-img-overlay hover-element d-flex">
                    <div class="card-text mt-auto">
                      <h6 class="mb-0">
                        <a href="portfolio-case-studies-v1.html"
                          class="text-white stretched-link">
                          User-Centric Redesign
                        </a>
                      </h6>
                      <small class="text-white">Web design</small>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Work item -->
              <div class="col-sm-6 col-lg-4 grid-item design marketing">
                <div class="card card-element-hover card-metro-hover overflow-hidden">

                  <img src="assets/images/portfolio/masonry/05.jpg"
                      class="card-img"
                      alt="Sustainability Initiative">

                  <div class="card-img-overlay hover-element d-flex">
                    <div class="card-text mt-auto">
                      <h6 class="mb-0">
                        <a href="portfolio-case-studies-v1.html"
                          class="text-white stretched-link">
                          Sustainability Initiative
                        </a>
                      </h6>
                      <small class="text-white">Business dev</small>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Work item -->
              <div class="col-sm-6 col-lg-4 grid-item business design">
                <div class="card card-element-hover card-metro-hover overflow-hidden">

                  <img src="assets/images/portfolio/masonry/06.jpg"
                      class="card-img"
                      alt="E-commerce Expansion">

                  <div class="card-img-overlay hover-element d-flex">
                    <div class="card-text mt-auto">
                      <h6 class="mb-0">
                        <a href="portfolio-case-studies-v1.html"
                          class="text-white stretched-link">
                          E-commerce Expansion
                        </a>
                      </h6>
                      <small class="text-white">Digital Marketing</small>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Work item -->
              <div class="col-sm-6 col-lg-4 grid-item ui">
                <div class="card card-element-hover card-metro-hover overflow-hidden">

                  <img src="assets/images/portfolio/masonry/03.jpg"
                      class="card-img"
                      alt="Social Media Engagement">

                  <div class="card-img-overlay hover-element d-flex">
                    <div class="card-text mt-auto">
                      <h6 class="mb-0">
                        <a href="portfolio-case-studies-v1.html"
                          class="text-white stretched-link">
                          Social Media Engagement
                        </a>
                      </h6>
                      <small class="text-white">UI/UX design</small>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>


          <!-- Tab content END -->
        </div> <!-- Row END -->
      </div>	
    </section>
    <!-- end-6-emotional-payoff -->

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