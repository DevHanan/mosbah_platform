<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstructorResource extends JsonResource
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
            // 'api_token' => $this->when(auth()->guard('instructors')->check(), $this->api_token),
            'api_token'  => $this->token,
            "track"  => new TrackResource($this->track) ?? '' ,
            "qualifications"  => $this->qualifications,
            "coursesNumber" => $this->courses()->count(),
            "about"  => $this->about_teacher,
            'image' => $this->image ?  asset('uploads/instructors/'.$this->image) : "",
            'courseNumber' => $this->courses()->count(),
            'joinTime' => $this->created_at,
            'bank_account' => $this->bank_account,
            'total_profit'  => 0,
            'current balance' => 0,

        ];
    }
}
