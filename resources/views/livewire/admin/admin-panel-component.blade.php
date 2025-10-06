<main>

   <div class="container mt-2">
      <div class="row">
        <div class="col-3">
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
                      <a href="#" class="nav-link text-dark" style="background-color: #fff;">Activity</a>
                      <span class="badge bg-danger rounded-pill">2</span>
                  </li>
                  <li class="nav-item mb-1">
                      <a href="#" class="nav-link text-dark" style="background-color: #fff;">Inbox</a>
                  </li>
              </ul>
          </div>

        </div>

        <div class="col-9">
          <div class="my-0">

              <div class="card shadow-sm border-0 mb-2">
                <div class="card-body pb-1 pt-2">
                    <!-- Page Title -->
                    

                    <div class="d-flex justify-content-between align-items-center mb-2">
                      
                      
                        <h4 class="fw-bold mb-2">Room<small>0</small></h4>
                          <div class="d-flex justify-content-between align-items-center">
                            <input type="search" class="form-control w-auto" placeholder="Search...">
                            <button class="btn btn-primary ml-4">
                                <i class="bi bi-download"></i> Export
                            </button>
                          </div>
                      
                    </div>


                    <!-- Tabs -->
                    <ul class="nav nav-tabs mb-2" id="analyticsTabs">
                      
                        <li class="nav-item">
                            <a class="nav-link active" href="#">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Visitors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Followers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Important</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Email</a>
                        </li>
                       
                      
                    </ul>
                </div>
              </div>

              
                <div>
                    <h2 class="text-xl font-bold mb-4">Draw Spaces on Floor Plan</h2>

                    <div class="relative border w-full max-w-4xl" style="height:600px;">
                        <img src="{{ $floorPlanUrl }}" class="w-full h-full object-contain" id="floorPlanImage">

                        <svg class="absolute top-0 left-0 w-full h-full" 
                            id="drawingSvg"
                            wire:ignore
                            style="cursor:crosshair;">
                            <!-- Existing spaces -->
                            @foreach($spaces as $space)
                                <polygon 
                                    points="{{ collect(json_decode($space['coordinates']))->map(fn($p)=>implode(',',$p))->join(' ') }}"
                                    class="fill-green-400 fill-opacity-30 stroke-black stroke-2"
                                    title="{{ $space['name'] }}">
                                </polygon>
                            @endforeach

                            <!-- Current polygon -->
                            @if($drawing)
                                <polygon 
                                    points="{{ collect($currentPolygon)->map(fn($p)=>implode(',',$p))->join(' ') }}"
                                    class="fill-yellow-400 fill-opacity-30 stroke-red-500 stroke-2">
                                </polygon>
                            @endif
                        </svg>
                    </div>

                    <div class="mt-4">
                        <input type="text" wire:model="spaceName" placeholder="Enter Space Name" class="border p-2 mr-2">
                        <button wire:click="saveSpace('New Space')" class="bg-blue-500 text-white px-4 py-2 rounded">Save Space</button>
                    </div>
                </div>
              
                  <div class="con">
                      <h2 class="text-xl font-bold mb-4">Draw Spaces on Floor Plan (Konva.js)</h2>

                      <div id="container" class="border w-full max-w-4xl" style="height:600px;"></div>

                      <div class="mt-4">
                          <input type="text" id="spaceName" placeholder="Enter Space Name" class="border p-2 mr-2">
                          <button id="saveSpaceBtn" class="bg-blue-500 text-white px-4 py-2 rounded">Save Space</button>
                      </div>
                  </div>
            
          </div>
        </div>
      </div>
     </div>
    








</main>