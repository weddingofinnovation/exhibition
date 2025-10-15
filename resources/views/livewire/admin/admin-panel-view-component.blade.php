<main>
    <div class="container mt-4">
    <h4>{{ $floorplan->name ?? 'Floor Plan' }}</h4>
    
     <h1>{{ $floorplan->name ?? 'Floorplan not found' }}</h1>

    <img src="{{ $floorplan->image_url ?? '' }}" alt="Floorplan" style="max-width: 600px;">

    <h3>Saved Spaces</h3>
    <ul>
        @foreach($spaces as $space)
            <li>
                {{ $space['name'] ?? 'Unnamed' }} — x: {{ $space['x'] }}, y: {{ $space['y'] }}, w: {{ $space['width'] }}, h: {{ $space['height'] }}
            </li>
        @endforeach
    </ul>


    <!-- Floorplan container -->
    <div class="position-relative" style="width:100%; max-width:1200px; height:600px; border:1px solid #ccc; background:#f0f0f0;">

        <!-- Floorplan image -->
        @if($floorplan && $floorplan->image)
            <img src="{{ asset('public/assets/image/exhibition/' . $floorplan->image) }}" 
                 alt="Floor Plan" 
                 style="width:100%; height:100%; object-fit:cover;">
        @endif

        <!-- Rectangles -->
        @foreach($spaces as $space)
           <div wire:click="selectSpace({{ $space['id'] }})"
                style="
                    position:absolute;
                    left: {{ $space['x'] ?? 0 }}px;
                    top: {{ $space['y'] ?? 0 }}px;
                    width: {{ $space['width'] ?? 50 }}px;
                    height: {{ $space['height'] ?? 50 }}px;
                    background-color: {{ $space['status'] ?? 'rgba(0,128,255,0.3)' }};
                    border: 1px solid black;
                    cursor:pointer;
                "
                title="{{ $space['name'] ?? 'Unnamed' }}"
            ></div>

        @endforeach
    </div>

    <!-- Selected Space Details -->
    @if($selectedSpace)
        <div class="mt-3 p-3 border rounded shadow-sm bg-white">
            <h5>{{ $selectedSpace['name'] }}</h5>
            <p>Area: {{ ($selectedSpace['width'] ?? 0) * ($selectedSpace['height'] ?? 0) }} sq units</p>
            <p>Status: {{ $selectedSpace['status'] ?? 'available' }}</p>
            @if(($selectedSpace['status'] ?? 'available') !== 'blocked')
                <button wire:click="blockSpace({{ $selectedSpace['id'] }})" class="btn btn-danger btn-sm">Block Space</button>
            @endif
        </div>
    @endif

</div>

@push('scripts')
    <script>
        let spaces = @json($spaces);
        console.log('Spaces:', spaces);
    </script>
@endpush
</main>
