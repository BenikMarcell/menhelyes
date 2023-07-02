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
        DB::table('menhelyek')->insert ([

            [
                
                
                'u_id'=>'1',
                'bt_id'=>'1',
                'menhely_nev'=>'Napfény',
                'menhely_irsz'=>'1141',
                'menhely_telepules'=>'Budapest',
                'menhely_utca_sz'=>'Mentő utca 12',
                'menhely_banksz_szam'=>'ABC1234564',
                'menhely_nyilv_sz'=>'FA23414152',
                'menhely_adoszam'=>'123456',
                'menhely_email'=>'napfeny@gmail.com',
                'menhely_telefon'=>'+367023412',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'menhely_weblink'=>'napfeny.com',
            ],
            [
                
                
                'u_id'=>'2',
                'bt_id'=>'2',
                'menhely_nev'=>'Vagyunk',
                'menhely_irsz'=>'2141',
                'menhely_telepules'=>'Budapest',
                'menhely_utca_sz'=>'Létező utca 42',
                'menhely_banksz_szam'=>'ABC1234564',
                'menhely_nyilv_sz'=>'FA23414152',
                'menhely_adoszam'=>'123456',
                'menhely_email'=>'vagyunk@gmail.com',
                'menhely_telefon'=>'+363023412',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'menhely_weblink'=>'vagyunk.com',
            ],
            [
                
                'u_id'=>'3',
                'bt_id'=>'3',
                'menhely_nev'=>'Hasznos',
                'menhely_irsz'=>'1041',
                'menhely_telepules'=>'Budapest',
                'menhely_utca_sz'=>'Hasznos utca 12',
                'menhely_banksz_szam'=>'ABC1234564',
                'menhely_nyilv_sz'=>'FA23414152',
                'menhely_adoszam'=>'123456',
                'menhely_email'=>'hasznos@gmail.com',
                'menhely_telefon'=>'+362023412',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'menhely_weblink'=>'hasznos.com',
            ],
            [
                
                'u_id'=>'4',
                'bt_id'=>'4',
                'menhely_nev'=>'Világ',
                'menhely_irsz'=>'1141',
                'menhely_telepules'=>'Budapest',
                'menhely_utca_sz'=>'Vad utca 32',
                'menhely_banksz_szam'=>'ABC1234564',
                'menhely_nyilv_sz'=>'FA23414152',
                'menhely_adoszam'=>'123456',
                'menhely_email'=>'vad@gmail.com',
                'menhely_telefon'=>'+362024412',
                'menhely_leiras'=>'Etiam facilisis gravida neque id porta. In quis diam facilisis massa elementum auctor nec vel sem. Phasellus pulvinar posuere tortor, eu maximus est maximus id.',
                'menhely_weblink'=>'vad.com',
            ],


        ]);
    }
}
