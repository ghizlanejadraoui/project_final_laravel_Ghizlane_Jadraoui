<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Menu;
use App\Models\RestaurantTable;
use App\Models\Role;
use App\Models\Table;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        $tables = RestaurantTable::all();
        $menus = Menu::all();
        $admins = Admin::all();
        $roles = Role::all();
        // Paginator::useBootstrap();

        view()->share([
            "tables"=> $tables,
            "menus"=> $menus,
            "admins" => $admins,
            "roles" => $roles,
    
    ]);
    }
}
