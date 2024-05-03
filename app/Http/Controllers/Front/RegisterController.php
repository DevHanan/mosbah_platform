<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Bcrypt;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Instructor;
use Auth;

class RegisterController extends Controller
{

    public function getsignstep1()
    {
        return view('front.signstep1');
    }
    public function getsignstep2()
    {
        return view('front.sign_step2');
    }
    public function getsignstep3()
    {
        return view('front.sign_step3');
    }
    public function signVerify()
    {
        return view('front.sign-verfiy');
    }
    public function signcomplete()
    {
        return view('front.sign-completed');
    }


    public function registerStudent(RegisterRequest $request)
    {
        $type = $request->input('type');
        if ($type == 'instructor')
            $model = 'App\Models\Instructor';
        else
            $model = 'App\Models\Student';
        $request->merge(['userName' => $request->email]);
        $item = $model::create($request->except('password'));
        $item->password = Bcrypt($request->password);
        $item->save();
        $guard = $type == 'instructor' ? 'instructors-login' : 'students-login';
        Auth::guard($guard)->loginUsingId($item->id);
        toastr.success(__('front.msg_created_successfully'), __('front.msg_success'));
        return view('front.sign_step2', compact(['type', 'item']));
    }


    public function signstep2(Request $request)
    {


        if (Auth::guard('instructors-login')->check()) {
            $model = Instructor::find(Auth::guard('instructors-login')->user()->id);
            $model->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'country_id' => $request->country_id,
                'qualifications' => $request->qualifications
            ]);
        } else {
            $model = Student::find(Auth::guard('students-login')->user()->id);
            $model->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'country_id' => $request->country_id,
                'qualifications' => $request->qualifications
            ]);
        }
        return view('front.sign_step3');
    }


    public function signstep3(Request $request)
    {



        return view('front.sign-completed');
    }
}
