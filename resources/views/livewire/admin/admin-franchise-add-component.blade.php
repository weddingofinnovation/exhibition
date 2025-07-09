    @if($board == 'email') 
        <!-- email -->
        <div class="container-fluid">
            <div class="row">

                <!-- Search bar -->
                <div class="col-md-8">
                    <div class="input-group my-3">
                        <input type="text" class="form-control" placeholder="Search..." wire:model.lazy="searchTerm">
                        <button class="btn btn-primary">Search</button>
                    </div>

                    <!-- Search Results -->
                    @if(empty($searchTerm))
                        <div class="text-center text-muted mb-3">Find Some Events</div>
                        
                        @else
                        {{$searchCat}}
                            <ul class="list-group">
                                @foreach($searchCat as $franchise)
                                    <li class="list-group-item p-2">
                                        <div class="row text-center gx-0">
                                            <div class="col">
                                                @if(Carbon\Carbon::parse($franchise->startdate)->format('M') != Carbon\Carbon::parse($franchise->enddate)->format('M'))
                                                    <div class="h4 fw-light mb-0">{{ Carbon\Carbon::parse($franchise->startdate)->format('d') }}</div>
                                                    <div class="small text-muted">{{ Carbon\Carbon::parse($franchise->startdate)->format('M y') }}</div>
                                                @else
                                                    <div class="h4 fw-light mb-0">{{ Carbon\Carbon::parse($franchise->startdate)->format('d') }}</div>
                                                    <div class="small text-muted">{{ Carbon\Carbon::parse($franchise->startdate)->format('M y') }}</div>
                                                @endif
                                                <div class="round-circle">{{ $franchise->id }}</div>
                                            </div>

                                            <div class="col-7 p-0 text-start">
                                                <div class="fs-md fw-normal">
                                                    <a class="text-dark" href="{{ route('adminevent.detail', ['slug' => $franchise->slug]) }}">
                                                        {{ ucwords(Str::limit($franchise->eventname, 24)) }}
                                                    </a>
                                                </div>
                                                <div class="text-muted fs-sm">
                                                    @if(Carbon\Carbon::parse($franchise->startdate)->format('M') != Carbon\Carbon::parse($franchise->enddate)->format('M'))
                                                        {{ Carbon\Carbon::parse($franchise->startdate)->format('D, d M') }} - {{ Carbon\Carbon::parse($franchise->enddate)->format('D, d M') }}
                                                    @else
                                                        {{ Carbon\Carbon::parse($franchise->startdate)->format('D, d') }} - {{ Carbon\Carbon::parse($franchise->enddate)->format('D, d M') }}
                                                    @endif
                                                </div>
                                                <div class="text-muted fs-sm">{{ $franchise->venue }}, {{ $franchise->city }}</div>
                                            </div>

                                            <div class="col-3 p-0 d-flex flex-column justify-content-center">
                                                <a class="text-danger mb-1" href="#"
                                                onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"
                                                wire:click.prevent="eventdelete({{ $franchise->id }})">
                                                    <i class="bi bi-x me-2"></i> Delete
                                                </a>
                                                <a class="btn btn-sm btn-primary" href="#"
                                                wire:click.prevent="updateInspectionStatus({{ $franchise->id }}, '1')">
                                                    Visit
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        
                    @endif

                </div>

                <!-- Sidebar for Desktop -->
                <div class="col-md-4 d-none d-md-block border-start">
                    @if($selectedItem)
                        <h5 class="mt-3">Selected: {{ $selectedItem->name }}</h5>
                        <input type="email" class="form-control my-2" wire:model="email" placeholder="Enter Email">
                        <button class="btn btn-success w-100" wire:click="sendEmail">Send to Email</button>
                    @endif
                </div>
            </div>
        </div>

        <!-- Mobile Footer Button -->
        <div class="d-md-none fixed-bottom bg-light p-2 border-top" style="z-index: 1050;">
            @if($selectedItem)
                <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#emailModal">
                Send "{{ $selectedItem->name }}" to Email
                </button>
            @endif
        </div>

        <!-- Mobile Modal -->
        <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send to Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="email" class="form-control mb-2" wire:model="email" placeholder="Enter Email">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" wire:click="sendEmail" data-bs-dismiss="modal">Send</button>
                </div>
                </div>
            </div>
        </div>

    @else

        <div class="container py-4">
            <div class="row">

                {{-- Left (Form) --}}
                <div class="col-md-8 border-end">
                    <h5 class="mb-3">Share Your Comment</h5>

                    <form wire:submit.prevent="addcomm">
                        <!-- Hashtag Section -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Use hashtags to describe your experience</label>
                            <div class="d-flex flex-wrap">
                                @foreach ($hashtag as $hhtag)
                                    <div class="form-check me-3 mb-2">
                                        <input 
                                            type="checkbox" 
                                            class="form-check-input" 
                                            id="tag-{{ $hhtag->id }}" 
                                            value="{{ $hhtag->id }}" 
                                            wire:model="hasttag"
                                        >
                                        <label class="form-check-label" for="tag-{{ $hhtag->id }}">
                                            #{{ $hhtag->hastag }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Text Area -->
                        <div class="mb-3">
                            <label for="opinion" class="form-label">Write a comment <span class="text-muted">(optional)</span></label>
                            <textarea 
                                class="form-control" 
                                id="opinion" 
                                rows="4" 
                                wire:model.lazy="comment" 
                                maxlength="100"
                            ></textarea>
                            <div class="form-text">Max 100 characters.</div>
                            @error('comment')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100 w-md-auto mt-3">Submit</button>
                    </form>

                    {{-- Mobile Toggle Button for Previous Comments --}}
                    <div class="d-block d-md-none text-end mt-4">
                        <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#mobilePreviousComments">
                            Show Previous Comments
                        </button>
                    </div>
                </div>

            @php
                $bladepreviousComments = DB::table('business_calledos')->where('lead_id', $this->lead_id)->orderBy('created_at', 'desc')->get();
                
            @endphp
                
                
                {{-- Right (Previous Comments) - Desktop View --}}
                <div class="col-md-4 ps-md-4 d-none d-md-block">
                    <h6 class="mb-3">Previous Comments {{$bladepreviousComments->count()}}</h6>

                    @if($bladepreviousComments && $bladepreviousComments->count())
                        <div class="list-group" style="max-height: 400px; overflow-y: auto;">
                            @foreach($bladepreviousComments as $commen)
                                <div class="list-group-item small">
                                    <div>{{ $commen->comment ?? 'No written feedback' }}</div>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($commen->created_at)->diffForHumans() }}</small>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">No previous comments yet.</p>
                    @endif
                </div>

                {{-- Mobile Collapsible Comments --}}
                <div class="col-12 collapse mt-3 d-md-none" id="mobilePreviousComments">
                    <h6 class="mb-3">Previous Comments</h6>
                    @if($bladepreviousComments && $bladepreviousComments->count())
                        <div class="list-group">
                            @foreach($bladepreviousComments as $commen)
                                <div class="list-group-item small">
                                    <div>{{ $commen->comment ?: 'No written feedback' }}</div>
                                    <small class="text-muted">{{ \Carbon\Carbon::parse($commen->created_at)->diffForHumans() }}</small>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">No previous comments yet.</p>
                    @endif
                </div>

            </div>
        </div>
    @endif


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
                                      
                                    <a class="card-img-top d-block overflow-hidden" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$franchise->id}})"> 
                                    <i class="bi bi-x me-2"></i></a>
                                    
                                    <a class="btn btn-sm btn-primary" href="#" wire:click.prevent="updateInspectionStatus({{$franchise->id}}, '1')">Visit</a>
                                    </div>
                                  </div>
                                </div>
                              @endforeach
                            @endif
                          </div>