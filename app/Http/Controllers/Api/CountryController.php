<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\CountryResource;
use App\Http\Requests\CountryRequest;
use App\Models\Country;

class CountryController extends Controller
{
    use ApiResponse, FileUploader;


    public function list()
    {
        $countries = Country::active()->get();
        return $this->okApiResponse(CountryResource::collection($countries), __('countries loaded'));
    }

    public function store(CountryRequest $request)
    {
        $country = Country::create($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'Countrys';
            $attach = 'image';
            $country->image = $this->uploadMedia($request,$attach, $directory);
            $country->save();
        }
        return $this->okApiResponse(new CountryResource($country), __('Country add successfully'));
    }

    public function update(CountryRequest $request,Country $country)
    {
        $country->update($request->except('image'));
        if ($request->hasFile('image')) {
            $directory = 'countries';
            $attach = 'image';
            $country->image = $this->uploadMedia($request,$attach, $directory);
            $country->save();
        }
        return $this->okApiResponse(new CountryResource($country), __('Country updated successfully'));
    }

    public function delete(Request $request)
    {
        Country::find($request->id)->delete();
        return $this->okApiResponse('', __('Country deleted successfully'));
    }
}
