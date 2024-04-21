<?php

namespace App\Providers;
use App\Models\Setting;
use App\Models\Course;
use App\Models\Country;
use App\Models\Track;
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
        $countries = Country::active()->get();
        $tracks = Track::active()->get();
        View::share(['setting'=>$setting,'courses'=>$courses ,'tracks'=>$tracks,'countries'=>$countries]);

    }
}
