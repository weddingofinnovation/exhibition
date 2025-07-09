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
    public $searchCat;

    //mayank
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchCat = Event::Where('eventname','LIKE', $searchTerm)->where('status','1')->orderBy('eventname','ASC')->get();
        return view('livewire.admin.admin-franchise-edit-component',['searchCat' => $searchCat]);
    }
}
