<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\StudentResource;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Bcrypt;

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

        $student->password = Bcrypt($request->password);
        $student->save();

        return $this->okApiResponse(new StudentResource($student), __('Student add successfully'));
    }

    public function update(UpdateStudentRequest $request)
    {
        $student = Student::find($request->id);
        $student->update($request->except(['image','password']));
        if ($request->hasFile('image')) {
            $directory = 'students';
            $attach = 'image';
            $student->image = $this->uploadMedia($request,$attach, $directory);
            $student->save();
        }
        if($request->password){
            $student->password = Bcrypt($request->password);
            $student->save();
        }
        return $this->okApiResponse(new StudentResource($student), __('Student updated successfully'));
    }

    public function delete(Request $request)
    {

        $student = Student::find($request->id);
        if($student)
        $student->delete();
        return $this->okApiResponse('', __('Student deleted successfully'));
    }
}
