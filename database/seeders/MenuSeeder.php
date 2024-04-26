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
                "image" =>  "build/assets/images/plat1.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 1",
                "price" => 40,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat13.jpg ",
                "description" =>"Secure your spot and savor the moment.",

                "name" => "plat 2",
                "price" => 25,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat3.jpg ",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 3",
                "price" => 15,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat4.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat5.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat2.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat7.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat8.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat15.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat10.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat11.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/plat12.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "name" => "plat 4",
                "price" => 10,
                "created_at" => Carbon::now()
            ],
        ]);
    }
}
