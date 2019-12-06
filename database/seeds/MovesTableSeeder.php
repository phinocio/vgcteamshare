<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('moves')->delete();
        
        DB::table('moves')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '10,000,000 Volt Thunderbolt',
                'generation_id' => 7,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Absorb',
                'generation_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Accelerock',
                'generation_id' => 7,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Acid Armor',
                'generation_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Acid Downpour',
                'generation_id' => 7,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Acid Spray',
                'generation_id' => 5,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Acid',
                'generation_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Acrobatics',
                'generation_id' => 5,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Acupressure',
                'generation_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Aerial Ace',
                'generation_id' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Aeroblast',
                'generation_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'After You',
                'generation_id' => 5,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Agility',
                'generation_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Air Cutter',
                'generation_id' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Air Slash',
                'generation_id' => 4,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'All-Out Pummeling',
                'generation_id' => 7,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Ally Switch',
                'generation_id' => 5,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Amnesia',
                'generation_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Anchor Shot',
                'generation_id' => 7,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Ancient Power',
                'generation_id' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Apple Acid',
                'generation_id' => 8,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Aqua Jet',
                'generation_id' => 4,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Aqua Ring',
                'generation_id' => 4,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Aqua Tail',
                'generation_id' => 4,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Arm Thrust',
                'generation_id' => 3,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Aromatherapy',
                'generation_id' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Aromatic Mist',
                'generation_id' => 6,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Assist',
                'generation_id' => 3,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Assurance',
                'generation_id' => 4,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Astonish',
                'generation_id' => 3,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Attack Order',
                'generation_id' => 4,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Attract',
                'generation_id' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Aura Sphere',
                'generation_id' => 4,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Aura Wheel',
                'generation_id' => 8,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Aurora Beam',
                'generation_id' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Aurora Veil',
                'generation_id' => 7,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Autotomize',
                'generation_id' => 5,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Avalanche',
                'generation_id' => 4,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Baby-Doll Eyes',
                'generation_id' => 6,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Baddy Bad',
                'generation_id' => 7,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Baneful Bunker',
                'generation_id' => 7,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Barrage',
                'generation_id' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Barrier',
                'generation_id' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Baton Pass',
                'generation_id' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Beak Blast',
                'generation_id' => 7,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Beat Up',
                'generation_id' => 2,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Behemoth Bash',
                'generation_id' => 8,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Behemoth Blade',
                'generation_id' => 8,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Belch',
                'generation_id' => 6,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Belly Drum',
                'generation_id' => 2,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Bestow',
                'generation_id' => 5,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Bide',
                'generation_id' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Bind',
                'generation_id' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Bite',
                'generation_id' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Black Hole Eclipse',
                'generation_id' => 7,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Blast Burn',
                'generation_id' => 3,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Blaze Kick',
                'generation_id' => 3,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Blizzard',
                'generation_id' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Block',
                'generation_id' => 3,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Bloom Doom',
                'generation_id' => 7,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Blue Flare',
                'generation_id' => 5,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Body Press',
                'generation_id' => 8,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Body Slam',
                'generation_id' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Bolt Beak',
                'generation_id' => 8,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Bolt Strike',
                'generation_id' => 5,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Bone Club',
                'generation_id' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Bone Rush',
                'generation_id' => 2,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Bonemerang',
                'generation_id' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Boomburst',
                'generation_id' => 6,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Bounce',
                'generation_id' => 3,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Bouncy Bubble',
                'generation_id' => 7,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Branch Poke',
                'generation_id' => 8,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Brave Bird',
                'generation_id' => 4,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Breaking Swipe',
                'generation_id' => 8,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Breakneck Blitz',
                'generation_id' => 7,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Brick Break',
                'generation_id' => 3,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Brine',
                'generation_id' => 4,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Brutal Swing',
                'generation_id' => 7,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Bubble Beam',
                'generation_id' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Bubble',
                'generation_id' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Bug Bite',
                'generation_id' => 4,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Bug Buzz',
                'generation_id' => 4,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Bulk Up',
                'generation_id' => 3,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Bulldoze',
                'generation_id' => 5,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Bullet Punch',
                'generation_id' => 4,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Bullet Seed',
                'generation_id' => 3,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Burn Up',
                'generation_id' => 7,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Buzzy Buzz',
                'generation_id' => 7,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Calm Mind',
                'generation_id' => 3,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Camouflage',
                'generation_id' => 3,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Captivate',
                'generation_id' => 4,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Catastropika',
                'generation_id' => 7,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Celebrate',
                'generation_id' => 6,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Charge Beam',
                'generation_id' => 4,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Charge',
                'generation_id' => 3,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Charm',
                'generation_id' => 2,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Chatter',
                'generation_id' => 4,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Chip Away',
                'generation_id' => 5,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Circle Throw',
                'generation_id' => 5,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Clamp',
                'generation_id' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Clanging Scales',
                'generation_id' => 7,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Clangorous Soul',
                'generation_id' => 8,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Clangorous Soulblaze',
                'generation_id' => 7,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Clear Smog',
                'generation_id' => 5,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Close Combat',
                'generation_id' => 4,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Coil',
                'generation_id' => 5,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Comet Punch',
                'generation_id' => 1,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Confide',
                'generation_id' => 6,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Confuse Ray',
                'generation_id' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Confusion',
                'generation_id' => 1,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Constrict',
                'generation_id' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Continental Crush',
                'generation_id' => 7,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Conversion 2',
                'generation_id' => 2,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Conversion',
                'generation_id' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Copycat',
                'generation_id' => 4,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Core Enforcer',
                'generation_id' => 7,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Corkscrew Crash',
                'generation_id' => 7,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Cosmic Power',
                'generation_id' => 3,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Cotton Guard',
                'generation_id' => 5,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Cotton Spore',
                'generation_id' => 2,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Counter',
                'generation_id' => 1,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Court Change',
                'generation_id' => 8,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Covet',
                'generation_id' => 3,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Crabhammer',
                'generation_id' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Crafty Shield',
                'generation_id' => 6,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Cross Chop',
                'generation_id' => 2,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Cross Poison',
                'generation_id' => 4,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Crunch',
                'generation_id' => 2,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Crush Claw',
                'generation_id' => 3,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Crush Grip',
                'generation_id' => 4,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Curse',
                'generation_id' => 2,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Cut',
                'generation_id' => 1,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Dark Pulse',
                'generation_id' => 4,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Dark Void',
                'generation_id' => 4,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Darkest Lariat',
                'generation_id' => 7,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Dazzling Gleam',
                'generation_id' => 6,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Decorate',
                'generation_id' => 8,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Defend Order',
                'generation_id' => 4,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Defense Curl',
                'generation_id' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Defog',
                'generation_id' => 4,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Destiny Bond',
                'generation_id' => 2,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Detect',
                'generation_id' => 2,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Devastating Drake',
                'generation_id' => 7,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Diamond Storm',
                'generation_id' => 6,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Dig',
                'generation_id' => 1,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Disable',
                'generation_id' => 1,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Disarming Voice',
                'generation_id' => 6,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Discharge',
                'generation_id' => 4,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Dive',
                'generation_id' => 3,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Dizzy Punch',
                'generation_id' => 1,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Doom Desire',
                'generation_id' => 3,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Double Hit',
                'generation_id' => 4,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Double Iron Bash',
                'generation_id' => 7,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Double Kick',
                'generation_id' => 1,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Double Slap',
                'generation_id' => 1,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Double Team',
                'generation_id' => 1,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Double-Edge',
                'generation_id' => 1,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Draco Meteor',
                'generation_id' => 4,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Dragon Ascent',
                'generation_id' => 6,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Dragon Breath',
                'generation_id' => 2,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Dragon Claw',
                'generation_id' => 3,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Dragon Dance',
                'generation_id' => 3,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Dragon Darts',
                'generation_id' => 8,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Dragon Hammer',
                'generation_id' => 7,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Dragon Pulse',
                'generation_id' => 4,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Dragon Rage',
                'generation_id' => 1,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Dragon Rush',
                'generation_id' => 4,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Dragon Tail',
                'generation_id' => 5,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Drain Punch',
                'generation_id' => 4,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Draining Kiss',
                'generation_id' => 6,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Dream Eater',
                'generation_id' => 1,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Drill Peck',
                'generation_id' => 1,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Drill Run',
                'generation_id' => 5,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Drum Beating',
                'generation_id' => 8,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Dual Chop',
                'generation_id' => 5,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Dynamax Cannon',
                'generation_id' => 8,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Dynamic Punch',
                'generation_id' => 2,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Earth Power',
                'generation_id' => 4,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Earthquake',
                'generation_id' => 1,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Echoed Voice',
                'generation_id' => 5,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Eerie Impulse',
                'generation_id' => 6,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Egg Bomb',
                'generation_id' => 1,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Electric Terrain',
                'generation_id' => 6,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Electrify',
                'generation_id' => 6,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Electro Ball',
                'generation_id' => 5,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Electroweb',
                'generation_id' => 5,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Embargo',
                'generation_id' => 4,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Ember',
                'generation_id' => 1,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Encore',
                'generation_id' => 2,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Endeavor',
                'generation_id' => 3,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Endure',
                'generation_id' => 2,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Energy Ball',
                'generation_id' => 4,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Entrainment',
                'generation_id' => 5,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Eruption',
                'generation_id' => 3,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Eternabeam',
                'generation_id' => 8,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Explosion',
                'generation_id' => 1,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Extrasensory',
                'generation_id' => 3,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Extreme Evoboost',
                'generation_id' => 7,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Extreme Speed',
                'generation_id' => 2,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Facade',
                'generation_id' => 3,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Fairy Lock',
                'generation_id' => 6,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Fairy Wind',
                'generation_id' => 6,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Fake Out',
                'generation_id' => 3,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Fake Tears',
                'generation_id' => 3,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'False Surrender',
                'generation_id' => 8,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'False Swipe',
                'generation_id' => 2,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Feather Dance',
                'generation_id' => 3,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Feint Attack',
                'generation_id' => 2,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Feint',
                'generation_id' => 4,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Fell Stinger',
                'generation_id' => 6,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Fiery Dance',
                'generation_id' => 5,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Final Gambit',
                'generation_id' => 5,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Fire Blast',
                'generation_id' => 1,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Fire Fang',
                'generation_id' => 4,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Fire Lash',
                'generation_id' => 7,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Fire Pledge',
                'generation_id' => 5,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Fire Punch',
                'generation_id' => 1,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Fire Spin',
                'generation_id' => 1,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'First Impression',
                'generation_id' => 7,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Fishious Rend',
                'generation_id' => 8,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Fissure',
                'generation_id' => 1,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Flail',
                'generation_id' => 2,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Flame Burst',
                'generation_id' => 5,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Flame Charge',
                'generation_id' => 5,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Flame Wheel',
                'generation_id' => 2,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Flamethrower',
                'generation_id' => 1,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Flare Blitz',
                'generation_id' => 4,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Flash Cannon',
                'generation_id' => 4,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Flash',
                'generation_id' => 1,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Flatter',
                'generation_id' => 3,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Fleur Cannon',
                'generation_id' => 7,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Fling',
                'generation_id' => 4,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Floaty Fall',
                'generation_id' => 7,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Floral Healing',
                'generation_id' => 7,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Flower Shield',
                'generation_id' => 6,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Fly',
                'generation_id' => 1,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Flying Press',
                'generation_id' => 6,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Focus Blast',
                'generation_id' => 4,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Focus Energy',
                'generation_id' => 1,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Focus Punch',
                'generation_id' => 3,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Follow Me',
                'generation_id' => 3,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Force Palm',
                'generation_id' => 4,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Foresight',
                'generation_id' => 2,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Forest\'s Curse',
                'generation_id' => 6,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Foul Play',
                'generation_id' => 5,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Freeze Shock',
                'generation_id' => 5,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Freeze-Dry',
                'generation_id' => 6,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Freezy Frost',
                'generation_id' => 7,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Frenzy Plant',
                'generation_id' => 3,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Frost Breath',
                'generation_id' => 5,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Frustration',
                'generation_id' => 2,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Fury Attack',
                'generation_id' => 1,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Fury Cutter',
                'generation_id' => 2,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Fury Swipes',
                'generation_id' => 1,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Fusion Bolt',
                'generation_id' => 5,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Fusion Flare',
                'generation_id' => 5,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Future Sight',
                'generation_id' => 2,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'G-Max Befuddle',
                'generation_id' => 8,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'G-Max Centiferno',
                'generation_id' => 8,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'G-Max Chi Strike',
                'generation_id' => 8,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'G-Max Cuddle',
                'generation_id' => 8,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'G-Max Depletion',
                'generation_id' => 8,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'G-Max Finale',
                'generation_id' => 8,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'G-Max Foam Burst',
                'generation_id' => 8,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'G-Max Gold Rush',
                'generation_id' => 8,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'G-Max Gravitas',
                'generation_id' => 8,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'G-Max Malodor',
                'generation_id' => 8,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'G-Max Meltdown',
                'generation_id' => 8,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'G-Max Replenish',
                'generation_id' => 8,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'G-Max Resonance',
                'generation_id' => 8,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'G-Max Sandblast',
                'generation_id' => 8,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'G-Max Smite',
                'generation_id' => 8,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'G-Max Snooze',
                'generation_id' => 8,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'G-Max Steelsurge',
                'generation_id' => 8,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'G-Max Stonesurge',
                'generation_id' => 8,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'G-Max Stun Shock',
                'generation_id' => 8,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'G-Max Sweetness',
                'generation_id' => 8,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'G-Max Tartness',
                'generation_id' => 8,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'G-Max Terror',
                'generation_id' => 8,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'G-Max Volcalith',
                'generation_id' => 8,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'G-Max Volt Crash',
                'generation_id' => 8,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'G-Max Wildfire',
                'generation_id' => 8,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'G-Max Wind Rage',
                'generation_id' => 8,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Gastro Acid',
                'generation_id' => 4,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Gear Grind',
                'generation_id' => 5,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Gear Up',
                'generation_id' => 7,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Genesis Supernova',
                'generation_id' => 7,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Geomancy',
                'generation_id' => 6,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Giga Drain',
                'generation_id' => 2,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Giga Impact',
                'generation_id' => 4,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Gigavolt Havoc',
                'generation_id' => 7,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Glaciate',
                'generation_id' => 5,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Glare',
                'generation_id' => 1,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Glitzy Glow',
                'generation_id' => 7,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Grass Knot',
                'generation_id' => 4,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Grass Pledge',
                'generation_id' => 5,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Grass Whistle',
                'generation_id' => 3,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Grassy Terrain',
                'generation_id' => 6,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Grav Apple',
                'generation_id' => 8,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Gravity',
                'generation_id' => 4,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Growl',
                'generation_id' => 1,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Growth',
                'generation_id' => 1,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Grudge',
                'generation_id' => 3,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Guard Split',
                'generation_id' => 5,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Guard Swap',
                'generation_id' => 4,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Guardian of Alola',
                'generation_id' => 7,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Guillotine',
                'generation_id' => 1,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Gunk Shot',
                'generation_id' => 4,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Gust',
                'generation_id' => 1,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Gyro Ball',
                'generation_id' => 4,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Hail',
                'generation_id' => 3,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'Hammer Arm',
                'generation_id' => 4,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Happy Hour',
                'generation_id' => 6,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Harden',
                'generation_id' => 1,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Haze',
                'generation_id' => 1,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Head Charge',
                'generation_id' => 5,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Head Smash',
                'generation_id' => 4,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Headbutt',
                'generation_id' => 1,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Heal Bell',
                'generation_id' => 2,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Heal Block',
                'generation_id' => 4,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Heal Order',
                'generation_id' => 4,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Heal Pulse',
                'generation_id' => 5,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Healing Wish',
                'generation_id' => 4,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Heart Stamp',
                'generation_id' => 5,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Heart Swap',
                'generation_id' => 4,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Heat Crash',
                'generation_id' => 5,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Heat Wave',
                'generation_id' => 3,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Heavy Slam',
                'generation_id' => 5,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Helping Hand',
                'generation_id' => 3,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Hex',
                'generation_id' => 5,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Hidden Power',
                'generation_id' => 2,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'High Horsepower',
                'generation_id' => 7,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'High Jump Kick',
                'generation_id' => 1,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Hold Back',
                'generation_id' => 6,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Hold Hands',
                'generation_id' => 6,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Hone Claws',
                'generation_id' => 5,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Horn Attack',
                'generation_id' => 1,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Horn Drill',
                'generation_id' => 1,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Horn Leech',
                'generation_id' => 5,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Howl',
                'generation_id' => 3,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Hurricane',
                'generation_id' => 5,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Hydro Cannon',
                'generation_id' => 3,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Hydro Pump',
                'generation_id' => 1,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Hydro Vortex',
                'generation_id' => 7,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Hyper Beam',
                'generation_id' => 1,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Hyper Fang',
                'generation_id' => 1,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Hyper Voice',
                'generation_id' => 3,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Hyperspace Fury',
                'generation_id' => 6,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Hyperspace Hole',
                'generation_id' => 6,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Hypnosis',
                'generation_id' => 1,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Ice Ball',
                'generation_id' => 3,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Ice Beam',
                'generation_id' => 1,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Ice Burn',
                'generation_id' => 5,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Ice Fang',
                'generation_id' => 4,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Ice Hammer',
                'generation_id' => 7,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Ice Punch',
                'generation_id' => 1,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Ice Shard',
                'generation_id' => 4,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Icicle Crash',
                'generation_id' => 5,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Icicle Spear',
                'generation_id' => 3,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Icy Wind',
                'generation_id' => 2,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Imprison',
                'generation_id' => 3,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Incinerate',
                'generation_id' => 5,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Inferno Overdrive',
                'generation_id' => 7,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Inferno',
                'generation_id' => 5,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Infestation',
                'generation_id' => 6,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Ingrain',
                'generation_id' => 3,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Instruct',
                'generation_id' => 7,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Ion Deluge',
                'generation_id' => 6,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Iron Defense',
                'generation_id' => 3,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Iron Head',
                'generation_id' => 4,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Iron Tail',
                'generation_id' => 2,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Jaw Lock',
                'generation_id' => 8,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Judgment',
                'generation_id' => 4,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Jump Kick',
                'generation_id' => 1,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Karate Chop',
                'generation_id' => 1,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Kinesis',
                'generation_id' => 1,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'King\'s Shield',
                'generation_id' => 6,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Knock Off',
                'generation_id' => 3,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Land\'s Wrath',
                'generation_id' => 6,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Laser Focus',
                'generation_id' => 7,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Last Resort',
                'generation_id' => 4,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Lava Plume',
                'generation_id' => 4,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Leaf Blade',
                'generation_id' => 3,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'Leaf Storm',
                'generation_id' => 4,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Leaf Tornado',
                'generation_id' => 5,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Leafage',
                'generation_id' => 7,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Leech Life',
                'generation_id' => 1,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Leech Seed',
                'generation_id' => 1,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Leer',
                'generation_id' => 1,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Let\'s Snuggle Forever',
                'generation_id' => 7,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Lick',
                'generation_id' => 1,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Life Dew',
                'generation_id' => 8,
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Light of Ruin',
                'generation_id' => 6,
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Light Screen',
                'generation_id' => 1,
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Light That Burns the Sky',
                'generation_id' => 7,
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Liquidation',
                'generation_id' => 7,
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Lock-On',
                'generation_id' => 2,
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Lovely Kiss',
                'generation_id' => 1,
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Low Kick',
                'generation_id' => 1,
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Low Sweep',
                'generation_id' => 5,
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Lucky Chant',
                'generation_id' => 4,
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Lunar Dance',
                'generation_id' => 4,
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Lunge',
                'generation_id' => 7,
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Luster Purge',
                'generation_id' => 3,
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Mach Punch',
                'generation_id' => 2,
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'Magic Coat',
                'generation_id' => 3,
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Magic Powder',
                'generation_id' => 8,
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Magic Room',
                'generation_id' => 5,
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Magical Leaf',
                'generation_id' => 3,
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Magma Storm',
                'generation_id' => 4,
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'Magnet Bomb',
                'generation_id' => 4,
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'Magnet Rise',
                'generation_id' => 4,
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'Magnetic Flux',
                'generation_id' => 6,
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'Magnitude',
                'generation_id' => 2,
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Malicious Moonsault',
                'generation_id' => 7,
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Mat Block',
                'generation_id' => 6,
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Max Airstream',
                'generation_id' => 8,
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Max Darkness',
                'generation_id' => 8,
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Max Flare',
                'generation_id' => 8,
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'Max Flutterby',
                'generation_id' => 8,
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'Max Geyser',
                'generation_id' => 8,
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'Max Guard',
                'generation_id' => 8,
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Max Hailstorm',
                'generation_id' => 8,
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Max Knuckle',
                'generation_id' => 8,
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'Max Lightning',
                'generation_id' => 8,
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Max Mindstorm',
                'generation_id' => 8,
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Max Ooze',
                'generation_id' => 8,
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'Max Overgrowth',
                'generation_id' => 8,
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Max Phantasm',
                'generation_id' => 8,
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Max Quake',
                'generation_id' => 8,
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Max Rockfall',
                'generation_id' => 8,
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Max Starfall',
                'generation_id' => 8,
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Max Steelspike',
                'generation_id' => 8,
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'Max Strike',
                'generation_id' => 8,
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Max Wyrmwind',
                'generation_id' => 8,
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Me First',
                'generation_id' => 4,
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Mean Look',
                'generation_id' => 2,
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Meditate',
                'generation_id' => 1,
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Mega Drain',
                'generation_id' => 1,
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Mega Kick',
                'generation_id' => 1,
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Mega Punch',
                'generation_id' => 1,
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Megahorn',
                'generation_id' => 2,
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Memento',
                'generation_id' => 3,
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Menacing Moonraze Maelstrom',
                'generation_id' => 7,
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'Metal Burst',
                'generation_id' => 4,
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'Metal Claw',
                'generation_id' => 2,
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'Metal Sound',
                'generation_id' => 3,
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'Meteor Assault',
                'generation_id' => 8,
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'Meteor Mash',
                'generation_id' => 3,
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'Metronome',
                'generation_id' => 1,
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Milk Drink',
                'generation_id' => 2,
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Mimic',
                'generation_id' => 1,
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'Mind Blown',
                'generation_id' => 7,
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Mind Reader',
                'generation_id' => 2,
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Minimize',
                'generation_id' => 1,
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Miracle Eye',
                'generation_id' => 4,
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Mirror Coat',
                'generation_id' => 2,
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'Mirror Move',
                'generation_id' => 1,
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Mirror Shot',
                'generation_id' => 4,
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'Mist Ball',
                'generation_id' => 3,
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Mist',
                'generation_id' => 1,
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'Misty Terrain',
                'generation_id' => 6,
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Moonblast',
                'generation_id' => 6,
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Moongeist Beam',
                'generation_id' => 7,
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Moonlight',
                'generation_id' => 2,
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'Morning Sun',
                'generation_id' => 2,
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'Mud Bomb',
                'generation_id' => 4,
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Mud Shot',
                'generation_id' => 3,
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Mud Sport',
                'generation_id' => 3,
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Mud-Slap',
                'generation_id' => 2,
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Muddy Water',
                'generation_id' => 3,
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Multi-Attack',
                'generation_id' => 7,
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Mystical Fire',
                'generation_id' => 6,
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Nasty Plot',
                'generation_id' => 4,
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Natural Gift',
                'generation_id' => 4,
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'Nature Power',
                'generation_id' => 3,
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'Nature\'s Madness',
                'generation_id' => 7,
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'Needle Arm',
                'generation_id' => 3,
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Never-Ending Nightmare',
                'generation_id' => 7,
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Night Daze',
                'generation_id' => 5,
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'Night Shade',
                'generation_id' => 1,
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Night Slash',
                'generation_id' => 4,
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'Nightmare',
                'generation_id' => 2,
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'No Retreat',
                'generation_id' => 8,
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Noble Roar',
                'generation_id' => 6,
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'Nuzzle',
                'generation_id' => 6,
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Oblivion Wing',
                'generation_id' => 6,
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Obstruct',
                'generation_id' => 8,
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'Oceanic Operetta',
                'generation_id' => 7,
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Octazooka',
                'generation_id' => 2,
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Octolock',
                'generation_id' => 8,
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Odor Sleuth',
                'generation_id' => 3,
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Ominous Wind',
                'generation_id' => 4,
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Origin Pulse',
                'generation_id' => 6,
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Outrage',
                'generation_id' => 2,
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Overdrive',
                'generation_id' => 8,
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Overheat',
                'generation_id' => 3,
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Pain Split',
                'generation_id' => 2,
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Parabolic Charge',
                'generation_id' => 6,
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'Parting Shot',
                'generation_id' => 6,
            ),
        ));
        DB::table('moves')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Pay Day',
                'generation_id' => 1,
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Payback',
                'generation_id' => 4,
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'Peck',
                'generation_id' => 1,
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'Perish Song',
                'generation_id' => 2,
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Petal Blizzard',
                'generation_id' => 6,
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Petal Dance',
                'generation_id' => 1,
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'Phantom Force',
                'generation_id' => 6,
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Photon Geyser',
                'generation_id' => 7,
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'Pika Papow',
                'generation_id' => 7,
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Pin Missile',
                'generation_id' => 1,
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Plasma Fists',
                'generation_id' => 7,
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'Play Nice',
                'generation_id' => 6,
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'Play Rough',
                'generation_id' => 6,
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Pluck',
                'generation_id' => 4,
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Poison Fang',
                'generation_id' => 3,
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Poison Gas',
                'generation_id' => 1,
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Poison Jab',
                'generation_id' => 4,
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Poison Powder',
                'generation_id' => 1,
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'Poison Sting',
                'generation_id' => 1,
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'Poison Tail',
                'generation_id' => 3,
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'Pollen Puff',
                'generation_id' => 7,
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'Pound',
                'generation_id' => 1,
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Powder Snow',
                'generation_id' => 2,
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'Powder',
                'generation_id' => 6,
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Power Gem',
                'generation_id' => 4,
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Power Split',
                'generation_id' => 5,
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'Power Swap',
                'generation_id' => 4,
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'Power Trick',
                'generation_id' => 4,
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'Power Trip',
                'generation_id' => 7,
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'Power Whip',
                'generation_id' => 4,
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'Power-Up Punch',
                'generation_id' => 6,
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'Precipice Blades',
                'generation_id' => 6,
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'Present',
                'generation_id' => 2,
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'Prismatic Laser',
                'generation_id' => 7,
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Protect',
                'generation_id' => 2,
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'Psybeam',
                'generation_id' => 1,
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'Psych Up',
                'generation_id' => 2,
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Psychic Fangs',
                'generation_id' => 7,
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Psychic Terrain',
                'generation_id' => 7,
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'Psychic',
                'generation_id' => 1,
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'Psycho Boost',
                'generation_id' => 3,
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'Psycho Cut',
                'generation_id' => 4,
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'Psycho Shift',
                'generation_id' => 4,
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'Psyshock',
                'generation_id' => 5,
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'Psystrike',
                'generation_id' => 5,
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'Psywave',
                'generation_id' => 1,
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'Pulverizing Pancake',
                'generation_id' => 7,
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'Punishment',
                'generation_id' => 4,
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'Purify',
                'generation_id' => 7,
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'Pursuit',
                'generation_id' => 2,
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'Pyro Ball',
                'generation_id' => 8,
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'Quash',
                'generation_id' => 5,
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'Quick Attack',
                'generation_id' => 1,
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'Quick Guard',
                'generation_id' => 5,
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'Quiver Dance',
                'generation_id' => 5,
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'Rage Powder',
                'generation_id' => 5,
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'Rage',
                'generation_id' => 1,
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'Rain Dance',
                'generation_id' => 2,
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'Rapid Spin',
                'generation_id' => 2,
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'Razor Leaf',
                'generation_id' => 1,
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'Razor Shell',
                'generation_id' => 5,
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'Razor Wind',
                'generation_id' => 1,
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'Recover',
                'generation_id' => 1,
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'Recycle',
                'generation_id' => 3,
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'Reflect Type',
                'generation_id' => 5,
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'Reflect',
                'generation_id' => 1,
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'Refresh',
                'generation_id' => 3,
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'Relic Song',
                'generation_id' => 5,
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'Rest',
                'generation_id' => 1,
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'Retaliate',
                'generation_id' => 5,
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'Return',
                'generation_id' => 2,
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'Revelation Dance',
                'generation_id' => 7,
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'Revenge',
                'generation_id' => 3,
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'Reversal',
                'generation_id' => 2,
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'Roar of Time',
                'generation_id' => 4,
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'Roar',
                'generation_id' => 1,
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'Rock Blast',
                'generation_id' => 3,
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'Rock Climb',
                'generation_id' => 4,
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'Rock Polish',
                'generation_id' => 4,
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'Rock Slide',
                'generation_id' => 1,
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'Rock Smash',
                'generation_id' => 2,
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'Rock Throw',
                'generation_id' => 1,
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'Rock Tomb',
                'generation_id' => 3,
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'Rock Wrecker',
                'generation_id' => 4,
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'Role Play',
                'generation_id' => 3,
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'Rolling Kick',
                'generation_id' => 1,
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'Rollout',
                'generation_id' => 2,
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'Roost',
                'generation_id' => 4,
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'Rototiller',
                'generation_id' => 6,
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'Round',
                'generation_id' => 5,
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'Sacred Fire',
                'generation_id' => 2,
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'Sacred Sword',
                'generation_id' => 5,
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'Safeguard',
                'generation_id' => 2,
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'Sand Attack',
                'generation_id' => 1,
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'Sand Tomb',
                'generation_id' => 3,
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'Sandstorm',
                'generation_id' => 2,
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'Sappy Seed',
                'generation_id' => 7,
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'Savage Spin-Out',
                'generation_id' => 7,
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'Scald',
                'generation_id' => 5,
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'Scary Face',
                'generation_id' => 2,
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'Scratch',
                'generation_id' => 1,
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'Screech',
                'generation_id' => 1,
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'Searing Shot',
                'generation_id' => 5,
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'Searing Sunraze Smash',
                'generation_id' => 7,
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'Secret Power',
                'generation_id' => 3,
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'Secret Sword',
                'generation_id' => 5,
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'Seed Bomb',
                'generation_id' => 4,
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'Seed Flare',
                'generation_id' => 4,
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'Seismic Toss',
                'generation_id' => 1,
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'Self-Destruct',
                'generation_id' => 1,
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'Shadow Ball',
                'generation_id' => 2,
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'Shadow Bone',
                'generation_id' => 7,
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'Shadow Claw',
                'generation_id' => 4,
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'Shadow Force',
                'generation_id' => 4,
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'Shadow Punch',
                'generation_id' => 3,
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'Shadow Sneak',
                'generation_id' => 4,
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'Sharpen',
                'generation_id' => 1,
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'Shattered Psyche',
                'generation_id' => 7,
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'Sheer Cold',
                'generation_id' => 3,
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'Shell Smash',
                'generation_id' => 5,
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'Shell Trap',
                'generation_id' => 7,
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'Shift Gear',
                'generation_id' => 5,
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'Shock Wave',
                'generation_id' => 3,
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'Shore Up',
                'generation_id' => 7,
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'Signal Beam',
                'generation_id' => 3,
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'Silver Wind',
                'generation_id' => 3,
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'Simple Beam',
                'generation_id' => 5,
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'Sing',
                'generation_id' => 1,
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'Sinister Arrow Raid',
                'generation_id' => 7,
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'Sizzly Slide',
                'generation_id' => 7,
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'Sketch',
                'generation_id' => 2,
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'Skill Swap',
                'generation_id' => 3,
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'Skull Bash',
                'generation_id' => 1,
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'Sky Attack',
                'generation_id' => 1,
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'Sky Drop',
                'generation_id' => 5,
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'Sky Uppercut',
                'generation_id' => 3,
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'Slack Off',
                'generation_id' => 3,
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'Slam',
                'generation_id' => 1,
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'Slash',
                'generation_id' => 1,
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'Sleep Powder',
                'generation_id' => 1,
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'Sleep Talk',
                'generation_id' => 2,
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'Sludge Bomb',
                'generation_id' => 2,
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'Sludge Wave',
                'generation_id' => 5,
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'Sludge',
                'generation_id' => 1,
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'Smack Down',
                'generation_id' => 5,
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'Smart Strike',
                'generation_id' => 7,
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'Smelling Salts',
                'generation_id' => 3,
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'Smog',
                'generation_id' => 1,
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'Smokescreen',
                'generation_id' => 1,
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'Snap Trap',
                'generation_id' => 8,
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'Snarl',
                'generation_id' => 5,
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'Snatch',
                'generation_id' => 3,
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'Snipe Shot',
                'generation_id' => 8,
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'Snore',
                'generation_id' => 2,
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'Soak',
                'generation_id' => 5,
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'Soft-Boiled',
                'generation_id' => 1,
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'Solar Beam',
                'generation_id' => 1,
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'Solar Blade',
                'generation_id' => 7,
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'Sonic Boom',
                'generation_id' => 1,
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'Soul-Stealing 7-Star Strike',
                'generation_id' => 7,
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'Spacial Rend',
                'generation_id' => 4,
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'Spark',
                'generation_id' => 2,
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'Sparkling Aria',
                'generation_id' => 7,
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'Sparkly Swirl',
                'generation_id' => 7,
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'Spectral Thief',
                'generation_id' => 7,
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'Speed Swap',
                'generation_id' => 7,
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'Spider Web',
                'generation_id' => 2,
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'Spike Cannon',
                'generation_id' => 1,
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'Spikes',
                'generation_id' => 2,
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'Spiky Shield',
                'generation_id' => 6,
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'Spirit Break',
                'generation_id' => 8,
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'Spirit Shackle',
                'generation_id' => 7,
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'Spit Up',
                'generation_id' => 3,
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'Spite',
                'generation_id' => 2,
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'Splash',
                'generation_id' => 1,
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'Splintered Stormshards',
                'generation_id' => 7,
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'Splishy Splash',
                'generation_id' => 7,
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'Spore',
                'generation_id' => 1,
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'Spotlight',
                'generation_id' => 7,
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'Stealth Rock',
                'generation_id' => 4,
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'Steam Eruption',
                'generation_id' => 6,
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'Steamroller',
                'generation_id' => 5,
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'Steel Beam',
                'generation_id' => 8,
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'Steel Wing',
                'generation_id' => 2,
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'Sticky Web',
                'generation_id' => 6,
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'Stockpile',
                'generation_id' => 3,
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'Stoked Sparksurfer',
                'generation_id' => 7,
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'Stomp',
                'generation_id' => 1,
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'Stomping Tantrum',
                'generation_id' => 7,
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'Stone Edge',
                'generation_id' => 4,
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'Stored Power',
                'generation_id' => 5,
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'Storm Throw',
                'generation_id' => 5,
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'Strange Steam',
                'generation_id' => 8,
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'Strength Sap',
                'generation_id' => 7,
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'Strength',
                'generation_id' => 1,
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'String Shot',
                'generation_id' => 1,
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'Struggle Bug',
                'generation_id' => 5,
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'Struggle',
                'generation_id' => 1,
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'Stuff Cheeks',
                'generation_id' => 8,
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'Stun Spore',
                'generation_id' => 1,
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'Submission',
                'generation_id' => 1,
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'Substitute',
                'generation_id' => 1,
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'Subzero Slammer',
                'generation_id' => 7,
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'Sucker Punch',
                'generation_id' => 4,
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'Sunny Day',
                'generation_id' => 2,
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'Sunsteel Strike',
                'generation_id' => 7,
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'Super Fang',
                'generation_id' => 1,
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'Superpower',
                'generation_id' => 3,
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'Supersonic Skystrike',
                'generation_id' => 7,
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'Supersonic',
                'generation_id' => 1,
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'Surf',
                'generation_id' => 1,
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'Swagger',
                'generation_id' => 2,
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'Swallow',
                'generation_id' => 3,
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'Sweet Kiss',
                'generation_id' => 2,
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'Sweet Scent',
                'generation_id' => 2,
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'Swift',
                'generation_id' => 1,
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'Switcheroo',
                'generation_id' => 4,
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'Swords Dance',
                'generation_id' => 1,
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'Synchronoise',
                'generation_id' => 5,
            ),
            219 => 
            array (
                'id' => 720,
                'name' => 'Synthesis',
                'generation_id' => 2,
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'Tackle',
                'generation_id' => 1,
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'Tail Glow',
                'generation_id' => 3,
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'Tail Slap',
                'generation_id' => 5,
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'Tail Whip',
                'generation_id' => 1,
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'Tailwind',
                'generation_id' => 4,
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'Take Down',
                'generation_id' => 1,
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'Tar Shot',
                'generation_id' => 8,
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'Taunt',
                'generation_id' => 3,
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'Tearful Look',
                'generation_id' => 7,
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'Teatime',
                'generation_id' => 8,
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'Techno Blast',
                'generation_id' => 5,
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'Tectonic Rage',
                'generation_id' => 7,
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'Teeter Dance',
                'generation_id' => 3,
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'Telekinesis',
                'generation_id' => 5,
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'Teleport',
                'generation_id' => 1,
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'Thief',
                'generation_id' => 2,
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'Thousand Arrows',
                'generation_id' => 6,
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'Thousand Waves',
                'generation_id' => 6,
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'Thrash',
                'generation_id' => 1,
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'Throat Chop',
                'generation_id' => 7,
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'Thunder Fang',
                'generation_id' => 4,
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'Thunder Punch',
                'generation_id' => 1,
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'Thunder Shock',
                'generation_id' => 1,
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'Thunder Wave',
                'generation_id' => 1,
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'Thunder',
                'generation_id' => 1,
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'Thunderbolt',
                'generation_id' => 1,
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'Tickle',
                'generation_id' => 3,
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'Topsy-Turvy',
                'generation_id' => 6,
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'Torment',
                'generation_id' => 3,
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'Toxic Spikes',
                'generation_id' => 4,
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'Toxic Thread',
                'generation_id' => 7,
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'Toxic',
                'generation_id' => 1,
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'Transform',
                'generation_id' => 1,
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'Tri Attack',
                'generation_id' => 1,
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'Trick Room',
                'generation_id' => 4,
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'Trick-or-Treat',
                'generation_id' => 6,
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'Trick',
                'generation_id' => 3,
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'Triple Kick',
                'generation_id' => 2,
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'Trop Kick',
                'generation_id' => 7,
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'Trump Card',
                'generation_id' => 4,
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'Twineedle',
                'generation_id' => 1,
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'Twinkle Tackle',
                'generation_id' => 7,
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'Twister',
                'generation_id' => 2,
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'U-Turn',
                'generation_id' => 4,
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'Uproar',
                'generation_id' => 3,
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'V-Create',
                'generation_id' => 5,
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'Vacuum Wave',
                'generation_id' => 4,
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'Veevee Volley',
                'generation_id' => 7,
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'Venom Drench',
                'generation_id' => 6,
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'Venoshock',
                'generation_id' => 5,
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'Vice Grip',
                'generation_id' => 1,
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'Vine Whip',
                'generation_id' => 1,
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'Vital Throw',
                'generation_id' => 2,
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'Volt Switch',
                'generation_id' => 5,
            ),
            274 => 
            array (
                'id' => 775,
                'name' => 'Volt Tackle',
                'generation_id' => 3,
            ),
            275 => 
            array (
                'id' => 776,
                'name' => 'Wake-Up Slap',
                'generation_id' => 4,
            ),
            276 => 
            array (
                'id' => 777,
                'name' => 'Water Gun',
                'generation_id' => 1,
            ),
            277 => 
            array (
                'id' => 778,
                'name' => 'Water Pledge',
                'generation_id' => 5,
            ),
            278 => 
            array (
                'id' => 779,
                'name' => 'Water Pulse',
                'generation_id' => 3,
            ),
            279 => 
            array (
                'id' => 780,
                'name' => 'Water Shuriken',
                'generation_id' => 6,
            ),
            280 => 
            array (
                'id' => 781,
                'name' => 'Water Sport',
                'generation_id' => 3,
            ),
            281 => 
            array (
                'id' => 782,
                'name' => 'Water Spout',
                'generation_id' => 3,
            ),
            282 => 
            array (
                'id' => 783,
                'name' => 'Waterfall',
                'generation_id' => 1,
            ),
            283 => 
            array (
                'id' => 784,
                'name' => 'Weather Ball',
                'generation_id' => 3,
            ),
            284 => 
            array (
                'id' => 785,
                'name' => 'Whirlpool',
                'generation_id' => 2,
            ),
            285 => 
            array (
                'id' => 786,
                'name' => 'Whirlwind',
                'generation_id' => 1,
            ),
            286 => 
            array (
                'id' => 787,
                'name' => 'Wide Guard',
                'generation_id' => 5,
            ),
            287 => 
            array (
                'id' => 788,
                'name' => 'Wild Charge',
                'generation_id' => 5,
            ),
            288 => 
            array (
                'id' => 789,
                'name' => 'Will-O-Wisp',
                'generation_id' => 3,
            ),
            289 => 
            array (
                'id' => 790,
                'name' => 'Wing Attack',
                'generation_id' => 1,
            ),
            290 => 
            array (
                'id' => 791,
                'name' => 'Wish',
                'generation_id' => 3,
            ),
            291 => 
            array (
                'id' => 792,
                'name' => 'Withdraw',
                'generation_id' => 1,
            ),
            292 => 
            array (
                'id' => 793,
                'name' => 'Wonder Room',
                'generation_id' => 5,
            ),
            293 => 
            array (
                'id' => 794,
                'name' => 'Wood Hammer',
                'generation_id' => 4,
            ),
            294 => 
            array (
                'id' => 795,
                'name' => 'Work Up',
                'generation_id' => 5,
            ),
            295 => 
            array (
                'id' => 796,
                'name' => 'Worry Seed',
                'generation_id' => 4,
            ),
            296 => 
            array (
                'id' => 797,
                'name' => 'Wrap',
                'generation_id' => 1,
            ),
            297 => 
            array (
                'id' => 798,
                'name' => 'Wring Out',
                'generation_id' => 4,
            ),
            298 => 
            array (
                'id' => 799,
                'name' => 'X-Scissor',
                'generation_id' => 4,
            ),
            299 => 
            array (
                'id' => 800,
                'name' => 'Yawn',
                'generation_id' => 3,
            ),
            300 => 
            array (
                'id' => 801,
                'name' => 'Zap Cannon',
                'generation_id' => 2,
            ),
            301 => 
            array (
                'id' => 802,
                'name' => 'Zen Headbutt',
                'generation_id' => 4,
            ),
            302 => 
            array (
                'id' => 803,
                'name' => 'Zing Zap',
                'generation_id' => 7,
            ),
            303 => 
            array (
                'id' => 804,
                'name' => 'Zippy Zap',
                'generation_id' => 7,
            ),
        ));
        
        
    }
}