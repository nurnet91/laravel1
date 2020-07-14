<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Banner;
use Session;
use Yajra\Datatables\Facades\Datatables;
use App\Helpers\MyFile;

class BannerController extends Controller{

    protected $validatesArr = [];
   	function __construct() {
    	$this->authorize('admin');
    	// $this->authorize('user');
    	$this->bredcrumb = [['link' => '/banners', 'title' => 'Reklama bannerlari']];
    	$this->action = '/banners/';
        $this->validatesarr = [
            'title' 		=> 'min:2|max:250',
            'text' 			=> 'min:2',
            'size'          => 'min:2|max:50',
            'foto'			=> 'required|image|mimes:jpeg,jpg,png,bmp|max:2000',
            'link'          => 'required|min:2|max:50',
        ];
    }

    public function serialize($model, $request){
        $model->title       = $request->input('title');
        $model->text        = htmlspecialchars($request->input('text'));
        $model->size        = $request->input('size');
        $model->link        = $request->input('link');
        $model->status      = $this->getStatus($request->input('status'));
        return $model;
    }

    public function banner1(Request $request){
        $this->action.='banner1';
        $this->title = 'Tepadagi';
        $model = Banner::where('type', 'banner1')->first();
        if (empty($model)) {
            $model = new Banner();
        }
        $model->type = 'banner1';
        $model->size = '728x90';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/banners/', $request->file('foto'), time());
            $model->foto = $foto->url;
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.banner.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }

    public function banner2(Request $request){
        $this->action.='banner2';
        $this->title = 'Tepadagi';
        $model = Banner::where('type', 'banner2')->first();
        if (empty($model)) {
            $model = new Banner();
        }
        $model->type = 'banner2';
        $model->size = '300x250';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/banners/', $request->file('foto'), time());
            $model->foto = $foto->url;
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.banner.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }

    public function banner3(Request $request){
        $this->action.='banner3';
        $this->title = 'Tepadagi';
        $model = Banner::where('type', 'banner3')->first();
        if (empty($model)) {
            $model = new Banner();
        }
        $model->type = 'banner3';
        $model->size = '200x200';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/banners/', $request->file('foto'), time());
            $model->foto = $foto->url;
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.banner.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }

    public function banner4(Request $request){
        $this->action.='banner4';
        $this->title = 'Tepadagi';
        $model = Banner::where('type', 'banner4')->first();
        if (empty($model)) {
            $model = new Banner();
        }
        $model->type = 'banner4';
        $model->size = '468x60';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            $foto = new MyFile($model->foto, 'uploads/'.date("Y-m-d").'/banners/', $request->file('foto'), time());
            $model->foto = $foto->url;
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.banner.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }
}