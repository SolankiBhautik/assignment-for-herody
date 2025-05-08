<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use App\Models\Book;
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
            'email' => 'test@example.com',
        ]);

        // Create 20 authors, each with 2-8 books
        Author::factory()
            ->count(20)
            ->has(
                Book::factory()
                    ->count(fn() => rand(2, 8))
            )
            ->create();
    }
}
