<?php

namespace App\Http\Controllers\Admin;
use App\Models\MailList;
use Illuminate\Http\Request;
use Toastr;
use App\Http\Controllers\Controller;



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
      return $request->all();
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
