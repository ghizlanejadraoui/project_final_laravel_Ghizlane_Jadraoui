<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            "name" =>  "Ghizlane",
            "email" => "Ghizlane@gmail.com",
            "password" => "Ghizlane123",
        ]); 

        $user->assignRole('admin');
    }
}
