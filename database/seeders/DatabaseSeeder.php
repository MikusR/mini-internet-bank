<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'demo@demo.demo',
            'password' => bcrypt('demodemo'),
        ]);
        \App\Models\User::factory()->create([
            'id' => 2,
            'name' => '2 Test User',
            'email' => 'test@test.test',
            'password' => bcrypt('testtest'),
        ]);
        Account::factory()->create([
            'user_id' => 1,
            'name' => 'USD1',
            'type' => 'standard',
            'currency' => 'USD',
        ]);
        Account::factory()->create([
            'user_id' => 1,
            'name' => 'EUR1',
            'type' => 'standard',
            'currency' => 'EUR',
        ]);
        Account::factory()->create([
            'user_id' => 2,
            'name' => 'USD2',
            'type' => 'standard',
            'currency' => 'USD',
        ]);
        Account::factory()->create([
            'user_id' => 2,
            'name' => 'EUR2',
            'type' => 'standard',
            'currency' => 'EUR',
        ]);
        Transaction::factory()->create([
            'account_from' => 1,
            'account_to' => 2,
            'currency_from' => 'USD',
            'currency_to' => 'EUR',
            'amount' => 100,
            'note' => '1 to 2 100 USD to EUR',
        ]);
        Transaction::factory()->create([
            'account_from' => 1,
            'account_to' => 4,
            'currency_from' => 'USD',
            'currency_to' => 'EUR',
            'amount' => 100,
            'note' => '1 to 4 100 USD to EUR',
        ]);
        Transaction::factory()->create([
            'account_from' => 2,
            'account_to' => 1,
            'currency_from' => 'EUR',
            'currency_to' => 'USD',
            'amount' => 100,
            'note' => '2 to 1 100 EUR to USD',
        ]);
        Transaction::factory()->create([
            'account_from' => 4,
            'account_to' => 1,
            'currency_from' => 'EUR',
            'currency_to' => 'USD',
            'amount' => 100,
            'note' => '4 to 1 100 EUR to USD',
        ]);
    }
}
