<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::insert([
            [
                "name" => "admin",
                "guard_name" => "web"
            ],
            [
                "name" => "user",
                "guard_name" => "web"
            ],
        ]);
    }
}
