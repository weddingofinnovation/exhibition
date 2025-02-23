<?php

namespace App\Http\Livewire\Livewire;

use App\Models\Magazine;
use App\Models\Photo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminMagazineComponent extends Component
{

    public $magazine_id;
    public $image = [];
    public $status;
    public $admstatus;
    // public $image;
    public $user_id;

    public function mount($magazine_id = null)
    {
       $this->magazine_id = $magazine_id;
       $this->status = '1';
       $this->admstatus = '1';
    }   

    use WithFileUploads;
    
    public function multiImage()
    {
        $multiimage = $this->image;

        foreach($multiimage as $key => $imageso)
        {
            $brand = new Photo();
            $bran = Magazine::find($this ->magazine_id);
            $brand->magazine_id = $bran->id;

            $newimage = Carbon::now()->timestamp. $key. '.'. $multiimage[$key]->extension();
            $multiimage[$key]->storeAs('exhibition', $newimage);
            $brand->image = $newimage;

            $brand->status = $this->status;
            $brand->admstatus = $this->admstatus;
            $brand->user_id = Auth::user()->id;
            $brand->save();
        }
    }

    public function render()
    {
        return view('livewire.livewire.admin-magazine-component');
    }
}
