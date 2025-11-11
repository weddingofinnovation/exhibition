<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Lead;
use Livewire\Component;
use PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ExpandyourbusinessComponent extends Component
{
    public $board;
    public $event_id;

    public function mount($board = 'null', $event_id = 'null')
    {
        $this->board = $board;
        $this->event_id = $event_id;
    }

    public function index($visitorid)
    {
        $visitor = Lead::find($visitorid);
        $data = [
            'title' => 'The Exhibition Network, India',
            'date' => date('m/d/Y'),
        ];

        $qrCode = base64_encode(QrCode::format('png')->size(150)->generate(route('printpdf.badge', ['visitorid' => $visitor->id])));

        $pdf = PDF::loadView('livewire.document.visitor-component', compact('data', 'visitor', 'qrCode'));
        $pdf->setPaper([0, 0, 250, 400]);
        //$pdf->setPaper('A4','portrait');
        $pdf->setOptions(['defaultFont' => 'san-serif']);
        return $pdf->download($visitor->name . '-expand_your_business.pdf');
    }

    public function render()
    {
        $cat = Category::orderBy('industry', 'DESC')->get();
        return view('livewire.expandyourbusiness-component', ['cat'  => $cat]);
    }
}
