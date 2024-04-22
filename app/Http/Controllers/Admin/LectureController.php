<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\TrackResource;
use App\Http\Requests\TrackRequest;
use App\Http\Requests\UpdateTrackRequest;
use App\Models\Lecture;
use Illuminate\Http\Request;
use Toastr;


class LectureController extends Controller
{
    use ApiResponse, FileUploader;


    
    public function __construct()
    {
        $this->title = trans('admin.lectures.title');
        $this->route = 'admin.lectures';
        $this->view = 'admin.lectures';
        $this->path = 'lectures';
        $this->access = 'lectures';
        // $this->middleware('permission:lectures-create', ['only' => ['create','store']]);
        // $this->middleware('permission:lectures-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:lectures-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:lectures-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Lecture::where(function($q)use($request){
            if ($request->title)
            $q->Where('title', 'like', '%' . $request->title  . '%');
        })->paginate(10);
        return view($this->view.'.index', $data);
    }

    public function create(Lecture $lecture)
    {
        $data['title'] = trans('admin.lectures.add');
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(Request $request)
    {
       $lecture = Lecture::create($request->all());
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.lectures.index');
    }

    public function edit($id)
    {   
        $data['row'] = Lecture::find($id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.lectures.edit');
        return view($this->view.'.edit',$data);
    }

    public function update(Request $request)
    {
       $lecture = Lecture::find($request->id);
       $lecture->update($request->all());
    
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.lectures.index');    }

    public function destroy (Request $request)
    {
       $lecture = Lecture::find($request->id);
        if ($lecture)
           $lecture->delete();

            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
