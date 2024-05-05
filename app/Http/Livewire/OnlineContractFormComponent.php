<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PDF;

class OnlineContractFormComponent extends Component
{
    public $productservice;
    public $optional;

    public function mount($productservice, $optional = null)
    {
       $this->productservice = $productservice;
       $this->optional = $optional; 
    }


    public function render()
    {
        return view('livewire.online-contract-form-component');
    }
}
