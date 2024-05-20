<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partener extends Model
{
    use HasFactory;
    protected $fillable = array('name','active');
    protected $appends = ['ImageFullPath'] ;   


    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }


    public function getImageFullPathAttribute($value)
    {
    
            return asset('public/'.$this->image);
    }

}
