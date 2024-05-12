<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInstructor extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'course_instructors';
    public $timestamps = true;

    protected $fillable = array('course_id','instructor_id','course_price','course_prectange');
}
