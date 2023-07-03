<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('allat')->insert ([

            [
                
                'af_id'=>'1',
                'm_id'=>'1',
                'kor'=>'24',
                'ivar-allapot'=>'1',
                'chip'=>'1',
                'nev'=>'Buksi',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id. Aliquam erat volutpat. Pellentesque molestie, nulla et tempus aliquam, dolor mi viverra sapien, a tincidunt sem orci id metus. Aliquam augue ipsum, rutrum sed eleifend sed, blandit eu metus. Donec eu ultricies velit. Vestibulum eu urna eros. Sed ac laoreet sem. Donec feugiat lorem sed laoreet egestas. Donec vestibulum auctor odio at iaculis. Nullam ut lectus orci. Integer aliquet ultrices quam eu ornare. ',
                
           
            ],
            [
                
                'af_id'=>'2',
                'm_id'=>'1',
                'kor'=>'4',
                'ivar-allapot'=>'1',
                'chip'=>'1',
                'nev'=>'Cirmos',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id. Aliquam erat volutpat. Pellentesque molestie, nulla et tempus aliquam, dolor mi viverra sapien, a tincidunt sem orci id metus. Aliquam augue ipsum, rutrum sed eleifend sed, blandit eu metus. Donec eu ultricies velit. Vestibulum eu urna eros. Sed ac laoreet sem. Donec feugiat lorem sed laoreet egestas. Donec vestibulum auctor odio at iaculis. Nullam ut lectus orci. Integer aliquet ultrices quam eu ornare. ',
                
           
            ],
            [
                
                'af_id'=>'3',
                'm_id'=>'1',
                'kor'=>'2',
                'ivar-allapot'=>'1',
                'chip'=>'2',
                'nev'=>'Micky',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id. Aliquam erat volutpat. Pellentesque molestie, nulla et tempus aliquam, dolor mi viverra sapien, a tincidunt sem orci id metus. Aliquam augue ipsum, rutrum sed eleifend sed, blandit eu metus. Donec eu ultricies velit. Vestibulum eu urna eros. Sed ac laoreet sem. Donec feugiat lorem sed laoreet egestas. Donec vestibulum auctor odio at iaculis. Nullam ut lectus orci. Integer aliquet ultrices quam eu ornare. ',
                
           
            ],
            [
                
                'af_id'=>'4',
                'm_id'=>'1',
                'kor'=>'3',
                'ivar-allapot'=>'2',
                'chip'=>'2',
                'nev'=>'Misi',
                'leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id. Aliquam erat volutpat. Pellentesque molestie, nulla et tempus aliquam, dolor mi viverra sapien, a tincidunt sem orci id metus. Aliquam augue ipsum, rutrum sed eleifend sed, blandit eu metus. Donec eu ultricies velit. Vestibulum eu urna eros. Sed ac laoreet sem. Donec feugiat lorem sed laoreet egestas. Donec vestibulum auctor odio at iaculis. Nullam ut lectus orci. Integer aliquet ultrices quam eu ornare. ',
                
           
            ],
            


        ]);
    }
}
