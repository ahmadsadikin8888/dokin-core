<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::orderBy('id','DESC')->get();
        return view('welcome',compact('slides'))
            ->with('i',0);
    }
}
