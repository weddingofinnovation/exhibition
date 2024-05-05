<?php

namespace App\Http\Livewire;

use App\Models\Event;
use App\Models\Lead;
use Livewire\Component;
use PDF;

class BuyabrandlicenseComponent extends Component
{
    public $name;
    public $designation;
    public $company;



    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
      $pdf = PDF::loadView('livewire.document.expand-component', $data);
      return $pdf-> download('Buy_a_Brand_License.pdf');
    }

    
    public function genratepdf($visitorid)
    {
        $wantdata = Lead::where('id', $visitorid)->first();
        $findevent =  Event::where('id', $wantdata->event_id)->value('eventname');

        // $wantdata->name = $this->name;
        // $wantdata->designation = $this->designation;
        // $wantdata->company = $this->company;

        // $data = [
        //     'name' => '{{$wantdata->name}}',
        //     'designation' => '{{$wantdata->designation}}',
        //     'company' => '{{$wantdata->company}}',
        // ];
        
        $visitorsticker = PDF::loadView('livewire.document.expand-component', ['wantdata' => $wantdata]);
      return $visitorsticker -> download($findevent.'the-exhibition-network.pdf');

    }

        // $visitorsticker = PDF::loadView('livewire.thankyou-component', $data);
        // return $visitorsticker->download($wantdata->name.'the-exhibition-network.pdf');

        //return $visitorsticker->stream($wantdata->name.'the-exhibition-network.pdf')->header('Content-type','application/pdf');
        //return response()->file();

    public function render()
    {
        return view('livewire.buyabrandlicense-component')->layout('layouts.eblog');
    }
}
