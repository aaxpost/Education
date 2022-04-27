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

class CountrieController extends Controller
{
    public function show()
    {
        $countries = Countrie::all();
        foreach($countries as $countrie)
        {
            //dump($countrie->name);
            $arrCitie = $countrie
            ->citie()
            ->where('population', '>', 200)
            ->orderBy('population', 'asc')
            ->get();
            $a = 0;
            foreach($arrCitie as $citie) {
                //Подавляю вывод пустых строк
                if($a == 0) {
                    dump($countrie->name);
                }
                dump($citie->name);
                dump($citie->population);
                $a++;
            }
        }
    }
}
