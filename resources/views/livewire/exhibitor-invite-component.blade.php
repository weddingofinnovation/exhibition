<main>
  <style>
    .hero {
      font-family: Arial, sans-serif;
      background: url('event-banner.jpg') center/cover no-repeat;
      text-align: center;
      /* padding: 60px; */
      color: white;
    }

    .hero h1 {
      font-size: 2.5rem;
    }
  </style>


  @if($board == 'thankyou')
      @php
        $findvisitor = DB::table('leads')->where('id', $visitorid)->first();
      @endphp

      <div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">

            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="text-center flex-grow-1 fs-md">
                Thank you <strong> {{$findvisitor->name}}</strong> for registering for <strong>Nakshatra & Arogyam Fair 2026 </strong>. Your registration details have been received.
              </div>

              <div class="">
                <a href="#" id="shareBtn" class="mx-2 text-dark"><i class="bi bi-share fs-4"></i></a>
              </div>
            </div>

            <p class="fs-sm">We are excited to welcome you to India's flagship Category Of Event, where innovation and collaboration shape the future of the global -- ecosystem.
              Your badge will be sent to you 4 weeks prior to the event. In the meantime, please find some information on your visitor pass benefits and conference upgrade options.</p>

            <div class=" mb-4 text-center">
              <a href="#" class="btn btn-sm btn-primary align-center">Add to Calender</a>
              <a class="btn btn-sm btn-outline-dark text-dark" href="{{route('printpdf.badge',['visitorid' => $visitorid])}}"><i class="bi bi-arrow-up"></i></a>
            </div>




            <div class="fs-xs mt-2">
              Disclaimer : Please note that cancellations are not permitted once the registration process is complete. Kindly reach out to us at
              <a href="">team@exhibition.org.in</a> for any registration related queries.
            </div>

          </div>
        </div>
      </div>
    @elseif($board == 'exhibitor')
      
    @else
     <div class="container">
        <div class="row">
          <!-- Column 1 -->
          <div class="col-md-5 col-12 my-5 border-end">
            <div class="p-0">


              <!-- data -->

              <section class="hero d-none d-md-block">
                <h1>Connect. Collaborate. Grow.</h1>
                <p>Invite business representatives or schedule meetings with top brands at the event.</p>
              </section>

              <section class="container d-none d-md-block">
                <!-- <h2 class="text-center">Live Event Stats</h2> -->

                <div class="row text-center g-3">

                  <div class="col-md-4 col-12">
                    <div class="p-4 border rounded shadow-sm h-100">
                      <h3 class="fw-bold text-primary">1,250+</h3>
                      <p class="mb-0">Invites Sent</p>
                    </div>
                  </div>

                  <div class="col-md-4 col-12">
                    <div class="p-4 border rounded shadow-sm h-100">
                      <h3 class="fw-bold text-primary">800+</h3>
                      <p class="mb-0">Meeting Scheduled</p>
                    </div>
                  </div>

                  <div class="col-md-4 col-12">
                    <div class="p-4 border rounded shadow-sm h-100">
                      <h3 class="fw-bold text-primary">Top 5</h3>
                      <p class="mb-0">Most Requested Brands</p>
                    </div>
                  </div>

                </div>
              </section>

              <section class="container my-4 d-none">
                <p class="fw-bold text-center mb-4">
                  Invitee Helps You Achieve Your Goals
                </p>

                <div class="row g-3">

                  <div class="col-md-4 col-12">
                    <div class="border rounded p-4 h-100 shadow-sm">
                      <h3 class="fw-bold text-primary">1,250+</h3>
                      <p class="fw-semibold mb-2">Market Your Business to New Users</p>
                      <strong>Effortless Scheduling</strong> –
                      Plan your meetings in advance for a seamless event experience.
                    </div>
                  </div>

                  <div class="col-md-4 col-12">
                    <div class="border rounded p-4 h-100 shadow-sm">
                      <h3 class="fw-bold text-primary">800+</h3>
                      <p class="fw-semibold mb-2">Grow Your Revenue</p>
                      <strong>Meaningful Interactions</strong> –
                      Connect with the right people who matter to your business.
                    </div>
                  </div>

                  <div class="col-md-4 col-12">
                    <div class="border rounded p-4 h-100 shadow-sm">
                      <h3 class="fw-bold text-primary">Top 5</h3>
                      <p class="fw-semibold mb-2">Get More Walk-in Customers</p>
                      <strong>Time-Saving</strong> –
                      Avoid last-minute scheduling and maximize your event productivity.
                    </div>
                  </div>

                </div>
              </section>

            </div>
          </div>

          <!-- Column 2 -->
          <div class="col-md-7 col-12 my-5">
            <div class="">
              <div class="mb-4">
                <form wire:submit.prevent="exhibitorrequestedvisitorforpass">
                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                    <input class="form-control" type="name" wire:model.lazy="name" required="" placeholder="Enter your name">
                    @error('name')
                    <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                    <input class="form-control" type="email" wire:model.lazy="email" required="" placeholder="Enter your email address">
                    @error('email')
                    <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                    <input class="form-control" type="tel" wire:model.lazy="phone" required="" placeholder="Enter your phone">
                    @error('phone')
                    <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <input type="text" class="form-control" wire:model.lazy="company" required="" placeholder="Enter your company">
                    @error('company')
                    <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <select class="form-control" wire:model.lazy="grade" required="" placeholder="">
                      <option value="">Select</option>
                      <option value="product">Product Info</option>
                      <option value="pricing">Pricing</option>
                      <option value="dealership">Dealership</option>
                      <option value="bulk">Bulk Order</option>
                    </select>
                    @error('interest')
                    <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <textarea class="form-control" placeholder="Enter your notes" wire:model.lazy="comment"></textarea>
                    @error('comment')
                    <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <button class="btn btn-primary form-control mb-5" type="submit">Submit</button>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
  @endif

</main>