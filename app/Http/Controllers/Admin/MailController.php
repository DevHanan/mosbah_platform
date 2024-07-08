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
        $data['route'] = 'listemails';
        $data['title'] =  trans('admin.mails.list');
        $data['rows'] = MailList::where(function($q)use($request){
            if ($request->email)
            $q->Where('email', 'like', '%' . $request->email  . '%');
        })->paginate(10);
        return view('admin.mails.index', $data);
    }

    public function sendMails()
    {
        $data['title'] = trans('admin.mails.send');
        $data['route'] = 'sendmails';
        return view('admin.mails.create', $data);
    }
    public function savesendMail(Request $request)
    {
      return $request->all();
    }
    public function destroy (Request $request ,$course_id)
    {
       $mail = MailList::find($request->id);
        if ($mail)
           $mail->delete();
            Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
            return redirect()->back();
    }
}
