<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoomSetting extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','account_id','client_secret','base_url'];
}
