<?php

namespace App\Http\Controllers\Admin;

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
use Toastr;



class CourseController extends Controller
{
    use ApiResponse;
    use  FileUploader;


    public function __construct()
    {
        // Module Data
        $this->title = 'courses';
        $this->route = 'admin.courses';
        $this->view = 'admin.courses';
        $this->path = 'courses';
        $this->access = 'courses';
        // $this->middleware('permission:products-create', ['only' => ['create','store']]);
        // $this->middleware('permission:products-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:products-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:products-delete',   ['only' => ['delete']]);

    }


    public function index(Request $request)
    {
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;

        $data['rows'] = Course::active()->where(function ($q) use ($request) {
            if ($request->name)
                $q->Where('name', 'like', '%' . $request->name  . '%');
            if ($request->instructor_id)
                $q->where('instructor_id', $request->instructor_id);
            if ($request->track_id)
                $q->where('track_id', $request->track_id);
                if ($request->course_type)
                $q->where('course_type_id', $request->course_type);
        })->get();
        
        return view($this->view.'.index', $data);
    }

    public function create()
    {
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;
        return view($this->view.'.create', $data);

    }

    public function store(CourseRequest $request)
    {
        $course = Course::create($request->except(['image', 'background_image']));
        if ($request->hasFile('image')) {
            $directory = 'courses/main';
            $attach = 'image';
            $course->image = 'uploads/coursers/main/'.$this->uploadMedia($request, $attach, $directory);
            $course->save();
        }

        if ($request->hasFile('background_image')) {
            $directory = 'courses/backgroundImg';
            $attach = 'background_image';
            $course->background_image ='uploads/coursers/backgroundImg/'. $this->uploadMedia($request, $attach, $directory);
            $course->save();
        }
        return $this->okApiResponse(new CourseResource($course), __('Course add successfully'));
    }


    public function show($id){
        $course = Course::find($id);
        if($course)
        return $this->okApiResponse(new CourseResource($course), __('course loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function edit( $id)
    {
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;
        $data['row'] = Course::with('photos')->find($id);

      return view($this->view.'.edit', $data);

    }
    public function update(UpdateCourseRequest $request)
    {
        $course = Course::find($request->id);
        $course->update($request->except(['image', 'background_image']));
        if ($request->hasFile('image')) {
            $directory = 'courses';
            $attach = 'image';
            $course->image = $this->uploadMedia($request, $attach, $directory);
            $course->save();
        }
        if ($request->hasFile('background_image')) {
            $directory = 'courses/backgroundImg';
            $attach = 'image';
            $course->background_image = $this->uploadMedia($request, $attach, $directory);
            $course->save();
        }
        return $this->okApiResponse(new CourseResource($course), __('Course updated successfully'));
    }

    public function delete(Request $request)
    {
        $course = Course::find($request->id);
        if ($course)
            $course->delete();
        return $this->okApiResponse('', __('Course deleted successfully'));
    }


    public function ExportToExcel(Request $request){

        return Excel::download(new CourseExport, 'courses.xlsx');

    }
}
