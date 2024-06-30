<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;
    protected $fillable = array('value','instructor_id','status','date','notes');

    protected $appends = ['statusLabel'] ;   

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public function getStatusLabelAttribute()
    {
        if ($this->status == 0 )
            return  trans('admin.pending');
        elseif($this->status == 1 )
            return trans('admin.accepted');
        else
        return trans('admin.refaused');

    }

}
