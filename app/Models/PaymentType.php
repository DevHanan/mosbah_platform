<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = array('name', 'active');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

    protected $appends = ['ImageFullPath'];
    public function getImageFullPathAttribute($value)
    {

        return asset('public/' . $this->image);
    }
}
