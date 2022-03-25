<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            ['name' => 'town1'],
            ['name' => 'town2'],
            ['name' => 'town3'],
            ['name' => 'town4'],
            ['name' => 'town5'],
        
        ]);
    }
}
