<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\AuthController;
use App\Http\Controllers\Instructor\DashboardController as InstructorDashboardController;
use App\Http\Controllers\Instructor\StudentController;
use App\Http\Controllers\Instructor\CourseController;



Route::get('login-by-id/{id}', [AuthController::class, 'login'])->name('instructor-login');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localize', 'localizationRedirect', 'localeViewPath', 'prevent-inactive-user']
    ],
    function () {
        Route::name('instructor.')->prefix('instructor/')->middleware(['auth:instructors-login'])->group(function () {

            Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard.index');
            Route::post('logout', [AuthController::class, 'logout'])->name('instructor-logout');
            Route::get('my-students', [StudentController::class, 'list'])->name('students');
            Route::get('my-courses', [CourseController::class, 'list'])->name('courses');

        });

       
    }
);