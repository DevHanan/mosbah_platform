<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subscription;
use DB;
class PaymentController extends Controller
{
   public function __construct()
   {
      // Module Data
      $this->title = '';
      $this->route = 'student.payments';
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
      $data['rows']= Subscription::where('student_id',auth()->guard('students-login')->user()->id)->latest()->get();
      return view('student.payments', $data);

   }
}
