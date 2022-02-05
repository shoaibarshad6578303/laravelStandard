<?php

namespace App\Actions;

use App\Interfaces\ExchangeRatesService;

class  ExchangeRatesApiIO implements ExchangeRatesService{

    public function getRate(string $from, string $to): float
    {
            // logic here
        $rates=0;
        return $rates;
    }

}