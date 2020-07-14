<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
// use Illuminate\Http\Request;
use Request;

class AuthController extends Controller {
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $redirectTo = '/';
    protected $username = 'login';
    public function __construct() {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    // public function postLogin(Request $request) {
    //     $this->validate($request, [
    //         'login' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('login', 'password');

    //     if ($this->auth->attempt($credentials, $request->has('remember'))){
    //         return redirect()->intended($this->redirectPath());
    //     }

    //     return redirect($this->loginPath())
    //         ->withInput($request->only('login', 'remember'))
    //         ->withErrors([
    //             'login' => 'These credentials do not match our records.',
    //         ]);
    // }

    protected function validator(array $data) {
        return Validator::make($data, [
            'login'     => 'required|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
            'fio'       => 'required|max:255',
            'email'     => 'required|email|max:255',
        ]);
    }

    protected function create(array $data) {
        return User::create([
            'login'     => $data['login'],
            'password'  => bcrypt($data['password']),
            'fio'       => $data['fio'],
            'email'     => $data['email'],
            'roleid'    => 0,
            'ip'        => Request::ip()
        ]);
    }

}
