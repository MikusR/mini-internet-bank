<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;
use App\Models\CryptoCurrency;
use App\Models\Currency;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('accounts', AccountController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/test', function () {
    return view('currency.rates', [
        'currencies' => Currency::all()->sortBy('rate'),
        'cryptoCurrencies' => CryptoCurrency::all()
    ]);
});

require __DIR__ . '/auth.php';
