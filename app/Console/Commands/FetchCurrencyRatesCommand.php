<?php

namespace App\Console\Commands;

use App\Models\Currency;
use Illuminate\Console\Command;

class FetchCurrencyRatesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currencies:fetch-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.coinbase.com/v2/exchange-rates?currency=EUR');
        $response = json_decode($response->getBody()->getContents());
        foreach ($response->data->rates as $symbol => $rate) {
            \App\Models\Currency::updateOrCreate(
                ['symbol' => $symbol],
                ['rate' => $rate]
            );
        }
        var_dump(Currency::first());
        return 0;
    }
}
