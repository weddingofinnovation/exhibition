<?php

namespace App\Http\Livewire;

use App\Models\Expo;
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
        $catego = Expo::where('type','expo')->orderBy('expoindustry','ASC')->get();
        return view('livewire.footer-component',['catego'=>$catego,'infos'=>$infos]);
    }
}
