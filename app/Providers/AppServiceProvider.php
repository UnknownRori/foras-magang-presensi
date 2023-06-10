<?php

namespace App\Providers;

use App\Enums\RoleEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Model::shouldBeStrict(env('APP_ENV', "local") == "local");

        App::setLocale('id');

        Blade::if('admin', function () {
            return auth()->user()->role == RoleEnum::Admin;
        });
    }
}
