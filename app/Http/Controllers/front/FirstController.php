<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function showProfile(){
        return view('profile');
    }

    public function showCart(){
        return 'Ji';
    }
}
