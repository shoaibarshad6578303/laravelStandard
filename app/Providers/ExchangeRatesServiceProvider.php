<?php

namespace App\Providers;

use App\Actions\ExchangeRatesApiIO;
use App\Actions\FixerIO;
use App\Interfaces\ExchangeRatesService;
use Exception;
use Illuminate\Support\ServiceProvider;

class ExchangeRatesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind(ExchangeRatesService::class, ExchangeRatesApiIO::class); // single class binding
        
        $this->app->bind(ExchangeRatesService::class, function($app){
            $driver= config('services.exchange-rates-driver');

            if($driver=='fixerio'){
                return new FixerIO();
            }

            if($driver=='exchangratesapiio'){
                return new ExchangeRatesApiIO();
            }

            throw new Exception('Exchange rate driver is invalid');
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
    }
}
