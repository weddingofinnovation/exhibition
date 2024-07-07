<?php

namespace App\Http\Controllers;

use App\Mail\promoemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendpromoemail()
    {
        $toEmail = "team@exhibition.org.in";
        $message = "top 7 most demanding exhibition with rating";
        $subject = "The Exhibition Network find upcoming exhibition";

        $request = Mail::to($toEmail)->send(new promoemail ($message, $subject));

        dd($request);

    }
}
