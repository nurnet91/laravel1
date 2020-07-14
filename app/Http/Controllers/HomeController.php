<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Rukn;
use App\Models\Number;
use App\Models\Category;
use App\Models\Foto;
use App\Models\Page;
use Session;
class HomeController extends Controller {

    public function __construct(){}

    // public function getPassword(){
    //     return bcrypt('admin');
    // }

    public function index($id = null)
    {
        if (!empty($id)) {
            $son = Number::findOrFail($id);
            Session::put('son', $son);
        }
        $number = Session::get('son');        

        return view('public.home', [
            'rukns'     => Rukn::ruknlar(), 
            'muhimlar'  => Report::muhimlari(), 
            'yangi_son' => $number, 
            'mahalliy'  => Category::mahalliy(), 
            'xorij'     => Category::xorij(), 
            'reports'   => Report::reportlar(), 
            'more'      => Report::moreReaded(),
            'sonlar'    => Number::sonlar(),
            'gallery'   => Foto::getGallery(2),

            'banner1'   => \App\Models\Banner::getBanner('banner1'),
            'banner2'   => \App\Models\Banner::getBanner('banner2'),
            'banner3'   => \App\Models\Banner::getBanner('banner3'),
            'banner4'   => \App\Models\Banner::getBanner('banner4'),

            'rightcats' => Category::getRightReports(),
            'rightrukns'=> Rukn::getRightReports(),
        ]);

    }

    public function galeriyalar(){
        return view('public.galeriyalar', [
            'gallery' => Foto::getGallery()
        ]);
    }

    public function galeriya($id){
        return view('public.galeriya', [
            'gallery'   => Foto::getGallery(5),
            'foto'      => Foto::getCurrent($id),
        ]);
    }

    public function search(Request $request){
        $q = trim($request->input('q'));
        if (empty($q)) { return back(); }
        $number = Session::get('son');
        $bred2 = "'<strong>".$q."</strong>' - ".tar('bo&rsquo;yicha topilgan natijalar');
        return view('public.page', [
            'reports'       => Report::serchReports($q),
            'search_query'  => $q,
            'bred2'         => $bred2,
            'rukns'     => Rukn::ruknlar(), 
            'muhimlar'  => Report::muhimlari(), 
            'yangi_son' => $number, 
            'mahalliy'  => Category::mahalliy(), 
            'xorij'     => Category::xorij(),
            'more'      => Report::moreReaded(),
            'sonlar'    => Number::sonlar(),
            'gallery'   => Foto::getGallery(2),

            'rightcats' => Category::getRightReports(),
            'rightrukns'=> Rukn::getRightReports(),
        ]);
    }

    public function xabarlar($id){

        $report = Report::findOrFail($id);
        $report->readed += 1;
        $report->update();
        $number = Session::get('son');
        return view('public.xabarlar', [
            'report'    => $report, 
            'yangi_son' => $number, 
            'more'      => Report::moreReaded(['rukn_id' => $report->rukn_id]),
            'sonlar'    => Number::sonlar(),
            'gallery'   => Foto::getGallery(2),
            'dopolnitelno' => Report::moreReaded(['rukn_id' => $report->rukn_id], 3),

            'rightcats' => Category::getRightReports(),
            'rightrukns'=> Rukn::getRightReports(),
        ]);

    }

    public function ruknlar($id){
        $model = Rukn::find($id);
        $number = Session::get('son');
        $bred   = '<a href="/sonlar" class="right">'.$number["son"].'-'.tar("sonning barcha ma&rsquo;lumotlari").'</a>';
        $bred2  = $model->title.', '.$number['son'].tar('-son');
        return view('public.page', [
            'bred'      => $bred,
            'bred2'     => $bred2,
            'rukns'     => Rukn::ruknlar(),
            'yangi_son' => $number, 
            'mahalliy'  => Category::mahalliy(), 
            'xorij'     => Category::xorij(), 
            'more'      => Report::moreReaded(['rukn_id' => $id]),
            'sonlar'    => Number::sonlar(),
            'gallery'   => Foto::getGallery(2),
            'reports'   => Report::getReportsByRuknId($id),
            'rukn_id'   => $id,

            'rightcats' => Category::getRightReports(),
            'rightrukns'=> Rukn::getRightReports(),
        ]);

    }

    public function kategoriyalar($id){
        $model = Category::find($id);
        $number = Session::get('son');
        $bred = '<a href="/sonlar" class="right">'.$number["son"].'-'.tar("sonning barcha ma&rsquo;lumotlari").'</a>';
        $bred2  = $model->title.', '.$number['son'].'-son';
        return view('public.page', [
            'bred'          => $bred,
            'bred2'         => $bred2,
            'rukns'         => Rukn::ruknlar(),
            'yangi_son'     => $number, 
            'mahalliy'      => Category::mahalliy(), 
            'xorij'         => Category::xorij(), 
            'more'          => Report::moreReaded(['category_id' => $id]),
            'sonlar'        => Number::sonlar(),
            'gallery'       => Foto::getGallery(2),
            'reports'       => Report::getReportsByCategoryId($id),
            'category_id'   => $id,

            'rightcats' => Category::getRightReports(),
            'rightrukns'=> Rukn::getRightReports(),
        ]);

    }

    public function morereaded(){
        
        $number = Session::get('son');
        $bred = '<a href="/sonlar" class="right">'.$number["son"].'-'.tar("sonning barcha ma&rsquo;lumotlari").'</a>';
        $bred2  = 'Eng ko&rsquo;p o&rsquo;qilganlar'.$number['son'].'-son';
        return view('public.page', [
            'bred'          => $bred,
            'bred2'         => $bred2,
            'rukns'         => Rukn::ruknlar(),
            'yangi_son'     => $number, 
            'mahalliy'      => Category::mahalliy(), 
            'xorij'         => Category::xorij(), 
            'more'          => Report::moreReaded(),
            'sonlar'        => Number::sonlar(),
            'gallery'       => Foto::getGallery(2),
            'reports'       => Report::getMoreReadedReportsByNumberId(),

            'rightcats' => Category::getRightReports(),
            'rightrukns'=> Rukn::getRightReports(),
        ]);

    }

    public function sonlar(){
        $number = Session::get('son');
        $bred2  = $number['title'].', '.$number['son'].tar('-son');
        return view('public.page', [
            'bred2'         => $bred2,
            'rukns'         => Rukn::ruknlar(),
            'yangi_son'     => $number,
            'nomer'         => $number,
            'mahalliy'      => Category::mahalliy(), 
            'xorij'         => Category::xorij(), 
            'more'          => Report::moreReaded(),
            'sonlar'        => Number::sonlar(),
            'gallery'       => Foto::getGallery(2),
            'reports'       => Report::getReportsByNumberId(),

            'rightcats' => Category::getRightReports(),
            'rightrukns'=> Rukn::getRightReports(),
        ]);

    }

    public function bulimlar(){
        $model = Page::where('type', 'bulimlar')->first();
        return view('public.pages', [
            'model' => $model,
        ]);
    }

    public function rahbariyat(){
        $model = Page::where('type', 'rahbariyat')->first();
        return view('public.pages', [
            'model' => $model,
        ]);
    }

    public function gazeta(){
        $model = Page::where('type', 'gazeta')->first();
        return view('public.pages', [
            'model' => $model,
        ]);
    }

    public function tahririyat(){
        $model = Page::where('type', 'tahririyat')->first();
        return view('public.pages', [
            'model' => $model,
        ]);
    }

    public function obuna(){
        $model = Page::where('type', 'obuna')->first();
        return view('public.pages', [
            'model' => $model,
        ]);
    }

    public function contact(){
        $model = Page::where('type', 'contact')->first();
        $contact = new \App\Models\Message();

        return view('public.pages', [
            'model'     => $model,
            'contact'   => $contact,
        ]);
    }

    public function contactSend(Request $request){
        $model = new \App\Models\Message();
        $page = Page::select('email')->where('type', 'contact')->first();

        $this->validate($request, [
            'fio'       => 'required|min:5|max:200',
            'phone'     => 'required|min:10|max:14',
            'email'     => 'required|email|max:30',
            'message'   => 'required|min:10',
        ]);
        $model->fio     = htmlspecialchars($request->input('fio'));
        $model->phone   = htmlspecialchars($request->input('phone'));
        $model->email   = htmlspecialchars($request->input('email'));
        $model->message = htmlspecialchars($request->input('message'));
        $model->view    = 0;
        $model->send_email = !empty($page) ? $page->email : null;
        $model->ip      = $request->ip();

        if ($model->save()) {
            Session::flash('message1', "Sizning xatingiz jo&rsquo;natildi");
            if (!empty($model->send_email)) {
                \Mail::send('mail.cloud', ['model' => $model], function ($message) use ($model){
                    $message->from($model->email, $model->fio);
                    $message->to($model->send_email)->subject('Aloqa uchun xat.');
                });
            }
        }
        else{
            Session::flash('message2', "Bir ozdan so&rsquo;ng urinib ko&rsquo;ring");
        }

        return redirect('/aloqa');
    }

}
