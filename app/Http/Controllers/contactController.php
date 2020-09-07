<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\message;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class contactController extends Controller
{
    // public function submit(){

    //     return "submit from contactController";
    // }

    // public function submit(Request $request){

    //     dd($request);
    // }

    // public function submit(Request $request){

    //      dd($request->input('email'));
    // }


    
    public function submit(ContactRequest $request){

            $message = new message();

            $message->name = $request->input('name');
            $message->email = $request->input('email');
            $message->subject = $request->input('subject');
            $message->message = $request->input('message');
            
            $message->save();

    }
}
