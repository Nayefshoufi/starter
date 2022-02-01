<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class SecondController extends Controller
{
    //
    public function __construct()
    {
        $this -> middleware('auth') -> except('showString2');
    }

    public function showString0(){
        return 'second 0';
    }

    public function showString1(){
        return 'second 1';
    }
    public function showString2(){
        return 'second 2';
    }
    public function showString3(){
        return 'second 3';
    }
    public function showString4(){
        return 'second 4';
    }
}
