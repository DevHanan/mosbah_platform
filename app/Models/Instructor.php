<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;



class Instructor extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'instructors';
    public $timestamps = true;
    protected $appends = ['name', 'courseNumber', 'ImageFullPath','CvFullPath','aboutLabel'];

    protected $fillable = array(
        'first_name', 'last_name', 'email', 'userName', 'phone', 'active', 'track_id', 'qualifications', 'about_teacher', 'bank_account',
        'salary', 'is_employee', 'current_balance', 'total_balance', 'country_id',
        'cash_wallet_number', 'paypall_account_number'
    );


    protected function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }


    public function getAboutLabelAttribute()
    {
        if ($this->about_teacher == 0)
            return  trans('admin.instructors.student');
        elseif ($this->about_teacher == 1)

        return  trans('admin.instructors.Bachelor');
        elseif ($this->about_teacher == 2)
        return  trans('admin.instructors.Graduated');
        elseif ($this->about_teacher == 3)
        return  trans('admin.instructors.Doctorate');
        else
        return  trans('admin.instructors.Master');
    }
    protected function getcourseNumberAttribute()
    {
        return $this->courses()->count();
    }
    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function getImageFullPathAttribute($value)
    {

        return asset('public/' . $this->image);
    }

    public function getCvFullPathAttribute($value)
    {

        return asset('public/' . $this->image);
    }

    public function getImageCvPathAttribute($value)
    {

        return asset('public/' . $this->cv);
    }


    public function tracks()
    {
        return $this->belongsToMany(Track::class,'instructor_tracks');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_instructors');
    }
}
