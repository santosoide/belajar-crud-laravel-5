<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // mendaftarkan user crudable
        $this->app->when('App\Http\Controllers\User\UserController')
            ->needs('App\Contracts\Crudable')
            ->give('App\Domain\Repositories\User\UserRepository');

        // mendaftarkan user paginable
        $this->app->when('App\Http\Controllers\User\UserController')
            ->needs('App\Contracts\Paginable')
            ->give('App\Domain\Repositories\User\UserRepository');

        // mendaftarkan user searchable
        $this->app->when('App\Http\Controllers\User\UserController')
            ->needs('App\Contracts\Searchable')
            ->give('App\Domain\Repositories\User\UserRepository');

    }
}
