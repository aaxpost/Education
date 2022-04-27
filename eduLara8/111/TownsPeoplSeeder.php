<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TownsPeoplSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('townspeople')->insert([
            ['name' => 'user1',
            'city_id' => 5],
            ['name' => 'uer2',
            'city_id' => 3],
            ['name' => 'user3',
            'city_id' => 2],
            ['name' => 'user4',
            'city_id' => 4],
            ['name' => 'user5',
            'city_id' => 1 ],
        
        ]);
    }
}
