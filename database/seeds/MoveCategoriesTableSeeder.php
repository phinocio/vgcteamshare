<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoveCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('move_categories')->delete();
        
        DB::table('move_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Status',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Physical',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Special',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Z-Move',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Max Move',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'G-Max Move',
            ),
        ));
        
        
    }
}