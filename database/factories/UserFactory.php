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
  $fakeID = ['TGNHP', 'TGNSM', 'RCLXR', 'RCLSM', 'RCLHP', 'DRMSM'];
  $fakePrice = rand(1000, 500000);
    return [
      'id' => $fakeID[rand(0, 5)] . '-' . rand(1000, 9999),
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
      'id' => strtoupper(str_random(12)),
      'detail' => $faker->words(4, true),
      'unit_of_measurement' => $meassure[rand(0, 3)],
  ];
});


$factory->define(App\ServiceOrder::class, function(Faker $faker){
  $fakeClient = ['800027314-0','800047734-4','800081275-6','800117232-1',
'800117502-5','800121414-3','800136382-9','800140844-2',
'800161748-5','800191750-7','800201620-5','800207871-5',
'800218679-8','800219752-9','800232883-9','800275356-8',
'800316845-3','800321673-6','800345832-5','800366019-1',
'800374524-3','800445304-1','800464655-3','800481109-4',
'800521938-4',];

  return[
    //'date' => date('Y-m-d G:i:s'),
    'is_open' => true,
    'client_id' => $fakeClient[rand(0, 24)],
  ];
});

$factory->define(App\RepairedItem::class, function(Faker $faker){
  $fakeProductId = ['DRMSM-1158','DRMSM-1230','DRMSM-1492','DRMSM-2460',
'DRMSM-2617','DRMSM-2692','DRMSM-2726','DRMSM-2923',
'DRMSM-3106','DRMSM-3490','DRMSM-3704','DRMSM-3787',
'DRMSM-3844','DRMSM-3866','DRMSM-3974','DRMSM-3997',
'DRMSM-4099','DRMSM-4311','DRMSM-4582','DRMSM-4820',
'DRMSM-4873','DRMSM-5208','DRMSM-5253','DRMSM-5545',
'DRMSM-5651',];
  return[
    'product_id' => $fakeProductId[rand(0, 24)] ,
    'serial_number' => strtoupper(str_random(12)),
  ];
});

$factory->define(App\WorkOrder::class, function(Faker $faker){
  return[
    'service_order_id' => rand(0, 99),
    'repaired_item_id' => rand(0, 99),
    'order_status_id' => 1,
    'description' => 'Texto de descripción ' . $faker->text(40),
    'remark' => 'Observaciones ' . $faker->text(20),
  ];
});

$factory->define(App\RequiredSupply::class, function(Faker $faker){
  $supplyIde = ['40WFG09IVSDK','5BNBQ6ET9XDQ','7ZQHF4CIUWCE','A30TBZCPSJVF',
  'BC24WI6TAX8A','BE3GGV4NDSGZ','BMFRLNMNDQPK','C6DHUBZ9U39A',
  'CO0BU83SBWVU','E19WTT8KRTOK','ESUBUGJFGLSP','FTEUSTMZO9RQ',
  'GE5XQERGTBXA','HFJV36SWLEKP','HQPUUNKCQV1Q','HYMQBQWMC0QZ',
  'IVZ5FITLFZ8P','K9MQV8YBZNZL','KA9BRZT2FI9A','KUFJUVE5XXWY',
  'MKVSEYVIP4ZE','N7CCFDMGOSNV','NHK6FS42LPGB','OGEMHVVXUEZF',
  'P27KSFAAD2NZ'];

  $fakeProductId = ['DRMSM-1158','DRMSM-1230','DRMSM-1492','DRMSM-2460',
  'DRMSM-2617','DRMSM-2692','DRMSM-2726','DRMSM-2923',
  'DRMSM-3106','DRMSM-3490','DRMSM-3704','DRMSM-3787',
  'DRMSM-3844','DRMSM-3866','DRMSM-3974','DRMSM-3997',
  'DRMSM-4099','DRMSM-4311','DRMSM-4582','DRMSM-4820',
  'DRMSM-4873','DRMSM-5208','DRMSM-5253','DRMSM-5545',
  'DRMSM-5651',];


  return[
    'supply_id'=> $supplyIde[rand(0, 24)],
    'product_id'=> $fakeProductId[rand(0, 24)],
    'repair_process_id'=> rand(0, 9),
    'quantity'=> rand(1, 100),
  ];
});
