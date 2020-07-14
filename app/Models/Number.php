<?php

namespace App\models;
use App\Helpers\Sana;

use Illuminate\Database\Eloquent\Model;
use Session;
class Number extends Model {

    protected $fillable = ['title', 'text', 'text_sh', 'yil', 'son', 'date', 'word', 'foto', 'status'];

    public static function yangiSon(){
    	return self::Select(['id', 'title', 'son', 'text_sh', 'foto', 'created_at'])->orderBy('son', 'DESC')->first();
    }

    public static function getList(){
        return self::select(['id', 'son'])->orderBy('son', 'desc')->lists('son', 'id')->all();
    }

    public static function sonlar(){
    	$current = Session::get('son');
        $value = [];
        $sonlar = self::select(['id', 'son', 'date'])->where(['status' => 1, 'yil' => $current['yil']])->orderBy('son', 'DESC')->get()->all();
        if (!empty($sonlar)) {
	    	$value['hafta'] = Sana::hafta($current['date']);
	    	$value['son'] = $current['son'];
	    	$value['kun'] = date('d', strtotime($current['date']));
	    	$value['oy'] = Sana::oy($current['date']);
	    	$value['yil'] = $current['yil'];
            $value['sonlar'] = $sonlar;
	    	$value['select'] = self::select(['id', 'yil'])->where('status', 1)->groupBy('yil')->orderBy('yil', 'DESC')->orderBy('son', 'DESC')->get()->all();
    	}
    	return $value;
    }

    public static function exists($request){
        $exists = self::select('id')
        ->where([
            'yil' => $request->input('yil'),
            'son' => $request->input('son')
        ])
        ->orWhere([
            'yil' => $request->input('yil'),
            'word' => $request->input('word')
        ])->first();
        return !empty($exists);
    }

}
