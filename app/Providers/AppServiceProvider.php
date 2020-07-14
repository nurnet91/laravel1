<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
use \App\models\Number;
use \App\Helpers\Sana;

class AppServiceProvider extends ServiceProvider{

    public function boot(){
        view()->share('no_foto', 	'/img/no-image.png');
        view()->share('no_image',   '/img/no-image.png');
        view()->share('hafta',      Sana::hafta());
        view()->share('oy', 	    Sana::oy());
        if (!Session::has('son') OR empty(Session::get('son'))) {
            $son = Number::orderBy('son', 'DESC')->first()->toArray();
	        Session::put('son', $son);
        }
    }

    public function register(){
        //
    }
}
