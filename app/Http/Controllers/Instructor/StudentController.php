<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Course;
use App\Models\Sale;
use App\Models\Order;
use App\Models\Product;
use App\Models\Student;
use App\Models\Subscription;
use App\Models\Visit;
use Auth;
use Carbon\Carbon;
use DB;
class StudentController extends Controller
{
   public function __construct()
   {
      // Module Data
      $this->title = 'طلابى';
      $this->route = 'instructor.students';
      $this->view = 'students';
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
      $login_id = auth()->guard('instructors-login')->user()->id;
    
    $data['students']= auth()->guard('instructors-login')->user()->courses->whereHas('students', function ($query) {
      $query->where('is_active', true); // or any other criteria for the students
  })->with('students')->get();
  return $data['students'];

      return view('instructor.students', $data);

   }
}
