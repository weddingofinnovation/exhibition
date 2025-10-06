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

              
           <div class="p-4">
  <h2 class="text-xl font-semibold mb-4">Upload Floor Plan & Draw Boxes</h2>

  <!-- Upload form -->
  <div class="mb-4">
    <input type="text" wire:model="name" placeholder="Floor plan name" class="border p-2 mr-2">
    <input type="file" wire:model="image" accept="image/*">
    <button wire:click="saveFloorPlan" class="ml-2 bg-blue-600 text-white px-3 py-1 rounded">Save Floor Plan</button>

    <div wire:loading wire:target="image">Uploading…</div>
    @error('image') <div class="text-red-600">{{ $message }}</div> @enderror
    @error('name') <div class="text-red-600">{{ $message }}</div> @enderror
  </div>

  <!-- Konva container (only show after floor plan is set) -->
  @if($floorPlanUrl)
    <div>
      <div class="mb-2">
        <button id="drawRectBtn" class="bg-green-500 text-white px-3 py-1 rounded">Draw Rectangle</button>
        <button id="clearCurrentBtn" class="ml-2 bg-gray-300 px-3 py-1 rounded">Clear Drawing</button>
      </div>

      <div id="konvaContainer" style="border:1px solid #ddd; width:100%; max-width:1200px; height:600px;"></div>

      <div class="mt-3">
        <input id="spaceNameInput" placeholder="Space name (for saving)" class="border p-2">
        <button id="saveRectBtn" class="ml-2 bg-blue-600 text-white px-3 py-1 rounded">Save Selected Box</button>
      </div>

      <div class="mt-4">
        <h3 class="font-semibold mb-2">Saved spaces</h3>
        <ul>
          @foreach($spaces as $s)
            <li class="text-sm">#{{ $s['id'] ?? '—' }} — {{ $s['name'] ?? 'Unnamed' }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif
</div>

            
          </div>
        </div>
      </div>
     </div>
    


<!-- Konva -->
<script src="https://cdn.jsdelivr.net/npm/konva@9.4.1/konva.min.js"></script>







</main>