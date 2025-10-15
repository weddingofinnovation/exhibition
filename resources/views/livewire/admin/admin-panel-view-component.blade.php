<main>
<div class="container-fluid mt-4">
    <h4>{{ $floorplan->name }}</h4>
    <div id="konvaContainer" class="border rounded shadow-sm" style="height:600px;"></div>

    <!-- Popup -->
    <div id="sidePopup"
         style="display:none; position:fixed; right:20px; top:20px; width:280px; background:#fff;
                box-shadow:0 4px 12px rgba(0,0,0,0.2); border-radius:8px; padding:15px; z-index:100;">
        <h5 id="popupTitle"></h5>
        <p><strong>Area:</strong> <span id="popupArea"></span> sq units</p>
        <p><strong>Status:</strong> <span id="popupStatus"></span></p>
        <button id="blockButton" class="btn btn-danger btn-sm">Block this space</button>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const container = document.getElementById('konvaContainer');
            const stalls = @json($spaces);
            const url = "{{ asset('public/assets/image/exhibition/' . $floorplan->image) }}";

            const stage = new Konva.Stage({
                container: 'konvaContainer',
                width: container.offsetWidth,
                height: 600
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

                stalls.forEach(stall => {
                    const rect = new Konva.Rect({
                        id: stall.id,
                        x: parseFloat(stall.x),
                        y: parseFloat(stall.y),
                        width: parseFloat(stall.width),
                        height: parseFloat(stall.height),
                        fill: stall.color || (stall.status === 'blocked' ? '#ff4d4d' : 'rgba(0,150,255,0.4)'),
                        stroke: 'black',
                        strokeWidth: 1
                    });

                    const label = new Konva.Text({
                        x: rect.x() + 5,
                        y: rect.y() + 5,
                        text: stall.name || `#${stall.id}`,
                        fontSize: 12,
                        fill: '#000'
                    });

                    rect.on('click', () => {
                        const area = (rect.width() * rect.height()).toFixed(2);
                        showSidePopup({
                            id: stall.id,
                            name: stall.name,
                            area: area,
                            status: stall.status || 'available'
                        });
                    });

                    layer.add(rect);
                    layer.add(label);
                });

                layer.batchDraw();
            };
            imageObj.src = url;

            function showSidePopup(data) {
                const popup = document.getElementById('sidePopup');
                popup.style.display = 'block';
                document.getElementById('popupTitle').innerText = data.name;
                document.getElementById('popupArea').innerText = data.area;
                document.getElementById('popupStatus').innerText = data.status;
                document.getElementById('blockButton').onclick = function() {
                    Livewire.emit('blockSpace', data.id);
                    popup.style.display = 'none';
                };
            }

            window.addEventListener('space-blocked', event => {
                const { id, color } = event.detail;
                const shape = stage.findOne(`#${id}`);
                if (shape) {
                    shape.fill(color);
                    stage.draw();
                }
            });
        });
    </script>
    @endpush
</div>
</main>
