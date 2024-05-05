<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTrack extends Model
{
    use HasFactory;
    protected $table='student_track';
    protected $fillable = ['student_id', 'track_id'];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
