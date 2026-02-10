<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::insert([
        [
            'id' => 1,
            'title' => 'Laravel Basics',
            'body' => 'This post explains the basics of Laravel.',
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 2,
            'title' => 'Blade Tips',
            'body' => 'Useful tips for working with Blade templates.',
            'category_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);

    }
}
