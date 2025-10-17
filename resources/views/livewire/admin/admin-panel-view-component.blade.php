<main>
    <div class="container mt-4">
      <div class="row">

        <div class="col-3 bg-light">
            <h4>Floor Plan {{ $floorplan->name ?? 'Floor Plan' }}</h4>

            <div class="card card-custom p-3 mx-auto">
                <div class="d-flex justify-content-between align-items-center mb-2">
                <h6 class="mb-0 fw-bold">32AE</h6>
                <button class="btn-close" aria-label="Close"></button>
                </div>

                <div class="status-hold mb-3">
                <span class="me-1">✋</span> On Hold
                </div>

                <div class="d-flex align-items-center mb-3">
                <div class="icon-box me-3">
                    <i class="bi bi-box"></i>
                </div>
                <div>
                    <small class="text-muted d-block">Booth Type</small>
                    <strong>MSME</strong>
                </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                <div class="icon-box me-3">
                    <i class="bi bi-arrows-angle-expand"></i>
                </div>
                <div>
                    <small class="text-muted d-block">Size</small>
                    <strong>7 × 7 / 49 m²</strong>
                </div>
                </div>

                <div class="d-flex align-items-center">
                <div class="icon-box me-3">
                    <i class="bi bi-currency-rupee"></i>
                </div>
                <div>
                    <small class="text-muted d-block">Price</small>
                    <strong>₹519,067.78</strong>
                </div>
                </div>
            </div>

             <!-- Selected Space Details -->
            @if($selectedSpace)
                <div class="mt-3 p-3 border rounded shadow-sm bg-white">
                    <h5>{{ $selectedSpace['name'] }}</h5>
                    <p>Area: {{ ($selectedSpace['coordinates']['width'] ?? 0) * ($selectedSpace['coordinates']['height'] ?? 0) }} sq units</p>
            
                    <p>Status: {{ $selectedSpace['status'] ?? 'available' }}</p>
                    @if(($selectedSpace['status'] ?? 'available') !== 'blocked')
                        <button wire:click="blockSpace({{ $selectedSpace['id'] }})" class="btn btn-danger btn-sm">Block Space</button>
                    @endif
                </div>
            @endif
        </div>

        <div class="col-9">
            @php
                $imageName = basename($floorplan->image_url);
            @endphp

            <!-- Floorplan container -->
            <div class="position-relative" style="width:100%; max-width:1200px; height:600px; border:1px solid #ccc; background:#f0f0f0;">
        
                <!-- Floorplan image -->
                @if($floorplan && $floorplan->image_url)
                    <img src="{{ asset('public/assets/image/exhibition/' . $imageName) }}" 
                        alt="Floor Plan" 
                        style="width:100%; height:100%; object-fit:cover;">
                @endif

                @foreach($spaces as $space)
                    <div wire:click="selectSpace({{ $space['id'] }})"
                        style="
                            position:absolute;
                            left: {{ $space['coordinates']['x'] ?? 0 }}px;
                            top: {{ $space['coordinates']['y'] ?? 0 }}px;
                            width: {{ $space['coordinates']['width'] ?? 50 }}px;
                            height: {{ $space['coordinates']['height'] ?? 50 }}px;
                            background-color: {{ $space['status'] ?? 'rgba(0,128,255,0.3)' }};
                            border: 1px solid black;
                            cursor:pointer;
                            display: flex;
                                align-items: center;
                                justify-content: center;
                                font-size: 10px;
                                text-align: center;
                                color: #000;
                                overflow: hidden;
                        "
                        title="{{ $space['name'] ?? 'Unnamed' }}"
                        
                    >
                    
                    {{-- Show name and size inside the box --}}
                    <div>
                        <strong>{{ $space['name'] ?? 'Unnamed' }}</strong><br>
                        {{ $space['coordinates']['width'] ?? 50 }} x {{ $space['coordinates']['height'] ?? 50 }}
                    </div>
                
                </div>
                @endforeach

                <div style="position: relative; width:100%; height:100%;">
                    @foreach($spaces as $space)
                        <div 
                            wire:click="selectSpace({{ $space['id'] }})"
                            style="
                                position:absolute;
                                    left: {{ $space['coordinates']['x'] ?? 0 }}px;
                                    top: {{ $space['coordinates']['y'] ?? 0 }}px;
                                    width: {{ $space['coordinates']['width'] ?? 50 }}px;
                                    height: {{ $space['coordinates']['height'] ?? 50 }}px;

                                background-color: {{ $space['status'] ?? 'rgba(0,128,255,0.3)' }};
                                border: 1px solid black;
                                cursor:pointer;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                font-size: 10px;
                                text-align: center;
                                color: #000;
                                overflow: hidden;
                            "
                            title="{{ $space['name'] ?? 'Unnamed' }}"
                        >
                            {{-- Show name and size inside the box --}}
                            <div>
                                <strong>{{ $space['name'] ?? 'Unnamed' }}</strong><br>
                                {{ $space['width'] ?? 50 }}x{{ $space['height'] ?? 50 }}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

      </div>

    </div>

    @push('scripts')
        <script>
            let spaces = @json($spaces);
            console.log('Spaces:', spaces);
        </script>
    @endpush
</main>
