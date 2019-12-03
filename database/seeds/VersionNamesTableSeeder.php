<?php

use Illuminate\Database\Seeder;

class VersionNamesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('version_names')->delete();
        
        \DB::table('version_names')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Blue',
                'generation_id' => 1,
                'region_id' => 1,
                'release_date' => '1998-09-28 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Red',
                'generation_id' => 1,
                'region_id' => 1,
                'release_date' => '1998-09-28 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Yellow',
                'generation_id' => 1,
                'region_id' => 1,
                'release_date' => '1999-10-18 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gold',
                'generation_id' => 2,
                'region_id' => 2,
                'release_date' => '2000-10-15 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Silver',
                'generation_id' => 2,
                'region_id' => 2,
                'release_date' => '2000-10-15 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Crystal',
                'generation_id' => 2,
                'region_id' => 2,
                'release_date' => '2001-07-29 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Ruby',
                'generation_id' => 3,
                'region_id' => 3,
                'release_date' => '2003-03-19 00:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Sapphire',
                'generation_id' => 3,
                'region_id' => 3,
                'release_date' => '2003-03-19 00:00:00',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Fire Red',
                'generation_id' => 3,
                'region_id' => 3,
                'release_date' => '2004-09-09 00:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Leaf Green',
                'generation_id' => 3,
                'region_id' => 3,
                'release_date' => '2004-09-09 00:00:00',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Emerald',
                'generation_id' => 3,
                'region_id' => 3,
                'release_date' => '2005-05-01 00:00:00',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Diamond',
                'generation_id' => 4,
                'region_id' => 4,
                'release_date' => '2007-04-22 00:00:00',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Pearl',
                'generation_id' => 4,
                'region_id' => 4,
                'release_date' => '2007-04-22 00:00:00',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Platinum',
                'generation_id' => 4,
                'region_id' => 4,
                'release_date' => '2009-03-22 00:00:00',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Heart Gold',
                'generation_id' => 4,
                'region_id' => 4,
                'release_date' => '2010-03-14 00:00:00',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Soul Silver',
                'generation_id' => 4,
                'region_id' => 4,
                'release_date' => '2010-03-14 00:00:00',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Black',
                'generation_id' => 5,
                'region_id' => 5,
                'release_date' => '2011-03-06 00:00:00',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'White',
                'generation_id' => 5,
                'region_id' => 5,
                'release_date' => '2011-03-06 00:00:00',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Black 2',
                'generation_id' => 5,
                'region_id' => 5,
                'release_date' => '2012-10-07 00:00:00',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'White 2',
                'generation_id' => 5,
                'region_id' => 5,
                'release_date' => '2012-10-07 00:00:00',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'X',
                'generation_id' => 6,
                'region_id' => 6,
                'release_date' => '2013-10-12 00:00:00',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Y',
                'generation_id' => 6,
                'region_id' => 6,
                'release_date' => '2013-10-12 00:00:00',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Alpha Sapphire',
                'generation_id' => 6,
                'region_id' => 3,
                'release_date' => '2019-12-02 20:33:22',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Omega Ruby',
                'generation_id' => 6,
                'region_id' => 3,
                'release_date' => '2019-12-02 20:33:28',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Sun',
                'generation_id' => 7,
                'region_id' => 7,
                'release_date' => '2019-12-02 20:35:07',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Moon',
                'generation_id' => 7,
                'region_id' => 7,
                'release_date' => '2019-12-02 20:35:07',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Ultra Sun',
                'generation_id' => 7,
                'region_id' => 7,
                'release_date' => '2019-12-02 20:35:07',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Ultra Moon',
                'generation_id' => 7,
                'region_id' => 7,
                'release_date' => '2019-12-02 20:35:07',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Sword',
                'generation_id' => 8,
                'region_id' => 8,
                'release_date' => '2019-12-02 20:35:07',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Shield',
                'generation_id' => 8,
                'region_id' => 8,
                'release_date' => '2019-12-02 20:35:16',
            ),
        ));
        
        
    }
}