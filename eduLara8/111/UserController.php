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

        $posts = DB::table('townspeople')
        ->select('townspeople.id as user_id',
        'townspeople.name as user_name',
        'city.name as city_name'
         )
		->leftJoin('city', 'city.id', '=', 'townspeople.city_id')
	    ->get();
	
	    dump($posts);
        

        //$arrName = DB::table('users')->get();
        
        //dd($arrName);
		//return view('user.show', ['names' => $arrName]);
        
    }

}
