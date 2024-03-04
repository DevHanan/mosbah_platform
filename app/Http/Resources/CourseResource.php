<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            "name"=> $this->name,
            "price"=> $this->price,
            "published_at"=> $this->published_at,
            "promo_url"=> $this->promo_url,
            "level"=> $this->level,
            "description"=> $this->description,
            "goals"=> $this->goals,
            "directedTo"=> $this->directedTo,
            'image' => 'public/uploads/coursers/main/'.$this->image,
            'background_image' =>'public/uploads/coursers/backgroundImg/'.$this->background_image,
        
        ];
    }
}
