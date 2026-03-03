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

      @php
        $findvisitor = DB::table('leads')->where('id', $visitorid)->first();
       
      @endphp

  @if($board == 'thankyou')
  
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

    @elseif($board == 'linkcreate')
      
    
    <div class="container">
              <input type="text" class="form-control" placeholder="search" wire:model.lazy="searchTerm">
              <div class="row mb-5 pb-2">
                @if(is_null($searchTerm))

                  <div class="container">
                    Find Some Events
                  </div>

                @else
                  @foreach($searchCat as $franchise)
                  <div class="container  ">
                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                      <div class="col  pr-0">
                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div>
                        <div class="small text-muted">{{Carbon\Carbon::parse ($franchise->startdate)->format('M y')}} </div>
                        @else
                        <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($franchise->startdate)->format('d')}}</div>
                        <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($franchise->startdate)->format('M y')}} </div>

                        @endif
                        <div class="round-circle">{{$franchise -> id}}</div>
                      </div>

                      <div class="col-7  p-0">
                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                            {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a></div>
                        <div class="text-muted fs-sm text-start">
                          @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                          @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M')}}
                          @endif
                        </div>
                        <div class="text-muted fs-sm text-start">{{$franchise -> venue}}, {{$franchise -> city}}</div>
                      </div>

                      <div class="col-3  p-0">
                        <a class="btn btn-sm btn-primary" href="#" wire:click.prevent="updatecreatelink({{$franchise->id}})">Link</a>
                      </div>

                    </div>
                  </div>
                  @endforeach
                @endif
              </div>
            </div>
    
            @if($generatedLink)
                <div class="alert alert-success mt-3">
                    <strong>Generated Link:</strong><br>
                    <a href="{{ $generatedLink }}" target="_blank">
                        {{ $generatedLink }}
                    </a>
                </div>
            @endif

    @elseif($board == 'exhibitor')
      <div class="container mt-4">

        <div class="row">

          <div class="col-3 border-end">
              <div class="p-3 text-dark rounded h-100">

                  <h5 class="fw-bold mb-3">Business Connect Benefits</h5>

                  <p class="small">
                      Maximize your exhibition ROI with our structured meeting support.
                  </p>

                  <style>
                    .benefit-list {
                        position: relative;
                        padding-left: 25px;
                        margin-top: 15px;
                    }

                    /* Vertical Line */
                    .benefit-list::before {
                        content: "";
                        position: absolute;
                        left: 8px;
                        top: 5px;
                        bottom: 5px;
                        width: 3px;
                        background-color: #000; /* Pink line */
                        border-radius: 5px;
                    }

                    /* Each Item */
                    .benefit-item {
                        position: relative;
                        margin-bottom: 14px;
                        font-size: 14px;
                        color: #333;
                    }

                    /* Small horizontal connector line */
                    .benefit-item::before {
                        content: "";
                        position: absolute;
                        left: -20px;
                        top: 6px;
                        width: 8px;
                        height: 8px;
                        background-color: #000;
                        border-radius: 50%;
                    }
                  </style>

                  <div class="benefit-list">
                      <div class="benefit-item">Verified Buyer Registrations</div>
                      <div class="benefit-item">Exhibitor Approved Entry Pass</div>
                      <div class="benefit-item">Scheduled Meeting Slots</div>
                      <div class="benefit-item">Brand Promotion Support</div>
                      <div class="benefit-item">Post-Event Lead Data</div>
                  </div>

                  <div class="mt-3 p-2 bg-dark text-light rounded small">
                      📈 Convert Visitors into Business Deals
                  </div>

              </div>
          </div>

          <div class="col-9">
              <div class="card border-0 rounded-0">
                  <div class="card-header bg-dark text-white">
                    
                      <h5 class="mb-0 text-light">Exhibitor Registration</h5>
                   
                  </div>

                  <div class="card-body">

                 
                    <form wire:submit.prevent="exhibitorreferral" enctype="multipart/form-data">

                        <div class="row pr-0">
                            <!-- Stall Details -->
                            <div class="col-md-2 mb-2">
                                <label class="form-label">Stall Number</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="stallno"
                                      placeholder="Enter Stall Number" required>
                                @error('stallno')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-2 mb-2">
                                <label class="form-label">Hall Number</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="hall"
                                      placeholder="Enter Hall Number" required>
                                @error('hall')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-2">
                                <label class="form-label">Year</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="year"
                                      placeholder="Enter Year" required>
                                @error('year')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Company Name -->
                            <div class="col-md-5 mb-2">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="organisation"
                                      placeholder="Enter Company Name" required>
                                @error('organisation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control"
                                      wire:model.lazy="email"
                                      placeholder="Enter Email" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Brand Name</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="brand_name"
                                      placeholder="Enter Brand name" required>
                                @error('brand_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Concern Person -->
                            <div class="col-md-4 mb-2">
                                <label class="form-label">Concern Person</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="name"
                                      placeholder="Enter Concern Person Name" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Designation -->
                            <div class="col-md-4 mb-2">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="designation"
                                      placeholder="Enter Designation" required>
                                @error('designation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="col-md-4 mb-2">
                                <label class="form-label">Mobile Number</label>
                                <input type="tel" class="form-control"
                                      wire:model.lazy="phone"
                                      placeholder="Enter Mobile Number" required>
                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                          <!-- Logo Upload -->
                          <div class="col-md-6 mb-2">
                              <label class="form-label">Company Logo (PDF Only)</label>
                              <input type="file" class="form-control"
                                    wire:model="logo"
                                    accept=".pdf">

                              <small class="text-muted">
                                  Upload company logo in PDF format only. Max size 2MB.
                              </small>

                              @error('logo')
                                  <small class="text-danger d-block">{{ $message }}</small>
                              @enderror

                              <div wire:loading wire:target="logo" class="text-info mt-1">
                                  Uploading...
                              </div>
                          </div>


                          <!-- Poster Upload -->
                          <div class="col-md-6 mb-3">
                              <label class="form-label">Promotional Poster</label>
                              <input type="file" class="form-control"
                                    wire:model="poster"
                                    accept=".jpg,.jpeg,.png,.pdf">

                              <small class="text-muted">
                                  Upload promotional poster (JPG, PNG or PDF – Max 5MB)
                              </small>

                              @error('poster')
                                  <small class="text-danger d-block">{{ $message }}</small>
                              @enderror

                              <div wire:loading wire:target="poster" class="text-info mt-1">
                                  Uploading...
                              </div>
                          </div>

                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Submit
                        </button>

                    </form>
                  </div>
              </div>
          </div>

        </div>
        
      </div>
    @elseif($board == 'details')
      <div class="container mt-4">
        <div class="row">

          <div class="col-3 border-end">
              <div class="p-3 text-dark rounded h-100">

                  <h5 class="fw-bold mb-3">Business Connect Benefits</h5>

                  <p class="small">
                      Maximize your exhibition ROI with our structured meeting support.
                  </p>

                  <style>
                    .benefit-list {
                        position: relative;
                        padding-left: 25px;
                        margin-top: 15px;
                    }

                    /* Vertical Line */
                    .benefit-list::before {
                        content: "";
                        position: absolute;
                        left: 8px;
                        top: 5px;
                        bottom: 5px;
                        width: 3px;
                        background-color: #000; /* Pink line */
                        border-radius: 5px;
                    }

                    /* Each Item */
                    .benefit-item {
                        position: relative;
                        margin-bottom: 14px;
                        font-size: 14px;
                        color: #333;
                    }

                    /* Small horizontal connector line */
                    .benefit-item::before {
                        content: "";
                        position: absolute;
                        left: -20px;
                        top: 6px;
                        width: 8px;
                        height: 8px;
                        background-color: #000;
                        border-radius: 50%;
                    }
                  </style>

                  <div class="benefit-list">
                      <div class="benefit-item">Verified Buyer Registrations</div>
                      <div class="benefit-item">Exhibitor Approved Entry Pass</div>
                      <div class="benefit-item">Scheduled Meeting Slots</div>
                      <div class="benefit-item">Brand Promotion Support</div>
                      <div class="benefit-item">Post-Event Lead Data</div>
                  </div>

                  <div class="mt-3 p-2 bg-dark text-light rounded small">
                      📈 Convert Visitors into Business Deals
                  </div>

              </div>
          </div>

          <div class="col-9">
              <div class="card border-0 rounded-0">
                  <div class="card-header bg-dark text-white">
                      <div class="d-flex justify-content-start align-items-center text-center">

                          <!-- Step 1 -->
                          <div class="{{ $board == 'exhibitor' ? 'fw-bold text-light' : ($board != 'exhibitor' ? 'text-light' : '') }}">
                              Exhibitor Registration
                              @if($board != 'exhibitor')
                                  ✔
                              @endif
                          </div>

                          <div class="mx-2">-</div>

                          <!-- Step 2 -->
                          <div class="{{ $board == 'details' ? 'fw-bold text-light' : ($board == 'thankyou' ? 'text-light' : 'text-muted') }}">
                              Business Details
                              @if($board == 'thankyou')
                                  ✔
                              @endif
                          </div>

                          

                      </div>
                  </div>

                  <div class="card-body">
                    <form wire:submit.prevent="branddetailsformeeting" enctype="multipart/form-data">
                        <div class="row">
                          
                            <!-- Industry -->
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Industry</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="industry"
                                      placeholder="e.g. Hospitality / FMCG / Export" required>

                                @error('industry')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Product Category -->
                            <div class="col-md-6 mb-2">
                                <label class="form-label">Sector</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="sector"
                                      placeholder="e.g. Food Processing Machinery" required>

                                @error('sector')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Type of Deals -->
                            <!-- <div class="col-md-6 mb-3">
                                <label class="form-label">Type of Deals Interested In</label>
                                <select class="form-control" wire:model.defer="deal_type" required>
                                    <option value="">Select Deal Type</option>
                                    <option>Dealer / Distributor</option>
                                    <option>Franchise</option>
                                    <option>Marketing Partner</option>
                                    <option>Export Buyer</option>
                                    <option>Bulk Purchase</option>
                                </select>
                                @error('deal_type')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div> -->

                            <!-- Contact For -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Contact Person For Business Meetings</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="meeting_person"
                                      placeholder="Name of Meeting Representative" required>
                                @error('meeting_person')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                             <div class="col-md-6 mb-3">
                                <label class="form-label">Business Website</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="official_website"
                                      placeholder="official Website" required>

                                @error('official_website')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                             </div>

                              <div class="col-md-12 mb-2">
                                  <!-- <label class="form-label">Short Introduction</label> -->

                                  <!-- Hidden Input For Livewire -->
                                  <input id="short_desc"
                                        type="hidden"
                                        wire:model="short_desc" >

                                  <!-- Trix Editor -->
                                  <trix-editor input="short_desc"
                                              class="form-control" placeholder="short Description"
                                              wire:ignore></trix-editor>

                                  @error('short_desc')
                                      <small class="text-danger">{{ $message }}</small>
                                  @enderror
                              </div>

                             <!-- <div class="col-md-12 mb-2">
                                <label class="form-label">Short Introduction</label>
                                <input type="text" class="form-control"
                                      wire:model.lazy="short_desc"
                                      placeholder="short Description" required>

                                @error('short_desc')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                             </div> -->

                        </div>

                        <div class="row mt-3">
    
                            <div class="d-flex mt-4">
                                
                                <button type="button"
                                        class="btn btn-outline-secondary px-4"
                                        wire:click="goBack">
                                    ← Back
                                </button>

                                <button type="submit"
                                        class="btn btn-danger flex-fill">
                                    Submit Business Details →
                                </button>

                            </div>

                        </div>
                    </form>
                  </div>
              </div>
          </div>

        </div>
      </div>
    @elseif($board == 'thanks')
      <div class="container mt-4">
        <div class="row">

          <div class="col-3 border-end">
              <div class="p-3 text-dark rounded h-100">

                  <h5 class="fw-bold mb-3">Business Connect Benefits</h5>

                  <p class="small">
                      Maximize your exhibition ROI with our structured meeting support.
                  </p>

                  <style>
                    .benefit-list {
                        position: relative;
                        padding-left: 25px;
                        margin-top: 15px;
                    }

                    /* Vertical Line */
                    .benefit-list::before {
                        content: "";
                        position: absolute;
                        left: 8px;
                        top: 5px;
                        bottom: 5px;
                        width: 3px;
                        background-color: #000; /* Pink line */
                        border-radius: 5px;
                    }

                    /* Each Item */
                    .benefit-item {
                        position: relative;
                        margin-bottom: 14px;
                        font-size: 14px;
                        color: #333;
                    }

                    /* Small horizontal connector line */
                    .benefit-item::before {
                        content: "";
                        position: absolute;
                        left: -20px;
                        top: 6px;
                        width: 8px;
                        height: 8px;
                        background-color: #000;
                        border-radius: 50%;
                    }
                  </style>

                  <div class="benefit-list">
                      <div class="benefit-item">Verified Buyer Registrations</div>
                      <div class="benefit-item">Exhibitor Approved Entry Pass</div>
                      <div class="benefit-item">Scheduled Meeting Slots</div>
                      <div class="benefit-item">Brand Promotion Support</div>
                      <div class="benefit-item">Post-Event Lead Data</div>
                  </div>

                  <div class="mt-3 p-2 bg-dark text-light rounded small">
                      📈 Convert Visitors into Business Deals
                  </div>

              </div>
          </div>

          <div class="col-9">
              <div class="card border-0 rounded-0">
                  <div class="card-header bg-dark text-white">

                      <div class="d-flex justify-content-center align-items-center text-center">

                          <!-- Step 1 -->
                          <div class="{{ $board == 'exhibitor' ? 'fw-bold text-warning' : ($board != 'exhibitor' ? 'text-success' : '') }}">
                              Exhibitor Registration
                              @if($board != 'exhibitor')
                                  ✔
                              @endif
                          </div>

                          <div class="mx-2">-</div>

                          <!-- Step 2 -->
                          <div class="{{ $board == 'details' ? 'fw-bold text-warning' : ($board == 'thankyou' ? 'text-success' : 'text-muted') }}">
                              Business Details
                              @if($board == 'thankyou')
                                  ✔
                              @endif
                          </div>

                          <div class="mx-2">-</div>

                          <!-- Step 3 -->
                          <div class="{{ $board == 'thankyou' ? 'fw-bold text-warning' : 'text-muted' }}">
                              Thanks
                          </div>

                      </div>

                  </div>

                  <div class="card-body">
 
                    <div class="alert alert-success mt-4">
                      <strong>Your Business Invite Link:</strong><br>

                        @php
                            $link = url('business/normal/invitee/'.$this->event_id.'/'.session('reference_code'));
                        @endphp

                      <input type="text" class="form-control mt-2"
                            value="{{$link}}"
                            readonly> 
                    </div>

                  
                    <div class="mt-3">
                        <a href="https://wa.me/?text=Join%20our%20business%20meeting%20at%20AAHAR%20Register%20here:%20https://yourdomain.com/meet"
                          target="_blank"
                          class="btn btn-success btn-sm">
                          Share on WhatsApp
                        </a>

                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://exhibition.org.in/business/exhibitor/invitee/1209"
                          target="_blank"
                          class="btn btn-primary btn-sm">
                          Share on LinkedIn
                        </a>
                    </div>
                  
                  </div>
              </div>
          </div>

        </div>
      </div>
    @else
      <div class="container">
        <div class="row">
          <!-- Column 1 -->
          <div class="col-md-5 col-12 my-5 border-end">
            <div class="p-0">

          <div class="invite-card ">

          @php 
             $getexhibitordetails = DB::table('participants')->where('event_id', $this->event_id)->first();
          @endphp

            <!-- Company Logo -->
            <img src="company-logo.png" class="company-logo img-fluid" alt="Company Logo">

            <!-- Invite Text -->
            <div class="invite-text">
                Cordially Invites You To Visit Us At
            </div>

            <!-- Event Logo -->
            <img src="event-logo.png" class="event-logo img-fluid" alt="Event Logo">

            <!-- Company Name -->
            <div class="company-name">
                @php 
                  $geteventdetails = DB::table('events')->where('id', $getexhibitordetails->event_id)->first();
                  $geteventbrandsdetails = DB::table('brands')->where('id', $getexhibitordetails->brand_id)->first();
                @endphp

                {{$geteventbrandsdetails, $getexhibitordetails->brand_id }}ABC Industries Pvt. Ltd.
            </div>

            <!-- Stall Information -->
            <div class="stall-info">
                Stall No: <span class="highlight">{{$getexhibitordetails->stallno}}</span> |
                Booth No: <span class="highlight">{{$getexhibitordetails->hall}}</span> |
                Hall No: <span class="highlight">3</span>
            </div>

            <!-- Event Dates -->
            <div class="event-date">
                15 – 18 October 2026 {{$getexhibitordetails->event_id}}
              
                {{$geteventdetails}}

            </div>

            <!-- Button -->
            <a href="#" class="btn btn-primary btn-visit">
                Get Directions
            </a>

            <div class="mt-3 p-2 bg-dark text-light rounded small">
                📈 Convert Visitors into Business Deals
            </div>
          </div>

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

  @push('scripts')
    <script>
    document.addEventListener("trix-change", function(event) {
        @this.set('short_desc', event.target.value);
    });
    </script>
  @endpush
</main>