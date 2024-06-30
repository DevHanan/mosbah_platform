<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\LanguageResource;
use App\Http\Requests\LanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;
use Toastr;


class LanguageController extends Controller
{
    use ApiResponse, FileUploader;


    
    public function __construct()
    {
        $this->title = trans('admin.languages.title');
        $this->route = 'admin.languages';
        $this->view = 'admin.languages';
        $this->path = 'languages';
        $this->access = 'languages';
        // $this->middleware('permission:languages-create', ['only' => ['create','store']]);
        // $this->middleware('permission:languages-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:languages-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:languages-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request,)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Language::where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->paginate(10);
        return view($this->view.'.index', $data);
    }

    public function create(Language $track)
    {
        $data['title'] = trans('admin.languages.add');
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(Request $request)
    {
        $track = Language::create($request->except('image'));
        if ($request->hasFile('image')) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/languages/main/'),$filename);
            $track->image ='uploads/languages/main/'.$filename;
            $track->save();
        }
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.languages.index');
    }


    public function show($id){
        $track = Language::find($id);
        if($track)
        return $this->okApiResponse(new LanguageResource($track), __('Language loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit($id)
    {   
        $data['row'] = Language::find($id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.languages.edit');
        return view($this->view.'.edit',$data);
    }

    public function update(Request $request,Language $track)
    {
        $track->update($request->except('image'));
       
        if ($request->hasFile('image')) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/languages/main/'),$filename);
            $track->image ='uploads/languages/main/'.$filename;
            $track->save();
        }
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.languages.index');    }

    public function destroy (Request $request)
    {
        $track = Language::find($request->id);
        if ($track)
            $track->delete();

            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
