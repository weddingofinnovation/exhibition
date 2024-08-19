<?php

namespace App\Http\Livewire\Livewire;

use Livewire\Component;

class PrivacyComponent extends Component
{
    public function render()
    {
        return view ('livewire.privacy-component')->layout('layouts.eblog');
    }
}
