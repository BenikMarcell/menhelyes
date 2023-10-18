<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MenhelyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menhely')->insert ([

            [
                
                
                'u_id'=>'1',
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
                
                
                'u_id'=>'2',
                'nev'=>'Vagyunk',
                'irsz'=>'1341',
                'telepules'=>'Debrecen',
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
                
                'u_id'=>'3',
                'nev'=>'Hasznos',
                'irsz'=>'1041',
                'telepules'=>'Pécs',
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
                
                'u_id'=>'4',
                'nev'=>'Világ',
                'irsz'=>'1111',
                'telepules'=>'Szeged',
                'utca_hsz'=>'Ketrec utca 322',
                'bankszamla_sz'=>'ABC1234568',
                'nyilv_szam'=>'FA23414159',
                'adoszam'=>'123456',
                'email'=>'vilag@gmail.com',
                'telefon'=>'+367023414',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'vilag.com',
            ],
            [
                
                'u_id'=>'5',
                'nev'=>'Mentő',
                'irsz'=>'1111',
                'telepules'=>'Győr',
                'utca_hsz'=>'Ketrec utca 322',
                'bankszamla_sz'=>'ABC1234568',
                'nyilv_szam'=>'FA23414159',
                'adoszam'=>'123456',
                'email'=>'mento@gmail.com',
                'telefon'=>'+367023414',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'mento.com',
            ],

            [
                
                'u_id'=>'6',
                'nev'=>'Remény',
                'irsz'=>'1111',
                'telepules'=>'Miskolc',
                'utca_hsz'=>'Ketrec utca 322',
                'bankszamla_sz'=>'ABC1234568',
                'nyilv_szam'=>'FA23414159',
                'adoszam'=>'123456',
                'email'=>'remeny@gmail.com',
                'telefon'=>'+367023414',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'remeny.com',
            ],
            [
                
                'u_id'=>'7',
                'nev'=>'Esély',
                'irsz'=>'1111',
                'telepules'=>'Zalaegerszeg',
                'utca_hsz'=>'Ketrec utca 322',
                'bankszamla_sz'=>'ABC1234568',
                'nyilv_szam'=>'FA23414159',
                'adoszam'=>'123456',
                'email'=>'esely@gmail.com',
                'telefon'=>'+367023414',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'esely.com',
            ],
            [
                
                'u_id'=>'8',
                'nev'=>'Házikó',
                'irsz'=>'1111',
                'telepules'=>'Nyíregyháza',
                'utca_hsz'=>'Ketrec utca 322',
                'bankszamla_sz'=>'ABC1234568',
                'nyilv_szam'=>'FA23414159',
                'adoszam'=>'123456',
                'email'=>'haziko@gmail.com',
                'telefon'=>'+367023414',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'haziko.com',
            ],

            [
                
                'u_id'=>'9',
                'nev'=>'Vadalma',
                'irsz'=>'1111',
                'telepules'=>'Vác',
                'utca_hsz'=>'Ketrec utca 322',
                'bankszamla_sz'=>'ABC1234568',
                'nyilv_szam'=>'FA23414159',
                'adoszam'=>'123456',
                'email'=>'vadalma@gmail.com',
                'telefon'=>'+367023414',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'weblink'=>'vadalma.com',
            ],
        ]);

    }
}
