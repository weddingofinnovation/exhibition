<?php

namespace App\Http\Livewire;

use App\Models\Contractio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class ContractFromComponent extends Component
{
    public $owner;
    public $organisation;
    public $brand_name;
    public $GST;
    public $industry;
    public $product;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $state;
    public $country;
    public $hall;
    public $stall;
    public $size;

    public $formm;
    public $brand_id;

    public $designation;
    


    public function mount( )
    {
    //    $finder = Contractio::find($brand_id);
    //    $this->brand_id = $finder->id;
    //    $this->owner = $finder->owner; 
    //     $this->organisation = $finder->organisation;
    //     $this->brand_name = $finder->brand_name;
    //     $this->GST = $finder->GST;
    //     $this->industry = $finder->industry;
    //     $this->product = $finder->product;
    //     $this->email = $finder->email;
    //     $this->phone = $finder->phone;
    //     $this->address = $finder->address;
    //     $this->city = $finder->city;
    //     $this->state = $finder->state;
    //     $this->country = $finder->country;
    //     $this->hall = $finder->hall;
    //     $this->stall = $finder->stall;
    //     $this->size = $finder->size;
    }
    


    public function contactlogin()
    {
        $conractlogin =  new User();
        $conractlogin->email = $this->email;
        $conractlogin->phone = $this->phone;
        $conractlogin->name = 'exhibitor';
        $conractlogin->password = $this->email;
        $conractlogin->save();
        return redirect()->route('space.booking', ['formm' => 'connect']);
    }

    public function connecdetails()
    {
        $conractlogin =  new Contractio();
        $conractlogin->featureid = '123456';
        $conractlogin->name = $this->name;
        $conractlogin->organisation = $this->organisation;
        $conractlogin->designation = $this->designation;
        $conractlogin->save();
        //$contractio = $conractlogin->id;
        return redirect()->route('space.booking', ['formm' => 'space']);

    }

    public function spacedetails()
    {
        $conractlogin =  new Contractio();

        $conractlogin->hall = $this->hall;
        $conractlogin->stall = $this->stall;
        $conractlogin->size = $this->size;
        $conractlogin->side_open = $this->side_open;

        $conractlogin->save();
        return redirect()->route('space.booking', ['formm' => 'exhibitor']);
    }

    public function contractForm()
    {
        // $contractformi = Contractio::find($this->brand_id);
        // $contractformi->owner = Str::lower(trim($this->owner));
        // $contractformi->organisation = Str::lower(trim($this->organisation));
        // $contractformi->brand_name = Str::lower(trim($this->brand_name));
        // $contractformi->GST = Str::lower(trim($this->GST));
        // $contractformi->industry = Str::lower(trim($this->industry));
        // $contractformi->product = Str::lower(trim($this->product));
        // $contractformi->email = Str::lower(trim($this->email));
        // $contractformi->phone = Str::lower(trim($this->phone));
        // $contractformi->address = Str::lower(trim($this->address));
        // $contractformi->city = Str::lower(trim($this->city));
        // $contractformi->state = Str::lower(trim($this->state));
        // $contractformi->country = Str::lower(trim($this->country));
        // $contractformi->hall = Str::lower(trim($this->hall));
        // $contractformi->stall = Str::lower(trim($this->stall));
        // $contractformi->size = Str::lower(trim($this->size));
        
        // //$contractformi->brand_id = '1';
        // //$contractformi->event_id = '2';
        // $contractformi->save();
    }

    public function render()
    {
        return view ('livewire.contract-from-component');
    }
}


