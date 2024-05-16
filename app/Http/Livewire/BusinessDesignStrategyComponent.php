<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Livewire\Component;

class BusinessDesignStrategyComponent extends Component
{
    public function render()
    {
        $mytime = Carbon::now()->format("Y-m-d");
      $upcomingViews = Event::where('view_count','>','0')->whereDate('startdate','>', $mytime)->whereDate('enddate','>', $mytime)->orderBy('updated_at','desc')->get();

        return view('livewire.business-design-strategy-component',['upcomingViews' => $upcomingViews])->layout('layouts.ebog');
    }
}
