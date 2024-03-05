<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    public $timestamps = true;

    protected $fillable = array(
        'first_name', 'last_name', 'email', 'userName', 'phone', 'active',
        'country_id', 'track_id', 'qualifications', 'about_student'
    );

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }


    public function track()
    {
        return $this->belongsTo(Track::class);
    }
}
