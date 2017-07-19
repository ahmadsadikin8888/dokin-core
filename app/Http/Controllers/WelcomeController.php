<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Produk;
use App\Post;

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
        $artikels = Post::orderBy('id','DESC')->paginate(5);
        $slides = Slide::orderBy('id','DESC')->get();
        return view('welcome',compact('slides','produks','artikels'))
            ->with('i',0);
    }
}
