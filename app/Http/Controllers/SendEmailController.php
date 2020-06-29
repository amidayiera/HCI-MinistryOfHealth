<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    
    function index()
    {
        return view('contact_form');
    }


    function send(Request $request)
    {
     $this->validate($request, [
      'first_name'     =>  'required',
      'last_name' => 'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

    $data = array(
        'first_name'      =>  $request->first_name,
        'last_name' => $request->last_name,
        'message'   =>   $request->message
    );

     Mail::to($request->email)->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');
    }
}
