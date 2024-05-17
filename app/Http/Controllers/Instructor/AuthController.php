<?php

namespace App\Http\Controllers\Instructor;

use Auth;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
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
    protected $redirectTo = '/instructor/dashboard';

    public function login($id){
        Auth::guard('web')->logout();
        Auth::guard('instructors-login')->loginUsingId($id);
        Toastr::success(__('admin.msg_login_successfully'), __('admin.msg_success'));
        return redirect('instructor/dashboard');
    }
  


    public function logout(){

        Auth::guard('instructors-login')->logout();

        return redirect()->route('signin')->with('admin.success', __('admin.auth_logged_out'));
    }
}
