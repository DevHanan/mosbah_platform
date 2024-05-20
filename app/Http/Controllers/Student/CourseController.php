<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Course;
use App\Models\Sale;
use App\Models\Order;
use App\Models\Product;
use App\Models\Subscription;
use App\Models\Visit;
use Auth;
use Carbon\Carbon;
use DB;
class DashboardController extends Controller
{
   public function __construct()
   {
      // Module Data
      $this->title = 'الدورات المشترك بها ';
      $this->route = 'student.courses';
      $this->view = 'student';
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
      $ids= Subscription::where('student_id',auth()->guard('students-login')->user()->id)->pluck('course_id')->ToArray();
      $data['courses'] = Course::whereIn('id',$ids)->latest()->get();

      return view('student.courses', $data);

   }
}
