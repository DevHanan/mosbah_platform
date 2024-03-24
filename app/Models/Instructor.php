<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Instructor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'instructors';
    public $timestamps = true;

    protected $fillable = array('first_name','last_name','email','userName','phone','active'
                                ,'track_id','qualifications','about_teacher','bank_account'
                               );

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
