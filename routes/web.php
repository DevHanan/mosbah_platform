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
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\PartenerController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Front\RegisterController;

Route::get('/file/download/{filename?}', [FileController::class, 'download'])->name('file.download');


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/courses', [HomeController::class, 'courses']);
Route::get('/blogs', [HomeController::class, 'blogs']);
Route::get('/policies', [HomeController::class, 'policy']);
Route::get('/contactus', [HomeController::class, 'contactus']);
Route::get('/books', [HomeController::class, 'books']);
Route::get('/book', [HomeController::class, 'book']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/course/{id}', [HomeController::class, 'course']);
Route::get('/lecture/{id}', [HomeController::class, 'lecture']);
Route::get('/signin', [HomeController::class, 'signin']);
Route::get('/signup', [HomeController::class, 'signup']);
Route::get('/cart/{id}', [HomeController::class, 'cart']);

Route::get('/sign_step1', [RegisterController::class, 'getsignstep1']);
Route::post('/sign_step1', [RegisterController::class, 'registerStudent']);

Route::get('/sign_step2', [RegisterController::class, 'getsignstep2']);
Route::post('/sign_step2', [RegisterController::class, 'signstep2']);


Route::get('/sign_step3', [RegisterController::class, 'getsignstep3']);
Route::post('/sign_step3', [RegisterController::class, 'signstep3']);

Route::get('/sign-verify', [RegisterController::class, 'signVerify']);
Route::get('/sign-complete', [RegisterController::class, 'signcomplete']);

Route::post('/signin', [RegisterController::class, 'signin']);


Route::get('/questions', [HomeController::class, 'questions']);
Route::post('/subscribe', [HomeController::class, 'subscribe']);



Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
});



Route::get('language/{language}', [LangController::class, 'changeLanguage'])->name('language');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin',

        'middleware' => [ 'localeSessionRedirect', 'localize', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        
    Auth::routes([
        'login'    => true,
        'logout'   => true,
        'register' => false,
        'reset'    => false,   // for resetting passwords
        'confirm'  => false,  // for additional password confirmations
        'verify'   => false,  // for email verification
    ]);

        Route::name('admin.')->middleware('auth:web')->group(function () {

            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
            Route::resource('courses', CourseController::class);

            Route::resource('tracks', TrackController::class);
            Route::resource('course-types', CourseTypeController::class);
            Route::resource('courses', CourseController::class);
            Route::resource('courses.levels', LevelController::class);
            Route::resource('levels.lectures', LectureController::class);

            Route::resource('certifications', CertificationController::class);
            Route::get('students-certifications', [CertificationController::class, 'studentCertificate']);

            Route::get('instructors-tickets', [TicketController::class, 'listInstructorMsg']);
            Route::get('students-tickets', [TicketController::class, 'listStudentMsg']);


            Route::resource('coupons', CouponController::class);
            Route::resource('questions', QuestionController::class);

            Route::resource('students', StudentController::class);
            Route::get('student-status/{id}', [StudentController::class, 'status'])->name('users.status');
            Route::resource('subscriptions', SubscriptionController::class);
            Route::post('changestatus', [SubscriptionController::class, 'changeStatus']);
            Route::post('changerecommened', [SubscriptionController::class, 'changerecommened']);

            
            Route::resource('instructors', InstructorController::class);
            Route::get('instructors-status/{id}', [InstructorController::class, 'status'])->name('users.status');

            Route::resource('countries', CountryController::class);
            Route::resource('payment-types', PaymentTypeController::class);
            Route::resource('policies', PolicyController::class);

            Route::resource('users', UserController::class);
            Route::resource('roles', RoleController::class);
            Route::get('user-status/{id}', [UserController::class, 'status'])->name('users.status');
            Route::post('user-send-password/{id}', [UserController::class, 'sendPassword'])->name('users.send-password');
            Route::post('user-password-change', [UserController::class, 'passwordChange'])->name('users-password-change');
            /** Setting Route  */
            Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
            Route::post('siteinfo', [SettingController::class, 'siteinfo'])->name('setting.siteinfo');
            Route::get('about-us-settings', [SettingController::class, 'aboutUSSetting'])->name('settings.aboutUSSetting');
            Route::post('about-us-settings', [SettingController::class, 'saveAboutSetting'])->name('setting.saveAboutSetting');
            Route::resource('teams', TeamController::class);
            Route::resource('parteners', PartenerController::class);


        });
    }
);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
