<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Message;
use Session;
use Yajra\Datatables\Facades\Datatables;

class MessageController extends Controller {

    function __construct() {
    	$this->authorize('admin');
    	$this->bredcrumb = [['link' => '/messages', 'title' => 'Xatlar']];
    	$this->action = '/messages';
    }

    public function index(){
        $this->bredcrumb[0] = ['title' => 'Xatlar'];
        return view('admin.message.index', $this->getBrend());
    }

    public function view($id){
        $model = Message::findOrFail($id);
        $this->bredcrumb[0] = ['title' => $model->fio];
        if ($model->view == 0) {
            $model->view = 1;
            $model->update();
        }
        return view('admin.message.view', array_merge($this->getBrend(), [
            'model' => $model
        ]));
    }
    
    public function data(){
        $model = Message::select(['*']);
        return Datatables::of($model)
            ->addColumn('action',function($model){
                return '<form action="'.$this->action.'/distory/'.$model->id.'" method="POST">
                    <a href="'.$this->action.'/'.$model->id.'" class="btn btn-sm btn-default"> <i class="fa fa-eye"></i> </a>
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="button" class="btn btn-sm btn-default" onclick="distoryfn($(this).parent())">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>';
            })
            ->make(true);
    }

    public function distory($id, Request $request){
        $model = Message::findOrFail( $id );
        if ( $request->ajax() ) {
            if($model->delete( $request->all() )){
	            return response(['msg' => 'O&rsquo;chirib tashlandi.', 'status' => 'success']);
            }
        }
        return response(['msg' => 'O&rsquo;chirilmadi. Sistema xatosi', 'status' => 'failed']);
    }

    public function editview($id, Request $request){
        $model = Message::findOrFail( $id );
        $array = ['msg' => 'Ko&rsquo;rilganlik o&rsquo;zgartirilmadi. Sistema xatosi', 'status' => 'failed'];
        if ( $request->ajax() ) {
            $model->view = $model->view == 1 ? 0 : 1;
            if ($model->update()) {
                $array['msg'] = 'Ko&rsquo;rilganlik o&rsquo;zgartirildi';
                $array['status'] = 'success';
            }
        }
        return response($array);
    }
}
