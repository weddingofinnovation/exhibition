@section('page_title','Add event')
@section('page_path',' addevent')
@section('page_list',' addevent')
@section('page_name',' Add event')

<main>
    <div class="container mb-5 pb-5">
        <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
            <div class="text-sm-end">
                <a class="btn btn-primary" href="{{route('admin.dashboard', ['board' => 'event'])}}" data-bs-toggle="modal"> All Event </a>
            </div>
            @if (Session::has('message'))<h6 class="fs-base text-light mb-0">{{Session::get('message')}}</h6>@endif
            <a class="btn btn-primary btn-sm" href="#"><i class="ci-sign-out me-2"></i>Sign out</a>
        </div>

        @if($formm == 'event' )
        <form wire:submit.prevent="updateEvent">
            <div class="row g-1">

                <div class="col-sm-3">
                    <label class="form-label" for="seniority">Type</label>
                    <select class="form-control" type="text" wire:model.lazy="eventype" placeholder="Provide short title of your request">
                        <option> Choose</option>
                        <option value="award">Award</option>
                        <option value="conference">Conference</option>
                        <option value="expo">Exhibition</option>
                        <option value="festival">Festival</option>
                        <option value="network">Network</option>
                    </select>
                    @error('eventype') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Event Name</label>
                    <input class="form-control" type="text" placeholder="Your Event" wire:model="eventname" wire:keyup="generateSlug" required="">
                    @error( 'eventname' ){{ $message}}@enderror
                </div>

                <div class="col-sm-1">
                    <label class="form-label" for="cf-name">Edition</label>
                    <input class="form-control" type="text" placeholder="Your Edition" wire:model.lazy="edition" required="">
                    @error( 'edition' ){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Start Date</label>
                    <input class="form-control" type="date" wire:model.lazy="startdate" required="">
                    @error('startdate' ){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">End Date</label>
                    <input class="form-control" type="date" wire:model.lazy="enddate" required="">
                    @error( 'enddate' ){{ $message}}@enderror
                </div>


                <div class="col-sm-3">
                    <label class="form-label" for="cf-name">Venue</label>
                    <input class="form-control" type="text" placeholder="Your City" wire:model.lazy="venue" required="">
                    @error( 'venue' ){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">City</label>
                    <input class="form-control" type="text" placeholder="Event City" wire:model="city" required="">
                    @error('city'){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Visitor</label>
                    <input class="form-control" type="text" placeholder="Your Visitor" wire:model.lazy="auidence" required="">
                    @error('auidence'){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Exhibitor</label>
                    <input class="form-control" type="text" placeholder="Your Exhibitor" wire:model.lazy="exhibitors" required="">
                    @error('exhibitors'){{ $message}}@enderror
                </div>



                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Tag Line</label>
                    <textarea class="form-control" type="text" row="2" placeholder="Your Tagline" wire:model.lazy="tagline" required=""></textarea>
                    @error('tagline'){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Desc</label>
                    <textarea class="form-control" type="text" placeholder="Your Desc" rows="2" wire:model.lazy="desc" required=""></textarea>
                    @error('desc'){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Short Description</label>
                    <textarea class="form-control" type="text" placeholder="Your Short desc" rows="2" wire:model.lazy="shtdesc" required=""></textarea>
                    @error('shtdesc'){{ $message}}@enderror
                </div>

                <div class="col-sm-2">
                    <label class="form-label" for="cf-name">Web Link</label>
                    <input class="form-control" type="text" wire:model.lazy="link" required=""></input>
                    @error('link'){{ $message}}@enderror
                </div>

            </div>

            <hr class="my-2">
            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Organizer</label>
                    <input class="form-control" type="text" placeholder="Your email" wire:model.lazy="organizer" required="">
                    @error( 'organizer' ){{ $message}}@enderror
                </div>
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Email</label>
                    <input class="form-control" type="email" placeholder="Your email" wire:model.lazy="email" required="">
                    @error( 'email' ){{ $message}}@enderror
                </div>

                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Phone</label>
                    <input class="form-control" type="number" placeholder="Your Phone" wire:model.lazy="phone" required="">
                    @error( 'phone' ){{ $message}}@enderror
                </div>
            </div>

            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
        @endif


        @if($formm == 'image')
        <!-- Additional styling -->
        <style>
            .delete-btn {
                top: 5px;
                right: 5px;
                font-size: 1rem;
                padding: 2px 6px;
            }

            @media (max-width: 576px) {
                .delete-btn {
                    font-size: 0.8rem;
                    /* Smaller X icon on mobile */
                }

                img {
                    width: 100%;
                    /* Ensure the image takes full width of the container */
                    height: auto;
                    /* Maintain aspect ratio */
                }
            }

            /* Notification dot style */
            .used-notification {
                width: 15px;
                height: 15px;
                background-color: green;
                border-radius: 50%;
                position: absolute;
                top: 10px;
                right: 10px;
            }

            /* Red delete notification dot */
            .delete-notification {
                width: 15px;
                height: 15px;
                background-color: red;
                border-radius: 50%;
                position: absolute;
                top: 10px;
                left: 10px;
                cursor: pointer;
            }

            @media (max-width: 576px) {

                .used-notification,
                .delete-notification {
                    width: 10px;
                    height: 10px;
                    /* Smaller dot on mobile */
                }
            }
        </style>

        <form wire:submit.prevent="dateImage">
            <div class="col-sm-2">
                <label class="form-label" for="cf-name"> {{$evento->eventname}} Image</label>
                <input class="form-control" type="file" wire:model.lazy="image" required="">
                @error('image'){{ $message}}@enderror
            </div>
            <button class=" form-control btn btn-primary mt-2" type="submit">Submit</button>
        </form>

        <hr class="mt-5">

        <div class="container mt-4">
            <div class="row">
                @foreach($photos as $image)
                <div class="col-6 col-md-4 position-relative mb-3">
                    <!-- Overlay delete button -->
                    {{-- <button class="btn btn-danger btn-sm position-absolute delete-btn" wire:click.prevent="delphoto({{ $image['id'] }})">
                    <i class="bi bi-x"></i>
                    </button> --}}
                    <!-- Green dot notification if product is used -->

                    <span class="position-absolute used-notification"></span>


                    <!-- Red dot delete button -->
                    <span class="position-absolute delete-notification" wire:click.prevent="delphoto({{ $image->id }})"></span>
                    <!-- Image with click-to-select -->
                    <img
                        src="{{url('public/assets/image/exhibition/'.$image->brand_lgo)}}"
                        class="img-fluid {{ $selectedImage == $image['id'] ? 'border border-primary' : '' }}"
                        alt="Image {{ $image['id'] }}"
                        wire:click.prevent="adDphoto({{ $image['id'] }})"
                        style="cursor: pointer;">
                </div>
                @endforeach
            </div>

            @if($selectedImage)
            <div class="alert alert-info mt-3">
                Image {{ $selectedImage }} is selected.
            </div>
            @endif
        </div>
        @endif

        @if($formm == 'tag')
        <form wire:submit.prevent="updateEvent">
            <div class="col-sm-2">
                <label class="form-label" for="cf-name">Tag Line</label>
                <textarea class="form-control" type="text" rows="8" placeholder="Your Tagline" wire:model.lazy="tagline" required=""></textarea>
                @error('tagline'){{ $message}}@enderror
            </div>
            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
        @endif

        @if($formm == 'desc')
        <form wire:submit.prevent="updateEvent">
            <div class="col-sm-2">
                <label class="form-label" for="cf-name">Desc</label>
                <textarea class="form-control" type="text" placeholder="Your Desc" rows="5" wire:model.lazy="desc" required=""></textarea>
                @error('desc'){{ $message}}@enderror
            </div>
            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
        @endif

        @if($formm == 'short')
        <form wire:submit.prevent="updateEvent">
            <div class="col-sm-2">
                <label class="form-label" for="cf-name">Short Description</label>
                <textarea class="form-control" type="text" placeholder="Your Short desc" rows="5" wire:model.lazy="shtdesc" required=""></textarea>
                @error('shtdesc'){{ $message}}@enderror
            </div>
            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
        @endif

        @if($formm == 'webo')
        <form wire:submit.prevent="updateEvent">

            <div class="col-sm-2">
                <label class="form-label" for="cf-name">Web Link</label>
                <input class="form-control" type="text" wire:model.lazy="link" required=""></input>
                @error('link'){{ $message}}@enderror
            </div>
            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
        @endif

        @if($formm == 'organiser')
        <form wire:submit.prevent="updateEvent">

            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Organizer</label>
                    <input class="form-control" type="text" placeholder="Your email" wire:model.lazy="organizer" required="">
                    @error( 'organizer' ){{ $message}}@enderror
                </div>
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Email</label>
                    <input class="form-control" type="email" placeholder="Your email" wire:model.lazy="email" required="">
                    @error( 'email' ){{ $message}}@enderror
                </div>

                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Phone</label>
                    <input class="form-control" type="number" placeholder="Your Phone" wire:model.lazy="phone" required="">
                    @error( 'phone' ){{ $message}}@enderror
                </div>
            </div>

            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>

        <!-- select organiser -->
        <form wire:submit.prevent="addorganisation">
            <div class="row">

                <div class="col-sm-3">
                    <label class="form-label" for="seniority">Find Organiser</label>
                    <select class="form-control" type="text" wire:model.lazy="brand_id" placeholder="Provide short title of your request">
                        <option>Choose</option>
                        @foreach($findoorganizer as $organiserowner)
                        <option value="{{$organiserowner->id}}">{{$organiserowner->brand_name}}</option>
                        @endforeach
                    </select>
                    @error('brand_id') <div class="invalid-feedback"> {{$message}} </div> @enderror
                </div>

            </div>

            <button class=" form-control btn btn-primary mt-2" type="submit">Submit</button>
        </form>

        <div class="col">
            <a href="{{route('admin.dashboard', ['board' => 'new-organiser'])}}">
                <div class="p-3 border rounded border-dark bg-light text-center">Add Organiser</div>
            </a>
        </div>
        @endif

        @if($formm == 'magazine')
        <form wire:submit.prevent="">

            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Name</label>
                    <input class="form-control" type="text" placeholder="Name" wire:model.lazy="name" required="">
                    @error( 'name' ){{ $message}}@enderror
                </div>
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Type</label>
                    <input class="form-control" type="email" placeholder="Type" wire:model.lazy="type" required="">
                    @error( 'type' ){{ $message}}@enderror
                </div>

                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Desc</label>
                    <input class="form-control" type="number" placeholder="Description" wire:model.lazy="desc" required="">
                    @error( 'desc' ){{ $message}}@enderror
                </div>

                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Desc</label>
                    <input class="form-control" type="number" placeholder="Distribution" wire:model.lazy="frequency" required="">
                    @error( 'frequency' ){{ $message}}@enderror
                </div>

            </div>

            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
        @endif

        @if($formm == 'address')
        <form wire:submit.prevent="updateLocation">
            <div class="row">
                <div class="col-sm-4">
                    <label class="form-label" for="cf-name">Address</label>
                    <input class="form-control" type="text" placeholder="address" wire:model.lazy="address" required="">
                    @error( 'address' ){{ $message}}@enderror
                </div>
            </div>

            <button class="btn btn-primary mt-2" type="submit">Submit</button>
        </form>
        @endif
    </div>

    <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100">
            @if($this->event_id === null)
            @else
            <a class="d-table-cell handheld-toolbar-item" href="{{route('adminevent.detail',['slug' => $evento->slug])}}">
                <span class="handheld-toolbar-icon"><i class="ci-filter-alt"></i></span>
                <span class="handheld-toolbar-label">Admin</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.eventEdit',['event_id' => $evento->id, 'board' =>'edit'])}}">
                <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
                <span class="handheld-toolbar-label">Edit</span>
            </a>

            <a class="d-table-cell handheld-toolbar-item" href="{{route('admin.editcategories',['event_id' => $evento->id])}}">
                <span class="handheld-toolbar-icon"><i class="ci-cart"></i></span>
                <span class="handheld-toolbar-label">category</span>
            </a>

            @endif
            <a class="d-table-cell handheld-toolbar-item" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <span class="handheld-toolbar-icon"><i class="ci-heart"></i></span>
                <span class="handheld-toolbar-label">Menu</span>
            </a>
        </div>
    </div>
</main>