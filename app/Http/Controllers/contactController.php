<?php

namespace App\Http\Controllers;

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

    public function submit(Request $request){

         dd($request->input('email'));
    }
}
