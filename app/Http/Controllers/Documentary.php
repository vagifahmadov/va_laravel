<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Documentary extends Controller
{
    // test controller
    public function doc(){
        return view('welcome');
    }

    public function about(){
        return redirect()->route('help');
    }
}
