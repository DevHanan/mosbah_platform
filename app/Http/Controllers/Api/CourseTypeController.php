<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\CourseTypeResource;
use App\Http\Requests\CourseTypeRequest;
use App\Models\CourseType;

class CourseTypeController extends Controller
{
    use ApiResponse, FileUploader;


    public function list()
    {
        $countrys = CourseType::active()->get();
        return $this->okApiResponse(CourseTypeResource::collection($countrys), __('Types loaded'));
    }

    public function store(CourseTypeRequest $request)
    {
        $country = CourseType::create($request->all());
        return $this->okApiResponse(new CourseTypeResource($country), __('Course Type add successfully'));
    }

    public function update(CourseTypeRequest $request,CourseType $type)
    {
        $type->update($request->all());
        return $this->okApiResponse(new CourseTypeResource($type), __('Type updated successfully'));
    }

    public function delete(Request $request)
    {
        CourseType::find($request->id)->delete();
        return $this->okApiResponse('', __('Type deleted successfully'));
    }
}
