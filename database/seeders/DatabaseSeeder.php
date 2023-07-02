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
            SzinTableSeeder::class,
        ]);
        $this->call([
            AllatfajtakTableSeeder::class,
        ]);
        $this->call([
           AllatTableSeeder::class,
        ]);
        $this->call([
            AllatSzinTableSeeder::class,
         ]);
         $this->call([
            MenhelyTableSeeder::class,
         ]);
         $this->call([
            TamogatasAllatSeeder::class,
         ]);
         $this->call([
            TamogatasMenhelySeeder::class,
         ]);
    }
}
