<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailSetting extends Model
{
    use HasFactory;
    protected $table="mail_settings";
    protected $fillable = ['host','driver','sender_name','sender_email','encryption','password',
'username','port'];
    
}
