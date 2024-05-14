<?php

use App\Http\Controllers\Api\Student\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController ;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localize', 'localizationRedirect', 'localeViewPath', 'prevent-inactive-user']
    ],
    function () {
      

        Route::name('student.')->prefix('student/')->middleware(['auth:students-login'])->group(function () {
            Route::get('dashboard', [StudentDashboardController::class, 'index'])->name('dashboard.index');
            Route::post('logout', [AuthController::class, 'logout']);

        });
    }
);