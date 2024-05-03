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
        return view('front.index',compact(['latest']));

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
    public function course($id)
    {
        $course = Course::find($id);
        $related_courses = Course::where('track_id',$course->track_id)->get();
        return view('front.course',compact('course','related_courses'));
    }

    public function lecture($id)
    {
        $lecture = Lecture::find($id);
        return view('front.lecture',compact('lecture'));
    }
    public function signin()
    {
        return view('front.signin');
    }
    public function signup()
    {
        return view('front.signup');
    }
    public function cart($id)
    {
        $course = Course::find($id);
        return view('front.course_cart',compact('course'));
    }

    public function Questions()
    {
        return view('front.Questions');
    }

  
    
}
