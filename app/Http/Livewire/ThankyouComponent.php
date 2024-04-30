<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class ThankyouComponent extends Component
{
    public $visitorid;
    public $type;
    public $board;

    public function mount($visitorid = null, $type)
    {

        $this->visitorid = $visitorid;  
        $this->type = $type;  
    }


    public function render()
    {
        $findvisitor = Lead::where('id', $this->visitorid)->first();
        return view('livewire.thankyou-component', ['findvisitor' => $findvisitor])->layout('layouts.eblog');
    }
}
