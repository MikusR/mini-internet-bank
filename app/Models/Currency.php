<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public static array $validCurrencies = [
        'EUR',
        'USD',
        'GBP',
        'JPY',
    ];
    protected $primaryKey = 'symbol';
    public $incrementing = false;
    protected $fillable = [
        'symbol',
        'rate',
    ];
}
