<?php

namespace App\Providers;

use App\Http\Composers\HelloComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(
            'hello.index', 'App\Http\Composers\HelloComposer'
        );
    }
}
