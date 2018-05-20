<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
  $fakeP = ['Técnico', 'Comercial'];
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'profile' => $fakeP[rand(0, 1)],
    ];
});



$factory->define(App\Product::class, function (Faker $faker){
  $fakePrice = rand(1000, 500000);
    return [
      'id' => strtoupper(str_random(5)) . '_' . rand(1000, 9999),
      'description' => $faker->words(4, true),
      'purchase_price' => $fakePrice,
      'sale_price' => $fakePrice  * 1.3,
      'url_image' => $faker->imageUrl(550, 300),
      'tax' => 0.19,
    ];
});


$factory->define(App\RepairProcess::class, function(Faker $faker){
    $option = ['Repair', 'Review', 'Replace', 'Recharge'];
    return[
      'name' => $option[rand(0, 3)] . ' ' . $faker->text(15),
    ];
});


$factory->define(App\Client::class, function (Faker $faker) {
    return [
      'id' => rand(800000000, 999999999) . '-' . rand(0, 9),
      'name' => $faker->company,
      'address' => $faker->address,
      'city' => rand(0, 1000),
      'cellphone' => '3' . rand(100000000, 999999999),
      'phone' => rand(1000000, 9999999),
      'contact_name' => $faker->name,
      'extension_number' => rand(1000, 9999),
    ];
});


$factory->define(App\OrderStatus::class, function(Faker $faker){
  $status = ['On hold', 'In Process', 'Rejected', 'Success'];
  return[
      'name' => $status[rand(0, 3)],
  ];
});


$factory->define(App\Supply::class, function(Faker $faker){
  $meassure = ['Gram', 'Kilogram', 'Liter', 'Mililiter'];
  return[
      'detail' => $faker->words(4, true),
      'unit_of_measurement' => $meassure[rand(0, 3)],
  ];
});


$factory->define(App\ServiceOrder::class, function(Faker $faker){
  $fakeClient = [
    '800607077-4', '802217458-6', '802570691-7', '803023600-1',
    '803193030-6', '804337547-7', '806941695-7', '811469263-6',
    '817808856-3', '820677023-2', '824901107-5', '827324844-1',
    '827581975-5', '829064050-5', '829316885-8', '843457184-0',
    '829332729-3', '831031408-4', '832602017-7', '833041791-8',
    '840658882-7', '841027911-1', '841822294-7', '848902581-4'];

  return[
    'date' => date('Y-m-d G:i:s'),
    'is_open' => true,
    'client_id' => $fakeClient[rand(0, 23)],
  ];
});
