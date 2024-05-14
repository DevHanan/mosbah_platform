<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Sale;
use App\Models\Order;
use App\Models\Product;
use App\Models\Visit;
use Auth;
use Carbon\Carbon;
use DB;
class DashboardController extends Controller
{
   public function __construct()
   {
      // Module Data
      $this->title = 'الإحصائيات';
      $this->route = 'student.dashboard';
      $this->view = 'student';
   }

   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
     
     $data['title'] = $this->title;
      $data['route'] = $this->route;
      $data['view'] = $this->view;

      return view($this->view.'.index', $data);

   }
}
