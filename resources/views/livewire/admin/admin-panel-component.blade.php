<main>

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


@push('scripts')
    

  

@endpush



</main>