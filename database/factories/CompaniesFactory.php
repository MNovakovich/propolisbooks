<?php

use Faker\Generator as Faker;
use App\Models\Company;
use App\Models\Category;

$factory->define(Model::class, function (Faker $faker) {
	'name','address','number','email','pib','contact_person','category_id','note','active','city_id'
    return [
        'name'=>$faker->company,
        'address'=>$faker->streetAddress,
        'email'=>$faker->safeEmail
        'pib'=>$faker->>randomElement([10000,50000]),
        'contact_person'=>$faker->name.
        'category_id'=>Category::all()->random()->id,
        'note'=>$faker->paragraph(15),
        'active'=>$faker->randomElement([0,1]),
        'city_id'=>$faker->city
    ];
});

