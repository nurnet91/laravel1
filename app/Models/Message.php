<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model{

    protected $fillable = ['fio', 'phone', 'email', 'message', 'ip', 'send_email', 'view'];
    
}
