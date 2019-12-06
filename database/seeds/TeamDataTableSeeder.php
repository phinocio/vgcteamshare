<?php

use Illuminate\Database\Seeder;

class TeamDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('team_data')->delete();
        
        \DB::table('team_data')->insert(array (
            0 => 
            array (
                'team_id' => 1,
                'pokemon_id' => 7,
                'evs' => 'EVs: 252 Atk / 4 SpD / 252 Spe',
                'ivs' => '',
                'item_id' => 286,
                'nature_id' => 25,
                'move1_id' => 1,
                'move2_id' => 2,
                'move3_id' => 3,
                'move4_id' => 4,
                'notes' => NULL,
                'created_at' => '2019-12-06 00:00:00',
                'updated_at' => '2019-12-06 00:00:00',
            ),
        ));
        
        
    }
}