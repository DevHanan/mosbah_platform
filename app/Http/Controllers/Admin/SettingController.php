<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'favicon' => 'nullable|image',
            'phone' => 'nullable',
            'email' => 'nullable|email'
        ]);

       
        $data = Setting::where('id',1)->first();
        if(!$data)
        $data = new Setting();

        $data->update($request->except(['logo_path','favicon_path']));
        if($request->hasFile('logo_path')){
              
            $thumbnail = $request->logo_path;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->logo_path ='uploads/settings/'.$filename;
            $data->save();
        }

        if($request->hasFile('favicon_path')){
              
            $thumbnail = $request->favicon_path;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->favicon_path ='uploads/settings/'.$filename;
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


    public function landingSetting(){
        $data['title'] = 'إعدادت الصفحة الرئيسية  ';
        $data['row'] = Setting::where('status', 1)->first();
        return view($this->view.'.landing_page', $data);   
    }

    public function saveLandingSetting(Request $request){
        $data = Setting::where('id',1)->first();
        if($data){
              $data->update($request->except(['section1_image','section2_image']));
              
        }else{
             $data = new Setting();
             $data->create($request->all(['section1_image','section2_image']));
        }
        if($request->hasFile('section1_image')){
              
           $thumbnail = $request->section1_image;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->section1_image ='public/uploads/settings/'.$filename;
            $data->save();
        }
        if($request->hasFile('section2_image')){
          
            $thumbnail = $request->section2_image;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/settings/'),$filename);
            $data->section2_image ='public/uploads/settings/'.$filename;
            $data->save();
        } 
        Toastr::success(__('msg_send_successfully'), __('msg_success'));
        return redirect()->back(); 
    }
}
