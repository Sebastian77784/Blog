<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([ 
            'name'=>'Sergio Sebastian',
            'email'=>'sebastainnn231@gmail.com',
            'password'=> Hash::make('S1e2b3a4s5.'),
            'nickname'=>'admin',
            'img'=>'default.jpg',
            'created_at'=>date('Y-m-d h:m:s')
        ]);
        
        
            for($i=0;$i<50;$i++){
            DB::table('users')->insert(['name'=>'Sergio Sebastian'.$i,
            'email'=>'sebastainnn231'.$i.'@gmail.com',
            'password'=> Hash::make('S1e2b3a4s5.'),
            'nickname'=>'admin'.$i,
            'img'=>'default.jpg',
            'created_at'=>date('Y-m-d h:m:s')
        ]);}
         
    
    }
}
