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

    }
}
