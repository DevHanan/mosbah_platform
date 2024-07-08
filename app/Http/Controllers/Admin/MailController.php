<?php

namespace App\Http\Controllers\Admin;
use App\Models\MailList;
use Illuminate\Http\Request;
use Toastr;
use App\Http\Controllers\Controller;

use Mail;
use App\Mail\Websitemail;


class MailController extends Controller
{


    public function index(Request $request)
    {
        $data['route'] = 'admin.listemails';
        $data['title'] =  trans('admin.emails.list');
        $data['rows'] = MailList::where(function($q)use($request){
            if ($request->email)
            $q->Where('email', 'like', '%' . $request->email  . '%');
        })->paginate(10);
        return view('admin.mails.index', $data);
    }

    public function create()
    {
        $data['title'] = trans('admin.mails.send');
        $data['route'] = 'admin.listemails';
        $data['emails'] = MailList::where('active','1')->get();
        return view('admin.mails.create', $data);
    }
    public function store(Request $request)
    {
        $subject = $request->subject;
        $message = $request->message;
        if($request->emails && count($request->emails)>0){
            foreach($request->emails as $email)
            \Mail::to($email)->send(new Websitemail($subject,$message));

    }
    toastr()->success(__('admin.email_send_success'), __('admins.msg_success'));
        return redirect()->back();
}
    public function destroy (Request $request)
    {
       $mail = MailList::find($request->id);
        if ($mail)
           $mail->delete();
            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->back();
    }
}
