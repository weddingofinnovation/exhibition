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

    // public function questadd()
    // {

    //     $multiquestion = $this->quest; 

    //     $finfe = new Question();
    //     $finfe->question = ;
    //     $finfe->user_id = Auth::user()->id;
    //     $finfe->status = '1';
    //     $finfe->admstatus = '1';
    //     $finfe->save();
    // }

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
            
            
            $questionbrand->question = Str::lower(trim($tre));
            $questionbrand->user_id = Auth::user()->id;
            $questionbrand->status = $this->status;
            $questionbrand->admstatus = $this->admstatus;
            $questionbrand->save();
        }

    }

    public function questionDelete($id)
    {   $couPon = Question::find($id);
        $couPon->delete();
        session()->flash('message','Coupon has been deleted Successfully');
    }

    public function render()
    {
        $result = Question::get();
        return view('livewire.admin.admin-question-component',['result' => $result]);
    }
}
