@section('page_title','Dashboard')

<main>
    <div class="container my-5 mx-auto">
        <div class="mx-auto my-5"> 
            <div class=" d-flex row">
                <div class="fw-bold">{{$evento->eventname}}</div>

                <div class="my-3">
                    @foreach($selectedcategory as $catego)
                        <span class="badge bg-success m-0" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="eventdelete({{$catego->id}})">
                            {{$catego->expo->tag}} <i class="bi bi-x me-2"></i>
                        </span>
                    @endforeach
                </div>


                <div class="col-lg-8 col-sm-7">
                    <input class="form-control" type="text" placeholder="Search your Category..." wire:model.lazy="searchTerm">
                    <button class="btn btn-primary mt-2 form-control" type="submit">Search</button>
                </div>
                
            </div>
        
            @if(is_null($searchTerm))
            
                @else
                    @if($searchcat->count() > 0)
                    
                        <form wire:submit.prevent="updateEvent">      
                            <div class="mb-5 pb-2">
                            @foreach ($findAdminStatus as $findoo)
                                <span class="badge bg-success m-0" value="{{$findoo->id}}"  wire:model="checkvalue">  {{$findoo -> tag}} </span>
                            @endforeach

                                @foreach ($searchcat as $franchise) 
                                {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                                <div class=" col col-auto my-1 px-2"> 
                                @if($franchise->admstatus == '1')   
                                    <input class="form-check-input" type="checkbox"   value="{{$franchise->id}}"  wire:model="checkvalue"> <span class=" badge bg-success">{{$franchise->tag}}</span>  
                                @else
                                    <input class="form-check-input" type="checkbox"   value="{{$franchise->id}}"  wire:model="checkvalue">{{$franchise->tag}}
                                @endif
                                </div>
                                @endforeach
                                <div>@json($checkvalue)</div>
                                
                            </div>
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        </form>
                    @else
                        <div class="small bold my-4">Sorry, we could found relevant industry. You can upload </div>

                        <form wire:submit.prevent="updatetag">
                            <input class="form-control" type="text" placeholder="tag" wire:model.lazy="tag">
                            <button class="btn btn-primary mt-2 form-control" type="submit">Submit</button>
                        </form>
                    @endif

            @endif
        </div>
    </div>
</main>

