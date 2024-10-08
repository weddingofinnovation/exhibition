<?php

namespace App\Http\Livewire;

use App\Models\Hostess;
use App\Models\Speaker;
use Livewire\Component;

class TrendingCreatorComponent extends Component
{
    
    public function insertEventToSess($id)
    {
      $event = Hostess::where('id', $id)->first();
      $poostKey = 'HostessID';
      $eid = $event->id;
      Session()->put ($poostKey , $eid);
      return redirect()->route('event.exhibit');
    } 


    public function render()
    {
        $speaker = Speaker::where('admstatus','1')->where('status','1')->where('entity','speaker')->get();
        $network = Speaker::where('admstatus','1')->where('status','1')->where('entity','network')->get();
        $social = Speaker::where('admstatus','1')->where('status','1')->where('entity','social')->get();

        $hostess = Hostess::get();
        return view('livewire.trending-creator-component',['speaker'=> $speaker,'network'=> $network,'social'=> $social, 'hostess' => $hostess]);
    }
}
