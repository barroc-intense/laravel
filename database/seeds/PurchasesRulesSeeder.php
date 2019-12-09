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
        \DB::table('purchasesrules')->insert([
            [
                'purchase_id'   =>   1,
                'supply_id'     =>   1,
                'created_at'    => '2019-11-01',
                'updated_at'    => '2019-11-01'
            ],
        ]);
    }
}
