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
    protected $appends = ['name','courseNumber','ImageFullPath'];

    protected $fillable = array('first_name','last_name','email','userName','phone','active'
                                ,'track_id','qualifications','about_teacher','bank_account',
                                'salary','is_employee','current_balance','total_balance','country_id',
                                'cash_wallet_number','paypall_account_number'
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

    public function getImageFullPathAttribute($value)
    {
    
            return asset('public/'.$this->image);
    }
     
    public function track()
    {
        return $this->belongsTo(Track::class);
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_instructors');
    }

  
   
   
}
