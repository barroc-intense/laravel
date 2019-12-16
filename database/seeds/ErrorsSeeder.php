<?php

use Illuminate\Database\Seeder;

class ErrorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        $leases = \App\Lease::all();



        foreach($leases as $lease)
        {
            for($i = 0; $i < $faker->numberBetween(1, 10); $i++)
            {
                \DB::table('errors')->insert([
                [
                        'lease_id'      => $lease->id,
                        'name'          => $faker->name,
                        'description'   => $faker->text(191),
                        'created_at'    => $faker->dateTime,
                        'updated_at'    => $faker->dateTime
                    ]
                ]);
            }
        }
    }
}
