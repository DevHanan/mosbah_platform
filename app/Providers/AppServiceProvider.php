<?php

namespace App\Providers;
use App\Models\Setting;
use App\Models\Course;

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
      

        View::share(['setting'=>$setting,'courses'=>$courses]);

    }
}
