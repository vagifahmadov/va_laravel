<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // contact
    public function contact_page(){
        return view('pages.contact');
    }

    public function contact_form(Request $request){
        dd($request->all());
    }
}
