<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuppliesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(LeaseSeeder::class);
        $this->call(ErrorsSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(leaseTypesSeeder::class);
        $this->call(NotesSeeder::class);
        $this->call(PurchasesSeeder::class);
        $this->call(PurchasesRulesSeeder::class);
        $this->call(QuotationSeeder::class);
        $this->call(CompanyDetailsSeeder::class);
        $this->call(Lease_rulesSeeder::class);
        $this->call(WorkOrdersSeeder::class);


    }
}
