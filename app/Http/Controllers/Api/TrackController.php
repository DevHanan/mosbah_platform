<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\TrackResource;
use App\Http\Requests\TrackRequest;
use App\Models\Track;

class TrackController extends Controller
{
    use ApiResponse, FileUploader;


    public function list()
    {
        $tracks = Track::active()->get();
        return $this->okApiResponse(TrackResource::collection($tracks), __('Tracks loaded'));
    }

    public function store(TrackRequest $request)
    {
        $track = Track::create($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'tracks';
            $attach = 'image';
            $track->image = $this->uploadMedia($request,$attach, $directory);
            $track->save();
        }
        return $this->okApiResponse(new TrackResource($track), __('Track add successfully'));
    }

    public function update(Request $request)
    {
        return $request->all();

        $track= Track::find($request->id);
        $track->update($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'tracks';
            $attach = 'image';
            $track->image = $this->uploadMedia($request,$attach, $directory);
            $track->save();
        }
        return $this->okApiResponse(new TrackResource($track), __('Track updated successfully'));
    }

    public function delete(Request $request)
    {
        Track::find($request->id)->delete();
        return $this->okApiResponse('', __('Track deleted successfully'));
    }
}
