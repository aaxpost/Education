<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['title' => Str::random(10),
            'slug' => Str::random(10),
            'likes' => mt_rand(1, 1000),
            'created_at' => '2022-03-23'],

            ['title' => Str::random(10),
            'slug' => Str::random(10),
            'likes' => mt_rand(1, 1000),
            'created_at' => '2022-03-23'],

            ['title' => Str::random(10),
            'slug' => Str::random(10),
            'likes' => mt_rand(1, 1000),
            'created_at' => '2022-03-23'],

            ['title' => Str::random(10),
            'slug' => Str::random(10),
            'likes' => mt_rand(1, 1000),
            'created_at' => '2022-03-23'],

            ['title' => Str::random(10),
            'slug' => Str::random(10),
            'likes' => mt_rand(1, 1000),
            'created_at' => '2022-03-23'],
        ]);
    }
}
