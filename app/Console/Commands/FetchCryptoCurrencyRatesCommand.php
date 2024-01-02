<?php

namespace App\Console\Commands;

use App\Models\CryptoCurrency;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class FetchCryptoCurrencyRatesCommand extends Command
{

    protected $signature = 'crypto-currencies:fetch-rates';

    protected $description = 'Fetch crypto currency rates from Coinbase';
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
            if (!in_array($symbol, CryptoCurrency::$validCryptoCurrencies)) {
                continue;
            }
            CryptoCurrency::updateOrCreate(
                ['symbol' => $symbol],
                ['rate' => $rate]
            );
        }
        return 0;
    }
}
