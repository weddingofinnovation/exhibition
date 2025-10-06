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


    @php 
        $allPlans = DB::('floorplans')->get()
    @endphp
    
   <!-- Select existing floor plan -->
    <div class="mb-3">
        <label>Select Existing Floor Plan</label>
        <select wire:model="floorPlanId" wire:change="$emit('loadFloorPlan', $event.target.value)">
            <option value="">-- Choose --</option>
            @foreach ($allPlans as $plan)
                <option value="{{ $plan->id }}">{{ $plan->name }}</option>
            @endforeach
        </select>
    </div>

    <div wire:ignore id="container" style="border: 1px solid #ccc;"></div>

  <!-- Konva container (only show after floor plan is set) -->
  @if($floorPlanUrl)
    <div>
      <div class="mb-2">
        <button id="drawRectBtn" class="bg-green-500 text-white px-3 py-1 rounded">Draw Rectangle</button>
        <button id="clearCurrentBtn" class="ml-2 bg-gray-300 px-3 py-1 rounded">Clear Drawing</button>
      </div>

      <div id="konvaContainer" style="border:1px solid #ddd; width:100%; max-width:1200px; height:400px;"></div>

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

 @push('scripts')
    <script>
        document.addEventListener('livewire:load', function () {
        const floorPlanUrl = @json($floorPlanUrl);
        if (!floorPlanUrl) return;

        // Stage size — you can adapt to container size. We'll compute based on image natural size for accuracy.
        const container = document.getElementById('konvaContainer');
        container.innerHTML = ''; // ensure empty

        const stage = new Konva.Stage({
            container: 'konvaContainer',
            width: container.clientWidth,
            height: container.clientHeight,
        });
        const layer = new Konva.Layer();
        stage.add(layer);

        // load image to determine natural width/height
        const img = new Image();
        img.src = floorPlanUrl;
        img.onload = function() {
            // scale image to fit container while keeping aspect ratio
            const imgW = img.naturalWidth;
            const imgH = img.naturalHeight;
            const containerW = container.clientWidth;
            const containerH = container.clientHeight;
            let drawW = containerW, drawH = containerH;

            // fit inside container
            const ratio = Math.min(containerW / imgW, containerH / imgH);
            drawW = imgW * ratio;
            drawH = imgH * ratio;

            stage.width(drawW);
            stage.height(drawH);

            const floorImage = new Konva.Image({
            x: 0, y: 0, image: img,
            width: drawW, height: drawH,
            });
            layer.add(floorImage);
            layer.draw();

            // draw previously saved spaces (server-provided via blade)
            const existingSpaces = @json($spaces);
            existingSpaces.forEach(s => {
            // coordinates stored as percentages {x, y, width, height}
            if (!s.coordinates) return;
            const c = s.coordinates;
            const x = c.x * drawW;
            const y = c.y * drawH;
            const w = c.width * drawW;
            const h = c.height * drawH;
            const rect = new Konva.Rect({
                x, y, width: w, height: h,
                fill: 'rgba(0,255,0,0.2)', stroke: 'green', strokeWidth: 2,
                draggable: true,
            });
            // allow transform
            layer.add(rect);
            });
            layer.draw();

            // DRAWING: click & drag to create rectangle
            let isDrawing = false;
            let newRect;
            let startPos = null;

            function startDrawing(pos) {
            isDrawing = true;
            startPos = pos;
            newRect = new Konva.Rect({
                x: pos.x, y: pos.y, width: 1, height: 1,
                fill: 'rgba(255,255,0,0.3)', stroke: 'red', strokeWidth: 2,
            });
            layer.add(newRect);
            }

            function updateDrawing(pos) {
            if (!isDrawing || !newRect) return;
            const x = Math.min(startPos.x, pos.x);
            const y = Math.min(startPos.y, pos.y);
            const w = Math.abs(pos.x - startPos.x);
            const h = Math.abs(pos.y - startPos.y);
            newRect.position({ x, y });
            newRect.size({ width: w, height: h });
            layer.batchDraw();
            }

            function finishDrawing() {
            isDrawing = false;
            // newRect remains on layer for manipulation
            layer.batchDraw();
            }

            // enable/disable drawing mode by button
            let drawingMode = false;
            document.getElementById('drawRectBtn').addEventListener('click', () => {
            drawingMode = !drawingMode;
            document.getElementById('drawRectBtn').textContent = drawingMode ? 'Drawing: ON (click-drag)' : 'Draw Rectangle';
            });

            document.getElementById('clearCurrentBtn').addEventListener('click', () => {
            if (newRect) { newRect.destroy(); newRect = null; layer.draw(); }
            });

            stage.on('mousedown touchstart', function(e) {
            if (!drawingMode) return;
            const pos = stage.getPointerPosition();
            startDrawing(pos);
            });

            stage.on('mousemove touchmove', function(e) {
            if (!drawingMode) return;
            const pos = stage.getPointerPosition();
            if (isDrawing) updateDrawing(pos);
            });

            stage.on('mouseup touchend', function(e) {
            if (!drawingMode) return;
            if (isDrawing) finishDrawing();
            });

            // Save selected rectangle
            document.getElementById('saveRectBtn').addEventListener('click', () => {
            const name = document.getElementById('spaceNameInput').value || 'New Space';
            // choose rectangle to save: the last drawn newRect or currently selected rect
            const rectToSave = newRect;
            if (!rectToSave) {
                alert('Draw a rectangle first (enable Draw Rectangle).');
                return;
            }
            // compute percentages
            const xPct = rectToSave.x() / drawW;
            const yPct = rectToSave.y() / drawH;
            const wPct = rectToSave.width() / drawW;
            const hPct = rectToSave.height() / drawH;
            const payload = { name: name, coords: { x: xPct, y: yPct, width: wPct, height: hPct } };

            // emit to Livewire (listener 'saveRect' in PHP)
            Livewire.emit('saveRect', payload);

            // optional: visually mark it as saved (green)
            rectToSave.fill('rgba(0,255,0,0.25)');
            rectToSave.stroke('green');
            rectToSave.draggable(true);
            newRect = null;
            layer.draw();
            });

            // Listen for server events
            window.addEventListener('rect-saved', (e) => {
            // e.detail has id, name
            console.log('Saved rect: ', e.detail);
            });

        }; // img.onload

        }); // livewire:load
    </script>
@endpush



</main>