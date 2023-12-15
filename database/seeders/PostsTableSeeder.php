<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr; // Import Arr
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define a range of user IDs (e.g., 1 to 10)
        $categoryIds = range(1, 5);

        Post::factory()->count(50)->create(
            [
                'category_id' => function () use ($categoryIds) {
                    return Arr::random($categoryIds);
                },
            ]
        );
    }
}
