<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
	$name = $faker->name;
    return [
    	"title" => $name,
        "slug" => str_slug($name),
        "description" => $faker->text(),
        "comments" => $faker->text(),
        "comments_count" => 500,
        "lessons_count" => 400,
        "documents_count" => 390,
        "price" => $faker->randomFloat(2, 0, 199),
        "start_date" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "published" => 1
    ];
});
