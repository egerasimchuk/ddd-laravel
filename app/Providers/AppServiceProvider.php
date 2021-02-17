<?php

namespace App\Providers;

use App\Repositories\Eloquent\EloquentProfileRepository;
use App\Services\Payments\Repositories\PaymentClientRepository;
use App\Services\Profiles\Repositories\ProfileRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    protected $bindings = [
        ProfileRepository::class => EloquentProfileRepository::class,
        PaymentClientRepository::class => EloquentProfileRepository::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
