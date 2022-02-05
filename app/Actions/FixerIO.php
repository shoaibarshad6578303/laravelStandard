<?php

namespace App\Actions;

use App\Interfaces\ExchangeRatesService;

class  FixerIO implements ExchangeRatesService{

    public function getRate(string $from, string $to): float
    {
            // logic here
        $rates=1;
        return $rates;
    }

}