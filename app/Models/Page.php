<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model{

    protected $fillable = ['title', 'text_sh', 'text', 'email', 'adres', 'google_karta', 'tel', 'tel2', 'fb', 'vk', 'gp', 'tv', 'type'];
    
}
