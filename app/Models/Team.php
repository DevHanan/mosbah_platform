<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = array('name','active','job');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    protected $appends = ['ImageFullPath'] ;   

    public function getImageFullPathAttribute($value)
    {
        if($this->image)
            return asset('public/'.$this->image);
            else
            return asset('public/uploads/teams/default.png');

    }

}
