<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use App\Models\BusinessCalledo;
use App\Models\Event;
use App\Models\Franchise;
use App\Models\Hashtag;
use App\Models\Lead;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminFranchiseAddComponent extends Component
{
    public $status;
    public $previousComments;
    public $admstatus;
    public $lead_id;
    public $user_id;
    public $response;
    public $comment;
    public $board;
    public $searchTerm;
    public $selectedItem;
    //public $id;

    public function mount($lead_id, $board)
    {    
        $this->status = 1; 
        $this->admstatus = 1;
        $this->lead_id = $lead_id;
        $this->board = $board;
    }

    public function email()
    {

    }

    public function addcomm()
    {
      $visited = New BusinessCalledo();
      $visited->lead_id = $this->lead_id;
      $visited->user_id = Auth::user()->id;
      $visited->comment = $this->comment;
      $visited->status = '1';
      $visited->admstatus = '1';
      $visited->save();
      session()->flash('message','info has been deleted Successfully');
      
    } 

    public function render()
    {  
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchResults = Event::Where('eventname','LIKE', $searchTerm)->where('status','1')->orderBy('eventname','ASC')->get();

        $hashtag = Hashtag:: where('status', '1')->Where('event_id', NULL)->get();
        $previous = url()->previous();
        return view('livewire.admin.admin-franchise-add-component',['previous'=>$previous, 'hashtag'=>$hashtag, 'searchResults'=>$searchResults]);
    }
}
