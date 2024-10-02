<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'uuid' => (string) Str::uuid(),
            'user_id' => User::factory(), // Menggunakan factory User untuk mendapatkan user_id
            'post_id' => Post::factory(), // Menggunakan factory Post untuk mendapatkan post_id
            'comment' => $this->faker->paragraph(), // Komentar sebagai paragraf
            'published_at' => $this->faker->boolean(80) ? now() : null, // 80% chance of being published
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
