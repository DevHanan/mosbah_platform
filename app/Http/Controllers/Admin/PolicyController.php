<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\TrackResource;
use App\Http\Requests\TrackRequest;
use App\Http\Requests\UpdateTrackRequest;
use App\Models\Policy;
use Illuminate\Http\Request;
use Toastr;


class PolicyController extends Controller
{
    use ApiResponse, FileUploader;


    
    public function __construct()
    {
        $this->title = trans('admin.policies.title');
        $this->route = 'admin.policies';
        $this->view = 'admin.policies';
        $this->path = 'policies';
        $this->access = 'policies';
        // $this->middleware('permission:policies-create', ['only' => ['create','store']]);
        // $this->middleware('permission:policies-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:policies-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:policies-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Policy::where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->paginate(10);
        return view($this->view.'.index', $data);
    }

    public function create(Track $policy)
    {
        $data['title'] = trans('admin.policies.add');
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(TrackRequest $request)
    {
        $policy = Policy::create($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'policies';
            $attach = 'image';
            $policy->image =  'uploads/'.$directory . '/'.$this->uploadMedia($request, $attach, $directory);
            $policy->save();
        }
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.policies.index');
    }


    public function show($id){
        $policy = Policy::find($id);
        if($policy)
        return $this->okApiResponse(new TrackResource($policy), __('Track loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit($id)
    {   
        $data['row'] = Policy::find($id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.policies.edit');
        return view($this->view.'.edit',$data);
    }

    public function update(UpdateTrackRequest $request,Track $policy)
    {
        $policy->update($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'policies';
            $attach = 'image';
            $policy->image = 'uploads/'.$directory . '/'.$this->uploadMedia($request, $attach, $directory);
            $policy->save();
        }
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.policies.index');    }

    public function destroy (Request $request)
    {
        $policy = Policy::find($request->id);
        if ($policy)
            $policy->delete();

            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
