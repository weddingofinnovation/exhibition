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
                      <a href="{{route('admin.panel', ['board' => 'floorplan','floorPlanId' => 'null'])}}" class="nav-link text-dark" style="background-color: #fff;">Floor Plan</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.panel', ['board' => 'design','floorPlanId' => 'null'])}}" class="nav-link text-dark" style="background-color: #fff;">Design</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
                
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.panel', ['board' => 'design','floorPlanId' => 'null'])}}" class="nav-link text-dark" style="background-color: #fff;">Floor Boxes</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.panel', ['board' => 'design','floorPlanId' => 'null'])}}" class="nav-link active bg-light text-success border-start border-3 border-success">Analytics</a>
                      <span class="badge bg-danger rounded-pill">0</span>
                  </li>
                 
                  <li class="nav-item mb-1 d-flex justify-content-between align-items-center">
                      <a href="{{route('admin.panel', ['board' => 'design','floorPlanId' => 'null'])}}" class="nav-link text-dark" style="background-color: #fff;">Activity</a>
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
                 
                 @elseif($board == 'floorplan')
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

                    <div class="container">
                        @php 
                            // Fetch all floorplans with stall count
                            $findallfloorplanuploaded = DB::table('floorplans')
                                ->orderBy('created_at', 'desc')
                                ->get();
                        @endphp

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5>All Floor Plans</h5>
                            <button 
                                class="btn btn-danger btn-sm" 
                                wire:click="deleteSelected" 
                                @disabled(empty($selected))
                            >
                                Delete Selected
                            </button>
                        </div>

                        <div class="row mb-5 pb-2">
                            @foreach ($findallfloorplanuploaded as $floor)
                                @php 
                                    // Count stalls directly (no need to fetch all rows)
                                    $stallCount = DB::table('spaces')->where('floorplan_id', $floor->id)->count();
                                @endphp

                                <style>
                                    .selectable-card.selected {
                                        border: 2px solid #007bff !important;
                                        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5) !important;
                                        transform: scale(1.03);
                                    }
                                </style>


                                <div class="col-md-4 col-sm-6 mb-4">
                                     <div class="card shadow-sm border-0 h-100 selectable-card {{ in_array($floor->id, $selected) ? 'selected' : '' }}" 
                                        wire:click="toggleSelect({{ $floor->id }})"
                                        style="cursor:pointer; transition: all 0.2s ease;">
                                    
                                        <div class="card-body d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="form-check mb-2">
                                                    <input 
                                                        type="checkbox" 
                                                        class="form-check-input" 
                                                        wire:model="selected" 
                                                        value="{{ $floor->id }}">
                                                </div>

                                                <img 
                                                    class="rounded-circle border" 
                                                    src="{{ url('public/assets/image/exhibition/' . $floor->image_url) }}" 
                                                    width="60" 
                                                    height="60" 
                                                    alt="{{ $floor->name }}"
                                                >
                                                <div class="ms-3">
                                                    <h6 class="mb-1 text-body">
                                                        <a class="text-decoration-none stretched-link" href="#">
                                                            {{ $floor->name }}
                                                        </a>
                                                    </h6>
                                                    <small class="text-muted">{{ $stallCount }} Stalls</small>
                                                </div>
                                            </div>
                                            <button 
                                                id="loadkonvaContainer" 
                                                class="btn btn-sm btn-outline-secondary ms-2"
                                            >
                                                Map
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($findallfloorplanuploaded as $floor)
                                @php 
                                    // Count stalls directly (no need to fetch all rows)
                                    $stallCount = DB::table('spaces')->where('floorplan_id', $floor->id)->count();
                                @endphp
                                <div class="col-md-4 col-sm-6 mb-2">
                                    <div class="card shadow-sm border-0 h-100">

                                 <div class="d-flex align-items-center justify-content-between w-100 mb-2"> 
                                    <div class="d-flex align-items-center position-relative"> 
                                        <img class="rounded-circle ms-2" src="{{url('public/assets/image/exhibition/'.$floor->image_url)}}" width="17%" alt="Avatar"> 
                                        <div class="ms-2"> <h4 class="mb-1 fs-base text-body">
                                             <a class="nav-link-style stretched-link" href="#">{{$floor->name}}</a> </h4> 
                                             <h5 class="mb-1 fs-xs"> <a class="nav-link-style stretched-link" href="#">1</a> </h5> 
                                             
                                             </div> </div> 
                                             <button id="loadkonvaContainer" class="btn btn-sm btn-outline-secondary ms-2">Map</button> 
                                            </div>
                                 
                                 </div>
                                </div>
                            @endforeach
                        </div>
                        
                        <hr>
                    </div>

                 @elseif($board == 'launch')
                    <h1>Launch</h1>

                    <div class="bg-dark">
                        <input id="scaleInput" placeholder="Meters per pixel" value="0.05" class="form-control">
                        <button id="drawRectBtn" class="form-control">Draw Rectangle</button>
                    </div>

                    <div id="loadkonvaContainer" style="width: 800px; height: 400px; border:1px solid #ccc;"></div>
                 @endif
              
          </div>
        </div>
      </div>
     </div>

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

        <script>
            let stage, layer, rect, areaText;
            let isDrawing = false;
            let scaleMetersPerPixel = parseFloat(document.getElementById('scaleInput').value);
            let savedSpaces = []; // Example: load from DB [{coordinates: {x:..., y:..., width:..., height:...}, name: "A"}]

            function initKonva(imageURL = null, savedSpacesData = []) {
            const container = document.getElementById('konvaContainer');
            container.innerHTML = "";
            rect = null;
            savedSpaces = savedSpacesData;

            stage = new Konva.Stage({
                container: 'konvaContainer',
                width: container.clientWidth,
                height: container.clientHeight
            });

            layer = new Konva.Layer();
            stage.add(layer);

            // Draw grid
            drawGrid(stage.width(), stage.height(), layer);

            // Load floor plan image if provided
            if (imageURL) {
                const img = new Image();
                img.onload = function () {
                    const floorImage = new Konva.Image({
                        image: img,
                        width: stage.width(),
                        height: stage.height()
                    });
                    layer.add(floorImage);
                    layer.batchDraw();
                    drawSavedRectangles();
                };
                img.src = imageURL;
            } else {
                drawSavedRectangles();
            }

            // Rectangle drawing
            stage.on('mousedown', () => {
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

                areaText = new Konva.Text({
                    x: pos.x,
                    y: pos.y - 20,
                    text: '0 sqm',
                    fontSize: 14,
                    fill: 'black'
                });
                layer.add(areaText);
            });

            stage.on('mousemove', () => {
                if (!isDrawing || !rect) return;
                const pos = stage.getPointerPosition();
                rect.width(pos.x - rect.x());
                rect.height(pos.y - rect.y());

                const widthMeters = rect.width() * scaleMetersPerPixel;
                const heightMeters = rect.height() * scaleMetersPerPixel;
                const area = widthMeters * heightMeters;

                areaText.text(`W: ${widthMeters.toFixed(2)}m H: ${heightMeters.toFixed(2)}m Area: ${area.toFixed(2)} sqm`);
                layer.batchDraw();
            });

            stage.on('mouseup', () => {
                if (!isDrawing) return;
                isDrawing = false;
                // Optionally: save rectangle to DB here via Livewire.emit()
            });
            }

                // Draw saved rectangles from DB
                function drawSavedRectangles() {
                    savedSpaces.forEach(space => {
                        const coords = space.coordinates;
                        const savedRect = new Konva.Rect({
                            x: coords.x,
                            y: coords.y,
                            width: coords.width,
                            height: coords.height,
                            stroke: 'blue',
                            strokeWidth: 2,
                            name: 'savedRect'
                        });
                        layer.add(savedRect);

                        const widthMeters = coords.width * scaleMetersPerPixel;
                        const heightMeters = coords.height * scaleMetersPerPixel;
                        const area = widthMeters * heightMeters;

                        const text = new Konva.Text({
                            x: coords.x,
                            y: coords.y - 20,
                            text: `${space.name || 'Unnamed'} W:${widthMeters.toFixed(2)} H:${heightMeters.toFixed(2)} Area:${area.toFixed(2)} sqm`,
                            fontSize: 14,
                            fill: 'black'
                        });
                        layer.add(text);
                    });
                    layer.draw();
                }

                // Draw 1 sqm grid
                function drawGrid(width, height, layer) {
                    const gridSize = 1 / scaleMetersPerPixel; // pixels per meter
                    for (let i = 0; i <= width; i += gridSize) {
                        layer.add(new Konva.Line({
                            points: [i, 0, i, height],
                            stroke: '#ddd',
                            strokeWidth: 1
                        }));
                    }
                    for (let j = 0; j <= height; j += gridSize) {
                        layer.add(new Konva.Line({
                            points: [0, j, width, j],
                            stroke: '#ddd',
                            strokeWidth: 1
                        }));
                    }
                    layer.draw();
                }

                // Activate drawing
                document.getElementById('drawRectBtn').addEventListener('click', () => { isDrawing = true; });

                // Update scale dynamically
                document.getElementById('scaleInput').addEventListener('change', (e) => {
                    scaleMetersPerPixel = parseFloat(e.target.value);
                    initKonva(); // redraw stage with new scale
                });

                // Example: load floor plan with existing spaces
                // initKonva('floorplan.jpg', savedSpaces);

        </script>

    
        <script>
            document.addEventListener('DOMContentLoaded', () => {

            Livewire.on('loadfloorplan', e => {
                console.log('Loading floor plan:', e);

                const container = document.getElementById('loadkonvaContainer');
                if (!container) return;

                const stage = new Konva.Stage({
                    container: 'konvaContainer',
                    width: container.clientWidth,
                    height: container.clientHeight
                });

                const layer = new Konva.Layer();
                stage.add(layer);

                const imageObj = new Image();
                imageObj.onload = function() {
                    const bg = new Konva.Image({
                        image: imageObj,
                        width: stage.width(),
                        height: stage.height()
                    });
                    layer.add(bg);
                    layer.batchDraw();

                    // Load all stalls from DB
                    e.stalls.forEach(stall => {
                        const rect = new Konva.Rect({
                            x: stall.x,
                            y: stall.y,
                            width: stall.width,
                            height: stall.height,
                            fill: stall.color || 'rgba(52,152,219,0.4)',
                            stroke: 'black',
                            strokeWidth: 1,
                            draggable: false
                        });

                        const label = new Konva.Text({
                            x: stall.x + 5,
                            y: stall.y + 5,
                            text: stall.name + "\n" + stall.area + " sqm",
                            fontSize: 12,
                            fill: '#000'
                        });

                        // On click show stall info
                        rect.on('click', () => {
                            alert(`Stall: ${stall.name}\nArea: ${stall.area} sqm`);
                        });

                        layer.add(rect);
                        layer.add(label);
                    });

                    layer.batchDraw();
                };

                imageObj.src = e.url;
                });
            });
        </script>

    @endpush
</main>
