<?php

namespace App\Http\Livewire\Admin;

use App\Models\Floorplan;
use App\Models\Space;
use Livewire\Component;

class AdminPanelViewComponent extends Component
{
    public $floorplan;
    public $spaces = [];

    public function mount($id)
    {
        $this->floorplan = Floorplan::findOrFail($id);
        $this->spaces = Space::where('floorplan_id', $id)->get();
    }

    public function blockSpace($spaceId)
    {
        $space = Space::find($spaceId);
        if (!$space) return;

        $space->status = 'blocked';
        $space->color = '#ff4d4d';
        $space->save();

        $this->dispatchBrowserEvent('space-blocked', [
            'id' => $space->id,
            'color' => $space->color
        ]);
    }

    public function render()
    {
        return view('livewire.admin.admin-panel-view-component');
    }
}
