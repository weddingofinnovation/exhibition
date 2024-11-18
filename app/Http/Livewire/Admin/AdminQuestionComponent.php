<?php

namespace App\Http\Livewire\Admin;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminQuestionComponent extends Component
{

    public $user_id;
    public $status;
    public $admstatus;
    public $question;
    public $quest;
    public $eventid;

    public $questions = [];
    public $selectedQuestions = [];

    public function mount($eventid = null)
    {
        $this->eventid = $eventid;
        $this->questions = Question::all();

        if($this->eventid)
        {
          $this->selectedQuestions  = Question::where('event_id', $this->eventid)->pluck('question_id')->toArray();

        }
        // $this->month = Carbon::today()->format("m");
        // $this->monthly = Carbon::today()->format("m");
        // $this->visited = '1';
        // $this->currentTab = session()->get('currentTab','tab1');
    }

    public function toggleQuestion($questionId)
    {
        if(!$this->eventid)
        {
            return;
        }

        if(in_array($questionId, $this->selectedQuestions))
        {
            Question::where('event_id', $this->eventid)->where('question_id' ,$questionId)->delete();
            $this->selectedQuestions = array_diff($this->selectedQuestions, [$questionId]);
        }
        else
        {
            Question::create([
                'event_id' => $this->eventid,
                'question_id' => $questionId,
            ]);
            $this->selectedQuestions[] = $questionId;
        }
    }

    public function questadd()
    {
        $rti = Str::replace('  ',' ',$this->quest);
        $ret = explode("?", $rti);

        foreach($ret as $tre)
        {
            $questionbrand = new Question();

            // $bran = Event::find($this->event_id);
            // $brand->brand_name = trim($tre);
            // $brand->slug = str::slug($tre,'-');
            
            
            $questionbrand->question = Str::lower(trim($tre)) . '?';
            $questionbrand->user_id = Auth::user()->id;
            $questionbrand->status = $this->status;
            $questionbrand->admstatus = $this->admstatus;
            $questionbrand->save();
        }

    }

    public function delete($id)
    {   $couPon = Question::find($id);
        $couPon->delete();
        session()->flash('message','Coupon has been deleted Successfully');
    }

    // public function status($id, $status)
    // {   $couPon = Question::find($id);
    //     $couPon->status = $status;
    //     $couPon->save();
    //     session()->flash('message','Coupon has been deleted Successfully');
    // }

    public function admstatus($id, $status)
    {   $couPon = Question::find($id);
        $couPon->admstatus = $status;
        $couPon->save();
        session()->flash('message','Coupon has been deleted Successfully');
    }


    public function render()
    {
        $result = Question::get();
        return view('livewire.admin.admin-question-component',['result' => $result, 'selectionEnabled' => $this->eventid ? true : false,]);
    }
}
