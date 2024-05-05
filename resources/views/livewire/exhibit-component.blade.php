@section('page_title', ('Book your Space '.$findevent->eventname))
@section('page_description', ('Great Place To Exhibit '.$findevent->shtdesc))
@section('page_keyword',  'The Exhibition Network, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in' .$findevent->city)

      
      
      <main>
        @if($board == 'business')
          <div class="container py-4 py-lg-5 my-4">
            <div class="row justify-content-center">


              <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-2">Exhibit with us.</h2>
                <p class="fs-md">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}

                
                  <form  wire:submit.prevent="add" >
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      @error('name')
                      <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      @error('email')
                      <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
                      @error('phone')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <button class="btn btn-primary form-control" type="submit">Submit</button>
                  </form>
              
              </div>


            </div>
          </div>

        @elseif($this->board == 'award')
          <div class="container py-4 py-lg-5 my-4">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="h3 mb-2">Gateway to Recognition and Success.</h2>
                <p class="fs-xs">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}

                
                  <form  wire:submit.prevent="otheradd" >
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      @error('name')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      @error('email')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
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
                <p class="fs-xs">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}

                
                  <form  wire:submit.prevent="otheradd" >
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      @error('name')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      @error('email')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
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
                <p class="fs-xs">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}

                
                  <form  wire:submit.prevent="otheradd" >
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      @error('name')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      @error('email')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
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
                <p class="fs-xs">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
               
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}

                
                  <form  wire:submit.prevent="otheradd" >
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      @error('name')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      @error('email')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
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
                <p class="fs-xs">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}

                
                  <form  wire:submit.prevent="otheradd" >
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      @error('name')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      @error('email')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
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
                <p class="fs-xs">Join the ranks of top industry leaders and connect with your target audience. <br> Share your details and let's make it happen </p>
                {{--<ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
                  <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
                  <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
                </ol>--}}

                
                  <form  wire:submit.prevent="otheradd" >
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      @error('name')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      @error('email')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-1">
                      <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
                      @error('phone')
                        <div class="form-text text-primary">{{$message}}</div>
                      @enderror
                    </div>
                    <button class="btn btn-primary form-control" type="submit">Submit</button>
                  </form>
              
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
                    $link = Link::create($name, $from , $to)->description($name)->address($venue, $city, $country);
                    
                  @endphp
                    
                      <a href="{{$link->google()}}"><div class=" round-circle"><i class="bi bi-bookmark"></i></div> </a>
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
                <form  wire:submit.prevent="addregistration" >
                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                    <input class="form-control" type="text"  wire:model.lazy="company" required="" placeholder="Enter your company">
                    @error('company')
                      <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                    <input class="form-control" type="text"  wire:model.lazy="industry" required="" placeholder="Enter your industry">
                    @error('industry')
                      <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>


                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                    <input class="form-control" type="text"  wire:model.lazy="name" required="" placeholder="Enter your name">
                    @error('name')
                      <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                    <input class="form-control" type="text"  wire:model.lazy="designation" required="" placeholder="Enter your designation">
                    @error('designation')
                      <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                    <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email">
                    @error('email')
                      <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your phone</label> -->
                    <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
                    @error('phone')
                      <div class="form-text text-primary">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="mb-1">
                    <!-- <label class="form-label" for="recover-email">Enter your email address</label> -->
                    <input class="form-control" type="text"  wire:model.lazy="city" required="" placeholder="Enter your city">
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

                
                  <form  wire:submit.prevent="addTicket" >
                    <div class="mb-1">
                      <label class="form-label fs-xs " for="recover-email">Your Name</label>
                      <input class="form-control" type="name"  wire:model.lazy="name" required="" placeholder="Enter your name">
                      <label class="fs-xs fw-light text-muted" for="recover-email">Easy to Approach</label>
                      <div class="invalid-feedback">Please provide name.</div>
                    </div>
                    <div class="mb-1">
                      <label class="form-label fs-xs " for="recover-email">Your email</label>
                      <input class="form-control" type="email"  wire:model.lazy="email" required="" placeholder="Enter your email address">
                      <label class="fs-xs fw-light text-muted" for="recover-email">To access the ticket(s) on other devices, Login with this E-mail</label>
                      <div class="invalid-feedback">Please provide valid email address.</div>
                    </div>
                    <div class="mb-1">
                      <label class="form-label fs-xs" for="recover-email">* Mobile Number</label>
                      <input class="form-control" type="number"  wire:model.lazy="phone" required="" placeholder="Enter your phone">
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

        @if($board == 'thankyou')
                @php 
                   $findvisitor = DB::table('leads')->where('id', $visitorid)->first();
                @endphp
          <div class="container py-4 py-lg-5 my-4">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <div class=" mb-4 text-center">Thank you <strong>{{$findvisitor->name}}</strong> for registering for <strong>{{$findevent->eventname}}</strong>. Your registration details have been received.</div>
                <!-- <p class="fs-md">Join the ranks of top industry leaders and connect with your target audience. <br> Thanks for sharing and let's make it happen </p>
                <ol class="list-unstyled fs-md">
                  <li><span class="text-primary me-2"></span>Thank you for your interest in the Exhibition</li>
                  <li><span class="text-primary me-2"></span>Our representative will be contacting you shortly to discuss your participation.</li>
                  <li><span class="text-primary me-2"></span>If you prefer, you can also proactively reach us at 9991856776</li>
                </ol>-->
                
                <div class="row justify-content-center text-center">{{QrCode::size(180)->generate('test is good')}}</div>
                <div class="row justify-content-center text-center">{{QrCode::size(180)->generate(url('/birthday'))}}</div>

              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="savecont({{$visitorid}})">Add Your Contact</a>


          {{route('gift.business')}}
          <div class="container">
            <div class="d-flex  justify-content-between">
              @if(Auth::check())
                <a class="btn btn-primary btn-sm" href="{{route('user.dashboard',['board' => 'dashboard'])}}" >Add your profile</a>
              @else
                <a class="btn btn-primary btn-sm" href="{{route('login')}}" >Add your profile</a>
              @endif

              <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="genratepdf({{$visitorid}})">Download</a>
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
                <a class="d-table-cell handheld-toolbar-item" href="#">
                  <span class="handheld-toolbar-icon">
                  <i class="ci-filter-alt"></i></span>
                  <span class="handheld-toolbar-label">Advertise</span>
                </a>
              
                <a class="d-table-cell handheld-toolbar-item" href="#">
                  <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
                <span class="handheld-toolbar-label">Conference</span></a>
                
                <a class="d-table-cell handheld-toolbar-item" href="#">
                  <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                  <span class="handheld-toolbar-label">Exhibitor</span>
                </a>

                <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
                  <span class="handheld-toolbar-label">Menu</span>
                </a>
              </div>
            </div>

        @endif

       
      </main>