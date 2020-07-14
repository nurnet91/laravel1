<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;
class Report extends Model{

    protected $fillable = ['title', 'title_x', 'text', 'text_x', 'text_sh', 'category_id', 'rukn_id', 'number_id', 'foto', 'readed', 'status', 'muhim', 'asosiy'];

    public function category(){
	    return $this->belongsTo(Category::class);
	}

    public function rukn(){
        return $this->belongsTo(Rukn::class, 'rukn_id');
    }

    public function number(){
	    return $this->belongsTo(Number::class, 'number_id');
	}
	
    public static function moreReaded($where = [], $limit = 5){
    	$wh = array_merge(['status' => 1], $where);
    	return self::select(['id', 'title', 'text_sh', 'foto', 'created_at', 'readed'])
    		->where($wh)->where('readed', '>', 1)->orderBy('created_at', 'DESC')->orderBy('readed', 'DESC')->limit($limit)->get()->all();
    }

    public static function muhimlari(){
        return self::Select(['id', 'title', 'foto', 'created_at'])->where(['muhim' => 1])->orderBy('created_at', 'DESC')->get()->all();
    }

    public static function reportlar(){
        $report = Rukn::select(['id', 'title'])->where('sahifa', 1)->get()->all();
        foreach ($report as $k1 => $v1) {
            $report[$k1]->report = self::where(['rukn_id' => $v1->id, 'status' => 1])->orderBy('created_at', 'DESC')->limit(4)->get()->all();
        }
        return $report;
    }

    public static function getReportsByRuknId($rukn_id){
        $number = Session::get('son');
        return self::where(['status' => 1, 'rukn_id' => $rukn_id, 'number_id' => $number['id']])->orderBy('created_at', 'DESC')->paginate(15);
    }

    public static function getReportsByCategoryId($category_id){
        $number = Session::get('son');
        return self::where(['status' => 1, 'category_id' => $category_id, 'number_id' => $number['id']])->orderBy('created_at', 'DESC')->paginate(15);
    }

    public static function getMoreReadedReportsByNumberId(){
        $number = Session::get('son');
        return self::where(['status' => 1, 'number_id' => $number['id']])->where('readed', '>', 1)->orderBy('created_at', 'DESC')->orderBy('readed', 'DESC')->paginate(15);
    }

    public static function getReportsByNumberId(){
        $number = Session::get('son');
        return self::where(['status' => 1, 'number_id' => $number['id']])->orderBy('created_at', 'DESC')->paginate(15);
    }

    public static function serchReports($q){
        return self::where(['status' => 1])
            ->where('title', 'LIKE', "%{$q}%")
            ->orWhere('text_sh', 'LIKE', "%{$q}%")
            ->orderBy('created_at', 'DESC')
            ->paginate(15);
    }

}
