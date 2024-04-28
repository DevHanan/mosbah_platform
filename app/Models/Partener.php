<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partener extends Model
{
    use HasFactory;
    protected $fillable = array('name','active');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

}
