<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Session;
class Category extends Model {

    protected $fillable = ['title', 'code', 'text', 'text_sh', 'foto', 'status', 'right', 'order'];
    
    public function report(){
        return $this->hasMany(Report::class);
    }
    
    public static function getList(){
    	return self::select(['id', 'title'])->lists('title', 'id')->all();
    }

    public static function mahalliy(){
    	return self::with(['report' => function ($query){
            $number = Session::get('son');
            $query->where(['status' => 1, 'number_id' => $number['id']]);
            $query->orderBy('created_at', 'DESC');
            $query->limit(5);
        }])->where('code', 'mahalliy')->first();
    }

    public static function xorij(){
    	return self::with(['report' => function ($query){
            $number = Session::get('son');
            $query->where(['status' => 1, 'number_id' => $number['id']]);
            $query->orderBy('created_at', 'DESC');
            $query->limit(5);
        }])->where('code', 'xorij')->first();
    }

    public static function getRightReports(){
        $model = self::select(['id', 'title'])->where(['status' => 1, 'right' => 1])->orderBy('order', 'DESC')->get()->all();
        $number = Session::get('son');
        if (!empty($model)) {
            foreach ($model as $key => $category) {
                $report = Report::where(['status' => 1, 'category_id' => $category->id, 'number_id' => $number['id'], 'asosiy' => 1])->orderBy('created_at', 'DESC');
                $model[$key]->report = $report->first();
            }
        }
        return $model;
    }
}
