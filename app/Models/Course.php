<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public $timestamps = true;

    protected $fillable = array(
        'name', 'recommened', 'price', 'course_type_id', 'published_at', 'track_id', 'active',
        'instructor_id', 'promo_url', 'start_date', 'end_date', 'level_id', 'description', 'goals', 'directedTo', 'period_type', 'period', 'seat_number', 'price_with_discount', 'difficulty_level', 'prerequisites', 'provider'
    );


    protected $appends = ['backgroundImageFullPath', 'imageFullPath', 'DifficultyLevelLabel', 'SubscriptionCount', 'Totalsubscription', 'TotalDiscount', 'isSubscribed', 'PeriodTypeLabel'];

    public function getPeriodTypeLabelAttribute()
    {
        if ($this->period_type == 1)
            return  trans('admin.levels.month');
        if ($this->period_type == 2)
            trans('admin.levels.day');
        else
            return  trans('admin.levels.hour');
    }

    public function getDifficultyLevelLabelAttribute()
    {
        if ($this->difficulty_level == 0)
            return  trans('admin.courses.beginner');
        elseif ($this->difficulty_level == 1)

            trans('admin.courses.intermediate');
        elseif ($this->difficulty_level == 2)
            trans('admin.courses.advanced');
        else
            return  trans('admin.courses.all');
    }

    public function getSubscriptionCountAttribute()
    {
        return $this->subscriptions()->count();
    }

    public function getImageFullPathAttribute($value)
    {

        return asset('public/' . $this->image);
    }
    public function getBackgroundImageFullPathAttribute($value)
    {

        return asset('public/' . $this->background_image);
    }


    public function getisSubscribedAttribute()
    {
        if (auth()->guard('students-login')->user()){
            $code =  $this->subscriptions()->where('course_id', $this->id)->where('student_id', auth()->guard('students-login')->user()->id)->get();
            return $code->active == 1 ? 1 : 2;
           
        
        }else
            return 0;
    }

    public function getTotalsubscriptionAttribute()
    {
        return $this->subscriptions()->count() * $this->price_with_discount;
    }

    public function getTotalDiscountAttribute()
    {
        return $this->price_with_discount;
    }

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }



    public function scoperecommened($query)
    {
        return $query->where('active', '1')->where('recommened', '1');
    }


    public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'course_instructors')->withPivot('instructor_id', 'course_price', 'course_prectange');;
    }



    public function tracks()
    {
        return $this->belongsToMany(Track::class, 'course_tracks');
    }
    public function courseType()
    {
        return $this->belongsTo(CourseType::class);
    }


    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function levels()
    {
        return $this->hasMany(Level::class);
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public function coupon()
    {
        return $this->hasOne(Coupon::class)
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now());
    }
}
