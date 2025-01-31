<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Lead;
use Livewire\Component;
use PDF;

class ExpandyourbusinessComponent extends Component
{
    public function index($visitorid)
    {
        $visitor = Lead::find($visitorid);
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y'),
            'visitorid' => '$visitorid',
        ];
           
      $pdf = PDF::loadView('livewire.document.visitor-component', compact('data'));
      $pdf->setPaper('A4','portrait');
      $pdf->setOptions(['defaultFont' => 'san-serif' ]);
      return $pdf-> download('Expand_your_Business.pdf');
    }

   

    public function render()
    {
        $cat = Category::orderBy('industry','DESC')->get();
        return view('livewire.expandyourbusiness-component', ['cat'  => $cat]);
    }
}
 