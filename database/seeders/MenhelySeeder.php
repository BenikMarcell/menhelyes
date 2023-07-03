<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenhelySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menhely')->insert ([

            [
                
                
                'id'=>'1',
                'bt_id'=>'1',
                'nev'=>'Napfény',
                'irsz'=>'1141',
                'telepules'=>'Budapest',
                'utca_hsz'=>'Mentő utca 12',
                'bankszamla_sz'=>'ABC1234564',
                'nyilv_szam'=>'FA23414151',
                'adoszam'=>'123456',
                'email'=>'napfeny@gmail.com',
                'telefon'=>'+367023411',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'napfeny.com',
            ],
            [
                
                
                'id'=>'2',
                'bt_id'=>'2',
                'nev'=>'Vagyunk',
                'irsz'=>'1341',
                'telepules'=>'Budapest',
                'utca_hsz'=>'Kifelé utca 22',
                'bankszamla_sz'=>'ABF1234564',
                'nyilv_szam'=>'RR23414152',
                'adoszam'=>'123456',
                'email'=>'vagyunk@gmail.com',
                'telefon'=>'+367023412',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'vagyunk.com',
            ],
            [
                
                'id'=>'3',
                'bt_id'=>'3',
                'nev'=>'Hasznos',
                'irsz'=>'1041',
                'telepules'=>'Budapest',
                'utca_hsz'=>'Felmenő utca 12',
                'bankszamla_sz'=>'ABC1234564',
                'nyilv_szam'=>'FA23414152',
                'adoszam'=>'123456',
                'email'=>'hasznos@gmail.com',
                'telefon'=>'+367023413',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'hasznos.com',
            ],
            [
                
                'id'=>'4',
                'bt_id'=>'4',
                'nev'=>'Világ',
                'irsz'=>'1111',
                'telepules'=>'Budapest',
                'utca_hsz'=>'Ketrec utca 322',
                'bankszamla_sz'=>'ABC1234568',
                'nyilv_szam'=>'FA23414159',
                'adoszam'=>'123456',
                'email'=>'vilag@gmail.com',
                'telefon'=>'+367023414',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'vilag.com',
            ],
        ]);

    }
}
