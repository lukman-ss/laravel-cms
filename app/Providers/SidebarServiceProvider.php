<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SidebarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('sidebar', [
            ['main_link' => 'test', 'sub_link' => ['test', 'test2']],
            ['main_link' => 'dashboard', 'sub_link' => ['test', 'test2']],
            // Add more sidebar links as needed
        ]);
    }
}
