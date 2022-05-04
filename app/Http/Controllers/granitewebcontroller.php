<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class granitewebcontroller extends Controller
{
    
    public function home(){
        
        return view('home');
    }

    public function ourwork(){
        
        return view('ourwork');
    }






}
