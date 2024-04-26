<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Course;
use App\Models\Country;
use App\Models\CourseType;
use App\Models\Student;
use App\Models\Track;
use App\Models\PaymentType;
use App\Models\Level;
use App\Models\Instructor;
use App\Models\Ticket;
use App\Models\Policy;

use View;


use Illuminate\Support\ServiceProvider;
use PHPUnit\Framework\Constraint\Count;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $setting = Setting::where('status', '1')->first();
        $courses = Course::get();
        $courseTypes = CourseType::get();
        $countries = Country::active()->get();
        $tracks = Track::active()->get();
        $paymenttypes = PaymentType::get();
        $students = Student::get();
        $levels = Level::get();
        $instructors = Instructor::get();
        $tickets = Ticket::get();

        $policies = Policy::active()->get();

        View::share(['setting' => $setting, 'courses' => $courses, 
        'tracks' => $tracks, 'countries' => $countries,
        'paymenttypes' => $paymenttypes, 'students' => $students,
        'courseTypes' => $courseTypes,'levels' => $levels , 'instructors'=>$instructors,
        'policies'=>$policies , 'tickets'=>$tickets

    ]);
    }
}
