<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'students';
    public $timestamps = true;

    protected $fillable = array(
        'course_id', 'student_id', 'track_id', 'payment_type_id'
    );


    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function paymentType()
    {
        return $this->belongsTo(PaymentType::class);
    }
}
