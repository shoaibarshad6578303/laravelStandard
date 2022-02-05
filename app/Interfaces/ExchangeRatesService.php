<?php

namespace App\Interfaces;

interface ExchangeRatesService
{
    public function getRate(string $from, string $to): float ;
}