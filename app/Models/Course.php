<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    public $timestamps = true;

    protected $fillable = array('name','recommend','price','course_type_id','published_at','track_id','active',
                                'instructor_id','promo_url', 'start_date','end_date','level_id','description','goals','directedTo'
                                ,'period_type','period','seat_number','price_with_discount','difficulty_level
                                ','prerequisites'  
                            );


    protected $appends = ['SubscriptionCount','Totalsubscription','TotalDiscount','isSubscribed'] ;   
    
    
    public function getSubscriptionCountAttribute(){
     return $this->subscriptions()->count();   
    }

    public function getisSubscribedAttribute(){
        if(auth()->guard('students-login')->user())
        return $this->subscriptions()->where('course_id',$this->id)->where('student_id',auth()->guard('students-login')->user()->id)->count();   
        else
        return 0;
    }

    public function getTotalsubscriptionAttribute(){
        return $this->subscriptions()->count() * $this->price;   
    }

    public function getTotalDiscountAttribute(){
        if($this->coupon())
        return $this->price -( $this->coupon()->value('discount')  *($this->price/100));  
         else
         return $this->price; 
    }

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

   

    public function scoperecommened($query)
    {
        return $query->where('active', '1')->where('recommend','1');
    }
    
 
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function tracks()
    {
        return $this->belongsToMany(Track::class,'course_tracks');
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
