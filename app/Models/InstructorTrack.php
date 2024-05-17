<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorTrack extends Model
{
    use HasFactory;
    protected $table = 'instructor_tracks';
    protected $fillable = ['instructor_id', 'track_id'];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
