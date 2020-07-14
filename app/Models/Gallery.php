<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model{
    
    protected $fillable = ['title', 'text', 'date', 'foto', 'status', 'asosiy'];

    public function fotos(){
        return $this->hasMany(Foto::class);
    }

    public static function getList(){
    	return self::select(['id', 'title'])->lists('title', 'id')->all();
    }
    
}
