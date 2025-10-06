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
    public $image; // uploaded file
    public $floorPlanId;
    public $floorPlanUrl;
    public $spaces = [];

    protected $listeners = ['saveRect' => 'saveRect'];

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
            'image' => 'required|image|max:5120', // 5MB
        ]);

        // store image in public disk
        $path = $this->image->store('floor_plans', 'public');
        $url = Storage::url($path); // /storage/floor_plans/xxx.jpg

        $plan = FloorPlan::create([
            'name' => $this->name,
            'image_url' => $url,
        ]);

        $this->floorPlanId = $plan->id;
        $this->floorPlanUrl = $url;
        $this->spaces = [];
        $this->reset(['name','image']);

        $this->dispatchBrowserEvent('floorplan-saved', ['id' => $plan->id]);
    }

    
    

    public function render()
    {
        return view('livewire.admin.admin-panel-component')->layout('layouts.admin');
    }
}
