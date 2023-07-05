<?php

namespace App\Providers;

use App\Http\Composers\HelloComposer;
use App\Http\Validators\HelloValidator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator as IlluminateValidationValidator;
use Validator;


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
        FacadesValidator::extend('hello', function($attribute, $value, $parameters, $validator){
            return $value %2 == 0;
        });
        
    }
}
