<?php

use Illuminate\Database\Seeder;

class WorkOrdersSeeder extends Seeder
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
        $monteurs = \App\User::where('role_id', 3)->get();


            for($i = 0; $i < $faker->numberBetween(2, 10); $i++) {
                \DB::table('workorders')->insert([
                   [
                       'maintenance_id'          => $monteurs->random()->id,
                       'description'         => $faker->text(191),
                       'created_at' => $faker->dateTime,
                       'updated_at' => $faker->dateTime
                   ]
               ]);
            }
        }

}
