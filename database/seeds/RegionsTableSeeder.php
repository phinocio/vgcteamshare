<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('regions')->delete();
        
        DB::table('regions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Kanto',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Johto',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Hoenn',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sinnoh',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Unova',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Kalos',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Alola',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Galar',
            ),
        ));
        
        
    }
}