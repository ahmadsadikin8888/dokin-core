<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produk;
use DB;
use Hash;
use File,Image;

class TokoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Produk::orderBy('id','DESC')->paginate(5);
        return view('frontend.toko',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Page::where('slug',$slug)->get()->first();
       
        return view('frontend.halaman',compact('post'));
    }

    
}