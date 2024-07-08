<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\PartenerResource;
use App\Http\Requests\UpdateRequest;
use App\Models\Partener;
use Illuminate\Http\Request;

use Toastr;


class PartenerController extends Controller
{
    use ApiResponse, FileUploader;


    
    public function __construct()
    {
        $this->title = trans('admin.parteners.title');
        $this->route = 'admin.parteners';
        $this->view = 'admin.parteners';
        $this->path = 'parteners';
        $this->access = 'parteners';
        $this->middleware('permission:parteners-create', ['only' => ['create','store']]);
        $this->middleware('permission:parteners-view',   ['only' => ['show', 'index']]);
        $this->middleware('permission:parteners-edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:parteners-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Partener::where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->paginate(10);
        return view($this->view.'.index', $data);
    }

    public function create(Partener $partener)
    {
        $data['title'] = trans('admin.parteners.add');
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(Request $request)
    {
        $partener = Partener::create($request->except('image'));
      
        if ($request->hasFile('image')) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/parteners/main/'),$filename);
            $partener->image ='uploads/parteners/main/'.$filename;
            $partener->save();
        }
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.parteners.index');
    }


    public function show($id){
        $partener = Partener::find($id);
        if($partener)
        return $this->okApiResponse(new PartenerResource($partener), __('Partener loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit($id)
    {   
        $data['row'] = Partener::find($id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.parteners.edit');
        return view($this->view.'.edit',$data);
    }

    public function update(Request $request,Partener $partener)
    {
        $partener->update($request->except('image'));
        if ($request->hasFile('image')) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/parteners/main/'),$filename);
            $partener->image ='uploads/parteners/main/'.$filename;
            $partener->save();
        }
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.parteners.index');    }

    public function destroy (Request $request)
    {
        $partener = Partener::find($request->id);
        if ($partener)
            $partener->delete();

            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
