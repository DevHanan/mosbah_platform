<?php

namespace App\Http\Controllers\instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subscription;
use Auth;
use Carbon\Carbon;
use DB;
class CourseController extends Controller
{
   public function __construct()
   {
      // Module Data
      $this->title = 'دوراتى';
      $this->route = 'instructor.courses';
      $this->view = 'instructor';
   }

   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function list()
   {
     
     $data['title'] = $this->title;
      $data['route'] = $this->route;
      $data['view'] = $this->view;
      $ids= Subscription::where('instructor_id',auth()->guard('instructors-login')->user()->id)->pluck('course_id')->ToArray();
      $data['courses'] = Course::whereIn('id',$ids)->latest()->get();

      return view('instructor.courses', $data);

   }
}
