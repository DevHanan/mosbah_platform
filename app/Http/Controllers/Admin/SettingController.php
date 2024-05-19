<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use Illuminate\Http\Request;
use App\Models\Setting;
use Toastr;
use Image;
use File;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Module Data
        $this->title = trans('admin.settings.title');
        $this->route = 'admin.setting';
        $this->view = 'admin.setting';
        $this->path = 'setting';
        $this->access = 'setting';


        // $this->middleware('permission:'.$this->access.'-view');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;

        $data['row'] = Setting::where('status', 1)->first();

        return view($this->view.'.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function siteInfo(Request $request)
    {
        // Field Validation
        $request->validate([
            'title' => 'required',
            'logo' => 'nullable|image',
            'favicon' => 'nullable|image'
        ]);

       
        $data = Setting::where('id',1)->first();
        if(!$data)
        $data = new Setting();

        $data->update($request->except(['logo_path','favicon_path']));
        if($request->hasFile('logo_path')){
              
            $thumbnail = $request->logo_path;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->logo_path ='public/uploads/settings/'.$filename;
            $data->save();
        }

        if($request->hasFile('favicon_path')){
              
            $thumbnail = $request->favicon_path;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->favicon_path ='public/uploads/settings/'.$filename;
            $data->save();
         
        }

        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->back();
    }

    public function mobile(){
        $data['title'] = 'إعدادت تطبيق ';
        $data['row'] = Setting::where('status', 1)->first();
        return view($this->view.'.mobile', $data);   
    }


    public function contactUs(){
        $data['title'] = 'إعدادت تواصل معنا ';
        $data['row'] = Setting::where('status', 1)->first();
        return view($this->view.'.contactus', $data);   
    }


    public function SaveContactUs(Request $request)
    {
        // Field Validation
        // $request->validate([
        //     'title' => 'required',
        //     'logo' => 'nullable|image',
        //     'favicon' => 'nullable|image'
        // ]);

       
        $data = Setting::where('id',1)->first();
        if(!$data)
        $data = new Setting();
        $data->update($request->all());
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->back();

    }

    


    
    public function mobileSetting(Request $request){
        $data = Setting::where('id',1)->first();
        if(!$data)
        $data = new Setting();
        $data->top_rated_products = $request->top_rated_products ? 1:0;
        $data->recommended_products = $request->recommended_products ? 1:0;
        $data->latest_products = $request->latest_products ? 1:0;
        $data->most_selling_products = $request->most_selling_products ? 1:0;
        $data->save();
        Toastr::success(__('msg_updated_successfully'), __('msg_success'));
        return redirect()->back();  
    }


    public function aboutUSSetting(){
        $data['title'] = trans('admin.aboutus.title');
        $data['row'] = AboutSetting::first();
        return view($this->view.'.landing_page', $data);   
    }


    public function saveAboutSetting(Request $request){
        $data = AboutSetting::first();
        if(!$data)
        $data = new AboutSetting();

        $data->update($request->except(['background_image','mission_image','msg_image1',
        'msg_image2','msg_image3','msg_image4' ]));
        if($request->hasFile('background_image')){
              
            $thumbnail = $request->background_image;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->background_image ='public/uploads/settings/'.$filename;
            $data->save();
        }

        if($request->hasFile('mission_image')){
              
            $thumbnail = $request->mission_image;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->mission_image ='public/uploads/settings/'.$filename;
            $data->save();
        }
        if($request->hasFile('msg_image1')){
              
            $thumbnail = $request->msg_image1;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->msg_image1 ='public/uploads/settings/'.$filename;
            $data->save();
        }
        if($request->hasFile('msg_image2')){
              
            $thumbnail = $request->msg_image2;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->msg_image2 ='public/uploads/settings/'.$filename;
            $data->save();
        }

        if($request->hasFile('msg_image3')){
              
            $thumbnail = $request->msg_image3;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->msg_image3 ='public/uploads/settings/'.$filename;
            $data->save();
        }
        if($request->hasFile('msg_image4')){
              
            $thumbnail = $request->msg_image4;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->msg_image4 ='public/uploads/settings/'.$filename;
            $data->save();
        }
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->back();

    }

    
}
