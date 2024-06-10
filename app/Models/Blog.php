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

    protected $fillable = array('title','description','more_details','active');

    protected $appends = [ 'imageFullPath', 'CustomPublishdate'];

    protected  function getCustomPublishdateAttribute(){
       return  DateTime::createFromFormat('Y-m-d H:i:s', $this->published_at)->setLocale('ar');
    }
    public function getImageFullPathAttribute($value)
    {

        return asset('public/' . $this->main_image);
    }

    public function scopeActive($query)
    {
        return $query->where('active', '1');
    }


}
