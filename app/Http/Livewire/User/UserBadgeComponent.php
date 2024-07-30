<?php

namespace App\Http\Livewire\User;

use App\Models\BadgeApplication;
use App\Models\BadgeCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserBadgeComponent extends Component
{
    public $board, $code, $user_name, $email, $website_url, $expiry_date, $type, $user_id;

    public function mount($board)
    {
        $this->board = $board;
    }

    protected $rules = [
         'website_url' => 'required|url',
         'type' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        $expiryDate = Carbon::now()->addDays(365);
        $userId = Auth::user()->id;
        $userName = Auth::user()->name;
        $userEmail = Auth::user()->email;

        $application = BadgeApplication::create([
            'user_id' => $userId,
            'website_url' => $this->website_url,
            'expiry_date' => $expiryDate,
            'type' => $this->type,
        ]);

        $this->reset();
    }

    public function render()
    {
        $badgeCode = BadgeCode::where('code', $this->code)->first();
        return view('livewire.user.user-badge-component',['badgeCode' => $badgeCode])->layout('layouts.eblog');
    }
}
