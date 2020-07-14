<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;

class ProfileController extends Controller{
    function __construct(){
    	$this->middleware('auth');
    	$this->bredcrumb = [['link' => '/profile', 'title' => 'Foydalanuvchi profili']];
    	$this->action = '/profile';
    	$this->validatesarr = [
            'fio' => 'required|max:250|min:5',
	        'dolz' => 'required|max:250|min:5',
        ];
    }

    public function index($type = 'settings'){
    	$this->bredcrumb[0] = ['title' => 'Profil'];
        $arr = ['type' => $type];
    	return view('admin.profile.index', array_merge($this->getBrend(), $arr));
    }

    public function edit(Request $request){
    	
	    $this->validate($request, $this->validatesarr);

	    $user = Auth::user();
	    $user->fio = htmlspecialchars($request->input('fio'));
	    $user->dolz = htmlspecialchars($request->input('dolz'));
	    $user->education = htmlspecialchars($request->input('education'));
	    $user->adres = htmlspecialchars($request->input('adres'));
	    $user->email = htmlspecialchars($request->input('email'));
	    $user->note = htmlspecialchars($request->input('note'));
	    $user->autologin = $this->getStatus($request->input('autologin'));

	    $user->update() ? Session::flash('message1', "Sizning ma&rsquo;lumotlaringiz saqlandi") : Session::flash('message2', "Sistema xatosi");
	    
	    return redirect('/profile/settings');
    }
    public function change(Request $request)
    {
        $this->validate($request, [
            'login' => 'required|min:3|max:30',
            'password' => 'min:5|max:70|confirmed',
            'password_confirmation' => 'min:5|max:70',
        ]);
        $model = Auth::user();
        if (!empty($request->input('login'))) {
            $model->login = $request->input('login');
        }
        if (!empty($request->input('password'))) {
            $model->password = bcrypt($request->input('password'));
        }
        $model->update() ? Session::flash('message1', "Sizning ma&rsquo;lumotlaringiz saqlandi") : Session::flash('message2', "Sistema xatosi");
        return redirect('/profile/login');
    }
}
