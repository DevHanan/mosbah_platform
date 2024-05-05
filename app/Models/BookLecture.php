<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLecture extends Model
{
    use HasFactory;
    
    protected $fillable = array('title','link','lecture_id','file');
}
