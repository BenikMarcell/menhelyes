<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            MenhelySeeder::class,
        ]);
        $this->call([
            AllatFajSeeder::class,
        ]);
        $this->call([
            AllatSzinSeeder::class,
        ]);
        $this->call([
          AllatSeeder::class,
        ]);
        $this->call([
            AllatnakSzineSeeder::class,
          ]);

          $this->call([
            TamogatasMenhelySeeder::class,
          ]);
          $this->call([
            TamogatasAllatSeeder::class,
          ]);

          $this->call([
            UsersTableSeeder::class,
          ]);

          $this->call([
            BarionSeeder::class,
          ]);



        
    }
}
