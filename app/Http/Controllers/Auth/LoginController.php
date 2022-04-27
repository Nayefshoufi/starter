<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Contracts\Auth\Authenticatable;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'email';
        $value = request()->input('identify'); // ahmed.emam.dev@gmail  or 293293923293
        $field = filter_var($value, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
        request()->merge([$field =>$value ]);
        return  $field;
    }

//    public  function Login(Request $request)
//    {
//        $email = $request->input('email');
//        $password = $request->input('password');
//        if (Auth::attempt(['email' => $email, 'password' => $password]))
//            \route('home');
//    }
}
