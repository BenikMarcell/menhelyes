<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert ([

            // menhely belépés
            [
                
                'name'=>'Napfeny',
                'email'=>'napfeny@gmail.com',
                'password'=> Hash::make('12345678'),
                
            ],
            [
                
                'name'=>'Vagyunk',
                'email'=>'vagyunk@gmail.com',
                'password'=> Hash::make('12345678'),
                
            ],
            [
                
                'name'=>'Hasznos',
                'email'=>'hasznos@gmail.com',
                'password'=> Hash::make('12345678'),
                
            ],
            [
                
                'name'=>'Vilag',
                'email'=>'vilag@gmail.com',
                'password'=> Hash::make('12345678'),
                
            ],


        ]);
    }
}
