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
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.dashboard', ['board' => 'floorplan','floorPlanId' => 'null'])}}" class="nav-link text-dark" style="background-color: #fff;">Floor Plan</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.dashboard', ['board' => 'design','floorPlanId' => 'null'])}}" class="nav-link text-dark" style="background-color: #fff;">Design</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
                
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.dashboard', ['board' => 'design','floorPlanId' => 'null'])}}" class="nav-link text-dark" style="background-color: #fff;">Floor Boxes</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.dashboard', ['board' => 'design','floorPlanId' => 'null'])}}" class="nav-link active bg-light text-success border-start border-3 border-success">Analytics</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
                 
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.dashboard', ['board' => 'design','floorPlanId' => 'null'])}}" class="nav-link text-dark" style="background-color: #fff;">Activity</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
              </ul>
          </div>

        </div>

        <div class="col-9">
          <div class="my-0">


                 @if($board == 'upload-floor') 
                    <div class="card shadow-sm border-0 mb-2">
                        <div class="card-body pb-1 pt-2">
                            <!-- Page Title -->
                            

                            <div class="d-flex justify-content-between align-items-center mb-2">
                            
                            
                                <h4 class="fw-bold mb-2">Design<small>0</small></h4>
                                <div class="d-flex justify-content-between align-items-center">

                                    <!-- <input type="search" class="form-control w-auto" placeholder="Search...">
                                    <button class="btn btn-primary ml-4">
                                        <i class="bi bi-download"></i> Export
                                    </button> -->

                                    <input type="text" wire:model="name" placeholder="Floor plan name" class="border p-2 mr-2">
                                    <input type="file" wire:model="image" accept="image/*">
                                    <button wire:click="saveFloorPlan" class="ml-2 bg-blue-600 text-white px-3 py-1 rounded"><i class="bi bi-upload"></i></button>

                                    <div wire:loading wire:target="image">Uploading…</div>
                                    @error('image') <div class="text-red-600">{{ $message }}</div> @enderror
                                    @error('name') <div class="text-red-600">{{ $message }}</div> @enderror

                                </div>
                            
                            </div>


                        <!-- start Konva Controls -->
                                <div class="mb-2">
                                    <button id="drawRectBtn" class="bg-green-500 text-white px-3 py-1 rounded"> <i class="bi bi-pencil"></i></button>
                                    <button id="clearCurrentBtn" class="ml-2 bg-gray-300 px-3 py-1 rounded"><i class="bi bi-eraser"></i></button>
                                    <button id="clearCurrentBtn" class="ml-2 bg-gray-300 px-3 py-1 rounded"><i class="bi bi-upload"></i></button>
                                </div>
                        </div>
                    </div>

                    <div class="">
                            

                            <!-- Konva Container -->
                            <div id="konvaContainer" style="border:1px solid #ccc; width:100%; max-width:1200px; height:400px;" wire:ignore></div>

                            <!-- Space Input -->
                            <div class="mt-2">
                                <input id="spaceNameInput" placeholder="Space name" class="border p-2">
                                <button id="saveRectBtn" class="bg-blue-600 text-white px-3 py-1 rounded">Save Booth</button>
                            </div>
                            <!-- end Konva Controls -->

                            <!-- Saved Spaces -->
                            <div class="mt-4">
                                <h3>Saved Spaces</h3>
                                <ul>
                                    @foreach($spaces as $s)
                                        <li>#{{ $s['id'] ?? '—' }} — {{ $s['name'] ?? 'Unnamed' }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        
                    </div>
                 @elseif($board == 'stall') 
                    <!-- Highlights Card -->
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h6 class="fw-bold mb-3">Highlights</h6>
                            <div class="row text-center">
                                <div class="col">
                                    <h5 class="fw-bold mb-0">201</h5>
                                    <small class="text-muted">Impressions</small>
                                </div>
                                <div class="col">
                                    <h5 class="fw-bold mb-0">1</h5>
                                    <small class="text-muted">Reactions</small>
                                </div>
                                <div class="col">
                                    <h5 class="fw-bold mb-0">1</h5>
                                    <small class="text-muted">Comments</small>
                                </div>
                                <div class="col">
                                    <h5 class="fw-bold mb-0">0</h5>
                                    <small class="text-muted">Reposts</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Metrics Card -->
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="fw-bold mb-3">Metrics</h6>
                            <select class="form-select w-auto mb-3">
                                <option>Impressions</option>
                                <option>Reactions</option>
                                <option>Comments</option>
                            </select>
                            <!-- Graph Placeholder -->
                            <div class="bg-light rounded p-5 text-center text-muted">
                                Graph / Chart Area
                            </div>
                        </div>
                    </div>
                 @endif
              
          </div>
        </div>
      </div>
     </div>


    <!-- Start First Design -->
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-4">Upload Floor Plan & Draw Boxes</h2>

            <!-- Upload Form -->
            <div class="mb-4">
                <input type="text" wire:model="name" placeholder="Floor plan name" class="border p-2 mr-2">
                <input type="file" wire:model="image" accept="image/*">
                <button wire:click="saveFloorPlan" class="ml-2 bg-blue-600 text-white px-3 py-1 rounded">Save Floor Plan</button>

                <div wire:loading wire:target="image">Uploading…</div>
                @error('image') <div class="text-red-600">{{ $message }}</div> @enderror
                @error('name') <div class="text-red-600">{{ $message }}</div> @enderror
            </div>

            <!-- Select Existing Floor Plan -->
            <div class="mb-3">
                <label>Select Existing Floor Plan</label>
                <select wire:model="floorPlanId" wire:change="$emit('loadFloorPlan', $event.target.value)">
                    <option value="">-- Choose --</option>
                    @foreach ($allPlans as $plan)
                        <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Konva Controls -->
            <div class="mb-2">
                <button id="drawRectBtn" class="bg-green-500 text-white px-3 py-1 rounded">Draw Rectangle</button>
                <button id="clearCurrentBtn" class="ml-2 bg-gray-300 px-3 py-1 rounded">Clear Drawing</button>
            </div>

            <!-- Konva Container -->
            <div id="konvaContainer" style="border:1px solid #ccc; width:100%; max-width:1200px; height:400px;" wire:ignore></div>

            <!-- Space Input -->
            <div class="mt-2">
                <input id="spaceNameInput" placeholder="Space name" class="border p-2">
                <button id="saveRectBtn" class="bg-blue-600 text-white px-3 py-1 rounded">Save Rectangle</button>
            </div>

            
        </div>
    <!-- Stop First Design -->

    @push('scripts')

        <script>
            // Listen for Livewire event after upload
            window.addEventListener('floorplanUploaded', event => {
                console.log('✅ Floor plan loaded:', event.detail.url);
                window.currentFloorPlanId = event.detail.id; // store it globally
                initKonva(event.detail.url);
            });



            let stage, layer, rect;
            let isDrawing = false;

            function initKonva(imageURL) {
                const container = document.getElementById('konvaContainer');
                if (!container) return;

                container.innerHTML = "";
                rect = null;

                stage = new Konva.Stage({
                    container: 'konvaContainer',
                    width: container.clientWidth,
                    height: 400
                });

                layer = new Konva.Layer();
                stage.add(layer);

                const imageObj = new Image();
                imageObj.onload = function () {
                    const floorImage = new Konva.Image({
                        image: imageObj,
                        width: stage.width(),
                        height: stage.height()
                    });
                    layer.add(floorImage);
                    layer.draw();
                };
                imageObj.src = imageURL;

                // Draw Rectangle
                stage.on('mousedown', function () {
                    if (!isDrawing) return;
                    const pos = stage.getPointerPosition();
                    rect = new Konva.Rect({
                        x: pos.x,
                        y: pos.y,
                        width: 0,
                        height: 0,
                        stroke: 'red',
                        strokeWidth: 2
                    });
                    layer.add(rect);
                });

                stage.on('mousemove', function () {
                    if (!isDrawing || !rect) return;
                    const pos = stage.getPointerPosition();
                    rect.width(pos.x - rect.x());
                    rect.height(pos.y - rect.y());
                    layer.batchDraw();
                });

                stage.on('mouseup', function () {
                    if (!isDrawing) return;
                    isDrawing = false;
                });
            }

            // Buttons
            document.addEventListener('DOMContentLoaded', () => {
                document.getElementById('drawRectBtn')?.addEventListener('click', () => { isDrawing = true; });

                document.getElementById('saveRectBtn')?.addEventListener('click', () => {
                    if (!rect) return alert('Draw rectangle first!');
                    const name = document.getElementById('spaceNameInput').value || 'Unnamed';
                    const coords = { x: rect.x(), y: rect.y(), width: rect.width(), height: rect.height() };
                    Livewire.emit('saveRect', { name, coords, floor_plan_id: window.currentFloorPlanId });
                });

                document.getElementById('clearCurrentBtn')?.addEventListener('click', () => {
                    if (rect) {
                        rect.destroy();
                        rect = null;
                        layer.draw();
                    }
                });
            });
        </script>

    @endpush
</main>
