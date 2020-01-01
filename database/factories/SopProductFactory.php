<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $name = $faker -> sentence(rand(2, 4), true);
    $description = $faker -> realText(rand(100, 1000));
    $short_desc = $faker ->realText(rand(100,101));

    $date = [
        'category_id' => rand(1, 5),
        'name' => $name,
        'code' => Str::slug($name),
        'description' => $description,
        'short_description' => $short_desc.'...',
        'price' => rand(1000, 5000)


    ];

    return $date;
});
