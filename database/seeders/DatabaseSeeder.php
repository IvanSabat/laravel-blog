<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Ivan Sabat',
            'email' => 'ivan.sabat@outlook.com',
        ]);

        User::factory(2)->create();

        Post::factory()->for($user)->create();

        $this->call([
            PostSeeder::class,
        ]);
    }
}
