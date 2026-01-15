<main>

    @if($formm == 'pavilliondashboard')
        @foreach($pavillion as $pav)
        <div class="container my-3">

            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    <div class="h4 fw-light mb-0">Pav</div>

                    <div class="round-circle"><i class="bi bi-bookmark"></i></div>
                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                </div>

                <div class="col-7  p-0">
                    @if(is_null($pav->desc))
                    <div class="text-muted fs-sm text-start">{{$evento->pavillion_name}} </div>
                    @else
                    <div class="fs-md fw-normal text-start">
                        {{$evento->business}}<br>

                        {{$evento->startdate}}
                    </div>
                    @endif
                </div>

                <div class="col-3 p-0">
                    @if(is_null($pav->desc))
                    <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                    @else
                    <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                    @endif
                </div>
            </div>

        </div>
        @endforeach
        @endif

        @if($formm == 'sponsershipdashboard')
        @foreach($pavillion as $pav)
        <div class="container my-3">
            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    <div class="h4 fw-light mb-0">Pav</div>

                    <div class="round-circle"><i class="bi bi-bookmark"></i></div>
                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                </div>

                <div class="col-7  p-0">
                    @if(is_null($pav->desc))
                    <div class="text-muted fs-sm text-start">{{$evento->pavillion_name}} </div>
                    @else
                    <div class="fs-md fw-normal text-start">
                        {{$evento->business}}<br>

                        {{$evento->startdate}}
                    </div>
                    @endif
                </div>

                <div class="col-3 p-0">
                    @if(is_null($pav->desc))
                    <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                    @else
                    <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                    @endif
                </div>
            </div>
        @endforeach
    @endif

    @if($formm == 'participantsdashboard')
        @foreach($pavillion as $pav)
        <div class="container my-3">

            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    <div class="h4 fw-light mb-0">Pav</div>

                    <div class="round-circle"><i class="bi bi-bookmark"></i></div>
                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                </div>

                <div class="col-7  p-0">
                    @if(is_null($pav->desc))
                    <div class="text-muted fs-sm text-start">{{$evento->pavillion_name}} </div>
                    @else
                    <div class="fs-md fw-normal text-start">
                        {{$evento->business}}<br>

                        {{$evento->startdate}}
                    </div>
                    @endif
                </div>

                <div class="col-3 p-0">
                    @if(is_null($pav->desc))
                    <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                    @else
                    <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                    @endif
                </div>
            </div>

        </div>
        @endforeach
    @endif

    @if($formm == 'speakerdashboard')
        @foreach($pavillion as $pav)
        <div class="container my-3">

            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                <div class="col  pr-0">
                    <div class="h4 fw-light mb-0">Pav</div>

                    <div class="round-circle"><i class="bi bi-bookmark"></i></div>
                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                </div>

                <div class="col-7  p-0">
                    @if(is_null($pav->desc))
                    <div class="text-muted fs-sm text-start">{{$evento->pavillion_name}} </div>
                    @else
                    <div class="fs-md fw-normal text-start">
                        {{$evento->business}}<br>

                        {{$evento->startdate}}
                    </div>
                    @endif
                </div>

                <div class="col-3 p-0">
                    @if(is_null($pav->desc))
                    <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                    @else
                    <a href="{{route('admin.multipartners',['event_id' => $pav->id, 'formm' => 'addPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                    @endif
                </div>
            </div>

        </div>
        @endforeach
    @endif


    <div class="container mt-2">
        <div class="row">

            <div class="col-3 d-none d-md-block bg-light">
                <div class="d-flex flex-column p-3 bg-white shadow-sm" style="width: 250px; border-radius: 8px;">
                    <!-- Logo & Name -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="/your-logo.png" alt="Logo" class="rounded-circle me-2" width="40" height="40">
                        <div>
                            <h6 class="mb-0 fw-bold">The Exhibition Network</h6>
                            <small class="text-muted">60 followers</small>
                        </div>
                    </div>

                    <!-- Create Button -->
                    <button class="btn btn-primary w-100 mb-2">+ Create</button>

                    <!-- View as Member -->
                    <button class="btn btn-outline-secondary w-100 mb-3">👁 View as member</button>

                    <!-- Navigation Menu -->
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item mb-1">
                            <a href="{{route('admin.global')}}" class="nav-link text-dark" style="background-color: #fff;">Dashboard</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{route('admin.dashboard', ['board' => 'order'])}}" class="nav-link text-dark" style="background-color: #fff;">Leads</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{route('admin.dashboard', ['board' => 'event'])}}" class="nav-link text-dark" style="background-color: #fff;">Events</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{route('admin.dashboard', ['board' => 'floor'])}}" class="nav-link text-dark" style="background-color: #fff;">Floor</a>
                        </li>


                        <li class="nav-item mb-1">
                            <a href="#" class="nav-link text-dark" style="background-color: #fff;">Page posts</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="#" class="nav-link active bg-light text-success border-start border-3 border-success">Analytics</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="#" class="nav-link text-dark" style="background-color: #fff;">Feed</a>
                        </li>
                        <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                            <a href="{{route('admin.dashboard', ['board' => 'speaker'])}}" class="nav-link text-dark" style="background-color: #fff;">Speaker</a>
                            <span class="badge bg-danger rounded-pill">2</span>
                        </li>
                        <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                            <a href="#" class="nav-link text-dark" style="background-color: #fff;">Activity</a>
                            <span class="badge bg-danger rounded-pill">2</span>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="#" class="nav-link text-dark" style="background-color: #fff;">Inbox</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="container col-9"> <!--col-lg-8 pt-lg-4 pb-4 mb-3 -->
                <div class="card shadow-sm border-0 mb-2 d-none d-md-block">

                    @if($formm == 'addParticipants')
                        <div class="card-body pb-1 pt-2">
                            <!-- Page Title -->
                                @php 
                                    $getparticipant = DB::table('participants')->where('event_id', $this->event_id)->get();
                                @endphp

                            <div class="d-flex justify-content-between align-items-center mb-2">

                                <h4 class="fw-bold mb-2"><small>Add Participants / Exhibitors</small></h4>
                               
                                <!-- <div class="d-flex justify-content-between align-items-center">
                                    <input type="search" class="form-control w-auto" placeholder="Search...">

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <button wire:click="deleteSelected" class="btn btn-danger btn-sm me-2">Delete Selected</button>
                                            <button wire:click="addToEvent" class="btn btn-primary btn-sm">Add to Event</button>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="selectAll" wire:click="selectAll" class="form-check-input me-1">
                                            <label for="selectAll" class="form-check-label">Select All</label>
                                        </div>
                                    </div>
                                </div> -->
                            </div>


                            <!-- Tabs -->
                            <!-- <ul class="nav nav-tabs mb-2" id="analyticsTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">New</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Add Speaker</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Suggested Speaker</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Advertise</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mark Association</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">New Association</a>
                                </li>

                            </ul> -->
                        </div>
                    @endif

                </div>

                <div class=" ps-lg-0 pe-xl-5">


                    <div class="tab-content pt-1">

                        <!-- Reviews tab-->
                        <div class="tab-pane fade show active" id="reviews" role="tabpanel">

                            @if($formm == 'addSpeaker')
                                <form wire:submit.prevent="updateSpeaker">
                                    <input type="text" class="form-control" placeholder="Speaker" wire:model="name">
                                    <button class="btn btn-primary mt-2" class="form-control" type="submit">Submit</button>
                                </form>

                                @foreach($speaker as $pav)
                                <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">
                                        <div class="h4 fw-light mb-0">Pav</div>

                                        <div class="round-circle"><i class="bi bi-bookmark"></i></div>
                                        {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                    </div>

                                    <div class="col-7  p-0">
                                        @if(is_null($pav->desc))
                                        <div class="text-muted fs-sm text-start">{{$pav->name}} </div>
                                        @else
                                        <div class="fs-md fw-normal text-start">
                                            {{$evento->name}}<br>

                                            {{$evento->organisation}}
                                        </div>
                                        @endif
                                    </div>

                                    <div class="col-3 p-0">
                                        @if(is_null($pav->desc))
                                        <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailSpeaker'])}}" class="btn btn-primary btn-sm">Add</a>
                                        @else
                                        <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailSpeaker'])}}" class="btn btn-primary btn-sm">Edit</a>
                                        @endif
                                    </div>
                                </div>
                                @endforeach

                                <style>
                                    .speaker-card {
                                        transition: 0.2s ease-in-out;
                                    }

                                    .speaker-card.selected {
                                        border: 2px solid #007bff;
                                        background-color: #e7f1ff;
                                        box-shadow: 0 0 10px rgba(0, 123, 255, 0.2);
                                    }
                                </style>

                                <h1>Suggested Speaker</h1>
                                <div class="row">
                                    <!-- Bestsellers-->

                                    @foreach ($suggestedSpeaker as $franchise)
                                        <div class="col-md-4 col-sm-6 mb-2 py-1">
                                            <div class="widget">
                                                <div
                                                    class="card p-2 border rounded shadow-sm speaker-card {{ in_array($franchise->id, $selectedSpeakers) ? 'selected' : '' }}"
                                                    wire:click="toggleSelect({{ $franchise->id }})"
                                                    style="cursor:pointer;">
                                                    <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                                                        <div class="d-flex align-items-center position-relative">

                                                            <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}" width="17%" alt="Avatar">
                                                            <div class="ms-2">
                                                                <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="#">{{$franchise->name}}</a></h4>
                                                                <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="#">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                                                                <!--<span class="fs-xs text-muted">730 followers</span>-->
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endif

                            @if($formm == 'facts')

                                <form wire:submit.prevent="updateSpeaker">
                                    <input type="text" class="form-control" placeholder="Speaker" wire:model="name">
                                    <input type="text" class="form-control" placeholder="Speaker" wire:model="name">
                                    <input type="text" class="form-control" placeholder="Speaker" wire:model="name">
                                    <button class="btn btn-primary mt-2" class="form-control" type="submit">Submit</button>
                                </form>

                                @foreach($speaker as $pav)
                                    <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                        <div class="col  pr-0">
                                            <div class="h4 fw-light mb-0">Pav</div>

                                            <div class="round-circle"><i class="bi bi-bookmark"></i></div>
                                            {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                        </div>

                                        <div class="col-7  p-0">
                                            @if(is_null($pav->desc))
                                            <div class="text-muted fs-sm text-start">{{$pav->name}} </div>
                                            @else
                                            <div class="fs-md fw-normal text-start">
                                                {{$evento->name}}<br>

                                                {{$evento->organisation}}
                                            </div>
                                            @endif
                                        </div>

                                        <div class="col-3 p-0">
                                            @if(is_null($pav->desc))
                                            <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailSpeaker'])}}" class="btn btn-primary btn-sm">Add</a>
                                            @else
                                            <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailSpeaker'])}}" class="btn btn-primary btn-sm">Edit</a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                                <h1>Suggested Speaker</h1>
                                <div class="row">
                                    <!-- Bestsellers-->
                                    <div class="col-md-4 col-sm-6 mb-2 py-1">
                                        <div class="widget">
                                            @foreach ($suggestedSpeaker as $franchise)
                                            <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                                                <div class="d-flex align-items-center position-relative">

                                                    <img class="rounded-circle ms-2" src="{{url('public/speaker/'.$franchise->image)}}" width="17%" alt="Avatar">
                                                    <div class="ms-2">
                                                        <h4 class="mb-1 fs-base text-body"><a class="nav-link-style stretched-link" href="#">{{$franchise->name}}</a></h4>
                                                        <h5 class="mb-1 fs-xs"><a class="nav-link-style stretched-link" href="#">{{$franchise->website}} {{$franchise->organisation}}</a></h5>
                                                        <!--<span class="fs-xs text-muted">730 followers</span>-->
                                                    </div>
                                                </div>
                                                <button class="btn btn-sm btn-outline-secondary ms-2">Follow</button>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            @endif


                            <div class="row">

                                <!-- LEFT SIDE : FORM -->
                                <div class="col-md-8 col-12 border-end">

                                    <!-- Toasts -->
                                    <div class="toast-container position-fixed top-0 end-0 p-3">
                                        @if (session()->has('success'))
                                        <div class="toast align-items-center text-bg-success border-0 show">
                                            <div class="d-flex">
                                                <div class="toast-body">
                                                    ✅ {{ session('success') }}
                                                </div>
                                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                                            </div>
                                        </div>
                                        @endif

                                        @if (session()->has('warning'))
                                        <div class="toast align-items-center text-bg-warning border-0 show">
                                            <div class="d-flex">
                                                <div class="toast-body">
                                                    ⚠️ {{ session('warning') }}
                                                </div>
                                                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"></button>
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    <!-- <h4 class="mb-2">Add Participants / Exhibitors </h4> -->

                                    <form wire:submit.prevent="updateBrand">
                                        <textarea class="form-control mb-1"
                                            wire:model="brand_name"
                                            rows="7"
                                            placeholder="Enter comma separated brand names">
                                        </textarea>

                                        <div class="mb-2">
                                            <input type="number"
                                                class="form-control"
                                                wire:model.defer="year"
                                                placeholder="year e.g. 2025">
                                            @error('year')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <button class="btn btn-primary w-100" type="submit">
                                            Submit
                                        </button>
                                    </form>
                                </div>

                                <!-- RIGHT SIDE : PARTICIPANTS LIST -->
                                <div class="col-md-4 col-12">

                                    <p class="mb-3">Participants {{$getparticipant->count()}}</p>

                                    @php
                                      $yearWiseCount = Participant::select('year', DB::raw('count(*) as total'))
                                                        ->where('event_id', $eventId)
                                                        ->groupBy('year')
                                                        ->orderBy('year', 'desc')
                                                        ->get();

                                    @endphp

                                    @foreach @foreach ($yearWiseCount as $row)
                                        <div class="row gx-0 mb-2 shadow-sm border rounded align-items-center">

                                            <div class="col-2 text-center">
                                                <i class="bi bi-bookmark fs-4"></i>
                                            </div>

                                            <div class="col-7">
                                                <div class="fw-semibold">
                                                    {{ $row->total }}
                                                </div>
                                                <div class="small text-muted">
                                                    {{$row->year}}
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                {{-- <img class="img-fluid rounded"
                                                    src="{{ url('public/assets/image/exhibition/'.$participant->image) }}"
                                                    alt="{{ Str::limit($participant->brand_name, 24) }}"> --}} <i class="bi bi-info fs-md"></i>
                                            </div>

                                        </div>
                                    @endforeach

                                    <div class="mt-3">
                                        @json($checkvalue)
                                    </div>
                                </div>

                            </div>
                            


                            {{-- 
                            <div class="toast-container position-fixed top-0 end-0 p-3">

                                @if (session()->has('success'))
                                <div class="toast align-items-center text-bg-success border-0 show">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            ✅ {{ session('success') }}
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                                    </div>
                                </div>
                                @endif

                                @if (session()->has('warning'))
                                <div class="toast align-items-center text-bg-warning border-0 show">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            ⚠️ {{ session('warning') }}
                                        </div>
                                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"></button>
                                    </div>
                                </div>
                                @endif

                            </div>

                            <h1>Add Participants/Exhibitors</h1>
                            <form wire:submit.prevent="updateBrand">
                                <label class="form-label">Add Participants<span class="text-danger">*</span></label>
                                <textarea type="text" placeholder="participants" class="form-control" wire:model="brand_name" rows="7"></textarea>
                                <!-- <input type="text" class="form-control" wire:model="yearofdata" placeholder="year of data"> -->

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Year</label>
                                    <input type="number"
                                        class="form-control"
                                        wire:model.defer="year"
                                        placeholder="e.g. 2025">
                                    @error('year')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button class="btn btn-primary btn-shadow d-block w-100 mt-2" type="submit">Submit</button>
                            </form>

                            <div class="small">Participants</div>
                            @foreach ($participants as $participant)
                            <div class="container">
                                <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                    <div class="col  pr-0">

                                        <div class="h4 fw-light mb-0"></div>
                                        <div class="small text-muted"></div>


                                        <a href="#">
                                            <div class=" round-circle"><i class="bi bi-bookmark"></i></div>
                                        </a>
                                    </div>

                                    <div class="col-7  p-0">
                                        <div class="fs-md fw-normal text-start"><a class="text-dark" href="#">
                                                {{$participant->brand_name}}</a></div>
                                        <div class="text-muted fs-sm text-start">
                                            {{$participant->organisation}}
                                        </div>
                                        <div class="text-muted fs-sm text-start"></div>
                                    </div>

                                    <div class="col-3  p-0">
                                        <a class="card-img-top d-block overflow-hidden" href="#">
                                            <img src="{{url('public/assets/image/exhibition/'.$participant->image)}}" alt="{{Str::limit($participant->brand_name, 24)}}"></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div>@json($checkvalue)</div> --}}






                            <div class="small">
                                <input type="checkbox" value="1" wire:model="lookingAddorganisation" name="" id=""> Add Organisation
                            </div>

                            @if($lookingAddorganisation == 1)
                            <form wire:submit.prevent="updateOrganisation">
                                <label class="form-label">Add Organisation<span class="text-danger">*</span></label>
                                <textarea type="text" placeholder="Organisation" class="form-control" wire:model="organisation" rows="7"></textarea>
                                <button class="btn btn-primary btn-shadow d-block w-100 mt-2" type="submit">Submit</button>
                            </form>
                            @endif

                            <div class="my-3">
                                <div class="small">
                                    <input type="checkbox" value="1" wire:model="lookingAddImage"> Add Images
                                </div>
                                @if($lookingAddImage == 1)
                                <form wire:submit.prevent="multiImage">
                                    <label class="form-label">Upload Multi Image<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" placeholder="multiple Image" wire:model="brand_logo" multiple="multiple">
                                    <button class="btn btn-primary btn-shadow d-block w-100 mt-2" type="submit">Submit</button>
                                </form>
                                @endif
                            </div>

                            <form wire:submit.prevent="participantToAdd">
                                <div class="row mb-5 pb-2" wire:model="checkvalue">

                                    @foreach ($participants as $participant)
                                    {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                                    <div class=" col col-auto my-1 px-2">
                                        <input class="form-check-input" type="checkbox" value="{{$participant->id}}" wire:model="checkvalue"> {{$participant->brand_name}}
                                        <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="Imagedelete({{$participant->id}})"> <i class="bi bi-x me-2"></i> </a>
                                        <img src="{{url('public/assets/image/exhibition/'.$participant->brand_logo)}}" alt="#" width="50px">{{$participant->brand_name}}
                                    </div>
                                    @endforeach

                                </div>

                                @if($sponser->count() > 0)
                                <select class="form-select flex-shrink-0" wire:model="sponser_id">
                                    <option>Categories</option>
                                    <option value="no">No</option>
                                    @foreach ($sponser as $sponseroo)
                                    <option value="{{$sponseroo->id}}">{{$sponseroo->plan}}</option>
                                    @endforeach
                                </select>
                                @else
                                <small>Please active Sponser plan <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addSponsership' ])}}"> Click</a></small>
                                @endif

                                @if($pavillion->count() > 0)
                                <select class="form-select flex-shrink-0" wire:model="pavill_id">
                                    <option>Pavillion</option>
                                    <option value="no">No</option>
                                    @foreach ($pavillion as $pavill)
                                    <option value="{{$pavill->id}}">{{$pavill->pavillion_name}}</option>
                                    @endforeach
                                </select>
                                @else
                                <small>Please active Pavillion plan <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}"> Click</a></small>
                                @endif

                                @if($partners->count() > 0)
                                <select class="form-select flex-shrink-0" wire:model="partner_id">
                                    <option>Pavillion</option>
                                    <option value="no">No</option>
                                    @foreach ($partners as $pavill)
                                    <option value="{{$pavill->id}}">{{$pavill->pavillion_name}}</option>
                                    @endforeach
                                </select>
                                @else
                                <small>Please active Pavillion plan <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'addPavillion'])}}"> Click</a></small>
                                @endif

                                <input type="text" placeholder="partner" wire:model="partner"> </input>
                                <button class="btn btn-primary mt-2" type="submit">Submit</button>
                            </form>



                            @if($formm == 'addPavillion')
                            <form wire:submit.prevent="updatePavillion">
                                <input type="text" class="form-control" placeholder="pavillion" wire:model.lazy="pavillion_name">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>


                            <h3>Listed association, govt. association....</h3>
                            @foreach($pavillion as $pav)
                            @php
                            $getReferenceBrands = DB::table('participants')->where('event_id' , $event_id)->where('pavillion_id' , $pav->id)->get();
                            $getbrand = $getReferenceBrands->pluck('brand_id');

                            foreach($getbrand as $findbrand)
                            {
                            $findobrand = DB::table('brands')->where('id', $findbrand->id);
                            }
                            @endphp

                            <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                                <div class="col  pr-0">
                                    <div class="h4 fw-light mb-0"></div>

                                    <div class="round-circle"><i class="bi bi-bookmark"></i></div>
                                    {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                                </div>

                                <a class="col-7  p-0" href="{{route('admin.multiSubDetails',['event_id' => $evento->id, 'did'=> $pav->id, 'formm' => 'detailPavillion'])}}">
                                    <!-- <a href="{{route('admin.multiSubDetails',['event_id' => $evento->id, 'did'=> $pav->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm">Add</a> -->
                                    @if(is_null($pav->desc))
                                    <a class="text-muted fs-sm text-start" href="{{route('admin.multiSubDetails',['event_id' => $evento->id, 'did'=> $pav->id, 'formm' => 'detailPavillion'])}}">{{$pav->pavillion_name}} </a>
                                    @else
                                    <div class="fs-md fw-normal text-start">
                                        {{$evento->pavillion_name}}<br>

                                        {{$evento->desc}}
                                    </div>
                                    @endif
                                    <div class=" col col-auto my-1 px-2">
                                        {{-- <img src="{{url('public/assets/image/exhibition/'.$getReferenceBrands->brand_logo)}}" alt="#" width="50px">{{$getReferenceBrands->brand->brand_name}} --}}
                                    </div>

                                    <div class="col-3  p-0">
                                        @if(is_null($pav->image))
                                        <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $pav->id, 'formm' => 'image' ])}}">
                                            Add</a>
                                        @else
                                        {{-- <a class="card-img-top d-block overflow-hidden" href="{{route('adminevent.detail',['slug' => $pav->slug])}}"> --}}
                                        <a class="card-img-top d-block overflow-hidden" href="#">
                                            <img src="{{url('public/assets/image/exhibition/'.$pav->image)}}" alt="{{Str::limit($pav->eventname, 24)}}"></a>
                                        @endif
                                    </div>
                                </a>

                                {{-- <div class="col-3 p-0">
                            @if(is_null($pav->desc))
                                <a href="{{route('admin.multiSubDetails',['event_id' => $evento->id, 'did'=> $pav->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm">Add</a>
                                @else
                                <a href="{{route('admin.multiSubDetails',['event_id' => $evento->id, 'did'=> $pav->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                                @endif
                            </div> --}}
                        </div>
                        @endforeach

                        <h3>selected association, govt. association....</h3>

                        @php
                        $getReference = DB::table('brands')->where('dtype','!=', 'organiser')->get();
                        @endphp

                        <style>
                            .brand-box {
                                background-color: #fff;
                                border-radius: 15px;
                                padding: 20px 40px;
                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0, 0.1);
                                text-align: center;
                                color: #fff;
                                transition: transform 0.3s, box-shadow 0.3s;
                            }

                            .brand-box:hover {
                                transform: scale(1.05);
                                box-shadow: 0 6px 12px rgba(0, 0, 0, 0, 0.2);
                            }
                        </style>


                        <div class="container">
                            <div class="row justify-content-center">
                                @foreach($getReference as $organiser)
                                <div class="col-md-3 m-2">
                                    <div class="brand-box">
                                        <p class="fs-4 fw-bold">{{$organiser -> brand_name }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if($formm == 'addSponsership')
                        <form wire:submit.prevent="updateSponsership">
                            <input type="text" placeholder="plan" wire:model="plan">
                            <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        </form>

                        @foreach($sponser as $pav)
                        @php
                        $getReferenceBrands = DB::table('participants')->where('event_id' , $event_id)->where('pavillion_id' , $pav->id)->get()
                        @endphp

                        <div class="row text-center p-1 gx-0 gy-1 mb-1  shadow-sm  border rounded border-1">
                            <div class="col  pr-0">

                                <div class="h4 fw-light mb-0">{{$getReferenceBrands->count()}}</div>

                                <div class="round-circle"><i class="bi bi-bookmark"></i></div>
                                {{--<a class="btn btn-primary btn-sm" href="{{$link->google()}}">Add to Calender</a>--}}
                            </div>

                            <div class="col-7  p-0">

                                @if(is_null($pav->desc))
                                <div class="text-muted fs-sm text-start">{{$pav->plan}} </div>
                                @foreach($getReferenceBrands as $cget)
                                {{$cget->brand_id}}
                                @endforeach
                                @else
                                <div class="fs-md fw-normal text-start">
                                    {{$evento->pavillion_name}}<br>

                                    {{$evento->desc}}

                                    @foreach($getReferenceBrands as $cget)
                                    {{$cget->brand_id}}
                                    @endforeach
                                </div>
                                @endif
                            </div>

                            <div class="col-3 p-0">
                                @if(is_null($pav->desc))
                                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm"> <i class="bi bi-plus"></i> </a>

                                <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="SponserDelete({{$pav->id}})" class="btn btn-primary btn-sm"> <i class="bi bi-x me-2"></i> </a>
                                @else
                                <a href="{{route('admin.multipartners',['event_id' => $evento->id, 'formm' => 'detailPavillion'])}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="SponserDelete({{$pav->id}})" class="btn btn-primary btn-sm"> <i class="bi bi-x me-2"></i> </a>
                                @endif
                            </div>
                        </div>

                        @endforeach
                        @endif

                        @if($formm == 'add-hastag')
                            <form wire:submit.prevent="addHastag">
                                <div class="col-sm-6 mb-3">
                                    <label class="form-label" for="unp-standard-price">Create Hashtag </label>
                                    <div class="input-group">
                                        <textarea class="form-control" type="text" rows="5" wire:model.lazy="hastag"> </textarea>
                                    </div>
                                    <div class="form-text">Create hashtag, separate with comma </div>
                                    @error('hastag')
                                    <div class="form-text">{{$message}}</div>
                                    @enderror


                                </div>
                                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                            </form>

                            <div>
                                <span class="badge">#{{$hastag}}</span>
                            </div>

                            <div class="d-flex badgeseTag pb-2">
                                @foreach($hastago as $cat)
                                <span class="badge border border-1 text-right border-dark text-dark mr-1">{{$cat->hastag}}
                                    <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="Hashdelete({{$cat->id}})"> <i class="bi bi-x me-2"></i> </a>
                                </span>
                                @endforeach
                            </div>
                        @endif

                        <!--@if(count($findListedTag) > 0)
                            <div class="col-sm-1">
                                <label class="form-label" for="seniority">Tag</label>
                                    <select class="form-control" type="text"   wire:model.lazy="hashag">
                                    @foreach($findListedTag as $tego)
                                        <option selected>Choose</option>
                                        <option value="{{$tego ->expo->tag}}">{{$tego -> expo->tag}}</option>
                                    @endforeach
                                    </select>
                                    @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                            </div>
                        @endif -->

                        @if($formm == 'detailPavillion')

                            <form wire:submit.prevent="add">
                                <!-- Title-->
                                <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                                    <h2 class="h3 py-2 me-2 text-center text-sm-start">Your Pavillion</h2>

                                </div>

                                <div class="row">


                                    <div class=" col-sm-6 mb-3 pb-2">
                                        <label class="form-label" for="unp-product-name">Business Industry</label>
                                        <input class="form-control" type="text" wire:model.lazy="business">
                                        <div class="form-text">Maximum 100 characters. No HTML or emoji allowed.</div>
                                        @error('business')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="unp-standard-price">Start Date</label>
                                        <div class="input-group">
                                            <input class="form-control" type="date" wire:model.lazy="startdate" placeholder="DD-MM-YYYY">
                                        </div>
                                        <div class="form-text">Average marketplace price for this category is $15.</div>

                                        @error('startdate')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="unp-extended-price">Last Date</label>
                                        <div class="input-group">
                                            <input class="form-control" type="date" wire:model.lazy="lastdate">
                                        </div>
                                        <div class="form-text">Typically 10x of the Standard license price.</div>
                                        @error('lastdate')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="unp-standard-price">Number of stall</label>
                                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                                            <input class="form-control" type="number" wire:model.lazy="nostall">
                                        </div>
                                        <div class="form-text">Average marketplace price for this category is $15.</div>
                                        @error('nostall')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">


                                    <div class="col-sm-12 mb-3">
                                        <label class="form-label" for="unp-extended-price">Description</label>
                                        <div class="input-group">
                                            <textarea class="form-control" type="text" wire:model.lazy="desc" row="3"></textarea>
                                            @error('desc')
                                            <div class="form-text">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-text">Typically 10x of the Standard license price.</div>
                                    </div>

                                </div>

                                <div class="mb-3 pb-2">
                                    <label class="form-label" for="unp-product-files">Exhibition Poster</label>
                                    <input class="form-control" type="file" name="image" wire:model="image">
                                    <div class="form-text">Maximum file size is 1GB</div>
                                    @error('image')
                                    <div class="form-text">{{$message}}</div>
                                    @enderror
                                </div>

                                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                            </form>

                        @endif

                        @if($formm == 'detailSponsership')
                            <form wire:submit.prevent="">
                                <div class="row">
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="unp-standard-price">Audience</label>
                                        <div class="input-group">
                                            <input class="form-control" type="number" wire:model.lazy="auidence">
                                        </div>
                                        <div class="form-text">Average marketplace price for this category is $15.</div>
                                        @error('auidence')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="unp-standard-price">Start Date</label>
                                        <div class="input-group">
                                            <input class="form-control" type="date" wire:model.lazy="startdate" placeholder="DD-MM-YYYY">
                                        </div>
                                        <div class="form-text">Average marketplace price for this category is $15.</div>
                                        @error('startdate')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="unp-extended-price">Last Date</label>
                                        <div class="input-group">
                                            <input class="form-control" type="date" wire:model.lazy="lastdate">
                                        </div>
                                        <div class="form-text">Typically 10x of the Standard license price.</div>
                                        @error('lastdate')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="unp-standard-price">Standard Cost</label>
                                        <div class="input-group">
                                            <input class="form-control" type="date" wire:model.lazy="stdcost" placeholder="DD-MM-YYYY">
                                        </div>
                                        <div class="form-text">Average marketplace price for this category is $15.</div>
                                        @error('stdcost')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="unp-extended-price">Actuall Cost</label>
                                        <div class="input-group">
                                            <input class="form-control" type="date" wire:model.lazy="extcost">
                                        </div>
                                        <div class="form-text">Typically 10x of the Standard license price.</div>
                                        @error('extcost')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="col-sm-4 mb-3">

                                        <label class="form-label" for="unp-standard-price">Sponser Coverage</label>
                                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                                            <input class="form-control" type="number" wire:model.lazy="sponsercoverage">
                                        </div>
                                        <div class="form-text">Average marketplace price for this category is $15.</div>
                                        @error('nostall')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4 mb-3">

                                        <label class="form-label" for="unp-standard-price">Media Coverage</label>
                                        <div class="input-group"><span class="input-group-text"><i class="ci-dollar"></i></span>
                                            <input class="form-control" type="number" wire:model.lazy="mediacoverage">
                                        </div>
                                        <div class="form-text">Average marketplace price for this category is $15.</div>
                                        @error('nostall')
                                        <div class="form-text">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                        @endif

                        @if($formm == 'detailSpeaker')
                        @endif

                        @if($formm == 'detailParticipants')

                            <form action="">
                            </form>

                            @elseif($formm == 'detailSpeaker')

                            <form wire:submit.prevent="newSpeaker">
                                <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                                    <h2 class="h3 py-2 me-2 text-center text-sm-start">Add New Speaker</h2>

                                    <div class="py-2">
                                        <select class="form-select me-2" wire:model.lazy="event_id">
                                            <option>Select Event</option>
                                            @foreach($exhibition_id as $expo_id)
                                            <option value="{{$expo_id->id}}">{{$expo_id->eventname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class=" col-6 form-floating mb-1">
                                        <input class="form-control" type="text" placeholder="Name" wire:model="name" wire:keyup="generateSlug">
                                        <label for="fl-text">Name</label>
                                    </div>

                                    <div class=" col-6 form-floating mb-1">
                                        <select class="form-select" wire:model.lazy="designation">
                                            <option selected>Choose Designation</option>
                                            <option value="founder">Founder</option>
                                            <option value="ceo">CEO</option>
                                            <option value="head">Head</option>
                                            <option value="manager">Manager</option>
                                            <option value="entrepreneur">Entrepreneur</option>
                                        </select>
                                        <label for="fl-select">Select Designation</label>
                                    </div>

                                    <div class="col-6 form-floating mb-3">
                                        <input class="form-control" type="text" placeholder="Brand Name" wire:model.lazy="organisation">
                                        <label for="fl-text">Organisation</label>
                                        <div class="form-text">Speaker's Organisation Name</div>
                                    </div>
                                    <div class="col-6 form-floating mb-3">
                                        <input class="form-control" type="text" placeholder="Brand's website" wire:model.lazy="website">
                                        <label for="fl-text">Brand's website</label>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="1" wire:model.lazy="not_website">
                                            <label class="fs-ms">If you don't have business website.</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row g-2">
                                    <div class=" col-5 form-floating mb-1">
                                        <input class="form-control" type="text" placeholder="Contact" wire:model.lazy="contact">
                                        <label for="fl-text">Contact</label>
                                    </div>

                                    <div class="col-7 form-floating mb-1">
                                        <input class="form-control" type="text" placeholder="e-mail" wire:model.lazy="email">
                                        <label for="fl-text">e-mail</label>
                                    </div>

                                    <div class=" col-5 form-floating mb-3">
                                        <select class="form-select" wire:model.lazy="channel">
                                            <option selected>Choose Social</option>
                                            <option value="linkedin">Linkedin</option>
                                            <option value="facebook">Facebook</option>
                                            <option value="twitter">Twitter</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="google">Google</option>
                                        </select>
                                        <label for="fl-select">Select Social</label>
                                        <div class="form-text">Select Speaker's social link Platform</div>
                                    </div>

                                    <div class="col-7 form-floating mb-3">
                                        <input class="form-control" type="text" placeholder="Social Link" wire:model.lazy="link">
                                        <label for="fl-text">Socil Link</label>
                                        <div class="form-text">Upload speaker's social profile address.</div>
                                    </div>
                                </div>

                                <div class="mb-2 pb-2">
                                    <!--<label class="form-label" for="unp-product-files">Exhibition booklet for sale</label>-->
                                    <input class="form-control" type="file" wire:model.lazy="image">
                                    <label class="fs-ms">Upload Speaker's Image</label><span class="form-text">
                                        Maximum file size is 1GB</span>
                                </div>


                                <div class="form-check mb-1 pb-1">
                                    <input class="form-check-input" type="checkbox" value="1" wire:model.lazy="terms">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        You must agree with our <a href="#"> Terms & Conditions</a>
                                    </label>
                                </div>
                                <button class="btn btn-primary d-block w-100" type="submit"><i class="ci-cloud-upload fs-lg me-2"></i>Submit</button>
                            </form>

                            @elseif($formm == 'planSponsership')
                        @endif

                        @if($formm == 'client')
                            <div class="container mt-5">
                                <div class="fs-md">Contact details </div>
                                @foreach ($getContact as $franchise)
                                <div class="">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                        <div class="col  pr-0">

                                            <div class="h4 fw-light mb-0"> 1 </div>
                                            <div class="small text-muted">{{$franchise->count()}} </div>

                                            <div class="round-circle"><i class="bi bi-bookmark"></i></div>
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
                                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="claimer({{$franchise->id}})">Claim</a> --}}

                                            <a class="btn btn-primary btn-sm" href="#" wire:click.prevent="del({{$franchise->id}})">Delete</a>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="my-5">
                                <div class="small"> List meet-up brands, update contacts what we get during expo visit.</div>

                                <input type="text" wire:model.lazy="" class="form-control" placeholder="search brand">
                                <button> <i class="bi bi-search"></i> </button>

                                @foreach ($findreferenceBrand as $evento)
                                <div class="my-1">
                                    <div class="row text-center p-1 gx-0 mb-1  shadow-sm  border rounded border-1">
                                        <div class="col  pr-0">
                                            @if(is_null($evento->brand_logo))
                                            <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'image' ])}}">Add</a>
                                            @else
                                            <a class="card-img-top d-block overflow-hidden" href="{{route('admin.eventMultiEdit',['event_id' => $evento->id, 'formm' => 'image' ])}}">
                                                <img src="{{url('public/assets/image/exhibition/'.$evento->brand_logo)}}" alt="{{Str::limit($evento->eventname, 24)}}"></a>
                                            @endif
                                        </div>

                                        <div class="col-7  p-0">
                                            <div class="fs-md fw-normal text-start">
                                                <a class="text-dark" href="#">
                                                    {{$evento->brand_name}}</a>
                                            </div>
                                            <div class="text-muted fs-sm text-start">
                                                {{$evento->organisation}}
                                            </div>
                                            <div class="text-muted fs-sm text-start"></div>
                                        </div>

                                        <div class="col-3  p-0">
                                            <a href="{{route('admin.brandDetail',['brand_id' => $evento->id])}}" class="btn btn-primary">Add</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                                <form wire:submit.prevent="participantToAdd">
                                    <div class="row mb-5 pb-2" wire:model="checkvalue">


                                    </div>
                                </form>

                                <form wire:submit.prevent="AddBrandAttend">

                                    {{-- <select class="form-control mb-1" type="text"   wire:model.lazy="event_id" >
                                    <option selected>Choose</option>
                                @foreach($findInspection as $findoo)
                                    <option value="{{$findoo -> id}}">{{$findoo -> eventname}}</option>
                                    @endforeach
                                    </select> --}}

                                    {{--find out brand with  name--}}
                                    <input type="text" class="form-control mb-1" wire:model.lazy="brand_name" placeholder="brand_name">

                                    <div class="small">
                                        <input type="checkbox" value="1" wire:model="lookingAddFromIMage" name="" id=""> Add Participants
                                    </div>

                                    @if($lookingAddFromIMage == 1)

                                    <div class="row mb-5 pb-2" wire:model="checkvalue">
                                        @foreach ($participants as $participant)
                                        {{--<div class="col-auto text-center border border-1 my-1 mx-1">--}}
                                        @php
                                        $findoutsponsored = DB::table('participants')->where('event_id', $event_id)->where('brand_id' , $participant->id)->value('sponsership_id');
                                        @endphp


                                        <div class=" col col-auto my-1 px-2">
                                            <input class="form-check-input" type="checkbox" value="{{$participant->id}}" wire:model="checkvalue">
                                            @if(is_null($findoutsponsored))

                                            @else
                                            <span class="badge  border-1 text-right border-dark text-dark mr-1"> {{$findoutsponsored}}</span>
                                            @endif
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()" wire:click.prevent="Imagedelete({{$participant->id}})"> <i class="bi bi-x me-2"></i> </a>
                                            <img src="{{url('public/assets/image/exhibition/'.$participant->brand_logo)}}" alt="#" width="50px">
                                            <span class="fs-sm"></span> {{$participant->brand_name}}
                                        </div>
                                        @endforeach
                                        <div>@json($checkvalue)</div>
                                    </div>

                                    @endif

                                    <input type="text" class="form-control mb-1" wire:model.lazy="country" placeholder="country">
                                    <input type="text" class="form-control mb-1" wire:model.lazy="link" placeholder="link">

                                    <input type="text" class="form-control mb-1" wire:model.lazy="brand_name" placeholder="brand_name">

                                    <input type="text" class="form-control mb-1" wire:model.lazy="name" placeholder="name">
                                    <input type="text" class="form-control mb-1" wire:model.lazy="contact" placeholder="contact">
                                    <input type="email" class="form-control mb-1" wire:model.lazy="email" placeholder="email">
                                    <input type="text" class="form-control mb-1" wire:model.lazy="designation" placeholder="designation">

                                    {{-- <textarea type="text" class="form-control mb-1" wire:model.lazy="comment" placeholder="comment"></textarea>
                                <input type="text" class="form-control mb-1" wire:model.lazy="size" placeholder="size">
                                <input type="text" class="form-control mb-1" wire:model.lazy="grade" placeholder="grade">
                                <textarea type="text" class="form-control mb-1" wire:model.lazy="reminder" placeholder="reminder"></textarea>

                                <input type="text" class="form-control mb-1" wire:model.lazy="email_request" placeholder="email_request">
                                <input type="text" class="form-control mb-1" wire:model.lazy="service_request" placeholder="service_request">--}}

                                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                                    </form>
                            </div>
                        @endif


                </div>
            </div>



                <div class="container my-5">

                    {{-- Form 1: Association Listing --}}
                    <form wire:submit.prevent="asscoiationlist" class="p-4 border rounded-3 shadow-sm bg-light">

                        <h5 class="mb-3 fw-semibold text-primary">Association Details</h5>

                        @php
                        $venueoption = DB::table('associations')->whereNotNull('assoname')->get();
                        @endphp

                        <div class="row g-3">

                            <div class="col-12 col-md-3">
                                <label class="form-label">Association</label>
                                <select class="form-select" wire:model.lazy="reference_id">
                                    <option value="">Choose</option>
                                    @foreach($venueoption as $venueo)
                                    <option value="{{ $venueo->id }}">{{ $venueo->assoname }}</option>
                                    @endforeach
                                </select>
                                @error('eventype')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-3">
                                <label class="form-label">Rate (per sqm)</label>
                                <input type="number" class="form-control" placeholder="Rate Cost per sqm" wire:model.lazy="disrate">
                                @error('costrate')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-3">
                                <label class="form-label">Stall Area (sqm)</label>
                                <input type="number" class="form-control" placeholder="Area of Stall/Booth" wire:model.lazy="stall_area">
                                @error('Stall_area')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-3">
                                <label class="form-label">Closing Date</label>
                                <input type="date" class="form-control" wire:model.lazy="expiredate">
                                @error('closing_date')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-3">
                                <label class="form-label">Approved Date</label>
                                <input type="date" class="form-control" wire:model.lazy="startdate">
                                @error('approved_date')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="mt-4">
                            <button class="btn btn-primary w-100 w-md-auto px-4" type="submit">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>

                <div class="container mb-5">

                    {{-- Form 2: Add New Government Association --}}
                    <form wire:submit.prevent="listgovermentassocaition" class="p-4 border rounded-3 shadow-sm bg-light">

                        <h5 class="mb-3 fw-semibold text-primary">Add New Association</h5>

                        <div class="row g-3">

                            <div class="col-12 col-md-4">
                                <label class="form-label">Association Name</label>
                                <input type="text" class="form-control" placeholder="Association Name" wire:model.lazy="assoname">
                                @error('assoname')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="form-label">Association Logo</label>
                                <input type="file" class="form-control" wire:model="assoimage">
                                @error('assoimage')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 col-md-4">
                                <label class="form-label">Type</label>
                                <input type="text" class="form-control" placeholder="Type" wire:model.lazy="type">
                                @error('type')
                                <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="mt-4">
                            <button class="btn btn-primary w-100 w-md-auto px-4" type="submit">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>

            </div>
            </div>

        </div>
    </div>

    <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100">
            <a class="d-table-cell handheld-toolbar-item" href="{{route('adminevent.detail', ['slug' => $evento->slug])}}">
                <a class="d-table-cell handheld-toolbar-item" href="#">
                    <span class="handheld-toolbar-icon">
                        <i class="ci-filter-alt"></i></span>
                    <span class="handheld-toolbar-label">Admin</span>
                </a>


                <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id,'board'=>'edit'])}}">
                    <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
                    <span class="handheld-toolbar-label">Edit</span></a>

                <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.editcategories',['event_id' => $evento->id])}}">
                    <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                    <span class="handheld-toolbar-label">category</span>
                </a>

                <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
                    <span class="handheld-toolbar-label">Menu</span>
                </a>
        </div>
    </div>

</main>