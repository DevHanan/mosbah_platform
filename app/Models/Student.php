<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $table = 'students';
    public $timestamps = true;

    protected $fillable = array(
        'first_name', 'last_name', 'email', 'userName', 'phone', 'active',
        'country_id', 'qualifications', 'about_student'
    );

    protected $appends = ['name', 'imageFullPath'];
    protected function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getImageFullPathAttribute($value)
    {

        return asset('public/' . $this->image);
    }

    protected $hidden = ['password'];

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }


    public function tracks()
    {
        return $this->belongsToMany(Track::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
