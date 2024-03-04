<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\CourseResource;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;

class CourseController extends Controller
{
    use ApiResponse;
    use  FileUploader;


    public function list()
    {
        $courses = Course::active()->get();
        return $this->okApiResponse(CourseResource::collection($courses), __('courses loaded'));
    }

    public function store(CourseRequest $request)
    {
        $course = Course::create($request->except(['image','background_image']));
        if ($request->hasFile('image')) {
            $directory = 'courses/main';
            $attach = 'image';
            $course->image = $this->uploadMedia($request,$attach, $directory);
            $course->save();
        }

        if ($request->hasFile('background_image')) {
            $directory = 'courses/backgroundImg';
            $attach = 'image';
            $course->background_image = $this->uploadMedia($request,$attach, $directory);
            $course->save();
        }
        return $this->okApiResponse(new CourseResource($course), __('Course add successfully'));
    }

    public function update(UpdateCourseRequest $request)
    {
        $course = Course::find($request->id);
        $course->update($request->except(['image','background_image']));
        if ($request->hasFile('image')) {
            $directory = 'courses';
            $attach = 'image';
            $course->image = $this->uploadMedia($request,$attach, $directory);
            $course->save();
        }
        if ($request->hasFile('background_image')) {
            $directory = 'courses/backgroundImg';
            $attach = 'image';
            $course->background_image = $this->uploadMedia($request,$attach, $directory);
            $course->save();
        }
        return $this->okApiResponse(new CourseResource($course), __('Course updated successfully'));
    }

    public function delete(Request $request)
    {
        $course = Course::find($request->id);
        if($course)
        $course->delete();
        return $this->okApiResponse('', __('Course deleted successfully'));
    }
}
