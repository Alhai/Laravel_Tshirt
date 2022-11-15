<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            [
                'name' => 'Home',
                'route' => 'homepage',
                'ordering' => 1,
            ],
            [
                'name' => 'Men',
                'route' => 'Tshirt_Homme',
                'ordering' => 2,
            ],
            [
                'name' => 'Women',
                'route' => 'Tshirt_femme',
                'ordering' => 3,
            ]
        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        }
    }
    }

