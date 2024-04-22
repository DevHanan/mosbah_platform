<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseTypeController;
use App\Http\Controllers\Admin\TrackController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\PaymentTypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\LectureController;

Route::get('/', function () {
    return view('front.index');
});


Route::get('language/{language}', function ($language) {
    $thisUrl = str_replace(url('/'), '', url()->previous())  .'/';
    if ($language == 'en') {
        $newUrl  = str_replace('/ar/', '/en/', $thisUrl);
    }else{

        $newUrl  = str_replace('/en/', '/ar/', $thisUrl);
    }
    session()->put('locale', $language);
    return redirect($newUrl);
})->name('language');

Route::group(
    [
        //LaravelLocalization::setLocale() 
        'prefix' =>  '/admin',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
        'name' => 'admin.'
    ],
    function () {
        Route::name('admin.')->group(function () {

            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
            Route::resource('courses', CourseController::class);

            Route::resource('tracks', TrackController::class);
            Route::resource('course-types', CourseTypeController::class);
            Route::resource('levels', LevelController::class);
            Route::resource('lectures', LectureController::class);


           

            Route::resource('certifications', CertificationController::class);
            Route::get('students-certifications', [CertificationController::class, 'studentCertificate']);

            Route::get('instructors-tickets', [TicketController::class,'listInstructorMsg']);
            Route::get('instructors-tickets', [TicketController::class,'listStudentMsg']);


            Route::resource('coupons', CouponController::class);

            Route::resource('students', StudentController::class);
            Route::get('student-status/{id}', [StudentController::class, 'status'])->name('users.status');
            Route::resource('subscriptions', SubscriptionController::class);

            Route::resource('instructors', InstructorController::class);

            Route::resource('countries', CountryController::class);
            Route::resource('payment-types', PaymentTypeController::class);

            Route::resource('users', UserController::class);
            Route::resource('roles', RoleController::class);
            Route::get('user-status/{id}', [UserController::class, 'status'])->name('users.status');
            Route::post('user-send-password/{id}', [UserController::class, 'sendPassword'])->name('users.send-password');
            Route::post('user-password-change', [UserController::class, 'passwordChange'])->name('users-password-change');
        });
    }
);
