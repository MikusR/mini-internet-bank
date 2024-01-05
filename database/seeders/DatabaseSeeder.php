<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Account;
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
    }
}
