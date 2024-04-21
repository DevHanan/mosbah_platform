<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    public $timestamps = true;

    protected $fillable = array(
        'instructor_id', 'student_id', 'title', 'description','create_date'
    );
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
