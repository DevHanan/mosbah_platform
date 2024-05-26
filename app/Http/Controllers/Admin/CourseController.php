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
use App\Models\CourseInstructor;
use App\Models\CourseTrack;
use App\Models\Instructor;
use Toastr;



class CourseController extends Controller
{
    use ApiResponse;
    use  FileUploader;


    public function __construct()
    {
        // Module Data
        $this->title = trans('admin.courses.title');
        $this->route = 'admin.courses';
        $this->view = 'admin.courses';
        $this->path = 'courses';
        $this->access = 'courses';
        // $this->middleware('permission:courses-create', ['only' => ['create','store']]);
        // $this->middleware('permission:courses-view',   ['only' => ['show', 'index']]);
        // $this->middleware('permission:courses-edit',   ['only' => ['edit','update']]);
        // $this->middleware('permission:courses-delete',   ['only' => ['delete']]);

    }


    public function index(Request $request)
    {
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;

        $data['rows'] = Course::with('tracks', 'instructors')->where(function ($q) use ($request) {
            if ($request->type)
                $q->where('course_type_id', $request->type);
            if ($request->recommend)
                $q->where('recommened', $request->recommend);
            if ($request->name)
                $q->Where('name', 'like', '%' . $request->name  . '%');
            if ($request->instructor_id)
                $q->where('instructor_id', $request->instructor_id);
            if ($request->track_id)
                $q->where('track_id', $request->track_id);
            if ($request->course_type)
                $q->where('course_type_id', $request->course_type);
        })->paginate(10);

        return view($this->view . '.index', $data);
    }

   
  public function startSoonCourses(Request $request)
    {
        $data['title'] = 'دورات تبدأ قريبا';
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;

        $data['rows'] = Course::with('tracks', 'instructors')->where(function ($q) use ($request) {
            if ($request->type)
                $q->where('course_type_id', $request->type);
            if ($request->recommend)
                $q->where('recommened', $request->recommend);
            if ($request->name)
                $q->Where('name', 'like', '%' . $request->name  . '%');
            if ($request->instructor_id)
                $q->where('instructor_id', $request->instructor_id);
            if ($request->track_id)
                $q->where('track_id', $request->track_id);
            if ($request->course_type)
                $q->where('course_type_id', $request->course_type);
        })->paginate(10);

        return view($this->view . '.index', $data);
    }
    public function create()
    {
        $data['title'] = trans('admin.courses.add');
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;
        return view($this->view . '.create', $data);
    }

    public function store(Request $request)
    {
        $active = $request->active ? '1' : '0';
        $recommend = $request->recommend ? '1' : '0';
        $request->merge(['active' => $active, 'recommend' => $recommend]);
        $course = Course::create($request->except(['image', 'background_image']));

        if ($request->track_ids)
            $course->tracks()->attach($request->track_ids);

        if (count($request->instructors) ) {
            for ($i = 0; $i < count($request->instructors); $i++) {
                if ($request->instructors[$i] != 0){
                    CourseInstructor::create([
                        'course_id' => $course->id,
                        'instructor_id' => $request->instructors[$i],
                        'course_price' => $request->instructorsprice[$i],
                        'course_prectange' => $request->instructorsprecentage[$i]

                    ]);
                $instructor = Instructor::find($request->instructors[$i]);
                $instructor->current_balance = $instructor->current_balance + $request->instructorsprice[$i];
                $instructor->total_balance = $instructor->total_balance + $request->instructorsprice[$i];
                $instructor->save();
            }
        }
        }

        if ($request->hasFile('image')) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/courses/main/'), $filename);
            $course->image = 'uploads/courses/main/' . $filename;
            $course->save();
        }

        if ($request->hasFile('background_image')) {
            $thumbnail = $request->background_image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/courses/background_image/'), $filename);
            $course->background_image = 'uploads/courses/background_image/' . $filename;
            $course->save();
        }

        Toastr::success(__('admin.msg_created_successfully'), __('admin.msg_success'));
        return redirect('admin/courses/' . $course->id . '/levels');
    }


    public function show($id)
    {
        $course = Course::find($id);
        if ($course)
            return $this->okApiResponse(new CourseResource($course), __('course loades successfully'));
        else
            return $this->notFoundApiResponse([], __('Data Not Found'));
    }

    public function edit($id)
    {
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;
        $data['row'] = Course::find($id);
        $data['row_tracks'] = $data['row']->tracks->pluck('id')->ToArray();


        return view($this->view . '.edit', $data);
    }
    public function update(Request $request)
    {
        $course = Course::find($request->id);
        $active = $request->active ? '1' : '0';
        $recommend = $request->recommend ? '1' : '0';
        $request->merge(['active' => $active, 'recommend' => $recommend]);
        $course->update($request->except(['image', 'background_image', 'thumbinal_image']));

        if ($request->track_ids) {
            CourseTrack::where('course_id', $course->id)->delete();
            $course->tracks()->attach($request->track_ids);
        }

        if (count($request->instructors)) {
            CourseInstructor::where('course_id', $course->id)->delete();
            for ($i = 0; $i < count($request->instructors); $i++) {
                if ($request->instructors[$i] != 0)
                    CourseInstructor::create([
                        'course_id' => $course->id,
                        'instructor_id' => $request->instructors[$i],
                        'course_price' => $request->instructorsprice[$i],
                        'course_prectange' => $request->instructorsprecentage[$i]

                    ]);
            }
        }
        if ($request->hasFile('image')) {
            $thumbnail = $request->image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/courses/main/'), $filename);
            $course->image = 'uploads/courses/main/' . $filename;
            $course->save();
        }

        if ($request->hasFile('background_image')) {
            $thumbnail = $request->background_image;
            $filename = time() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/uploads/courses/background_image/'), $filename);
            $course->background_image = 'uploads/courses/background_image/' . $filename;
            $course->save();
        }

        Toastr::success(__('admin.msg_updated_successfully'), __('admin.msg_success'));
        return redirect()->route('admin.courses.index');
        // return redirect('admin/courses/'.$course->id .'/levels');

    }



    public function ExportToExcel(Request $request)
    {

        return Excel::download(new CourseExport, 'courses.xlsx');
    }

    public function destroy(Request $request)
    {
        $course = Course::find($request->id);
        if ($course)
            $course->delete();

        Toastr::success(__('admin.msg_deleted_successfully'), __('admin.msg_success'));
        return redirect()->route($this->route . '.index');
    }


    public function getcourses(Request $request)
    {
        $track_id = $request->track_id;
        $courses = Course::whereHas('tracks',function($q)use($track_id){
            $q->where('track_id',$track_id);
        })->get();
        return response()->json($courses);
    }

    
}
