<?php

namespace App\Http\Livewire;

use App\Models\Info;
use Livewire\Component;


class FooterComponent extends Component
{
    public $eventype;

    public function mount()
    {
        $this->eventype = 'exhibition';
    }

    public function render()
    {
        $infos = Info::where('name','socialy')->first();
        return view('livewire.footer-component',['infos'=>$infos]);
    }
}
