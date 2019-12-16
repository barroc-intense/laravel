<?php

use Illuminate\Database\Seeder;

class PurchasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* \DB::table('purchases')->insert([
            [
                'user_id'       => 1,
                'created_at'    => '2019-11-01',
                'updated_at'    => '2019-11-01'
            ],
        ]);
       */

        $faker = \Faker\Factory::create();
        $buyers = \App\User::where('role_id', 6)->get();

        foreach($buyers as $user) {
            for($i = 0; $i < $faker->numberBetween(1, 20); $i++) {
                \DB::table('purchases')->insert([
                    'user_id'       => $user->id,
                    'created_at'    => $faker->dateTime,
                    'updated_at'    => $faker->dateTime
                ]);
            }
        }
    }

}