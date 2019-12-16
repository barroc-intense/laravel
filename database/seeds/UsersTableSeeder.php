<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = \Faker\Factory::create();

        User::insert([
            'role_id' => 12,
            'name' => 'admin',
            'email' => 'admin@admin.nl',
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        for ($i = 0; $i < 100; $i++) {
            \App\User::insert([
                'email'         => $faker->safeEmail,
                'name'          => $faker->name,
                'password'      => Hash::make('barroc123'),
                'role_id'       => $faker->numberBetween(1, 11),
                'created_at'    => $faker->dateTime,
                'updated_at'    => $faker->dateTime
            ]);
        }
    }
}
