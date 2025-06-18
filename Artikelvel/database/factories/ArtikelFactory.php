<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $judul = fake()->sentence(6);
        $slug = Str::slug($judul);
        return [
            'judul' => $judul,
            'isi' => fake()->paragraphs(3, true),
            'slug' => $slug,
            'gambar' => fake()->imageUrl(640, 480, 'nature', true),
            'penulis' => fake()->name(),
            'tanggal' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
