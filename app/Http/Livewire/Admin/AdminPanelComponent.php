<?php

namespace App\Http\Livewire\Admin;

use App\Models\Floorplan;
use App\Models\Space;
use Carbon\Carbon;
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
        //str_replace('app/public/', '', $this->floorPlanUrl)

        // $eventData = [
        //     'url1' => asset(str_replace('/storage/floor_plans','','storage/app/public/floor_plans' . $this->floorPlanUrl)),
        //     //'url2' => asset('storage/app/public/floor_plans' . $this->floorPlanUrl),
        //     'id' => $this->floorPlanId
        // ];

        // // Debug the data before dispatching
        // dd($eventData);
 
        // Fire JS event to load Konva
        $this->dispatchBrowserEvent('floorplanUploaded', [
           // 'url' => asset(str_replace('/storage/floor_plans','','storage/app/public/floor_plans' . $this->floorPlanUrl)),
           'url' => $url,
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
