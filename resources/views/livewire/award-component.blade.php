@section('page_title', ('Review '.$getevent->eventname))
@section('page_description', ('Find Great Exhibition To Exhibit '.$getevent->shtdesc))
@section('page_keyword',  'The Exhibition Network, review, Exhibition, World largest business event platform, find all upcoming events, business conferences, exhibition 2023, trade shows, global seminars, networking meets and workshops. Browse and connect with visitors attending, participating exhibitors and view profiles of speakers and organizers. Manage, sell event tickets and promote your event on exhbition.org.in' .$getevent->city)

<main>
   
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
              
                

                <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                  <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
                  <span class="handheld-toolbar-label">Menu</span>
                </a>
              </div>
            </div>
</main>