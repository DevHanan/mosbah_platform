<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\StudentResource;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use ApiResponse, FileUploader;


    public function list()
    {
        $students = Student::active()->get();
        return $this->okApiResponse(StudentResource::collection($students), __('students loaded'));
    }

    public function store(StudentRequest $request)
    {
        $student = Student::create($request->except(['image','password']));
        if ($request->hasFile('image')) {
            $directory = 'students';
            $attach = 'image';
            $student->image = $this->uploadMedia($request,$attach, $directory);
            $student->save();
        }
        return $this->okApiResponse(new StudentResource($student), __('Student add successfully'));
    }

    public function update(StudentRequest $request,Student $student)
    {
        $student->update($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'students';
            $attach = 'image';
            $student->image = $this->uploadMedia($request,$attach, $directory);
            $student->save();
        }
        return $this->okApiResponse(new StudentResource($student), __('Student updated successfully'));
    }

    public function delete(Request $request)
    {
        Student::find($request->id)->delete();
        return $this->okApiResponse('', __('Student deleted successfully'));
    }
}
