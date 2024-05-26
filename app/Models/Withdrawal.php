<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;
    protected $fillable = array('value','instructor_id','status','date');

    protected $appends = ['statusLabel'] ;   

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0 )
            return  trans('admin.pending');
        elseif($this->status == 1 )
            return ('admin.accepted');
        else
        return ('admin.refaused');

    }

}
