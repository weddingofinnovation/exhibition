<?php

namespace App\Http\Livewire;

use App\Models\Knotes;
use Livewire\Component;

class GiftBirthdayComponent extends Component
{
    public $name;
    public $phone;
    public $status;
    public $Atype;
    public $Adate;
    public $Btype;
    public $Bdate;
    public $board;

    public $partytype;
    public $contactdetails;

    public function mount($board, $partytype = null, $contactdetails =  null)
    {
        $this->board = $board;
        $this->partytype = $partytype;
        $this->contactdetails = $contactdetails;
    }

    public function jollyknotes()
    {
        $jollyknot = new Knotes();
        $jollyknot->name = $this->name;
        $jollyknot->phone = $this->phone;
        $jollyknot->email = $this->email;
        $jollyknot->save();

        //dd($jollyknot, $jollyknot->id );
        //return redirect()->route('date.business', ['ido' => $jollyknot->id, 'board' => 'birthday']);
        return redirect()->route('gift.business', ['partytype' =>  $this->partytype, 'contactdetails' => 'null']);
        // partytype?}/{contactdetails
    }

    public function render()
    {
        return view('livewire.gift-birthday-component');
    }
}
