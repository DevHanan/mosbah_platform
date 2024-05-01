<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Level;
use Illuminate\Http\Request;
use Toastr;


class LectureController extends Controller
{
    use ApiResponse, FileUploader;


    
    public function __construct()
    {
        $this->title = trans('admin.lectures.title');
        $this->route = 'admin.levels.lectures';
        $this->view = 'admin.lectures';
        $this->path = 'lectures';
        $this->access = 'lectures';
        // $this->middleware('permission:lectures-create', ['only' => ['create','store']]);
        // $this->middleware('permission:lectures-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:lectures-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:lectures-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request,$level_id)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Lecture::where(function($q)use($request){
            if ($request->title)
            $q->Where('title', 'like', '%' . $request->title  . '%');
        })->where('level_id',$level_id)->paginate(10);
        $data['level'] = Level::find($level_id);
        return view($this->view.'.index', $data);
    }

    public function create(Lecture $lecture,$level_id)
    {
        $data['title'] = trans('admin.lectures.add');
        $data['route'] = $this->route;
        $data['level'] = Level::find($level_id);
        return view($this->view .'.create',$data);
    }
    public function store(Request $request,$level_id)
    {
       $lecture = Lecture::create($request->all());
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect("admin/levels/$level_id/lectures");

    }

    public function edit($level_id,$id)
    {   
        $data['row'] = Lecture::find($id);
        $data['level'] = Level::find($level_id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.lectures.edit');
        return view($this->view.'.edit',$data);
    }

    public function update(Request $request,$level_id)
    {
       $lecture = Lecture::find($request->id);
       $lecture->update($request->all());
    
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect("admin/levels/$level_id/lectures");
      }

    public function destroy (Request $request)
    {
       $lecture = Lecture::find($request->id);
        if ($lecture)
           $lecture->delete();

            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
