<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Foto;
use App\Models\Gallery;
use Session;
use Yajra\Datatables\Facades\Datatables;
use App\Helpers\MyFile;

class FotoController extends Controller {

    function __construct() {
    	$this->authorize('admin');
    	// $this->authorize('user');
    	$this->bredcrumb = [['link' => '/fotos', 'title' => 'Rasmlar']];
    	$this->action = '/fotos';
        $this->validatesarr = [
            'title' 		=> 'required|min:2|max:250',
            'text'          => 'min:2',
            'gallery_id' 	=> 'required',
            'foto'          => 'required|image|mimes:jpeg,jpg,png,bmp|max:2000',
            'date'			=> 'required',
        ];
    }

    public function index(){
        $this->bredcrumb[0] = ['title' => 'Rasmlar'];
        return view('admin.foto.index', $this->getBrend());
    }
    
    public function data(){
        $model = Foto::select(['*']);
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

        return view('admin.foto.form', array_merge($this->getBrend(), [
            'model' 		=> new Foto,
            'action_link' 	=> '/fotos/create',
            'galeriya'      => Gallery::getList(),
        ]));
    }

    public function create(Request $request){

        $this->validate($request, $this->validatesarr);
        $input = $request->all();

        $foto = new MyFile(null, 'uploads/'.date("Y-m-d").'/fotos/', $request->file('foto'), time());

        $model = new Foto;
        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->gallery_id  = $request->input('gallery_id');
        $model->foto        = $foto->url;
        $model->date        = htmlspecialchars($request->input('date'));
        $model->status      = $this->getStatus($request->input('status'));        

        $model->save() ? Session::flash('message1', "Qo&rsquo;shildi") : Session::flash('message2', "Qo&rsquo;shilmadi. Sistema xatosi");

        return redirect('fotos/add');
    }

    public function edit($id){

        $model = Foto::findOrFail($id);
        $this->bredcrumb[] = ['title' => 'Tahrirlash'];

        return view('admin.foto.form', array_merge($this->getBrend(), [
            'model' 		=> $model, 
            'action_link' 	=> '/fotos/update/'.$model->id,
            'galeriya'      => Gallery::getList(),
        ]));

    }

    public function update($id, Request $request){

        $model = Foto::findOrFail($id);

        $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/fotos/', $request->file('foto'), time());  

        if (!empty($foto->url)) {
            unset($this->validatesarr['foto']);
        }
        
        $this->validate($request, $this->validatesarr);
        

        $model->title   	= strip_tags($request->input('title'));
        $model->text     	= htmlspecialchars($request->input('text'));
        $model->gallery_id  = $request->input('gallery_id');
        $model->foto        = $foto->url;
        $model->date        = htmlspecialchars($request->input('date'));
        $model->status      = $this->getStatus($request->input('status'));
        
        $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");

        return redirect($this->action);
    }

    public function distory($id, Request $request){
        $model = Foto::findOrFail( $id );
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
        $model = Foto::findOrFail( $id );
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
        $model = Foto::findOrFail( $id );
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
