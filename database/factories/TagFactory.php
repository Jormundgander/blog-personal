<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
		'name' => $faker->sentence(4),
        'slug' => Str::slug($title),
    ];
});
