<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use App\Models\Player;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->count(20)->create();

        //     'email' => 'test@example.com',
        // ]);
        $this->call(CategorySeeder::class);
        Post::factory()->count(300)->create();
        Team::factory()->count(20)->create();



        Player::factory()
            ->count(100)
            ->create();



    }
}
