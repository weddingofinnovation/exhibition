<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\Franchise;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminFranchiseEditComponent extends Component
{
    
    public $searchTerm;


    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        return view('livewire.admin.admin-franchise-edit-component',['searchTerm' => $searchTerm]);
    }
}
