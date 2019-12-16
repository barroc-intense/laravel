<?php

use Illuminate\Database\Seeder;

class CompanyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        $customers = \App\User::where('role_id', 7)->get();

        foreach($customers as $user) {
            \DB::table('companydetails')->insert([
                'user_id'       => $user->id,
                'address'       => $faker->streetAddress,
                'city'          => $faker->city,
                'postcode'      => $faker->postcode,
                'email'         => $faker->safeEmail,
                'telefoonnummer'=> $faker->phoneNumber,
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ]);
        }
    }
}
