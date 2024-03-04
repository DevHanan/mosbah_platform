<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $table = 'tracks';
    public $timestamps = true;

    protected $fillable = array('name','active');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }
}
