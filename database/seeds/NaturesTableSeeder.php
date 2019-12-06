<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('natures')->delete();

        DB::table('natures')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Adamant',
                'increases' => 'Attack',
                'decreases' => 'Sp. Atk'
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Bashful',
                'increases' => '',
                'decreases' => ''
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Bold',
                'increases' => 'Defense',
                'decreases' => 'Attack'
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Brave',
                'increases' => 'Attack',
                'decreases' => 'Speed'
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Calm',
                'increases' => 'Sp. Def',
                'decreases' => 'Attack'
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Careful',
                'increases' => 'Sp. Def',
                'decreases' => 'Sp. Atk'
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Docile',
                'increases' => '',
                'decreases' => ''
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Gentle',
                'increases' => 'Sp. Def',
                'decreases' => 'Defense'
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Hardy',
                'increases' => '',
                'decreases' => ''
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Hasty',
                'increases' => 'Speed',
                'decreases' => 'Defense'
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Impish',
                'increases' => 'Defense',
                'decreases' => 'Sp. Atk'
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Jolly',
                'increases' => 'Speed',
                'decreases' => 'Sp. Atk'
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Lax',
                'increases' => 'Defense',
                'decreases' => 'Sp. Def'
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Lonely',
                'increases' => 'Attack',
                'decreases' => 'Defense'
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Mild',
                'increases' => 'Sp. Atk',
                'decreases' => 'Defense'
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Modest',
                'increases' => 'Sp. Atk',
                'decreases' => 'Attack'
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Naive',
                'increases' => 'Speed',
                'decreases' => 'Sp. Def'
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Naughty',
                'increases' => 'Attack',
                'decreases' => 'Sp. Def'
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Quiet',
                'increases' => 'Sp. Atk',
                'decreases' => 'Speed'
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Quirky',
                'increases' => '',
                'decreases' => ''
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Rash',
                'increases' => 'Sp. Atk',
                'decreases' => 'Sp. Def'
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Relaxed',
                'increases' => 'Defense',
                'decreases' => 'Speed'
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Sassy',
                'increases' => 'Sp. Def',
                'decreases' => 'Speed'
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Serious',
                'increases' => '',
                'decreases' => ''
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Timid',
                'increases' => 'Speed',
                'decreases' => 'Attack'
            ),
        ));
    }
}
