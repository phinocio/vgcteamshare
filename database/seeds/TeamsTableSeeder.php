<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('teams')->delete();
        
        DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 1,
                'name' => 'Test',
                'description' => 'Test team woo',
                'format_id' => 1,
                'private' => 0,
                'created_at' => '2019-12-06 00:00:00',
                'updated_at' => '2019-12-06 00:00:00',
            ),
        ));
        
        
    }
}