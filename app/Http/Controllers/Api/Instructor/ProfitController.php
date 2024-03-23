<?php

namespace App\Http\Controllers\Api\Instructor;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Traits\FileUploader;
use App\Http\Resources\CourseResource;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CourseExport;


class ProfitController extends Controller
{
    use ApiResponse;
    public function list(Request $request)
    {
        $login_id = auth()->user()->guard('instructor')->id;
        $courses = Course::where('instructor_id',$login_id)->get();
        return $this->okApiResponse(CourseResource::collection($courses), __('courses loaded'));
    }

  
}
