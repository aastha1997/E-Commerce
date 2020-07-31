<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function sellArt()
    {
        return view('sell_art');
    }

    public function artwork(){
        return view('artwork');
    }
}
