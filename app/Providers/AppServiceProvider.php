<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use Illuminate\Support\Facades\View;

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
        View::composer('layouts.frontend.header', function ($view) {
            $view->with('header_services', Service::where('status', 'active')->get());
        });
    }
}
