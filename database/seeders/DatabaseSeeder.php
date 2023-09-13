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
            MenhelyTableSeeder::class,
        ]);
        $this->call([
            AllatFajTableSeeder::class,
        ]);
        $this->call([
            AllatSzinTableSeeder::class,
        ]);
        $this->call([
          AllatTableSeeder::class,
        ]);
        

          $this->call([
            TamogatasMenhelyTableSeeder::class,
          ]);
          $this->call([
            TamogatasAllatTableSeeder::class,
          ]);

          $this->call([
            UsersTableSeeder::class,
          ]);

          $this->call([
            BarionTableSeeder::class,
          ]);
          $this->call([
            KepTableSeeder::class,
          ]);



        
    }
}
