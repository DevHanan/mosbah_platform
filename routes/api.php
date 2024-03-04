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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace'=>'Api' ], function () {

Route::group(['prefix' => 'students'], function () {
    Route::get('/', 'StudentController@list');
    Route::post('/store', 'StudentController@store');
    Route::post('/update', 'StudentController@update');
    Route::delete('/delete', 'StudentController@delete');
    Route::get('/excel', 'StudentController@exportExcelStudents');
});

Route::group(['prefix' => 'instructors'], function () {
    Route::get('/', 'InstructorController@list');
    Route::post('/store', 'InstructorController@store');
    Route::post('/update', 'InstructorController@update');
    Route::delete('/delete', 'InstructorController@delete');
    Route::get('/excel', 'InstructorController@exportExcelInstructors');
});

Route::group(['prefix' => 'courses'], function () {
    Route::get('/', 'CourseController@list');
    Route::post('/store', 'CourseController@store');
    Route::post('/update', 'CourseController@update');
    Route::delete('/delete', 'CourseController@delete');
    Route::get('/excel', 'CourseController@exportExcelCourses');
});



Route::group(['prefix' => 'tracks'], function () {
     Route::get('/', [TrackController::class, 'list']);
    Route::post('/store', [TrackController::class,'store']);
    Route::post('/update', [TrackController::class,'update']);
    Route::delete('/delete', [TrackController::class,'delete']);
    Route::post('/change-status', [TrackController::class,'toggoleStatus']);

});


Route::group(['prefix' => 'countries'], function () {
    Route::get('/', 'CountryController@list');
    Route::post('/store', 'CountryController@store');
    Route::post('/update', 'CountryController@update');
    Route::delete('/delete', 'CountryController@delete');
});


Route::group(['prefix' => 'courseTypes'], function () {
    Route::get('/', 'CourseTypeController@list');
    Route::post('/store', 'CourseTypeController@store');
    Route::post('/update', 'CourseTypeController@update');
    Route::delete('/delete', 'CourseTypeController@delete');
});



});