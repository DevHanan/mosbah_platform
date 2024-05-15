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
use App\Http\Controllers\Front\RegisterController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Front\HomeController;

Route::get('/file/download/{filename?}', [FileController::class, 'download'])->name('file.download');

Route::get('/', [HomeController::class, 'index'])->name('home');
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
Route::get('/cart/{id}', [HomeController::class, 'cart'])->middleware('auth:students-login');

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
