<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5000; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'content' => $faker->paragraph,
                'description' => $faker->paragraph(2),
            ]);
        }
    }
}
