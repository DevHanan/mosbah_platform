<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    public $timestamps = true;

    protected $fillable = array('title', 'description', 'more_details', 'active');

    protected $appends = ['imageFullPath', 'CustomPublishdate'];

    protected  function getCustomPublishdateAttribute()
    {
       

        $dateFormatter = new \IntlDateFormatter('ar', \IntlDateFormatter::SHORT, \IntlDateFormatter::SHORT, 'Asia/Riyadh', \IntlDateFormatter::TRADITIONAL);
        $dateFormatter->setPattern('HH:mm - d MMMM yyyy');

        $timestamp = strtotime($this->published_at);
        return $dateFormatter->format($timestamp);
    }
    public function getImageFullPathAttribute($value)
    {

            if($this->image)
        return asset('public/' . $this->main_image);
    else
    return asset('default/blogs/default.png');

    }

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }
}
