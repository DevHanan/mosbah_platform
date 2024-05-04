<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Cors;
use App\Models\AboutSetting;
use App\Models\Course;
use App\Models\Partener;
use App\Models\Team;
use App\Models\Lecture;

class HomeController extends Controller
{
    public function index()
    {
        $latest  = Course::latest()->take(6)->get();
        $title = trans('front.home');
        return view('front.index',compact(['latest','title']));

    }

    public function about()
    {
        $setting = AboutSetting::find(1);
        $teams = Team::active()->get();
        $parteners = Partener::active()->get();
        $title = trans('front.about');
        return view('front.about',compact(['setting','teams','parteners','title']));
    }

    public function courses()
    {
        $title = trans('front.courses');
        return view('front.courses',compact('title'));
    }

    public function blogs()
    {
        return view('front.blogs');
    }

    public function policy()
    {
        $title = trans('front.policy');
        return view('front.policy',compact('title'));
    }
    public function contactus()
    {
        $title = trans('front.contactus');
        return view('front.contactus',compact('title'));
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
    public function course($id)
    {
        $course = Course::with('coupon')->find($id);
        $related_courses = Course::where('track_id',$course->track_id)->where('id','!=',$course->id)->get();
        $title = trans('front.course_details');
        return view('front.course',compact('course','related_courses','title'));
    }

    public function lecture($id)
    {
        $lecture = Lecture::find($id);
        $title = trans('front.lecture_details');
        return view('front.lecture',compact('lecture','lecture_details'));

    }
    public function signin()
    {
        $title = trans('front.signin');
        return view('front.signin',compact('title'));
    }
    public function signup()
    {
        $title = trans('front.signup');
        return view('front.signup',compact('signup'));
    }
    public function cart($id)
    {
        $course = Course::find($id);
        $title = trans('front.cart');
        return view('front.course_cart',compact('course','title'));
    }

    public function Questions()
    {
        $title = trans('front.Questions');
        return view('front.Questions',compact('Questions'));
    }

  
    
}
