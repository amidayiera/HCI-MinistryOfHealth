<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
'title'=>$faker->paragraph(1),
'hospital'=>$faker->company,
'description'=>$faker->paragraph(20),

    ];
});