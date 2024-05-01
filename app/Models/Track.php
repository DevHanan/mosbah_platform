<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $table = 'tracks';
    public $timestamps = true;
    protected $appends = ['courseCount'] ;   
    
    
    public function getCourseCountAttribute(){
     return $this->courses()->count();   
    }
    protected $fillable = array('name','active');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
