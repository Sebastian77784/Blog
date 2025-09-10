<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class post extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Arboles',
            'description' => 'Arboles',
            'img' => 'default.jpg',
            'content' => 'contenido post',
            'likes' => 80,
            'slug' =>'como-tener-pasto-verde',
            'users_id' => 1,
            'category_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);

         DB::table('posts')->insert([
            'title' => 'Arbustos',
            'description' => 'Arbustos',
            'img' => 'default.jpg',
            'content' => 'contenido post',
            'likes' => 80,
            'slug' =>'como-tener-arbustos-verdes',
            'users_id' => 1,
            'category_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')
        ]);
    }
}
