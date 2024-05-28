<?php

namespace App\Http\Controllers\Student;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Toastr;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/student/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    public function login($id){
        Auth::guard('web')->logout();
        Auth::guard('students-login')->loginUsingId($id);
        Toastr::success(__('admin.msg_login_successfully'), __('admin.msg_success'));
        return redirect('student/dashboard');
    }
  

    public function logout(){

        Auth::guard('students-login')->logout();
        Toastr::success(__('admin.msg_logout_successfully'), __('admin.msg_success'));
        return redirect('/')->with('admin.success', __('admin.auth_logged_out'));
    }

    public function getProfile(){

        $data['row'] = auth()->guard('students-login')->user();
        return view('student.profile', $data);

    }
    public function profile(Request $request)
    {
        // Field Validation
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'photo' => 'nullable|image',
        ]);

        $user = Auth::guard('students-login')->user();

        if($request->id == $user->id){

        // Update data
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->country_id = $request->country_id;
        $user->phone = $request->phone;
        $user->qualifications = $request->qualifications;
        $user->save();


        if ($request->hasFile('image')) {

            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/students/'), $filename);
            $user->image = 'uploads/students/' . $filename;
            $user->save();
        }

        if ($request->track_ids)
            $user->tracks()->attach($request->track_ids);

            if ($request->password != null) {
                $user->password = Bcrypt($request->password);
                $user->save();
            }

        Toastr::success(__('msg_updated_successfully'), __('msg_success'));

        }
        else {
        Toastr::error(__('msg_not_permitted'), __('msg_error'));
        }

        return redirect()->back();
    }
}
