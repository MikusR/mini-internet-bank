<?php

namespace App\Console\Commands;

use App\Models\Currency;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class FetchCurrencyRatesCommand extends Command
{

    protected $signature = 'currencies:fetch-rates';


    protected $description = 'Fetch currency rates from Coinbase';
    private const BASE_CURRENCY = 'EUR';


    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $client = new Client();
        $response = $client->get('https://api.coinbase.com/v2/exchange-rates?currency=' . self::BASE_CURRENCY);
        $response = json_decode($response->getBody()->getContents());
        foreach ($response->data->rates as $symbol => $rate) {
            if (!in_array($symbol, Currency::$validCurrencies)) {
                continue;
            }
            Currency::updateOrCreate(
                ['symbol' => $symbol],
                ['rate' => $rate]
            );
        }
        return 0;
    }
}
