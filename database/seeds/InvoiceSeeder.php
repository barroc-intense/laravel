<?php

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $leases = \App\Lease::all();

        foreach($leases as $lease)
        {
            for($i = 0; $i < $faker->numberBetween(1, 10); $i++)
            {
                \DB::table('invoices')->insert([
                    [
                        'lease_id'      => $lease->id,
                        'betaald_op'    => $faker->boolean ? $faker->dateTime : null,
                        'created_at'    => $faker->dateTime,
                        'updated_at'    => $faker->dateTime
                    ]
                ]);
            }
        }
    }
}
