<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'uuid' => (string) Str::uuid(),
            'user_id' => User::factory(), // Menggunakan factory User untuk mendapatkan user_id
            'title' => $this->faker->sentence(6, true), // Judul dengan 6 kata
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraphs(3, true), // Teks paragraf dengan 3 kalimat
            'published_at' => $this->faker->boolean(70) ? now() : null, // 70% chance of being published
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
