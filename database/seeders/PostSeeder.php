<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $post = new Post();

            $post->title = $faker->sentence(3);
            $post->description = $faker->text(350);
            $post->slug = Str::slug($post->title, '-');
            $post->link = $faker->text(200);

            $post->save();
        }
    }
}
