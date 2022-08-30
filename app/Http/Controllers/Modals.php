<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Modals extends Controller
{
    //

    public function loginModal(){
        return view('modals.loginModal');
    }

    public function registerModal(){
        return view('modals.registerModal');
    }
}
