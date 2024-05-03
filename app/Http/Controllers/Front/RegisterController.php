<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Bcrypt;
use App\Models\Student;
use App\Models\Instructor;


class RegisterController extends Controller
{
    
    public function registerStudent(RegisterRequest $request){
        $type= $request->input('type');
        $model =  $type  == 'Instructor' ? 'Instructor' : 'Student';
        $request->merge(['password'=> Bcrypt($request->password)]);
        $item = $model::create($request->all());
        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect('/sign_step2?type='.$type,compact(['item']));

 

    }
}
