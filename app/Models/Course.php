<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public $timestamps = true;

    protected $fillable = array('name','price','course_type_id','published_at','track_id','active',
                                'instructor_id','promo_url','level','description','goals','directedTo'
                               );

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }
 
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }


    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function courseType()
    {
        return $this->belongsTo(CourseType::class);
    }
}
