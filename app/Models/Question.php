<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = array('question','active','answer');
    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }

}
