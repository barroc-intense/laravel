<?php

use Illuminate\Database\Seeder;

class leaseTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('lease_types')->insert([
            'name' => 'monthly',
            'name' => 'Quarter',
            'period' => '1',
            'period' => '3'

        ]);
    }
}
