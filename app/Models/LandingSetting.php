<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingSetting extends Model
{
    use HasFactory;
    protected $fillable=['header_title','header_description','footer_description','most_required_courses',
    'recommend_courses','top_rated_courses','star_recently_courses','tracks','instructors',
    'workteam','parteners','student_opinion','map_locations','achievements'
];

protected $appends = ['headerImageFullPath','footerImageFullPath'];

public function getheaderImageFullPathAttribute($value)
{

    return asset('public/' . $this->header_image);
}

public function getfooterImageFullPathAttribute($value)
{

    return asset('public/' . $this->footer_image);
}
}
