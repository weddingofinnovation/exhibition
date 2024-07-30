@section('page_title','dashboard')

@section('content_description','Find your Industry Exhibition ')
@section('content_keyword', 'Sell', 'Business', 'expansion')

    <main>

    <style>
    
      * { box-sizing: border-box; }

        body {
          font-family: sans-serif;
        }

        /* ---- button ---- */

        .button {
          display: inline-block;
          padding: 0.5em 1.0em;
          background: #EEE;
          border: none;
          border-radius: 7px;
          background-image: linear-gradient( to bottom, hsla(0, 0%, 0%, 0), hsla(0, 0%, 0%, 0.2) );
          color: #222;
          font-family: sans-serif;
          font-size: 16px;
          text-shadow: 0 1px white;
          cursor: pointer;
        }

        .button:hover {
          background-color: #8CF;
          text-shadow: 0 1px hsla(0, 0%, 100%, 0.5);
          color: #222;
        }

        .button:active,
        .button.is-checked {
          background-color: #28F;
        }

        .button.is-checked {
          color: white;
          text-shadow: 0 -1px hsla(0, 0%, 0%, 0.8);
        }

        .button:active {
          box-shadow: inset 0 1px 10px hsla(0, 0%, 0%, 0.8);
        }

        /* ---- button-group ---- */

        .button-group {
          margin-bottom: 20px;
        }

        .button-group:after {
          content: '';
          display: block;
          clear: both;
        }

        .button-group .button {
          float: left;
          border-radius: 0;
          margin-left: 0;
          margin-right: 1px;
        }

        .button-group .button:first-child { border-radius: 0.5em 0 0 0.5em; }
        .button-group .button:last-child { border-radius: 0 0.5em 0.5em 0; }

        /* ---- isotope ---- */

        .grid {
          border: 1px solid #333;
        }

        /* clear fix */
        .grid:after {
          content: '';
          display: block;
          clear: both;
        }

        /* ---- .element-item ---- */

        .element-item {
          position: relative;
          float: left;
          width: 100px;
          height: 100px;
          margin: 5px;
          padding: 10px;
          background: #888;
          color: #262524;
        }

        .element-item > * {
          margin: 0;
          padding: 0;
        }

        .element-item .name {
          position: absolute;

          left: 10px;
          top: 60px;
          text-transform: none;
          letter-spacing: 0;
          font-size: 12px;
          font-weight: normal;
        }

        .element-item .symbol {
          position: absolute;
          left: 10px;
          top: 0px;
          font-size: 42px;
          font-weight: bold;
          color: white;
        }

        .element-item .number {
          position: absolute;
          right: 8px;
          top: 5px;
        }

        .element-item .weight {
          position: absolute;
          left: 10px;
          top: 76px;
          font-size: 12px;
        }

        .element-item.alkali          { background: #F00; background: hsl(   0, 100%, 50%); }
        .element-item.alkaline-earth  { background: #F80; background: hsl(  36, 100%, 50%); }
        .element-item.lanthanoid      { background: #FF0; background: hsl(  72, 100%, 50%); }
        .element-item.actinoid        { background: #0F0; background: hsl( 108, 100%, 50%); }
        .element-item.transition      { background: #0F8; background: hsl( 144, 100%, 50%); }
        .element-item.post-transition { background: #0FF; background: hsl( 180, 100%, 50%); }
        .element-item.metalloid       { background: #08F; background: hsl( 216, 100%, 50%); }
        .element-item.diatomic        { background: #00F; background: hsl( 252, 100%, 50%); }
        .element-item.halogen         { background: #F0F; background: hsl( 288, 100%, 50%); }
        .element-item.noble-gas       { background: #F08; background: hsl( 324, 100%, 50%); }

    </style>

    @if($board == 'dashboard')   

    <a href="{{route('user.badge',['board' => 'badge-application-form'])}}" class="btn">Badge</a>
         <!--  Start Claim event -->
          <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
            <div class="container">
              <p class="text-center">Choose your Event</p>
              <small class="text-center">Find and Active your Event</small>
                  <div class="container mt-5">
                              <!-- <input type="text" class="form-control" placeholder="search" > -->
                              <form action="" wire:submit.prevent="searchbackup">
                                  <div class="input-group flex-nowrap">
                                  <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                                  <input type="text" class="form-control rounded-start"  name="search" placeholder="Find your Right Place" wire:model.lazy="searchTerm">
                                  <button class="btn btn-primary" type="submit" name=""> Search</button>
                                  </div>
                              </form>

                              <div class="row mb-5 pb-2">
                                @if(is_null($searchTerm))

                                  <div class="container  small">
                                    Expand your Business Reach with us.
                                  </div>  

                                @else
                                  @foreach ($searchCat as $franchise) 
                                    <div class="container mt-2">
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

                                        <div class="col-4  p-0">
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

                                        <div class="col-3  p-0">
                                            <a href="#" wire:click.prevent="declaimer({{$franchise->id}})" class="btn btn-sm btn-primary">Choose</a>
                                        </div>

                                      </div>
                                    </div>
                                  @endforeach
                                @endif
                              </div>
                          </div>
            </div>
          </section>
        <!-- Stop claim Event -->

        <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
          <div class="container">
            <p class="text-center">Share your Contact Details</p>
            <div class="row gx-4 gy-3">
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-fn">First Name</label>
                                <input class="form-control" type="text" id="dashboard-fn" value="John">
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-ln">Last Name</label>
                                <input class="form-control" type="text" id="dashboard-ln" value="Doe">
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-email">Email address</label>
                                <input class="form-control" type="text" id="dashboard-email" value="contact@example.com" disabled="">
                              </div>
                              
                             
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-country">Designation</label>
                                <select class="form-select" id="dashboard-country">
                                  <option value="">Select country</option>
                                  <option value="Argentina">FOunder</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="France">France</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Madagascar" selected="">Madagascar</option>
                                  <option value="Spain">Spain</option>
                                  <option value="UK">United Kingdom</option>
                                  <option value="USA">USA</option>
                                </select>
                              </div>
                              
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-city">Phone</label>
                                <input class="form-control" type="text" id="dashboard-city" value="Antananarivo">
                              </div>

                              <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="freelancer" checked="">
                                    <label class="form-check-label" for="freelancer">I'm available for freelance</label>
                                  </div>
                                  <button class="btn btn-primary mt-3 mt-sm-0" type="button">Save changes</button>
                                </div>
                              </div>
                            </div>
          </div>
        </section>

        <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
          <div class="container">
            <p class="text-center">Your Contract Form Details</p>
            <div class="small text-center"> Unique code :</div>
            <div class="small text-center"> Event Code :</div>
            <div class="small text-center">Contract Form Link :</div>
          </div>
        </section>
    
        <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
          <div class="container mb-5 pb-3">
                <div class="bg-light shadow-lg rounded-3 overflow-hidden">
                  <div class="row">
                    <!-- Sidebar-->
                    <aside class="col-lg-4 pe-xl-5">
                      <!-- Account menu toggler (hidden on screens larger 992px)-->
                      <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
                      <!-- Actual menu-->
                      <div class="h-100 border-end mb-2">
                        <div class="d-lg-block collapse" id="account-menu">
                          <div class="bg-secondary p-4">
                            <h3 class="fs-sm mb-0 text-muted">Directory Details</h3>
                          </div>

                          <ul class="list-unstyled mb-0">
                            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="dashboard-settings.html">
                              <i class="ci-settings opacity-60 me-2"></i>Basic Info</a></li>
                            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-purchases.html">
                              <i class="ci-basket opacity-60 me-2"></i>Contact Details</a></li>
                            <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html">
                              <i class="ci-heart opacity-60 me-2"></i>Category<span class="fs-sm text-muted ms-auto">4</span></a></li>
                          </ul>

                          <div class="bg-secondary p-4">
                            <h3 class="fs-sm mb-0 text-muted">Contrat Form</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-sales.html">
                              <i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-sm text-muted ms-auto">$1,375.00</span></a></li>
                            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-products.html">
                              <i class="ci-package opacity-60 me-2"></i>Products<span class="fs-sm text-muted ms-auto">5</span></a></li>
                            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-add-new-product.html">
                              <i class="ci-cloud-upload opacity-60 me-2"></i>Add New Event</a></li>
                            <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-payouts.html">
                              <i class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a></li>
                            <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html">
                              <i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                          </ul>
                          <hr>
                        </div>
                      </div>
                    </aside>
                    <!-- Content-->
                    <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
                      <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                        <h2 class="h3 py-2 text-center text-sm-start">Settings</h2>
                        <!-- Tabs-->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                          <li class="nav-item" role="presentation"><a class="nav-link px-0 active" href="#profile" data-bs-toggle="tab" role="tab" aria-selected="true">
                              <div class="d-none d-lg-block"><i class="ci-user opacity-60 me-2"></i>Profile</div>
                              <div class="d-lg-none text-center"><i class="ci-user opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Profile</span></div></a></li>
                          <li class="nav-item" role="presentation"><a class="nav-link px-0" href="#notifications" data-bs-toggle="tab" role="tab" aria-selected="false" tabindex="-1">
                              <div class="d-none d-lg-block"><i class="ci-bell opacity-60 me-2"></i>Notifications</div>
                              <div class="d-lg-none text-center"><i class="ci-bell opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Notifications</span></div></a></li>
                          <li class="nav-item" role="presentation"><a class="nav-link px-0" href="#payment" data-bs-toggle="tab" role="tab" aria-selected="false" tabindex="-1">
                              <div class="d-none d-lg-block"><i class="ci-card opacity-60 me-2"></i>Payment methods</div>
                              <div class="d-lg-none text-center"><i class="ci-card opacity-60 d-block fs-xl mb-2"></i><span class="fs-ms">Payment</span></div></a></li>
                        </ul>
                        <!-- Tab content-->
                        <div class="tab-content">
                          <!-- Profile-->
                          <div class="tab-pane fade show active" id="profile" role="tabpanel">
                            <div class="bg-secondary rounded-3 p-4 mb-4">
                              <div class="d-flex align-items-center"><img class="rounded" src="img/marketplace/account/avatar.png" width="90" alt="Createx Studio">
                                <div class="ps-3">
                                  <button class="btn btn-light btn-shadow btn-sm mb-2" type="button"><i class="ci-loading me-2"></i>Change <span class="d-none d-sm-inline">avatar</span></button>
                                  <div class="p mb-0 fs-ms text-muted">Upload JPG, GIF or PNG image. 300 x 300 required.</div>
                                </div>
                              </div>
                            </div>
                            <div class="row gx-4 gy-3">
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-fn">First Name</label>
                                <input class="form-control" type="text" id="dashboard-fn" value="John">
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-ln">Last Name</label>
                                <input class="form-control" type="text" id="dashboard-ln" value="Doe">
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-email">Email address</label>
                                <input class="form-control" type="text" id="dashboard-email" value="contact@example.com" disabled="">
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-profile-name">Profile Name</label>
                                <input class="form-control" type="text" id="dashboard-profile-name" value="Createx Studio">
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-country">Country</label>
                                <select class="form-select" id="dashboard-country">
                                  <option value="">Select country</option>
                                  <option value="Argentina">Argentina</option>
                                  <option value="Belgium">Belgium</option>
                                  <option value="France">France</option>
                                  <option value="Germany">Germany</option>
                                  <option value="Madagascar" selected="">Madagascar</option>
                                  <option value="Spain">Spain</option>
                                  <option value="UK">United Kingdom</option>
                                  <option value="USA">USA</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-city">City</label>
                                <input class="form-control" type="text" id="dashboard-city" value="Antananarivo">
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-address">Address Line</label>
                                <input class="form-control" type="text" id="dashboard-address" value="Some Cool Street, 22/1">
                              </div>
                              <div class="col-sm-6">
                                <label class="form-label" for="dashboard-zip">ZIP Code</label>
                                <input class="form-control" type="text" id="dashboard-zip">
                              </div>
                              <div class="col-12">
                                <hr class="mt-2 mb-4">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="freelancer" checked="">
                                    <label class="form-check-label" for="freelancer">I'm available for freelance</label>
                                  </div>
                                  <button class="btn btn-primary mt-3 mt-sm-0" type="button">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Notifications-->
                          <div class="tab-pane fade" id="notifications" role="tabpanel">
                            <div class="bg-secondary rounded-3 p-4">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="nf-disable-all" data-master-checkbox-for="#notifocation-settings">
                                <label class="form-check-label fw-medium" for="nf-disable-all">Enable/disable all notifications</label>
                              </div>
                            </div>
                            <div id="notifocation-settings">
                              <div class="border-bottom p-4">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="nf-product-sold" checked="">
                                  <label class="form-check-label" for="nf-product-sold">Product sold notifications</label>
                                </div>
                                <div class="form-text">Send an email when someone purchased one of my products</div>
                              </div>
                              <div class="border-bottom p-4">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="nf-product-updated" checked="">
                                  <label class="form-check-label" for="nf-product-updated">Product update notifications</label>
                                </div>
                                <div class="form-text">Send an email when a product I've purchased is updated</div>
                              </div>
                              <div class="border-bottom p-4">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="nf-product-comment" checked="">
                                  <label class="form-check-label" for="nf-product-comment">Product comment notifications</label>
                                </div>
                                <div class="form-text">Send an email when someone comments on one of my products</div>
                              </div>
                              <div class="border-bottom p-4">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="nf-product-review" checked="">
                                  <label class="form-check-label" for="nf-product-review">Product review notification</label>
                                </div>
                                <div class="form-text">Send an email when someone leaves a review with their rating</div>
                              </div>
                              <div class="border-bottom p-4">
                                <div class="form-check form-switch">
                                  <input class="form-check-input" type="checkbox" id="nf-daily-summary">
                                  <label class="form-check-label" for="nf-daily-summary">Daily summary emails</label>
                                </div>
                                <div class="form-text">Send me a daily summary of all products sold, commented or reviewed</div>
                              </div>
                            </div>
                            <div class="text-sm-end mt-4">
                              <button class="btn btn-primary" type="button">Save changes</button>
                            </div>
                          </div>
                          <!-- Payment methods-->
                          <div class="tab-pane fade" id="payment" role="tabpanel">
                            <div class="bg-secondary rounded-3 p-4 mb-4">
                              <p class="fs-sm text-muted mb-0">Primary payment method is used by default</p>
                            </div>
                            <div class="table-responsive fs-md mb-4">
                              <table class="table table-hover mb-0">
                                <thead>
                                  <tr>
                                    <th>Your credit / debit cards</th>
                                    <th>Name on card</th>
                                    <th>Expires on</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="py-3 align-middle">
                                      <div class="d-flex align-items-center"><img src="img/card-visa.png" width="39" alt="Visa">
                                        <div class="ps-2"><span class="fw-medium text-heading me-1">Visa</span>ending in 4999<span class="align-middle badge badge-info ms-2">Primary</span></div>
                                      </div>
                                    </td>
                                    <td class="py-3 align-middle">John doe</td>
                                    <td class="py-3 align-middle">08 / 2019</td>
                                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" aria-label="Remove" data-bs-original-title="Remove">
                                        <div class="ci-trash"></div></a></td>
                                  </tr>
                                  <tr>
                                    <td class="py-3 align-middle">
                                      <div class="d-flex align-items-center"><img src="img/card-master.png" width="39" alt="MesterCard">
                                        <div class="ps-2"><span class="fw-medium text-heading me-1">MasterCard</span>ending in 0015</div>
                                      </div>
                                    </td>
                                    <td class="py-3 align-middle">John doe</td>
                                    <td class="py-3 align-middle">11 / 2021</td>
                                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" aria-label="Remove" data-bs-original-title="Remove">
                                        <div class="ci-trash"></div></a></td>
                                  </tr>
                                  <tr>
                                    <td class="py-3 align-middle">
                                      <div class="d-flex align-items-center"><img src="img/card-paypal.png" width="39" alt="PayPal">
                                        <div class="ps-2"><span class="fw-medium text-heading me-1">PayPal</span>j.doe@example.com</div>
                                      </div>
                                    </td>
                                    <td class="py-3 align-middle">—</td>
                                    <td class="py-3 align-middle">—</td>
                                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" aria-label="Remove" data-bs-original-title="Remove">
                                        <div class="ci-trash"></div></a></td>
                                  </tr>
                                  <tr>
                                    <td class="py-3 align-middle">
                                      <div class="d-flex align-items-center"><img src="img/card-visa.png" width="39" alt="Visa">
                                        <div class="ps-2"><span class="fw-medium text-heading me-1">Visa</span>ending in 6073</div>
                                      </div>
                                    </td>
                                    <td class="py-3 align-middle">John doe</td>
                                    <td class="py-3 align-middle">09 / 2021</td>
                                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" aria-label="Remove" data-bs-original-title="Remove">
                                        <div class="ci-trash"></div></a></td>
                                  </tr>
                                  <tr>
                                    <td class="py-3 align-middle">
                                      <div class="d-flex align-items-center"><img src="img/card-visa.png" width="39" alt="Visa">
                                        <div class="ps-2"><span class="fw-medium text-heading me-1">Visa</span>ending in 9791</div>
                                      </div>
                                    </td>
                                    <td class="py-3 align-middle">John doe</td>
                                    <td class="py-3 align-middle">05 / 2021</td>
                                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" aria-label="Edit" data-bs-original-title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" aria-label="Remove" data-bs-original-title="Remove">
                                        <div class="ci-trash"></div></a></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="text-sm-end"><a class="btn btn-primary" href="#add-payment" data-bs-toggle="modal">Add payment method</a></div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            create

            start an event
            share content to connect with your followers

            Create an event
            Host an event to grow your pages community

            Post a free job
            reach more qualified applicants

            create an Ad
            Generate leads, drive website traffic, and build brand awareness

            create a showcase page
            Add more details about your event


            </div>

            <hr class="mb-5 fw-bold">
          </div>
        </section>

        <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
          <div class="container">
              <div class="grido">
                <div class="element-item transition metal " data-category="transition">
                  <h3 class="name">Mercury</h3>
                  <p class="symbol">Hg</p>
                  <p class="number">80</p>
                  <p class="weight">200.59</p>
                </div>
                <div class="element-item metalloid " data-category="metalloid">
                  <h3 class="name">Tellurium</h3>
                  <p class="symbol">Te</p>
                  <p class="number">52</p>
                  <p class="weight">127.6</p>
                </div>
                <div class="element-item post-transition metal " data-category="post-transition">
                  <h3 class="name">Bismuth</h3>
                  <p class="symbol">Bi</p>
                  <p class="number">83</p>
                  <p class="weight">208.980</p>
                </div>
                <div class="element-item post-transition metal " data-category="post-transition">
                  <h3 class="name">Lead</h3>
                  <p class="symbol">Pb</p>
                  <p class="number">82</p>
                  <p class="weight">207.2</p>
                </div>
                <div class="element-item transition metal " data-category="transition">
                  <h3 class="name">Gold</h3>
                  <p class="symbol">Au</p>
                  <p class="number">79</p>
                  <p class="weight">196.967</p>
                </div>
                <div class="element-item alkali metal " data-category="alkali">
                  <h3 class="name">Potassium</h3>
                  <p class="symbol">K</p>
                  <p class="number">19</p>
                  <p class="weight">39.0983</p>
                </div>
                <div class="element-item alkali metal " data-category="alkali">
                  <h3 class="name">Sodium</h3>
                  <p class="symbol">Na</p>
                  <p class="number">11</p>
                  <p class="weight">22.99</p>
                </div>
                <div class="element-item transition metal " data-category="transition">
                  <h3 class="name">Cadmium</h3>
                  <p class="symbol">Cd</p>
                  <p class="number">48</p>
                  <p class="weight">112.411</p>
                </div>
                <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
                  <h3 class="name">Calcium</h3>
                  <p class="symbol">Ca</p>
                  <p class="number">20</p>
                  <p class="weight">40.078</p>
                </div>
                <div class="element-item transition metal " data-category="transition">
                  <h3 class="name">Rhenium</h3>
                  <p class="symbol">Re</p>
                  <p class="number">75</p>
                  <p class="weight">186.207</p>
                </div>
                <div class="element-item post-transition metal " data-category="post-transition">
                  <h3 class="name">Thallium</h3>
                  <p class="symbol">Tl</p>
                  <p class="number">81</p>
                  <p class="weight">204.383</p>
                </div>
                <div class="element-item metalloid " data-category="metalloid">
                  <h3 class="name">Antimony</h3>
                  <p class="symbol">Sb</p>
                  <p class="number">51</p>
                  <p class="weight">121.76</p>
                </div>
                <div class="element-item transition metal " data-category="transition">
                  <h3 class="name">Cobalt</h3>
                  <p class="symbol">Co</p>
                  <p class="number">27</p>
                  <p class="weight">58.933</p>
                </div>
                <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
                  <h3 class="name">Ytterbium</h3>
                  <p class="symbol">Yb</p>
                  <p class="number">70</p>
                  <p class="weight">173.054</p>
                </div>
                <div class="element-item noble-gas nonmetal " data-category="noble-gas">
                  <h3 class="name">Argon</h3>
                  <p class="symbol">Ar</p>
                  <p class="number">18</p>
                  <p class="weight">39.948</p>
                </div>
                <div class="element-item diatomic nonmetal " data-category="diatomic">
                  <h3 class="name">Nitrogen</h3>
                  <p class="symbol">N</p>
                  <p class="number">7</p>
                  <p class="weight">14.007</p>
                </div>
                <div class="element-item actinoid metal inner-transition " data-category="actinoid">
                  <h3 class="name">Uranium</h3>
                  <p class="symbol">U</p>
                  <p class="number">92</p>
                  <p class="weight">238.029</p>
                </div>
                <div class="element-item actinoid metal inner-transition " data-category="actinoid">
                  <h3 class="name">Plutonium</h3>
                  <p class="symbol">Pu</p>
                  <p class="number">94</p>
                  <p class="weight">(244)</p>
                </div>
              </div>
          </div>
        </section>

        <section class=" d-lg-none bg-position-top-center bg-repeat-0 pt-0 pb-5 pt-md-7 pb-md-10" >
            <div class="container">
              <!-- search -->
              <div class="widget">
                <!-- <h3 class="widget-title">Search</h6> -->
                <form action="" class="subscription-form validate">
                  <div class="input-group flex-nowrap">
                    <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input type="text" class="form-control rounded-start"  name="search" placeholder="Search" required>
                    <button class="btn btn-primary" type="submit" name=""> Search</button>
                  </div>

                  <div class="form-text">*Search your potential upcoming Industry Events</div>
                  <div class="subscription-status"></div>
                </form>
              </div>

              <!-- industry -->
              <div class="widget">
                  <a href="{{route('user.category',['trends' => 'category'])}}" class="fw-sm"><h3 class="widget-title">Your Industry </h3> add</a>
                @foreach($userCategory as $categor)
                <a href="#" wire:click.prevent="insertEventToSess({{$categor->id}})"  class="btn-tag me-2 mb-2">#{{$categor->expo->tag}}</a>
                @endforeach
                <a href="" class="btn-tag me-2 mb-2 active">#business</a>
              </div>

              <!-- Plan your Event -->
              <div class="widget">
                <h3 class="widget-title">Plan your Event <small>add</small></h3>

                <a href="{{route('user.category',['trends' => 'event'])}}" class="btn btn-primary btn-sm">ADD</a>
                <div class="d-flex align-items-center pb-2 border-bottom">
                  <a href="" class="flex-shrink-0">
                    <img src="" alt=""width="">
                  </a>
                  <div class="ps-2">
                    <h6 class="widget-product-title"><a href="">test</a></h6>
                    <div class="widget-product-meta">
                      <span class="text-accent me-2"> test<small>cjec</small></span>
                    </div>
                  </div>
                </div>

              </div>

              <!-- <small class="lh-1">Select your event, create product QR Link. Get formatted form your visitor.</small> <br> -->
              <a href="{{route('partner.magazine',['trackcustomer' => 'add-magazine'])}}" class="btn btn-primary btn-sm">Generate QR</a>

              <!-- <div class="widget">
                <div class="widget-title">Basic Membership</h3>

                <div>
                <div class="d-flex align-items-center">
                      <button class="btn-close text-danger" type="button" aria-label="Remove">
                        <span aria-hidden="true"> &times;</span>
                      </button>
                  <a href="" class="flex-shrink-0">
                    <img src="" alt=""width="64">
                  </a>
                  <div class="ps-2">
                    <h6 class="widget-product-title"><a href="">One-time Registration Fee:$50</a></h6>
                    <div class="widget-product-meta">
                      <span class="text-accent me-2"> test<small>cjec</small></span>
                    </div>
                  </div>
                </div>
                </div>

                <div>
                      <button class="btn-close text-danger" type="button" aria-label="Remove">
                        <span aria-hidden="true"> &times;</span>
                      </button>
                  <div class="d-flex align-items-center">
                  
                    <a href="" class="flex-shrink-0">
                      <img src="" alt=""width="64">
                    </a>
                    <div class="ps-2">
                      <h6 class="widget-product-title"><a href="">test</a></h6>
                      <div class="widget-product-meta">
                        <span class="text-accent me-2"> test<small>cjec</small></span>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div>
                <div class="d-flex align-items-center">
                  <a href="" class="flex-shrink-0">
                    <img src="" alt=""width="64">
                  </a>
                  <div class="ps-2">
                    <h6 class="widget-product-title"><a href="">test</a></h6>
                    <div class="widget-product-meta">
                      <span class="text-accent me-2"> test<small>cjec</small></span>
                    </div>
                  </div>
                </div>
                </div>

              </div>  -->

              <!-- membership -->
              <div class="widget widget-cart">
                <h3 class="widget-title">Membership</h3>

                <div style="max-height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                
                  <!--item-->
                    <div class="widget-cart-item pb-2 border-bottom">
                      <button class="btn-close text-danger" type="button" aria-label="Remove">
                        <span aria-hidden="true"> &times;</span>
                      </button>
                        <div class="d-flex align-items-center">
                          <a href="" class="flex-shrink-0">
                            <img src="" alt=""width="64">
                          </a>
                          <div class="ps-2">
                            <h6 class="widget-product-title"><a href="">test</a></h6>
                            <div class="widget-product-meta">
                              <span class="text-accent me-2"> test<small>cjec</small></span>
                            </div>
                          </div>
                        </div>
                    </div>
                  
                  <!--item-->
                    <div class="widget-cart-item pb-2 border-bottom">
                      <button class="btn-close text-danger" type="button" aria-label="Remove">
                        <span aria-hidden="true"> &times;</span>
                      </button>
                        <div class="d-flex align-items-center">
                          <a href="" class="flex-shrink-0">
                            <img src="" alt=""width="64">
                          </a>
                          <div class="ps-2">
                            <h6 class="widget-product-title"><a href="">test</a></h6>
                            <div class="widget-product-meta">
                              <span class="text-accent me-2"> test<small>cjec</small></span>
                            </div>
                          </div>
                        </div>
                    </div>
                  
                  <!--item-->
                    <div class="widget-cart-item pb-2 border-bottom">
                      <button class="btn-close text-danger" type="button" aria-label="Remove">
                        <span aria-hidden="true"> &times;</span>
                      </button>
                        <div class="d-flex align-items-center">
                          <a href="" class="flex-shrink-0">
                            <img src="" alt=""width="64">
                          </a>
                          <div class="ps-2">
                            <h6 class="widget-product-title"><a href="">test</a></h6>
                            <div class="widget-product-meta">
                              <span class="text-accent me-2"> test<small>cjec</small></span>
                              <span class="text-muted">X 1</span>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <!-- footer -->
                <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                  <div class="fs-sm me-2 py-2">
                    <span class="text-muted">Subtotal:</span>
                    <span class="text-accent fs-base ms-1">$265 <small>00</small></span>
                  </div>
                  <a href="" class="btn btn-outline-secondary btn-sm">Expand Cart <i class=" bi bi-chevron-right ms-1 me-n1"></i></a>
                </div>

                <a href="" class="btn btn-primary btn-sm d-block w-100">
                  <i class="bi bi-card me-2 fs-base align-middle"></i> Checkout
                </a>
              <div>
              
            </div>

            <!-- Event -->
            <!-- <div class="card border-0 shadow mb-3">
              <div class="card-header">
                Post your Event
              </div>
              <div class="card-body">
                <h5 class="card-title">
                Your Events
                </h5>
                <p  class="card-text fs-sm text-muted"> list your magazine potential space, at right time, right place with right people  </p>
                <a href="" class="btn btn-sm btn-primary">Add</a>
              </div>
            </div> -->

            <!-- magazine -->
            <!-- <div class="card border-0 shadow mb-3">
              <div class="card-header">
                Create a showcase magazine
              </div>
              <div class="card-body">
                <h5 class="card-title">
                List your Magazine
                </h5>
                <p  class="card-text fs-sm text-muted"> Add more details about your event</p>
                <a href="{{route('partner.magazine',['trackcustomer' => 'add-magazine'])}}" class="btn btn-sm btn-primary">Add</a>
              </div>
            </div> -->

            <!-- email Campaign -->
            <!-- <div class="card border-0 shadow mb-3">
              <div class="card-header">
              Post an Email
              </div>
              <div class="card-body">
                <h5 class="card-title">Email Campaign</h5>
                <p  class="card-text fs-sm text-muted">reach more, Our Data, Your Customer</p>
                <a href="" class="btn btn-sm btn-primary">Add</a>
              </div>
            </div> -->
           
              <div class="grido mb-5" >
                
                <div class="element-item diatomic nonmetal " data-category="diatomic">
                  <h3 class="name">Event</h3>
                  <p class="symbol">Add</p>
                  <p class="number">7</p>
                  <p class="weight">14.007</p>
                </div>

                <div class="element-item actinoid metal inner-transition " data-category="actinoid">
                  <h3 class="name">Magazine</h3>
                  <p class="symbol">Add</p>
                  <p class="number">92</p>
                  <p class="weight">238.029</p>
                </div>

                <div class="element-item actinoid metal inner-transition " data-category="actinoid">
                  <h3 class="name">Dealer Distribution</h3>
                  <p class="symbol">Add</p>
                  <p class="number">94</p>
                  <p class="weight">(244)</p>
                </div>
              </div>
            
        </section>
    
        
    @endif

  {{--<div class="container">
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
                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
              @else
                {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
              @endif 
            </div>  
            <div class="text-muted fs-sm text-start">{{ucfirst(trans($franchise -> venue))}}, {{ucfirst(trans($franchise -> city))}}</div>
          </div>

          <div class="col-3  p-0">
            @if(is_null($franchise->image))
              <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $franchise->id, 'formm' => 'image' ])}}">
                  Add</a>
            @else
              <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
              <img src="{{url('public/assets/image/exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>
            @endif
          </div>
        </div>
      </div>--}}


  @if($board == 'olddashboard')

    @php
      $usDetails = DB::table('brands')->where('user_id', Auth::user()->id)->where('dtype','user')->pluck('dtype');
    @endphp

    @if(is_null($usDetails))

            <div class="container">
              Create Business Profile
            </div>

              @if($userDetails->count() == 0)
                            <div class="container bg-secondary rounded-3 p-4 mb-4">
                              <div class="d-flex align-items-center">
                                <img class="rounded" src="#" width="90" alt="#">
                                <div class="ps-3">
                                  <button class="btn btn-light btn-shadow btn-sm mb-2" type="button"><i class="ci-loading me-2"></i>Change avatar</button>
                                  <div class="p mb-0 fs-ms text-muted">update your industry</div>
                                </div>
                              </div>
                            </div>
              @else
                          @foreach($userDetails as $eventoi)
                            <div class="container bg-secondary rounded-3 p-4 mb-4">
                              <div class="d-flex align-items-center">
                                <img class="rounded" src="#" width="90" alt="{{$eventoi->brand_name}}">
                                <div class="ps-3">
                                  <button class="btn btn-light btn-shadow btn-sm mb-2" type="button"><i class="ci-loading me-2"></i>Change avatar</button>
                                  <div class="p mb-0 fs-ms text-muted">{{$eventoi->industry}}{{$eventoi->sector}}</div>
                                </div>
                              </div>
                            </div>
                          @endforeach
              @endif
              
            <div class="container d-lg-none">
                <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm">New Recommended<br><span class="fw-medium h5">Industry</span></span>
                  

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                        <li><a class="dropdown-item" href="#">Exhibit</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                      </ul>
                    </span>

                  </div>
                </div>

              
              @foreach($eventoo as $evento)
                  <div class="container my-3">
                      <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                          <div class="col  pr-0">
                              @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                                @else
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                              @endif 
                              <div class="round-circle">{{$evento->edition}}</div> 
                              {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                          </div>

                          <div class="col-7  p-0">
                            <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                                {{ucwords(trans(Str::limit($evento->eventname, 24)))}}</a></div>
                            <div class="text-muted fs-sm text-start">
                                @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @else
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @endif 
                            </div>  
                            <div class="text-muted fs-sm text-start">{{ucfirst(trans($evento -> venue))}}, {{ucfirst(trans($evento -> city))}}</div>
                          </div>

                          <div class="col-3  p-0">
                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                              <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                          </div>
                      </div>
                  </div>
              @endforeach
            </div>


            <div class="container d-lg-none">
                <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm">New event from Organiser<br><span class="fw-medium h5">Search</span></span>
                  

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                        <li><a class="dropdown-item" href="#">Exhibit</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                      </ul>
                    </span>

                  </div>
                </div>
                <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm">Saved Events<br><span class="fw-medium h5">Search</span></span>
                  

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                        <li><a class="dropdown-item" href="#">Exhibit</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                      </ul>
                    </span>

                  </div>
                </div>
                <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm">Create Custom Event alerts<br><span class="fw-medium h5">Search</span></span>
                  

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                        <li><a class="dropdown-item" href="#">Exhibit</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                      </ul>
                    </span>

                  </div>
                </div>
              
              @foreach($eventoo as $evento)
                  <div class="container my-3">
                      <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                          <div class="col  pr-0">
                              @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                                @else
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                              @endif 
                              <div class="round-circle">{{$evento->edition}}</div> 
                              {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                          </div>

                          <div class="col-7  p-0">
                            <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                                {{ucwords(trans(Str::limit($evento->eventname, 24)))}}</a></div>
                            <div class="text-muted fs-sm text-start">
                                @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @else
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @endif 
                            </div>  
                            <div class="text-muted fs-sm text-start">{{ucfirst(trans($evento -> venue))}}, {{ucfirst(trans($evento -> city))}}</div>
                          </div>

                          <div class="col-3  p-0">
                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                              <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                          </div>
                      </div>
                  </div>
              @endforeach
            </div>

      <!-- <div class="container d-lg-none">
                <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm">Explore more Places you may like<br><span class="fw-medium h5">Search</span></span>
                  

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                        <li><a class="dropdown-item" href="#">Exhibit</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                      </ul>
                    </span>

                  </div>
                </div>

              
              @foreach($eventoo as $evento)
                  <div class="container my-3">
                      <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                          <div class="col  pr-0">
                              @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                                @else
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                              @endif 
                              <div class="round-circle">{{$evento->edition}}</div> 
                              {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                          </div>

                          <div class="col-7  p-0">
                            <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                                {{ucwords(trans(Str::limit($evento->eventname, 24)))}}</a></div>
                            <div class="text-muted fs-sm text-start">
                                @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @else
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @endif 
                            </div>  
                            <div class="text-muted fs-sm text-start">{{ucfirst(trans($evento -> venue))}}, {{ucfirst(trans($evento -> city))}}</div>
                          </div>

                          <div class="col-3  p-0">
                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                              <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                          </div>
                      </div>
                  </div>
              @endforeach
            </div>

            <div class="container d-lg-none">
                <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm">Early Access places<br><span class="fw-medium small">Fresh places from Organizer Searches</span></span>
                  

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                        <li><a class="dropdown-item" href="#">Exhibit</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                      </ul>
                    </span>

                  </div>
                </div>

              
              @foreach($eventoo as $evento)
                  <div class="container my-3">
                      <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                          <div class="col  pr-0">
                              @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                                @else
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                              @endif 
                              <div class="round-circle">{{$evento->edition}}</div> 
                              {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                          </div>

                          <div class="col-7  p-0">
                            <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                                {{ucwords(trans(Str::limit($evento->eventname, 24)))}}</a></div>
                            <div class="text-muted fs-sm text-start">
                                @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @else
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @endif 
                            </div>  
                            <div class="text-muted fs-sm text-start">{{ucfirst(trans($evento -> venue))}}, {{ucfirst(trans($evento -> city))}}</div>
                          </div>

                          <div class="col-3  p-0">
                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                              <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                          </div>
                      </div>
                  </div>
              @endforeach
            </div> -->

            <div class="container d-lg-none">
                <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm">Join for Right People<br><span class="fw-medium h5">Top Places</span></span>
                  

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                        <li><a class="dropdown-item" href="#">Exhibit</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                      </ul>
                    </span>

                  </div>
                </div>

              
              @foreach($eventoo as $evento)
                  <div class="container my-3">
                      <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                          <div class="col  pr-0">
                              @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                                @else
                                <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                              @endif 
                              <div class="round-circle">{{$evento->edition}}</div> 
                              {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                          </div>

                          <div class="col-7  p-0">
                            <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                                {{ucwords(trans(Str::limit($evento->eventname, 24)))}}</a></div>
                            <div class="text-muted fs-sm text-start">
                                @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @else
                                {{Carbon\Carbon::parse ($evento->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                @endif 
                            </div>  
                            <div class="text-muted fs-sm text-start">{{ucfirst(trans($evento -> venue))}}, {{ucfirst(trans($evento -> city))}}</div>
                          </div>

                          <div class="col-3  p-0">
                          <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                              <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                          </div>
                      </div>
                  </div>
              @endforeach
            </div>

            <div class="container d-lg-none">
                <div class="list-unstyled pt-2 pb-0 px-0 pl-0">
                  <div class="d-flex justify-content-between px-0 m-0 lh-1">
                    <span class="fs-sm">Daily Updates<br><span class="fw-medium h5">Powered By COI</span></span>
                  

                    <span><a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All</a>
                      <ul class="dropdown-menu" width="auto">
                        <li><a class="dropdown-item" href="#">More</a></li>
                        <li><a class="dropdown-item" href="#">Exhibit</a></li>
                        <li><a class="dropdown-item" href="{{route('coievent.add', ['board' => 'add-your-event'])}}">Add Event</a></li>        
                      </ul>
                    </span>

                  </div>
                </div>

                @foreach($eventoo as $evento)
                    <div class="container my-3">
                        <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                            <div class="col  pr-0">
                                @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                  <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                  <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                                  @else
                                  <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                  <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                                @endif 
                                <div class="round-circle">{{$evento->edition}}</div> 
                                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                            </div>

                            <div class="col-7  p-0">
                              <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                                  {{ucwords(trans(Str::limit($evento->eventname, 24)))}}</a></div>
                              <div class="text-muted fs-sm text-start">
                                  @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                  {{Carbon\Carbon::parse ($evento->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                  @else
                                  {{Carbon\Carbon::parse ($evento->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($evento->enddate)->format('D, d M')}}
                                  @endif 
                              </div>  
                              <div class="text-muted fs-sm text-start">{{ucfirst(trans($evento -> venue))}}, {{ucfirst(trans($evento -> city))}}</div>
                            </div>

                            <div class="col-3  p-0">
                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evento->slug])}}">
                                <img src="{{url('exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

                <div class="container d-lg-none">
                    <div class="text-dark fw-medium fs-sm">Business Tips</div> 
                    
                  <div class=" my-sliderOffers">
                      <ul class="list-unstyled fs-sm  p-2">
                          <li class="d-flex justify-content-between p-0 m-0">
                          <span class="text-dark fw-medium fs-sm"> 12 Important business Onboarding Tips for New Events <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                          <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                      </ul>

                      <ul class="list-unstyled fs-sm  p-2">
                          <li class="d-flex justify-content-between p-0 m-0">
                          <span class="text-dark fw-medium fs-sm">How to Ace big Players battleyards?<br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                          <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                      </ul>
                    
                      <ul class="list-unstyled fs-sm  p-2">
                        <li class="d-flex justify-content-between p-0 m-0">
                        <span class="text-dark fw-medium fs-sm">How to become Good Place to Exhibit?<br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                        <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Offer</a></span></li>
                      </ul>
                  </div>

                </div>

                <div class="container d-lg-none">
                    <div class="text-dark fw-medium fs-sm">Add Your Event</div> 
                    
                  <div class=" my-sliderOffers">
                      <ul class="list-unstyled fs-sm  p-2">
                          <li class="d-flex justify-content-between p-0 m-0">
                          <span class="text-dark fw-medium fs-sm">  <i class="bi bi-plus"></i> <br>
                          <span class="text-muted fw-light fs-sm">List your Event</span></span>
                          <span></span></li>
                      </ul>

                      @foreach($userEvent as $eventoi)
                        <ul class="list-unstyled fs-sm  p-2">
                            <li class="d-flex justify-content-between p-0 m-0">
                            <span class="text-dark fw-medium fs-sm">{{$eventoi->eventname}}<br>
                            <span class="text-muted fw-light fs-sm">{{$eventoi->city}}</span></span>
                            <span><a href="" class="btn btn-outline-primary btn-sm bg-light">Open</a></span></li>
                        </ul>
                      @endforeach
                    
                  </div>

                </div>

                <div class="container d-lg-none">
                    <div class="text-dark fw-medium fs-sm">Share your Experience</div> 
                    
                  <div class=" my-sliderOffers">
                      <ul class="list-unstyled fs-sm  p-2">
                          <li class="d-flex justify-content-between p-0 m-0">
                          <span class="text-dark fw-medium fs-sm">  Add your rating & review <br><span class="text-muted fw-light fs-sm">Your ratings matter</span></span>
                          <span><a href="" class="btn btn-outline-primary btn-sm bg-light"> Write your Advice</a></span></li>
                      </ul>

                      
                  </div>

                </div>

              <div class="container mb-5 pb-5">
                <h1>70% space booked without any follow-up calls</h1>
                <small>New places on The Exhibitor Network are booked by directly reaching out to New Brands wihtout any follow-up calls. Learn how you can make the best of this opportunity</small>
              </div>

    @else
        <!-- <section class="container py-3 py-lg-5 mt-4 mb-3">
          <div class="text-center mb-5">
            <p class="col-md-10 col-lg-8 mx-auto fw-normal">Reach your business goals with COI Marketing Solutions.</p>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-6 gy-2 gx-3 g-lg-3">
                    
          
                    <div class="col">
                        <a  href="#" class="p-3 border rounded border-dark bg-light text-center" value="expand" wire:model.lazy="expand">
                          Expand your Business
                        </a> 
                    </div>

                    
                    <div class="col">
                        <a  href="#" class="p-3 border rounded border-dark bg-light text-center" value="hire" wire:model.lazy="expand">
                           Hire us Media Buying
                        </a> 
                    </div>

                    
                </div>
            </div>

            {{$expand}}
          </div>
        </section> -->


    @endif

  @endif

  @if($board == 'olddashboard')
      <!--header-->
      <!-- <div class="page-title-overlap bg-accent pt-4 d-none d-sm-block">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
          <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="max-width: 50%;">
              <img  class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}"  alt="{{Auth::user()->name}}" >
            </div>

            <div class="ps-3">
              <h3 class="text-light fs-lg mb-0">{{ucwords(trans(Auth::user()->name))}}</h3>
              <span class="d-block text-light fs-ms opacity-60 py-1">Member since  {{ Carbon\Carbon::parse(Auth::user()->created_at)->format('F  Y ')}}</span><span class="badge bg-success">
                <i class=" bi bi-check me-1"></i>Available for Business</span>
            </div>
          </div>
          <div class="d-flex">
            <div class="text-sm-end me-5">
              <div class="text-light fs-base"> <a class="fs-ms text-light" href="{{route('user.Orders')}}"> Applies</a></div>
              <h3 class="text-light">
                  @if($appliedapplication == 0)
                    <a class="fs-ms text-light" href="">Find Opportunity</a>
                    @else 
                      {{$appliedapplication}}
                  @endif
            </h3>
            </div>
            <div class="text-sm-end">
              <div class="text-light fs-base">Seller rating</div>
              <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
              </div>
              <div class="text-light opacity-60 fs-xs">Based on 98 reviews</div>
            </div>
          </div>
        </div>
      </div>

      <div class="container mb-5 pb-3 d-none d-sm-block">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pe-xl-5">
              <div class="bg-white h-100 border-end p-4">
                <div class="p-2">
                  <ul class="list-unstyled fs-sm">
                    <li><a class="nav-link-style d-flex align-items-center fw-bold" href="mailto:contact@example.com">
                      <i class=" bi bi-lightbulb opacity-60 me-2"></i>Next, add your business details <span class="btn btn-outline-primary btn-sm">Start</span></a> </li>
                    <li><a class="nav-link-style d-flex align-items-center fs-sm fw-light" href="#"><!--<i class=" bi bi-globe opacity-60 me-2"></i>-->
                    Tell us a little more about your business to activate your account</a></li>
                  </ul>
                  
                  <a class="btn-social bs-twitter bs-outline bs-sm me-2 mb-2" target="_blank" href="{{$infos->twitter}}"><i class=" bi bi-twitter"></i></a>
                  <a class="btn-social bs-facebook bs-outline bs-sm me-2 mb-2" target="_blank" href="{{$infos->facebook}}"><i class=" bi bi-facebook"></i></a>
                  <a class="btn-social bs-instagram bs-outline bs-sm me-2 mb-2"  target="_blank" href="{{$infos->instagram}}"><i class=" bi bi-instagram"></i></a>
                  <a class="btn-social bs-youtube bs-outline bs-sm me-2 mb-2"  target="_blank" href="{{$infos->youtube}}"><i class=" bi bi-youtube"></i></a>
                  <a class="btn-social bs-linkedin bs-outline bs-sm me-2 mb-2" target="_blank" href="{{$infos->linkedin}}"><i class=" bi bi-linkedin"></i></a>
                
                  <hr class="my-2">
                  <div class=" d-flex justify-content-between">
                    <div class="fw-bold fs-sm">Get started with COI</div>
                    <div class="btn btn-outline-primary btn-sm">Activate</div>
                  </div>
 
                  list your brand , 3 form shop  listing, exhibition listing , user requie listing 
                  <p class="fs-ms "><span class="fw-bold">Increase investor views upto 3 times.</span> <br>
                  Get  your proposal marked as 'Featured' & get a higher rank when investor search</p>

                    
                  <div class=" d-flex justify-content-between">
                    <div class="fw-bold fs-ms text-primary">Know more</div>
                    <div class="fs-ms" href="">Create opportunity model with us.</div>
                  </div>
                  <hr class="my-2">
                  <h6 class="p-0 m-0 fs-sm fw-bold">My Shop</h6> 
                  <p class=" small pb-0 my-0 ">List your shop for Brand Store</p>
                  @if(Session::has('message'))<div class="alert alert-success text-center"> {{Session::get('message')}} </div>@endif

                  <div class="form-check mb-2 pb-1">
                    <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="haveshop">
                    <label class="form-check-label" for="same-address">I have Shop.</label>
                  </div>

          
                 @if($haveshop == 1)
                  <div class="text-center mb-2 pb-2 border-bottom">
                    <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                    <form class="pb-1" wire:submit.prevent="addShop">
                      <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Enter your Pincode" value="" name="pincode" wire:model="pincode" required="">
                        <div class="invalid-feedback">@error( 'pincode' ){{ $message}}@enderror </div>
                      </div>
                      
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="shtype">
                        <label class="form-check-label" for="same-address">Own Shop</label>
                      </div>
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="rented" id="have-check" wire:model="shtype">
                        <label class="form-check-label" for="same-address">Rented Shop</label>
                      </div>
                    
                      <button class="btn btn-primary btn-sm d-block w-100" type="submit">Submit your Shop</button>
                    </form>

                  </div>
                 @endif 

                    <hr class="my-2">
                      @if(!session::has('coupon'))
                          <div class="form-check mb-2 pb-1">
                            <input class="form-check-input" type="checkbox"   value="1" id="have-check" wire:model="haveCouponCode">
                            <label class="form-check-label" for="same-address">I have coupon Code.</label>
                          </div>

                            @if($haveCouponCode == 1)
                              <div class="text-center mb-4 pb-3 border-bottom">
                                <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                                @if(Session::has('coupon_message'))
                                  <div class="alert alert-success text-center"> {{Session::get('coupon_message')}} </div>
                                @endif

                                <form class=" pb-2"   wire:submit.prevent="applyCouponCode">
                                  <div class="mb-3">
                                    <input class="form-control" type="text" placeholder="Coupon code" value="" name="couponCode" wire:model="couponCode" required="">
                                    <div class="invalid-feedback">Please provide Coupon code.</div>
                                  </div>
                                  <button class="btn btn-secondary d-block w-100" type="submit">Apply Coupon code</button>
                                </form>
                              </div>
                            @endif
                      @endif  
                   <hr class="my-2">
                    <h6 class="p-1 m-0 fw-bold fs-sm">COI Business</h6> 
                    <p class=" small pb-0 my-0 ">Looking to Expand Business</p>
                    @if(Session::has('message'))<div class="alert alert-success text-center"> {{Session::get('message')}} </div>@endif

                    <div class="form-check mb-2 pb-1">
                      <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="businessExpand">
                      <label class="form-check-label" for="same-address">Business Expansion</label>
                    </div>
            
                    @if($businessExpand == 1)
                      <div class="text-center mb-2 pb-2 border-bottom">
                        <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                        <form class="pb-1" wire:submit.prevent="addLevel">
                          <!---<div class="mb-3">
                            <input class="form-control" type="text" placeholder="Enter your Pincode" value="" name="pincode" wire:model="pincode" required="">
                            <div class="invalid-feedback">@error( 'pincode' ){{ $message}}@enderror </div>
                          </div>-->
                          
                          <div class="form-check-inline mb-2 pb-1">
                            <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="level">
                            <label class="form-check-label" for="same-address">COI Membership</label>
                          </div>
                          <div class="form-check-inline mb-2 pb-1">
                            <input class="form-check-input" type="radio" value="rented" id="have-check" wire:model="level">
                            <label class="form-check-label" for="same-address">Publish Your Exhibition</label>
                          </div>
                          <div class="form-check-inline mb-2 pb-1">
                            <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="level">
                            <label class="form-check-label" for="same-address">Publish your Brand</label>
                          </div>
                          <div class="invalid-feedback">@error('shtype') {{ $message}} @enderror </div>
                          <button class="btn btn-primary btn-sm d-block w-100" type="submit">Submit your Shop</button>
                        </form>
                      </div>
                    @endif 
                

                  <hr class="my-2">
                  <h6 class="p-1 m-0 fw-bold fs-sm">COI Space</h6> 
                  <p class=" small pb-0 my-0 ">Looking for Entreprenuer Business Space</p>
                  @if(Session::has('message'))<div class="alert alert-success text-center"> {{Session::get('message')}} </div>@endif

                  <div class="form-check mb-2 pb-1">
                    <input class="form-check-input" type="radio" value="1" id="have-check" wire:model="businessExpand">
                    <label class="form-check-label" for="same-address">Business Expansion</label>
                  </div>
          
                @if($businessExpand == 1)
                  <div class="text-center mb-2 pb-2 border-bottom">
                    <!--<h2 class="h6 mb-3 pb-1">Coupon code</h2><h6 class="mb-2 py-2 border-bottom">Coupon code</h6>--> 
                    <form class="pb-1" wire:submit.prevent="addLevel">
                      <!---<div class="mb-3">
                        <input class="form-control" type="text" placeholder="Enter your Pincode" value="" name="pincode" wire:model="pincode" required="">
                        <div class="invalid-feedback">@error( 'pincode' ){{ $message}}@enderror </div>
                      </div>-->
                      
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="level">
                        <label class="form-check-label" for="same-address">COI Membership</label>
                      </div>
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="rented" id="have-check" wire:model="level">
                        <label class="form-check-label" for="same-address">Publish Your Exhibition</label>
                      </div>
                      <div class="form-check-inline mb-2 pb-1">
                        <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="level">
                        <label class="form-check-label" for="same-address">Publish your Brand</label>
                      </div>
                      <div class="invalid-feedback">@error('shtype') {{ $message}} @enderror </div>
                      <button class="btn btn-primary btn-sm d-block w-100" type="submit">Submit your Shop</button>
                    </form>
                  </div>
                @endif
                  <hr class="my-2">
                  <h6 class="pb-1">Send message</h6>
                  <form class="needs-validation pb-2" method="post" novalidate="">
                    <div class="mb-3">
                      <textarea class="form-control" rows="2" placeholder="Your message" required=""></textarea>
                      <div class="invalid-feedback">Please wirte your message!</div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100" type="submit">Send</button>
                  </form>
                </div>
              </div>
            </aside>
            
            <!-- Content-->
            <section class="col-lg-8 pt-lg-4 pb-md-4">
              @if($newuser->count() == 1 | $newuser->count() > 1)
               
                 @livewire('recommend-component')
                 
                @elseif($newuser->count() == 0)
                  <!--Start Multi-step form-->
                  <div class=" pt-1 px-1 ps-lg-0 pe-xl-5">
                    <form wire:submit.prevent="add" >
                        @if($currentStep == 1)
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1" >
                              <div class="h3 mb-5 fw-lighter">Let's start journey to get buiness success professionally. </div>    
                              <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="doing" id="have-check"  wire:model="business"  >
                                <label class="form-check-label" for="same-address">Already doing a Business?</label>
                              </div>
                              <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="looking" id="have-check"  wire:model="business" >
                                <label class="form-check-label" for="same-address">Looking to do Business?</label>
                              </div>
                            </div>
                            <span class="text-danger">@error( 'business' ){{ $message}}@enderror</span>
                          </div>
                        @endif
              
                        @if($currentStep == 2)
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1">
                              <div class="h3 mb-5 fw-lighter">Let's start journey to get buiness success professionally. </div>
                                <div class="form-check mb-2 pb-1">
                                  <input class="form-check-input" type="radio" value="license" id="have-check"  wire:model="doing"  >
                                  <label class="form-check-label" for="same-address">Looking to Buy Brand License</label>
                                </div>
                                <div class="form-check mb-2 pb-1">
                                  <input class="form-check-input" type="radio" value="expand" id="have-check"  wire:model="doing" >
                                  <label class="form-check-label" for="same-address">Looking to Expand Business</label>
                                </div>
                            </div>
                              <!--<input type="radio" class="btn-check" id="btn-check" value="license"  wire:model="doing" ></input>
                                <label class="btn btn-primary" for="btn-check">Looking to Buy Brand License</label>
                                  <input type="radio" class="btn-check" id="btn-check" value="expand"  wire:model="doing" ></input>
                                  <label class="btn btn-primary" for="btn-check">Looking to Expand Business</label>{{$doing}}
                              </div>-->
                            <span class="text-danger">@error( 'doing' ){{ $message}}@enderror</span>
                          </div>
                        @endif

                        @if( $currentStep == 3 )
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1">
                              <div class="h3 mb-5 fw-lighter">Choose your Business Industry</div>
                                <select class="form-select-inline flex-shrink-0" style="width: 10.5;" wire:model="category">
                                  <option> Choose Categories</option>
                                    @foreach ($abc as $category)
                                      <option  value="{{$category->id}}">{{$category->industry}}</option>
                                    @endforeach 
                                </select>
                              @if(!is_null($def))
                                <select class="form-select-inline flex-shrink-0" style="width: auto;" wire:model="sector">
                                  <option> Choose Sector</option>
                                    @foreach ($def as $sector)
                                      <option  value="{{$sector->id}}">{{$sector->sector}}</option>
                                    @endforeach
                                </select>
                              @endif
                              @if(!is_null($ghi))
                                <select class="form-select-inline flex-shrink-0" style="width: auto;" wire:model="service">
                                  <option> Choose Sector</option>
                                    @foreach ($ghi as $sector)
                                      <option  value="{{$sector->id}}" href="{{route('franchise.sector',['sector_slug'=> $sector->slug])}}" >{{$sector->business}}</option>
                                    @endforeach
                                </select>
                              @endif
                            </div>
                              <span class="text-danger">@error('category'){{ $message}}@enderror</span>
                              <span class="text-danger">@error('sector'){{ $message}}@enderror</span>
                              <span class="text-danger">@error('service'){{ $message}}@enderror</span>
                          </div>
                        @endif

                        @if( $currentStep == 4)
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1">
                              <div class="h3 mb-5 fw-lighter">Do you have your own business store?</div>
                              <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="rented" id="have-check" wire:model="shoptype">
                                <label class="form-check-label" for="same-address">Rented Shop</label>
                              </div>
                              <div class="form-check mb-2 pb-1">
                                <input class="form-check-input" type="radio" value="own" id="have-check" wire:model="shoptype">
                                <label class="form-check-label" for="same-address">Own shop</label>
                              </div>
                            </div>
                          </div>
                        @endif

                        @if( $currentStep == 5)
                          <div class="container">
                            <div class="mt-5 pt-5 mx-5 px-5 mb-1 pb-1">
                              <div class="h3 mb-5 fw-lighter">Do you have your own business store?</div>
                                <label for="customRange3" class="form-label">Investment</label>
                                <input type="range" class="form-range" min="0" max="90" id="customRange1" wire:model="maxinvestment">
                              </div>
                          </div>
                        @endif

                        <div class="row align-items-center">
                          @if($currentStep == 1)
                            <div></div>
                          @endif

                          @if($currentStep == 2 | $currentStep == 3 | $currentStep == 4| $currentStep == 5)
                            <button class=" col-sm-4 btn btn-primary d-block w-auto px-1" type="button" wire:click="decreaseStep()" ><i class="bi bi-arrow-left fs-lg me-2"></i>
                                back
                            </button>
                          @endif
                                  
                          @if($currentStep == 1 | $currentStep == 2 | $currentStep == 3 | $currentStep == 4)
                            <button class=" col-sm-4 btn btn-primary d-block w-auto px-1 "  type="button" wire:click="increaseStep()" ><i class=" bi bi-arrow-right fs-lg me-2"></i>
                                next
                            </button>
                          @endif

                          @if($currentStep == 5)
                            <button class=" col-sm-4 btn btn-primary d-block w-50 px-1 "  type="submit"  wire:click="decreaseStep" ><i class=" bi bi-cloud-upload fs-lg me-2"></i>
                                Submit
                            </button>
                          @endif
                        </div>
                    </form> 
                  </div>
              @endif        
              <!-- Card group -->
                <div class=" row card-group">

                  <!-- Card -->
                  <div class="card ">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Exhibition</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Award</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Sponsership</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  
                </div> 

                <div class=" row card-group">

                 

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Speaker</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Magazine</h5>
                      <p class="card-text fs-sm text-muted">This card has supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                  <!-- Card -->
                  <div class="card">
                    <img src="pat-to-image" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Membership</h5>
                      <p class="card-text fs-sm text-muted">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      <a href="#" class="btn btn-sm btn-primary">Go somewhere</a>
                    </div>
                  </div>

                </div> 
            </section>
            
            
           
          </div>
        </div>
      </div> -->

      {{--<div class="d-flex flex-column flex-shrink-0 bg-body-tertiary" style="width: 4.5rem;">
        <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
          <svg class="bi pe-none" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="visually-hidden">Icon-only</span>
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
          <li class="nav-item">
            <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home" data-bs-original-title="Home">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#home"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard"><use xlink:href="#speedometer2"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products"><use xlink:href="#grid"></use></svg>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
              <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"></use></svg>
            </a>
          </li>
        </ul>
        <div class="dropdown border-top">
          <a href="#" class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>--}}

              <div class="offcanvas offcanvas-start" data-bs-toggle="offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"  style="width: 4.5rem;">                  
                <div class=" ms-1 toggle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">    

                  
                
                  <div class="list-group list-group-flush scrollarea">

                      <a href="#" class=" border-0 list-group-item list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                      <div class="col-10 mb-1 small fw-lighter">Search</div>
                      </a>
                     
                     

                      <a href="#" class=" border-0 list-group-item px-1 list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        <div class="col-10 mb-1 fs-sm fw-lighter d-flex w-100 align-items-center justify-content-between">Add Event</div>
                      </a>

                      <a href="#" class=" border-0 list-group-item px-1 list-group-item-action {{'user/account' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        <div class="col-10 mb-1 fs-sm fw-lighter ">Advertise</div>
                      </a>
                                                                    
                      <a href="{{route('user.dashboard', ['board' => 'profile'])}}" class=" border-0 list-group-item px-1 list-group-item-action {{'user/orders' == request()->path() ? 'active' : '' }} py-1 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <small><i class="bi bi-chevron-right"></i></small>
                        </div>
                        <div class="col-10 mb-1 fs-sm fw-lighter">
                          Profile</div>
                      </a>

                  </div>

                </div>
              </div>


                  {{--<div class="handheld-toolbar border-top-0">
                    <div class="container py-4">
                      <div class="col-sm-12 ">
                        <div class="small fw-lighter">Product updates</div>
                        <small class="lh-1">Get the latest on new features, product improvement, and other announcements.</small>
                        <div class="bold text-primary fs-sm"> See what's new</div> 
                      </div>

                      @if(Auth::check())
                      <div class="col-sm-12 py-3">
                        <a class="fw-normal text-accent fs-md lh-1" href="{{route('user.dashboard')}}">Dashboard<i class="bi bi-right-chevron"></i> </a>
                      </div>
                      @else
                      
                      <div class="col-sm-12 py-3">
                        <div class="fw-normal text-accent fs-md lh-1">Start Free Trial  <i class="bi bi-right-chevron"></i> </div>
                      </div>


                      @endif


                    </div>
                  </div>--}}

  @endif

  @if( $board == 'search')        
    <div class="container my-5 mx-auto">
        <div class="mx-auto my-5"> 
            <div class=" d-flex row">
                <p >Let's Create Event Together</p>
               
      
                @foreach($selectedcategory as $catego)
                    <a class="badge  border-1 text-right border-dark text-dark mr-1" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$catego->id}})">
                    {{$catego->expo->tag}} <i class="bi bi-x me-2"></i>
                    </a>
                @endforeach

                <div class="col-lg-8 col-sm-7 ">
                    <input type="text" class="form-control" placeholder="Search your Category..." wire:model.lazy="searchTerm">
                    <a class="btn btn-primary">Search</a>
                </div>
               
            </div>
        
            @if(is_null($searchTerm))
            @else

                @if($searchcat->count() > 0)
                    <form wire:submit.prevent="updateEvent">      
                        <div class="row mb-5 pb-2" wire:model="checkvalue">

                            @foreach ($searchcat as $franchise) 
                            {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                            <div class=" col col-auto my-1 px-2"> 
                            <input class="form-check-input" type="checkbox"   value="{{$franchise->id}}"  wire:model="checkvalue">{{$franchise->tag}}
                            </div>
                            @endforeach
                            <div>@json($checkvalue)</div>
                            
                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>
                @else
                    <div class="small bold">Sorry, we could found relevant industry. You can upload </div>

                    <form wire:submit.prevent="updatetag">
                        <input type="text" placeholder="tag" wire:model="tag">
                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                    </form>
                @endif

            @endif
        </div>
    </div>
  @endif

  @if( $board == 'profile')
    <div class="container mb-5">
      <div class="row">  
        <a href="#" class=" col fs-xs text-left">Done</a>
        <a href="{{route('user.dashboard', ['board' => 'edit'])}}" class=" col fs-xs text-right">Edit</a>
      </div>  
      <!-- <div class="rounded-circle">
              <img class="rounded-circle" src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}" style="max-width: 50%;">
            </div> -->

      <div class="text-center">
        <img src="{{Auth::user()->profile_photo_url}}" class="d-inline-block rounded-circle mb-3" width="96" alt="{{Auth::user()->name}}">
        <h6 class="pt-1 mb-1">{{Auth::user()->name}}</h6>
        <p class="fs-sm text-muted">Chief of Marketing at Company Ltd.</p>

        <a href="#" class="btn-social bs-twitter bs-outline bs-sm">
          <i class="bi bi-twitter"></i>
        </a>
        <a href="#" class="btn-social bs-slack bs-outline bs-sm">
          <i class="bi bi-slack"></i>
        </a>
        <a href="#" class="btn-social bs-teams bs-outline bs-sm">
          <i class="bi bi-teams"></i>
        </a>
        <a href="#" class="btn-social bs-linkedin bs-outline bs-sm">
          <i class="bi bi-linkedin"></i>
        </a>
      </div>

      <div class="row my-3 ">
        <div class=" col fs-md text-center"><i class="bi bi-telephone"></i>mobile</div>
        <div class=" col fs-md text-center"> <i class="bi bi-linkedin"></i>Linkedin</div>
        <div class=" col fs-md text-center"> <i class="bi bi-whatsapp"></i> whatsApp</div>
        <div class=" col fs-md text-center"> <i class="bi bi-envelope"></i> mail</div>
      </div>

      <div class="card">
        <div class="card-body">
          <ul class="list-unstyled mb-0">
            <li class="d-flex pb-3 border-bottom">
              <i class="ci-location fs-lg mt-2 mb-0 text-primary"></i>
              <div class="ps-3">
                <span class="fs-ms text-muted">Find us</span>
                <a href="#" class="d-block text-heading fs-sm">769, Industrial Dr, West Chicago, IL 60185, USA</a>
              </div>
            </li>
            
            @php
                $phonecount = Auth::user()->phone;
            @endphp

            @if(is_null($phonecount))
              <li class="d-flex pt-2 pb-3 border-bottom">
                <i class="ci-phone fs-lg mt-2 mb-0 text-primary"></i>
                <div class="ps-3">
                  <span class="fs-ms text-muted">Call us</span>
                  <a href="#" class="d-block text-heading fs-sm">Add your Contact</a>
                </div>
              </li>
            @else
              <li class="d-flex pt-2 pb-3 border-bottom">
                <i class="ci-phone fs-lg mt-2 mb-0 text-primary"></i>
                <div class="ps-3">
                  <span class="fs-ms text-muted">Call us</span>
                  <a href="tel:{{Auth::user()->phone}}" class="d-block text-heading fs-sm">{{Auth::user()->phone}}</a>
                </div>
              </li>
            @endif

            @php
                $emailcount = Auth::user()->email;
            @endphp
            @if(is_null($emailcount))
            <li class="d-flex pt-2m">
              <i class="ci-mail fs-lg mt-2 mb-0 text-primary"></i>
              <div class="ps-3">
                <span class="fs-ms text-muted">Write us</span>
                <a href="#" class="d-block text-heading fs-sm">Add your Email</a>
              </div>
            </li>
            @else
            <li class="d-flex pt-2m">
              <i class="ci-mail fs-lg mt-2 mb-0 text-primary"></i>
              <div class="ps-3">
                <span class="fs-ms text-muted">Write us</span>
                <a href="mailto:{{Auth::user()->email}}" class="d-block text-heading fs-sm">{{Auth::user()->email}}</a>
              </div>
            </li>
            @endif
          </ul>
        </div>
      </div>
      
    </div>
  @endif
  
  @if( $board == 'edit')
    <div class="container my-5">
      <form wire:submit.prevent="userDetail">
        <input type="text" class="form-control mb-1" wire:model="name" placeholder="name">
        <input type="text" class="form-control mb-1" wire:model="designation" placeholder="designation">
        <input type="text" class="form-control mb-1" wire:model="organisation" placeholder="organisation">
        <input type="text" class="form-control mb-1" wire:model="gst" placeholder="gst">
        <input type="text" class="form-control mb-1" wire:model="address" placeholder="address">
        <input type="text" class="form-control mb-1" wire:model="email" placeholder="email">
        <input type="text" class="form-control mb-1" wire:model="phone" placeholder="phone">
        <button type="submit" class="mb-5 form-control btn btn-primary">Submit</button>
      </form>
    </div>
  @endif

  @if($board == 'SaveContact')
    <div class=" container text-center mt-4">
      <img src="path-to-image" class="d-inline-block rounded-circle mb-3" width="96" alt="Amanda Gallaher">
      <h6 class="pt-1 mb-1">Amanda Gallaher</h6>
      <p class="fs-sm text-muted">Chief of Marketing at Company Ltd.</p>
      <a href="#" class="btn-social bs-twitter bs-outline bs-sm">
        <i class="ci-twitter"></i>
      </a>
      <a href="#" class="btn-social bs-messenger bs-outline bs-sm">
        <i class="ci-messenger"></i>
      </a>
      <a href="#" class="btn-social bs-pinterest bs-outline bs-sm">
        <i class="ci-pinterest"></i>
      </a>
      <a href="#" class="btn-social bs-linkedin bs-outline bs-sm">
        <i class="ci-linkedin"></i>
      </a>

      <div class="btn btn-primary  form-control mt-4">Save Contact</div>

    </div>
  @endif

  <!-- featured with user is a organiser or exhibitor or Visitor. if visitor get sales contact or if organiser get business owner references
  <h1>Find Exhibitor</h1>
  <small>Build a big approach</small>
  <a href="route()" class="btn btn-primary form-control">Approach</a> -->

  @if($board == 'ExchangeContact')
   
    <div class=" container text-center mt-4">
       <img src="path-to-image" class="d-inline-block rounded-circle mb-3" width="96" alt="Amanda Gallaher">
       <h6 class="pt-1 mb-1">Amanda Gallaher</h6>
       <p class="fs-sm text-muted">Chief of Marketing at Company Ltd.</p>
       <a href="#" class="btn-social bs-twitter bs-outline bs-sm">
         <i class="ci-twitter"></i>
       </a>
       <a href="#" class="btn-social bs-messenger bs-outline bs-sm">
         <i class="ci-messenger"></i>
       </a>
       <a href="#" class="btn-social bs-pinterest bs-outline bs-sm">
         <i class="ci-pinterest"></i>
       </a>
       <a href="#" class="btn-social bs-linkedin bs-outline bs-sm">
         <i class="ci-linkedin"></i>
       </a>
 
    </div>
 
     <div class="container">
      <form action="">
         <input type="text" class="form-control" placeholder="email">
         <input type="text" class="form-control" placeholder="phone">

         <div class="btn btn-primary  form-control mt-4">Save Contact</div>
       </form>
     </div>
     
  @endif


  @if ($board == 'editprofile')
    <div class="container">
     <form wire:submit.prevent="likesUser">
        <input  class="form-control" type="email"  placeholder="email" wire:model="email">
        <input  class="form-control" type="text" placeholder="name" wire:model="name">
        <input  class="form-control" type="number" placeholder="phone" wire:model="phone">
        <input  class="form-control" type="number" placeholder="exp" wire:model="exp">
        <input  class="form-control" type="text" placeholder="designation" wire:model="designation">
        <input  class="form-control" type="text" placeholder="industry" wire:model="industry">
        <div  class="btn btn-primary form-control" type="submit">Submit</div>
     </form>
    </div>
  @endif


  @if($board == 'searchEvent')
     <form wire:submit.prevent="searchEvent">
      <input type="text" placeholder="tag" wire:model="tag">
      <input type="text" placeholder="edition" wire:model="edition">
      <input type="text" placeholder="city" wire:model="city">
      <button type="submit">Search</button>
     </form>
  @endif   

  @if ($board == 'QR_link')
    

    <div>
      Select your Exhibtion
      <input  class="form-control" type="text" placeholder="name" wire:model="name">
    </div>

    <form wire:submit.prevent="likesUser">
        <input  class="form-control" type="text" placeholder="name" wire:model="name">
        <input  class="form-control" type="email"  placeholder="email" wire:model="email">
        <input  class="form-control" type="number" placeholder="phone" wire:model="phone">
        <div  class="btn btn-primary form-control" type="submit">Submit</div>
    </form>

    <form wire:submit.prevent="likesUser">
        <input  class="form-control" type="number" placeholder="Company" wire:model="exp">
        <input  class="form-control" type="text" placeholder="designation" wire:model="designation">
        <input  class="form-control" type="text" placeholder="industry" wire:model="industry">
        <div  class="btn btn-primary form-control" type="submit">Submit</div>
    </form>
  @endif

  <!-- find clients -->
  @if($board == 'visitcard')
    <div class=" container small">
        <input type="checkbox" value="1" wire:model="lookingAddFromIMage" name="" id=""> Search
    </div>

    @if($lookingAddFromIMage == 1)
              <div class="container">
                  <div class="fs-md">Update Contact Card</div>
                  <form wire:submit.prevent="directbrandBcontact">
                      <input type="text" class="form-control" placeholder="organisation" wire:model.lazy="organisation">
                      <input type="text" class="form-control" placeholder="brand_name" wire:model.lazy="brand_name">
                      
                      <input type="text" class="form-control" placeholder="industry" wire:model.lazy="industry">
                      
                      <input type="text" class="form-control" placeholder="name" wire:model.lazy="name">
                      <input type="text" class="form-control" placeholder="designation" wire:model.lazy="designation">
                      <input type="number" class="form-control" placeholder="phone" wire:model.lazy="phone">
                      <input type="email" class="form-control" placeholder="email" wire:model.lazy="email">
                      
                      <button class="form-control  btn btn-primary" type="submit">Submit</button>
                  </form>
              </div>
    
              <div class="container my-5">
                  <div class="fs-md">
                  Contact details 
                  </div>
                      @foreach ($getContact as $franchise) 
                          <div class="">
                              <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col  pr-0">
                                  
                                      <div class="h4 fw-light mb-0"> 1 </div> 
                                      <div class="small text-muted">chk </div>
                                      
                                      <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                  </div>

                                  <div class="col-7  p-0">
                                  <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                      {{$franchise->name}} {{$franchise->designation}}</a></div>
                                  <div class="text-muted fs-sm text-start">
                                      {{$franchise->email}}
                                  </div>  
                                  <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                                  </div>

                                  <div class="col-3  p-0">
                                      {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                          <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                          
                                      {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                          <i class="bi bi-chevron-double-right"></i></a> 
                                          <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}

                                          <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="del({{$franchise->id}})">Delete</a>

                                      </div>
                              </div>
                          </div>
                      @endforeach
              </div>

    @else
        <div class="container mt-5">
          <input type="text" class="form-control" placeholder="search with ID" wire:model.lazy="searchBrandTerm">
          
          <div class="row mb-5 pb-2">
            @if(is_null($searchBrandTerm))

              <div class="container">
                Find Some Events
              </div>  

            @else

              @if($searchBrandcat->count() == 0)
                
                <div class="container">
                  <div class="fs-md">Update Contact Card</div>
                  <form wire:submit.prevent="directbrandBcontact">
                      <input type="text" class="form-control" placeholder="organisation" wire:model.lazy="organisation">
                      <input type="text" class="form-control" placeholder="brand_name" wire:model.lazy="brand_name">
                      
                      <input type="text" class="form-control" placeholder="industry" wire:model.lazy="industry">
                      
                      <input type="text" class="form-control" placeholder="name" wire:model.lazy="name">
                      <input type="text" class="form-control" placeholder="designation" wire:model.lazy="designation">
                      <input type="number" class="form-control" placeholder="phone" wire:model.lazy="phone">
                      <input type="email" class="form-control" placeholder="email" wire:model.lazy="email">
                      
                      <button class="form-control  btn btn-primary" type="submit">Submit</button>
                  </form>
                </div>
      
                <div class="container my-5">
                    <div class="fs-md">
                    Contact details 
                    </div>
                        @foreach ($getContact as $franchise) 
                            <div class="">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                    
                                        <div class="h4 fw-light mb-0"> 1 </div> 
                                        <div class="small text-muted">chk </div>
                                        
                                        <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    </div>

                                    <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                        {{$franchise->name}} {{$franchise->designation}}</a></div>
                                    <div class="text-muted fs-sm text-start">
                                        {{$franchise->email}}
                                    </div>  
                                    <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                                    </div>

                                    <div class="col-3  p-0">
                                        {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                            <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                            
                                        {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                            <i class="bi bi-chevron-double-right"></i></a> 
                                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}

                                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="del({{$franchise->id}})">Delete</a>

                                        </div>
                                </div>
                            </div>
                        @endforeach
                </div>
              @else
              @foreach ($searchBrandcat as $franchiseo) 
                    <div class="">
                      <div class="fw-light h5 lh-1">{{$franchiseo -> brand_name}}</div>
                      <div class="small text-muted fw-bold">{{$franchiseo -> organisation}}</div>
                        

                    @php
                      $findBcontact = DB::table('bcontacts')->where('brand_id', $franchiseo -> id)->get();
                    @endphp

                    @if($findBcontact->count() == 0)
                      <h1>Add Contact</h1>
                      <small> NO More Reference</small>
                    @else
                      @foreach($findBcontact as $franchise)
                          <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                              <div class="col  pr-0">
                              
                                  <div class="h4 fw-light mb-0"> 1 </div> 
                                  <div class="small text-muted">chk</div>
                                  
                                  <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                              </div>

                              <div class="col-7  p-0">
                                <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                    {{$franchise->name}}  <span class="badge badge-primary">{{$franchise->designation}}</span> </a></div>
                                <div class="text-muted fs-sm text-start">
                                    {{$franchise->email}}
                                </div>  
                                <div class="text-muted fs-sm text-start">{{$franchise->phone}}</div>
                              </div>

                              <div class="col-3  p-0">
                                  {{--<a class="card-img-top d-block overflow-hidden" href="#">
                                      <img src="{{url('exhibition/'.$franchise->image)}}" alt="{{Str::limit($franchise->eventname, 24)}}"></a>--}}
                                      
                                  {{-- <a class="round-circle" href="{{route('event.details',['slug' => $franchise->slug])}}">
                                      <i class="bi bi-chevron-double-right"></i></a> 
                                      <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})" >Claim</a> --}}

                                      <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="del({{$franchise->id}})">Delete</a>

                              </div>
                          </div>
                      @endforeach
                    @endif
                    </div>
                @endforeach
              @endif

            @endif
          </div>
        </div>
    @endif
  @endif

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        @if($board == 'dashboard')
          <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'profile'])}}">
            <span class="handheld-toolbar-icon">
            <i class="bi bi-profile"></i></span>
            <span class="handheld-toolbar-label">B-Profile</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'editprofile'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-meet"></i></span>
            <span class="handheld-toolbar-label">Meet-ups</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'profile'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-share"></i></span>
          <span class="handheld-toolbar-label">Share</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'profile'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-share"></i></span>
          <span class="handheld-toolbar-label">Membership</span>
          </a>

          <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class=" bi bi-menu"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
          </a>

         @else

          <a class="d-table-cell handheld-toolbar-item" href="{{route('user.claim')}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
          <span class="handheld-toolbar-label">Event</span></a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'profile'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-briefcase"></i></span>
          <span class="handheld-toolbar-label">Business</span></a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'profile'])}}">
            <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
          <span class="handheld-toolbar-label">Partner</span></a>

          <a class="d-table-cell handheld-toolbar-item" href="{{route('user.dashboard', ['board' => 'profile'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-menu"></i></span>
          <span class="handheld-toolbar-label">Menu</span></a>
        
        @endif
      </div>
    </div>

   <!-- for organiser -->
    <section class="d-none d-sm-block position-relative bg-position-top-center bg-repeat-0 pt-5 pb-5 pt-md-7 pb-md-9">
      <div class="container">
        <p class="text-center">Choose your Event</p>
        <small class="text-center">Find and Active your Event</small>
            <div class="container mt-5">
                        <!-- <input type="text" class="form-control" placeholder="search" > -->
                        <form action="" wire:submit.prevent="searchbackup">
                            <div class="input-group flex-nowrap">
                            <i class="bi bi-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                            <input type="text" class="form-control rounded-start"  name="search" placeholder="Find your Right Place" wire:model.lazy="searchTerm">
                            <button class="btn btn-primary" type="submit" name=""> Search</button>
                            </div>
                        </form>

                        <div class="row mb-5 pb-2">
                          @if(is_null($searchTerm))

                            <div class="container  small">
                              Expand your Business Reach with us.
                            </div>  

                          @else
                            @foreach ($searchCat as $franchise) 
                              <div class="container mt-2">
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

                                  <div class="col-4  p-0">
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

                                  <div class="col-3  p-0">
                                      <a href="#" wire:click.prevent="declaimer({{$franchise->id}})" class="btn btn-sm btn-primary">Choose</a>
                                  </div>

                                </div>
                              </div>
                            @endforeach
                          @endif
                        </div>
                    </div>
      </div>
    </section>

    

</main>

    @push('scripts')
          <script>
            var slider = tns({
              "container": '.my-sliderOffers',  
              "responsive": {
                "300": {
                  "items": 2,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": false,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                  "nav": false,
                  "fixedWidth": 190,
                },
                "500": {
                  "items": 3,
                  "controls": false,
                  "mouseDrag": true,
                  "autoplay": true,
                  "autoplayButtonOutput":false,
                  "autoplayHoverPause": true,
                }
              },
              
            });
          </script>
    @endpush