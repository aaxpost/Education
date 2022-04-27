<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function method1()
    {
        return view('user.method1', [
            'title'=>'title 1',
            'text'=>'page user.method1']);
    }

    public function method2()
    {
        return view('user.method2', [
            'title'=>'title 2',
            'text'=>'page user.method2']);
    }

    public function method3()
    {
        return view('user.method3', [
            'title'=>'title 3',
            'text'=>'page user.method3']);
    }
}
