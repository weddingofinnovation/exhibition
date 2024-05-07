<?php

namespace App\Http\Livewire\Document;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ExpandComponent extends Component
{

    public $visitorid;

    public function mount ($visitorid = null)
    {
        $this->visitorid = $visitorid; 
    }

    
    public function render()
    {
        return view('livewire.document.expand-component');
    }
}
