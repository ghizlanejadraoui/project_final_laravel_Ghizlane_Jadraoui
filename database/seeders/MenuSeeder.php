<?php

namespace Database\Seeders;

use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Menu::insert([
            [
                "image" =>  "plat1.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 1",
                "price" => 40,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "plat13.jpg ",
                "description" =>"Secure your spot and savor the moment.",

                "name" => "plat 2",
                "price" => 25,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "plat3.jpg ",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 3",
                "price" => 15,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "plat4.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "plat5.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 5",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "plat2.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 6",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "plat2.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 6",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
        ]);
    }
}
