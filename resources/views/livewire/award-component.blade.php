@section('page_title', ('Review '.$franchise->eventname))
@section('page_description', ('Find Great Exhibition To Exhibit '.$franchise->shtdesc))
@section('page_keyword',  'The Exhibition Network, review, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in' .$franchise->city)

<main>

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
  
            <div class="container">

              <div class="col-lg-4 col-md-5">
                <h3 class="h4 mb-4">74 Reviews</h3>
                <div class="star-rating me-2">
                  <i class=" bi bi-star-filled fs-sm text-accent me-1"></i>
                  <i class=" bi bi-star-filled fs-sm text-accent me-1"></i>
                  <i class=" bi bi-star-filled fs-sm text-accent me-1"></i>
                  <i class=" bi bi-star-filled fs-sm text-accent me-1"></i>
                  <i class=" bi bi-star fs-sm text-muted me-1"></i>
                </div>
                <span class="d-inline-block align-middle">4.1 Overall rating</span>
                <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Exhibitor recommended this Exhibition</p>
              </div>

              <!-- <div class="row pt-2 pb-3">
                <div class="col-lg-8 col-md-7">
                      <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3">
                          <span class="d-inline-block align-middle text-muted">5</span>
                          <i class=" bi bi-star-filled fs-xs ms-1"></i>
                        </div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">43</span>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">16</span>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">9</span>
                      </div>
                      <div class="d-flex align-items-center mb-2">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">4</span>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                        <div class="w-100">
                          <div class="progress" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div><span class="text-muted ms-3">2</span>
                      </div>
                </div>
              </div> -->
            
              <hr class="mt-4 mb-3">

              <div class="row py-4">
                <!-- Reviews list-->
                <div class="col-md-7">
                  <div class="d-flex justify-content-end pb-4">
                    <div class="d-flex align-items-center flex-nowrap">
                      <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                      <select class="form-select form-select-sm" id="sort-reviews">
                        <option>Newest</option>
                        <option>Oldest</option>
                        <option>Popular</option>
                        <option>High rating</option>
                        <option>Low rating</option>
                      </select>
                    </div>
                  </div>

                  <!-- Review-->
                  <div class="product-review pb-4 mb-4 border-bottom">
                    <div class="d-flex mb-3">
                      <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="#" width="50" alt="Rafael Marquez">
                        <div class="ps-3">
                          <h6 class="fs-sm mb-0">Rafael Marquez</h6><span class="fs-ms text-muted">June 28, 2019</span>
                        </div>
                      </div>
                      <div>
                        <div class="star-rating">
                          <i class="star-rating-icon  bi bi-star-filled active"></i>
                          <i class="star-rating-icon  bi bi-star-filled active"></i>
                          <i class="star-rating-icon  bi bi-star-filled active"></i>
                          <i class="star-rating-icon  bi bi-star-filled active"></i>
                          <i class="star-rating-icon  bi bi-star"></i>
                        </div>
                        <div class="fs-ms text-muted">83% of users found this review helpful</div>
                      </div>
                    </div>
                    <p class="fs-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                    <ul class="list-unstyled fs-ms pt-1">
                      <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                      <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                    </ul>
                    <div class="text-nowrap">
                      <button class="btn-like" type="button">15</button>
                      <button class="btn-dislike" type="button">3</button>
                    </div>
                  </div>

                  <div class="text-center">
                    <button class="btn btn-outline-accent" type="button"><i class=" bi bi-reload me-2"></i>Load more reviews</button>
                  </div>
                </div>
                <!-- Leave review form-->
                
              </div>

              <div class="row">
                <div class="col-lg-8">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fs-md mb-0">Top reviews</h6>
                        <a class="nav-link-style fs-xs fw-normal text-primary" href="#"> 203K
                        reviews<i class="bi bi-chevron-right me-2"></i></a>
                  </div>
  
                  <div class="fs-xs fw-normal">Summary of 203K reviews.</div> 
                  <div class="d-flex  badgses">
                  
                          <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2911</span></div>
                          <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2912</span></div>
                          <div class="badge border-1 text-dark mr-1"> #blockbuster  <span class="">2913</span></div>
                  
                  </div>

                <div class="d-flex abced gx-2">
                
                {{-- @foreach($commentedRates  as $comment)
                  <div class=" border-1 d-flex align-items-end py-2 mx-2 border-bottom rounded shadow-sm">
                    <img class="rounded-circle" src="#" width="50" alt="">
  
                    <div class="ps-0">
                      <div class="d-flex justify-content-between align-items-end mb-2">
                        <p class="fs-md mb-0">{{$comment->hasttag}}</p>
                        <a class="nav-link-style fs-sm fw-medium" href="#">
                          <i class="bi bi-star me-2"></i>{{$comment->rate}}/10</a>
                      </div>

                      <h4 class="fs-md mb-3">{{$comment->opinion}}</h4>
                      
                      <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-ms text-muted">9 <i class=" bi bi-hand-thumbs-up align-middle me-2"></i>12 <i class=" bi bi-hand-thumbs-down align-middle me-2"></i></span>
                        <span class="fs-ms text-muted">{{Carbon\Carbon::parse ($comment->updated_at)->format('Y-m-d')}}<i class=" bi bi-share align-middle me-2"></i></span>
                      </div>
                    </div>
                  </div>
                @endforeach --}}
                </div>

                </div>
              </div>
            </div>

            <div class=" container col-lg-8 mt-3">
              <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="fs-md mb-0">Top reviews</h6>
                    <a class="nav-link-style fs-xs fw-normal text-primary" href="#"> {{count($eventrate)}}
                    reviews<i class="bi bi-chevron-right me-2"></i></a>
              </div>

                <div class="fs-xs fw-normal">Summary of {{count($eventrate)}} reviews.</div> 
                
                    <!-- <div class="d-flex badgese pb-2">
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Today  <span class="bg-"> 2935</span> </span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Tomorrow</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">This weekend</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Week</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Next weekend</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">This Month</span>
                        <span class="badge border border-1 text-right border-dark text-dark mr-1">Next Month</span>
                    </div> -->
              <!-- comment-->
              @foreach($eventrate as $busness)

               @php
                  $finduserdetails = DB::table('users')->where('id' , $busness->user_id)->get();
               @endphp

               @foreach($finduserdetails as $detailio)
                <div class=" border-0 d-flex align-items-start py-2 mt-2 border-bottom">
                    {{-- <img class="rounded-circle" src="{{Auth::user()->profile_photo_url}}" width="50" alt="{{$detailio->name}}"> --}}

                    <div class="ps-3">
                    <div class="d-flex justify-content-between align-items-end mb-2">
                        <p class="fs-md mb-0 text-mute">{{$detailio->name}}
                        {{-- src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}" --}}
                        </p>
                        <a class="nav-link-style fs-sm fw-medium" href="#">
                        <i class="bi bi-star me-2"></i>{{$busness->rate}}/10</a>
                    </div>
                    <h4 class="fs-md mb-3">{{$busness->opinion}}</h4>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- <span class="fs-ms text-muted">
                        9 <i class=" bi bi-hand-thumbs-up align-middle me-2"></i>
                        12 <i class=" bi bi-hand-thumbs-down align-middle me-2"></i>
                        </span> -->

                        <span class="fs-ms text-muted">{{ Carbon\Carbon::parse($busness->updated_at)->diffForHumans()}}
                        </span>
                    </div>
                    
                    <!-- comment  insdie comment reply-->
                    {{--<div class="d-flex align-items-start border-top pt-4 mt-4"><img class="rounded-circle" src="#" width="50" alt="Sara Palson">
                        <div class="ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="fs-md mb-0">Sara Palson</h6>
                        </div>
                        <p class="fs-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 13, 2019</span>
                        </div>
                    </div>--}}

                    </div>
                </div>
                @endforeach

              @endforeach

              <!-- Post comment form
              <div class="card border-0 px-0 shadow my-2">
                <div class="card-body">
                  <div class="d-flex align-items-start"><img class="rounded-circle border p-2" src="#" width="50" alt="Createx Studio">
                    <form class="needs-validation w-100 ms-3" novalidate="">
                      <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Write comment..." required=""></textarea>
                        <div class="invalid-feedback">Please write your comment.</div>
                      </div>
                      <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                    </form>
                  </div>
                </div>
              </div>-->
            </div>

            <div class="handheld-toolbar">
              <div class="d-table table-layout-fixed w-100">
                <a class="d-table-cell handheld-toolbar-item" href="#">
                  <span class="handheld-toolbar-icon">
                  <i class="ci-filter-alt"></i></span>
                  <span class="handheld-toolbar-label"> Get Certified</span>
                </a>

                <a class="d-table-cell handheld-toolbar-item" href="#">
                  <span class="handheld-toolbar-icon">
                  <i class="ci-filter-alt"></i></span>
                  <span class="handheld-toolbar-label"> Get Certified</span>
                </a>
              
                

                <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
                  <span class="handheld-toolbar-label">Menu</span>
                </a>
              </div>
            </div>
</main>