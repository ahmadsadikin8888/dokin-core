<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Produk;

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
        $produks = Produk::orderBy('id','DESC')->paginate(3);
        $slides = Slide::orderBy('id','DESC')->get();
        return view('welcome',compact('slides','produks'))
            ->with('i',0);
    }
}
