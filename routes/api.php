<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\Api\TrackController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\CourseTypeController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\InstructorController;
use App\Http\Controllers\Api\CouponController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace'=>'Api' ], function () {

Route::group(['prefix' => 'students'], function () {
  
    Route::get('/', [StudentController::class, 'list']);
    Route::get('/export-sto-excel', [StudentController::class,'ExportToExcel']);
    Route::post('/store', [StudentController::class,'store']);
    Route::post('/update', [StudentController::class,'update']);
    Route::get('/{id}', [StudentController::class,'show']);
    Route::post('/delete', [StudentController::class,'delete']);
});

Route::group(['prefix' => 'instructors'], function () {
    Route::get('/', [InstructorController::class, 'list']);
    Route::get('/export-to-excel', [InstructorController::class,'ExportToExcel']);
    Route::post('/store', [InstructorController::class,'store']);
    Route::post('/update', [InstructorController::class,'update']);
    Route::get('/{id}', [InstructorController::class,'show']);
    Route::post('/delete', [InstructorController::class,'delete']);

    
});

Route::group(['prefix' => 'courses'], function () {

    Route::get('/', [CourseController::class, 'list']);
    Route::get('/export-to-excel', [CourseController::class,'ExportToExcel']);
    Route::post('/store', [CourseController::class,'store']);
    Route::post('/update', [CourseController::class,'update']);
    Route::get('/{id}', [CourseController::class,'show']);
    Route::post('/delete', [CourseController::class,'delete']);

  
});



Route::group(['prefix' => 'tracks'], function () {
     Route::get('/', [TrackController::class, 'list']);
    Route::post('/store', [TrackController::class,'store']);
    Route::post('/update', [TrackController::class,'update']);
    Route::get('/{id}', [TrackController::class,'show']);
    Route::post('/delete', [TrackController::class,'delete']);
    Route::post('/change-status', [TrackController::class,'toggoleStatus']);

});


Route::group(['prefix' => 'countries'], function () {
    Route::get('/', [CountryController::class, 'list']);
    Route::post('/store', [CountryController::class,'store']);
    Route::post('/update', [CountryController::class,'update']);
    Route::get('/{id}', [CountryController::class,'show']);
    Route::post('/delete', [CountryController::class,'delete']);
    Route::post('/change-status', [CountryController::class,'toggoleStatus']);
});


Route::group(['prefix' => 'courseTypes'], function () {

    Route::get('/', [CourseTypeController::class, 'list']);
    Route::post('/store', [CourseTypeController::class,'store']);
    Route::post('/update', [CourseTypeController::class,'update']);
    Route::get('/{id}', [CourseTypeController::class,'show']);
    Route::post('/delete', [CourseTypeController::class,'delete']);
    Route::post('/change-status', [CourseTypeController::class,'toggoleStatus']);
});


Route::group(['prefix' => 'coupons'], function () {

    Route::get('/', [CouponController::class, 'list']);
    Route::post('/store', [CouponController::class,'store']);
    Route::post('/update', [CouponController::class,'update']);
    Route::get('/{id}', [CouponController::class,'show']);
    Route::post('/delete', [CouponController::class,'delete']);
});



});