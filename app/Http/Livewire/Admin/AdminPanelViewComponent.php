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

    public function mount($id)
    {
        $this->floorplan = Floorplan::findOrFail($id);
        $this->spaces = Space::where('floorplan_id', $id)->get()->toArray();
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
            $this->spaces = Space::where('floorplan_id', $space->floorplan_id)->get()->toArray();
            $this->selectedSpace = collect($this->spaces)->firstWhere('id', $id);
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-panel-view-component');
    }
}
