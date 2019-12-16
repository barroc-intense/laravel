<?php

use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $customers = \App\User::where('role_id', 1)->get();
        $sales = \App\User::where('role_id', 6)->get();

        foreach($customers as $user) {
            for($i = 0; $i < $faker->numberBetween(0, 3); $i++) {
                \DB::table('quotations')->insert([
                    [
                        'sales_id'          => $sales->random()->id,
                        'customer_id'       => $user->id,
                        'type'           => $faker->name,
                        'email'         => $faker->email,
                        'company_name'  => $faker->company,
                        'KVK'           => $faker->boolean,
                        'created_at'        => $faker->dateTime,
                        'updated_at'        => $faker->dateTime,
                    ]
                ]);
            }
        }
    }
}
