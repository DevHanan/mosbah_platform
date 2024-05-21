<?php

use App\Http\Controllers\Student\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController ;
use App\Http\Controllers\Student\CourseController ;
use App\Http\Controllers\Student\PaymentController ;
use App\Http\Controllers\Student\CertificationController ;


Route::get('student-login-by-id/{id}', [AuthController::class, 'login'])->name('student-login');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localize', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
      

        Route::name('student.')->prefix('student/')->middleware(['auth:students-login'])->group(function () {
            Route::get('dashboard', [StudentDashboardController::class, 'index'])->name('dashboard.index');
            Route::post('logout', [AuthController::class, 'logout'])->name('student-logout');
            Route::get('courses', [CourseController::class, 'list'])->name('courses.index');
            Route::get('payments', [PaymentController::class, 'list'])->name('payments.index');
            Route::get('platform-certifications', [CertificationController::class, 'platformCertifications'])->name('platformCertifications');
            Route::get('externel-certifications', [CertificationController::class, 'index'])->name('externalCertifications');
            Route::resource('certifications',CertificationController::class);

            
        });
    }
);