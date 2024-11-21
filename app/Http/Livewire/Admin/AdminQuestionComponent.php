<?php

namespace App\Http\Livewire\Admin;

use App\Models\Event;
use App\Models\Question;
use Carbon\Carbon;
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
    public $board = null;

    public $eventname;
    public $eventdatestartdate;
    public $eventdateenddate;
    public $eventvenue;

    public $questions = [];
    public $selectedQuestions = [];

    public function mount($eventid = null)
    {
        $this->eventid = $eventid;
        $eventdetails = Event::find($this->eventid);

        $this->eventname =  $eventdetails->eventname;
        $this->eventdatestartdate = Carbon::parse ($eventdetails->startdate)->format('d F Y');
        //  Carbon::createFromFormat('Yy-mm-dd', trim($eventdetails->startdate))->format('d F Y');
        //$this->eventdateenddate =  Carbon::createFromFormat('d-m-Y', trim($eventdetails->enddate))->format('d F');
        $this->eventvenue = trim($eventdetails->venue);

        $this->questions = Question::all();

        if($this->eventid)
        {
          $this->selectedQuestions  = Question::where('event_id', $this->eventid)->pluck('id')->toArray();

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

        $questionTemplate = Question::find($questionId)->question;
        $modifiedQuestion = str_replace(
            ['{{exhibition}}', '{{start}}', '{{end}}', '{{venue}}'],
            [$this->eventname, $this->eventdatestartdate, $this->eventdateenddate, $this->eventvenue],
            $questionTemplate
        );


        if(in_array($questionId, $this->selectedQuestions))
        {
            Question::where('event_id', $this->eventid)->where('question_id' , $questionId)->delete();
            $this->selectedQuestions = array_diff($this->selectedQuestions, [$questionId]);
        }

        else

        {
            Question::create([
                'event_id' => $this->eventid,
                'question' => $modifiedQuestion,
                'user_id' => Auth::user()->id,
                'status' => '1',
                'admstatus' => '1',
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
        $result = Question::latest('updated_at')->get();
        return view('livewire.admin.admin-question-component',['result' => $result, 'selectionEnabled' => $this->eventid ? true : false,]);
    }
}
