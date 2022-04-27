<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB; // подключаем фасад DB


class UserController extends Controller
{ 
    //
    public function show()
    {
        $arrUsers = DB::table('users')->get();
        //dd($arrUsers);
		return view('user.show', ['users' => $arrUsers]);
        
    }

}
