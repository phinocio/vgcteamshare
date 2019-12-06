<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('items')->delete();

        DB::table('items')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Ability Capsule',
                'description' => 'A capsule that allows a Pokémon with two Abilities to switch between these Abilities when it is used.'
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Ability Urge',
                'description' => 'When used, it activates the Ability of an ally Pokémon.'
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Abomasite',
                'description' => 'Enables Abomasnow to Mega Evolve during battle.'
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Absolite',
                'description' => 'Enables Absol to Mega Evolve during battle.'
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Absorb Bulb',
                'description' => 'A consumable bulb. If the holder is hit by a Water-type move, its Sp. Atk will rise.'
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Adamant Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Adamant nature.'
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Adamant Orb',
                'description' => 'Increases the power of Dragon- and Steel-type moves when held by Dialga.'
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Adrenaline Orb',
                'description' => 'Using it makes wild Pokémon more likely to call for help. If held by a Pokémon, it boosts Speed when intimidated. It can be used only once.'
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Aerodactylite',
                'description' => 'Enables Aerodactyl to Mega Evolve during battle.'
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Aggronite',
                'description' => 'Enables Aggron to Mega Evolve during battle.'
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Aguav Berry',
                'description' => 'Restores HP if it\'s low, but may cause confusion.'
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Air Balloon',
                'description' => 'When held by a Pokémon, the Pokémon will float into the air. When the holder is attacked, this item will burst.'
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Alakazite',
                'description' => 'Enables Alakazam to Mega Evolve during battle.'
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Aloraichium Z',
                'description' => 'Allows Alolan Raichu to upgrade Thunderbolt to a Z-Move, Stoked Sparksurfer.'
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Altarianite',
                'description' => 'Enables Altaria to Mega Evolve during battle.'
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Ampharosite',
                'description' => 'Enables Ampharos to Mega Evolve during battle.'
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Amulet Coin',
                'description' => 'Doubles prize money if held.'
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Antidote',
                'description' => 'A spray-type medicine. It lifts the effect of poison from one Pokémon.'
            ),
            18 =>
            array(
                'id' => 19,
                'name' => 'Apicot Berry',
                'description' => 'Raises Special Defense when HP is low.'
            ),
            19 =>
            array(
                'id' => 20,
                'name' => 'Armor Fossil',
                'description' => 'A fossil from a prehistoric Pokémon that lived on the land. It appears to be part of a collar.'
            ),
            20 =>
            array(
                'id' => 21,
                'name' => 'Aspear Berry',
                'description' => 'If held by a Pokémon, it defrosts it.'
            ),
            21 =>
            array(
                'id' => 22,
                'name' => 'Assault Vest',
                'description' => 'Raises Special Defense but prevents the use of status moves.'
            ),
            22 =>
            array(
                'id' => 23,
                'name' => 'Audinite',
                'description' => 'Enables Audino to Mega Evolve during battle.'
            ),
            23 =>
            array(
                'id' => 24,
                'name' => 'Awakening',
                'description' => 'A spray-type medicine. It awakens a Pokémon from the clutches of sleep.'
            ),
            24 =>
            array(
                'id' => 25,
                'name' => 'Babiri Berry',
                'description' => 'Weakens a supereffective Steel-type attack against the holding Pokémon.'
            ),
            25 =>
            array(
                'id' => 26,
                'name' => 'Balm Mushroom',
                'description' => 'A rare mushroom which gives off a nice fragrance. A maniac will buy it for a high price.'
            ),
            26 =>
            array(
                'id' => 27,
                'name' => 'Banettite',
                'description' => 'Enables Banette to Mega Evolve during battle.'
            ),
            27 =>
            array(
                'id' => 28,
                'name' => 'Beach Glass',
                'description' => 'A piece of colored glass. Waves have rounded its edges. It\'s slightly rough to the touch.'
            ),
            28 =>
            array(
                'id' => 29,
                'name' => 'Beast Ball',
                'description' => 'A special Poké Ball designed to catch Ultra Beasts. It has a low success rate for catching others.'
            ),
            29 =>
            array(
                'id' => 30,
                'name' => 'Beedrillite',
                'description' => 'Enables Beedrill to Mega Evolve during battle.'
            ),
            30 =>
            array(
                'id' => 31,
                'name' => 'Belue Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            31 =>
            array(
                'id' => 32,
                'name' => 'Berry Juice',
                'description' => 'A 100% pure juice made of Berries. It restores the HP of one Pokémon by just 20 points.'
            ),
            32 =>
            array(
                'id' => 33,
                'name' => 'Berry Sweet',
                'description' => 'Evolves Milcery into Blueberry Flavor Alcremie.'
            ),
            33 =>
            array(
                'id' => 34,
                'name' => 'Big Malasada',
                'description' => 'Heals all major status conditions.'
            ),
            34 =>
            array(
                'id' => 35,
                'name' => 'Big Mushroom',
                'description' => 'A large and rare mushroom. It is sought after by collectors.'
            ),
            35 =>
            array(
                'id' => 36,
                'name' => 'Big Nugget',
                'description' => 'A big nugget of pure gold that gives off a lustrous gleam. A maniac will buy it for a high price.'
            ),
            36 =>
            array(
                'id' => 37,
                'name' => 'Big Pearl',
                'description' => 'A quite-large pearl that sparkles in a pretty silver color. It can be sold at a high price to shops.'
            ),
            37 =>
            array(
                'id' => 38,
                'name' => 'Big Root',
                'description' => 'Recovers more HP from HP-stealing moves.'
            ),
            38 =>
            array(
                'id' => 39,
                'name' => 'Binding Band',
                'description' => 'A band that increases the power of binding moves when held.'
            ),
            39 =>
            array(
                'id' => 40,
                'name' => 'Black Apricorn',
                'description' => 'A black Apricorn It has an indescribable scent.'
            ),
            40 =>
            array(
                'id' => 41,
                'name' => 'Black Belt',
                'description' => 'Increases the power of Fighting-type moves.'
            ),
            41 =>
            array(
                'id' => 42,
                'name' => 'Black Flute',
                'description' => 'A toy flute made from black glass. A maniac will buy it for a high price.'
            ),
            42 =>
            array(
                'id' => 43,
                'name' => 'Black Glasses',
                'description' => 'Increases the power of Dark-type moves.'
            ),
            43 =>
            array(
                'id' => 44,
                'name' => 'Black Sludge',
                'description' => 'A held item that gradually restores the HP of Poison-type Pokémon. It inflicts damage on all other types.'
            ),
            44 =>
            array(
                'id' => 45,
                'name' => 'Blastoisinite',
                'description' => 'Enables Blastoise to Mega Evolve during battle.'
            ),
            45 =>
            array(
                'id' => 46,
                'name' => 'Blazikenite',
                'description' => 'Enables Blaziken to Mega Evolve during battle.'
            ),
            46 =>
            array(
                'id' => 47,
                'name' => 'Blue Apricorn',
                'description' => 'A blue Apricorn. It smells a bit like grass.'
            ),
            47 =>
            array(
                'id' => 48,
                'name' => 'Blue Flute',
                'description' => 'A toy flute made from blue glass. A maniac will buy it for a high price.'
            ),
            48 =>
            array(
                'id' => 49,
                'name' => 'Blue Scarf',
                'description' => 'Raises holder\'s Beauty aspect in a Contest.'
            ),
            49 =>
            array(
                'id' => 50,
                'name' => 'Blue Shard',
                'description' => 'A small blue shard. It appears to be from some sort of implement made long ago.'
            ),
            50 =>
            array(
                'id' => 51,
                'name' => 'Bluk Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            51 =>
            array(
                'id' => 52,
                'name' => 'Blunder Policy',
                'description' => 'Raises Speed sharply if its attack misses.'
            ),
            52 =>
            array(
                'id' => 53,
                'name' => 'Bold Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Bold nature.'
            ),
            53 =>
            array(
                'id' => 54,
                'name' => 'Bottle Cap',
                'description' => 'Maximizes one IV stat in Hyper Training.'
            ),
            54 =>
            array(
                'id' => 55,
                'name' => 'Brave Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Brave nature.'
            ),
            55 =>
            array(
                'id' => 56,
                'name' => 'Bright Powder',
                'description' => 'Lowers the opponent\'s accuracy.'
            ),
            56 =>
            array(
                'id' => 57,
                'name' => 'Bug Gem',
                'description' => 'Increases the power of a Bug-type move only once.'
            ),
            57 =>
            array(
                'id' => 58,
                'name' => 'Bug Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Bug type.'
            ),
            58 =>
            array(
                'id' => 59,
                'name' => 'Buginium Z',
                'description' => 'Allows the use of Savage Spin-Out, the Bug type Z-Move.'
            ),
            59 =>
            array(
                'id' => 60,
                'name' => 'Burn Drive',
                'description' => 'Changes Techno Blast to a Fire-type move when held by Genesect.'
            ),
            60 =>
            array(
                'id' => 61,
                'name' => 'Burn Heal',
                'description' => 'A spray-type medicine. It heals a single Pokémon that is suffering from a burn.'
            ),
            61 =>
            array(
                'id' => 62,
                'name' => 'Calcium',
                'description' => 'Increases Special Attack EVs by 10.'
            ),
            62 =>
            array(
                'id' => 63,
                'name' => 'Calm Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Calm nature.'
            ),
            63 =>
            array(
                'id' => 64,
                'name' => 'Cameruptite',
                'description' => 'Enables Camerupt to Mega Evolve during battle.'
            ),
            64 =>
            array(
                'id' => 65,
                'name' => 'Carbos',
                'description' => 'Increases Speed EVs by 10.'
            ),
            65 =>
            array(
                'id' => 66,
                'name' => 'Careful Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Careful nature.'
            ),
            66 =>
            array(
                'id' => 67,
                'name' => 'Casteliacone',
                'description' => 'Heals all major status conditions.'
            ),
            67 =>
            array(
                'id' => 68,
                'name' => 'Cell Battery',
                'description' => 'A consumable battery. If the holder is hit by an Electric-type move, its Attack will rise.'
            ),
            68 =>
            array(
                'id' => 69,
                'name' => 'Chalky Stone',
                'description' => 'A small whitish stone picked up at the edge of the road.'
            ),
            69 =>
            array(
                'id' => 70,
                'name' => 'Charcoal',
                'description' => 'Increases the power of Fire-type moves.'
            ),
            70 =>
            array(
                'id' => 71,
                'name' => 'Charizardite X',
                'description' => 'Enables Charizard to Mega Evolve during battle.'
            ),
            71 =>
            array(
                'id' => 72,
                'name' => 'Charizardite Y',
                'description' => 'Enables Charizard to Mega Evolve during battle.'
            ),
            72 =>
            array(
                'id' => 73,
                'name' => 'Charti Berry',
                'description' => 'Weakens a supereffective Rock-type attack against the holding Pokémon.'
            ),
            73 =>
            array(
                'id' => 74,
                'name' => 'Cheri Berry',
                'description' => 'If held by a Pokémon, it recovers from paralysis.'
            ),
            74 =>
            array(
                'id' => 75,
                'name' => 'Cherish Ball',
                'description' => 'A quite rare Poké Ball that has been specially crafted to commemorate an occasion of some sort.'
            ),
            75 =>
            array(
                'id' => 76,
                'name' => 'Chesto Berry',
                'description' => 'If held by a Pokémon, it recovers from sleep.'
            ),
            76 =>
            array(
                'id' => 77,
                'name' => 'Chilan Berry',
                'description' => 'Weakens a Normal-type attack against the Pokémon holding this berry.'
            ),
            77 =>
            array(
                'id' => 78,
                'name' => 'Chill Drive',
                'description' => 'Changes Techno Blast to an Ice-type move when held by Genesect.'
            ),
            78 =>
            array(
                'id' => 79,
                'name' => 'Chipped Pot',
                'description' => 'Evolves Sinistea into Polteageist.'
            ),
            79 =>
            array(
                'id' => 80,
                'name' => 'Choice Band',
                'description' => 'Raises Attack, but only one move can be used.'
            ),
            80 =>
            array(
                'id' => 81,
                'name' => 'Choice Scarf',
                'description' => 'Raises Speed, but only one move can be used.'
            ),
            81 =>
            array(
                'id' => 82,
                'name' => 'Choice Specs',
                'description' => 'Raises Special Attack, but only one move can be used.'
            ),
            82 =>
            array(
                'id' => 83,
                'name' => 'Chople Berry',
                'description' => 'Weakens a supereffective Fighting-type attack against the holding Pokémon.'
            ),
            83 =>
            array(
                'id' => 84,
                'name' => 'Claw Fossil',
                'description' => 'A fossil of an ancient Pokémon that lived in the sea. It appears to be part of a claw.'
            ),
            84 =>
            array(
                'id' => 85,
                'name' => 'Cleanse Tag',
                'description' => 'An item to be held by a Pokémon. It helps keep wild Pokémon away if the holder is the first one in the party.'
            ),
            85 =>
            array(
                'id' => 86,
                'name' => 'Clever Wing',
                'description' => 'Increases Special Defense EVs by 1.'
            ),
            86 =>
            array(
                'id' => 87,
                'name' => 'Clover Sweet',
                'description' => 'Evolves Milcery into Clover Flavor Alcremie.'
            ),
            87 =>
            array(
                'id' => 88,
                'name' => 'Coba Berry',
                'description' => 'Weakens a supereffective Flying-type attack against the holding Pokémon.'
            ),
            88 =>
            array(
                'id' => 89,
                'name' => 'Colbur Berry',
                'description' => 'Weakens a supereffective Dark-type attack against the holding Pokémon.'
            ),
            89 =>
            array(
                'id' => 90,
                'name' => 'Colress Machine',
                'description' => 'A special device that wrings out the potential of Pokémon. It is an imperfect prototype.'
            ),
            90 =>
            array(
                'id' => 91,
                'name' => 'Comet Shard',
                'description' => 'A shard which fell to the ground when a comet approached. A maniac will buy it for a high price.'
            ),
            91 =>
            array(
                'id' => 92,
                'name' => 'Cornn Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            92 =>
            array(
                'id' => 93,
                'name' => 'Courage Candy',
                'description' => 'Increases a Pokémon\'s Special Defense stat by 1.'
            ),
            93 =>
            array(
                'id' => 94,
                'name' => 'Courage Candy L',
                'description' => 'Increases a Pokémon\'s Special Defense stat.'
            ),
            94 =>
            array(
                'id' => 95,
                'name' => 'Courage Candy XL',
                'description' => 'Increases a Pokémon\'s Special Defense stat.'
            ),
            95 =>
            array(
                'id' => 96,
                'name' => 'Cover Fossil',
                'description' => 'A fossil of an ancient Pokémon that lived in the sea in ancient times. It appears to be part of its back.'
            ),
            96 =>
            array(
                'id' => 97,
                'name' => 'Cracked Pot',
                'description' => 'Evolves Sinistea into Polteageist.'
            ),
            97 =>
            array(
                'id' => 98,
                'name' => 'Custap Berry',
                'description' => 'Holder can move first when HP is low.'
            ),
            98 =>
            array(
                'id' => 99,
                'name' => 'Damp Mulch',
                'description' => 'A fertilizer to be spread on soft soil in regions where Berries are grown. A maniac will buy it for a high price.'
            ),
            99 =>
            array(
                'id' => 100,
                'name' => 'Damp Rock',
                'description' => 'A Pokémon held item that extends the duration of the move Rain Dance used by the holder.'
            ),
            100 =>
            array(
                'id' => 101,
                'name' => 'Dark Gem',
                'description' => 'Increases the power of a Dark-type move only once.'
            ),
            101 =>
            array(
                'id' => 102,
                'name' => 'Dark Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Dark type.'
            ),
            102 =>
            array(
                'id' => 103,
                'name' => 'Darkinium Z',
                'description' => 'Allows the use of Black Hole Eclipse, the Dark type Z-Move.'
            ),
            103 =>
            array(
                'id' => 104,
                'name' => 'Dawn Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            104 =>
            array(
                'id' => 105,
                'name' => 'Decidium Z',
                'description' => 'Allows Decidueye to upgrade Spirit Shackle to a Z-Move, Sinister Arrow Raid.'
            ),
            105 =>
            array(
                'id' => 106,
                'name' => 'Deep Sea Scale',
                'description' => 'Increases Special Defense when held by Clamperl. Evolves Clamperl when traded holding the item.'
            ),
            106 =>
            array(
                'id' => 107,
                'name' => 'Deep Sea Tooth',
                'description' => 'Increases Special Attack when held by Clamperl. Evolves Clamperl when traded holding the item.'
            ),
            107 =>
            array(
                'id' => 108,
                'name' => 'Destiny Knot',
                'description' => 'A long, thin, bright-red string to be held by a Pokémon. If the holder becomes infatuated, the foe does too.'
            ),
            108 =>
            array(
                'id' => 109,
                'name' => 'Diancite',
                'description' => 'Enables Diancie to Mega Evolve during battle.'
            ),
            109 =>
            array(
                'id' => 110,
                'name' => 'Dire Hit',
                'description' => 'Raises critical-hit ratio of a Pokémon in battle.'
            ),
            110 =>
            array(
                'id' => 111,
                'name' => 'Dire Hit 2',
                'description' => 'Raises a Pokémon\'s critical-hit ratio in battle.'
            ),
            111 =>
            array(
                'id' => 112,
                'name' => 'Dire Hit 3',
                'description' => 'Greatly raises a Pokémon\'s critical-hit ratio in battle.'
            ),
            112 =>
            array(
                'id' => 113,
                'name' => 'Discount Coupon',
                'description' => 'This special coupon allows you to buy items at a discount when you are shopping at a boutique.'
            ),
            113 =>
            array(
                'id' => 114,
                'name' => 'Dive Ball',
                'description' => 'A somewhat different Poké Ball that works especially well on Pokémon that live underwater.'
            ),
            114 =>
            array(
                'id' => 115,
                'name' => 'DNA Splicers',
                'description' => 'A splicer that fuses Kyurem and a certain Pokémon. They are said to have been one in the beginning.'
            ),
            115 =>
            array(
                'id' => 116,
                'name' => 'Dome Fossil',
                'description' => 'A fossil of an ancient Pokémon that lived in the sea. It appears to be part of a shell.'
            ),
            116 =>
            array(
                'id' => 117,
                'name' => 'Douse Drive',
                'description' => 'Changes Techno Blast to a Water-type move when held by Genesect.'
            ),
            117 =>
            array(
                'id' => 118,
                'name' => 'Draco Plate',
                'description' => 'Increases power of Dragon-type moves. Changes Arceus\' type to Dragon.'
            ),
            118 =>
            array(
                'id' => 119,
                'name' => 'Dragon Fang',
                'description' => 'Increases the power of Dragon-type moves.'
            ),
            119 =>
            array(
                'id' => 120,
                'name' => 'Dragon Gem',
                'description' => 'Increases the power of a Dragon-type move only once.'
            ),
            120 =>
            array(
                'id' => 121,
                'name' => 'Dragon Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Dragon type.'
            ),
            121 =>
            array(
                'id' => 122,
                'name' => 'Dragon Scale',
                'description' => 'Evolves Seadra when traded holding the item.'
            ),
            122 =>
            array(
                'id' => 123,
                'name' => 'Dragonium Z',
                'description' => 'Allows the use of Devastating Drake, the Dragon type Z-Move.'
            ),
            123 =>
            array(
                'id' => 124,
                'name' => 'Dread Plate',
                'description' => 'Increases power of Dark-type moves. Changes Arceus\' type to Dark.'
            ),
            124 =>
            array(
                'id' => 125,
                'name' => 'Dream Ball',
                'description' => 'A special Poké Ball that appears out of nowhere in a bag at the Entree Forest. It can catch any Pokémon.'
            ),
            125 =>
            array(
                'id' => 126,
                'name' => 'Dropped Item',
                'description' => 'The Xtransceiver found at the Nimbasa City amusement park. It seems it belongs to a boy.'
            ),
            126 =>
            array(
                'id' => 127,
                'name' => 'Dubious Disc',
                'description' => 'Evolves Porygon2 when traded holding the item.'
            ),
            127 =>
            array(
                'id' => 128,
                'name' => 'Durin Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            128 =>
            array(
                'id' => 129,
                'name' => 'Dusk Ball',
                'description' => 'A somewhat different Poké Ball that makes it easier to catch wild Pokémon at night or in dark places like caves.'
            ),
            129 =>
            array(
                'id' => 130,
                'name' => 'Dusk Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            130 =>
            array(
                'id' => 131,
                'name' => 'Dynamax Candy',
                'description' => 'Raises Dynamax Level.'
            ),
            131 =>
            array(
                'id' => 132,
                'name' => 'Earth Plate',
                'description' => 'Increases power of Ground-type moves. Changes Arceus\' type to Ground.'
            ),
            132 =>
            array(
                'id' => 133,
                'name' => 'Eevium Z',
                'description' => 'Allows Eevee to upgrade Last Resort to a Z-Move, Extreme Evoboost.'
            ),
            133 =>
            array(
                'id' => 134,
                'name' => 'Eject Button',
                'description' => 'If the holder is hit by an attack, it will switch with another Pokémon in your party.'
            ),
            134 =>
            array(
                'id' => 135,
                'name' => 'Eject Pack',
                'description' => 'The Pokémon switches out if its stats are lowered.'
            ),
            135 =>
            array(
                'id' => 136,
                'name' => 'Electirizer',
                'description' => 'Evolves Electabuzz when traded holding the item.'
            ),
            136 =>
            array(
                'id' => 137,
                'name' => 'Electric Gem',
                'description' => 'Increases the power of an Electric-type move only once.'
            ),
            137 =>
            array(
                'id' => 138,
                'name' => 'Electric Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Electric type.'
            ),
            138 =>
            array(
                'id' => 139,
                'name' => 'Electric Seed',
                'description' => 'An item to be held by a Pokémon. It boosts Defense on Electric Terrain. It can only be used once.'
            ),
            139 =>
            array(
                'id' => 140,
                'name' => 'Electrium Z',
                'description' => 'Allows the use of Gigavolt Havoc, the Electric type Z-Move.'
            ),
            140 =>
            array(
                'id' => 141,
                'name' => 'Elevator Key',
                'description' => 'A card key that activates the elevator in Lysandre Labs. It is emblazoned with Team Flare\'s logo.'
            ),
            141 =>
            array(
                'id' => 142,
                'name' => 'Elixir',
                'description' => 'It restores the PP of all the moves learned by the targeted Pokémon by 10 points each.'
            ),
            142 =>
            array(
                'id' => 143,
                'name' => 'Energy Powder',
                'description' => 'Restores 60 HP but lowers Friendship.'
            ),
            143 =>
            array(
                'id' => 144,
                'name' => 'Energy Root',
                'description' => 'Restores 120 HP but lowers Friendship.'
            ),
            144 =>
            array(
                'id' => 145,
                'name' => 'Enigma Berry',
                'description' => 'If held by a Pokémon, it restores its HP if it is hit by any supereffective attack.'
            ),
            145 =>
            array(
                'id' => 146,
                'name' => 'Escape Rope',
                'description' => 'A long, durable rope. Use it to escape instantly from a cave or a dungeon.'
            ),
            146 =>
            array(
                'id' => 147,
                'name' => 'Ether',
                'description' => 'It restores the PP of a Pokémon\'s selected move by a maximum of 10 points.'
            ),
            147 =>
            array(
                'id' => 148,
                'name' => 'Everstone',
                'description' => 'An item to be held by a Pokémon. The Pokémon holding this peculiar stone is prevented from evolving.'
            ),
            148 =>
            array(
                'id' => 149,
                'name' => 'Eviolite',
                'description' => 'A mysterious evolutionary lump. When held, it raises the Defense and Sp. Def of a Pokémon that can still evolve.'
            ),
            149 =>
            array(
                'id' => 150,
                'name' => 'Exp. Candy L',
                'description' => ''
            ),
            150 =>
            array(
                'id' => 151,
                'name' => 'Exp. Candy M',
                'description' => ''
            ),
            151 =>
            array(
                'id' => 152,
                'name' => 'Exp. Candy S',
                'description' => ''
            ),
            152 =>
            array(
                'id' => 153,
                'name' => 'Exp. Candy XL',
                'description' => 'Increases the Pokémon\'s Exp points by 30,000.'
            ),
            153 =>
            array(
                'id' => 154,
                'name' => 'Exp. Candy XS',
                'description' => ''
            ),
            154 =>
            array(
                'id' => 155,
                'name' => 'Exp. Share',
                'description' => 'An item to be held by a Pokémon. The holder gets a share of a battle\'s Exp. Points without battling.'
            ),
            155 =>
            array(
                'id' => 156,
                'name' => 'Expert Belt',
                'description' => 'Increases the power of super-effective moves.'
            ),
            156 =>
            array(
                'id' => 157,
                'name' => 'Fairium Z',
                'description' => 'Allows the use of Twinkle Tackle, the Fairy type Z-Move.'
            ),
            157 =>
            array(
                'id' => 158,
                'name' => 'Fairy Gem',
                'description' => 'Increases the power of a Fairy-type move only once.'
            ),
            158 =>
            array(
                'id' => 159,
                'name' => 'Fairy Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Fairy type.'
            ),
            159 =>
            array(
                'id' => 160,
                'name' => 'Fast Ball',
                'description' => 'A Poké Ball that makes it easier to catch Pokémon which are quick to run away.'
            ),
            160 =>
            array(
                'id' => 161,
                'name' => 'Festival Ticket',
                'description' => 'A ticket that allows you to host a mission in Festival Plaza.'
            ),
            161 =>
            array(
                'id' => 162,
                'name' => 'Fighting Gem',
                'description' => 'Increases the power of a Fighting-type move only once.'
            ),
            162 =>
            array(
                'id' => 163,
                'name' => 'Fighting Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Fighting type.'
            ),
            163 =>
            array(
                'id' => 164,
                'name' => 'Fightinium Z',
                'description' => 'Allows the use of All-Out Pummeling, the Fighting type Z-Move.'
            ),
            164 =>
            array(
                'id' => 165,
                'name' => 'Figy Berry',
                'description' => 'Restores HP if it\'s low, but may cause confusion.'
            ),
            165 =>
            array(
                'id' => 166,
                'name' => 'Fire Gem',
                'description' => 'Increases the power of a Fire-type move only once.'
            ),
            166 =>
            array(
                'id' => 167,
                'name' => 'Fire Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Fire type.'
            ),
            167 =>
            array(
                'id' => 168,
                'name' => 'Fire Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            168 =>
            array(
                'id' => 169,
                'name' => 'Firium Z',
                'description' => 'Allows the use of Inferno Overdrive, the Fire type Z-Move.'
            ),
            169 =>
            array(
                'id' => 170,
                'name' => 'Fist Plate',
                'description' => 'Increases power of Fighting-type moves. Changes Arceus\' type to Fighting.'
            ),
            170 =>
            array(
                'id' => 171,
                'name' => 'Flame Orb',
                'description' => 'An item to be held by a Pokémon. It is a bizarre orb that inflicts a burn on the holder in battle.'
            ),
            171 =>
            array(
                'id' => 172,
                'name' => 'Flame Plate',
                'description' => 'Increases power of Fire-type moves. Changes Arceus\' type to Fire.'
            ),
            172 =>
            array(
                'id' => 173,
                'name' => 'Float Stone',
                'description' => 'A very light stone. It reduces the weight of a Pokémon when held.'
            ),
            173 =>
            array(
                'id' => 174,
                'name' => 'Flower Sweet',
                'description' => 'Evolves Milcery into Flower Flavor Alcremie.'
            ),
            174 =>
            array(
                'id' => 175,
                'name' => 'Fluffy Tail',
                'description' => 'An item that attracts Pokémon. Use it to flee from any battle with a wild Pokémon.'
            ),
            175 =>
            array(
                'id' => 176,
                'name' => 'Flying Gem',
                'description' => 'Increases the power of a Flying-type move only once.'
            ),
            176 =>
            array(
                'id' => 177,
                'name' => 'Flying Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Flying type.'
            ),
            177 =>
            array(
                'id' => 178,
                'name' => 'Flyinium Z',
                'description' => 'Allows the use of Supersonic Skystrike, the Flying type Z-Move.'
            ),
            178 =>
            array(
                'id' => 179,
                'name' => 'Focus Band',
                'description' => 'An item to be held by a Pokémon. The holder may endure a potential KO attack, leaving it with just 1 HP.'
            ),
            179 =>
            array(
                'id' => 180,
                'name' => 'Focus Sash',
                'description' => 'An item to be held by a Pokémon. If it has full HP, the holder will endure one potential KO attack, leaving 1 HP.'
            ),
            180 =>
            array(
                'id' => 181,
                'name' => 'Fresh Water',
                'description' => 'Restores 30 HP.'
            ),
            181 =>
            array(
                'id' => 182,
                'name' => 'Friend Ball',
                'description' => 'A Poké Ball that makes caught Pokémon more friendly.'
            ),
            182 =>
            array(
                'id' => 183,
                'name' => 'Full Heal',
                'description' => 'A spray-type medicine. It heals all the status problems of a single Pokémon.'
            ),
            183 =>
            array(
                'id' => 184,
                'name' => 'Full Incense',
                'description' => 'Holder always attacks last. Breeding Snorlax produces Munchlax when held.'
            ),
            184 =>
            array(
                'id' => 185,
                'name' => 'Full Restore',
                'description' => 'A medicine that fully restores the HP and heals any status problems of a single Pokémon.'
            ),
            185 =>
            array(
                'id' => 186,
                'name' => 'Galladite',
                'description' => 'Enables Gallade to Mega Evolve during battle.'
            ),
            186 =>
            array(
                'id' => 187,
                'name' => 'Ganlon Berry',
                'description' => 'Raises Defense when HP is low.'
            ),
            187 =>
            array(
                'id' => 188,
                'name' => 'Garchompite',
                'description' => 'Enables Garchomp to Mega Evolve during battle.'
            ),
            188 =>
            array(
                'id' => 189,
                'name' => 'Gardevoirite',
                'description' => 'Enables Gardevoir to Mega Evolve during battle.'
            ),
            189 =>
            array(
                'id' => 190,
                'name' => 'Gengarite',
                'description' => 'Enables Gengar to Mega Evolve during battle.'
            ),
            190 =>
            array(
                'id' => 191,
                'name' => 'Genius Wing',
                'description' => 'Increases Special Attack EVs by 1.'
            ),
            191 =>
            array(
                'id' => 192,
                'name' => 'Gentle Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Gentle nature.'
            ),
            192 =>
            array(
                'id' => 193,
                'name' => 'Ghost Gem',
                'description' => 'Increases the power of a Ghost-type move only once.'
            ),
            193 =>
            array(
                'id' => 194,
                'name' => 'Ghost Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Ghost type.'
            ),
            194 =>
            array(
                'id' => 195,
                'name' => 'Ghostium Z',
                'description' => 'Allows the use of Never-Ending Nightmare, the Ghost type Z-Move.'
            ),
            195 =>
            array(
                'id' => 196,
                'name' => 'Glalitite',
                'description' => 'Enables Glalie to Mega Evolve during battle.'
            ),
            196 =>
            array(
                'id' => 197,
                'name' => 'Gold Bottle Cap',
                'description' => 'Maximizes all of a Pokémon\'s IV stats in Hyper Training.'
            ),
            197 =>
            array(
                'id' => 198,
                'name' => 'Gold Leaf',
                'description' => ''
            ),
            198 =>
            array(
                'id' => 199,
                'name' => 'Golden Nanab Berry',
                'description' => 'Drastically calms a Pokémon in battle, in Let\'s Go Pikachu/Eevee.'
            ),
            199 =>
            array(
                'id' => 200,
                'name' => 'Golden Pinap Berry',
                'description' => 'Drastically increases chance of getting items when a Pokémon is caught, in Pokémon Let\'s Go.'
            ),
            200 =>
            array(
                'id' => 201,
                'name' => 'Golden Razz Berry',
                'description' => 'Makes a Pokémon easier to catch in Pokémon Let\'s Go.'
            ),
            201 =>
            array(
                'id' => 202,
                'name' => 'Gooey Mulch',
                'description' => 'A fertilizer to be spread on soft soil in regions where Berries are grown. A maniac will buy it for a high price.'
            ),
            202 =>
            array(
                'id' => 203,
                'name' => 'Grass Gem',
                'description' => 'Increases the power of a Grass-type move only once.'
            ),
            203 =>
            array(
                'id' => 204,
                'name' => 'Grass Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Grass type.'
            ),
            204 =>
            array(
                'id' => 205,
                'name' => 'Grassium Z',
                'description' => 'Allows the use of Bloom Doom, the Grass type Z-Move.'
            ),
            205 =>
            array(
                'id' => 206,
                'name' => 'Grassy Seed',
                'description' => 'An item to be held by a Pokémon. It boosts Defense on Grassy Terrain. It can only be used once.'
            ),
            206 =>
            array(
                'id' => 207,
                'name' => 'Great Ball',
                'description' => 'A good, high-performance Ball that provides a higher Pokémon catch rate than a standard Poké Ball.'
            ),
            207 =>
            array(
                'id' => 208,
                'name' => 'Green Apricorn',
                'description' => 'A green Apricorn. It has a mysterious, aromatic scent.'
            ),
            208 =>
            array(
                'id' => 209,
                'name' => 'Green Scarf',
                'description' => 'Raises holder\'s Smart aspect in a Contest.'
            ),
            209 =>
            array(
                'id' => 210,
                'name' => 'Green Shard',
                'description' => 'A small green shard. It appears to be from some sort of implement made long ago.'
            ),
            210 =>
            array(
                'id' => 211,
                'name' => 'Grepa Berry',
                'description' => 'Increases Friendship but lowers Special Defense EVs.'
            ),
            211 =>
            array(
                'id' => 212,
                'name' => 'Grip Claw',
                'description' => 'A Pokémon held item that extends the duration of multiturn attacks like Bind and Wrap.'
            ),
            212 =>
            array(
                'id' => 213,
                'name' => 'Griseous Orb',
                'description' => 'Increases the power of Dragon- and Ghost-type moves when held by Giratina, and changes it to Origin Forme.'
            ),
            213 =>
            array(
                'id' => 214,
                'name' => 'Ground Gem',
                'description' => 'Increases the power of a Ground-type move only once.'
            ),
            214 =>
            array(
                'id' => 215,
                'name' => 'Ground Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Ground type.'
            ),
            215 =>
            array(
                'id' => 216,
                'name' => 'Groundium Z',
                'description' => 'Allows the use of Tectonic Rage, the Ground type Z-Move.'
            ),
            216 =>
            array(
                'id' => 217,
                'name' => 'Growth Mulch',
                'description' => 'A fertilizer to be spread on soft soil in regions where Berries are grown. A maniac will buy it for a high price.'
            ),
            217 =>
            array(
                'id' => 218,
                'name' => 'Grubby Hanky',
                'description' => 'A handkerchief dropped by a regular at Café Warehouse. It smells faintly like a Pokémon.'
            ),
            218 =>
            array(
                'id' => 219,
                'name' => 'Guard Spec.',
                'description' => 'Prevents stat reduction for five turns.'
            ),
            219 =>
            array(
                'id' => 220,
                'name' => 'Gyaradosite',
                'description' => 'Enables Gyarados to Mega Evolve during battle.'
            ),
            220 =>
            array(
                'id' => 221,
                'name' => 'Haban Berry',
                'description' => 'Weakens a supereffective Dragon-type attack against the holding Pokémon.'
            ),
            221 =>
            array(
                'id' => 222,
                'name' => 'Hard Stone',
                'description' => 'Increases the power of Rock-type moves.'
            ),
            222 =>
            array(
                'id' => 223,
                'name' => 'Hasty Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Hasty nature.'
            ),
            223 =>
            array(
                'id' => 224,
                'name' => 'Heal Ball',
                'description' => 'A remedial Poké Ball that restores the caught Pokémon\'s HP and eliminates any status problem.'
            ),
            224 =>
            array(
                'id' => 225,
                'name' => 'Heal Powder',
                'description' => 'Heals all status problems, but lowers Friendship.'
            ),
            225 =>
            array(
                'id' => 226,
                'name' => 'Health Candy',
                'description' => 'Increases a Pokémon\'s HP stat by 1.'
            ),
            226 =>
            array(
                'id' => 227,
                'name' => 'Health Candy L',
                'description' => 'Increases a Pokémon\'s HP stat.'
            ),
            227 =>
            array(
                'id' => 228,
                'name' => 'Health Candy XL',
                'description' => 'Increases a Pokémon\'s HP stat.'
            ),
            228 =>
            array(
                'id' => 229,
                'name' => 'Health Wing',
                'description' => 'Increases HP EVs by 1.'
            ),
            229 =>
            array(
                'id' => 230,
                'name' => 'Heart Scale',
                'description' => 'A pretty, heart-shaped scale that is extremely rare. It glows faintly in the colors of the rainbow.'
            ),
            230 =>
            array(
                'id' => 231,
                'name' => 'Heat Rock',
                'description' => 'A Pokémon held item that extends the duration of the move Sunny Day used by the holder.'
            ),
            231 =>
            array(
                'id' => 232,
                'name' => 'Heavy Ball',
                'description' => 'A Poké Ball for catching very heavy Pokémon.'
            ),
            232 =>
            array(
                'id' => 233,
                'name' => 'Heavy-Duty Boots',
                'description' => 'Protects the holder from traps set on the battlefield.'
            ),
            233 =>
            array(
                'id' => 234,
                'name' => 'Helix Fossil',
                'description' => 'A fossil of an ancient Pokémon that lived in the sea. It appears to be part of a seashell.'
            ),
            234 =>
            array(
                'id' => 235,
                'name' => 'Heracronite',
                'description' => 'Enables Heracross to Mega Evolve during battle.'
            ),
            235 =>
            array(
                'id' => 236,
                'name' => 'Hi-tech Earbuds',
                'description' => 'Strange earbuds that allow you to freely control the volume of various sounds.'
            ),
            236 =>
            array(
                'id' => 237,
                'name' => 'HM01',
                'description' => 'Teaches the move Cut.'
            ),
            237 =>
            array(
                'id' => 238,
                'name' => 'HM02',
                'description' => 'Teaches the move Fly.'
            ),
            238 =>
            array(
                'id' => 239,
                'name' => 'HM03',
                'description' => 'Teaches the move Surf.'
            ),
            239 =>
            array(
                'id' => 240,
                'name' => 'HM04',
                'description' => 'Teaches the move Strength.'
            ),
            240 =>
            array(
                'id' => 241,
                'name' => 'HM05',
                'description' => 'Teaches the move Flash/Defog/Whirlpool/Waterfall.'
            ),
            241 =>
            array(
                'id' => 242,
                'name' => 'HM06',
                'description' => 'Teaches the move Whirlpool/Rock Smash/Dive.'
            ),
            242 =>
            array(
                'id' => 243,
                'name' => 'HM07',
                'description' => 'Teaches the move Waterfall.'
            ),
            243 =>
            array(
                'id' => 244,
                'name' => 'HM08',
                'description' => 'Teaches the move Dive/Rock Climb.'
            ),
            244 =>
            array(
                'id' => 245,
                'name' => 'Hondew Berry',
                'description' => 'Increases Friendship but lowers Special Attack EVs.'
            ),
            245 =>
            array(
                'id' => 246,
                'name' => 'Honey',
                'description' => 'A sweet honey with a lush aroma that attracts wild Pokémon when it is used in grass, caves, or on special trees.'
            ),
            246 =>
            array(
                'id' => 247,
                'name' => 'Honor Of Kalos',
                'description' => 'A precious symbol that is awarded only to an individual who has done great things for the Kalos region.'
            ),
            247 =>
            array(
                'id' => 248,
                'name' => 'Houndoominite',
                'description' => 'Enables Houndoom to Mega Evolve during battle.'
            ),
            248 =>
            array(
                'id' => 249,
                'name' => 'HP Up',
                'description' => 'Increases HP EVs by 10.'
            ),
            249 =>
            array(
                'id' => 250,
                'name' => 'Hyper Potion',
                'description' => 'Restores 120 HP.'
            ),
            250 =>
            array(
                'id' => 251,
                'name' => 'Iapapa Berry',
                'description' => 'Restores HP if it\'s low, but may cause confusion.'
            ),
            251 =>
            array(
                'id' => 252,
                'name' => 'Ice Gem',
                'description' => 'Increases the power of an Ice-type move only once.'
            ),
            252 =>
            array(
                'id' => 253,
                'name' => 'Ice Heal',
                'description' => 'A spray-type medicine. It defrosts a Pokémon that has been frozen solid.'
            ),
            253 =>
            array(
                'id' => 254,
                'name' => 'Ice Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Ice type.'
            ),
            254 =>
            array(
                'id' => 255,
                'name' => 'Ice Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            255 =>
            array(
                'id' => 256,
                'name' => 'Icicle Plate',
                'description' => 'Increases power of Ice-type moves. Changes Arceus\' type to Ice.'
            ),
            256 =>
            array(
                'id' => 257,
                'name' => 'Icium Z',
                'description' => 'Allows the use of Subzero Slammer, the Ice type Z-Move.'
            ),
            257 =>
            array(
                'id' => 258,
                'name' => 'Icy Rock',
                'description' => 'A Pokémon held item that extends the duration of the move Hail used by the holder.'
            ),
            258 =>
            array(
                'id' => 259,
                'name' => 'Impish Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Impish nature.'
            ),
            259 =>
            array(
                'id' => 260,
                'name' => 'Incinium Z',
                'description' => 'Allows Incineroar to upgrade Darkest Lariat to a Z-Move, Malicious Moonsault.'
            ),
            260 =>
            array(
                'id' => 261,
                'name' => 'Insect Plate',
                'description' => 'Increases power of Bug-type moves. Changes Arceus\' type to Bug.'
            ),
            261 =>
            array(
                'id' => 262,
                'name' => 'Intriguing Stone',
                'description' => 'A rather curious stone that might appear to be valuable to some. It\'s all in the eye of the beholder.'
            ),
            262 =>
            array(
                'id' => 263,
                'name' => 'Iron',
                'description' => 'Increases Defense EVs by 10.'
            ),
            263 =>
            array(
                'id' => 264,
                'name' => 'Iron Ball',
                'description' => 'A Pokémon held item that cuts Speed. It makes Flying-type and levitating holders susceptible to Ground moves.'
            ),
            264 =>
            array(
                'id' => 265,
                'name' => 'Iron Plate',
                'description' => 'Increases power of Steel-type moves. Changes Arceus\' type to Steel.'
            ),
            265 =>
            array(
                'id' => 266,
                'name' => 'Item Drop',
                'description' => 'When used, it causes an ally Pokémon to drop a held item.'
            ),
            266 =>
            array(
                'id' => 267,
                'name' => 'Item Urge',
                'description' => 'When used, it causes an ally Pokémon to use its held item.'
            ),
            267 =>
            array(
                'id' => 268,
                'name' => 'Jaboca Berry',
                'description' => 'If held by a Pokémon and a physical attack lands, the attacker also takes damage.'
            ),
            268 =>
            array(
                'id' => 269,
                'name' => 'Jolly Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Jolly nature.'
            ),
            269 =>
            array(
                'id' => 270,
                'name' => 'Kangaskhanite',
                'description' => 'Enables Kangaskhan to Mega Evolve during battle.'
            ),
            270 =>
            array(
                'id' => 271,
                'name' => 'Kasib Berry',
                'description' => 'Weakens a supereffective Ghost-type attack against the holding Pokémon.'
            ),
            271 =>
            array(
                'id' => 272,
                'name' => 'Kebia Berry',
                'description' => 'Weakens a supereffective Poison-type attack against the holding Pokémon.'
            ),
            272 =>
            array(
                'id' => 273,
                'name' => 'Kee Berry',
                'description' => 'If held by a Pokémon, this Berry will increase the holder\'s Defense if it\'s hit with a physical move.'
            ),
            273 =>
            array(
                'id' => 274,
                'name' => 'Kelpsy Berry',
                'description' => 'Increases Friendship but lowers Attack EVs.'
            ),
            274 =>
            array(
                'id' => 275,
                'name' => 'King\'s Rock',
                'description' => 'May cause opponent to flinch. Evolves Poliwhirl and Slowpoke when traded holding the item.'
            ),
            275 =>
            array(
                'id' => 276,
                'name' => 'Kommonium Z',
                'description' => 'Allows Kommo-o to upgrade Clanging Scales to a Z-Move, Clangorous Soulblaze.'
            ),
            276 =>
            array(
                'id' => 277,
                'name' => 'Lagging Tail',
                'description' => 'Holder always attacks last.'
            ),
            277 =>
            array(
                'id' => 278,
                'name' => 'Lansat Berry',
                'description' => 'Increases critical-hit ratio when HP is low.'
            ),
            278 =>
            array(
                'id' => 279,
                'name' => 'Latiasite',
                'description' => 'Enables Latias to Mega Evolve during battle.'
            ),
            279 =>
            array(
                'id' => 280,
                'name' => 'Latiosite',
                'description' => 'Enables Latios to Mega Evolve during battle.'
            ),
            280 =>
            array(
                'id' => 281,
                'name' => 'Lava Cookie',
                'description' => 'Heals all major status conditions.'
            ),
            281 =>
            array(
                'id' => 282,
                'name' => 'Lax Incense',
                'description' => 'Lowers the opponent\'s accuracy. Breeding Wobbuffet produces Wynaut when held.'
            ),
            282 =>
            array(
                'id' => 283,
                'name' => 'Lax Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Lax nature.'
            ),
            283 =>
            array(
                'id' => 284,
                'name' => 'Leaf Letter',
                'description' => 'A letter written on a leaf. Something is written using Eevee\'s footprints.'
            ),
            284 =>
            array(
                'id' => 285,
                'name' => 'Leaf Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            285 =>
            array(
                'id' => 286,
                'name' => 'Leftovers',
                'description' => 'An item to be held by a Pokémon. The holder\'s HP is gradually restored during battle.'
            ),
            286 =>
            array(
                'id' => 287,
                'name' => 'Lemonade',
                'description' => 'Restores 70 HP.'
            ),
            287 =>
            array(
                'id' => 288,
                'name' => 'Leppa Berry',
                'description' => 'If held by a Pokémon, it restores a move\'s PP by 10.'
            ),
            288 =>
            array(
                'id' => 289,
                'name' => 'Level Ball',
                'description' => 'A Poké Ball for catching Pokémon that are a lower level than your own.'
            ),
            289 =>
            array(
                'id' => 290,
                'name' => 'Liechi Berry',
                'description' => 'Raises Attack when HP is low.'
            ),
            290 =>
            array(
                'id' => 291,
                'name' => 'Life Orb',
                'description' => 'Increases the power of moves, but loses HP each turn.'
            ),
            291 =>
            array(
                'id' => 292,
                'name' => 'Light Ball',
                'description' => 'An item to be held by PIKACHU. It is a puzzling orb that raises the Attack and Sp. Atk stat.'
            ),
            292 =>
            array(
                'id' => 293,
                'name' => 'Light Clay',
                'description' => 'A Pokémon held item that extends the duration of barrier moves like Light Screen and Reflect used by the holder.'
            ),
            293 =>
            array(
                'id' => 294,
                'name' => 'Lone Earring',
                'description' => ''
            ),
            294 =>
            array(
                'id' => 295,
                'name' => 'Lonely Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Lonely nature.'
            ),
            295 =>
            array(
                'id' => 296,
                'name' => 'Looker Ticket',
                'description' => 'A ticket that was handmade by Looker. It\'s decorated with a liberal amount of glittery paint.'
            ),
            296 =>
            array(
                'id' => 297,
                'name' => 'Lopunnite',
                'description' => 'Enables Lopunny to Mega Evolve during battle.'
            ),
            297 =>
            array(
                'id' => 298,
                'name' => 'Love Ball',
                'description' => 'Poké Ball for catching Pokémon that are the opposite gender of your Pokémon.'
            ),
            298 =>
            array(
                'id' => 299,
                'name' => 'Love Sweet',
                'description' => 'Evolves Milcery into Heart Flavor Alcremie.'
            ),
            299 =>
            array(
                'id' => 300,
                'name' => 'Lucarionite',
                'description' => 'Enables Lucario to Mega Evolve during battle.'
            ),
            300 =>
            array(
                'id' => 301,
                'name' => 'Luck Incense',
                'description' => 'Doubles prize money if held. Breeding Chansey or Blissey produces Happiny when held.'
            ),
            301 =>
            array(
                'id' => 302,
                'name' => 'Lucky Egg',
                'description' => 'An item to be held by a Pokémon. It is an egg filled with happiness that earns extra Exp. Points in battle.'
            ),
            302 =>
            array(
                'id' => 303,
                'name' => 'Lucky Punch',
                'description' => 'Increases critical-hit ratio when held by Chansey.'
            ),
            303 =>
            array(
                'id' => 304,
                'name' => 'Lum Berry',
                'description' => 'If held by a Pokémon, it recovers from any status problem.'
            ),
            304 =>
            array(
                'id' => 305,
                'name' => 'Luminous Moss',
                'description' => 'Raises Special Defense if hit by a Water-type move.'
            ),
            305 =>
            array(
                'id' => 306,
                'name' => 'Lumiose Galette',
                'description' => 'Heals all major status conditions.'
            ),
            306 =>
            array(
                'id' => 307,
                'name' => 'Lunalium Z',
                'description' => 'Allows Lunala to upgrade Moongeist Beam to a Z-Move, Menacing Moonraze Maelstrom.'
            ),
            307 =>
            array(
                'id' => 308,
                'name' => 'Lure',
                'description' => 'Attracts Pokémon in the wild.'
            ),
            308 =>
            array(
                'id' => 309,
                'name' => 'Lure Ball',
                'description' => 'A Poké Ball for catching Pokémon hooked by a Rod when fishing.'
            ),
            309 =>
            array(
                'id' => 310,
                'name' => 'Lustrous Orb',
                'description' => 'Increases the power of Dragon- and Water-type moves when held by Palkia.'
            ),
            310 =>
            array(
                'id' => 311,
                'name' => 'Luxury Ball',
                'description' => 'A comfortable Poké Ball that makes a caught wild Pokémon quickly grow friendly.'
            ),
            311 =>
            array(
                'id' => 312,
                'name' => 'Lycanium Z',
                'description' => 'Allows Lycanroc to upgrade Stone Edge to a Z-Move, Splintered Stormshards.'
            ),
            312 =>
            array(
                'id' => 313,
                'name' => 'Macho Brace',
                'description' => 'An item to be held by a Pokémon. It is a stiff and heavy brace that promotes strong growth but lowers Speed.'
            ),
            313 =>
            array(
                'id' => 314,
                'name' => 'Magmarizer',
                'description' => 'Evolves Magmar when traded holding the item.'
            ),
            314 =>
            array(
                'id' => 315,
                'name' => 'Magnet',
                'description' => 'Increases the power of Electric-type moves.'
            ),
            315 =>
            array(
                'id' => 316,
                'name' => 'Mago Berry',
                'description' => 'Restores HP if it\'s low, but may cause confusion.'
            ),
            316 =>
            array(
                'id' => 317,
                'name' => 'Magost Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            317 =>
            array(
                'id' => 318,
                'name' => 'Manectite',
                'description' => 'Enables Manectric to Mega Evolve during battle.'
            ),
            318 =>
            array(
                'id' => 319,
                'name' => 'Maranga Berry',
                'description' => 'If held by a Pokémon, this Berry will increase the holder\'s Sp. Def if it\'s hit with a special move.'
            ),
            319 =>
            array(
                'id' => 320,
                'name' => 'Marble',
                'description' => ''
            ),
            320 =>
            array(
                'id' => 321,
                'name' => 'Marshadium Z',
                'description' => 'Allows Marshadow to upgrade Spectral Thief to a Z-Move, Soul-Stealing 7-Star Strike.'
            ),
            321 =>
            array(
                'id' => 322,
                'name' => 'Master Ball',
                'description' => 'The best Ball with the ultimate level of performance. It will catch any wild Pokémon without fail.'
            ),
            322 =>
            array(
                'id' => 323,
                'name' => 'Mawilite',
                'description' => 'Enables Mawile to Mega Evolve during battle.'
            ),
            323 =>
            array(
                'id' => 324,
                'name' => 'Max Elixir',
                'description' => 'It fully restores the PP of all the moves learned by the targeted Pokémon.'
            ),
            324 =>
            array(
                'id' => 325,
                'name' => 'Max Ether',
                'description' => 'It fully restores the PP of a single selected move that has been learned by the target Pokémon.'
            ),
            325 =>
            array(
                'id' => 326,
                'name' => 'Max Lure',
                'description' => 'Attracts Pokémon in the wild.'
            ),
            326 =>
            array(
                'id' => 327,
                'name' => 'Max Potion',
                'description' => 'Fully restores HP.'
            ),
            327 =>
            array(
                'id' => 328,
                'name' => 'Max Repel',
                'description' => 'An item that prevents weak wild Pokémon from appearing for 250 steps after its use.'
            ),
            328 =>
            array(
                'id' => 329,
                'name' => 'Max Revive',
                'description' => 'A medicine that revives a fainted Pokémon. It fully restores the Pokémon\'s HP.'
            ),
            329 =>
            array(
                'id' => 330,
                'name' => 'Meadow Plate',
                'description' => 'Increases power of Grass-type moves. Changes Arceus\' type to Grass.'
            ),
            330 =>
            array(
                'id' => 331,
                'name' => 'Medichamite',
                'description' => 'Enables Medicham to Mega Evolve during battle.'
            ),
            331 =>
            array(
                'id' => 332,
                'name' => 'Mental Herb',
                'description' => 'An item to be held by a Pokémon. It snaps the holder out of infatuation. It can be used only once.'
            ),
            332 =>
            array(
                'id' => 333,
                'name' => 'Metagrossite',
                'description' => 'Enables Metagross to Mega Evolve during battle.'
            ),
            333 =>
            array(
                'id' => 334,
                'name' => 'Metal Coat',
                'description' => 'Increases the power of Steel-type moves. Evolves Onix and Scyther when traded holding the item.'
            ),
            334 =>
            array(
                'id' => 335,
                'name' => 'Metal Powder',
                'description' => 'Increases Defense when held by Ditto.'
            ),
            335 =>
            array(
                'id' => 336,
                'name' => 'Metronome',
                'description' => 'Increases the power of moves used consecutively.'
            ),
            336 =>
            array(
                'id' => 337,
                'name' => 'Mewnium Z',
                'description' => 'Allows Mew to upgrade Psychic to a Z-Move, Genesis Supernova.'
            ),
            337 =>
            array(
                'id' => 338,
                'name' => 'Mewtwonite X',
                'description' => 'Enables Mewtwo to Mega Evolve during battle.'
            ),
            338 =>
            array(
                'id' => 339,
                'name' => 'Mewtwonite Y',
                'description' => 'Enables Mewtwo to Mega Evolve during battle.'
            ),
            339 =>
            array(
                'id' => 340,
                'name' => 'Micle Berry',
                'description' => 'Increases a move\'s accuracy when HP is low.'
            ),
            340 =>
            array(
                'id' => 341,
                'name' => 'Mighty Candy',
                'description' => 'Increases a Pokémon\'s Attack stat by 1.'
            ),
            341 =>
            array(
                'id' => 342,
                'name' => 'Mighty Candy L',
                'description' => 'Increases a Pokémon\'s Attack stat.'
            ),
            342 =>
            array(
                'id' => 343,
                'name' => 'Mighty Candy XL',
                'description' => 'Increases a Pokémon\'s Attack stat.'
            ),
            343 =>
            array(
                'id' => 344,
                'name' => 'Mild Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Mild nature.'
            ),
            344 =>
            array(
                'id' => 345,
                'name' => 'Mimikium Z',
                'description' => 'Allows Mimikyu to upgrade Play Rough to a Z-Move, Let\'s Snuggle Forever.'
            ),
            345 =>
            array(
                'id' => 346,
                'name' => 'Mind Plate',
                'description' => 'Increases power of Psychic-type moves. Changes Arceus\' type to Psychic.'
            ),
            346 =>
            array(
                'id' => 347,
                'name' => 'Miracle Seed',
                'description' => 'Increases the power of Grass-type moves.'
            ),
            347 =>
            array(
                'id' => 348,
                'name' => 'Misty Seed',
                'description' => 'An item to be held by a Pokémon. It boosts Sp. Def on Misty Terrain. It can only be used once.'
            ),
            348 =>
            array(
                'id' => 349,
                'name' => 'Modest Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Modest nature.'
            ),
            349 =>
            array(
                'id' => 350,
                'name' => 'Moomoo Milk',
                'description' => 'Milk with a very high nutrition content. It restores the HP of one Pokémon by 100 points.'
            ),
            350 =>
            array(
                'id' => 351,
                'name' => 'Moon Ball',
                'description' => 'A Poké Ball for catching Pokémon that evolve using the Moon Stone.'
            ),
            351 =>
            array(
                'id' => 352,
                'name' => 'Moon Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            352 =>
            array(
                'id' => 353,
                'name' => 'Muscle Band',
                'description' => 'Increases the power of Physical-category moves.'
            ),
            353 =>
            array(
                'id' => 354,
                'name' => 'Muscle Wing',
                'description' => 'Increases Attack EVs by 1.'
            ),
            354 =>
            array(
                'id' => 355,
                'name' => 'Mystic Water',
                'description' => 'Increases the power of Water-type moves.'
            ),
            355 =>
            array(
                'id' => 356,
                'name' => 'Naive Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Naive nature.'
            ),
            356 =>
            array(
                'id' => 357,
                'name' => 'Nanab Berry',
                'description' => 'A Berry to be used in cooking. Calms a Pokémon in battle, in Let\'s Go Pikachu/Eevee.'
            ),
            357 =>
            array(
                'id' => 358,
                'name' => 'Naughty Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Naughty nature.'
            ),
            358 =>
            array(
                'id' => 359,
                'name' => 'Nest Ball',
                'description' => 'A somewhat different Poké Ball that works especially well on weaker Pokémon in the wild.'
            ),
            359 =>
            array(
                'id' => 360,
                'name' => 'Net Ball',
                'description' => 'A somewhat different Poké Ball that works especially well on Water- and Bug-type Pokémon.'
            ),
            360 =>
            array(
                'id' => 361,
                'name' => 'Never-Melt Ice',
                'description' => 'Increases the power of Ice-type moves.'
            ),
            361 =>
            array(
                'id' => 362,
                'name' => 'Nomel Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            362 =>
            array(
                'id' => 363,
                'name' => 'Normal Gem',
                'description' => 'Increases the power of a Normal-type move only once.'
            ),
            363 =>
            array(
                'id' => 364,
                'name' => 'Normalium Z',
                'description' => 'Allows the use of Breakneck Blitz, the Normal type Z-Move.'
            ),
            364 =>
            array(
                'id' => 365,
                'name' => 'Nugget',
                'description' => 'A nugget of pure gold that gives off a lustrous gleam. It can be sold at a high price to shops.'
            ),
            365 =>
            array(
                'id' => 366,
                'name' => 'Occa Berry',
                'description' => 'Weakens a supereffective Fire-type attack against the holding Pokémon.'
            ),
            366 =>
            array(
                'id' => 367,
                'name' => 'Odd Incense',
                'description' => 'Increases the power of Psychic-type moves. Breeding Mr. Mime produces Mime Jr. when held.'
            ),
            367 =>
            array(
                'id' => 368,
                'name' => 'Odd Keystone',
                'description' => 'A vital item that is needed to keep a stone tower from collapsing. Voices can be heard from it occasionally.'
            ),
            368 =>
            array(
                'id' => 369,
                'name' => 'Old Amber',
                'description' => 'A piece of amber that contains the genetic material of an ancient Pokémon. It is clear with a reddish tint.'
            ),
            369 =>
            array(
                'id' => 370,
                'name' => 'Old Gateau',
                'description' => 'Heals all major status conditions.'
            ),
            370 =>
            array(
                'id' => 371,
                'name' => 'Oran Berry',
                'description' => 'If held by a Pokémon, it heals the user by just 10 HP.'
            ),
            371 =>
            array(
                'id' => 372,
                'name' => 'Oval Charm',
                'description' => 'An oval charm said to increase the chance of Pokémon Eggs being found at the Day Care.'
            ),
            372 =>
            array(
                'id' => 373,
                'name' => 'Oval Stone',
                'description' => 'Evolves Happiny when held.'
            ),
            373 =>
            array(
                'id' => 374,
                'name' => 'Pack of Potatoes',
                'description' => ''
            ),
            374 =>
            array(
                'id' => 375,
                'name' => 'Pamtre Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            375 =>
            array(
                'id' => 376,
                'name' => 'Paralyze Heal',
                'description' => 'A spray-type medicine. It eliminates paralysis from a single Pokémon.'
            ),
            376 =>
            array(
                'id' => 377,
                'name' => 'Park Ball',
                'description' => 'A special Poké Ball for the Pal Park.'
            ),
            377 =>
            array(
                'id' => 378,
                'name' => 'Pass Orb',
                'description' => 'A mysterious orb containing the power of the Unova region, to be used when generating Pass Power.'
            ),
            378 =>
            array(
                'id' => 379,
                'name' => 'Passho Berry',
                'description' => 'Weakens a supereffective Water-type attack against the holding Pokémon.'
            ),
            379 =>
            array(
                'id' => 380,
                'name' => 'Payapa Berry',
                'description' => 'Weakens a supereffective Psychic-type attack against the holding Pokémon.'
            ),
            380 =>
            array(
                'id' => 381,
                'name' => 'Pearl',
                'description' => 'A somewhat-small pearl that sparkles in a pretty silver color. It can be sold cheaply to shops.'
            ),
            381 =>
            array(
                'id' => 382,
                'name' => 'Pearl String',
                'description' => 'Very large pearls that sparkle in a pretty silver color. A maniac will buy them for a high price.'
            ),
            382 =>
            array(
                'id' => 383,
                'name' => 'Pecha Berry',
                'description' => 'If held by a Pokémon, it recovers from poison.'
            ),
            383 =>
            array(
                'id' => 384,
                'name' => 'Permit',
                'description' => 'A permit that is needed to enter the Nature Preserve. Not many know about it.'
            ),
            384 =>
            array(
                'id' => 385,
                'name' => 'Persim Berry',
                'description' => 'If held by a Pokémon, it recovers from confusion.'
            ),
            385 =>
            array(
                'id' => 386,
                'name' => 'Petaya Berry',
                'description' => 'Raises Special Attack when HP is low.'
            ),
            386 =>
            array(
                'id' => 387,
                'name' => 'Pewter Crunchies',
                'description' => 'Heals all major status conditions.'
            ),
            387 =>
            array(
                'id' => 388,
                'name' => 'Pidgeotite',
                'description' => 'Enables Pidgeot to Mega Evolve during battle.'
            ),
            388 =>
            array(
                'id' => 389,
                'name' => 'Pikanium Z',
                'description' => 'Allows Pikachu to upgrade Volt Tackle to a Z-Move, Catastropika.'
            ),
            389 =>
            array(
                'id' => 390,
                'name' => 'Pikashunium Z',
                'description' => 'Allows Pikachu in a cap to upgrade Thunderbolt to a Z-Move, 10,000,000 Volt Thunderbolt.'
            ),
            390 =>
            array(
                'id' => 391,
                'name' => 'Pinap Berry',
                'description' => 'A Berry to be used in cooking. Increases chances of getting items when a Pokémon is caught, in Pokémon Let\'s Go.'
            ),
            391 =>
            array(
                'id' => 392,
                'name' => 'Pink Apricorn',
                'description' => 'A pink Apricorn. It has a nice, sweet scent.'
            ),
            392 =>
            array(
                'id' => 393,
                'name' => 'Pink Nectar',
                'description' => 'The flower nectar obtained at the flowering shrubs on Royal Avenue. It changes the form of certain species of Pokémon.'
            ),
            393 =>
            array(
                'id' => 394,
                'name' => 'Pink Scarf',
                'description' => 'Raises holder\'s Cute aspect in a Contest.'
            ),
            394 =>
            array(
                'id' => 395,
                'name' => 'Pinsirite',
                'description' => 'Enables Pinsir to Mega Evolve during battle.'
            ),
            395 =>
            array(
                'id' => 396,
                'name' => 'Pixie Plate',
                'description' => 'Increases power of Fairy-type moves. Changes Arceus\' type to Fairy.'
            ),
            396 =>
            array(
                'id' => 397,
                'name' => 'Plasma Card',
                'description' => 'A card key needed to enter the password inside the Plasma Frigate.'
            ),
            397 =>
            array(
                'id' => 398,
                'name' => 'Plume Fossil',
                'description' => 'A fossil of an ancient Pokémon that flew in the sky in ancient times. It appears to be part of its wing.'
            ),
            398 =>
            array(
                'id' => 399,
                'name' => 'Poison Barb',
                'description' => 'Increases the power of Poison-type moves.'
            ),
            399 =>
            array(
                'id' => 400,
                'name' => 'Poison Gem',
                'description' => 'Increases the power of a Poison-type move only once.'
            ),
            400 =>
            array(
                'id' => 401,
                'name' => 'Poison Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Poison type.'
            ),
            401 =>
            array(
                'id' => 402,
                'name' => 'Poisonium Z',
                'description' => 'Allows the use of Acid Downpour, the Poison type Z-Move.'
            ),
            402 =>
            array(
                'id' => 403,
                'name' => 'Poké Ball',
                'description' => 'A device for catching wild Pokémon. It is thrown like a ball at the target. It is designed as a capsule system.'
            ),
            403 =>
            array(
                'id' => 404,
                'name' => 'Poké Doll',
                'description' => 'A doll that attracts Pokémon. Use it to flee from any battle with a wild Pokémon.'
            ),
            404 =>
            array(
                'id' => 405,
                'name' => 'Poké Toy',
                'description' => 'An item that attracts Pokémon. Use it to flee from any battle with a wild Pokémon.'
            ),
            405 =>
            array(
                'id' => 406,
                'name' => 'Polished Mud Ball',
                'description' => ''
            ),
            406 =>
            array(
                'id' => 407,
                'name' => 'Pomeg Berry',
                'description' => 'Increases Friendship but lowers HP EVs.'
            ),
            407 =>
            array(
                'id' => 408,
                'name' => 'Potion',
                'description' => 'Restores 20 HP.'
            ),
            408 =>
            array(
                'id' => 409,
                'name' => 'Power Anklet',
                'description' => 'A Pokémon held item that promotes Speed gain on leveling, but reduces the Speed stat.'
            ),
            409 =>
            array(
                'id' => 410,
                'name' => 'Power Band',
                'description' => 'A Pokémon held item that promotes Sp. Def gain on leveling, but reduces the Speed stat.'
            ),
            410 =>
            array(
                'id' => 411,
                'name' => 'Power Belt',
                'description' => 'A Pokémon held item that promotes Defense gain on leveling, but reduces the Speed stat.'
            ),
            411 =>
            array(
                'id' => 412,
                'name' => 'Power Bracer',
                'description' => 'A Pokémon held item that promotes Attack gain on leveling, but reduces the Speed stat.'
            ),
            412 =>
            array(
                'id' => 413,
                'name' => 'Power Herb',
                'description' => 'A single-use item to be held by a Pokémon. It allows the immediate use of a move that charges on the first turn.'
            ),
            413 =>
            array(
                'id' => 414,
                'name' => 'Power Lens',
                'description' => 'A Pokémon held item that promotes Sp. Atk gain on leveling, but reduces the Speed stat.'
            ),
            414 =>
            array(
                'id' => 415,
                'name' => 'Power Plant Pass',
                'description' => 'This pass serves as an ID card for gaining access to the power plant that lies along Route 13.'
            ),
            415 =>
            array(
                'id' => 416,
                'name' => 'Power Weight',
                'description' => 'A Pokémon held item that promotes HP gain on leveling, but reduces the Speed stat.'
            ),
            416 =>
            array(
                'id' => 417,
                'name' => 'PP Max',
                'description' => 'It maximally raises the top PP of a selected move that has been learned by the target Pokémon.'
            ),
            417 =>
            array(
                'id' => 418,
                'name' => 'PP Up',
                'description' => 'It slightly raises the maximum PP of a selected move that has been learned by the target Pokémon.'
            ),
            418 =>
            array(
                'id' => 419,
                'name' => 'Premier Ball',
                'description' => 'A somewhat rare Poké Ball that has been specially made to commemorate an event of some sort.'
            ),
            419 =>
            array(
                'id' => 420,
                'name' => 'Pretty Wing',
                'description' => 'Though this feather is beautiful, it\'s just a regular feather and has no effect on Pokémon.'
            ),
            420 =>
            array(
                'id' => 421,
                'name' => 'Primarium Z',
                'description' => 'Allows Primarina to upgrade Sparkling Aria to a Z-Move, Oceanic Operetta.'
            ),
            421 =>
            array(
                'id' => 422,
                'name' => 'Prism Scale',
                'description' => 'Evolves Feebas when traded holding the item.'
            ),
            422 =>
            array(
                'id' => 423,
                'name' => 'Prison Bottle',
                'description' => 'Transforms Hoopa Confined to Hoopa Unbound.'
            ),
            423 =>
            array(
                'id' => 424,
                'name' => 'Prof\'s Letter',
                'description' => 'A letter that Professor Sycamore wrote to your mother. A faint but pleasant perfume seems to cling to the paper.'
            ),
            424 =>
            array(
                'id' => 425,
                'name' => 'Protective Pads',
                'description' => 'An item to be held by a Pokémon. These pads protect the holder from effects caused by making direct contact with the target.'
            ),
            425 =>
            array(
                'id' => 426,
                'name' => 'Protector',
                'description' => 'Evolves Rhydon when traded holding the item.'
            ),
            426 =>
            array(
                'id' => 427,
                'name' => 'Protein',
                'description' => 'Increases Attack EVs by 10.'
            ),
            427 =>
            array(
                'id' => 428,
                'name' => 'Psychic Gem',
                'description' => 'Increases the power of a Psychic-type move only once.'
            ),
            428 =>
            array(
                'id' => 429,
                'name' => 'Psychic Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Psychic type.'
            ),
            429 =>
            array(
                'id' => 430,
                'name' => 'Psychic Seed',
                'description' => 'An item to be held by a Pokémon. It boosts Sp. Def on Psychic Terrain. It can only be used once.'
            ),
            430 =>
            array(
                'id' => 431,
                'name' => 'Psychium Z',
                'description' => 'Allows the use of Shattered Psyche, the Psychic type Z-Move.'
            ),
            431 =>
            array(
                'id' => 432,
                'name' => 'Pungent Root',
                'description' => ''
            ),
            432 =>
            array(
                'id' => 433,
                'name' => 'Pure Incense',
                'description' => 'Descreases the likelihood of meeting wild Pokémon. Breeding Chimecho produces Chingling when held.'
            ),
            433 =>
            array(
                'id' => 434,
                'name' => 'Purple Nectar',
                'description' => 'A flower nectar obtained at Poni Meadow. It changes the form of certain species of Pokémon.'
            ),
            434 =>
            array(
                'id' => 435,
                'name' => 'Qualot Berry',
                'description' => 'Increases Friendship but lowers Defense EVs.'
            ),
            435 =>
            array(
                'id' => 436,
                'name' => 'Quick Ball',
                'description' => 'A somewhat different Poké Ball that provides a better catch rate if it is used at the start of a wild encounter.'
            ),
            436 =>
            array(
                'id' => 437,
                'name' => 'Quick Candy',
                'description' => 'Increases a Pokémon\'s Speed stat by 1.'
            ),
            437 =>
            array(
                'id' => 438,
                'name' => 'Quick Candy L',
                'description' => 'Increases a Pokémon\'s Speed stat.'
            ),
            438 =>
            array(
                'id' => 439,
                'name' => 'Quick Candy XL',
                'description' => 'Increases a Pokémon\'s Speed stat.'
            ),
            439 =>
            array(
                'id' => 440,
                'name' => 'Quick Claw',
                'description' => 'An item to be held by a Pokémon. A light, sharp claw that lets the bearer move first occasionally.'
            ),
            440 =>
            array(
                'id' => 441,
                'name' => 'Quick Powder',
                'description' => 'Increases Speed when held by Ditto.'
            ),
            441 =>
            array(
                'id' => 442,
                'name' => 'Quiet Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Quiet nature.'
            ),
            442 =>
            array(
                'id' => 443,
                'name' => 'Rabuta Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            443 =>
            array(
                'id' => 444,
                'name' => 'Rage Candy Bar',
                'description' => 'Heals all major status conditions.'
            ),
            444 =>
            array(
                'id' => 445,
                'name' => 'Rare Bone',
                'description' => 'A bone that is extremely valuable for Pokémon archeology. It can be sold for a high price to shops.'
            ),
            445 =>
            array(
                'id' => 446,
                'name' => 'Rare Candy',
                'description' => 'A candy that is packed with energy. It raises the level of a single Pokémon by one.'
            ),
            446 =>
            array(
                'id' => 447,
                'name' => 'Rash Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Rash nature.'
            ),
            447 =>
            array(
                'id' => 448,
                'name' => 'Rawst Berry',
                'description' => 'If held by a Pokémon, it recovers from a burn.'
            ),
            448 =>
            array(
                'id' => 449,
                'name' => 'Razor Claw',
                'description' => 'Increases critical-hit ratio. Evolves Sneasel when held at night.'
            ),
            449 =>
            array(
                'id' => 450,
                'name' => 'Razor Fang',
                'description' => 'May cause opponent to flinch. Evolves Gligar when held at night.'
            ),
            450 =>
            array(
                'id' => 451,
                'name' => 'Razz Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            451 =>
            array(
                'id' => 452,
                'name' => 'Reaper Cloth',
                'description' => 'Evolves Dusclops when traded holding the item.'
            ),
            452 =>
            array(
                'id' => 453,
                'name' => 'Red Apricorn',
                'description' => 'A red Apricorn. It assails your nostrils.'
            ),
            453 =>
            array(
                'id' => 454,
                'name' => 'Red Card',
                'description' => 'A card with a mysterious power. When the holder is struck by a foe, the attacker is removed from battle.'
            ),
            454 =>
            array(
                'id' => 455,
                'name' => 'Red Flute',
                'description' => 'A toy flute made from red glass. A maniac will buy it for a high price.'
            ),
            455 =>
            array(
                'id' => 456,
                'name' => 'Red Nectar',
                'description' => 'A flower nectar obtained at Ula\'ula Meadow. It changes the form of certain species of Pokémon.'
            ),
            456 =>
            array(
                'id' => 457,
                'name' => 'Red Scarf',
                'description' => 'Raises holder\'s Cool aspect in a Contest.'
            ),
            457 =>
            array(
                'id' => 458,
                'name' => 'Red Shard',
                'description' => 'A small red shard. It appears to be from some sort of implement made long ago.'
            ),
            458 =>
            array(
                'id' => 459,
                'name' => 'Relaxed Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Relaxed nature.'
            ),
            459 =>
            array(
                'id' => 460,
                'name' => 'Relic Band',
                'description' => 'A bracelet made in a civilization about 3,000 years ago. A maniac will buy it for a high price.'
            ),
            460 =>
            array(
                'id' => 461,
                'name' => 'Relic Copper',
                'description' => 'A copper coin used in a civilization about 3,000 years ago. A maniac will buy it for a high price.'
            ),
            461 =>
            array(
                'id' => 462,
                'name' => 'Relic Crown',
                'description' => 'A crown made in a civilization about 3,000 years ago. A maniac will buy it for a high price.'
            ),
            462 =>
            array(
                'id' => 463,
                'name' => 'Relic Gold',
                'description' => 'A gold coin used in a civilization about 3,000 years ago. A maniac will buy it for a high price.'
            ),
            463 =>
            array(
                'id' => 464,
                'name' => 'Relic Silver',
                'description' => 'A silver coin used in a civilization about 3,000 years ago. A maniac will buy it for a high price.'
            ),
            464 =>
            array(
                'id' => 465,
                'name' => 'Relic Statue',
                'description' => 'A stone figure made in a civilization about 3,000 years ago. A maniac will buy it for a high price.'
            ),
            465 =>
            array(
                'id' => 466,
                'name' => 'Relic Vase',
                'description' => 'A vase made in a civilization about 3,000 years ago. A maniac will buy it for a high price.'
            ),
            466 =>
            array(
                'id' => 467,
                'name' => 'Repeat Ball',
                'description' => 'A somewhat different Poké Ball that works especially well on Pokémon species that were previously caught.'
            ),
            467 =>
            array(
                'id' => 468,
                'name' => 'Repel',
                'description' => 'An item that prevents weak wild Pokémon from appearing for 100 steps after its use.'
            ),
            468 =>
            array(
                'id' => 469,
                'name' => 'Reset Urge',
                'description' => 'When used, it restores any stat changes of an ally Pokémon.'
            ),
            469 =>
            array(
                'id' => 470,
                'name' => 'Resist Wing',
                'description' => 'Increases Defense EVs by 1.'
            ),
            470 =>
            array(
                'id' => 471,
                'name' => 'Reveal Glass',
                'description' => 'A looking glass that reveals the truth. It\'s a mysterious glass that returns a Pokémon to its original shape.'
            ),
            471 =>
            array(
                'id' => 472,
                'name' => 'Revival Herb',
                'description' => 'Revives a Pokémon to max HP, but lowers Friendship.'
            ),
            472 =>
            array(
                'id' => 473,
                'name' => 'Revive',
                'description' => 'A medicine that revives a fainted Pokémon. It restores half the Pokémon\'s maximum HP.'
            ),
            473 =>
            array(
                'id' => 474,
                'name' => 'Ribbon Sweet',
                'description' => 'Evolves Milcery into Ribbon Flavor Alcremie.'
            ),
            474 =>
            array(
                'id' => 475,
                'name' => 'Rindo Berry',
                'description' => 'Weakens a supereffective Grass-type attack against the holding Pokémon.'
            ),
            475 =>
            array(
                'id' => 476,
                'name' => 'Ring Target',
                'description' => 'Moves that would otherwise have no effect will land on the Pokémon that holds it.'
            ),
            476 =>
            array(
                'id' => 477,
                'name' => 'Rock Gem',
                'description' => 'Increases the power of a Rock-type move only once.'
            ),
            477 =>
            array(
                'id' => 478,
                'name' => 'Rock Incense',
                'description' => 'Increases the power of Rock-type moves. Breeding Sudowoodo produces Bonsly when held.'
            ),
            478 =>
            array(
                'id' => 479,
                'name' => 'Rock Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Rock type.'
            ),
            479 =>
            array(
                'id' => 480,
                'name' => 'Rockium Z',
                'description' => 'Allows the use of Continental Crush, the Rock type Z-Move.'
            ),
            480 =>
            array(
                'id' => 481,
                'name' => 'Rocky Helmet',
                'description' => 'If the holder of this item takes damage, the attacker will also be damaged upon contact.'
            ),
            481 =>
            array(
                'id' => 482,
                'name' => 'Roller Skates',
                'description' => 'Attaches roller skates to the bottom of your shoes, allowing you to glide quickly around and perform tricks.'
            ),
            482 =>
            array(
                'id' => 483,
                'name' => 'Room Service',
                'description' => 'Lowers the Pokémon\'s speed during Trick Room.'
            ),
            483 =>
            array(
                'id' => 484,
                'name' => 'Root Fossil',
                'description' => 'A fossil of an ancient Pokémon that lived in the sea. It appears to be part of a plant root.'
            ),
            484 =>
            array(
                'id' => 485,
                'name' => 'Rose Incense',
                'description' => 'Increases the power of Grass-type moves. Breeding Roselia or Roserade produces Budew when held.'
            ),
            485 =>
            array(
                'id' => 486,
                'name' => 'Roseli Berry',
                'description' => 'If held by a Pokémon, this Berry will lessen the damage taken from one supereffective Fairy-type attack.'
            ),
            486 =>
            array(
                'id' => 487,
                'name' => 'Roto Bargain',
                'description' => 'Reduces the prices of products at Poké Marts by half.'
            ),
            487 =>
            array(
                'id' => 488,
                'name' => 'Roto Boost',
                'description' => 'Raises all stats of your battling Pokémon.'
            ),
            488 =>
            array(
                'id' => 489,
                'name' => 'Roto Catch',
                'description' => 'Increases the chance to catch Pokémon a lot.'
            ),
            489 =>
            array(
                'id' => 490,
                'name' => 'Roto Encounter',
                'description' => 'Increases the chance of encountering high-level wild Pokémon a lot for a certain period of time.'
            ),
            490 =>
            array(
                'id' => 491,
                'name' => 'Roto Exp. Points',
                'description' => 'Increases the Exp. Points your Pokémon receive after battle a little.'
            ),
            491 =>
            array(
                'id' => 492,
                'name' => 'Roto Friendship',
                'description' => 'Helps Pokémon in your party grow friendly faster.'
            ),
            492 =>
            array(
                'id' => 493,
                'name' => 'Roto Hatch',
                'description' => 'Helps Eggs hatch faster.'
            ),
            493 =>
            array(
                'id' => 494,
                'name' => 'Roto HP Restore',
                'description' => 'Fully restores the HP of your battling Pokémon.'
            ),
            494 =>
            array(
                'id' => 495,
                'name' => 'Roto PP Restore',
                'description' => 'Fully restores the PP of your battling Pokémon.'
            ),
            495 =>
            array(
                'id' => 496,
                'name' => 'Roto Prize Money',
                'description' => 'Triples the prize money you receive after battle.'
            ),
            496 =>
            array(
                'id' => 497,
                'name' => 'Roto Stealth',
                'description' => 'Prevents you from encountering wild Pokémon for a certain period of time.'
            ),
            497 =>
            array(
                'id' => 498,
                'name' => 'Rowap Berry',
                'description' => 'If held by a Pokémon and a special attack lands, the attacker also takes damage.'
            ),
            498 =>
            array(
                'id' => 499,
                'name' => 'Sablenite',
                'description' => 'Enables Sableye to Mega Evolve during battle.'
            ),
            499 =>
            array(
                'id' => 500,
                'name' => 'Sachet',
                'description' => 'Evolves Spritzee when traded holding the item.'
            ),
        ));
        DB::table('items')->insert(array(
            0 =>
            array(
                'id' => 501,
                'name' => 'Sacred Ash',
                'description' => 'It revives all fainted Pokémon. In doing so, it also fully restores their HP.'
            ),
            1 =>
            array(
                'id' => 502,
                'name' => 'Safari Ball',
                'description' => 'A special Poké Ball that is used only in the Great Marsh. It is decorated in a camouflage pattern.'
            ),
            2 =>
            array(
                'id' => 503,
                'name' => 'Safety Goggles',
                'description' => 'Prevents damage from weather and powder.'
            ),
            3 =>
            array(
                'id' => 504,
                'name' => 'Salac Berry',
                'description' => 'Raises Speed when HP is low.'
            ),
            4 =>
            array(
                'id' => 505,
                'name' => 'Salamencite',
                'description' => 'Enables Salamence to Mega Evolve during battle.'
            ),
            5 =>
            array(
                'id' => 506,
                'name' => 'Sassy Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Sassy nature.'
            ),
            6 =>
            array(
                'id' => 507,
                'name' => 'Sceptilite',
                'description' => 'Enables Sceptile to Mega Evolve during battle.'
            ),
            7 =>
            array(
                'id' => 508,
                'name' => 'Scizorite',
                'description' => 'Enables Scizor to Mega Evolve during battle.'
            ),
            8 =>
            array(
                'id' => 509,
                'name' => 'Scope Lens',
                'description' => 'Increases critical-hit ratio.'
            ),
            9 =>
            array(
                'id' => 510,
                'name' => 'Sea Incense',
                'description' => 'Increases the power of Water-type moves. Breeding Marill or Azumarill produces Azurill when held.'
            ),
            10 =>
            array(
                'id' => 511,
                'name' => 'Serious Mint',
                'description' => 'Changes the Pokémon\'s stats to match a neutral nature.'
            ),
            11 =>
            array(
                'id' => 512,
                'name' => 'Shalour Sable',
                'description' => 'Heals all major status conditions.'
            ),
            12 =>
            array(
                'id' => 513,
                'name' => 'Sharp Beak',
                'description' => 'Increases the power of Flying-type moves.'
            ),
            13 =>
            array(
                'id' => 514,
                'name' => 'Sharpedonite',
                'description' => 'Enables Sharpedo to Mega Evolve during battle.'
            ),
            14 =>
            array(
                'id' => 515,
                'name' => 'Shed Shell',
                'description' => 'A tough, discarded carapace to be held by a Pokémon. It enables the holder to switch with a waiting Pokémon in battle.'
            ),
            15 =>
            array(
                'id' => 516,
                'name' => 'Shell Bell',
                'description' => 'An item to be held by a Pokémon. The holder\'s HP is restored a little every time it inflicts damage.'
            ),
            16 =>
            array(
                'id' => 517,
                'name' => 'Shiny Charm',
                'description' => 'A shiny charm said to increase the chance of finding a Shiny Pokémon in the wild.'
            ),
            17 =>
            array(
                'id' => 518,
                'name' => 'Shiny Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            18 =>
            array(
                'id' => 519,
                'name' => 'Shoal Salt',
                'description' => 'Pure salt that can be discovered deep inside the Shoal Cave. A maniac will buy it for a high price.'
            ),
            19 =>
            array(
                'id' => 520,
                'name' => 'Shoal Shell',
                'description' => 'A pretty seashell that can be found deep inside the Shoal Cave. A maniac will buy it for a high price.'
            ),
            20 =>
            array(
                'id' => 521,
                'name' => 'Shock Drive',
                'description' => 'Changes Techno Blast to an Electric-type move when held by Genesect.'
            ),
            21 =>
            array(
                'id' => 522,
                'name' => 'Shuca Berry',
                'description' => 'Weakens a supereffective Ground-type attack against the holding Pokémon.'
            ),
            22 =>
            array(
                'id' => 523,
                'name' => 'Silk Scarf',
                'description' => 'Increases the power of Normal-type moves.'
            ),
            23 =>
            array(
                'id' => 524,
                'name' => 'Silver Leaf',
                'description' => ''
            ),
            24 =>
            array(
                'id' => 525,
                'name' => 'Silver Nanab Berry',
                'description' => 'Greatly calms a Pokémon in battle, in Let\'s Go Pikachu/Eevee.'
            ),
            25 =>
            array(
                'id' => 526,
                'name' => 'Silver Pinap Berry',
                'description' => 'Greatly increases chance of getting items when a Pokémon is caught, in Pokémon Let\'s Go.'
            ),
            26 =>
            array(
                'id' => 527,
                'name' => 'Silver Powder',
                'description' => 'Increases the power of Bug-type moves.'
            ),
            27 =>
            array(
                'id' => 528,
                'name' => 'Silver Razz Berry',
                'description' => 'Makes a Pokémon easier to catch in Pokémon Let\'s Go.'
            ),
            28 =>
            array(
                'id' => 529,
                'name' => 'Sitrus Berry',
                'description' => 'If held by a Pokémon, it heals the user\'s HP a little.'
            ),
            29 =>
            array(
                'id' => 530,
                'name' => 'Skull Fossil',
                'description' => 'A fossil from a prehistoric Pokémon that lived on the land. It appears to be part of a head.'
            ),
            30 =>
            array(
                'id' => 531,
                'name' => 'Sky Plate',
                'description' => 'Increases power of Flying-type moves. Changes Arceus\' type to Flying.'
            ),
            31 =>
            array(
                'id' => 532,
                'name' => 'Slowbronite',
                'description' => 'Enables Slowbro to Mega Evolve during battle.'
            ),
            32 =>
            array(
                'id' => 533,
                'name' => 'Small Bouquet',
                'description' => ''
            ),
            33 =>
            array(
                'id' => 534,
                'name' => 'Smart Candy',
                'description' => 'Increases a Pokémon\'s Special Attack stat by 1.'
            ),
            34 =>
            array(
                'id' => 535,
                'name' => 'Smart Candy L',
                'description' => 'Increases a Pokémon\'s Special Attack stat.'
            ),
            35 =>
            array(
                'id' => 536,
                'name' => 'Smart Candy XL',
                'description' => 'Increases a Pokémon\'s Special Attack stat.'
            ),
            36 =>
            array(
                'id' => 537,
                'name' => 'Smoke Ball',
                'description' => 'An item to be held by a Pokémon. It enables the holder to flee from any wild Pokémon without fail.'
            ),
            37 =>
            array(
                'id' => 538,
                'name' => 'Smooth Rock',
                'description' => 'A Pokémon held item that extends the duration of the move Sandstorm used by the holder.'
            ),
            38 =>
            array(
                'id' => 539,
                'name' => 'Snorlium Z',
                'description' => 'Allows Snorlax to upgrade Giga Impact to a Z-Move, Pulverizing Pancake.'
            ),
            39 =>
            array(
                'id' => 540,
                'name' => 'Snowball',
                'description' => 'Raises Attack if hit by an Ice-type move.'
            ),
            40 =>
            array(
                'id' => 541,
                'name' => 'Soda Pop',
                'description' => 'Restores 50 HP.'
            ),
            41 =>
            array(
                'id' => 542,
                'name' => 'Soft Sand',
                'description' => 'Increases the power of Ground-type moves.'
            ),
            42 =>
            array(
                'id' => 543,
                'name' => 'Solganium Z',
                'description' => 'Allows Solgaleo to upgrade Sunsteel Strike to a Z-Move, Searing Sunraze Smash.'
            ),
            43 =>
            array(
                'id' => 544,
                'name' => 'Soothe Bell',
                'description' => 'An item to be held by a Pokémon. It is a bell with a comforting chime that calms the holder and makes it friendly.'
            ),
            44 =>
            array(
                'id' => 545,
                'name' => 'Soul Dew',
                'description' => 'Increases the power of Psychic- and Dragon-type moves when held by Latios or Latias. Increases Sp.Atk/Sp.Def prior to Gen 7.'
            ),
            45 =>
            array(
                'id' => 546,
                'name' => 'Spell Tag',
                'description' => 'Increases the power of Ghost-type moves.'
            ),
            46 =>
            array(
                'id' => 547,
                'name' => 'Spelon Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            47 =>
            array(
                'id' => 548,
                'name' => 'Splash Plate',
                'description' => 'Increases power of Water-type moves. Changes Arceus\' type to Water.'
            ),
            48 =>
            array(
                'id' => 549,
                'name' => 'Spooky Plate',
                'description' => 'Increases power of Ghost-type moves. Changes Arceus\' type to Ghost.'
            ),
            49 =>
            array(
                'id' => 550,
                'name' => 'Sport Ball',
                'description' => 'A special Poké Ball for the Bug-Catching Contest.'
            ),
            50 =>
            array(
                'id' => 551,
                'name' => 'Sprinklotad',
                'description' => 'A watering can shaped like a Lotad. It helps promote the healthy growth of any Berries planted in good, soft soil.'
            ),
            51 =>
            array(
                'id' => 552,
                'name' => 'Stable Mulch',
                'description' => 'A fertilizer to be spread on soft soil in regions where Berries are grown. A maniac will buy it for a high price.'
            ),
            52 =>
            array(
                'id' => 553,
                'name' => 'Star Piece',
                'description' => 'A shard of a pretty gem that sparkles in a red color. It can be sold at a high price to shops.'
            ),
            53 =>
            array(
                'id' => 554,
                'name' => 'Star Sweet',
                'description' => 'Evolves Milcery into Star Flavor Alcremie.'
            ),
            54 =>
            array(
                'id' => 555,
                'name' => 'Stardust',
                'description' => 'Lovely, red-colored sand with a loose, silky feel. It can be sold at a high price to shops.'
            ),
            55 =>
            array(
                'id' => 556,
                'name' => 'Starf Berry',
                'description' => 'Sharply raises a random stat when HP is low.'
            ),
            56 =>
            array(
                'id' => 557,
                'name' => 'Steel Gem',
                'description' => 'Increases the power of a Steel-type move only once.'
            ),
            57 =>
            array(
                'id' => 558,
                'name' => 'Steel Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Steel type.'
            ),
            58 =>
            array(
                'id' => 559,
                'name' => 'Steelium Z',
                'description' => 'Allows the use of Corkscrew Crash, the Steel type Z-Move.'
            ),
            59 =>
            array(
                'id' => 560,
                'name' => 'Steelixite',
                'description' => 'Enables Steelix to Mega Evolve during battle.'
            ),
            60 =>
            array(
                'id' => 561,
                'name' => 'Stick',
                'description' => 'Increases critical-hit ratio when held by Farfetch\'d.'
            ),
            61 =>
            array(
                'id' => 562,
                'name' => 'Sticky Barb',
                'description' => 'A held item that damages the holder on every turn. It may latch on to foes and allies that touch the holder.'
            ),
            62 =>
            array(
                'id' => 563,
                'name' => 'Stone Plate',
                'description' => 'Increases power of Rock-type moves. Changes Arceus\' type to Rock.'
            ),
            63 =>
            array(
                'id' => 564,
                'name' => 'Strange Souvenir',
                'description' => 'An ornament depicting a Pokémon that is venerated as a protector in some region far from Kalos.'
            ),
            64 =>
            array(
                'id' => 565,
                'name' => 'Strawberry Sweet',
                'description' => 'Evolves Milcery into Strawberry Flavor Alcremie.'
            ),
            65 =>
            array(
                'id' => 566,
                'name' => 'Stretchy Spring',
                'description' => ''
            ),
            66 =>
            array(
                'id' => 567,
                'name' => 'Sun Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            67 =>
            array(
                'id' => 568,
                'name' => 'Super Lure',
                'description' => 'Attracts Pokémon in the wild.'
            ),
            68 =>
            array(
                'id' => 569,
                'name' => 'Super Potion',
                'description' => 'Restores 60 HP.'
            ),
            69 =>
            array(
                'id' => 570,
                'name' => 'Super Repel',
                'description' => 'An item that prevents weak wild Pokémon from appearing for 200 steps after its use.'
            ),
            70 =>
            array(
                'id' => 571,
                'name' => 'Swampertite',
                'description' => 'Enables Swampert to Mega Evolve during battle.'
            ),
            71 =>
            array(
                'id' => 572,
                'name' => 'Sweet Apple',
                'description' => 'Evolves Applin into Appletun.'
            ),
            72 =>
            array(
                'id' => 573,
                'name' => 'Sweet Heart',
                'description' => 'Very sweet chocolate. It restores the HP of one Pokémon by only 20 points.'
            ),
            73 =>
            array(
                'id' => 574,
                'name' => 'Swift Wing',
                'description' => 'Increases Speed EVs by 1.'
            ),
            74 =>
            array(
                'id' => 575,
                'name' => 'Tamato Berry',
                'description' => 'Increases Friendship but lowers Speed EVs.'
            ),
            75 =>
            array(
                'id' => 576,
                'name' => 'Tanga Berry',
                'description' => 'Weakens a supereffective Bug-type attack against the holding Pokémon.'
            ),
            76 =>
            array(
                'id' => 577,
                'name' => 'Tapunium Z',
                'description' => 'Allows the Tapus to upgrade Nature\'s Madness to a Z-Move, Guardian of Alola.'
            ),
            77 =>
            array(
                'id' => 578,
                'name' => 'Tart Apple',
                'description' => 'Evolves Applin into Flapple.'
            ),
            78 =>
            array(
                'id' => 579,
                'name' => 'Terrain Extender',
                'description' => 'An item to be held by a Pokémon. It extends the duration of the terrain caused by the holder\'s move or Ability.'
            ),
            79 =>
            array(
                'id' => 580,
                'name' => 'Thick Club',
                'description' => 'Increases Attack when held by Cubone or Marowak.'
            ),
            80 =>
            array(
                'id' => 581,
                'name' => 'Throat Spray',
                'description' => 'Raises Sp. Atk when a sound-based move is used.'
            ),
            81 =>
            array(
                'id' => 582,
                'name' => 'Thunder Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            82 =>
            array(
                'id' => 583,
                'name' => 'Timer Ball',
                'description' => 'A somewhat different BALL that becomes progressively better the more turns there are in a battle.'
            ),
            83 =>
            array(
                'id' => 584,
                'name' => 'Timid Mint',
                'description' => 'Changes the Pokémon\'s stats to match the Timid nature.'
            ),
            84 =>
            array(
                'id' => 585,
                'name' => 'Tiny Mushroom',
                'description' => 'A small and rare mushroom. It is sought after by collectors.'
            ),
            85 =>
            array(
                'id' => 586,
                'name' => 'TMV Pass',
                'description' => 'A commuter pass that allows the holder to ride the TMV between Lumiose City and Kiloude City at any time.'
            ),
            86 =>
            array(
                'id' => 587,
                'name' => 'Tough Candy',
                'description' => 'Increases a Pokémon\'s Defense stat by 1.'
            ),
            87 =>
            array(
                'id' => 588,
                'name' => 'Tough Candy L',
                'description' => 'Increases a Pokémon\'s Defense stat.'
            ),
            88 =>
            array(
                'id' => 589,
                'name' => 'Tough Candy XL',
                'description' => 'Increases a Pokémon\'s Defense stat.'
            ),
            89 =>
            array(
                'id' => 590,
                'name' => 'Toxic Orb',
                'description' => 'An item to be held by a Pokémon. It is a bizarre orb that badly poisons the holder in battle.'
            ),
            90 =>
            array(
                'id' => 591,
                'name' => 'Toxic Plate',
                'description' => 'Increases power of Poison-type moves. Changes Arceus\' type to Poison.'
            ),
            91 =>
            array(
                'id' => 592,
                'name' => 'Tropical Shell',
                'description' => ''
            ),
            92 =>
            array(
                'id' => 593,
                'name' => 'Twisted Spoon',
                'description' => 'Increases the power of Psychic-type moves.'
            ),
            93 =>
            array(
                'id' => 594,
                'name' => 'Tyranitarite',
                'description' => 'Enables Tyranitar to Mega Evolve during battle.'
            ),
            94 =>
            array(
                'id' => 595,
                'name' => 'Ultra Ball',
                'description' => 'An ultra-performance Ball that provides a higher Pokémon catch rate than a Great Ball.'
            ),
            95 =>
            array(
                'id' => 596,
                'name' => 'Ultranecrozium Z',
                'description' => 'Allows Ultra Necrozma to upgrade Photon Geyser to a Z-Move, Light That Burns the Sky.'
            ),
            96 =>
            array(
                'id' => 597,
                'name' => 'Up-Grade',
                'description' => 'Evolves Porygon when traded holding the item.'
            ),
            97 =>
            array(
                'id' => 598,
                'name' => 'Utility Umbrella',
                'description' => 'An item to be held by a Pokémon. This sturdy umbrella protects the holder from the effects of weather.'
            ),
            98 =>
            array(
                'id' => 599,
                'name' => 'Venusaurite',
                'description' => 'Enables Venusaur to Mega Evolve during battle.'
            ),
            99 =>
            array(
                'id' => 600,
                'name' => 'Wacan Berry',
                'description' => 'Weakens a supereffective Electric-type attack against the holding Pokémon.'
            ),
            100 =>
            array(
                'id' => 601,
                'name' => 'Water Gem',
                'description' => 'Increases the power of a Water-type move only once.'
            ),
            101 =>
            array(
                'id' => 602,
                'name' => 'Water Memory',
                'description' => 'Changes Silvally and its move Multi-Attack to Water type.'
            ),
            102 =>
            array(
                'id' => 603,
                'name' => 'Water Stone',
                'description' => 'Evolves certain species of Pokémon.'
            ),
            103 =>
            array(
                'id' => 604,
                'name' => 'Waterium Z',
                'description' => 'Allows the use of Hydro Vortex, the Water type Z-Move.'
            ),
            104 =>
            array(
                'id' => 605,
                'name' => 'Watmel Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            105 =>
            array(
                'id' => 606,
                'name' => 'Wave Incense',
                'description' => 'Increases the power of Water-type moves. Breeding Mantine produces Mantyke when held.'
            ),
            106 =>
            array(
                'id' => 607,
                'name' => 'Weakness Policy',
                'description' => 'Sharply raises Attack and Special Attack if hit by a super-effective move.'
            ),
            107 =>
            array(
                'id' => 608,
                'name' => 'Wepear Berry',
                'description' => 'A Berry which is very rare in the Unova region. A maniac will buy it for a high price.'
            ),
            108 =>
            array(
                'id' => 609,
                'name' => 'Whipped Dream',
                'description' => 'Evolves Swirlix when traded holding the item.'
            ),
            109 =>
            array(
                'id' => 610,
                'name' => 'White Apricorn',
                'description' => 'A white Apricorn. It doesn\'t smell like anything.'
            ),
            110 =>
            array(
                'id' => 611,
                'name' => 'White Flute',
                'description' => 'A toy flute made from white glass. A maniac will buy it for a high price.'
            ),
            111 =>
            array(
                'id' => 612,
                'name' => 'White Herb',
                'description' => 'An item to be held by a POKéMON. It restores any lowered stat in battle. It can be used only once.'
            ),
            112 =>
            array(
                'id' => 613,
                'name' => 'Wide Lens',
                'description' => 'Increases the accuracy of moves.'
            ),
            113 =>
            array(
                'id' => 614,
                'name' => 'Wiki Berry',
                'description' => 'Restores HP if it\'s low, but may cause confusion.'
            ),
            114 =>
            array(
                'id' => 615,
                'name' => 'Wise Glasses',
                'description' => 'Increases the power of Special-category moves.'
            ),
            115 =>
            array(
                'id' => 616,
                'name' => 'Wishing Piece',
                'description' => 'Activates a Pokémon Den for a Max Raid Battle.'
            ),
            116 =>
            array(
                'id' => 617,
                'name' => 'Yache Berry',
                'description' => 'Weakens a supereffective Ice-type attack against the holding Pokémon.'
            ),
            117 =>
            array(
                'id' => 618,
                'name' => 'Yellow Apricorn',
                'description' => 'A yellow Apricorn. It has an invigorating scent.'
            ),
            118 =>
            array(
                'id' => 619,
                'name' => 'Yellow Flute',
                'description' => 'A toy flute made from yellow glass. A maniac will buy it for a high price.'
            ),
            119 =>
            array(
                'id' => 620,
                'name' => 'Yellow Nectar',
                'description' => 'A flower nectar obtained at Melemele Meadow. It changes the form of certain species of Pokémon.'
            ),
            120 =>
            array(
                'id' => 621,
                'name' => 'Yellow Scarf',
                'description' => 'Raises holder\'s Tough aspect in a Contest.'
            ),
            121 =>
            array(
                'id' => 622,
                'name' => 'Yellow Shard',
                'description' => 'A small yellow shard. It appears to be from some sort of implement made long ago.'
            ),
            122 =>
            array(
                'id' => 623,
                'name' => 'Zap Plate',
                'description' => 'Increases power of Electric-type moves. Changes Arceus\' type to Electric.'
            ),
            123 =>
            array(
                'id' => 624,
                'name' => 'Zinc',
                'description' => 'Increases Special Defense EVs by 10.'
            ),
            124 =>
            array(
                'id' => 625,
                'name' => 'Zoom Lens',
                'description' => 'Raises a move\'s accuracy if the holder moves after its target.'
            ),
        ));
    }
}
