<main>
    <div class="container">
        <form wire:submit.prevent="questadd">
            <input type="text" class="form-control mb-1 mt-2" wire:model.lazy="quest" placeholder="list your question">
            <button type="submit" class="form-control btn-primary btn" >Submit</button>
        </form>
    </div>

    <div class="container my-3">
        @if($selectionEnabled)
            @foreach($result as $evento)
                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0" wire:click="toggleQuestion({{$evento->id}})">
                        
                        <div class="h4 fw-light mb-0"></div> 
                        <div class="small text-muted text-capitalize"></div>

                        @if(in_array($evento->id, $selectedQuestions))
                            <div class="round-circle">{{$evento->id}}</div> Add
                        @endif

                        {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                    </div>

                    <div class="col-7  p-0">
                    <div class="fs-sm fw-normal text-start">
                            <a class="text-dark" href="#">
                            {{$evento->question}}</a>
                        
                    </div>

                    <div class="text-muted fs-sm text-start">
                        {{$evento->event_id}}
                    </div>  
                    <div class="text-muted fs-sm text-start"></div>
                    </div>

                    <div class="col-3  p-0">
                        <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="delete({{$evento->id}})"> <i class="bi bi-x"></i> </a>

                        <!-- <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="admstatus({{$evento->id}},'1')"> <i class="bi bi-plus"></i>Act </a>
                        <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="admstatus({{$evento->id}},'0')"> <i class="bi bi-active"></i>DeA </a> -->

                        <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="updated({{$evento->id}},'0')"> <i class="bi bi-pencil"></i> </a>
                    </div>
                </div>
            @endforeach
        @else
            @foreach($result as $evento)
                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                    <div class="col  pr-0">
                        
                        <div class="h4 fw-light mb-0"></div> 
                        <div class="small text-muted text-capitalize"></div>

                        <div class="round-circle">{{$evento->id}}</div> 
                        {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                    </div>

                    <div class="col-7  p-0">
                    <div class="fs-sm fw-normal text-start">
                            <a class="text-dark" href="#">
                            {{$evento->question}}</a>
                        
                    </div>

                    <div class="text-muted fs-sm text-start">
                        {{$evento->event_id}}
                    </div>  
                    <div class="text-muted fs-sm text-start"></div>
                    </div>

                    <div class="col-3  p-0">
                        <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="delete({{$evento->id}})"> <i class="bi bi-x"></i> </a>

                        <!-- <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="admstatus({{$evento->id}},'1')"> <i class="bi bi-plus"></i>Act </a>
                        <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="admstatus({{$evento->id}},'0')"> <i class="bi bi-active"></i>DeA </a> -->

                        <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="updated({{$evento->id}},'0')"> <i class="bi bi-pencil"></i> </a>
                    </div>
                </div>
            @endforeach
        @endif
        @if($board == 'selected')

            @php
                $updateQuestion = DB::table('questions')->where('event_id' , $this->eventid)->get();
            @endphp
            
                @foreach($updateQuestion as $evento)
                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                        <div class="col  pr-0">
                            
                            <div class="h4 fw-light mb-0"></div> 
                            <div class="small text-muted text-capitalize"></div>

                            <div class="round-circle">{{$evento->id}}</div> 
                            {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                        </div>

                        <div class="col-7  p-0">
                        <div class="fs-sm fw-normal text-start">
                                <a class="text-dark" href="#">
                                {{$evento->question}}</a>
                            
                        </div>

                        <div class="text-muted fs-sm text-start">
                            {{$evento->event_id}}
                        </div>  
                        <div class="text-muted fs-sm text-start"></div>
                        </div>

                        <div class="col-3  p-0">
                            <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="delete({{$evento->id}})"> <i class="bi bi-x"></i> </a>

                            <!-- <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="admstatus({{$evento->id}},'1')"> <i class="bi bi-plus"></i>Act </a>
                            <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="admstatus({{$evento->id}},'0')"> <i class="bi bi-active"></i>DeA </a> -->

                            <a href="#" class="btn btn-sm btn-dark-outline" wire:click.prevent="updated({{$evento->id}},'0')"> <i class="bi bi-pencil"></i> </a>
                        </div>
                    </div>
                @endforeach
        @endif
    </div>

    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
      
      
        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'magazine'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-book"></i></span>
            <span class="handheld-toolbar-label">Event</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.questionadd',['eventid' => $this->eventid ,'board' => 'selected'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-building"></i></span>
            <span class="handheld-toolbar-label">selected</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item {{'admin/dashboard/job' == request()->path() ? 'active' : '' }}" href="{{route('admin.dashboard',['board' => 'add-magazine'])}}">
            <span class="handheld-toolbar-icon"><i class="bi bi-plus"></i></span>
            <span class="handheld-toolbar-label">Add</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <span class="handheld-toolbar-icon"><i class="bi bi-list"></i></span>
            <span class="handheld-toolbar-label">Menu</span>
        </a>

      </div>
    </div>
</main>