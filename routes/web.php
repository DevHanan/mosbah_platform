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



Route::get('/', function () {
    Artisan::call('route:clear');
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
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::name('admin.')->prefix('/admin')->group(function () {

            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
            Route::resource('courses', CourseController::class);
            Route::resource('course-types', CourseTypeController::class);
            Route::resource('levels', CourseController::class);
            Route::resource('lectures', CourseController::class);

            Route::resource('tracks', TrackController::class);
            Route::resource('countries', CountryController::class);
            Route::resource('payment-types', PaymentTypeController::class);

            Route::resource('certifications', CertificationController::class);
            Route::get('student-certifications', [CertificationController::class, 'studentCertificate']);

            Route::resource('tickets', TicketController::class);

            Route::resource('students', CourseController::class);
            Route::resource('subscriptions', CourseController::class);

            Route::resource('instructors', CourseController::class);

            Route::resource('users', UserController::class);
            Route::resource('roles', RoleController::class);
            Route::get('user-status/{id}', [UserController::class, 'status'])->name('users.status');
            Route::post('user-send-password/{id}', [UserController::class, 'sendPassword'])->name('users.send-password');
            Route::post('user-password-change', [UserController::class, 'passwordChange'])->name('users-password-change');
        });
    }
);
