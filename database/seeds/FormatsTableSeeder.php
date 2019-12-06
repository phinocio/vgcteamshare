<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('formats')->delete();
        
        DB::table('formats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'VGC2020',
                'generation_id' => 8,
            ),
        ));
        
        
    }
}