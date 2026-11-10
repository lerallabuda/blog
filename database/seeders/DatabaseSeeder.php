<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            if (!$post->image) {
                Image::factory()->create([
                    'post_id' => $post->id
                ]);
            }
        }
    }
}
