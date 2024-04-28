<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        //
        Admin::insert([
            [
                "name" =>  "Ghizlane",
                "email" =>"Ghizlane@mailinator.com",
                "password" => "Admin@123",
                "created_at" => Carbon::now()
            ],


        ]);
    }
}
