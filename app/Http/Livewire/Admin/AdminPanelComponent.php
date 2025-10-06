<?php

namespace App\Http\Livewire\Admin;

use App\Models\Floorplan;
use App\Models\Space;
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

    

    public function render()
    {
        return view('livewire.admin.admin-panel-component')->layout('layouts.admin');
    }
}
