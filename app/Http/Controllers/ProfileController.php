<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use File,Image;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $user =Auth::user();
        if (File::exists(public_path('uploads/propic/original/'.$user->avatar)))
        {
            $user->avatar=$user->avatar;
            
        }else{
            $user->avatar='avatar.png';
        }
        return view('profile', compact('user','id'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        switch($request->get('type')){
            case "info":
                 $user->name = $request->get('name');
            break;
            case "avatar":
                 $file = $request->file('avatar');
                $thumbnail_path = public_path('uploads/propic/thumbnail/');
                $original_path = public_path('uploads/propic/original/');
                $file_name = 'user_'. $user->id .'_'. time() . '.' . $file->getClientOriginalExtension();
                    Image::make($file)
                        ->resize(261,null,function ($constraint) {
                            $constraint->aspectRatio();
                            })
                        ->save($original_path . $file_name)
                        ->resize(90, 90)
                        ->save($thumbnail_path . $file_name);
                $user->avatar = $file_name;
            break;
        }
       
        $user->save();
        return redirect('/profile');
    }
    
}
