<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminFranchiseEditComponent extends Component
{
    
    public $searchTerm;
    public $searchCat = [];
    //mayank
    public function render()
    {
        if (trim($this->searchTerm) !== '') {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->searchCat = Event::where('eventname', 'LIKE', $searchTerm)
                                ->where('status', '1')
                                ->orderBy('eventname', 'ASC')
                                ->get();
    } else {
        $this->searchCat = []; // Ensure it's still an array
    }

        return view('livewire.admin.admin-franchise-edit-component',['searchCat' => $this->searchCat]);
    }
}
