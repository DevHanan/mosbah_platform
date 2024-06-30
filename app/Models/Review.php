<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    public $timestamps = true;

    protected $fillable = array('name','active','comment','job');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }
}
