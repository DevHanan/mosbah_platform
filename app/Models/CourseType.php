<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    use HasFactory;
    protected $table = 'course_types';
    public $timestamps = true;

    protected $fillable = array('name','active');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function courses($query)
    {
        return $query->hasMany(Course::class);
    }
}
