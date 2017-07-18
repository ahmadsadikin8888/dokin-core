<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produk;
use DB;
use Hash;
use File,Image;

class ProdukController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Produk::orderBy('id','DESC')->paginate(5);
        return view('produks.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'content' => 'required',
            'image_1' => 'required | mimes:jpeg,jpg,png | max:1000',
            'keyword' => 'required',
            'tag' => 'required',
            
         ]);
        $post = new Produk;
        $file = $request->file('image_1');
        $thumbnail_path = public_path('uploads/produks/thumbnail/');
        $original_path = public_path('uploads/produks/original/');
        $file_name = time() . '_1.' . $file->getClientOriginalExtension();
            Image::make($file)
                ->resize(500,null,function ($constraint) {
                    $constraint->aspectRatio();
                    })
                ->save($original_path . $file_name)
                ->resize(150, 150)
                ->save($thumbnail_path . $file_name);
         $post->image_1 = $file_name;

        $file_2 = $request->file('image_2');
        if($file_2){
            $thumbnail_path = public_path('uploads/produks/thumbnail/');
            $original_path = public_path('uploads/produks/original/');
            $file_name = time() . '_2.' . $file_2->getClientOriginalExtension();
                Image::make($file_2)
                    ->resize(500,null,function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($original_path . $file_name)
                    ->resize(150, 150)
                    ->save($thumbnail_path . $file_name);
            $post->image_2 = $file_name;
        }
        $file_3 = $request->file('image_3');
        if($file_3){
            $thumbnail_path = public_path('uploads/produks/thumbnail/');
            $original_path = public_path('uploads/produks/original/');
            $file_name = time() . '_3.' . $file_3->getClientOriginalExtension();
                Image::make($file_3)
                    ->resize(500,null,function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($original_path . $file_name)
                    ->resize(150, 150)
                    ->save($thumbnail_path . $file_name);
            $post->image_3 = $file_name;
        }
        $file_4 = $request->file('image_4');
        if($file_4){
            $thumbnail_path = public_path('uploads/produks/thumbnail/');
            $original_path = public_path('uploads/produks/original/');
            $file_name = time() . '_4.' . $file_4->getClientOriginalExtension();
                Image::make($file_4)
                    ->resize(500,null,function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($original_path . $file_name)
                    ->resize(150, 150)
                    ->save($thumbnail_path . $file_name);
            $post->image_4 = $file_name;
        }
        


         $post->title = $request->get('title');
         $post->description = $request->get('description');
         $post->content = $request->get('content');
         $post->price = $request->get('price');
         $post->keyword = $request->get('keyword');
         $post->tag = $request->get('tag');
         
        $post->save();
        return redirect()->route('produks.index')
                        ->with('success','Produk created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Produk::find($id);
        return view('produks.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Produk::find($id);
        return view('produks.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'keyword' => 'required',
            'tag' => 'required',
            'price' => 'required',
         ]);


        $input = $request->all();
        $post = Produk::find($id);
        $file = $request->file('image_1');
        if($file){
            $thumbnail_path = public_path('uploads/produks/thumbnail/');
            $original_path = public_path('uploads/produks/original/');
            $file_name = time() . '.' . $file->getClientOriginalExtension();
                Image::make($file)
                    ->resize(500,null,function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($original_path . $file_name)
                    ->resize(150, 150)
                    ->save($thumbnail_path . $file_name);
            $post->image_1 = $file_name;
        
        }

        $file_2 = $request->file('image_2');
        if($file_2){
            $thumbnail_path = public_path('uploads/produks/thumbnail/');
            $original_path = public_path('uploads/produks/original/');
            $file_name = time() . '_2.' . $file_2->getClientOriginalExtension();
                Image::make($file_2)
                    ->resize(500,null,function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($original_path . $file_name)
                    ->resize(150, 150)
                    ->save($thumbnail_path . $file_name);
            $post->image_2 = $file_name;
        }
        $file_3 = $request->file('image_3');
        if($file_3){
            $thumbnail_path = public_path('uploads/produks/thumbnail/');
            $original_path = public_path('uploads/produks/original/');
            $file_name = time() . '_3.' . $file_3->getClientOriginalExtension();
                Image::make($file_3)
                    ->resize(500,null,function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($original_path . $file_name)
                    ->resize(150, 150)
                    ->save($thumbnail_path . $file_name);
            $post->image_3 = $file_name;
        }
        $file_4 = $request->file('image_4');
        if($file_4){
            $thumbnail_path = public_path('uploads/produks/thumbnail/');
            $original_path = public_path('uploads/produks/original/');
            $file_name = time() . '_4.' . $file_4->getClientOriginalExtension();
                Image::make($file_4)
                    ->resize(500,null,function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($original_path . $file_name)
                    ->resize(150, 150)
                    ->save($thumbnail_path . $file_name);
            $post->image_4 = $file_name;
        }

         $post->title = $request->get('title');
         $post->description = $request->get('description');
         $post->content = $request->get('content');
         $post->price = $request->get('price');
         $post->keyword = $request->get('keyword');
         $post->tag = $request->get('tag');
        $post->update($input);
        return redirect()->route('produks.index')
                        ->with('success','Produk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::find($id)->delete();
        return redirect()->route('produks.index')
                        ->with('success','Produk deleted successfully');
    }
}