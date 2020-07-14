<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Category;
use Session;
use Yajra\Datatables\Facades\Datatables;
use App\Helpers\MyFile;

class CategoryController extends Controller {

    protected $itemsOfCategory = [];
    protected $itemsOfOrder = [];
    function __construct() {
    	$this->authorize('admin');
    	// $this->authorize('user');
    	$this->bredcrumb = [['link' => '/categories', 'title' => 'Kategoriyalar']];
    	$this->action = '/categories';
        $this->validatesarr = [
            'title' 		=> 'required|min:2|max:250',
            'text' 			=> 'min:2',
            'text_sh' 		=> 'min:2|max:250',
            'foto'			=> 'image|mimes:jpeg,jpg,png,bmp|max:2000'
        ];
        $this->itemsOfCategory = [
            'mahalliy'   => 'Yetti kun',
            'xorij'     => 'Xorij xabarlari',
            'yangisi'   => 'Yangisidan bor',
            'qayroqi'   => 'Qayroqi gap',
            'od'        => 'OD eshittingizmi',
        ];
        $this->itemsOfOrder = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    }

    public function index(){
        $this->bredcrumb[0] = ['title' => 'Kategoriyalar'];
        return view('admin.category.index', $this->getBrend());
    }
    
    public function data(){
        $model = Category::select(['*']);
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

        return view('admin.category.form', array_merge($this->getBrend(), [
            'model' 		=> new Category,
            'action_link' 	=> '/categories/create',
            'items'         => $this->itemsOfCategory,
            'orders'        => $this->itemsOfOrder,
        ]));
    }

    public function create(Request $request){
        $this->validatesarr['code'] = 'min:2|max:50|unique:categories';

        $this->validate($request, $this->validatesarr);
        $input = $request->all();

        $foto = new MyFile(null, 'uploads/'.date("Y-m-d").'/categories/', $request->file('foto'), time());

        $model = new Category;
        $model->code        = !empty($request->input('code')) ? $request->input('code') : null;
        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->text_sh    	= htmlspecialchars($request->input('text_sh'));
        $model->foto    	= $foto->url;
        $model->status      = $this->getStatus($request->input('status'));
        $model->right       = $this->getStatus($request->input('right'));
        $model->order  	    = $request->input('order');        

        $model->save() ? Session::flash('message1', "Qo&rsquo;shildi") : Session::flash('message2', "Qo&rsquo;shilmadi. Sistema xatosi");

        return redirect($this->action);
    }

    public function edit($id){

        $model = Category::findOrFail($id);
        $this->bredcrumb[] = ['title' => 'Tahrirlash'];
        // dd($model);
        // exit();

        return view('admin.category.form', array_merge($this->getBrend(), [
            'model' 		=> $model, 
            'action_link' 	=> '/categories/update/'.$model->id,
            'items'         => $this->itemsOfCategory,
            'orders'        => $this->itemsOfOrder,
        ]));

    }

    public function update($id, Request $request){

        // dd($request);
        // exit();
        $model = Category::findOrFail($id);

        if ($model->code != $request->input('code')) {
            $this->validatesarr['code']  = 'min:2|max:50|unique:categories';
        }
        
        $this->validate($request, $this->validatesarr);
        
        $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/categories/', $request->file('foto'), time());        

        $model->code        = !empty($request->input('code')) ? $request->input('code') : null;
        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->text_sh    	= htmlspecialchars($request->input('text_sh'));
        $model->foto    	= $foto->url;
        $model->status      = $this->getStatus($request->input('status'));
        $model->right       = $this->getStatus($request->input('right'));
        $model->order  	    = $request->input('order');
        
        $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");

        return redirect($this->action);
    }

    public function distory($id, Request $request){
        $model = Category::findOrFail( $id );
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
        $model = Category::findOrFail( $id );
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
        $model = Category::findOrFail( $id );
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
