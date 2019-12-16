<?php

use Illuminate\Database\Seeder;

class LeaseSeeder extends Seeder
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
        $finances = \App\User::where('role_id', 10)->get();

        foreach($customers as $user) {
            for($i = 0; $i < $faker->numberBetween(1, 3); $i++) {
                \DB::table('leases')->insert([
                    'leaseType_id' => $faker->numberBetween(1, 2),
                    'customer_id'   => $user->id,
                    'finance_id'    => $finances->random()->id,
                    'created_at'    => $faker->dateTime,
                    'updated_at'    => $faker->dateTime
                ]);
            }
        }
    }
}
