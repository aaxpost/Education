<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB; // подключаем фасад DB
use App\Models\User;
use App\Models\Profile;
use App\Models\Citie;
use App\Models\Position;

class UserController extends Controller
{ 
    //
   

    public function show()
    {
        $user = User::find(12);
        dump($user->login);
        dump($user->position->name);
        dump($user->citie->name);
        
    }

}
