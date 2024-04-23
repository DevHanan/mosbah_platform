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
use App\Http\Controllers\LangController;
use App\Http\Controllers\Front\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/courses', [HomeController::class, 'courses']);
Route::get('/blogs', [HomeController::class, 'blogs']);
Route::get('/policies', [HomeController::class, 'policy']);
Route::get('/contactus', [HomeController::class, 'contactus']);
Route::get('/books', [HomeController::class, 'books']);
Route::get('/book', [HomeController::class, 'book']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/course', [HomeController::class, 'course']);
Route::get('/signin', [HomeController::class, 'signin']);
Route::get('/signup', [HomeController::class, 'signup']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/sign_step1', [HomeController::class, 'signstep1']);
Route::get('/sign_step2', [HomeController::class, 'signstep2']);
Route::get('/sign_step3', [HomeController::class, 'signstep3']);
Route::get('/sign-verify', [HomeController::class, 'signVerify']);
Route::get('/sign-complete', [HomeController::class, 'signcomplete']);

Route::get('/questions', [HomeController::class, 'questions']);



Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
});



Route::get('language/{language}', [LangController::class, 'changeLanguage'])->name('language');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin',

        'middleware' => ['localeSessionRedirect', 'localize', 'localizationRedirect', 'localeViewPath']
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

            Route::get('instructors-tickets', [TicketController::class, 'listInstructorMsg']);
            Route::get('students-tickets', [TicketController::class, 'listStudentMsg']);


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
