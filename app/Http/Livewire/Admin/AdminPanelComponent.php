<?php

namespace App\Http\Livewire\Admin;

use App\Models\Floorplan;
use App\Models\Space;
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

    protected $listeners = ['saveRect' => 'saveRect', 'loadFloorPlan' => 'loadFloorPlan'];

    public function mount($floorPlanId = null)
    {
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

        $path = $this->image->store('floor_plans', 'public');
        $url = Storage::url($path);

        $plan = FloorPlan::create([
            'name' => $this->name,
            'image_url' => $url,
        ]);

        $this->floorPlanId = $plan->id;
        $this->floorPlanUrl = $url;
        $this->spaces = [];
        $this->reset(['name','image']);

        // Prepare the data array
        $eventData = [
            'url' => asset(str_replace('app/public/', '', $this->floorPlanUrl)),
            'id' => $this->floorPlanId
        ];

        // Debug the data before dispatching
        dd($eventData);
 
        // Fire JS event to load Konva
        // $this->dispatchBrowserEvent('floorplanUploaded', [
        //     'url' => asset(str_replace('app/public/', '', $this->floorPlanUrl)),
        //     'id' => $this->floorPlanId
        // ]);
    }

    public function loadFloorPlan($id)
    {
        $plan = Floorplan::with('spaces')->find($id);
        if (!$plan) return;

        $this->floorPlanId = $plan->id;
        $this->floorPlanUrl = $plan->image_url;
        $this->spaces = $plan->spaces->toArray();

        $this->dispatchBrowserEvent('floorplanUploaded', ['url' => $this->floorPlanUrl]);
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
            'floor_plan_id' => $this->floorPlanId,
            'name' => $name,
            'coordinates' => $coords,
        ]);

        $this->spaces[] = $space->toArray();

        $this->dispatchBrowserEvent('rect-saved', ['id' => $space->id, 'name' => $name]);
    }

    public function render()
    {
        $allPlans = Floorplan::all();
        return view('livewire.admin.admin-panel-component', compact('allPlans'))->layout('layouts.admin');
    }
}
