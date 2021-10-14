<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSender;

class EmailSenderController extends Controller
{
    public function sendProblem(request $request)
    {
        Mail::to($request->email)->send(new EmailSender($request));
    }
}
