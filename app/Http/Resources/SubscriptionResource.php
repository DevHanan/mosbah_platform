<?php

namespace App\Http\Resources;

use App\Models\Track;
use App\Models\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=> $this->id,
            "student"  => new StudentResource($this->country) ?? '' ,
            "track"  => new TrackResource($this->track) ?? '' ,
            'payment_type' => $this->paymentType ? $this->paymentType->name  :''
        ];
    }
}
