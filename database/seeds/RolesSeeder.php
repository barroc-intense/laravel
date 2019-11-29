<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'klant',
                'rank' => 1
            ],
            [
                'name' => 'Planner',
                'rank' => 2
            ],
            [
                'name' => 'Technische_dienst',
                'rank' => 3
            ],
            [
                'name' => 'Head_Maintenance',
                'rank' => 4
            ],
            [
                'name' => 'Medewerker_magazijn',
                'rank' => 5
            ],
            [
                'name' => 'inkoper',
                'rank' => 6
            ],
            [
                'name' => 'Head_Inkoop',
                'rank' => 7
            ],
            [
                'name' => 'Consultant',
                'rank' => 8
            ],
            [
                'name' => 'Head_Sales',
                'rank' => 9
            ],
            [
                'name' => 'Financiële_administratie',
                'rank' => 10
            ],
            [
                'name' => 'Head_Finance',
                'rank' => 11
            ],
            [
                'name' => 'CEO',
                'rank' => 12
            ]
        ];

        foreach ($roles as $role) {

            Role::insert([
                'name' => $role['name'],
                'rank' => $role['rank'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
