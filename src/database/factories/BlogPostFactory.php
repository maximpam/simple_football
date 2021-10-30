<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {

    $title = $faker->sentence(rand(3, 8), true);
    $content = $faker->realText(rand(1000, 4000));
    $description = $faker->text(rand(40, 100));

    $data = [
      'user_id' => rand(1, 20),
      'title' => $title,
      'slug' => \Illuminate\Support\Str::slug($title),
      'description' => $description,
      'content'=> $content
    ];



    return $data;
});
