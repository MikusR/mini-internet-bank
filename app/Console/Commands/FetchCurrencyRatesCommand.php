<?php

namespace App\Console\Commands;

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
        var_dump($response->getBody()->getContents());
        return 0;
    }
}
