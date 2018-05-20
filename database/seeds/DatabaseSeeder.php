<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(App\Product::class)->times(300)->create();

        // factory(App\RepairProcess::class)->times(10)->create();

        //factory(App\Client::class)->times(100)->create();

        factory(App\ServiceOrder::class)->times(100)->create();
        //actory(App\User::class)->times(15)->create();
    }
}
