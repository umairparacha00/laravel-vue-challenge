<?php

namespace Database\Seeders;

use App\Models\Response;
use App\Models\Ticket;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@fake.com',
            'password' => bcrypt('secret'),
            'role' => 'admin',
        ]);

        User::factory(10)->create();
        Ticket::factory(50)
            ->has(User::factory()->count(1), 'user')
            ->has(Response::factory()->count(5), 'responses')
            ->create();
    }
}
