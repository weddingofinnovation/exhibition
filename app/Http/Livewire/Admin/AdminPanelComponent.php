<?php

namespace App\Http\Livewire\Admin;

use App\Models\Floorplan;
use App\Models\Space;
use Livewire\Component;

class AdminPanelComponent extends Component
{
    public $floorPlanId;
    public $floorPlanUrl;
    public $spaces = [];

    public $currentPolygon = [];
    public $drawing = false;

    protected $listeners = ['saveSpace']; // listens to frontend event

    public function mount($floorPlanId)
    {
        // $plan = Floorplan::findOrFail($floorPlanId);
        // $this->floorPlanId = $plan->id;
        // $this->floorPlanUrl = $plan->image_url;
        // $this->spaces = $plan->spaces()->get()->toArray();

        $this->floorPlanId = $floorPlanId;
        $floorPlan = FloorPlan::findOrFail($floorPlanId);
        $this->floorPlanUrl = $floorPlan->image_url;
        $this->spaces = $floorPlan->spaces()->get()->toArray();
    }

    // public function saveSpace($name, $coordinates)
    // {
    //     $space = Space::create([
    //         'floor_plan_id' => $this->floorPlanId,
    //         'name' => $name,
    //         'coordinates' => json_encode($coordinates),
    //     ]);

    //     $this->spaces[] = $space->toArray();

    //     $this->dispatchBrowserEvent('spaceSaved', [
    //         'name' => $name,
    //         'id' => $space->id
    //     ]);
    // }


    public function addPoint($x, $y)
    {
        $this->currentPolygon[] = [$x, $y];
        $this->drawing = true;
    }

    public function saveSpace($name)
    {
        if (count($this->currentPolygon) < 3) {
            $this->dispatchBrowserEvent('notify', 'Polygon must have at least 3 points.');
            return;
        }

        $space = Space::create([
            'floor_plan_id' => $this->floorPlanId,
            'name' => $name,
            'coordinates' => json_encode($this->currentPolygon),
        ]);

        $this->spaces[] = $space->toArray();
        $this->currentPolygon = [];
        $this->drawing = false;
    }

    public function render()
    {
        return view('livewire.admin.admin-panel-component')->layout('layouts.admin');
    }
}
