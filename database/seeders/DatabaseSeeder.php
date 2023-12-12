<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Car;
use \App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Car::factory(5)->create();
        User::factory(10)->create([
       // \App\Models\Car::factory(5)->create();

         //\App\Models\User::factory(5)->create([
            //'name' => 'Test User',
          //'email' => 'test@example.com',
         ]);
    }
}
