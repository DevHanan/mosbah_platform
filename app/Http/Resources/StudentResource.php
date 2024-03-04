<?php

namespace App\Http\Resources;

use App\Models\Track;
use App\Models\Country;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            "first_name"=> $this->first_name,
            "last_name"=> $this->last_name,
            "phone"=> $this->phone,
            "email"=> $this->email,
            "userName"=> $this->userName,
            "country"  =>  CountryResource::collection(Country::find($this->country_id)),
            "track" =>  TrackResource::collection(Track::find($this->track_id)),
            "qualifications"  => $this->qualifications,
            "about"  => $this->about_student,
            'image' =>  $this->image ? 'public/uploads/students/'.$this->image : ""
        ];
    }
}
