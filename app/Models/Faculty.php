<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = array('name','active','min_accept_degree','gender');


    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }


}
