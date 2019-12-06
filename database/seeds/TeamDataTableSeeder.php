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
                'pokemon_id' => 88,
                'evs' => '104 HP / 44 Atk / 100 Def / 108 SpA / 4 SpD / 96 Spe',
                'ivs' => '0 Atk',
                'ability_id' => 238,
                'item_id' => 13,
                'nature_id' => 25,
                'move1_id' => 189,
                'move2_id' => 89,
                'move3_id' => 136,
                'move4_id' => 146,
                'notes' => NULL,
                'created_at' => '2019-12-06 16:38:19',
                'updated_at' => '2019-12-06 16:38:19',
            ),
            1 => 
            array (
                'team_id' => 1,
                'pokemon_id' => 933,
                'evs' => '80 HP / 76 Def / 116 Spe',
                'ivs' => '',
                'ability_id' => 16,
                'item_id' => 22,
                'nature_id' => 15,
                'move1_id' => 15,
                'move2_id' => 192,
                'move3_id' => 157,
                'move4_id' => 37,
                'notes' => NULL,
                'created_at' => '2019-12-06 16:38:19',
                'updated_at' => '2019-12-06 16:38:19',
            ),
        ));
        
        
    }
}