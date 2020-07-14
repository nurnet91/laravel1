<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model{

    protected $fillable = ['title', 'text', 'type', 'size', 'foto', 'link', 'status'];
    
    public static function getBanner($value){
    	return self::where(['status' => 1, 'type' => $value])->first();
    }
}
