<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    protected $table = 'lectures';
    public $timestamps = true;

    protected $fillable = array('title','level_id','course_id','type','active',
    'description','short_description','type','goals','conclusion','appointment','link','provider','period'
    ,'free');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function photos()
    {
        return $this->hasMany(PhotoLecture::class);
    }

    public function books()
    {
        return $this->hasMany(BookLecture::class);
    }
}
