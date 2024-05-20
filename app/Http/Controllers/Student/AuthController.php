<?php

namespace App\Http\Controllers\Student;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Toastr;

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

        return redirect()->route('/')->with('admin.success', __('admin.auth_logged_out'));
    }
}
