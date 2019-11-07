<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;
use Carbon\Carbon;


class AppServiceProvider extends ServiceProvider
{
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

        Schema::defaultStringLength(191);
        
        Validator::extend('alpha_spaces', function($attribute, $value, $parameters, $validator) {
            return preg_match('/^[a-zA-Z*.\s]+$/', $value);
        }); 
        
        Validator::extend('mayus', function($attribute, $value, $parameters, $validator) {
            /*$value=substr($values);
            return "Se debe aceptar cadenas";*/
            if($value == strtolower($value)){
                return false;
            }else{
                return true;
            }
        });
        
        
    }
}
