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

$factory->define(App\RepairedItem::class, function(Faker $faker){
  $fakeProductId = ['DRMSM-3096','DRMSM-4760','DRMSM-9797','RCLHP-2610',
       'RCLHP-8222','RCLSM-4728','RCLSM-6270','RCLSM-6657','RCLSM-9842',
       'RCLXR-8096','TGNHP-1074','TGNHP-4495','TGNSM-2789','TGNSM-3745','TGNSM-7591',];
  return[
    'product_id' => $fakeProductId[rand(0, 14)] ,
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
  $supplyIde = ['0QGQN3HA1UC9','1FT0VRGEU7YL','208ILFAEIIRW','2YVLCODGOCRY',
  '62TVPPOEQDQU','6GY46KCKHW4Q','7BMECFICOAOR','9O1RH5OWRGQO',
  'A5ESX6YV3BQM','BLQ73MBWAKT1','BLT0O0RSIODA','CX6MKFFUOWY1',
  'GETDUTH8MDFA','GGEAFSX6CEDD','GJTGKI3LS4GW','ITR6KUTPJCSB',
  'KFQLHDV7KUJB','KXACZKGAWFLC','MQ17IGLNIKZT','OB3BUOK2V8ME',
  'ONIJ7YG8WXVO','P8SIK5C8DHN6','Q1P2FZ9RDJPI','QA0UNR641HLA',
  'RZVXUHNUISYJ','SEZYHZI9ZZPV','SXLJK936BTHX','T9QT4LESC0SE',
  'TKLHKSW6FWQJ','UOEOUOYI4RUH','VE2NLDGQQRKJ','VHSYIDZKXNFO',
  'W08EEJGP288C','WMJFONFRD63L','XHHIUW910Z6B','XOVHWCFZNASU',
  'YSICZBDWPYHO','ZDB3N4PPP3MO','ZI8TE8PLA784','ZINP8Q5KBDQ0',];

  $fakeProductId = ['DRMSM-3096','DRMSM-4760','DRMSM-9797','RCLHP-2610',
  'RCLHP-8222','RCLSM-4728','RCLSM-6270','RCLSM-6657','RCLSM-9842',
  'RCLXR-8096','TGNHP-1074','TGNHP-4495','TGNSM-2789','TGNSM-3745','TGNSM-7591',];


  return[
    'supply_id'=> $supplyIde[rand(0, 39)],
    'product_id'=> $fakeProductId[rand(0, 14)],
    'repair_process_id'=> rand(0, 9),
    'quantity'=> rand(1, 100),
  ];
});
