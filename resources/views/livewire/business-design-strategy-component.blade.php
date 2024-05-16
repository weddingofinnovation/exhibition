<main>

        <div>
            @foreach( $upcomingViews as $franchise)
                <div class="container">
                        

                @if($franchise->updated_at->format("Y-m-d") == $mytime)
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col bg-dark pr-0">
                          <div class="fs-xs  fw-light mb-0">
                        

                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                          @endphp
                          

                          @if ($current < $to && $current < $from)
                            upcom
                            @elseif ($current == $to && $current < $from) 
                                first
                            @elseif ($current > $to && $current < $from) 
                                ongoi
                            @elseif ($current > $to && $current == $from) 
                              last 
                            @elseif ($current > $to && $current > $from)
                              ended
                          @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
                    </div>

                    <div class="col-7  p-0">
                      <div class="fs-md fw-normal text-start"><a class="text-dark" href="{{route('adminevent.detail',['slug' => $franchise->slug])}}">
                        {{ucwords(trans(Str::limit($franchise->eventname, 24)))}}</a>
                      </div>
                      <div class="text-muted fs-sm text-start">
                        @if(Carbon\Carbon::parse ($franchise->startdate)->format('M') != Carbon\Carbon::parse ($franchise->enddate)->format('M'))
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d M')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @else
                          {{Carbon\Carbon::parse ($franchise->startdate)->format('D, d ')}} - {{Carbon\Carbon::parse ($franchise->enddate)->format('D, d M y')}}
                        @endif 
                      </div>  
                      <div class="text-muted fs-sm text-start">
                        @if($category->count() == 0)
                       
                            <a href="{{route('admin.editcategories',['event_id' => $franchise->id])}}" class="badge bg-primary mt-0">
                              no category</a>
                        
                        @else
                          @foreach($category as $cat)
                             
                              @php
                                  $categ = DB::table('expos')->where('id', $cat->expo_id)->get();
                              @endphp
                              @foreach($categ as $ficateg)
                              <span class="badge bg-primary mt-0">{{$ficateg->tag}}</span>
                              @endforeach
                          @endforeach
                        @endif
                      </div>
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
                @else
                  <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                          <div class="fs-xs fw-light mb-0">
                          @php
                              $to = strtotime($franchise->startdate);
                              $from= strtotime($franchise->enddate);
                          @endphp
                          

                          @if ($current < $to && $current < $from)
                            upcom
                            @elseif ($current == $to && $current < $from) 
                                first
                            @elseif ($current > $to && $current < $from) 
                                ongoi
                            @elseif ($current > $to && $current == $from) 
                              last 
                            @elseif ($current > $to && $current > $from)
                              ended
                            @endif
                          </div> 
                          <div class="small text-muted">{{$franchise->id}}</div>
                          <div class="text-primary fs-xs">{{$franchise->view_count}}</div> 
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
                @endif

                </div>
            @endforeach
        </div>
</main>