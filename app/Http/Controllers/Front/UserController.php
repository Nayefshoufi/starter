<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function showUserName()
    {
        return "Nayef Alshoufi";
    }

    public function getIndex()
    {
        $data=[];
        $data['name'] = 'nayef';
        $data['age'] = 36;
        $data['profession']='engineer';

        $obj = new \stdClass();
        $obj -> name = 'alshoufi1';
        $obj -> gender = 'male';
        $obj -> title = 'Mr.';

        return view('welcome', compact('obj'), compact('data'));
    }
}
