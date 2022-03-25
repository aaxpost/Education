<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'age' => mt_rand(16, 120),
            'salary' => mt_rand(1000, 3000),
            'created_at' => '2022-03-23'],

            ['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'age' => mt_rand(16, 120),
            'salary' => mt_rand(1000, 3000),
            'created_at' => '2022-03-23'],

            ['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'age' => mt_rand(16, 120),
            'salary' => mt_rand(1000, 3000),
            'created_at' => '2022-03-23'],

            ['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'age' => mt_rand(16, 120),
            'salary' => mt_rand(1000, 3000),
            'created_at' => '2022-03-23'],

            ['name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'age' => mt_rand(16, 120),
            'salary' => mt_rand(1000, 3000),
            'created_at' => '2022-03-23'],
        ]);
    }
}
