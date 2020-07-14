<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Session;
class Rukn extends Model{
    
    protected $fillable = ['title', 'text', 'text_sh', 'foto', 'status', 'asosiy', 'sahifa', 'right', 'order'];

    public function report(){
        return $this->hasMany(Report::class);
    }
    
    public static function getList(){
    	return self::select(['id', 'title'])->lists('title', 'id')->all();
    }

    public static function ruknlar(){
    	return self::select(['id', 'title'])->where('asosiy', 1)->get()->all();
    }
    
    public static function reportlar($rukn_id) {

        $r = self::with(['report' => function ($query){
            $number = Session::get('son');
            $query->where(['status' => 1, 'number_id' => $number['id']]);
            $query->orderBy('created_at', 'DESC');
            $query->paginate(10);
        }])->where('id', $rukn_id)->first();

        return $r;
    }

    public static function getRightReports(){
        $model = self::select(['id', 'title'])->where(['status' => 1, 'right' => 1])->orderBy('order', 'DESC')->get()->all();
        $number = Session::get('son');
        if (!empty($model)) {
            foreach ($model as $key => $rukn) {
                $report = Report::where(['status' => 1, 'rukn_id' => $rukn->id, 'number_id' => $number['id'], 'asosiy' => 1])->orderBy('created_at', 'DESC');
                $model[$key]->report = $report->first();
            }
        }
        return $model;
    }

}
