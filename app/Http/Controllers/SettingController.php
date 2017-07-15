<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Setting;
use File,Image,Hash;

class SettingController extends Controller
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
        $id = 1;
        $setting =Setting::find(1);
        if (File::exists(public_path('uploads/setting/original/'.$setting->logo)))
        {
            $setting->logo=$setting->logo;
            
        }else{
            $setting->logo='logo-default.jpg';
        }
        return view('setting', compact('setting','id'));
    }
    public function update(Request $request)
    {
        $setting = Setting::find(1);
        switch($request->get('type')){
            case "info":
                 $setting->title = $request->get('title');
                 $setting->description = $request->get('description');
                 $setting->author = $request->get('author');
                 $setting->keyword = $request->get('keyword');
                 $setting->copyright = $request->get('copyright');
                 $setting->year = $request->get('year');
                 
                 $setting->save();
                 $notification = array(
                    'message' => 'Website Info was upated!', 
                    'alert-type' => 'success'
                );
                $redirec="#tab_1_1";
            break;
            case "logo":
                $file = $request->file('logo');
                $thumbnail_path = public_path('uploads/setting/thumbnail/');
                $original_path = public_path('uploads/setting/original/');
                $file_name = time() . '.' . $file->getClientOriginalExtension();
                    Image::make($file)
                        ->resize(106,null,function ($constraint) {
                            $constraint->aspectRatio();
                            })
                        ->save($original_path . $file_name)
                        ->resize(90, 90)
                        ->save($thumbnail_path . $file_name);
                $setting->logo = $file_name;
                 $setting->save();
                $notification = array(
                    'message' => 'The Logo was changed!', 
                    'alert-type' => 'success'
                );
                $redirec="#tab_1_2";
            break;
            case "contact":
                 $setting->name = $request->get('name');
                 $setting->email = $request->get('email');
                 $setting->address_1 = $request->get('address_1');
                 $setting->address_2 = $request->get('address_2');
                 $setting->phone = $request->get('phone');
                 $setting->mobile = $request->get('mobile');
                 
                 $setting->lat = $request->get('lat');
                 $setting->long = $request->get('long');
                 
                 $setting->save();
                 $notification = array(
                    'message' => 'Contact Info was upated!', 
                    'alert-type' => 'success'
                );
                $redirec="#tab_1_3";
            break;
        }
       
       
        

        return redirect('/setting'.$redirec)->with($notification);
    }
    
}
