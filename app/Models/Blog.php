<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    public $timestamps = true;

    protected $fillable = array('title','description','more_details','active');

    protected $casts = [
        'published_at' => 'datetime', // Update or remove this line
    ];
    public function getImageFullPathAttribute($value)
    {

        return asset('public/' . $this->main_image);
    }

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }


}
