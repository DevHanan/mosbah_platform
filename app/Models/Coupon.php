<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';
    public $timestamps = true;
    protected $with = ['course'];

    protected $fillable = array('code','active','start_date','end_date','discount','course_id','track_id');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }


    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }
}
