<?php

use Illuminate\Database\Seeder;

class VersionGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('version_groups')->delete();
        
        \DB::table('version_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'red-blue',
                'generation_id' => 1,
                'region_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'yellow',
                'generation_id' => 1,
                'region_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'gold-silver',
                'generation_id' => 2,
                'region_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'crystal',
                'generation_id' => 2,
                'region_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ruby-sapphire',
                'generation_id' => 3,
                'region_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'fire-red-leaf-green',
                'generation_id' => 3,
                'region_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'emerald',
                'generation_id' => 3,
                'region_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'diamond-pearl',
                'generation_id' => 4,
                'region_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'platinum',
                'generation_id' => 4,
                'region_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'heart-gold-soul-silver',
                'generation_id' => 4,
                'region_id' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'black-white',
                'generation_id' => 5,
                'region_id' => 5,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'black2-white2',
                'generation_id' => 5,
                'region_id' => 5,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'x-y',
                'generation_id' => 6,
                'region_id' => 6,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'omega-ruby-alpha-sapphire',
                'generation_id' => 6,
                'region_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'sun-moon',
                'generation_id' => 7,
                'region_id' => 7,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'ultra-sun-ultra-moon',
                'generation_id' => 7,
                'region_id' => 7,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'sword-shield',
                'generation_id' => 8,
                'region_id' => 8,
            ),
        ));
        
        
    }
}