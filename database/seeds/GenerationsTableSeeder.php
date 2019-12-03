<?php

use Illuminate\Database\Seeder;

class GenerationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('generations')->delete();
        
        \DB::table('generations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'I',
                'new_pokemon' => 151,
                'total_pokemon' => 151,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'II',
                'new_pokemon' => 100,
                'total_pokemon' => 251,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'III',
                'new_pokemon' => 135,
                'total_pokemon' => 386,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'IV',
                'new_pokemon' => 107,
                'total_pokemon' => 493,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'V',
                'new_pokemon' => 156,
                'total_pokemon' => 649,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'VI',
                'new_pokemon' => 72,
                'total_pokemon' => 721,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'VII',
                'new_pokemon' => 81,
                'total_pokemon' => 802,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'VIII',
                'new_pokemon' => 88,
                'total_pokemon' => 890,
            ),
        ));
        
        
    }
}