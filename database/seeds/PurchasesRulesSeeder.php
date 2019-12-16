<?php

use Illuminate\Database\Seeder;

class PurchasesRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* \DB::table('purchasesrules')->insert([
             [
                 'purchase_id'   =>   1,
                 'supply_id'     =>   1,
                 'created_at'    => '2019-11-01',
                 'updated_at'    => '2019-11-01'
             ],
         ]);
        */

        $faker = \Faker\Factory::create();
        $purchases = \App\purchases::all();

        foreach ($purchases as $p) {
            for ($i = 0; $i < $faker->numberBetween(1, 5); $i++) {
                \DB::table('purchasesrules')->insert([
                    'purchase_id' => $p->id,
                    'supply_id' => $faker->numberBetween(1, 8),
                    'created_at' => $faker->dateTime,
                    'updated_at' => $faker->dateTime
                ]);
            }
        }
    }
}
