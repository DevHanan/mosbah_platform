<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\InstructorResource;
use App\Http\Requests\InstructorRequest;
use App\Models\Instructor;
use Illuminate\Http\Request;


class InstructorController extends Controller
{
 use ApiResponse, FileUploader;


    public function list()
    {
        $instructors = Instructor::active()->get();
        return $this->okApiResponse(InstructorResource::collection($instructors), __('instructors loaded'));
    }

    public function store(InstructorRequest $request)
    {
        $instructor = Instructor::create($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'instructors';
            $attach = 'image';
            $instructor->image = $this->uploadMedia($request,$attach, $directory);
            $instructor->save();
        }
        return $this->okApiResponse(new InstructorResource($instructor), __('instructor add successfully'));
    }

    public function update(InstructorRequest $request,Instructor $instructor)
    {
        $instructor->update($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'instructors';
            $attach = 'image';
            $instructor->image = $this->uploadMedia($request,$attach, $directory);
            $instructor->save();
        }
        return $this->okApiResponse(new InstructorResource($instructor), __('instructor updated successfully'));
    }

    public function delete(Request $request)
    {
        Instructor::find($request->id)->delete();
        return $this->okApiResponse('', __('instructor deleted successfully'));
    }

}
