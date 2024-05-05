<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoLecture extends Model
{
    use HasFactory;
    protected $fillable = array('title','lecture_id','photo');

}
