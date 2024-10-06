<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cag;
use App\Models\Event;
use App\Models\Mag;
use App\Services\OpenAIService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class AdminBlogComponent extends Component
{   public $slug;
    public $tittle;
    public $desc;
    public $s_desc;
    public $tag;
    public $cag_id;
    public $status;
    public $type;
    public $image;
    public $user_id;
    public $board;

    public function mount($board)
    {
        $this->board = $board;
        $this->type = "e";  
        $this->status = "1"; 
        // $this->tittle = session('tittle','');
        // $this->s_desc = session('s_desc','');
        // $this->desc = session('desc','');
    }

    // public function updated($field)
    // {
    //   session([$field => $this->$field]);
    // }

    

    Use WithFileUploads;
    public function add() {
    
        $this->validate([
            'tittle' => 'required',
            's_desc' => 'required',
            'desc' => 'required',
        ]);

        $blog = new Mag();
        $blog->tittle = $this->tittle;
        $blog->slug = Str::slug($this->tittle,'-');
        $blog->s_desc = $this->s_desc;
        $blog->desc = $this->desc;
        // $blogdesc = explode("  ",$this->desc);
        // $blog->desc = json_encode($blogdesc);
        $blog->user_id = Auth::user()->id;
        $blog->type = $this->type;
        $blog->status = $this->status;
        $blog->save();

        // session()->forget(['tittle','s_desc','desc']);

        // $this->tittle = '';
        // $this->s_desc = '';
        // $this->desc = '';

        session()->flash('message',' Congrats, Blog has been posted Successfully. we are reviewing, it will flash on the platform very soon.'); 
        return redirect()->route('admin.dashboard',['board' => 'blog']);
    }


    // protected $listeners = ['longDescriptionUpdated'];

    // public function longDescriptionUpdated($value)
    // {
    //     $this->desc = $value;
    //     session(['desc' => $value]);
    // }

    public function dateImage()
    {
       // $fattribute = Mag::find($this->blog_id);
       
        $newimage = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('exhibition', $newimage);
        //$fattribute->image = $newimage;

        //$fattribute->save();
        session()->flash('message','Event has been updated succesfully!!');
       // return redirect()->route('adminevent.detail', ['slug' => $fattribute->slug]);
    }
    
    public $selectedEvents = [];
    public $article;

    protected $rules = [
        'selectedEvents' => 'required|array',
    ];

    public function generateArticle()
    {
        $this->validate();

        $aiService = new OpenAIService();
        $eventDetails = $this->createPrompt($this->selectedEvents);
        $this->article = $aiService->generateArticle($eventDetails);

        session()->flash('message', 'Article generated successfully!');
    }

    private function createPrompt($events)
    {
        // Create a prompt based on the selected events
        return "Write a detailed article about the following events: " . implode(', ', $events);
    }


    public function render()
    {
        $category = Cag::orderBy('tag','ASC')->get();
        $events = Event::get();
        return view('livewire.admin.admin-blog-component',['category'=> $category, 'events'=> $events])->layout('layouts.admin');
    }
}
