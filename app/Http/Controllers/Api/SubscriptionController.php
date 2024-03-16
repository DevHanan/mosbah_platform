<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use App\Traits\FileUploader;
use App\Http\Resources\CountryResource;
use App\Http\Requests\SubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    use ApiResponse, FileUploader;


    public function list(Request $request)
    {
        $subscriptions = Subscription::where(function($q)use($request){
            if ($request->student_id)
            $q->Where('student_id',  $request->student_id );
            if ($request->course_id)
            $q->Where('course_id',  $request->course_id );
            if ($request->track_id)
            $q->Where('track_id',  $request->track_id );
        })->get();
        return $this->okApiResponse($subscriptions, __('Subscriptions loaded'));
    }

    public function store(SubscriptionRequest $request)
    {
        $coupon = Subscription::create($request->all());
     
        return $this->okApiResponse($coupon, __('Subscription add successfully'));
    }

    public function show($id){
        $coupon = Subscription::find($id);
        if($coupon)
        return $this->okApiResponse($coupon, __('Subscription loades successfully'));
        else
        return $this->notFoundApiResponse([],__('Data Not Found'));

    }

    public function update(UpdateSubscriptionRequest $request)
    {
        $coupon = Subscription::find($request->id);
        $coupon->update($request->all());
        return $this->okApiResponse($coupon, __('Subscription updated successfully'));
    }

    public function delete(Request $request)
    {
       $coupon =  Subscription::find($request->id);
       if($coupon)
       $coupon->delete();
        return $this->okApiResponse('', __('Subscription deleted successfully'));
    }
}
