<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
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
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\PartenerController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\CvController;
use App\Http\Controllers\Admin\QuestionBankGroupsController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\ProfitController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\QuizSectionController;
use App\Http\Controllers\Admin\QuizQuestionContr;
use App\Http\Controllers\Admin\BlogController;






Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin',

        'middleware' => ['localeSessionRedirect', 'localize', 'localizationRedirect', 'localeViewPath']
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
      
        Route::get('admin/get-courses', [CourseController::class, 'getcourses'])->name('admin.getCourses');
        Route::get('admin/get-course', [CourseController::class, 'getcourse'])->name('admin.getcourse');
        Route::get('admin/get-levels-by-coure', [CourseController::class, 'getlevels'])->name('admin.getLevels');
        Route::get('admin/get-lecture-by-level', [CourseController::class, 'getlectures'])->name('admin.getLectures');

        Route::name('admin.')->middleware(['auth:web', 'prevent-inactive-user'])->group(function () {

            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
            Route::resource('courses', CourseController::class);

            Route::get('start-soon-courses', [CourseController::class, 'startSoonCourses'])->name('startsoonCourses');
            Route::resource('tracks', TrackController::class);          
              Route::resource('blogs', BlogController::class);
            Route::resource('course-types', CourseTypeController::class);
            Route::resource('courses', CourseController::class);

            Route::resource('courses.levels', LevelController::class);
            Route::resource('levels.lectures', LectureController::class);

            Route::resource('certifications', CertificationController::class);
            Route::get('students-certifications', [CertificationController::class, 'studentCertificate'])->name('studentscertifications');
            Route::get('externel-students-certifications', [CertificationController::class, 'externelstudentCertificate'])->name('externelstudentscertifications');

            Route::get('instructors-tickets', [TicketController::class, 'listInstructorMsg'])->name('instructorstickets');
            Route::get('students-tickets', [TicketController::class, 'listStudentMsg'])->name('studentstickets');
            Route::get('visitors-tickets', [TicketController::class, 'listVisitorMsg'])->name('visitorstickets');
            Route::resource('tickets', TicketController::class);
            Route::post('change-ticket-status', [TicketController::class, 'changeStatus'])->name('tickets.changeStatus');



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

            Route::get('contact-us-settings', [SettingController::class, 'contactUs'])->name('settings.contactUs');
            Route::post('contact-us-settings', [SettingController::class, 'SaveContactUs'])->name('setting.SaveContactUs');

            Route::get('landing-page-settings', [SettingController::class, 'landingSetting'])->name('setting.landingSetting');
            Route::post('landing-settings', [SettingController::class, 'SaveLandingSetting'])->name('setting.SaveContactUs');


            Route::get('about-us-settings', [SettingController::class, 'aboutUSSetting'])->name('settings.aboutUSSetting');
            Route::post('about-us-settings', [SettingController::class, 'saveAboutSetting'])->name('setting.saveAboutSetting');
            Route::resource('teams', TeamController::class);
            Route::resource('parteners', PartenerController::class);
            Route::resource('cvs', CvController::class);


            /** finical  */
            Route::get('course/profit', [ProfitController::class, 'courseProfit'])->name('courseprofits');
            Route::get('student-payments', [ProfitController::class, 'studentPayment'])->name('studentspayment');
            Route::get('list-payment-requests', [ProfitController::class, 'listRequest'])->name('listRequest');
            Route::get('list-paid-payment-requests', [ProfitController::class, 'listPaidRequest'])->name('listPaidRequest');



        //Questions Bank Groups
       
        Route::resource('bank-groups', QuestionBankGroupsController::class);
        Route::resource('bank-groups.bank-questions', QuestionsController::class);
        Route::resource('quizzes', QuizController::class);
        Route::resource('quizzes.sections', QuizSectionController::class);
        Route::resource('quizzes.questions', QuizQuestionController::class);




    
        
        });
    }
);
