<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = array('name', 'active','type');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    protected $appends = ['ImageFullPath'];
    public function getImageFullPathAttribute($value)
    {

        if($this->image){
        return asset('public/' . $this->image);
        }else{
            if($this->type == 'visa')
            return asset('public/uploads/paymenttypes/default.png');


        }
    }
}
