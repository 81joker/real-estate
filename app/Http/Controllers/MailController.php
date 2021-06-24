<?php

namespace App\Http\Controllers;

use App\Mail\MailQ2e;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {

        $details = $request->validate([
            'fullname' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
        // dd($details);
        Mail::to('nehad.al.timimi@gmail.com')->send(new MailQ2e($details));
        return redirect('/contact')->with('success', 'Email has been sent successfully');
    }
}
