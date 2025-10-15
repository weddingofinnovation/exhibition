<?php

namespace App\Http\Livewire\Admin;

use App\Models\Floorplan;
use App\Models\Space;
use Livewire\Component;

class AdminPanelViewComponent extends Component
{
    public $floorplan;
    public $spaces = [];
    public $selectedSpace;

    public function mount($boardid)
{
    $this->floorplan = Floorplan::findOrFail($boardid);

    // Get spaces from DB, coordinates already cast to array
    $this->spaces = Space::where('floorplan_id', $boardid)
                         ->get()
                         ->toArray(); // now coordinates inside each space are arrays
}




    public function selectSpace($id)
    {
        $this->selectedSpace = collect($this->spaces)->firstWhere('id', $id);
    }

   
    public function blockSpace($id)
    {
        $space = Space::find($id);
        if ($space) {
            $space->status = 'blocked';
            $space->save();

            // Refresh spaces
           $this->spaces = Space::where('floorplan_id', $this->floorPlanId)
            ->get(['id','name','x','y','width','height','status']) // select only needed columns
            ->map(function($space){
                return [
                    'id' => $space->id,
                    'name' => $space->name,
                    'x' => $space->x ?? 0,
                    'y' => $space->y ?? 0,
                    'width' => $space->width ?? 50,   // default value if null
                    'height' => $space->height ?? 50, // default value if null
                    'status' => $space->status ?? 'available',
                ];
            })->toArray();

            $this->selectedSpace = collect($this->spaces)->firstWhere('id', $id);
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-panel-view-component');
    }
}
