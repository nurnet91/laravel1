<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Rukn;
use Session;
use Yajra\Datatables\Facades\Datatables;
use App\Helpers\MyFile;

class RuknController extends Controller {

    protected $itemsOfOrder = [];
    function __construct() {
    	$this->authorize('admin');
    	// $this->authorize('user');
    	$this->bredcrumb = [['link' => '/rukns', 'title' => 'Ruknlar']];
    	$this->action = '/rukns';
        $this->validatesarr = [
            'title' 		=> 'required|min:2|max:250',
            'text' 			=> 'min:2',
            'text_sh' 		=> 'min:2|max:250',
            'foto'			=> 'image|mimes:jpeg,jpg,png,bmp|max:2000'
        ];
        $this->itemsOfOrder = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    }

    public function index(){
        $this->bredcrumb[0] = ['title' => 'Ruknlar'];
        return view('admin.rukn.index', $this->getBrend());
    }
    
    public function data(){
        $model = Rukn::select(['*']);
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

        return view('admin.rukn.form', array_merge($this->getBrend(), [
            'model' 		=> new Rukn,
            'action_link' 	=> '/rukns/create',
            'orders'        => $this->itemsOfOrder,
        ]));
    }

    public function create(Request $request){

        $this->validate($request, $this->validatesarr);
        $input = $request->all();

        $foto = new MyFile(null, 'uploads/'.date("Y-m-d").'/rukns/', $request->file('foto'), time());

        $model = new Rukn;
        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->text_sh    	= htmlspecialchars($request->input('text_sh'));
        $model->foto    	= $foto->url;
        $model->status      = $this->getStatus($request->input('status'));
        $model->asosiy      = $this->getStatus($request->input('asosiy'));
        $model->sahifa  	= $this->getStatus($request->input('sahifa'));
        $model->right       = $this->getStatus($request->input('right'));
        $model->order       = $request->input('order');     

        $model->save() ? Session::flash('message1', "Qo&rsquo;shildi") : Session::flash('message2', "Qo&rsquo;shilmadi. Sistema xatosi");

        return redirect($this->action);
    }

    public function edit($id){

        $model = Rukn::findOrFail($id);
        $this->bredcrumb[] = ['title' => 'Tahrirlash'];

        return view('admin.rukn.form', array_merge($this->getBrend(), [
            'model' 		=> $model, 
            'action_link' 	=> '/rukns/update/'.$model->id,
            'orders'        => $this->itemsOfOrder,
        ]));

    }

    public function update($id, Request $request){

        $this->validate($request, $this->validatesarr);
        $model = Rukn::findOrFail($id);
        
        $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/rukns/', $request->file('foto'), time());        

        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->text_sh    	= htmlspecialchars($request->input('text_sh'));
        $model->foto    	= $foto->url;
        $model->status      = $this->getStatus($request->input('status'));
        $model->asosiy      = $this->getStatus($request->input('asosiy'));
        $model->sahifa  	= $this->getStatus($request->input('sahifa'));
        $model->right       = $this->getStatus($request->input('right'));
        $model->order       = $request->input('order');
        
        $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");

        return redirect($this->action);
    }

    public function distory($id, Request $request){
        $model = Rukn::findOrFail( $id );
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
        $model = Rukn::findOrFail( $id );
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

    public function editasosiy($id, Request $request){
        $model = Rukn::findOrFail( $id );
        $array = ['msg' => 'Asosiyligi o&rsquo;zgartirilmadi. Sistema xatosi', 'status' => 'failed'];
        if ( $request->ajax() ) {
            $model->asosiy = $model->asosiy == 1 ? 0 : 1;
            if ($model->update()) {
                $array['msg'] = 'Asosiyligi o&rsquo;zgartirildi';
                $array['status'] = 'success';
            }
        }
        return response($array);
    }

    public function editsahifa($id, Request $request){
        $model = Rukn::findOrFail( $id );
        $array = ['msg' => 'Bosh sahifada ko&rsquo;rinish holati o&rsquo;zgartirilmadi. Sistema xatosi', 'status' => 'failed'];
        if ( $request->ajax() ) {
            $model->sahifa = $model->sahifa == 1 ? 0 : 1;
            if ($model->update()) {
                $array['msg'] = 'Bosh sahifada ko&rsquo;rinish holati o&rsquo;zgartirildi';
                $array['status'] = 'success';
            }
        }
        return response($array);
    }

    public function deleteimage($id, Request $request){
        $model = Rukn::findOrFail( $id );
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
