<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Instructor\AuthController;
use App\Http\Controllers\Instructor\DashboardController as InstructorDashboardController;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localize', 'localizationRedirect', 'localeViewPath', 'prevent-inactive-user']
    ],
    function () {
        Route::name('instructor.')->prefix('instructor/')->middleware(['auth:instructors-login'])->group(function () {

            Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard.index');
            Route::post('logout', [AuthController::class, 'logout']);

        });

       
    }
);