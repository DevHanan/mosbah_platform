<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Bcrypt;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Instructor;
use Auth;
use Yoeunes\Toastr\Toastr;

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
        toastr()->success(__('front.account_created_successfully'), __('front.msg_success'));
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
        toastr()->success(__('front.data_created_successfully'), __('front.msg_success'));
        return view('front.sign_step3');
    }


    public function signstep3(Request $request)
    {
        if (Auth::guard('students-login')->check()) {
            $directory = 'uploads/students/images';
            $guard = 'students-login';
        } else {
            $directory = 'uploads/instructors/images';
            $guard = 'instructors-login';
        }

        if ($request->hasFile('image')) {
            $attach = 'image';
            Auth::guard($guard)->user()->photo = 'uploads/coursers/thumbinal_image/' . $this->uploadMedia($request, $attach, $directory);
            Auth::guard($guard)->user()->save();
        }


        return view('front.sign-completed');
    }


    public function signin(Request $request)
    {

        if (isset($request->email) && $request->email != null) {
            $field = 'email';
            $value = $request->email;
        } else {
            $field = 'phone';
            $value = $request->phone;
        }

        if (auth()->guard('students-login')->attempt([$field => $value, 'password' => $request->password])) {
            $client = auth()->guard('students-login')->user();
            if (!$client->active == '1') {
                Auth::guard('students-login')->logout();
                return redirect('/')->with('error', 'Your account is currently inactive. Please contact the administrator for further assistance.');
            }
            if (Auth::guard('instructors-login')->check() || Auth::guard('web')->check()) {
                Auth::guard('students-login')->logout();
                return redirect('/')->with('error', 'There are another login user  please logout first to can login.');
            }
            $token = $client->createToken('apiToken')->plainTextToken;
            $client->api_token = $token;
            $client->save();
            toastr()->success(__('front.login_success'), __('front.msg_success'));
            return view('front.index');
        } elseif (auth()->guard('instructors-login')->attempt([$field => $value, 'password' => $request->password])) {
            $client = auth()->guard('instructors-login')->user();
            if (!$client->active == '1') {
                Auth::guard('students-login')->logout();
                return redirect('/')->with('error', 'Your account is currently inactive. Please contact the administrator for further assistance.');
            }
            if (Auth::guard('students-login')->check() || Auth::guard('web')->check()) {
                Auth::guard('instructors-login')->logout();
                return redirect('/')->with('error', 'There are another login user  please logout first to can login.');
            }
            $token = $client->createToken('apiToken')->plainTextToken;
            $client->api_token = $token;
            $client->save();
            toastr()->success(__('front.login_success'), __('front.msg_success'));
            return view('front.index');
        } else {
            toastr()->error(__('front.login_failed'), __('front.msg_error'));
            return view('front.signstep1');
        }
    }
}
