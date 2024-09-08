<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;
use PDF;

class OnlineContractFormComponent extends Component
{
    public $productservice;
    public $optional;
    public $selectedImage;
    public $images = [];        // To store the fetched images
    public $selectedImages = []; // To store selected image IDs

    use WithPagination;
    public function mount($productservice, $optional = null)
    {
       $this->productservice = $productservice;
       $this->optional = $optional; 
       $this->images = Brand::whereNotNull('brand_logo')->get();
    }


    public function selectImage($imageId) {
        if (in_array($imageId, $this->selectedImages)) {
            // Unselect if already selected
            $this->selectedImages = array_diff($this->selectedImages, [$imageId]);
        } else {
            // Add image to selected list
            $this->selectedImages[] = $imageId;
        }
        // Store selected images in session to persist across refresh
        session()->put('selectedImages', $this->selectedImages); // Or save to DB
    }

    public function deleteImage($imageId)
    {
        // Remove image logic from the database
        Brand::destroy($imageId);
        $this->images = Brand::all(); // Refresh image list
    }


    public function render()
    {
	    $photos = Brand::whereNotNull('brand_logo')->paginate(50);
        return view('livewire.online-contract-form-component',['photos'=> $photos]);
    }
}
