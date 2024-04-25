<?php

namespace Database\Seeders;

use App\Models\RestaurantTable;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        RestaurantTable::insert([
            [
                "image" =>  "build/assets/images/table2.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "table_number" => 10,
                "capacity" => 4,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/table3.jpg ",
                "description" =>"Secure your spot and savor the moment.",

                "table_number" => 15,
                "capacity" => 2,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/table4.jpg ",
                "description" =>"Secure your spot and savor the moment.",
                "table_number" => 20,
                "capacity" => 1,
                "created_at" => Carbon::now()
            ],
            [
                "image" => "build/assets/images/table8.jpg",
                "description" =>"Secure your spot and savor the moment.",
                "table_number" => 15,
                "capacity" => 10,
                "created_at" => Carbon::now()
            ],

        ]);

        // foreach ($tables as $table) {
        //     RestaurantTable::create($table);
        // }
    }
}
