@section('page_title', ('Book your Space '.$findevent->eventname))
@section('page_description', ('Great Place To Exhibit '.$findevent->shtdesc))
@section('page_keyword', 'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in' .$findevent->city)



<main>
  @if($board == 'business')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">


      <div class="col-lg-8 col-md-10">
        <p>A Warm Welcome</p>
        <h2 class="h3 mb-2">Intention to exhibit</h2>

        <small class="mb-2 lh-0">We are glad you are interested in attending {{$findevent->eventname}}.
          Here you can make a non-binding request<br> for stand space and find useful information for a
          successful presentation at the fair.
        </small>

        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="add">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

        <small class="mb-2">If you have any questions or would like more information, please feel free to contact <strong>The Exhitbion Network team</strong> at <strong>+91-999-185-6776</strong>
        </small>

      </div>
    </div>
  </div>
  @elseif($this->board == 'visit')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">


      <div class="col-lg-8 col-md-10">
        <p>A Warm Welcome</p>
        <h2 class="h3 mb-2">Intention to Visit</h2>

        <small class="mb-2">We are glad you are interested in attending, <strong>{{ucwords($findevent->eventname)}}</strong>.
          Here you can make a non-binding request for stand space and find useful information for a
          successful presentation at the fair.
        </small>

        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="add">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

        <small class="mb-2">If you have any questions or would like more information, please feel free to contact <strong>The Exhitbion Network Team</strong> at <strong>+91-999-185-6776</strong></small>

      </div>
    </div>
  </div>
  @elseif($this->board == 'award')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Gateway to Recognition and Success.</h2>
        <p class="fs-xs">awardJoin the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>

        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="otheradd">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

      </div>


    </div>
  </div>
  @elseif($this->board == 'startup')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Empowering Startups<br> Connect, Collaborate <br> Grow with Open Membership!</h2>
        <p class="fs-xs">startupJoin the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>

        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="otheradd">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

      </div>


    </div>
  </div>
  @elseif($this->board == 'directory')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Our data, Your Customer.</h2>
        <p class="fs-xs">directoryJoin the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>

        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="otheradd">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

      </div>


    </div>
  </div>
  @elseif($this->board == 'partner')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Our data, Your Customer.</h2>
        <p class="fs-xs">partnerJoin the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>

        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="otheradd">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

      </div>


    </div>
  </div>
  @elseif($this->board == 'meet')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Right Place, Right People, Right Time</h2>
        <p class="fs-xs">meetJoin the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>

        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="otheradd">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

      </div>


    </div>
  </div>
  @elseif($this->board == 'find')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">


      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Our data, Your Customer.</h2>
        <p class="fs-xs">findJoin the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="otheradd">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

      </div>


    </div>
  </div>
  @elseif($this->board == 'hostess')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">


      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Exhibit with us.</h2>
        <p class="fs-md">hostessJoin the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="hostessadd">
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
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>

      </div>


    </div>
  </div>
  @elseif($this->board == 'embassy')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">


      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Find Right place to meet.</h2>
        <p class="fs-md">Join the ranks of top industry leaders and connect. <br> Share your details and let's make it happen </p>
        {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}


        <form wire:submit.prevent="vipentryadd">
          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="name" wire:model.lazy="name" required="" placeholder="Enter your name">
            @error('name')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="name" wire:model.lazy="designation" required="" placeholder="Your Designation">
            @error('designation')
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

          <!-- <div class="mb-1">
                      <select class="form-select" name="" id="select-input" aria-label="default" wire:model="type"></select>
                      <option selected disabled>Choose option...</option>
                      <option value="embassy">Embassy</option>
                      <option value="company">Company</option>
                      <option value="visitor">visitor</option>
                    </div> -->

          <div class="mb-1">
            <!-- <label class="form-label" for="cf-subject">Type</label> -->
            <select class="form-control" type="text" wire:model="type" id="type" name="type" placeholder="Provide short title of your request">
              <option selected>Please select</option>
              <option value="embassy">Embassy</option>
              <option value="company">Company</option>
              <option value="visitor">visitor</option>
            </select>
            @error('industry') <div class="invalid-feedback"> {{$message}} </div> @enderror
          </div>


          @if($type == "company")
          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="text" wire:model.lazy="company" required="" placeholder="Enter your company">
            @error('company')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          @elseif($type == "embassy")
          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="text" wire:model.lazy="company" required="" placeholder="Enter your embassy Name">
            @error('embassyname')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          @endif

          <div class="mb-1">
            <label class="form-label" for="recover-email">Upload your Business Image</label>
            <input class="form-control" type="file" wire:model.lazy="image" required="" placeholder="upload your ">
            @error('image')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>



          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>
      </div>


    </div>
  </div>
  @elseif($this->board == 'fabrication')
  <div class="container">
    <form wire:submit.prevent="fabrication">
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
        <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
        @error('phone')
        <div class="form-text text-primary">{{$message}}</div>
        @enderror
      </div>
      <button class="btn btn-primary form-control" type="submit">Submit</button>
    </form>
  </div>
  @elseif($this->board == 'fabrication-details')
  <div class="container">

    <form wire:submit.prevent="boothdetails">
      <label class="form-label text-center mt-4 fs-4 fw-bold" for="recover-email">What are the dimensions of the booth space you have booked?</label>

      <div class="mb-1">
        <label class="form-label" for="">Booth Size</label>
        <input type="text" class="form-control" wire:model.lazy="stallsize" placeholder="E.g., 3x3m, 6x6m" required="">
        @error('stallsize')
        <div class="form-text text-primary">{{$message}}</div>
        @enderror
      </div>

      <div class="mb-1">
        <label class="form-label" for="">Booth Number</label>
        <input type="text" class="form-control" wire:model.lazy="boothnumber" placeholder="E.g., A12, B-5" required="">
        @error('boothnumber')
        <div class="form-text text-primary">{{$message}}</div>
        @enderror
      </div>

      <div class="mb-1">
        <label class="form-label" for="">Booth Dimensions (in meters):</label>
        <input type="text" class="form-control" wire:model.lazy="dimensions" placeholder="Width x Depth" required="">
        @error('dimensions')
        <div class="form-text text-primary">{{$message}}</div>
        @enderror
      </div>


      <div class="mb-1">
        <label class="form-label" for="recover-email">How many sides of the booth are open?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model.lazy="openside" required="">
          <option selected>Choose option...</option>
          <option value="1-side open">1-Side Open</option>
          <option value="2-side">2-Side Open (Corner)</option>
          <option value="3-side">3-Side Open</option>
          <option value="4-side">4-Side Open (Island)</option>
        </select>
        @error('openside')
        <div class="form-text text-primary">{{$message}}</div>
        @enderror
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">Upload Floor Plan (if available):</label>
        <input class="form-control" type="file" wire:model.lazy="floorPlan">

        @if($floorPlan) <p>Uploaded: {{$floorPlan->getClientOriginalName()}}</p> @endif

        @error('floorPlan')
        <div class="form-text text-primary">{{$message}}</div>
        @enderror
      </div>

      <button class="btn btn-primary form-control" type="submit">Submit</button>
    </form>

  </div>
  @elseif($this->board == 'membership')
  @elseif($this->board == 'askAboutWhatTheyWantDo')
  <div class="container">
    <form wire:submit.prevent="askAboutWhatTheyWantDo">
      <div class="mb-1">
        <label class="form-label" for="recover-email">What services do you need?</label>
        <input type="checkbox" wire:model.lazy="serviceType" class="form-control" value="design"> Only Booth Desgin <br>
        <input type="checkbox" wire:model.lazy="serviceType" class="form-control" value="fabrication"> Only Fabrication <br>
        <input type="checkbox" wire:model.lazy="serviceType" class="form-control" value="both"> Both Design & Fabrication <br>
        @error('serviceType') <span class="error">{{$message}}</span>@enderror
      </div>

      <button class="btn btn-primary form-control" type="submit">Submit</button>
    </form>
  </div>
  @elseif($this->board == 'wantBrief')

  <ul class="nav nav-tabs nav-fill mb-0" role="tablist">
    <li class="nav-item border-bottom">
      <a class="nav-link px-1 active fs-sm" href="#details" data-bs-toggle="tab" role="tab">Design </a>
    </li>
    <li class="nav-item border-bottom">
      <a class="nav-link px-1 fs-sm" href="#reviews" data-bs-toggle="tab" role="tab">Fabrication</a>
    </li>
  </ul>

  <div class="container">
    <form wire:submit.prevent="wantBrief">

      <!-- <div class="mb-1">
                  <label class="form-label" for="recover-email">What are the dimensions of the stall space you have booked?</label>
                  <select class="form-select" name="" id="select-input" aria-label="default" wire:model="type">
                  <option selected>Choose option...</option>
                  <option value="embassy">3m x 4m</option>
                  <option value="embassy">3m x 5m</option>
                  <option value="embassy">3m x 6m</option>
                  <option value="embassy">3m x 4m</option>
                  </select>
                </div> -->

      <!-- <div class="mb-1">
                  <label class="form-label" for="recover-email">What type of booth design do you prefer?</label>
                  <select class="form-select" name="" id="select-input" aria-label="default" wire:model="openside">
                  <option selected>Choose option...</option>
                  <option value="embassy">Open (No walls, accessible from all sides)</option>
                  <option value="embassy">Semi-open (Walls on 2-3 sides)</option>
                  <option value="embassy">Closed (Enclosed with entrance)</option>
                  </select>
                </div> -->
      <!-- estimatebudget
                brandingdesigntheme
                displaysetup
                furniture
                storagespace
                lightingpreferences
                meetingarea
                powerconnectivity
                digitalengagement
                additionalstaffing
                requirements -->

      <div class="mb-1">
        <label class="form-label" for="recover-email">What is your your estimated budget for the stall fabrication?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="estimatebudget">
          <option selected>Choose option...</option>
          <option value="150000">Under 1,50,000</option>
          <option value="200000">1,50,000 - 2,00,000</option>
          <option value="300000">2,00,000 - 3,00,000</option>
          <option value="600000">5,50,000 - 6,00,000</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">What are your branding and design prefernces?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="brandingdesigntheme">
          <option selected>Choose option...</option>
          <option value="existing">use existing brand colors and logos</option>
          <option value="fresh-concept">need a fresh concept and design</option>
          <option value="screensinteractivelements">incorporate digital screens and interactive elements</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">What kind of display setup do you need?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="displaysetup">
          <option selected>Choose option...</option>
          <option value="product_display_shelves">Product display shelves</option>
          <option value="led-screens">LED Screens for Video Content</option>
          <option value="touchscreenkiosks">Touchscreen kiosks for interaction</option>
          <option value="democounters">Demo counters for product testing</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">What type of furniture should be included?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model.lazy="furniture">
          <option selected>Choose option...</option>
          <option value="reception">Reception counter</option>
          <option value="lounge">Lounge seating (sofa, chairs)</option>
          <option value="high_tables_bar_stools">High tables & bar stools</option>
          <option value="storage_cabinets">Storage cabinets</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">How much storage space do you require?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model.lazy="storagespace">
          <option selected>Choose option...</option>
          <option value="hiddenstorageforbags">Small (Hidden storage for bags and personal items)</option>
          <option value="storgaemarketingmaterials">Medium (Storage cabinets for marketing materials)</option>
          <option value="dedicatedstorage">Large (Dedicated storage for product stock)</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">what lighting preferences do you have?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model.lazy="lightingpreferences">
          <option selected>Choose option...</option>
          <option value="warm_ambient_light">Warm ambient lighting</option>
          <option value="spotlights_product_highlights">Spotlights for product highlights</option>
          <option value="led_strips_branding">LED Strips for branding effects</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">Do you need a private meeting area?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="meetingarea">
          <option selected>Choose option...</option>
          <option value="closed">Yes, enclosed with soundproofing</option>
          <option value="semi-private">Yes, semi-private with open seating</option>
          <option value="opendiscussion">NO, open discussion space in fine</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">What power and connectivity requirement do you have?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="powerconnectivity">
          <option selected>Choose option...</option>
          <option value="standard">Standard power sockets (for laptops, phone charging)</option>
          <option value="high">High-power connections (for heavy equipment)</option>
          <option value="wifi">Wi-fi access for digital interactions</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">Would you like interactive or digital engagement tools?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="digitalengagement">
          <option selected>Choose option...</option>
          <option value="Qrcodelead capture">Qr code-based lead capture</option>
          <option value="embassy">Augmented Reality (AR)/ Virtual Reality (VR) experience</option>
          <option value="embassy">Social media live streaming setup</option>
        </select>
      </div>

      <label for="">Logistics & Execution</label>

      <div class="mb-1">
        <label class="form-label" for="recover-email">What is your setup and dismantling preference?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="type">
          <option selected>Choose option...</option>
          <option value="embassy">Standard (1-2 days before the event)</option>
          <option value="embassy">Express (Same-day setup, additional cost)</option>
          <option value="embassy">No Preference</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">Are they any event organizer restrictions we should consider?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="type">
          <option selected>Choose option...</option>
          <option value="embassy">Height limits for the booth</option>
          <option value="embassy">Material restrictions (fireproofing,eco-friendly)</option>
          <option value="embassy">Noise Level Limitations</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">Do you require additional staffing for the booth?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="additionalstaffing">
          <option selected>Choose option...</option>
          <option value="embassy">Yes, product demonstrators</option>
          <option value="embassy">Yes, event hosts/presenters</option>
          <option value="embassy">No, our team will mange it</option>
        </select>
      </div>

      <div class="mb-1">
        <label class="form-label" for="recover-email">Any other special requirements?</label>
        <select class="form-select" name="" id="select-input" aria-label="default" wire:model="requirements">
          <option selected>Choose option...</option>
          <option value="embassy">Thematic decor or custom installations</option>
          <option value="embassy">On-site food & beverage setup</option>
          <option value="embassy">Any other specific requests (Please specify)</option>
        </select>
      </div>

      <button class="btn btn-primary form-control" type="submit">Submit</button>
    </form>
  </div>
  @elseif($this->board == 'invite')

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

  <div class="container">
    <div class="row">
      <!-- Column 1 -->
      <div class="col-md-5 col-12 my-5 border-end">
        <div class="p-0">
          <section class="container my-4">
  <div class="border rounded p-4 shadow-sm bg-light">

    <h5 class="fw-bold mb-3 text-center">
      Exhibitor Details for Visitors
    </h5>

    @php
       $event_id = session()->get('eventID');
       $eventdetils = DB::table('events')->where('id', $event_id)->get();
    @endphp

    @foreach($eventdetils as $franchise)
      <div class="container">
          <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
            <div class="col  pr-0">
                @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                    {{-- <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div> --}}
                    <div class="small fw-light">{{Carbon\Carbon::parse ($franchise->startdate)->format('Y')}} </div> 
                    <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                  @else
                    {{--<div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div>--}}
                    <div class="small fw-light">{{Carbon\Carbon::parse ($franchise->startdate)->format('Y')}} </div>
                    <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
                @endif

                
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
              <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue ?? 'null'))}}, {{ucfirst(trans($franchise->city ?? 'null'))}}</div>
            </div>

            <div class="col-3  p-0">
                <a class="card-img-top d-block overflow-hidden" href="#" wire:click.prevent = "selectImage('{{$franchise->id}}')">
                  <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}">
                </a>
                @if(in_array($franchise->id, $selectedImages))
                  <!-- <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-primary bg-opacity-50 d-flex justify-content-center align-items-center">
                    <span class="text-white">Selected</span>
                  </div> -->
                  <!-- <span class="badge bg-success position-absolute top-0 end-0 m-2">Selected</span> -->
                  <!-- Checkmark Icon -->
                  <!-- <span class="position-absolute top-0 start-0 m-2 text-success">
                    <i class="fas fa-check-circle fa-2x"></i>
                  </span> -->
                  
                  <!-- Mobile view: icon notification -->
                  <!-- <span class="position-absolute top-0 start-0 m-2 text-success d-md-none">
                    m<i class="fas fa-check-circle fa-2x"></i> 
                  </span> -->
                  <span class="position-absolute delete-notification"></span>

                  <!-- Desktop view: "Selected" text -->
                  <span class="badge bg-success position-absolute top-0 end-0 m-2 d-none d-md-inline">
                    Selected <!-- Desktop text -->
                  </span>
                @endif
            </div>
          </div>  
      </div>
    @endforeach


    <div class="row g-3">

      <!-- Event Info -->
      <div class="col-md-6 col-12">
        <p class="mb-1"><strong>Industry:</strong> Manufacturing & B2B</p>
        <p class="mb-1"><strong>Product Category:</strong> Industrial Machinery</p>
      </div>

      <!-- Stall Info -->
      <div class="col-md-6 col-12">
        <p class="mb-1"><strong>Hall:</strong> Hall 7</p>
        <p class="mb-1"><strong>Stall No:</strong> B-24</p>
      </div>

    </div>

    <hr>

    <!-- Business Representatives -->
<div class="text-center mt-4">
  <p class="fw-bold mb-3">Business Representatives</p>

  <div class="row g-3 justify-content-center">

    <div class="col-md-4 col-6">
      <div class="border rounded p-3 h-100 shadow-sm">
        <p class="mb-1 fw-semibold">Mr. Rahul Sharma</p>
        <small class="text-muted">Sales Manager</small>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="border rounded p-3 h-100 shadow-sm">
        <p class="mb-1 fw-semibold">Ms. Anjali Verma</p>
        <small class="text-muted">Business Development</small>
      </div>
    </div>

    <div class="col-md-4 col-6">
      <div class="border rounded p-3 h-100 shadow-sm">
        <p class="mb-1 fw-semibold">Mr. Amit Patel</p>
        <small class="text-muted">Channel Partner</small>
      </div>
    </div>

  </div>
</div>


    <!-- CTA -->
    <div class="text-center mt-3">
      <button class="btn btn-primary btn-sm">
        Request Meeting at Stall
      </button>
    </div>

  </div>
</section>


          <section class="hero">
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
            <form wire:submit.prevent="fabrication">
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
                <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
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
                <select class="form-control" wire:model.lazy="interest" required="" placeholder="Enter your phone">
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
                <textarea name="notes" class="form-control" placeholder="Enter your notes"></textarea>
                @error('notes')
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

  <!-- <h4 class="mt-5">Exclusive Business Networking - Invite & Meet Brands</h4>
            <small>Connect with the Right Business Representatives</small>
            <p class="fs-ms">The Exhibtion Network introduces a seamless <strong> Invite & Meet </strong> feature, allowing brands and business representatives to connect efficiently at trade shows, exhibitions, and corporate events. Whether you're a brand looking to invite industry professionals or a visitor eager to schedule a meeting with top exhibitors, this platform makes it simple and effective.</p>

            <h4>For Brands: Invite Business Representatives</h4>
            <p>Maximize your brand's reach by inviting potential clients, partners, and industry leaders to meet you at your booth. Build valuable connections, discuss business oppoortunities, and make he most of your event participation.</p>

            <ul>
              <strong>How It Works:</strong>
              <li>1. Submit your Invitation - Fill in the form with your, <strong>brand name, stall number, and event details.</strong></li>
              <li>2. Send personalized Invites - Reach out to business representatives who match your target audience.</li>
              <li>3. Manage & Track - View response and schedule meetings before the event.</li>
            </ul>

            <h1>For visitors: Request a Meeting with Brands</h1>
            <p>Looking to connect with leading brands at the event? Schedule a meeting in advance to ensure a productive interaction.</p>

            <ul>
              <strong>How It Works:</strong>
              <li>1. choose a Brand - Select from the list of participating exhibitors.</li>
              <li>2. Submit Your Meeting Request - Provide your details and preferred time.</li>
              <li>3. Receive Confirmation - The brand will confirm the appointment, making your visit more effective.</li>
            </ul>

            <p>Don't miss the opportunity to create valueable business relationships!</p>
            <p>For any queries, contact us at</p> -->

  @elseif($this->board == 'know_more')
  <style>
    .chat-btn {
      background-color: #f1f3f9;
      border: none;
      border-radius: 40px;
      padding: 12px 20px;
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 500;
      box-shadow: none;
      transition: 0.2s;
    }

    .chat-btn:hover {
      background-color: #e0e7ff;
    }

    .chat-btn i {
      font-size: 1.2rem;
      color: #1a73e8;
    }

    .btn-outline-custom {
      border: 1px solid #ddd;
      background: white;
      border-radius: 40px;
      padding: 12px 20px;
      font-weight: 500;
    }

    .btn-outline-custom:hover {
      background: #f8f9fa;
    }
  </style>

  <div class="container py-5 text-center">
    <!-- Header -->
    <h2 class="fw-bold mb-1">Need help with your first steps?</h2>
    <h3 class="fw-semibold mb-3">Connect with <span class="text-primary">The Exhibition Network</span></h3>
    <p class="text-muted mb-4">Connect with our support team to get help or advice. Choose a conversation starter below:</p>

    <!-- Conversation Starters -->
    <div class="d-flex flex-wrap justify-content-center gap-3">

      <!-- Option 1 -->
      <button class="btn btn-light px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2">
        <i class="bi bi-arrow-return-right text-primary fs-5"></i>
        <span>Visit the Expo</span>
      </button>

      <!-- Option 2 -->
      <button class="btn btn-light px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2">
        <i class="bi bi-lightbulb text-warning fs-5"></i>
        <span>Participate as an Exhibitor</span>
      </button>

      <!-- Option 3 -->
      <button class="btn btn-outline-secondary px-4 py-2 rounded-pill d-flex align-items-center gap-2" wire:click.prevent="detailswaypath({{ $this->visitorid->id }}, 'service')">
        <i class="bi bi-chat-dots-fill fs-5"></i>
        <span>Services</span>
      </button>

    </div>
  </div>

  @elseif($this->board == 'service')

  <div class="container py-5">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Choose your participation package</h2>
      <p class="text-muted">Select an option to proceed with registration. You can edit this later if needed.</p>
    </div>

    <div class="row g-4">
      <!-- Option A -->
      <div class="col-md-4">
        <label class="card p-4 border rounded-4 text-center shadow-sm position-relative h-100">
          <input type="radio" name="offer" class="form-check-input position-absolute top-0 end-0 m-3" />
          <span class="badge bg-primary mb-2">STANDARD</span>
          <h3 class="fw-bold mb-1">₹20,000</h3>
          <div class="text-muted mb-3">For 6–9 Sqm Booth</div>
          <p class="small text-muted">Ideal for startups or sampling counters. Includes fascia & basic furniture.</p>
        </label>
      </div>

      <!-- Option B -->
      <div class="col-md-4">
        <label class="card p-4 border rounded-4 text-center shadow-sm position-relative h-100">
          <input type="radio" name="offer" class="form-check-input position-absolute top-0 end-0 m-3" />
          <span class="badge bg-info text-dark mb-2">BUSINESS</span>
          <h3 class="fw-bold mb-1">₹40,000</h3>
          <div class="text-muted mb-3">For 12–18 Sqm Booth</div>
          <p class="small text-muted">Get visibility and branding benefits. Includes branding wall & storage area.</p>
        </label>
      </div>

      <!-- Option C -->
      <div class="col-md-4">
        <label class="card p-4 border rounded-4 text-center shadow-sm position-relative h-100">
          <input type="radio" name="offer" class="form-check-input position-absolute top-0 end-0 m-3" />
          <span class="badge bg-success mb-2">PREMIUM</span>
          <h3 class="fw-bold mb-1">₹60,000</h3>
          <div class="text-muted mb-3">For 24+ Sqm Booth</div>
          <p class="small text-muted">Premium corner stall with LED display support, reception & meeting zone.</p>
        </label>
      </div>
    </div>
  </div>


  @else
  @endif

  @if($board == 'thankyou')
  @php
  $findvisitor = DB::table('leads')->where('id', $visitorid)->first();
  @endphp
  <div class="container my-5">
    <div class="card shadow rounded-4 p-4">
      <div class="text-center">
        <h2 class="mb-3 text-success">Thank You, <strong>Mayank</strong>!</h2>
        <p class="lead">You've successfully registered for <strong>Surface & Coating Expo</strong>.</p>
      </div>

      <hr class="my-4">

      <p class="text-muted text-center">
        We're excited to welcome you to India’s flagship event category!
        Your badge will be sent <strong>4 weeks prior</strong> to the event.
      </p>

      <div class="">
        <a href="#" id="shareBtn" class="mx-2 text-dark"><i class="bi bi-share fs-4"></i></a>
        <a class="btn btn-sm btn-outline-dark text-dark" href="{{route('printpdf.badge',['visitorid' => $visitorid])}}"><i class="bi bi-arrow-up"></i></a>
      </div>

      <div class="text-center mt-4">

        <a href="{{$link->google()}}" class="btn btn-outline-primary px-4 me-2"><i class="bi bi-calendar-event"></i>Add to Calender</a>

        @if(Auth::check())
        <a href="{{route('user.dashboard',['board' => 'dashboard'])}}" class="btn btn-primary px-4"><i class="bi bi-person-circle"></i>Add Your Profile</a>
        @else
        <a href="{{route('login')}}" class="btn btn-primary px-4"><i class="bi bi-person-circle"></i>Add Your Profile</a>
        @endif
      </div>

      <div class="mt-5">
        <h5 class="mb-3">Travel Made Easy</h5>
        <p>
          Our official travel partner can help arrange accommodation and travel.
          Enjoy <strong>preferential hotel rates</strong> and <strong>seamless planning</strong>
          to <em>Surface & Coating Expo, Chennai</em>.
        </p>
      </div>

      <div class="text-muted small mt-4">
        <strong>Disclaimer:</strong> Registration cancellations are not permitted.
        For queries, contact:
        <a href="mailto:team@exhibition.org.in" class="text-danger">team@exhibition.org.in</a>
      </div>
    </div>
  </div>

  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <div class="text-center flex-grow-1 fs-md">
            Thank you <strong> {{$findvisitor->name}}</strong> for registering for <strong>{{$findevent->eventname}}</strong>. Your registration details have been received.
          </div>

          <div class="">
            <a href="#" id="shareBtn" class="mx-2 text-dark"><i class="bi bi-share fs-4"></i></a>
          </div>
        </div>

        <p class="fs-sm">We are excited to welcome you to {{$findevent->country}}'s flagship Category Of Event, where innovation and collaboration shape the future of the global -- ecosystem.
          Your badge will be sent to you 4 weeks prior to the event. In the meantime, please find some information on your visitor pass benefits and conference upgrade options.</p>

        <div class=" mb-4 text-center">
          <a href="{{$link->google()}}" class="btn btn-sm btn-primary align-center">Add to Calender</a>
          <a class="btn btn-sm btn-outline-dark text-dark" href="{{route('printpdf.badge',['visitorid' => $visitorid])}}"><i class="bi bi-arrow-up"></i></a>
        </div>

        <div class="mt-1">
          <strong>Travel Made Easy</strong>
          <p class="fs-xs">Our Official Travel Partner, to arrange all your travel and accommodation needs.
            Enjoy exclusive benefits like <a href="">preferential hotal rates and seamless travel arrangements</a> as you plan your visit to
            <Strong>{{$findevent->eventname}}</Strong> in <strong>{{$findevent->city}}</strong>
          </p>
        </div>

        @if(Auth::check())
        <a class="btn btn-primary btn-sm" href="{{route('user.dashboard',['board' => 'dashboard'])}}">Add your profile</a>
        @else
        <a class="btn btn-primary btn-sm" href="{{route('login')}}">Add your profile</a>
        @endif

        <div class="fs-xs mt-2">
          Disclaimer : Please note that cancellations are not permitted once the registration process is complete. Kindly reach out to us at
          <a href="">team@exhibition.org.in</a> for any registration related queries.
        </div>

      </div>
    </div>
  </div>

  @elseif($board == 'thankyou-for-request')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">

        <p class="fs-md">thankuforrequestJoin the ranks of top industry leaders and connect with your target audience. <br> Thanks for sharing and let's make it happen </p>
        <ol class="list-unstyled fs-md">
          <li><span class="text-primary me-2"></span>Thank you for your interest.</li>
          <li><span class="text-primary me-2"></span>Our representative will be contacting you shortly to discuss your request.</li>
          <li><span class="text-primary me-2"></span>If you prefer, you can also proactively reach us at 9991856776</li>
        </ol>

      </div>
    </div>
  </div>
  @elseif($board == 'thankyou-for-stop')
  <div class="container my-5">
    <div class="card shadow rounded-4 p-4">
      <div class="text-center">
        <h2 class="mb-3 text-success">Thank You for Your Interest! <strong>We truly appreciate your enthusiasm in registering.</strong>!</h2>
        <p class="lead">However, due to overwhelming response and limited capacity, visitor entry has been closed at this time.
          This event is exclusively curated for business owners and trade professionals.<strong></strong>.</p>
      </div>

      <hr class="my-4">

      <p class="text-muted text-center">
        We’ll keep your details on record and make sure to connect with you for our next show.
        <strong>Thank you for your understanding.</strong>Stay tuned and stay connected!
      </p>

      <p> <strong>— Team Exhibition Network</strong></p>



      <div class="text-muted small mt-4">
        <strong>Disclaimer:</strong> Registration cancellations are not permitted.
        For queries, contact:
        <a href="mailto:team@exhibition.org.in" class="text-danger">team@exhibition.org.in</a>
      </div>
    </div>
  </div>
  @endif

  @if($board == 'registration-great-exhibition-to-visit')

  <div class="container mt-1">
    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
      <div class="col  pr-0">
        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div>
        <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>
        @else
        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div>
        <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M')}} </div>

        @endif
        @php
        $from = DateTime::createFromFormat('Y-m-d', ($franchise->startdate));
        $to = DateTime::createFromFormat('Y-m-d', ($franchise->enddate));

        $name = $franchise->eventname;
        $venue = $franchise->venue;
        $city = $franchise->city;
        $country = $franchise->country;
        $linko = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
        @endphp

        <a href="{{$linko->google()}}">
          <div class=" round-circle"><i class="bi bi-bookmark"></i></div>
        </a>
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
        <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise->venue))}}, {{ucfirst(trans($franchise->city))}}</div>
      </div>

      <div class="col-3  p-0">
        <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $franchise->slug])}}">
          <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
      </div>
    </div>
  </div>

  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-3">Registration</h2>
        <form wire:submit.prevent="addregistration">
          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="text" wire:model.lazy="company" required="" placeholder="Enter your company">
            @error('company')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="text" wire:model.lazy="industry" required="" placeholder="Enter your industry">
            @error('industry')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>


          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="text" wire:model.lazy="name" required="" placeholder="Enter your name">
            @error('name')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="text" wire:model.lazy="designation" required="" placeholder="Enter your designation">
            @error('designation')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="email" wire:model.lazy="email" required="" placeholder="Enter your email">
            @error('email')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>
          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            @error('phone')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>

          <div class="mb-1">
            <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
            <input class="form-control" type="text" wire:model.lazy="city" required="" placeholder="Enter your city">
            @error('city')
            <div class="form-text text-primary">{{$message}}</div>
            @enderror
          </div>

          <button class="btn btn-primary form-control" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  @endif

  @if($board == 'ticket')
  <div class="container py-4 py-lg-5 my-4">
    <div class="row justify-content-center">



      <div class="col-lg-8 col-md-10">
        <h2 class="h3 mb-2">Contact Details</h2>
        <!-- <p class="fs-md">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}} -->


        <form wire:submit.prevent="addTicket">
          <div class="mb-1">
            <label class="form-label fs-xs " for="recover-email">Your Name</label>
            <input class="form-control" type="name" wire:model.lazy="name" required="" placeholder="Enter your name">
            <label class="fs-xs fw-light text-muted" for="recover-email">Easy to Approach</label>
            <div class="invalid-feedback">Please provide name.</div>
          </div>
          <div class="mb-1">
            <label class="form-label fs-xs " for="recover-email">Your email</label>
            <input class="form-control" type="email" wire:model.lazy="email" required="" placeholder="Enter your email address">
            <label class="fs-xs fw-light text-muted" for="recover-email">To access the ticket(s) on other devices, Login with this E-mail</label>
            <div class="invalid-feedback">Please provide valid email address.</div>
          </div>
          <div class="mb-1">
            <label class="form-label fs-xs" for="recover-email">* Mobile Number</label>
            <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
            <label class="text-muted fw-light fs-xs" for="recover-email">Your Number will only be used for sending Details.</label>
            <div class="invalid-feedback">Please provide valid phone.</div>
          </div>


          <!-- <button class="btn btn-primary" type="submit">Submit</button> -->

          <div class="handheld-toolbar bg-secondary">
            <div class="py-2 px-2">

              <button class="btn btn-primary btn-shadow d-block w-100 " type="submit">Submit</button>

            </div>
          </div>
        </form>

      </div>


    </div>
  </div>
  @endif

  @if($board == 'connect-business-partner')
  <div>
    contact has been saved!
    you can contact or share business proposal

    @if(Auth::check())
    <a href="">Find</a>
    @endif

  </div>
  @endif

  @if($board == 'thankyou')
  <div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100">
      <a class="d-table-cell handheld-toolbar-item" href="#" wire:click.prevent="savecont({{$visitorid}})">
        <span class="handheld-toolbar-icon">
          <i class="bi bi-chat"></i></span>
        <span class="handheld-toolbar-label">Meet-ups</span>
      </a>
      <a class="d-table-cell handheld-toolbar-item" href="#">
        <span class="handheld-toolbar-icon"><i class="bi bi-compass"></i></span>
        <span class="handheld-toolbar-label">Guide</span></a>

      <a class="d-table-cell handheld-toolbar-item" href="#">
        <span class="handheld-toolbar-icon"><i class="bi bi-people"></i></span>
        <span class="handheld-toolbar-label">Exhibitor</span>
      </a>

      <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
        <span class="handheld-toolbar-label">Menu</span>
      </a>
    </div>
  </div>
  @elseif($this->board == 'invite')
  <div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100">
      <!-- <a class="d-table-cell handheld-toolbar-item" href="#" wire:click.prevent="savecont({{$visitorid}})">
                <span class="handheld-toolbar-icon">
                <i class="bi bi-chat"></i></span>
                <span class="handheld-toolbar-label">Meet-ups</span>
              </a> -->

      <a class="d-table-cell handheld-toolbar-item" href="#">
        <span class="handheld-toolbar-icon"><i class="bi bi-compass"></i></span>
        <span class="handheld-toolbar-label">iNvitee</span></a>

      <a class="d-table-cell handheld-toolbar-item" href="#">
        <span class="handheld-toolbar-icon"><i class="bi bi-people"></i></span>
        <span class="handheld-toolbar-label">Request Meetup</span>
      </a>

      <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
        <span class="handheld-toolbar-label">Menu</span>
      </a>
    </div>
  </div>
  @endif



  @if($board == 'business-thankyou')
  <div class="container" style="margin-top:30px;">
    <div class="row">

      <!-- LEFT MAIN CONTENT -->
      <div class="col-md-8">

        <!-- TITLE -->
        <div class="mb-3">

          <p style="font-size:20px;font-weight:600;margin-bottom:12px;">{{ucwords(trans(Str::limit($franchise->eventname, 24)))}} :

            @if(Carbon\Carbon::parse ($findevent->startdate)->format('M') != Carbon\Carbon::parse ($findevent->enddate)->format('M'))
            {{Carbon\Carbon::parse ($findevent->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($findevent->enddate)->format('D, d M')}}
            @else
            {{Carbon\Carbon::parse ($findevent->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($findevent->enddate)->format('D, d M')}}
            @endif

            | {{ucfirst(trans($findevent->venue))}}, {{ucfirst(trans($findevent->city))}} | {{$findevent->country}}
          </p>
          <p style="font-size:20px;font-weight:600;margin-bottom:12px;">Thank you for your interest in exhibiting with us!</p>

          <p class="mb-1">Your details have been successfully received. Our team will review your submission and share your confirmation and next steps via email shortly.</p>
          <small>If you need any immediate assistance, our Exhibition Help Desk will be happy to support you.</small>

        </div>

        <!-- CHANNEL + ACTION ROW -->
        <div class="row" style="margin-bottom:18px;">

          <!-- CHANNEL INFO -->
          <div class="col-md-5" style="display:flex;align-items:center;">
            <div style="
              width:40px;
              height:40px;
              background:#d32f2f;
              color:#fff;
              font-weight:bold;
              text-align:center;
              line-height:40px;
              border-radius:4px;
              margin-right:10px;">
              T
            </div>

            <div>
              <div style="font-weight:bold;">T-Series ✔</div>
              <div style="font-size:12px;color:#666;">308M subscribers</div>
            </div>

            <button class="btn" style="
              background:#000;
              color:#fff;
              border-radius:20px;
              padding:6px 16px;
              font-weight:600;
              border:none;
              margin-left:15px;">
              Subscribe
            </button>
          </div>

          <!-- ACTION BUTTONS -->
          <div class="col-md-7 text-right">

            <!-- LIKE / DISLIKE CAPSULE -->
            <button class="btn btn-default" style="
              background:#f5f5f5;
              border-radius:20px;
              padding:6px 14px;">
              👍 474K &nbsp;|&nbsp; 👎
            </button>

            <button class="btn btn-default" style="background:#f5f5f5;border-radius:20px;padding:6px 14px;">
              Share
            </button>

            <button class="btn btn-default" style="background:#f5f5f5;border-radius:20px;padding:6px 14px;">
              Ask
            </button>

            <button class="btn btn-default" style="background:#f5f5f5;border-radius:20px;padding:6px 14px;">
              Save
            </button>

            <button class="btn btn-default" style="background:#f5f5f5;border-radius:20px;padding:6px 14px;">
              ⋯
            </button>

          </div>
        </div>

        <!-- META + DESCRIPTION + LIVE CHAT -->
        <div class="row">

          <!-- META + DESCRIPTION -->
          <div class="col-md-6">
            <div style="
              background:#fafafa;
              padding:12px;
              border-radius:12px;">
              <div style="font-size:13px;color:#666;margin-bottom:6px;">
                <strong>32,448,385 views</strong> • 5 days ago • #7 on music Trending chart
              </div>

              <div style="font-size:12px;">
                Presenting The Official Video Song “Aadat” From The Year’s Biggest Musical Phenomenon –
                “51 Glorious Days”, by T-Series.
              </div>
            </div>
          </div>

          <!-- LIVE CHAT REPLAY -->
          <div class="col-md-6">
            <div style="
              background:#fafafa;
              padding:12px;
              border-radius:12px;">
              <div style="font-size:13px;font-weight:bold;margin-bottom:6px;">
                Live chat replay
              </div>

              <div style="display:flex;align-items:center;justify-content:space-between;">
                <i class="bi bi-chat-right-quote"></i>
                <p style="font-size:13px;color:#555;margin:0;max-width:75%;margin-left:15px;">
                  See what others said about this video while it was live.
                </p>

                <button class="btn btn-default btn-sm bg-light" style="margin-left:20px;"">
                  Open panel
                </button>
              </div>
            </div>
          </div>

        </div>

      </div>

      <!-- RIGHT PANEL (EMPTY / FUTURE USE) -->
      <div class=" col-md-4">
                  <div style="
            border:1px solid #e5e5e5;
            border-radius:14px;
            overflow:hidden;
            background:#fff;
          ">

                    <!-- TOP BANNER -->
                    <div style="
            background:#ffd6f2;
            padding:12px;
            text-align:center;">
                      <img src="https://via.placeholder.com/280x60"
                        class="img-responsive center-block"
                        alt="Banner">
                    </div>

                    <!-- HEADER -->
                    <div style="padding:12px 15px 8px 15px;">

                      <div style="display:flex;align-items:center;justify-content:space-between;">
                        <div style="display:flex;align-items:center;">
                          <div style="
                  width:36px;
                  height:36px;
                  background:#9b1c6e;
                  color:#fff;
                  font-weight:bold;
                  text-align:center;
                  line-height:36px;
                  border-radius:50%;
                  margin-right:10px;">
                            E
                          </div>

                          <div>
                            <div style="font-weight:600;font-size:14px;">
                              18M+ websites built with Elementor
                            </div>
                            <div style="font-size:12px;color:#777;">
                              Sponsored · elementor.com
                            </div>
                          </div>
                        </div>

                        <span style="font-size:18px;cursor:pointer;">⋮</span>
                      </div>

                    </div>

                    <!-- FEATURE LIST -->
                    <div style="padding:0 15px 10px 15px;">

                      <div style="
              background:#f5f5f5;
              padding:10px;
              border-radius:10px;
              font-size:13px;
              margin-bottom:8px;">
                        <strong>Elementor Theme Builder</strong><br>
                        Design your site from head to toe. Maximum control.
                      </div>

                      <div style="
              background:#f5f5f5;
              padding:10px;
              border-radius:10px;
              font-size:13px;
              margin-bottom:8px;">
                        <strong>Elementor Pro Pricing</strong><br>
                        Design anything you can imagine. Create stunning websites.
                      </div>

                      <div style="
              background:#f5f5f5;
              padding:10px;
              border-radius:10px;
              font-size:13px;
              margin-bottom:8px;">
                        <strong>Elementor Popup Builder</strong><br>
                        Easy to build. No coding required.
                      </div>

                      <div style="
              background:#f5f5f5;
              padding:10px;
              border-radius:10px;
              font-size:13px;">
                        <strong>Elementor Pro</strong><br>
                        You can do it all yourself. Do more, earn more.
                      </div>

                    </div>

                    <!-- CTA -->
                    <div style="padding:12px 15px;">
                      <button class="btn btn-default btn-block" style="
              border-radius:20px;
              font-weight:600;">
                        Learn more
                      </button>
                    </div>

                  </div>
              </div>

            </div>
          </div>


          <div class="container py-4 py-lg-5 my-4">
            <div class="row justify-content-center">

              <div class="row">
                <div class="col-5 border-end">yes</div>


                <div class="col-7">
                  <div class="col-lg-8 col-md-10">
                    <h2 class="h3 mb-2">Contact Details</h2>
                    <!-- <p class="fs-md">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                  {{--<ol class="list-unstyled fs-md">
                    <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                    <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                    <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                  </ol>--}} -->


                    <form wire:submit.prevent="addTicket">
                      <div class="mb-1">
                        <label class="form-label fs-xs " for="recover-email">Your Name</label>
                        <input class="form-control" type="name" wire:model.lazy="name" required="" placeholder="Enter your name">
                        <label class="fs-xs fw-light text-muted" for="recover-email">Easy to Approach</label>
                        <div class="invalid-feedback">Please provide name.</div>
                      </div>
                      <div class="mb-1">
                        <label class="form-label fs-xs " for="recover-email">Your email</label>
                        <input class="form-control" type="email" wire:model.lazy="email" required="" placeholder="Enter your email address">
                        <label class="fs-xs fw-light text-muted" for="recover-email">To access the ticket(s) on other devices, Login with this E-mail</label>
                        <div class="invalid-feedback">Please provide valid email address.</div>
                      </div>
                      <div class="mb-1">
                        <label class="form-label fs-xs" for="recover-email">* Mobile Number</label>
                        <input class="form-control" type="number" wire:model.lazy="phone" required="" placeholder="Enter your phone">
                        <label class="text-muted fw-light fs-xs" for="recover-email">Your Number will only be used for sending Details.</label>
                        <div class="invalid-feedback">Please provide valid phone.</div>
                      </div>


                      <!-- <button class="btn btn-primary" type="submit">Submit</button> -->

                      <div class="handheld-toolbar bg-secondary">
                        <div class="py-2 px-2">

                          <button class="btn btn-primary btn-shadow d-block w-100 " type="submit">Submit</button>

                        </div>
                      </div>
                    </form>

                  </div>
                </div>

              </div>

            </div>
          </div>
          @endif

</main>