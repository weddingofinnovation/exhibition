<main>
    @if($trackcustomer == "magazine")
        <div class="container">
          <a class="btn btn-primary" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">List Magazine</a>
          <a class="btn btn-primary" href="{{route('admin.dashboard',['board' => 'image-magazine'])}}">Image</a>
        </div>
        
        @if($magazine ->count() == '0')

            <div class="container">
                 <a href="{{route('partner.magazine',['trackcustomer' => 'add-magazine'])}}"><small> <i class="bi bi-plus"></i> Add your Magazine</small></a>  
            </div>
        @else
            @foreach ($magazine as $evento)
                <div class="container my-3">
                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                        <div class="col  pr-0">
                        
                            <div class="h4 fw-light mb-0">18</div> 
                            <div class="small text-muted">Jul</div>
                            
                            <div class="round-circle">1</div> 
                            
                        </div>

                        <div class="col-7  p-0">
                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="">
                            {{ucwords(trans(Str::limit($evento->name, 24)))}}</a></div>
                        <div class="text-muted fs-sm text-start">
                            
                        </div>  
                        <div class="text-muted fs-sm text-start"></div>
                        </div>

                        <div class="col-3  p-0">
                            @if(is_null($evento->image))
                                <a class="card-img-top d-block overflow-hidden" href="{{route('partner.magazine',['trackcustomer' => 'image-magazine'])}}">Add</a>
                                <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Magazinedelete({{$evento->id}})">  <i class="bi bi-x"></i> </a>
                                @else
                            <a class="card-img-top d-block overflow-hidden" href="">
                            <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->name, 24)}}" href="{{route('admin.magazine',['slug' => $evento->slug, 'formm' => 'image' ])}}"></a>
                            <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="Magazinedelete({{$evento->id}})">  <i class="bi bi-x"></i> </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    @endif

    @if($trackcustomer == 'add-magazine')     
        <div class="container">
            <small class="mt-3 mb-4 fw-bold">List your Business Magazine</small>
            <form wire:submit.prevent="added">
                <input type="text" class="form-control mb-1 mb-1"  placeholder = "name"  wire:model.lazy="name" >
                <input type="text" class="form-control mb-1 mb-1"  placeholder = "type"  wire:model.lazy="type" >
                <input type="text" class="form-control mb-1 mb-1"  placeholder = "subscriber"  wire:model.lazy="subscriber" >
                <textarea type="text" class="form-control mb-1 mb-1"  placeholder = "desc" rows="3" wire:model.lazy="desc" > </textarea>
                <input type="text" class="form-control mb-1 mb-1"  placeholder = "frequency"  wire:model.lazy="frequency" >
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'image-magazine')
        <div class="container">
            <small class="mt-3 mb-4 fw-bold">Update Magazine Cover</small>
            <form wire:submit.prevent = "image">
            <input type="file" class="form-control mb-1 mb-1"  placeholder = "image"  wire:model="image" >
            <div class="btn btn-primary form-control mb-1 mb-1">Submit</div>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'print-facts')
        <div class="container">
            <small class="mt-3 mb-4 fw-bold">Add Print Facts</small>
            <form wire:submit.prevent="printedfacts">
                <input type="text" class="form-control mb-1 mb-1"  placeholder = "released"  wire:model.lazy="released" >
                <input type="text" class="form-control mb-1 mb-1"  placeholder = "frequency"  wire:model.lazy="updated" >
                <input type="text" class="form-control mb-1 mb-1"  placeholder = "version" wire:model.lazy="version" >

                

                <div class="col-sm-4 mb-2 pb-2">
                    <label class="form-label" >Category</label>
                    <div class="input-group">
                    <select class="form-control mb-1" placeholder = "category"  wire:model.lazy="category">
                    <option selected >Choose...</option>  
                        @foreach ($tryin as $cat)
                            <option value="{{$cat->id}}" >{{$cat->tag}}</option>
                        @endforeach
                    </select>
                    </div>
                    <span class="text-danger">@error( 'category' ){{ $message}}@enderror</span>
                </div>

                
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'contact')
        <div class="container">
        <small class="mt-3 mb-4 fw-bold">Add Business Contact</small>
            <form wire:submit.prevent="addContact">
                <input type="text" class="form-control mb-1 mb-1" wire:model.lazy = "name" placeholder="name">
                <input type="text" class="form-control mb-1 mb-1" wire:model.lazy = "phone" placeholder="phone">
                <input type="text" class="form-control mb-1 mb-1" wire:model.lazy = "email" placeholder="email">
                <input type="text" class="form-control mb-1 mb-1" wire:model.lazy = "designation" placeholder="designation">
                <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'event')       
        <!--<div class="small">Distribution Audience</div>
                <form wire:submit.prevent ="businessAudience">
                        <input type="text" wire:model.lazy = "email" placeholder="email">
                </form> -->

        <div class="small">Upcoming Exhibition, where you are going to participate? May be/ May be Not?</div>
            <form wire:submit.prevent="chooseEvent">

            </form>
    @endif

    @if($trackcustomer == 'magazine')

        //choose industry
        <form action="">
            <input type="text" class="form-control mb-1" wire:model.lazy = "industry">
            <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
        </form>

        <form wire:submit.prevent="addMagazine">
            <input type="text" class="form-control mb-1" wire:model.lazy = "magazineName" placeholder="Magazine Name">
            <input type="text" class="form-control mb-1" wire:model.lazy = "brandName" placeholder="Brand">
            <input type="text" class="form-control mb-1" wire:model.lazy = "RNI" placeholder="RNI">

            <input type="text" class="form-control mb-1" wire:model.lazy = "industry" placeholder="industry">
            <input type="text" class="form-control mb-1" wire:model.lazy = "edition" placeholder="Current Edition">
            <input type="text" class="form-control mb-1" wire:model.lazy = "issue" placeholder="Current Issue"> 
            
            <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
        </form>

        <form wire:submit.prevent="addContact">
            <input type="text" class="form-control mb-1" wire:model.lazy = "name" placeholder="Owner Name">
            <input type="text" class="form-control mb-1" wire:model.lazy = "phone" placeholder="phone">
            <input type="text" class="form-control mb-1" wire:model.lazy = "email" placeholder="email">
            <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
        </form>


        <div class="small">Upload Magazine Images</div>

        <form wire:submit.prevent="multiImage">

        </form>

        //choose or select 
        <!-- <div class="small">Distribution Audience</div>
            <form wire:submit.prevent="businessAudience">
                    <input type="text" wire:model.lazy = "email" placeholder="email">
            </form> -->

        //choose or select
        <div class="small">Upcoming Exhibition, where you are going to participate? May be/ May be Not?</div>
        <form wire:submit.prevent="chooseEvent">

        </form>

            <div class="small">When going to print?</div>
            <form wire:submit.prevent="date">
                <input type="text" class="form-control mb-1" wire:model.lazy = "date" placeholder="Print Date">
            </form>
    @endif



    <!-- hostess -->
    @if($trackcustomer == 'hostess')
      <div class="container">
         <h1>Fill Basic Details</h1>
        <form wire:submit.prevent="registerHostess">
          <input type="number" class="form-control mb-1" wire:model.lazy = "contact" placeholder="contact">
          <input type="text" class="form-control mb-1" wire:model.lazy = "email" placeholder="email">

          <input type="text" class="form-control mb-1" wire:model.lazy = "name" placeholder="Hostess Name">
          <input type="text" class="form-control mb-1" wire:model.lazy = "aliasname" placeholder="alias Name">
          <input type="number" class="form-control mb-1" wire:model.lazy = "height" placeholder="height">
          <input type="text" class="form-control mb-1" wire:model.lazy = "gender" placeholder="Gender">
          <input type="date" class="form-control mb-1" wire:model.lazy = "dob" placeholder="DateofBirth">
          <input type="text" class="form-control mb-1" wire:model.lazy = "qualification" placeholder="qualification">
          <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
        </form>
      </div>
    @endif 

    @if($trackcustomer == 'expertise')
        <div class="container">
            <form wire:submit.prevent="languageHostess">
                <input type="text" class="form-control mb-1" wire:model.lazy = "language" placeholder="language">

                    <div class="col-sm-4 mb-2 pb-2">
                        <label class="form-label">Skills</label>
                        <div class="input-group">
                        <select class="form-control mb-1" placeholder = "Skill"  wire:model.lazy="skill">
                            <option selected >Choose...</option>  
                            
                            <option value="language">Language</option>
                            <option value="cooking">Cooking</option>
                            <option value="hospitality">Hospitality</option>
                            <option value="cutting">Cutting</option>
                            <option value="sales">Sales</option>
                            <option value="management">Management</option>
                            <option value="inquiry">Inquiry</option>
                            <option value="anchor">anchoring</option>
                            <option value="social_media">Social Media</option>
                            <option value="photography">Photography</option>
                        </select>
                        </div>
                        <span class="text-danger">@error( 'skill' ){{ $message}}@enderror</span>
                    </div>

                <input type="number" class="form-control mb-1" wire:model.lazy = "speak" placeholder="Rate your Speak">
                <input type="number" class="form-control mb-1" wire:model.lazy = "write" placeholder="Rate your Write">
                <input type="number" class="form-control mb-1" wire:model.lazy = "read" placeholder="Rate your Read">
                <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'experience')
        <div class="container">

            <form wire:submit.prevent="experience">
                <input type="text" class="form-control mb-1" wire:model.lazy = "eventname" placeholder="event name">
                <input type="date" class="form-control mb-1" wire:model.lazy = "event_start_date" placeholder="event start date">
                <input type="date" class="form-control mb-1" wire:model.lazy = "event_end_date" placeholder="event end date">
                <input type="text" class="form-control mb-1" wire:model.lazy = "booth_number" placeholder="booth number">

                <input type="text" class="form-control mb-1" wire:model.lazy = "brand_name" placeholder="brand_name">

                <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'charges')
        <div class="container">
            <form wire:submit.prevent="charges">
                <input type="number" class="form-control mb-1" wire:model.lazy = "charge" placeholder="Charge">
                <input type="number" class="form-control mb-1" wire:model.lazy = "expected_charges" placeholder="expected charges">

                <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'avaliablity')
        <div class="container">
            <form wire:submit.prevent="avaliablity">
                <input type="number" class="form-control mb-1" wire:model.lazy = "charge" placeholder="Charge">
                <input type="number" class="form-control mb-1" wire:model.lazy = "expected_charges" placeholder="expected charges">

                <button class="btn btn-primary form-control mb-1" type="submit">Submit</button>
            </form>
        </div>
    @endif

    @if($trackcustomer == 'lead')
      <div class="container py-5 mt-n2 mt-sm-0">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">


          <!-- Sidebar navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
          <aside class="col-lg-3">
            <div class="offcanvas-lg offcanvas-start pe-lg-0 pe-xl-4" id="accountSidebar">

              <!-- Header -->
              <div class="offcanvas-header d-lg-block py-3 p-lg-0">
                <div class="d-flex align-items-center">
                  <div class="h5 d-flex justify-content-center align-items-center flex-shrink-0 text-primary bg-primary-subtle lh-1 rounded-circle mb-0" style="width: 3rem; height: 3rem">S</div>
                  <div class="min-w-0 ps-3">
                    <h5 class="h6 mb-1">Susan Gardner</h5>
                    <div class="nav flex-nowrap text-nowrap min-w-0">
                      <a class="nav-link animate-underline text-body p-0" href="#bonusesModal" data-bs-toggle="modal">
                        <svg class="text-warning flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"></path><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"></path><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"></path></svg>
                        <span class="animate-target me-1">100 bonuses</span>
                        <span class="text-body fw-normal text-truncate">available</span>
                      </a>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar" aria-label="Close"></button>
              </div>

              <!-- Body (Navigation) -->
              <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
                <nav class="list-group list-group-borderless">
                  <a class="list-group-item list-group-item-action d-flex align-items-center pe-none active" href="account-orders.html">
                    <i class="ci-shopping-bag fs-base opacity-75 me-2"></i>
                    Orders
                    <span class="badge bg-primary rounded-pill ms-auto">1</span>
                  </a>
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-wishlist.html">
                    <i class="ci-heart fs-base opacity-75 me-2"></i>
                    Wishlist
                  </a>
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-payment.html">
                    <i class="ci-credit-card fs-base opacity-75 me-2"></i>
                    Payment methods
                  </a>
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-reviews.html">
                    <i class="ci-star fs-base opacity-75 me-2"></i>
                    My reviews
                  </a>
                </nav>
                <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
                <nav class="list-group list-group-borderless">
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-info.html">
                    <i class="ci-user fs-base opacity-75 me-2"></i>
                    Personal info
                  </a>
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-addresses.html">
                    <i class="ci-map-pin fs-base opacity-75 me-2"></i>
                    Addresses
                  </a>
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-notifications.html">
                    <i class="ci-bell fs-base opacity-75 mt-1 me-2"></i>
                    Notifications
                  </a>
                </nav>
                <h6 class="pt-4 ps-2 ms-1">Customer service</h6>
                <nav class="list-group list-group-borderless">
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="help-topics-v1.html">
                    <i class="ci-help-circle fs-base opacity-75 me-2"></i>
                    Help center
                  </a>
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="terms-and-conditions.html">
                    <i class="ci-info fs-base opacity-75 me-2"></i>
                    Terms and conditions
                  </a>
                </nav>
                <nav class="list-group list-group-borderless pt-3">
                  <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-signin.html">
                    <i class="ci-log-out fs-base opacity-75 me-2"></i>
                    Log out
                  </a>
                </nav>
              </div>
            </div>
          </aside>


          <!-- Orders content -->
          <div class="col-lg-9">
            <div class="ps-lg-3 ps-xl-0">

              <!-- Page title + Sorting selects -->
              <div class="row align-items-center pb-3 pb-md-4 mb-md-1 mb-lg-2">
                <div class="col-md-4 col-xl-6 mb-3 mb-md-0">
                  <h1 class="h2 me-3 mb-0">Orders</h1>
                </div>
                <div class="col-md-8 col-xl-6">
                  <div class="row row-cols-1 row-cols-sm-2 g-3 g-xxl-4">
                    <div class="col">
                      <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="form-select"><select class="form-select choices__input" data-select="{
                        &quot;placeholderValue&quot;: &quot;Select status&quot;,
                        &quot;choices&quot;: [
                          {
                            &quot;value&quot;: &quot;&quot;,
                            &quot;label&quot;: &quot;Select status&quot;,
                            &quot;placeholder&quot;: true
                          },
                          {
                            &quot;value&quot;: &quot;inprogress&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><span class=\&quot;bg-info rounded-circle p-1 me-2\&quot;></span>In progress</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;delivered&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><span class=\&quot;bg-success rounded-circle p-1 me-2\&quot;></span>Delivered</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;canceled&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><span class=\&quot;bg-danger rounded-circle p-1 me-2\&quot;></span>Canceled</div>&quot;
                          },
                          {
                            &quot;value&quot;: &quot;delayed&quot;,
                            &quot;label&quot;: &quot;<div class=\&quot;d-flex align-items-center\&quot;><span class=\&quot;bg-warning rounded-circle p-1 me-2\&quot;></span>Delayed</div>&quot;
                          }
                        ]
                      }" data-select-template="true" aria-label="Status sorting" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Select status</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable choices__placeholder" data-item="" data-id="1" data-value="" aria-selected="true">
                    Select status
                  <button type="button" class="choices__button" aria-label="Remove item" data-button=""></button>
                </div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div class="choices__item choices__item--choice choices__item--selectable choices__placeholder is-highlighted" data-select-text="" data-choice="" data-choice-selectable="" data-id="1" data-value="" role="option" aria-selected="true">
                  <div>
                    Select status
                    
                  </div>
                </div><div class="choices__item choices__item--choice choices__item--selectable " data-select-text="" data-choice="" data-choice-selectable="" data-id="2" data-value="inprogress" role="option">
                  <div>
                    <div class="d-flex align-items-center"><span class="bg-info rounded-circle p-1 me-2"></span>In progress</div>
                    
                  </div>
                </div><div class="choices__item choices__item--choice choices__item--selectable " data-select-text="" data-choice="" data-choice-selectable="" data-id="3" data-value="delivered" role="option">
                  <div>
                    <div class="d-flex align-items-center"><span class="bg-success rounded-circle p-1 me-2"></span>Delivered</div>
                    
                  </div>
                </div><div class="choices__item choices__item--choice choices__item--selectable " data-select-text="" data-choice="" data-choice-selectable="" data-id="4" data-value="canceled" role="option">
                  <div>
                    <div class="d-flex align-items-center"><span class="bg-danger rounded-circle p-1 me-2"></span>Canceled</div>
                    
                  </div>
                </div><div class="choices__item choices__item--choice choices__item--selectable " data-select-text="" data-choice="" data-choice-selectable="" data-id="5" data-value="delayed" role="option">
                  <div>
                    <div class="d-flex align-items-center"><span class="bg-warning rounded-circle p-1 me-2"></span>Delayed</div>
                    
                  </div>
                </div></div></div></div>
                    </div>
                    <div class="col">
                      <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="form-select"><select class="form-select choices__input" data-select="{&quot;removeItemButton&quot;: false}" aria-label="Timeframe sorting" hidden="" tabindex="-1" data-choice="active"><option value="all-time" data-custom-properties="[object Object]">For all time</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="all-time" data-custom-properties="[object Object]" aria-selected="true">For all time</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--tk56-item-choice-1" class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="all-time" data-select-text="" data-choice-selectable="" aria-selected="true">For all time</div><div id="choices--tk56-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="last-year" data-select-text="" data-choice-selectable="">For last year</div><div id="choices--tk56-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="last-3-months" data-select-text="" data-choice-selectable="">For last 3 months</div><div id="choices--tk56-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="last-30-days" data-select-text="" data-choice-selectable="">For last 30 days</div><div id="choices--tk56-item-choice-5" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="5" data-value="last-week" data-select-text="" data-choice-selectable="">For last week</div></div></div></div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Sortable orders table -->
              <div data-filter-list="{&quot;listClass&quot;: &quot;orders-list&quot;, &quot;sortClass&quot;: &quot;orders-sort&quot;, &quot;valueNames&quot;: [&quot;date&quot;, &quot;total&quot;]}">
                <table class="table align-middle fs-sm text-nowrap">
                  <thead>
                    <tr>
                      <th scope="col" class="py-3 ps-0">
                        <span class="text-body fw-normal">Order <span class="d-none d-md-inline">#</span></span>
                      </th>
                      <th scope="col" class="py-3 d-none d-md-table-cell">
                        <button type="button" class="btn orders-sort fw-normal text-body p-0" data-sort="date">Order date</button>
                      </th>
                      <th scope="col" class="py-3 d-none d-md-table-cell">
                        <span class="text-body fw-normal">Status</span>
                      </th>
                      <th scope="col" class="py-3 d-none d-md-table-cell">
                        <button type="button" class="btn orders-sort fw-normal text-body p-0" data-sort="total">Total</button>
                      </th>
                      <th scope="col" class="py-3">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody class="text-body-emphasis orders-list"><tr>
                      <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                        <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                          <span class="animate-target">78A6431D409</span>
                        </a>
                        <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                          <li>Feb 6, 2025</li>
                          <li class="d-flex align-items-center">
                            <span class="bg-info rounded-circle p-1 me-2"></span>
                            In progress
                          </li>
                          <li class="fw-medium text-body-emphasis">$2,105.90</li>
                        </ul>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        Feb 6, 2025
                        <span class="date d-none">25-02-06</span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        <span class="d-flex align-items-center">
                          <span class="bg-info rounded-circle p-1 me-2"></span>
                          In progress
                        </span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        $2,105.90
                        <span class="total d-none">210590</span>
                      </td>
                      <td class="py-3 pe-0">
                        <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                          <span><img src="assets/img/shop/electronics/thumbs/20.png" width="64" alt="Thumbnail"></span>
                          <span><img src="assets/img/shop/electronics/thumbs/16.png" width="64" alt="Thumbnail"></span>
                          <span><img src="assets/img/shop/electronics/thumbs/15.png" width="64" alt="Thumbnail"></span>
                          <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                            <i class="ci-chevron-right fs-lg"></i>
                          </a>
                        </span>
                      </td>
                    </tr><tr>
                      <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                        <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                          <span class="animate-target">47H76G09F33</span>
                        </a>
                        <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                          <li>Dec 12, 2024</li>
                          <li class="d-flex align-items-center">
                            <span class="bg-success rounded-circle p-1 me-2"></span>
                            Delivered
                          </li>
                          <li class="fw-medium text-body-emphasis">$360.75</li>
                        </ul>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        Dec 12, 2024
                        <span class="date d-none">24-12-12</span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        <span class="d-flex align-items-center">
                          <span class="bg-success rounded-circle p-1 me-2"></span>
                          Delivered
                        </span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        $360.75
                        <span class="total d-none">36075</span>
                      </td>
                      <td class="py-3 pe-0">
                        <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                          <span><img src="assets/img/shop/electronics/thumbs/14.png" width="64" alt="Thumbnail"></span>
                          <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                            <i class="ci-chevron-right fs-lg"></i>
                          </a>
                        </span>
                      </td>
                    </tr><tr>
                      <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                        <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                          <span class="animate-target">502TR872W2</span>
                        </a>
                        <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                          <li>Nov 7, 2024</li>
                          <li class="d-flex align-items-center">
                            <span class="bg-success rounded-circle p-1 me-2"></span>
                            Delivered
                          </li>
                          <li class="fw-medium text-body-emphasis">$4,268.00</li>
                        </ul>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        Nov 7, 2024
                        <span class="date d-none">24-11-07</span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        <span class="d-flex align-items-center">
                          <span class="bg-success rounded-circle p-1 me-2"></span>
                          Delivered
                        </span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        $4,268.00
                        <span class="total d-none">426800</span>
                      </td>
                      <td class="py-3 pe-0">
                        <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                          <span><img src="assets/img/shop/electronics/thumbs/12.png" width="64" alt="Thumbnail"></span>
                          <span><img src="assets/img/shop/electronics/thumbs/13.png" width="64" alt="Thumbnail"></span>
                          <span><img src="assets/img/shop/electronics/thumbs/18.png" width="64" alt="Thumbnail"></span>
                          <span class="fw-medium me-1">+3</span>
                          <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                            <i class="ci-chevron-right fs-lg"></i>
                          </a>
                        </span>
                      </td>
                    </tr><tr>
                      <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                        <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                          <span class="animate-target">34VB5540K83</span>
                        </a>
                        <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                          <li>Sep 15, 2024</li>
                          <li class="d-flex align-items-center">
                            <span class="bg-danger rounded-circle p-1 me-2"></span>
                            Canceled
                          </li>
                          <li class="fw-medium text-body-emphasis">$987.50</li>
                        </ul>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        Sep 15, 2024
                        <span class="date d-none">24-09-15</span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        <span class="d-flex align-items-center">
                          <span class="bg-danger rounded-circle p-1 me-2"></span>
                          Canceled
                        </span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        $987.50
                        <span class="total d-none">98750</span>
                      </td>
                      <td class="py-3 pe-0">
                        <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                          <span><img src="assets/img/shop/electronics/thumbs/21.png" width="64" alt="Thumbnail"></span>
                          <span><img src="assets/img/shop/electronics/thumbs/11.png" width="64" alt="Thumbnail"></span>
                          <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                            <i class="ci-chevron-right fs-lg"></i>
                          </a>
                        </span>
                      </td>
                    </tr><tr>
                      <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                        <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                          <span class="animate-target">112P45A90V2</span>
                        </a>
                        <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                          <li>May 12, 2024</li>
                          <li class="d-flex align-items-center">
                            <span class="bg-success rounded-circle p-1 me-2"></span>
                            Delivered
                          </li>
                          <li class="fw-medium text-body-emphasis">$53.00</li>
                        </ul>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        May 12, 2024
                        <span class="date d-none">24-05-12</span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        <span class="d-flex align-items-center">
                          <span class="bg-success rounded-circle p-1 me-2"></span>
                          Delivered
                        </span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        $53.00
                        <span class="total d-none">5300</span>
                      </td>
                      <td class="py-3 pe-0">
                        <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                          <span><img src="assets/img/shop/electronics/thumbs/17.png" width="64" alt="Thumbnail"></span>
                          <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                            <i class="ci-chevron-right fs-lg"></i>
                          </a>
                        </span>
                      </td>
                    </tr><tr>
                      <td class="fw-medium pt-2 pb-3 py-md-2 ps-0">
                        <a class="d-inline-block animate-underline text-body-emphasis text-decoration-none py-2" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                          <span class="animate-target">28BA67U0981</span>
                        </a>
                        <ul class="list-unstyled fw-normal text-body m-0 d-md-none">
                          <li>Apr 20, 2024</li>
                          <li class="d-flex align-items-center">
                            <span class="bg-danger rounded-circle p-1 me-2"></span>
                            Canceled
                          </li>
                          <li class="fw-medium text-body-emphasis">$1,029.50</li>
                        </ul>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        Apr 20, 2024
                        <span class="date d-none">24-04-20</span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        <span class="d-flex align-items-center">
                          <span class="bg-danger rounded-circle p-1 me-2"></span>
                          Canceled
                        </span>
                      </td>
                      <td class="fw-medium py-3 d-none d-md-table-cell">
                        $1,029.50
                        <span class="total d-none">102950</span>
                      </td>
                      <td class="py-3 pe-0">
                        <span class="d-flex align-items-center justify-content-end position-relative gap-1 gap-sm-2 ms-n2 ms-sm-0">
                          <span><img src="assets/img/shop/electronics/thumbs/19.png" width="64" alt="Thumbnail"></span>
                          <span><img src="assets/img/shop/electronics/thumbs/22.png" width="64" alt="Thumbnail"></span>
                          <a class="btn btn-icon btn-ghost btn-secondary stretched-link border-0" href="#orderDetails" data-bs-toggle="offcanvas" aria-controls="orderDetails" aria-label="Show order details">
                            <i class="ci-chevron-right fs-lg"></i>
                          </a>
                        </span>
                      </td>
                    </tr></tbody>
                </table>
              </div>


              <!-- Pagination -->
              <nav class="pt-3 pb-2 pb-sm-0 mt-2 mt-md-3" aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item active" aria-current="page">
                    <span class="page-link">
                      1
                      <span class="visually-hidden">(current)</span>
                    </span>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">4</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    @endif
        
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
      

          <!-- <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}" href="{{route('partner.magazine',['trackcustomer' => 'print-facts'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/blog' == request()->path() ? 'active' : '' }}">Facts</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'contact'])}}">
            <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
            <span class="handheld-toolbar-label">Contact</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}" href="{{route('partner.magazine',['trackcustomer' => 'inquiry'])}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'admin/dashboard/event' == request()->path() ? 'active' : '' }}">Inquiry</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item {{'user/add-your-business' == request()->path() ? 'active' : '' }}" href="{{route('user.claim')}}">
            <span class="handheld-toolbar-icon">
            <i class="ci-filter-alt"></i></span>
            <span class="handheld-toolbar-label {{'user/add-your-business' == request()->path() ? 'active' : '' }}">Event</span>
          </a>
          
          <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'business'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Plan</span>
          </a> -->

        <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'hostess'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Hostess</span>
        </a>

        <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'expertise'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Expertise</span>
        </a>
      
        <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'experience'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Experience</span>
        </a>

        <a class="d-table-cell handheld-toolbar-item" href="{{route('partner.magazine',['trackcustomer' => 'availablity'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-add"></i></span>
            <span class="handheld-toolbar-label">Availablity</span>
        </a>

        
        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="bi bi-menu"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
        </a>

      </div>
    </div>
</main>