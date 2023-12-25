<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    // podcasts
    public function podcast_page(){
        return view('pages.podcasts');
    }
}
