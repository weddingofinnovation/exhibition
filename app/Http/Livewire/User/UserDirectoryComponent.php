<?php

namespace App\Http\Livewire\User;

use App\Models\Directory;
use Livewire\Component;

class UserDirectoryComponent extends Component
{
    public $name; 
    public $phone; 
    public $email;
    public $designation;
    public $hall; 
    public $number; 
    public $stall;
    public $category; 
    public $product; 
    public $company; 
    public $address; 
    public $country; 
    public $about;
    public $directorydetails;
    public $reference;
    public $status;
    public $admstatus;

    
    public function mount ($directorydetails, $reference = null)
    {
        $this->directorydetails = $directorydetails;
        $this->reference = $reference;
        $this->status = '1';
        $this->admstatus = '0';
    }


    public function contactdetails()
    {
        $basicdetails =  new Directory();
        $basicdetails->name = $this->name;
        $basicdetails->phone = $this->phone;
        $basicdetails->email = $this->email;
        $basicdetails->designation = $this->designation;
        $basicdetails->save();
        return redirect()->route('directory.dashboard', ['directorydetails' => 'stall-details','reference' => $basicdetails->id]);
       // dd($basicdetails->id);
    }

    public function stalldetails()
    {
        $stalldetails =  new Directory();
        $stalldetails->stall = $this->stall;
        $stalldetails->hall = $this->hall;
        $stalldetails->save();
        return redirect()->route('directory.dashboard', ['directorydetails' => 'product-details','reference' =>  $this->reference]);
    }

    public function productdetails()
    {
        $stalldetails =  Directory::find($this->reference);
        $stalldetails->category = $this->category;
        $stalldetails->product = $this->product;
        $stalldetails->save();
        return redirect()->route('directory.dashboard', ['directorydetails' => 'directory-details','reference' =>  $this->reference]);
    }

    public function directorydetails() 
    {
       $directorydetails = Directory::find($this->reference);
       $directorydetails->company = $this->company; 
       $directorydetails->address = $this->address;
       $directorydetails->country = $this->country;
       $directorydetails->about = $this->about;
       $directorydetails->status = $this->status;
       $directorydetails->admstatus = $this->admstatus;
       $directorydetails->save();

       return redirect()->route('directory.dashboard', ['directorydetails' => 'submit&thanks','reference' =>  $this->reference]);
    }

    public function render()
    {
        $directory = Directory::find($this->reference)->first();
        return view('livewire.user.user-directory-component' , ['directory' => $directory]) ;
    }
}
