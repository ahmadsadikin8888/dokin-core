<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use DB;
use Hash;
use File,Image;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Post::orderBy('id','DESC')->paginate(5);
        return view('posts.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
         $post = new Post;
        $file = $request->file('image');
        $thumbnail_path = public_path('uploads/posts/thumbnail/');
        $original_path = public_path('uploads/posts/original/');
        $file_name = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)
                ->resize(980,null,function ($constraint) {
                    $constraint->aspectRatio();
                    })
                ->save($original_path . $file_name)
                ->resize(90, 90)
                ->save($thumbnail_path . $file_name);
         $post->image = $file_name;
         $post->title = $request->get('title');
         $post->description = $request->get('description');
         $post->content = $request->get('content');
         $post->keyword = $request->get('keyword');
         $post->tag = $request->get('tag');
         
        $post->save();
        return redirect()->route('posts.index')
                        ->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
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
        $post = Post::find($id);
        $file = $request->file('image');
        if($file){
            $thumbnail_path = public_path('uploads/posts/thumbnail/');
        $original_path = public_path('uploads/posts/original/');
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
         $post->description = $request->get('description');
         $post->content = $request->get('content');
         $post->keyword = $request->get('keyword');
         $post->tag = $request->get('tag');
        $post->update($input);
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index')
                        ->with('success','Post deleted successfully');
    }
}