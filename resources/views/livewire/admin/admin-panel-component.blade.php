<main>
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
