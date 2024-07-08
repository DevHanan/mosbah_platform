<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\FileUploader;
use App\Models\Notification;
use Illuminate\Http\Request;
use Toastr;


class NotificationController extends Controller
{
    use  FileUploader;


    
    public function __construct()
    {
        $this->title = trans('admin.notifications.title');
        $this->route = 'admin.notifications';
        $this->view = 'admin.notifications';
        $this->path = 'notifications';
        $this->access = 'notifications';
        // $this->middleware('permission:notifications-create', ['only' => ['create','store']]);
        // $this->middleware('permission:notifications-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:notifications-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:notifications-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows'] = Notification::where(function($q)use($request){
            if ($request->name)
            $q->Where('name', 'like', '%' . $request->name  . '%');
        })->paginate(10);
        return view($this->view.'.index', $data);
    }

    public function create(Notification $notify)
    {
        $data['title'] = trans('admin.notifications.add');
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }
    public function store(Request $request)
    {
        $notify = Notification::create($request->all());
       
        Toastr::success(__('admin.notificaion_send_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.notifications.index');
    }


    public function show($id){
        $notify = Notification::find($id);
        if($notify)
        return $this->okApiResponse($notify, __('Notification loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }



    public function destroy (Request $request)
    {
        $notify = Notification::find($request->id);
        if ($notify)
            $notify->delete();

            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->route($this->route.'.index');
    }
}
