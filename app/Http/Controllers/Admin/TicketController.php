<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\CouponResource;
use App\Http\Requests\CouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\Coupon;
use App\Models\Ticket;
use Toastr;


class TicketController extends Controller
{
    use ApiResponse, FileUploader;

    public function __construct()
    {
        $this->title = 'list tickets';
        $this->route = 'admin.tickets';
        $this->view = 'admin.tickets';
        $this->path = 'tickets';
        $this->access = 'tickets';
        // $this->middleware('permission:tickets-create', ['only' => ['create','store']]);
        // $this->middleware('permission:tickets-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:tickets-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:tickets-delete',   ['only' => ['delete']]);
    }



    public function listVisitorMsg(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = trans('admin.tickets.visitor_msg');
        $data['rows'] = Ticket::where(function ($q) use ($request) {
            if ($request->title)
                $q->Where('title', 'like', '%' . $request->title  . '%');
        })->whereNull('instructor_id')->whereNull('student_id')->paginate(10);
        return view($this->view . '.visitormsg', $data);
    }
    public function listInstructorMsg(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = trans('admin.tickets.instructor_msg');
        $data['rows'] = Ticket::where(function ($q) use ($request) {
            if ($request->title)
                $q->Where('title', 'like', '%' . $request->title  . '%');
        })->whereNOtNull('instructor_id')->paginate(10);
        return view($this->view . '.instructormsg', $data);
    }

    public function listStudentMsg(Request $request)
    {
        $data['route'] = $this->route;
        $data['title'] = trans('admin.tickets.student_msg');
        $data['rows'] = Ticket::where(function ($q) use ($request) {
            if ($request->title)
                $q->Where('title', 'like', '%' . $request->title  . '%');
        })->whereNOtNull('student_id')->paginate(10);
        return view($this->view . '.studentmsg', $data);
    }


    public function destory(Request $request)
    {
        $coupon =  Coupon::find($request->id);
        if ($coupon)
            $coupon->delete();
        Toastr::success(__('admin.msg_delete_successfully'), __('admin.msg_success'));
        return redirect()->route($this->route . '.index');
    }

    public function changeStatus(Request $request){
        $ticket= Ticket::find($request->id);
        $ticket->read = $ticket->read == 0 ? 1 : 0;
        $ticket->save();
        Toastr::success(__('admin.msg_status_changed_successfully'), __('admin.msg_success'));
        return redirect()->back();

    }
}
