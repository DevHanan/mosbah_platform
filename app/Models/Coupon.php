<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';
    public $timestamps = true;

    protected $fillable = array('code','active','start_date','end_date','discount','course_id');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
