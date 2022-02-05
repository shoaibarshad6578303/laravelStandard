<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\ExchangeRatesService;

class RateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ExchangeRatesService $exchangeRatesService)
    {
        $rate = $exchangeRatesService->getRate("01-12-2018","01-13-2018");

        return response()->json(['rates'=>$rate]);
    }
}
