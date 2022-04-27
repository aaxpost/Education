<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\DB; // подключаем фасад DB
use App\Models\User;
use App\Models\Profile;
use App\Models\Countrie;
use App\Models\Citie;


//У меня имена неверные, не стал менять.
class CitieController extends Controller
{
    //
    public function show()
    {
        $citie = Citie::all()->where('population', '>', 100);
        foreach($citie as $city) {
            dump($city->name);
            dump($city->countrie->name);
            dump($city->population);
        }
        
    }

}
