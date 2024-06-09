<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = 'levels';
    public $timestamps = true;

    protected $fillable = array('name','course_id','track_id','instructor_id','active','start_date','end_date','period_type','period');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function getPeriodLabelAttribute(){
        if ($this->period ==1)
         return  trans('admin.levels.day');
       
        elseif ($this->period ==2 )

        return  trans('admin.levels.hour');   
       }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

}
