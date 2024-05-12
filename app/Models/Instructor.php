<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Instructor extends Authenticatable
{
    use HasApiTokens, HasFactory,Notifiable;
    protected $table = 'instructors';
    public $timestamps = true;
    protected $appends = ['name','courseNumber'];

    protected $fillable = array('first_name','last_name','email','userName','phone','active'
                                ,'track_id','qualifications','about_teacher','bank_account',
                                'salary','is_employee'
                               );


   protected function getNameAttribute(){
    return $this->first_name . ' ' . $this->last_name;
   }

   protected function getcourseNumberAttribute(){
    return $this->courses()->count();
   }
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
