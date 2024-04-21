<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Requests\SubscriptionRequest;
use App\Http\Resources\SubscriptionResource;
use App\Models\Subscription;
use Toastr;

class SubscriptionController extends Controller
{
    use ApiResponse, FileUploader;


    public function __construct()
    {
        $this->title = 'list subscriptions';
        $this->route = 'admin.subscriptions';
        $this->view = 'admin.subscriptions';
        $this->path = 'subscriptions';
        $this->access = 'subscriptions';
        // $this->middleware('permission:subscriptions-create', ['only' => ['create','store']]);
        // $this->middleware('permission:subscriptions-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:subscriptions-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:subscriptions-delete',   ['only' => ['delete']]);
    }
    public function index(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = $this->title;
        $data['rows']  = Subscription::where(function($q)use($request){
            if ($request->student_id)
            $q->Where('student_id',  $request->student_id );
            if ($request->course_id)
            $q->Where('course_id',  $request->course_id );
            if ($request->track_id)
            $q->Where('track_id',  $request->track_id );
        })->get();
        return view($this->view.'.index', $data);
    }

    public function create(Subscription $subscription)
    {
        $data['title'] = 'Add Subscription ';
        $data['route'] = $this->route;
        return view($this->view .'.create',$data);
    }

    public function store(SubscriptionRequest $request)
    {
        $subscription= Subscription::create($request->except('payment_attachment'));
        if ($request->hasFile('payment_attachment')) {
            $directory = 'subscriptions';
            $attach = 'payment_attachment';
            $subscription->payment_attachment = 'uploads/' .$directory .'/'.$this->uploadMedia($request,$attach, $directory);
            $subscription->save();
        }
     
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.subscriptions.index');    }

    public function show($id){
        $subscription= Subscription::find($id);
        if($subscription)
        return $this->okApiResponse(new SubscriptionResource($subscription), __('Subscription loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit($id)
    {   
        $data['row'] = Subscription::find($id);
        $data['route'] = $this->route;
        $data['title'] = 'edit Subscription';
        return view($this->view.'.edit',$data);
    }
    public function update(SubscriptionRequest $request)
    {
        $subscription= Subscription::find($request->id);
        $subscription->update($request->except('payment_attachment'));
        if ($request->hasFile('payment_attachment')) {
            $directory = 'subscriptions';
            $attach = 'payment_attachment';
            $subscription->payment_attachment = 'uploads/' .$directory .'/'.$this->uploadMedia($request,$attach, $directory);
            $subscription->save();
        }
        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.countries.index');     }

    public function destory(Request $request)
    {
       $subscription=  Subscription::find($request->id);
       if($subscription)
       $subscription->delete();
       Toastr::success(__('msg_delete_successfully'), __('msg_success'));
       return redirect()->route($this->route.'.index');    }
}
