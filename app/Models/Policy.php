<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;
    protected $table = 'policies';
    public $timestamps = true;

    protected $fillable = array('title','active','description');

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }
}
