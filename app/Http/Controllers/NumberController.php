<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Number;
use Session;
use Yajra\Datatables\Facades\Datatables;
use App\Helpers\MyFile;

class NumberController extends Controller {

    function __construct() {
    	$this->authorize('admin');
    	// $this->authorize('user');
    	$this->bredcrumb = [['link' => '/numbers', 'title' => 'Gazeta sonlari']];
    	$this->action = '/numbers';
        $this->validatesarr = [
            'title' 		=> 'required|min:2|max:250',
            'text' 			=> 'min:2',
            'text_sh' 		=> 'min:2|max:250',
            'yil'           => 'required|numeric|min:2000|max:3000',
            'son'           => 'required|max:11',
            'word'          => 'required|min:5|max:250',
            'foto'			=> 'image|mimes:jpeg,jpg,png,bmp|max:2000'
        ];
    }

    public function index(){
        $this->bredcrumb[0] = ['title' => 'Gazeta sonlari'];
        return view('admin.number.index', $this->getBrend());
    }
    
    public function data(){
        $model = Number::select(['*']);
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
        $model = new Number;
        $model->yil = date("Y");
        return view('admin.number.form', array_merge($this->getBrend(), [
            'model' 		=> $model,
            'action_link' 	=> '/numbers/create',
            'type' 			=> 0,
        ]));
    }

    public function create(Request $request){
        
        if (Number::exists($request)) {
            $this->validatesarr['son']  = 'required|max:11|unique:numbers';
            $this->validatesarr['word'] = 'required|min:5|max:250|unique:numbers';
        }

        $this->validate($request, $this->validatesarr);
        $input = $request->all();

        $foto = new MyFile(null, 'uploads/'.date("Y-m-d").'/numbers/', $request->file('foto'), time());

        $model = new Number;
        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->text_sh    	= htmlspecialchars($request->input('text_sh'));
        $model->yil         = $request->input('yil');
        $model->son         = $request->input('son');
        $model->date		= $request->input('date');
        $model->word    	= htmlspecialchars($request->input('word'));
        $model->foto    	= $foto->url;
        $model->status  	= $this->getStatus($request->input('status'));

        $model->save() ? Session::flash('message1', "Qo&rsquo;shildi") : Session::flash('message2', "Qo&rsquo;shilmadi. Sistema xatosi");

        return redirect($this->action);
    }

    public function edit($id){

        $model = Number::findOrFail($id);
        $this->bredcrumb[] = ['title' => 'Tahrirlash'];

        return view('admin.number.form', array_merge($this->getBrend(), [
            'model' 		=> $model, 
            'action_link' 	=> '/numbers/update/'.$model->id,
            'type' 			=> 1
        ]));

    }

    public function update($id, Request $request){

        $model = Number::findOrFail($id);
        
        if(Number::exists($request)){
            if ($model->son != $request->input('son')) {
                $this->validatesarr['son']  = 'required|max:11|unique:numbers';
            }
            if ($model->word != $request->input('word')) {
                $this->validatesarr['word'] = 'required|min:5|max:250|unique:numbers';
            }
        }
        $this->validate($request, $this->validatesarr);
        
        $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/numbers/', $request->file('foto'), time());        

        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->text_sh    	= htmlspecialchars($request->input('text_sh'));
        $model->son			= $request->input('son');
        $model->date        = $request->input('date');
        $model->word    	= htmlspecialchars($request->input('word'));
        $model->foto    	= $foto->url;
        $model->status  	= $this->getStatus($request->input('status'));
        
        $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");

        return redirect($this->action);
    }

    public function distory($id, Request $request){
        $model = Number::findOrFail( $id );
        if ( $request->ajax() ) {
            if($model->delete( $request->all() )){
                $foto = new MyFile($model->foto);
                $foto->delete();
	            return response(['msg' => 'O&rsquo;chirib tashlandi.', 'status' => 'success']);
            }
        }
        return response(['msg' => 'O&rsquo;chirilmadi. Sistema xatosi', 'status' => 'failed']);
    }

    public function editstatus($id, Request $request){
        $model = Number::findOrFail( $id );
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
        $model = Number::findOrFail( $id );
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
