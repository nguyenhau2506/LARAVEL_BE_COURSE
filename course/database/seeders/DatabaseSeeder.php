<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
                'name' => 'Test User',
                'email' => 'test1@example.com',
                'password' => Hash::make("12345"),
        ]);
    }
}
