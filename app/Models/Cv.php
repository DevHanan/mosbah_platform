<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $fillable = array('active');
    protected $appends = ['ImageFullPath'] ;   


    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }


    public function getImageFullPathAttribute($value)
    {
    
            if($this->image)
            return asset('public/'.$this->image);
           else
           return asset('public/uploads/cv/default.jpeg');

    }

}
