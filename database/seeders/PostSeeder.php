<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(faker $faker): void
    {
        for ($i=0; $i < 30; $i++) {
        $newPost = new Post();
        $newPost->title = $faker->word();
        $newPost->description = $faker->realTextBetween(100,500);
        $newPost->save();
    }
        }

}
