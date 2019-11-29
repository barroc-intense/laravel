<?php

use App\Supplies;
use Illuminate\Database\Seeder;

class SuppliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplies = [
            [
                'name' => 'Rubber (10 mm) ',
                'price' => 0,39
            ],
            [
                'name' => 'Rubber(14 mm )  ',
                'price' => 0,45
            ],
            [
                'name' => 'Slang',
                'price' => 4,45
            ],
            [
                'name' => 'Voeding (elektra)',
                'price' => 68,69
            ],
            [
                'name' => 'Ontkalker',
                'price' => 4,00
            ],
            [
                'name' => 'Waterfilter   ',
                'price' => 299,45
            ],
            [
                'name' => 'Reservoir sensor ',
                'price' => 89,99
            ],
            [
                'name' => 'Druppelstop  ',
                'price' => 122,43
            ],
            [
                'name' => 'Electrische pomp',
                'price' => 478,59
            ],
            [
                'name' => 'Tandwiel (110mm)',
                'price' => 5,45
            ],
            [
                'name' => 'Zeef    ',
                'price' => 28,80
            ],
            [
                'name' => 'Tandwiel (70mm)',
                'price' =>5,25
            ],
            [
            'name' => 'Reiningsborsteltjes ',
            'price' => 8,45
        ],
        [
        'name' => 'Ontkalkingspijp ',
                'price' =>21,70
        ]
        ];

        foreach ($supplies as $supply) {

           Supplies::insert([
               'name' => $supply['name'],
                'price' => $supply['price'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
