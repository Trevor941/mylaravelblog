<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Mail;

class ContactFormController extends Controller
{
    public function contactform(){
        return view('contactform');
    }
    public function SendEmail(Request $request){
        $data = $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);
        Mail::to("trey94kingz@gmail.com")->send(new SendEmail($data));
        return redirect('/contactform')->with('success', 'Email sent successfully');
        
    }
}
