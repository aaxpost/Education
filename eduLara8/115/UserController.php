<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB; // подключаем фасад DB
use App\Models\User;


class UserController extends Controller
{ 
    //
   

    public function show()
    {
        return view('user.show', ['names' => User::all()]);

        //$posts = User::all();
        //$arrName = DB::table('users')->get();
        //dd($arrName);
		
        
    }

}
