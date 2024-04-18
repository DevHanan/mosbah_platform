<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\TrackResource;
use App\Http\Requests\TrackRequest;
use App\Http\Requests\UpdateTrackRequest;
use App\Models\Track;
use Illuminate\Http\Request;
use Toastr;


class TrackController extends Controller
{
    use ApiResponse, FileUploader;


    
    public function __construct()
    {
        $this->title = 'list tracks';
        $this->route = 'admin.tracks';
        $this->view = 'admin.tracks';
        $this->path = 'tracks';
        $this->access = 'tracks';
        // $this->middleware('permission:tracks-create', ['only' => ['create','store']]);
        // $this->middleware('permission:tracks-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:tracks-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:tracks-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Track::active()->where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->get();
        return view($this->view.'.index', $data);
    }

    public function create(Track $track)
    {
        $data['title'] = 'Add Tracks ';
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(TrackRequest $request)
    {
        $track = Track::create($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'tracks';
            $attach = 'image';
            $track->image = $this->uploadMedia($request, $attach, $directory);
            $track->save();
        }
        Toastr::success(__('msg_updated_successfully'), __('msg_success'));
        return redirect()->route('admin.tracks.index');
    }


    public function show($id){
        $track = Track::find($id);
        if($track)
        return $this->okApiResponse(new TrackResource($track), __('Track loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit($id)
    {   
        $data['row'] = Track::find($id);
        $data['route'] = $this->route;
        $data['title'] = 'edit track';
        return view($this->view.'.edit',$data);
    }

    public function update(UpdateTrackRequest $request)
    {
        $track = Track::find($request->id);
        $track->update($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'tracks';
            $attach = 'image';
            $track->image = $this->uploadMedia($request, $attach, $directory);
            $track->save();
        }
        Toastr::success(__('msg_updated_successfully'), __('msg_success'));
        return redirect()->route('admin.tracks.index');    }

    public function destroy (Request $request)
    {
        $track = Track::find($request->id);
        if ($track)
            $track->delete();

            Toastr::success(__('msg_delete_successfully'), __('msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
