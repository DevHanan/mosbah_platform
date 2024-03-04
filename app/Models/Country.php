<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    public $timestamps = true;

    protected $fillable = array('name','active','code');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }
}
