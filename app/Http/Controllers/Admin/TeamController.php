<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\TeamResource;
use App\Http\Requests\UpdateRequest;
use App\Models\Team;
use Illuminate\Http\Request;

use Toastr;


class TeamController extends Controller
{
    use ApiResponse, FileUploader;


    
    public function __construct()
    {
        $this->title = trans('admin.teams.title');
        $this->route = 'admin.teams';
        $this->view = 'admin.teams';
        $this->path = 'teams';
        $this->access = 'teams';
        // $this->middleware('permission:teams-create', ['only' => ['create','store']]);
        // $this->middleware('permission:teams-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:teams-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:teams-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Team::where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->latest()->paginate(10);
        return view($this->view.'.index', $data);
    }

    public function create(Team $team)
    {
        $data['title'] = trans('admin.teams.add');
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(Request $request)
    {
        $team = Team::create(['name'=>$request->name,'job'=>$request->job,'active'=>$request->active]);
        if ($request->hasFile('image')) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/teams/main/'),$filename);
            $team->image ='uploads/teams/main/'.$filename;
            $team->save();
        }
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.teams.index');
    }


    public function show($id){
        $team = Team::find($id);
        if($team)
        return $this->okApiResponse(new TeamResource($team), __('Team loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit($id)
    {   
        $data['row'] = Team::find($id);
        $data['route'] = $this->route;
        $data['title'] = trans('admin.teams.edit');
        return view($this->view.'.edit',$data);
    }

    public function update(Request $request,Team $team)
    {
        $team->update($request->except('image'));
        if ($request->hasFile('image')) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/teams/main/'),$filename);
            $team->image ='uploads/teams/main/'.$filename;
            $team->save();
        }
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.teams.index');    }

    public function destroy (Request $request)
    {
        $team = Team::find($request->id);
        if ($team)
            $team->delete();

            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
