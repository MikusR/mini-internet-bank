<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CryptoCurrency extends Model
{
    public static array $validCryptoCurrencies = [
        'BTC',
        'LTC',
        'ETH',
        'BCH',
        'ETC',
    ];

    protected $primaryKey = 'symbol';
    public $incrementing = false;
    protected $fillable = [
        'symbol',
        'rate',
    ];
}
