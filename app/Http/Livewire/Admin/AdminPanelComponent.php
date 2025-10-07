<?php

namespace App\Http\Livewire\Admin;

use App\Models\Floorplan;
use App\Models\Space;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPanelComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $floorPlanId;
    public $floorPlanUrl;
    public $spaces = [];
    public $board;
    public $stalls;

    protected $listeners = ['saveRect' => 'saveRect', 'loadFloorPlan' => 'loadFloorPlan'];

    public function mount($floorPlanId = null, $board = null)
    {
        $this->board = $board;
        $this->floorPlanId = $floorPlanId;
        if ($floorPlanId) {
            $plan = FloorPlan::with('spaces')->find($floorPlanId);
            if ($plan) {
                $this->floorPlanUrl = $plan->image_url;
                $this->spaces = $plan->spaces->toArray();
            }
        }
    }

    public function saveFloorPlan()
    {
        $this->validate([
            'name' => 'required|string',
            'image' => 'required|image|max:5120',
        ]);


        $fileName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $fileName);

        //$fattribute->image = $newimage;

       // ✅ Save image directly to /public/floor_plans/
        // $fileName = time() . '_' . $this->image->getClientOriginalName();
        // $this->image->move(public_path('floor_plans'), $fileName);

        // Publicly accessible URL
        //$url = url('floor_plans/' . $fileName);
        $url = url($fileName);
        $plan = FloorPlan::create([
            'name' => $this->name,
            'image_url' => $url,
            'image' => $fileName,
        ]);

        $this->floorPlanId = $plan->id;
        $this->floorPlanUrl = $url;
        $this->spaces = [];
        $this->reset(['name','image']);

        // Prepare the data array asset('storage/exhibition/' . $newFileName), 
        //str_replace('app/public/', '', $this->floorPlanUrl)public/assets/image/exhibition/

        // $eventData = [
        //    'url' => asset('public/assets/image/exhibition/' . $this->floorPlanUrl),
        // //     //'url2' => asset('storage/app/public/floor_plans' . $this->floorPlanUrl),
        //    'id' => $this->floorPlanId
        // ];

        // // Debug the data before dispatching
        // dd($eventData);
 
        // Fire JS event to load Konva
        $this->dispatchBrowserEvent('floorplanUploaded', [
           // 'url' => asset(str_replace('/storage/floor_plans','','storage/app/public/floor_plans' . $this->floorPlanUrl)),
           'url' => asset('public/assets/image/exhibition/' . $fileName),
           'id' => $this->floorPlanId
        ]);
    }

    public function loadFloorPlan($id)
    {
        $plan = Floorplan::with('spaces')->find($id);
        if (!$plan) return;

            $this->floorPlanId = $plan->id;
            $this->floorPlanUrl = $plan->image_url;
            $this->spaces = $plan->spaces->toArray();

            $this->dispatchBrowserEvent('floorplanUploaded', [
                'url' => $this->floorPlanUrl,
                'id' => $this->floorPlanId
        ]);
    }

    public function saveRect($data)
    {
        if (!$this->floorPlanId) {
            $this->dispatchBrowserEvent('notify', ['type'=>'error','message'=>'Save/select floor plan first.']);
            return;
        }

        $decoded = is_string($data) ? json_decode($data, true) : $data;
        $name = $decoded['name'] ?? 'Unnamed';
        $coords = $decoded['coords'] ?? null;

        if (!$coords) {
            $this->dispatchBrowserEvent('notify', ['type'=>'error','message'=>'No coordinates provided.']);
            return;
        }

        $space = Space::create([
            'floorplan_id' => $this->floorPlanId,
            'name' => $name,
            'coordinates' => $coords,
        ]);

        $this->spaces[] = $space->toArray();

        $this->dispatchBrowserEvent('rect-saved', ['id' => $space->id, 'name' => $name]);
    }

    public $selected = [];

    public function deleteSelected()
    {
        if (count($this->selected)) {
            DB::table('floorplans')->whereIn('id', $this->selected)->delete();
            $this->selected = [];
            session()->flash('message', 'Selected floorplans deleted successfully!');
        }
    }
    
  public function loadFloorData($floorId)
{
    // Fetch the floor record (assuming you have a `FloorPlan` model or table)
    $floor = DB::table('floorplans')->find($floorId);

    if (!$floor) {
        $this->dispatchBrowserEvent('notify', [
            'type' => 'error',
            'message' => 'Floor plan not found.'
        ]);
        return;
    }

    // Assign floor info
    $this->floorPlanId = $floor->id;
    $this->floorPlanUrl = asset('public/assets/image/exhibition/' . $floor->image);
   // 'url' => asset('public/assets/image/exhibition/' . $fileName),

    // Check if `spaces` table exists before querying
    if (Schema::hasTable('spaces')) {
        $this->spaces = Space::where('floorplan_id', $floor->id)
            ->select('id', 'name', 'x', 'y', 'width', 'height', 'area', 'color')
            ->get()
            ->toArray();
    } else {
        $this->spaces = [];
    }

    // Send data to JavaScript for Konva rendering
    $this->dispatchBrowserEvent('load-floorplan', [
        'url' => $this->floorPlanUrl,
        'stalls' => $this->spaces
    ]);
}



    public function render()
    {
        $allPlans = Floorplan::all();
        return view('livewire.admin.admin-panel-component', compact('allPlans'))->layout('layouts.admin');
    }
}
