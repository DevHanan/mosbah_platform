<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = 'levels';
    public $timestamps = true;

    protected $fillable = array('name','course_id','active','start_date','period_type','period');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

}
