<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Cors;
use App\Models\AboutSetting;
use App\Models\Course;
use App\Models\Partener;
use App\Models\Team;
use App\Models\Lecture;
use App\Models\Subscription;
use App\Models\Subsctiption;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function index()
    {
        $latest  = Course::latest()->take(6)->get();
        $title = 'الصفحة الرئيسية';
        return view('front.index',compact(['latest','title']));

    }

    public function about()
    {
        $setting = AboutSetting::find(1);
        $teams = Team::active()->get();
        $parteners = Partener::active()->get();
        $title = 'من نحن';
        return view('front.about',compact(['setting','teams','parteners','title']));
    }

    public function courses()
    {
        $title = 'الدورات التدريبية';
        return view('front.courses',compact('title'));
    }

    public function blogs()
    {
        return view('front.blogs');
    }

    public function policy()
    {
        $title = 'السياسات والشروط';
        return view('front.policy',compact('title'));
    }
    public function contactus()
    {
        $title = 'تواصل معنا';
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
        $course = Course::with(['levels','lectures','track','instructor','coupon'])->find($id);
        $related_courses = Course::where('track_id',$course->track_id)->where('id','!=',$course->id)->get();
        $title = $course->name;
        return view('front.course',compact('course','related_courses','title'));
    }

    public function lecture($id)
    {
        $lecture = Lecture::find($id);
        $title = $lecture->title;
        return view('front.lecture',compact('lecture'));

    }
    public function signin()
    {
        $title = 'تسجيل الدخول';
        return view('front.signin',compact('title'));
    }
    public function signup()
    {
        $title = 'تسجيل حساب جديد';
        return view('front.signup',compact('title'));
    }
    public function cart($id)
    {
        $course = Course::with(['levels','lectures','track','instructor'])->find($id);
        $title = 'الاشتراكات';
        return view('front.course_cart',compact('course','title'));
    }

    public function Questions()
    {
        $title = 'الأسئلة الشائعة';
        return view('front.Questions',compact('Questions'));
    }


    public function subscribe(Request $request){
        $course = Course::find($request->course_id);
        $request->merge(['student_id'=>Auth::guard('students-login')->user()->id,'paid'=>$course->TotalDiscount]);
        $item = Subscription::create($request->except(['bill']));
        if($request->hasFile('bill')){
              
            $thumbnail = $request->bill;
           $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/subsctiptions/'),$filename);
            $item->bill ='public/uploads/subsctiptions/'.$filename;
            $item->save();
        }

        /** add teacher prectanage  */
        toastr()->success(__('front.data_created_successfully'), __('front.msg_success'));
        return redirect('course/'.$request->course_id);


    }

  
    
}
