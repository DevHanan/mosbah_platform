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
use Illuminate\Support\Str;
use App\Mail\VerifyEmail;
use App\Models\LandingSetting;
use App\Mail\VerifyStudentEmail;

use Mail;

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
        $landingSetting = null; // or some default value
        $type = null; // or some default value
        $item = null; // or some default value

        return view('front.sign_verify', compact(['type', 'item', 'landingSetting']));
    }
    public function signcomplete()
    {
        return view('front.sign-completed');
    }


    public function register(RegisterRequest $request)
    {
        $type = $request->input('type');
        if ($type == 'instructor')
            $model = 'App\Models\Instructor';
        else
            $model = 'App\Models\Student';


        $landingSetting = LandingSetting::first();
    
        $item = $model::create($request->except('password'));
        $item->password = Bcrypt($request->password);
        $item->verification_code = Str::random(4); // generate a 6-digit verification code
        $startTime = time(); // get the current timestamp
        $item->verification_expire_time = $startTime + $landingSetting->verification_expire_time_in_seconds;

        $item->save();
        // $guard = $type == 'instructor' ? 'instructors-login' : 'students-login';
        // Auth::guard($guard)->loginUsingId($item->id);


        // Send the verification email
        if ($type == 'instructor')
            Mail::to($item->email)->send(new VerifyEmail($item), [
                'subject' => 'Verify Email'
            ]);
        else
            Mail::to($item->email)->send(new VerifyStudentEmail($item), [
                'subject' => 'Verify Email'
            ]);

        toastr()->success(__('front.account_created_successfully'), __('front.msg_success'));
        return view('front.sign_verify', compact(['type', 'item', 'landingSetting']));

        // return view('front.sign_step2', compact(['type', 'item']));
    }



    public function verifyEmail(Request  $request)
    {

        $type = $request->input('type');
        if ($type == 'instructor')
            $model = 'App\Models\Instructor';
        else
            $model = 'App\Models\Student';
            $landingSetting = LandingSetting::first();
            $expire_time = time() + $landingSetting->verification_expire_time_in_seconds;
            $item = $model::where('verification_code',implode(' ', (array)$request->verify))->toSQl();    
            return $item;    
       if($item){
        $item->verification_code = '';
        $item->verification_expire_time = '';
        $item->save();
        toastr()->success(__('front.account_verified_successfully'), __('front.msg_success'));
            return view('front.sign_step2', compact(['type', 'item']));
       }else{
        toastr()->success(__('front.account_verified_failed'), __('front.msg_error'));
        return view('front.sign_verify', compact(['type', 'item', 'landingSetting']));

       }
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

            if ($request->track_ids)
                $model->tracks()->attach($request->track_ids);
        }
        toastr()->success(__('front.data_created_successfully'), __('front.msg_success'));
        return view('front.sign_step3');
    }


    public function signstep3(Request $request)
    {
        if (Auth::guard('students-login')->user() && $request->image) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/students/'), $filename);
            $student = auth()->guard('students-login')->user();
            $student->image = 'uploads/students/' . $filename;
            $student->save();
        } elseif (Auth::guard('instructors-login')->user() && $request->image) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/instructors/'), $filename);
            $instructor = auth()->guard('instructors-login')->user();
            $instructor->image = 'uploads/instructors/' . $filename;
            $instructor->save();
        }
        toastr()->success(__('front.data_created_successfully'), __('front.msg_success'));
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
            if ($client->active != '1') {
                Auth::guard('students-login')->logout();
                return redirect('/signin')->with('error', 'Your account is currently inactive. Please contact the administrator for further assistance.');
            }
            if (Auth::guard('instructors-login')->check() || Auth::guard('web')->check()) {
                Auth::guard('students-login')->logout();
                return redirect('/signin')->with('error', 'There are another login user  please logout first to can login.');
            }
            $token = $client->createToken('apiToken')->plainTextToken;
            $client->api_token = $token;
            $client->save();
            toastr()->success(__('front.login_success'), __('front.msg_success'));
            return redirect('/');
        } elseif (auth()->guard('instructors-login')->attempt([$field => $value, 'password' => $request->password])) {
            $client = auth()->guard('instructors-login')->user();
            if ($client->active != '1') {
                Auth::guard('instructors-login')->logout();
                return redirect('/signin')->with('error', 'Your account is currently inactive. Please contact the administrator for further assistance.');
            }
            if (Auth::guard('students-login')->check() || Auth::guard('web')->check()) {
                Auth::guard('instructors-login')->logout();
                return redirect('/signin')->with('error', 'There are another login user  please logout first to can login.');
            }
            $token = $client->createToken('apiToken')->plainTextToken;
            $client->api_token = $token;
            $client->save();
            toastr()->success(__('front.login_success'), __('front.msg_success'));
            return redirect('/');
        } else {
            toastr()->error(__('front.login_failed'), __('front.msg_error'));
            return redirect('/signin');
        }
    }
}
