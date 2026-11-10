<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        $posts = Post::select('id', 'image_path')->get();

        foreach ($posts as $post) {
            if (!Image::where('post_id', $post->id)->exists()) {

                $data = ['post_id' => $post->id];

                if ($post->image_path) {
                    $data['path'] = $post->image_path;
                }

                Image::factory()->create($data);
            }
        }
    }
}
