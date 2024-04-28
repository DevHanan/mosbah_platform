<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use App\Models\Partener;
use App\Models\Team;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        $setting = AboutSetting::find(1);
        $teams = Team::active()->get();
        $parteners = Partener::active()->get();
        return view('front.about',compact(['setting','teams','parteners']));
    }

    public function courses()
    {
        return view('front.courses');
    }

    public function blogs()
    {
        return view('front.blogs');
    }

    public function policy()
    {
        return view('front.policy');
    }
    public function contactus()
    {
        return view('front.contactus');
    }

    public function books()
    {
        return view('front.books');
    }
    public function book()
    {
        return view('front.book');
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function course()
    {
        return view('front.course');
    }
    public function signin()
    {
        return view('front.signin');
    }
    public function signup()
    {
        return view('front.signup');
    }
    public function cart()
    {
        return view('front.course_cart');
    }

    public function Questions()
    {
        return view('front.Questions');
    }

    public function signstep1()
    {
        return view('front.signstep1');
    }
    public function signstep2()
    {
        return view('front.sign_step2');
    }
    public function signstep3()
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

    
}
