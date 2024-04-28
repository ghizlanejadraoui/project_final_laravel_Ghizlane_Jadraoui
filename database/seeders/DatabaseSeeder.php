<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Admin::factory()->create([
        //    "name" =>  "Ghizlane",
        // "email" =>"Admintest123@gmail.com",
        // "password" => "Admin@123",
        // ]);
        $this->call([
            RestaurantTableSeeder::class,
            MenuSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
