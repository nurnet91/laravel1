<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model{
    
    protected $fillable = ['title', 'text', 'gallery_id', 'foto', 'date', 'status'];

    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }

    public static function getGallery($limit = 2){
    	$gallery = Gallery::select(['id', 'title', 'text', 'date', 'foto'])->where(['status' => 1, 'asosiy' => 1])->orderBy('date', 'DESC')->limit($limit)->get()->all();
    	if (!empty($gallery)) {
    		foreach ($gallery as $gal) {
    			$rasmlar = self::select(['id', 'title', 'foto', 'date'])->where(['status' => 1, 'gallery_id' => $gal->id])->get()->all();
    			$gal->rasmlar = $rasmlar;
    			$gal->info = count($rasmlar)." ta rasm, ";
    		}
    	}
		return $gallery;
    }

    public static function getCurrent($id) {
        return self::where(['status' => 1, 'gallery_id' => $id])->get()->all();
    }
    
}
