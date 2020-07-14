<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Report;
use App\Models\Rukn;
use App\Models\Category;
use App\Models\Number;
use Session;
use Yajra\Datatables\Facades\Datatables;
use App\Helpers\MyFile;

class ReportController extends Controller{

   	function __construct() {
    	$this->authorize('admin');
    	// $this->authorize('user');
    	$this->bredcrumb = [['link' => '/reports', 'title' => 'Barcha xabarlar']];
    	$this->action = '/reports';
        $this->validatesarr = [
            'title' 		=> 'min:2',
            'text' 			=> 'min:2',
            'text_sh' 		=> 'min:2',
            'category_id'	=> 'numeric',
            'rukn_id' 		=> 'required|numeric',
            'number_id' 	=> 'required|numeric',
            'foto'			=> 'image|mimes:jpeg,jpg,png,bmp|max:2000'
        ];
    }

    public function index(){
        $this->bredcrumb[0] = ['title' => 'Xabarlar'];
        return view('admin.report.index', $this->getBrend());
    }

    public function data(){
        $model = Report::select(['reports.*', 'categories.title as category', 'rukns.title as rukn', 'numbers.son as number'])
        ->leftJoin('categories','reports.category_id','=','categories.id')
        ->leftJoin('rukns','reports.rukn_id','=','rukns.id')
        ->leftJoin('numbers','reports.number_id','=','numbers.id');
        return Datatables::of($model)
            ->addColumn('action',function($model){
                return '<form action="'.$this->action.'/distory/'.$model->id.'" method="POST">
                    <a href="'.$this->action.'/edit/'.$model->id.'" class="btn btn-sm btn-default"> <i class="fa fa-cog"></i> </a>
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="button" class="btn btn-sm btn-default" onclick="distoryfn($(this).parent())">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>';
            })
            ->make(true);
    }

    public function add(){
        $this->bredcrumb[] = ['title' => 'Qo&rsquo;shish'];

        return view('admin.report.form', array_merge($this->getBrend(), [
            'model' 		=> new Report,
            'action_link' 	=> '/reports/create',
            'type' 			=> 0,
            'ruknlar' 		=> Rukn::getList(),
            'categories' 	=> Category::getList(),
            'numbers' 		=> Number::getList(),
        ]));
    }

    public function create(Request $request){

        $this->validate($request, $this->validatesarr);
        $input = $request->all();

        $foto = new MyFile(null, 'uploads/'.date("Y-m-d").'/reports/'.$request->input('number_id').'/', $request->file('foto'), time());

        $model = new Report;
        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->text_sh    	= htmlspecialchars($request->input('text_sh'));
        $model->category_id	= $request->input('category_id');
        $model->rukn_id    	= $request->input('rukn_id');
        $model->number_id   = $request->input('number_id');
        $model->foto    	= $foto->url;
        $model->status      = $this->getStatus($request->input('status'));
        $model->muhim       = $this->getStatus($request->input('muhim'));
        $model->asosiy      = $this->getStatus($request->input('asosiy'));

        $model->save() ? Session::flash('message1', "Qo&rsquo;shildi") : Session::flash('message2', "Qo&rsquo;shilmadi. Sistema xatosi");

        return redirect('reports/add');
    }
    
    public function edit($id){

        $model = Report::findOrFail($id);
        $this->bredcrumb[] = ['title' => 'Tahrirlash'];

        return view('admin.report.form', array_merge($this->getBrend(), [
            'model' 		=> $model, 
            'action_link' 	=> '/reports/update/'.$model->id,
            'type' 			=> 1,
            'ruknlar' 		=> Rukn::getList(),
            'categories' 	=> Category::getList(),
            'numbers' 		=> Number::getList(),
        ]));

    }

    public function update($id, Request $request){

        $this->validate($request, $this->validatesarr);
        $model = Report::findOrFail($id);

        $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/reports/'.$request->input('number_id').'/', $request->file('foto'), time());

        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->text_sh    	= htmlspecialchars($request->input('text_sh'));
        $model->category_id	= $request->input('category_id');
        $model->rukn_id    	= $request->input('rukn_id');
        $model->number_id   = $request->input('number_id');
        $model->foto    	= $foto->url;
        $model->status      = $this->getStatus($request->input('status'));
        $model->muhim  	    = $this->getStatus($request->input('muhim'));
        $model->asosiy      = $this->getStatus($request->input('asosiy'));
        
        $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");

        return redirect('reports/edit/'.$id);
    }

    public function distory($id, Request $request){
        $model = Report::findOrFail( $id );
        if ( $request->ajax() ) {
            if($model->delete( $request->all() )){
                $foto = new MyFile($model->foto);
                $foto->delete();
	            return response(['msg' => 'O&rsquo;chirib tashlandi.', 'status' => 'success']);
            }
        }
        return response(['msg' => 'O&rsquo;chirib bo&rsquo;lmadi. Sistema xatosi', 'status' => 'failed']);
    }

    public function editstatus($id, Request $request){
        $model = Report::findOrFail( $id );
        $array = ['msg' => 'Status o&rsquo;zgartirilmadi. Sistema xatosi', 'status' => 'failed'];
        if ( $request->ajax() ) {
            $model->status = $model->status == 1 ? 0 : 1;
            if ($model->update()) {
                $array['msg'] = 'Status o&rsquo;zgartirildi';
                $array['status'] = 'success';
            }
        }
        return response($array);
    }

    public function deleteimage($id, Request $request){
        $model = Report::findOrFail( $id );
        $array = ['msg' => 'Rasm o&rsquo;chirilmadi. Sistema xatosi', 'status' => 'failed'];
        if ( $request->ajax() ) {
            $foto = new MyFile($model->foto);
            $foto->delete();
            $model->foto = null;
            if ($model->update()) {
                $array['msg'] = 'Rasm o&rsquo;chirildi';
                $array['status'] = 'success';
            }
        }
        return response($array);
    }
}
