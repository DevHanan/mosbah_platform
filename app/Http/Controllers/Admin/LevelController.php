<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\TrackResource;
use App\Http\Requests\TrackRequest;
use App\Http\Requests\UpdateTrackRequest;
use App\Models\Level;
use Illuminate\Http\Request;
use Toastr;


class LevelController extends Controller
{
    use ApiResponse, FileUploader;


    
    public function __construct()
    {
        $this->title = trans('admin.levels.title');
        $this->route = 'admin.levels';
        $this->view = 'admin.levels';
        $this->path = 'levels';
        $this->access = 'levels';
        // $this->middleware('permission:levels-create', ['only' => ['create','store']]);
        // $this->middleware('permission:levels-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:levels-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:levels-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Level::active()->where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->paginate(10);
        return view($this->view.'.index', $data);
    }

    public function create(Level $level)
    {
        $data['title'] = trans('admin.levels.add');
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(Request $request)
    {
       $level = Level::create($request->all());
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.levels.index');
    }


    public function show($id){
       $level = Level::find($id);
        if($track)
        return $this->okApiResponse(new TrackResource($track), __('Track loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit($id)
    {   
        $data['row'] = Level::find($id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.levels.edit');
        return view($this->view.'.edit',$data);
    }

    public function update(Request $request)
    {
       $level = Level::find($request->id);
       $level->update($request->all());
    
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.levels.index');    }

    public function destroy (Request $request)
    {
       $level = Level::find($request->id);
        if ($level)
           $level->delete();

            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
