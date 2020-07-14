<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;
use Session;

class PageController extends Controller{

    protected $validatesArr = [];
    function __construct(){
        $this->bredcrumb[0] = ['title' => 'Sahifalar'];
        $this->middleware('auth');
        $this->action = '/pages/';
        $this->validatesArr = [
            'title'         => 'required|min:2|max:250',
            'text_sh'       => 'min:2',
            'text'          => 'required|min:2',
            'email'         => 'min:2|max:30|email',
            'adres'         => 'min:2',
            'google_karta'  => 'min:20',
            'tel'           => 'min:10|max:14',
            'tel2'          => 'min:10|max:14',
            'fb'            => 'min:10|max:250',
            'vk'            => 'min:10|max:250',
            'gp'            => 'min:10|max:250',
            'tv'            => 'min:10|max:250',
        ];
    }

    public function serialize($model, $request){
        $model->title       = $request->input('title');
        $model->text_sh     = htmlspecialchars($request->input('text_sh'));
        $model->text        = htmlspecialchars($request->input('text'));
        $model->email       = $request->input('email');
        $model->adres       = $request->input('adres');
        $model->google_karta= htmlspecialchars($request->input('google_karta'));
        $model->tel         = $request->input('tel');
        $model->tel2        = $request->input('tel2');
        $model->fb          = $request->input('fb');
        $model->vk          = $request->input('vk');
        $model->gp          = $request->input('gp');
        $model->tv          = $request->input('tv');
        return $model;
    }

    public function tahririyat(Request $request){
        $this->action.='tahririyat';
        $this->title = 'Tahririyat';
        $model = Page::where('type', 'tahririyat')->first();
        if (empty($model)) {
            $model = new Page();
        }
        $model->type = 'tahririyat';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.page.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }

    public function gazeta(Request $request){
        $this->action.='gazeta';
        $this->title = 'Gazeta haqida';
        $model = Page::where('type', 'gazeta')->first();
        if (empty($model)) {
            $model = new Page();
        }
        $model->type = 'gazeta';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.page.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }

    public function rahbariyat(Request $request){
        $this->action.='rahbariyat';
        $this->title = 'Rahbariyat';
        $model = Page::where('type', 'rahbariyat')->first();
        if (empty($model)) {
            $model = new Page();
        }
        $model->type = 'rahbariyat';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.page.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }

    public function bulimlar(Request $request){
        $this->action.='bulimlar';
        $this->title = 'Bo&rsquo;limlar';
        $model = Page::where('type', 'bulimlar')->first();
        if (empty($model)) {
            $model = new Page();
        }
        $model->type = 'bulimlar';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.page.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }

    public function obuna(Request $request){
        $this->action.='obuna';
        $this->title = 'Obuna';
        $model = Page::where('type', 'obuna')->first();
        if (empty($model)) {
            $model = new Page();
        }
        $model->type = 'obuna';
        if ($request->isMethod('post')) {
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.page.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }

    public function contact(Request $request){
        $this->action.='contact';
        $this->title = 'Aloqa';
        $model = Page::where('type', 'contact')->first();
        if (empty($model)) {
            $model = new Page();
        }
        $model->type = 'contact';
        if ($request->isMethod('post')) {
            $this->validatesArr['email'] = 'required|min:2|max:30|email';
            $this->validate($request, $this->validatesArr);
            $model = $this->serialize($model, $request);
            if (isset($model->id) AND !empty($model->id)) {
                $model->update() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            else{
                $model->save() ? Session::flash('message1', "Saqlandi") : Session::flash('message2', "Saqlanmadi. Sistema xatosi");
            }
            return redirect($this->action);
        }
        return view('admin.page.index', array_merge([
            'model' => $model
        ], $this->getBrend(true)));
    }
    
}
