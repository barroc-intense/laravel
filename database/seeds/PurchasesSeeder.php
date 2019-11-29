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
        \DB::table('purchases')->insert([
            [
                'user_id'       => 1,
                'created_at'    => '2019-11-01',
                'updated_at'    => '2019-11-01'
            ],
        ]);
    }

}
