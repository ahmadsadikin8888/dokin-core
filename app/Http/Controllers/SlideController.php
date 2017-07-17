<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use DB;
use Hash;
use File,Image;

class SlideController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Slide::orderBy('id','DESC')->paginate(5);
        return view('slides.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slides.create');
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
            'link' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png | max:1000',
         ]);
         $post = new Slide;
        $file = $request->file('image');
        $thumbnail_path = public_path('uploads/slides/thumbnail/');
        $original_path = public_path('uploads/slides/original/');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)
                ->resize(1100,null,function ($constraint) {
                    $constraint->aspectRatio();
                    })
                ->save($original_path . $file_name)
                ->resize(120, 50)
                ->save($thumbnail_path . $file_name);
         $post->image = $file_name;
         $post->title = $request->get('title');
         $post->link = $request->get('link');
         
         $post->description = $request->get('description');
         
        $post->save();
        return redirect()->route('slides.index')
                        ->with('success','Slide created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Slide::find($id);
        return view('slides.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Slide::find($id);
        return view('slides.edit',compact('post'));
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
            'link' => 'required',
            
            'description' => 'required',
         ]);


        $input = $request->all();
        $post = Slide::find($id);
        $file = $request->file('image');
        if($file){
            $thumbnail_path = public_path('uploads/slides/thumbnail/');
            $original_path = public_path('uploads/slides/original/');
            $file_name = time() . '.' . $file->getClientOriginalExtension();
                Image::make($file)
                    ->resize(1100,null,function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($original_path . $file_name)
                    ->resize(120, 50)
                    ->save($thumbnail_path . $file_name);
            $post->image = $file_name;
        
        }
         $post->title = $request->get('title');
         $post->link = $request->get('link');
         
         $post->description = $request->get('description');
        $post->update($input);
        return redirect()->route('slides.index')
                        ->with('success','Slide updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slide::find($id)->delete();
        return redirect()->route('slides.index')
                        ->with('success','Slide deleted successfully');
    }
}