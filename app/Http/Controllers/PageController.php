<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use DB;
use Hash;
use File,Image;

class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Page::orderBy('id','DESC')->paginate(5);
        return view('pages.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
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
            'content' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png | max:1000',
            'keyword' => 'required',
            'tag' => 'required',
            
         ]);
         $post = new Page;
        $file = $request->file('image');
        $thumbnail_path = public_path('uploads/pages/thumbnail/');
        $original_path = public_path('uploads/pages/original/');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)
                ->resize(1100,null,function ($constraint) {
                    $constraint->aspectRatio();
                    })
                ->save($original_path . $file_name)
                ->resize(90, 90)
                ->save($thumbnail_path . $file_name);
         $post->image = $file_name;
         $post->title = $request->get('title');
         $post->slug =str_replace(" ","-",strtolower($request->get('title')));
         
         $post->description = $request->get('description');
         $post->content = $request->get('content');
         $post->keyword = $request->get('keyword');
         $post->tag = $request->get('tag');
         
        $post->save();
        return redirect()->route('pages.index')
                        ->with('success','Page created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Page::find($id);
        return view('pages.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Page::find($id);
        return view('pages.edit',compact('post'));
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
         ]);


        $input = $request->all();
        $post = Page::find($id);
        $file = $request->file('image');
        if($file){
            $thumbnail_path = public_path('uploads/pages/thumbnail/');
        $original_path = public_path('uploads/pages/original/');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)
                ->resize(1100,null,function ($constraint) {
                    $constraint->aspectRatio();
                    })
                ->save($original_path . $file_name)
                ->resize(90, 90)
                ->save($thumbnail_path . $file_name);
         $post->image = $file_name;
        
        }
         $post->title = $request->get('title');
        $post->slug =str_replace(" ","-",strtolower($request->get('title')));
         $post->description = $request->get('description');
         $post->content = $request->get('content');
         $post->keyword = $request->get('keyword');
         $post->tag = $request->get('tag');
        $post->update($input);
        return redirect()->route('pages.index')
                        ->with('success','Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::find($id)->delete();
        return redirect()->route('pages.index')
                        ->with('success','Page deleted successfully');
    }
}