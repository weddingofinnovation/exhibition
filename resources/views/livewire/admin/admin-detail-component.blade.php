@section('page_title',  ($this->slug))

<main>
        @php
            $businessOrder = DB::table('leads')->where('event_id', $evento->id)->orderBy('updated_at','DESC')->get();
        @endphp

        <div class="d-lg-none">
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                
              <div class="mb-4 mb-lg-5">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs nav-fill mb-0" role="tablist">
                    <li class="nav-item border-bottom">
                      <a class="nav-link px-1 fs-sm" href="#details" data-bs-toggle="tab" role="tab">Business {{$businessOrder->count()}}</a>
                    </li>
                    <li class="nav-item border-bottom">
                      <a class="nav-link px-1 fs-sm active" href="#reviews" data-bs-toggle="tab" role="tab">Plan your Event</a>
                    </li>
                    <li class="nav-item border-bottom">
                      <a class="nav-link px-1 fs-sm" href="#program" data-bs-toggle="tab" role="tab">Program</a>
                    </li>
                  </ul>

                  <div class="tab-content pt-1">                
                      
                      <!-- Reviews tab-->
                      <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                         
                        {{--organiser--}}
                        <div class=" my-1">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Org</div> 
                                  
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                  @if(is_null($evento->organizer))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">
                                      {{$evento->organizer}}
                                    </div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organizer))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'organiser' ])}}" class="btn btn-primary btn-sm">  <i class="bi bi-plus"></i></a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'organiser'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>
                            
                        <div class=" my-1">
                            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                  <a class ="text-dark" href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}">
                                    @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                      <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                                      @else
                                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                      <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                                    @endif 
                                    <div class="round-circle">{{$evento->edition}}</div>
                                    <div class="round-circle">{{Carbon\Carbon::parse ($evento->startdate)->format('Y')}}</div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                  </a>
                                </div>

                                <div class="col-7  p-0">
                                  <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}">
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
                                    @if(is_null($evento->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'image' ])}}">Add</a>
                                      @else
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'image' ])}}">
                                      <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!--category-->
                        <div class=" my-1">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                  
                                    <div class="h4 fw-light mb-0"> {{$evento->id}}</div> 
                                    <div class="small text-muted">ID</div>
                                    <div class="round-circle">{{$evento->level}}</div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                  <div class="fs-md fw-normal text-start">
                                    @foreach($category as $cat)
                                        {{$cat->expo->tag}}
                                    @endforeach
                                  </div>
                                  <div class="text-muted fs-sm text-start">Category</div>
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($category))
                                    <a  href="{{route('admin.editcategories',['event_id' => $evento->id])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a  href="{{route('admin.editcategories',['event_id' => $evento->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        <div class="">
                          <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                          <div class="col-8 p-0">
                            <div class="fs-md fw-normal text-start">

                              <a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                                Last update: <br class="text-primary">{{$evento->updated_at}}</a>
                            </div>
                            
                                @if(empty($evento->created_at))
                                <a href="#" wire:click.prevent="updateCreate({{$evento->id}})" class="btn btn-primary btn-sm">Create</a>
                                @else
                                  <div class="text-muted fs-sm text-start">
                                    
                                  <span class="fs-xs"> Created at:</span> 
                                  <br>{{$evento->created_at}}</div>
                                @endif
                            
                            <div class="text-muted fs-xs text-start"> Edition: {{$evento->edition}} </div>
                            <div class="text-muted fs-xs text-start"> Views: {{$evento->view_count}} </div>

                            <div class="text-muted fs-xs text-start">latestupdat : {{$evento->latestupdat}}</div>
                          </div>

                          <div class="col-4 p-0">
                              @if(is_null($evento->admstatus))
                                  <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'1')" class="btn btn-primary btn-sm">Awaiting</a>
                              @elseif($evento->admstatus == 1)
                                  <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'0')" class="btn btn-primary btn-sm">Deactive</a>
                              @else
                                  <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'1')" class="btn btn-primary btn-sm">Active</a>
                              @endif

                              <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'postpone')" class="btn btn-primary btn-sm">Postpone</a>
                              <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'1')" class="btn btn-primary btn-sm">DePostpone</a>

                              @if($evento->latestupdat == 'unverfied')
                                <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'verfied')" class="btn btn-primary btn-sm">Verfied</a>
                              @elseif($evento->latestupdat == 'verfied')
                                <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'unverfied')" class="btn btn-primary btn-sm">un-Verified</a>
                              @else
                                <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'verfied')" class="btn btn-primary btn-sm">Verfied</a>
                              @endif
                              {{-- @if(is_null($evento->latestupdat))
                                  <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'active')" class="btn btn-primary btn-sm">Postpone</a>
                                @elseif($evento->latestupdat == 'cancel')
                                  <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'active')" class="btn btn-primary btn-sm">Postpone</a>
                                @elseif($evento->latestupdat == 'postpone')
                                  <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'postpone')" class="btn btn-primary btn-sm">Cancel</a>
                                @elseif($evento->latestupdat == 'cancel' || 'postpone')
                                  <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'postpone')" class="btn btn-primary btn-sm">Active</a>
                              @endif --}}

                              <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="Upgrade({{$evento->id}})"> upgrade</a>
                              
                              <small>Active BusinessModel</small>
                              @if(is_null($evento->businessrevenue))
                                <a href="#" wire:click.prevent="updatebusinessrevenue({{$evento->id}},'exhibitor')" class="btn btn-primary btn-sm">Exhibitor</a>
                                @elseif($evento->businessrevenue == 'exhibitor')
                                <a href="#" wire:click.prevent="updatebusinessrevenue({{$evento->id}},'visitor')" class="btn btn-primary btn-sm">Visitor</a>
                                @else
                                <a href="#" wire:click.prevent="updatebusinessrevenue({{$evento->id}},'no-more')" class="btn btn-primary btn-sm">no more</a>
                              @endif
                          </div>
                        </div>
                        </div>

                        <div class=""> 
                            <small>Post on Linkedin</small>
                          
                            <div class="input-group my-2">          
                              <a  class = "btn btn-sm btn-primary" href="#" wire:click.prevent="postToLinkedIn({{$evento->id}})">Post to LinkedIn</a>
                            </div>
                          
                        </div>

                        <div class=""> 
                            <small>CSV upload exhibitor</small>
                          
                            <form wire:submit.prevent="upload">
                              <div class="input-group my-2">
                                        <input type="file" class="form-control" wire:model.lazy="csvFile" placeholder="upload CSV" accept=".csv">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          
                        </div>

                        <div class=""> 
                          <div class="fs-md fw-light mb-0"> {{$EventCountRate->count()}}  <small> Reviews</small></div> 
                          <form wire:submit.prevent="withoutHashtag">
                            <div class="input-group my-2">
                                      <input type="number" class="form-control" wire:model.lazy="howMany" placeholder="Add Comment Count">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                        </div>
                        
                        {{--tag--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Tag</div> 
                                    
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                @if(is_null($evento->tagline))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">{{$evento->tagline}}</div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->tagline))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'tag'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'tag'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--facts--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Facts</div> 
                                    
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                @if(is_null($evento->tagline))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">{{$evento->tagline}}</div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->tagline))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'facts'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'facts'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--Short--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Sht</div> 
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                  @if(is_null($evento->shtdesc))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-xs fw-normal text-start">{{Str::limit($evento->shtdesc,170)}}</div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->shtdesc))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'short'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'short'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--Long--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Lng</div> 
                                  
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                  @if(is_null($evento->desc))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">{{Str::limit($evento->desc,170)}}</div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->desc))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'desc' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'desc'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                            
                        </div>
                        
                        {{--webo--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Web</div> 
                                    <div class="round-circle" ></div> 
                                </div>

                                <div class="col-7  p-0"> 
                                  @if(is_null($evento->link))
                                    <div class="text-muted fs-sm text-start">Website</div>
                                  @else
                                    <div class="fs-md fw-normal text-start">
                                    <a class="btn btn-primary btn-sm" href="{{$evento->link}}">Web link</a></div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->link))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'webo' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'webo' ])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif

                                </div>
                            </div>

                          
                        </div>

                        {{--participants--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class = "h4 fw-light mb-0">{{$participants->count()}}</div>
                                    <div class = "round-circle">Ptr</div> 
                                </div>

                                <a class="col-7 p-0" href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addParticipants' ])}}"></a>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addParticipants'])}}" class="btn btn-primary btn-sm">Add</a>
                                    @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'participantsdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--speaker--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$speaker->count()}}</div> 
                                  
                                    <div class="round-circle">Spk</div> 
                                    
                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSpeaker' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'speakerdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--pavillion--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$pavillion->count()}}</div> 
                                  
                                    <div class="round-circle">Pav</div> 
                                    
                                </div>

                                <div class="col-7  p-0">
                                  
                                </div>

                                <div class="col-3 p-0">
                                  @if(count($pavillion) > 0)
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--sponsership--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
                                  
                                    <div class="round-circle" >Spo</div> 
                                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--sponsership--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
                                  
                                    <div class="round-circle" >Spo</div> 
                                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--magazine--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
                                  
                                    <div class="round-circle" >Spo</div> 
                                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--membership plans--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
                                  
                                    <div class="round-circle" >Spo</div> 
                                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--hastags--}}
                        <div class=" my-3">
                          <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                              <div class="col  pr-0">
                                  <div class="h4 fw-light mb-0">{{$hastag->count()}}</div> 
                                  
                                  <div class="round-circle" >#</div> 
                                  
                              </div>

                              <div class="col-7  p-0">
                                
                              </div>

                              <div class="col-3 p-0">
                                  @if(is_null($hastag))
                                  <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'add-hastag' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                  <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'add-hastag'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                              </div>
                          </div>
                        </div>

                        {{--basic--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">BSC</div> 
                                  
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start">{{$evento->eventname}}</div>
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->edition))
                                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        @if(is_null($evento->edition))
                            {{--ticket--}}
                            <div class=" my-3">
                              <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        <div class="h4 fw-light mb-0"></div> 
                                      
                                        <a class="round-circle" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}" >Ticket</a> 
                                        
                                    </div>

                                    <a class="col-7  p-0" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                      @if(is_null($evento->edition))
                                        <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                      @else
                                        <div class="fs-md fw-normal text-start">
                                          
                                        </div>
                                      @endif
                                    </a>

                                    <div class="col-3 p-0">
                                      @if(is_null($evento->edition))
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Add</a>
                                      @else
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Edit</a>
                                      @endif
                                    </div>
                                </div>
                              </a>
                            </div>
                          @elseif($evento->eventype == 'award')
                            {{--ticket--}}
                            <div class=" my-3">
                              <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        <div class="h4 fw-light mb-0"></div> 
                                      
                                        <a class="round-circle" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}" >Nomination Category</a> 
                                        
                                    </div>

                                    <a class="col-7  p-0" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                      @if(is_null($evento->edition))
                                        <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                      @else
                                        <div class="fs-md fw-normal text-start">
                                          
                                        </div>
                                      @endif
                                    </a>

                                    <div class="col-3 p-0">
                                      @if(is_null($evento->edition))
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-nomination'])}}" class="btn btn-primary btn-sm">Add</a>
                                      @else
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-nomination'])}}" class="btn btn-primary btn-sm">Edit</a>
                                      @endif
                                    </div>
                                </div>
                              </a>
                            </div>
                          @else
                            <div class=" my-3">
                              <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        <div class="h4 fw-light mb-0"></div> 
                                      
                                        <a class="round-circle" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}" >Ticket</a> 
                                        
                                    </div>

                                    <a class="col-7  p-0" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                      @if(is_null($evento->edition))
                                        <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                      @else
                                        <div class="fs-md fw-normal text-start">
                                          
                                        </div>
                                      @endif
                                    </a>

                                    <div class="col-3 p-0">
                                      @if(is_null($evento->edition))
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Add</a>
                                      @else
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Edit</a>
                                      @endif
                                    </div>
                                </div>
                              </a>
                            </div>
                        @endif

                        <div class="">
                          <div class="input-group my-2">
                            <input type="text" class="form-control" placeholder="create a FAQ">
                            <!-- <a href="#" class="btn btn-primary" wire:click.prevent="updateIDstatus({{$evento->id}})">Create FAQ</a> -->
                            <a href="{{route('admin.questionadd',['eventid' => $evento->id])}}"  class="btn btn-primary btn-sm">Create a FAQ</a>
                          </div>
                        </div>

                        <!-- Timmings
                        free or paid entry
                        public or professionals
                        industries and products
                        theme or focus?
                        who can attend?
                        exhibition Timmings?
                        can i register on site?
                        is parking availabe
                        are there food and beverage options avaibale on site
                        is there venue wheelchair accessible
                        are there cloakroom or storage facili  -->

                        <div class="">
                          <!-- create a unique ID
                          <a href="#" class="btn btn-primary" wire:click.prevent="updateIDstatus({{$evento->id}})">ID</a> -->

                          <div class="input-group my-2">
                            <input type="text" class="form-control" placeholder="create a unique ID">
                            <a href="#" class="btn btn-primary" wire:click.prevent="updateIDstatus({{$evento->id}})">ID</a>
                          </div>
                          
                        </div>
                      
                        
                        <div class=" mb-5">
                          {{$evento->reference}}
                        </div>
                        
                        {{-- Creating review--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="fs-md fw-light mb-0"> {{$EventCountRate->count()}}  <small> Reviews</small></div> 
                                </div>
                                <form wire:submit.prevent="tryingfaker">
                                        <div class="input-group my-2">
                                          <input type="text" class="form-control" wire:model.lazy="howMany">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>

                      </div>

                      <!-- Product details tab-->
                      <div class="tab-pane fade" id="details" role="tabpanel">
                   

                          @foreach ($businessOrder as $eventol)
                            <div class="my-1">
                              <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col-2  p-0">
                                      @if($eventol->event_id == 'null' )
                                          {{$eventol->type}}
                                      @else
                                          @php
                                              $eventdetails = DB::table('events')->where('id', $eventol->event_id)->get();
                                          @endphp

                                          @foreach($eventdetails as $evet)
                                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evet->slug])}}">
                                                <img src="{{url('public/assets/image/exhibition/'.$evet->image)}}" alt="{{Str::limit($evet->eventname, 24)}}">
                                            </a>
                                          @endforeach
                                      @endif
                                  </div>

                                  <div class="col-7  p-0">
                                    <div class="fs-sm fw-normal text-start"><a class="text-dark" href="">{{$eventol->name}}</a><span class="fs-xs bg-success">{{ Carbon\Carbon::parse($eventol->created_at)->format('D d M  H:m')}}</span></div>
                                    <div class="fs-sm fw-normal text-start">
                                      <a class="text-dark" href="" onclick="makeCall('{{$eventol->phone}}')">{{$eventol->phone}}</a> <span class="fs-xs bg-danger text-light">{{$eventol->type}}</span>
                                      <a class="text-dark" href="" onclick="copyToclipboard('{{$eventol->phone}}')"><i class="bi bi-plus"></i></a>
                                    </div>
                                    <div class="text-muted fs-xs text-start">{{$eventol->email}}</div>
                                  </div>

                                  <div class="col-3  p-0">
                                          {{--@if(is_null($eventol->image))
                                            <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine',['slug' => $eventol->slug, 'formm' => 'image' ])}}">Add</a>
                                              @else
                                            <a class="card-img-top d-block overflow-hidden" href="">
                                            <img src="{{url('public/assets/image/exhibition/'.$eventol->image)}}" alt="{{Str::limit($eventol->name, 24)}}"></a>
                                          @endif--}}
                                    
                                        @php
                                          $businesslead = DB::table('business_calledos')->where('lead_id', $eventol->id)->latest()->get();
                                          $resulto = $businesslead->pluck('response')->first();
                                        @endphp

                                        
                                      @if(($businesslead->count()) < '1')
                                        <a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">New</a>
                                      @else
                                        <a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{$resulto}}</a>
                                      @endif
                                      
                                        <ul class="dropdown-menu" width="auto">
                                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'interest')">Email</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'interest')">Interest</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'check')">Check</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'callback')">callback</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'ringing')">Ringing</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'Not')">Not</a></li>
                                          <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="DeleteCallingStatus({{$eventol->id}})">Delete</a></li>
                                        </ul>

                                  </div>
                              </div>
                            </div>
                          @endforeach
                      </div>

                      <div class="tab-pane fade" id="program" role="tabpanel">
                   
                        {{--doubling--}}

                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0"></div> 
                                  
                                    <div class="round-circle" >Dbl</div> 
                                    
                                </div>

                                <div class="col-7  p-0">
                                  {{-- @if(is_null($evento->edition))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">
                                      
                                    </div>
                                  @endif--}}
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->edition))
                                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'doubling'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'doubling'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                         
                      </div>

                  </div>
              </div>

              </div>
            </div>
          </div>
        </div>

        <div class="container">
            <div class="col-12">
                
              <div class="mb-4 mb-lg-5">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs nav-fill mb-0" role="tablist">
                    <li class="nav-item border-bottom">
                      <a class="nav-link px-1 fs-sm" href="#details" data-bs-toggle="tab" role="tab">Business {{$businessOrder->count()}}</a>
                    </li>
                    <li class="nav-item border-bottom">
                      <a class="nav-link px-1 fs-sm active" href="#reviews" data-bs-toggle="tab" role="tab">Plan your Event</a>
                    </li>
                    <li class="nav-item border-bottom">
                      <a class="nav-link px-1 fs-sm" href="#program" data-bs-toggle="tab" role="tab">Program</a>
                    </li>
                  </ul>

                  <div class="tab-content pt-1">                
                      
                      <!-- Reviews tab-->
                      <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                         
                        {{--organiser--}}
                        <div class=" my-1">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Org</div> 
                                  
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                  @if(is_null($evento->organizer))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">
                                      {{$evento->organizer}}
                                    </div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organizer))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'organiser' ])}}" class="btn btn-primary btn-sm">  <i class="bi bi-plus"></i></a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'organiser'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>
                            
                        <div class=" my-1">
                            <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                  <a class ="text-dark" href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}">
                                    @if(Carbon\Carbon::parse ($evento->startdate)->format('M') != Carbon\Carbon::parse ($evento->enddate)->format('M'))
                                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                      <div class="small text-muted">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>
                                      @else
                                      <div class="h4 fw-light mb-0"> {{Carbon\Carbon::parse ($evento->startdate)->format('d')}}</div> 
                                      <div class="small text-muted text-capitalize">{{Carbon\Carbon::parse ($evento->startdate)->format('M')}} </div>

                                    @endif 
                                    <div class="round-circle">{{$evento->edition}}</div>
                                    <div class="round-circle">{{Carbon\Carbon::parse ($evento->startdate)->format('Y')}}</div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                  </a>
                                </div>

                                <div class="col-7  p-0">
                                  <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}">
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
                                    @if(is_null($evento->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'image' ])}}">Add</a>
                                      @else
                                      <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'image' ])}}">
                                      <img src="{{url('public/assets/image/exhibition/'.$evento->image)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!--category-->
                        <div class=" my-1">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                  
                                    <div class="h4 fw-light mb-0"> {{$evento->id}}</div> 
                                    <div class="small text-muted">ID</div>
                                    <div class="round-circle">{{$evento->level}}</div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                  <div class="fs-md fw-normal text-start">
                                    @foreach($category as $cat)
                                        {{$cat->expo->tag}}
                                    @endforeach
                                  </div>
                                  <div class="text-muted fs-sm text-start">Category</div>
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($category))
                                    <a  href="{{route('admin.editcategories',['event_id' => $evento->id])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a  href="{{route('admin.editcategories',['event_id' => $evento->id])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        <div class="">
                          <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                          <div class="col-8 p-0">
                            <div class="fs-md fw-normal text-start">

                              <a class="text-dark" href="{{route('event.details',['slug' => $evento->slug])}}">
                                Last update: <br class="text-primary">{{$evento->updated_at}}</a>
                            </div>
                            
                                @if(empty($evento->created_at))
                                <a href="#" wire:click.prevent="updateCreate({{$evento->id}})" class="btn btn-primary btn-sm">Create</a>
                                @else
                                  <div class="text-muted fs-sm text-start">
                                    
                                  <span class="fs-xs"> Created at:</span> 
                                  <br>{{$evento->created_at}}</div>
                                @endif
                            
                            <div class="text-muted fs-xs text-start"> Edition: {{$evento->edition}} </div>
                            <div class="text-muted fs-xs text-start"> Views: {{$evento->view_count}} </div>

                            <div class="text-muted fs-xs text-start">latestupdat : {{$evento->latestupdat}}</div>
                          </div>

                          <div class="col-4 p-0">
                              @if(is_null($evento->admstatus))
                                  <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'1')" class="btn btn-primary btn-sm">Awaiting</a>
                              @elseif($evento->admstatus == 1)
                                  <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'0')" class="btn btn-primary btn-sm">Deactive</a>
                              @else
                                  <a href="#" wire:click.prevent="updateEventstatus({{$evento->id}},'1')" class="btn btn-primary btn-sm">Active</a>
                              @endif

                              <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'postpone')" class="btn btn-primary btn-sm">Postpone</a>
                              <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'1')" class="btn btn-primary btn-sm">DePostpone</a>

                              @if($evento->latestupdat == 'unverfied')
                                <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'verfied')" class="btn btn-primary btn-sm">Verfied</a>
                              @elseif($evento->latestupdat == 'verfied')
                                <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'unverfied')" class="btn btn-primary btn-sm">un-Verified</a>
                              @else
                                <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'verfied')" class="btn btn-primary btn-sm">Verfied</a>
                              @endif
                              {{-- @if(is_null($evento->latestupdat))
                                  <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'active')" class="btn btn-primary btn-sm">Postpone</a>
                                @elseif($evento->latestupdat == 'cancel')
                                  <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'active')" class="btn btn-primary btn-sm">Postpone</a>
                                @elseif($evento->latestupdat == 'postpone')
                                  <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'postpone')" class="btn btn-primary btn-sm">Cancel</a>
                                @elseif($evento->latestupdat == 'cancel' || 'postpone')
                                  <a href="#" wire:click.prevent="updateEventPostpone({{$evento->id}},'postpone')" class="btn btn-primary btn-sm">Active</a>
                              @endif --}}

                              <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="Upgrade({{$evento->id}})"> upgrade</a>
                              
                              <small>Active BusinessModel</small>
                              @if(is_null($evento->businessrevenue))
                                <a href="#" wire:click.prevent="updatebusinessrevenue({{$evento->id}},'exhibitor')" class="btn btn-primary btn-sm">Exhibitor</a>
                                @elseif($evento->businessrevenue == 'exhibitor')
                                <a href="#" wire:click.prevent="updatebusinessrevenue({{$evento->id}},'visitor')" class="btn btn-primary btn-sm">Visitor</a>
                                @else
                                <a href="#" wire:click.prevent="updatebusinessrevenue({{$evento->id}},'no-more')" class="btn btn-primary btn-sm">no more</a>
                              @endif
                          </div>
                        </div>
                        </div>

                        <div class=""> 
                            <small>Post on Linkedin</small>
                          
                            <div class="input-group my-2">          
                              <a  class = "btn btn-sm btn-primary" href="#" wire:click.prevent="postToLinkedIn({{$evento->id}})">Post to LinkedIn</a>
                            </div>
                          
                        </div>

                        <div class=""> 
                            <small>CSV upload exhibitor</small>
                          
                            <form wire:submit.prevent="upload">
                              <div class="input-group my-2">
                                        <input type="file" class="form-control" wire:model.lazy="csvFile" placeholder="upload CSV" accept=".csv">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          
                        </div>

                        <div class=""> 
                          <div class="fs-md fw-light mb-0"> {{$EventCountRate->count()}}  <small> Reviews</small></div> 
                          <form wire:submit.prevent="withoutHashtag">
                            <div class="input-group my-2">
                                      <input type="number" class="form-control" wire:model.lazy="howMany" placeholder="Add Comment Count">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                        </div>
                        
                        {{--tag--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Tag</div> 
                                    
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                @if(is_null($evento->tagline))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">{{$evento->tagline}}</div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->tagline))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'tag'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'tag'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--facts--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Facts</div> 
                                    
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                @if(is_null($evento->tagline))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">{{$evento->tagline}}</div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->tagline))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'facts'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'facts'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--Short--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Sht</div> 
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                  @if(is_null($evento->shtdesc))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-xs fw-normal text-start">{{Str::limit($evento->shtdesc,170)}}</div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->shtdesc))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'short'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'short'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--Long--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Lng</div> 
                                  
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                  @if(is_null($evento->desc))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">{{Str::limit($evento->desc,170)}}</div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->desc))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'desc' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'desc'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                            
                        </div>
                        
                        {{--webo--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">Web</div> 
                                    <div class="round-circle" ></div> 
                                </div>

                                <div class="col-7  p-0"> 
                                  @if(is_null($evento->link))
                                    <div class="text-muted fs-sm text-start">Website</div>
                                  @else
                                    <div class="fs-md fw-normal text-start">
                                    <a class="btn btn-primary btn-sm" href="{{$evento->link}}">Web link</a></div>
                                  @endif
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->link))
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'webo' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'webo' ])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif

                                </div>
                            </div>

                          
                        </div>

                        {{--participants--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class = "h4 fw-light mb-0">{{$participants->count()}}</div>
                                    <div class = "round-circle">Ptr</div> 
                                </div>

                                <a class="col-7 p-0" href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addParticipants' ])}}"></a>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addParticipants'])}}" class="btn btn-primary btn-sm">Add</a>
                                    @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'participantsdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--speaker--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$speaker->count()}}</div> 
                                  
                                    <div class="round-circle">Spk</div> 
                                    
                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSpeaker' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'speakerdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--pavillion--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$pavillion->count()}}</div> 
                                  
                                    <div class="round-circle">Pav</div> 
                                    
                                </div>

                                <div class="col-7  p-0">
                                  
                                </div>

                                <div class="col-3 p-0">
                                  @if(count($pavillion) > 0)
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--sponsership--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
                                  
                                    <div class="round-circle" >Spo</div> 
                                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--sponsership--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
                                  
                                    <div class="round-circle" >Spo</div> 
                                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--magazine--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
                                  
                                    <div class="round-circle" >Spo</div> 
                                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--membership plans--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">{{$sponsership->count()}}</div> 
                                  
                                    <div class="round-circle" >Spo</div> 
                                                </div>

                                <div class="col-7  p-0">
                                
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->organiser))
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'sponsershipdashboard'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        {{--hastags--}}
                        <div class=" my-3">
                          <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                              <div class="col  pr-0">
                                  <div class="h4 fw-light mb-0">{{$hastag->count()}}</div> 
                                  
                                  <div class="round-circle" >#</div> 
                                  
                              </div>

                              <div class="col-7  p-0">
                                
                              </div>

                              <div class="col-3 p-0">
                                  @if(is_null($hastag))
                                  <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'add-hastag' ])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                  <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'add-hastag'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                              </div>
                          </div>
                        </div>

                        {{--basic--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0">BSC</div> 
                                  
                                    <div class="round-circle" ><i class="bi bi-bookmark"></i></div> 
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <div class="col-7  p-0">
                                    <div class="fs-md fw-normal text-start">{{$evento->eventname}}</div>
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->edition))
                                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'basic'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                        @if(is_null($evento->edition))
                            {{--ticket--}}
                            <div class=" my-3">
                              <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        <div class="h4 fw-light mb-0"></div> 
                                      
                                        <a class="round-circle" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}" >Ticket</a> 
                                        
                                    </div>

                                    <a class="col-7  p-0" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                      @if(is_null($evento->edition))
                                        <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                      @else
                                        <div class="fs-md fw-normal text-start">
                                          
                                        </div>
                                      @endif
                                    </a>

                                    <div class="col-3 p-0">
                                      @if(is_null($evento->edition))
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Add</a>
                                      @else
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Edit</a>
                                      @endif
                                    </div>
                                </div>
                              </a>
                            </div>
                          @elseif($evento->eventype == 'award')
                            {{--ticket--}}
                            <div class=" my-3">
                              <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        <div class="h4 fw-light mb-0"></div> 
                                      
                                        <a class="round-circle" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}" >Nomination Category</a> 
                                        
                                    </div>

                                    <a class="col-7  p-0" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                      @if(is_null($evento->edition))
                                        <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                      @else
                                        <div class="fs-md fw-normal text-start">
                                          
                                        </div>
                                      @endif
                                    </a>

                                    <div class="col-3 p-0">
                                      @if(is_null($evento->edition))
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-nomination'])}}" class="btn btn-primary btn-sm">Add</a>
                                      @else
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-nomination'])}}" class="btn btn-primary btn-sm">Edit</a>
                                      @endif
                                    </div>
                                </div>
                              </a>
                            </div>
                          @else
                            <div class=" my-3">
                              <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        <div class="h4 fw-light mb-0"></div> 
                                      
                                        <a class="round-circle" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}" >Ticket</a> 
                                        
                                    </div>

                                    <a class="col-7  p-0" href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'dashboard'])}}">
                                      @if(is_null($evento->edition))
                                        <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                      @else
                                        <div class="fs-md fw-normal text-start">
                                          
                                        </div>
                                      @endif
                                    </a>

                                    <div class="col-3 p-0">
                                      @if(is_null($evento->edition))
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Add</a>
                                      @else
                                        <a href="{{route('admincheck.ticket',['event_id' => $evento->id, 'board' => 'add-ticket'])}}" class="btn btn-primary btn-sm">Edit</a>
                                      @endif
                                    </div>
                                </div>
                              </a>
                            </div>
                        @endif

                        <div class="">
                          <div class="input-group my-2">
                            <input type="text" class="form-control" placeholder="create a FAQ">
                            <!-- <a href="#" class="btn btn-primary" wire:click.prevent="updateIDstatus({{$evento->id}})">Create FAQ</a> -->
                            <a href="{{route('admin.questionadd',['eventid' => $evento->id])}}"  class="btn btn-primary btn-sm">Create a FAQ</a>
                          </div>
                        </div>

                        <!-- Timmings
                        free or paid entry
                        public or professionals
                        industries and products
                        theme or focus?
                        who can attend?
                        exhibition Timmings?
                        can i register on site?
                        is parking availabe
                        are there food and beverage options avaibale on site
                        is there venue wheelchair accessible
                        are there cloakroom or storage facili  -->

                        <div class="">
                          <!-- create a unique ID
                          <a href="#" class="btn btn-primary" wire:click.prevent="updateIDstatus({{$evento->id}})">ID</a> -->

                          <div class="input-group my-2">
                            <input type="text" class="form-control" placeholder="create a unique ID">
                            <a href="#" class="btn btn-primary" wire:click.prevent="updateIDstatus({{$evento->id}})">ID</a>
                          </div>
                          
                        </div>
                      
                        
                        <div class=" mb-5">
                          {{$evento->reference}}
                        </div>
                        
                        {{-- Creating review--}}
                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="fs-md fw-light mb-0"> {{$EventCountRate->count()}}  <small> Reviews</small></div> 
                                </div>
                                <form wire:submit.prevent="tryingfaker">
                                        <div class="input-group my-2">
                                          <input type="text" class="form-control" wire:model.lazy="howMany">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>

                      </div>

                      <!-- Product details tab-->
                      <div class="tab-pane fade" id="details" role="tabpanel">
                   

                          @foreach ($businessOrder as $eventol)
                            <div class="my-1">
                              <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                  <div class="col-2  p-0">
                                      @if($eventol->event_id == 'null' )
                                          {{$eventol->type}}
                                      @else
                                          @php
                                              $eventdetails = DB::table('events')->where('id', $eventol->event_id)->get();
                                          @endphp

                                          @foreach($eventdetails as $evet)
                                            <a class="card-img-top d-block overflow-hidden" href="{{route('event.details',['slug' => $evet->slug])}}">
                                                <img src="{{url('public/assets/image/exhibition/'.$evet->image)}}" alt="{{Str::limit($evet->eventname, 24)}}">
                                            </a>
                                          @endforeach
                                      @endif
                                  </div>

                                  <div class="col-7  p-0">
                                    <div class="fs-sm fw-normal text-start"><a class="text-dark" href="">{{$eventol->name}}</a><span class="fs-xs bg-success">{{ Carbon\Carbon::parse($eventol->created_at)->format('D d M  H:m')}}</span></div>
                                    <div class="fs-sm fw-normal text-start">
                                      <a class="text-dark" href="" onclick="makeCall('{{$eventol->phone}}')">{{$eventol->phone}}</a> <span class="fs-xs bg-danger text-light">{{$eventol->type}}</span>
                                      <a class="text-dark" href="" onclick="copyToclipboard('{{$eventol->phone}}')"><i class="bi bi-plus"></i></a>
                                    </div>
                                    <div class="text-muted fs-xs text-start">{{$eventol->email}}</div>
                                  </div>

                                  <div class="col-3  p-0">
                                          {{--@if(is_null($eventol->image))
                                            <a class="card-img-top d-block overflow-hidden" href="{{route('admin.magazine',['slug' => $eventol->slug, 'formm' => 'image' ])}}">Add</a>
                                              @else
                                            <a class="card-img-top d-block overflow-hidden" href="">
                                            <img src="{{url('public/assets/image/exhibition/'.$eventol->image)}}" alt="{{Str::limit($eventol->name, 24)}}"></a>
                                          @endif--}}
                                    
                                        @php
                                          $businesslead = DB::table('business_calledos')->where('lead_id', $eventol->id)->latest()->get();
                                          $resulto = $businesslead->pluck('response')->first();
                                        @endphp

                                        
                                      @if(($businesslead->count()) < '1')
                                        <a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">New</a>
                                      @else
                                        <a href="" class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{$resulto}}</a>
                                      @endif
                                      
                                        <ul class="dropdown-menu" width="auto">
                                        <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'interest')">Email</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'interest')">Interest</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'check')">Check</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'callback')">callback</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'ringing')">Ringing</a></li>
                                          <li><a class="dropdown-item" href="#" wire:click.prevent="updateCallingStatus({{$eventol->id}}, 'Not')">Not</a></li>
                                          <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="DeleteCallingStatus({{$eventol->id}})">Delete</a></li>
                                        </ul>

                                  </div>
                              </div>
                            </div>
                          @endforeach
                      </div>

                      <div class="tab-pane fade" id="program" role="tabpanel">
                   
                        {{--doubling--}}

                        <div class=" my-3">
                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0"></div> 
                                  
                                    <div class="round-circle" >Dbl</div> 
                                    
                                </div>

                                <div class="col-7  p-0">
                                  {{-- @if(is_null($evento->edition))
                                    <div class="text-muted fs-sm text-start">Short Story should be more convincing </div>
                                  @else
                                    <div class="fs-md fw-normal text-start">
                                      
                                    </div>
                                  @endif--}}
                                </div>

                                <div class="col-3 p-0">
                                  @if(is_null($evento->edition))
                                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'doubling'])}}" class="btn btn-primary btn-sm">Add</a>
                                  @else
                                    <a href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' => 'doubling'])}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif
                                </div>
                            </div>
                        </div>

                         
                      </div>

                  </div>
              </div>
              
          </div>
        </div>

    {{--<div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="#shop-sidebar" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Filters</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item" href="">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Status</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)">
          <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Edit</span></a>
        
        <a class="d-table-cell handheld-toolbar-item" href="">
          <span class="handheld-toolbar-icon"><i class="ci-cart"></i>
          <span class="badge bg-primary rounded-pill ms-1">4</span></span>
          <span class="handheld-toolbar-label">$265.00</span>
        </a>
      </div>
    </div>--}}

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.dashboard',['board' => 'event'])}}">
          <span class="handheld-toolbar-icon">
          <i class="ci-filter-alt"></i></span>
          <span class="handheld-toolbar-label">Admin</span>
        </a>
       

        <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id , 'board' => 'edit'])}}">
          <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
        <span class="handheld-toolbar-label">Edit</span></a>
        
        <a class="d-table-cell handheld-toolbar-item" href="{{route('event.details',['slug' => $evento->slug])}}">
          <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
          <span class="handheld-toolbar-label">View</span>
        </a>

        <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
          <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
          <span class="handheld-toolbar-label">Menu</span>
        </a>
      </div>
    </div>


</main>