<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = "certificates";
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $fillable = array('name', 'course_id', 'student_id', 'track_id', 'platform_certification');

    protected $appends = ['FileFullPath'] ;   
    
 
    public function getFileFullPathAttribute($value)
    {
            return asset('public/'.$this->file);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
