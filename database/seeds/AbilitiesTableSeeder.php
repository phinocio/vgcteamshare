<?php

use Illuminate\Database\Seeder;

class AbilitiesTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		\DB::table('abilities')->delete();

		\DB::table('abilities')->insert(array(
			0 =>
			array(
				'id' => 1,
				'name' => 'Adaptability',
				'game_text' => 'Powers up moves of the same type.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			1 =>
			array(
				'id' => 2,
				'name' => 'Aerilate',
				'game_text' => 'Turns Normal-type moves into Flying-type moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			2 =>
			array(
				'id' => 3,
				'name' => 'Aftermath',
				'game_text' => 'Damages the attacker landing the finishing hit.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			3 =>
			array(
				'id' => 4,
				'name' => 'Air Lock',
				'game_text' => 'Eliminates the effects of weather.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			4 =>
			array(
				'id' => 5,
				'name' => 'Analytic',
				'game_text' => 'Boosts move power when the Pokémon moves last.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			5 =>
			array(
				'id' => 6,
				'name' => 'Anger Point',
				'game_text' => 'Maxes Attack after taking a critical hit.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			6 =>
			array(
				'id' => 7,
				'name' => 'Anticipation',
				'game_text' => 'Senses a foe\'s dangerous moves.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			7 =>
			array(
				'id' => 8,
				'name' => 'Arena Trap',
				'game_text' => 'Prevents the foe from fleeing.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			8 =>
			array(
				'id' => 9,
				'name' => 'Aroma Veil',
				'game_text' => 'Protects allies from attacks that limit their move choices.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			9 =>
			array(
				'id' => 10,
				'name' => 'Aura Break',
				'game_text' => 'Reduces power of Dark- and Fairy-type moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			10 =>
			array(
				'id' => 11,
				'name' => 'Bad Dreams',
				'game_text' => 'Reduces a sleeping foe\'s HP.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			11 =>
			array(
				'id' => 12,
				'name' => 'Ball Fetch',
				'game_text' => 'If the Pokémon is not holding an item, it will fetch the Poké Ball from the first failed throw of the battle.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			12 =>
			array(
				'id' => 13,
				'name' => 'Battery',
				'game_text' => 'Raises power of teammates\' Special moves.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			13 =>
			array(
				'id' => 14,
				'name' => 'Battle Armor',
				'game_text' => 'The Pokémon is protected against critical hits.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			14 =>
			array(
				'id' => 15,
				'name' => 'Battle Bond',
				'game_text' => 'Transform into Ash-Greninja after causing opponent to faint.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			15 =>
			array(
				'id' => 16,
				'name' => 'Beast Boost',
				'game_text' => 'The Pokémon boosts its most proficient stat each time it knocks out a Pokémon.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			16 =>
			array(
				'id' => 17,
				'name' => 'Berserk',
				'game_text' => 'Raises Special Attack when HP drops below half.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			17 =>
			array(
				'id' => 18,
				'name' => 'Big Pecks',
				'game_text' => 'Protects the Pokémon from Defense-lowering attacks.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			18 =>
			array(
				'id' => 19,
				'name' => 'Blaze',
				'game_text' => 'Powers up Fire-type moves in a pinch.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			19 =>
			array(
				'id' => 20,
				'name' => 'Bulletproof',
				'game_text' => 'Protects the Pokémon from ball and bomb moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			20 =>
			array(
				'id' => 21,
				'name' => 'Cheek Pouch',
				'game_text' => 'Restores additional HP when a Berry is consumed.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			21 =>
			array(
				'id' => 22,
				'name' => 'Chlorophyll',
				'game_text' => 'Boosts the Pokémon\'s Speed in sunshine.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			22 =>
			array(
				'id' => 23,
				'name' => 'Clear Body',
				'game_text' => 'Prevents other Pokémon from lowering its stats.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			23 =>
			array(
				'id' => 24,
				'name' => 'Cloud Nine',
				'game_text' => 'Eliminates the effects of weather.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			24 =>
			array(
				'id' => 25,
				'name' => 'Color Change',
				'game_text' => 'Changes the Pokémon\'s type to the foe\'s move.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			25 =>
			array(
				'id' => 26,
				'name' => 'Comatose',
				'game_text' => 'The Pokémon is always asleep but can still attack.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			26 =>
			array(
				'id' => 27,
				'name' => 'Competitive',
				'game_text' => 'Raises Special Attack when the Pokémon\'s stats are lowered.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			27 =>
			array(
				'id' => 28,
				'name' => 'Compound Eyes',
				'game_text' => 'The Pokémon\'s accuracy is boosted.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			28 =>
			array(
				'id' => 29,
				'name' => 'Contrary',
				'game_text' => 'Makes stat changes have an opposite effect.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			29 =>
			array(
				'id' => 30,
				'name' => 'Corrosion',
				'game_text' => 'The Pokémon can poison Steel and Poison types.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			30 =>
			array(
				'id' => 31,
				'name' => 'Cotton Down',
				'game_text' => 'When the Pokémon is hit by an attack, it scatters cotton fluff around and lowers the Speed stat of all Pokémon except itself.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			31 =>
			array(
				'id' => 32,
				'name' => 'Cursed Body',
				'game_text' => 'May disable a move used on the Pokémon.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			32 =>
			array(
				'id' => 33,
				'name' => 'Cute Charm',
				'game_text' => 'Contact with the Pokémon may cause infatuation.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			33 =>
			array(
				'id' => 34,
				'name' => 'Damp',
				'game_text' => 'Prevents the use of self-destructing moves.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			34 =>
			array(
				'id' => 35,
				'name' => 'Dancer',
				'game_text' => 'Copies the foe\'s Dance moves.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			35 =>
			array(
				'id' => 36,
				'name' => 'Dark Aura',
				'game_text' => 'Raises power of Dark type moves for all Pokémon in battle.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			36 =>
			array(
				'id' => 37,
				'name' => 'Dauntless Shield',
				'game_text' => 'Boosts the Pokémon\'s Defense stat when the Pokémon enters a battle.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			37 =>
			array(
				'id' => 38,
				'name' => 'Dazzling',
				'game_text' => 'Protects the Pokémon from high-priority moves.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			38 =>
			array(
				'id' => 39,
				'name' => 'Defeatist',
				'game_text' => 'Lowers stats when HP drops below half.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			39 =>
			array(
				'id' => 40,
				'name' => 'Defiant',
				'game_text' => 'When its stats are lowered its Attack increases.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			40 =>
			array(
				'id' => 41,
				'name' => 'Delta Stream',
				'game_text' => 'Creates strong winds when the ability activates.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			41 =>
			array(
				'id' => 42,
				'name' => 'Desolate Land',
				'game_text' => 'Turns the sunlight extremely harsh when the ability activates.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			42 =>
			array(
				'id' => 43,
				'name' => 'Disguise',
				'game_text' => 'Avoids damage for one turn.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			43 =>
			array(
				'id' => 44,
				'name' => 'Download',
				'game_text' => 'Adjusts power according to a foe\'s defenses.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			44 =>
			array(
				'id' => 45,
				'name' => 'Drizzle',
				'game_text' => 'The Pokémon makes it rain when it enters a battle.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			45 =>
			array(
				'id' => 46,
				'name' => 'Drought',
				'game_text' => 'Turns the sunlight harsh when the Pokémon enters a battle.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			46 =>
			array(
				'id' => 47,
				'name' => 'Dry Skin',
				'game_text' => 'Reduces HP if it is hot. Water restores HP.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			47 =>
			array(
				'id' => 48,
				'name' => 'Early Bird',
				'game_text' => 'The Pokémon awakens quickly from sleep.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			48 =>
			array(
				'id' => 49,
				'name' => 'Effect Spore',
				'game_text' => 'Contact may poison or cause paralysis or sleep.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			49 =>
			array(
				'id' => 50,
				'name' => 'Electric Surge',
				'game_text' => 'The Pokémon creates an Electric Terrain when it enters a battle.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			50 =>
			array(
				'id' => 51,
				'name' => 'Emergency Exit',
				'game_text' => 'Switches out when HP falls below 50%.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			51 =>
			array(
				'id' => 52,
				'name' => 'Fairy Aura',
				'game_text' => 'Raises power of Fairy type moves for all Pokémon in battle.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			52 =>
			array(
				'id' => 53,
				'name' => 'Filter',
				'game_text' => 'Reduces damage from super-effective attacks.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			53 =>
			array(
				'id' => 54,
				'name' => 'Flame Body',
				'game_text' => 'Contact with the Pokémon may burn the attacker.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			54 =>
			array(
				'id' => 55,
				'name' => 'Flare Boost',
				'game_text' => 'Powers up special attacks when burned.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			55 =>
			array(
				'id' => 56,
				'name' => 'Flash Fire',
				'game_text' => 'It powers up Fire-type moves if it\'s hit by one.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			56 =>
			array(
				'id' => 57,
				'name' => 'Flower Gift',
				'game_text' => 'Powers up party Pokémon when it is sunny.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			57 =>
			array(
				'id' => 58,
				'name' => 'Flower Veil',
				'game_text' => 'Prevents lowering of ally Grass-type Pokémon\'s stats.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			58 =>
			array(
				'id' => 59,
				'name' => 'Fluffy',
				'game_text' => 'Halves damage from contact moves, but doubles damage from Fire-type moves.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			59 =>
			array(
				'id' => 60,
				'name' => 'Forecast',
				'game_text' => 'Castform transforms with the weather.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			60 =>
			array(
				'id' => 61,
				'name' => 'Forewarn',
				'game_text' => 'Determines what moves a foe has.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			61 =>
			array(
				'id' => 62,
				'name' => 'Friend Guard',
				'game_text' => 'Reduces damage done to allies.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			62 =>
			array(
				'id' => 63,
				'name' => 'Frisk',
				'game_text' => 'The Pokémon can check a foe\'s held item.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			63 =>
			array(
				'id' => 64,
				'name' => 'Full Metal Body',
				'game_text' => 'Prevents other Pokémon from lowering its stats.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			64 =>
			array(
				'id' => 65,
				'name' => 'Fur Coat',
				'game_text' => 'Reduces damage from physical moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			65 =>
			array(
				'id' => 66,
				'name' => 'Gale Wings',
				'game_text' => 'Gives priority to Flying-type moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			66 =>
			array(
				'id' => 67,
				'name' => 'Galvanize',
				'game_text' => 'Normal-type moves become Electric-type moves and their power boosted.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			67 =>
			array(
				'id' => 68,
				'name' => 'Gluttony',
				'game_text' => 'Encourages the early use of a held Berry.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			68 =>
			array(
				'id' => 69,
				'name' => 'Gooey',
				'game_text' => 'Contact with the Pokémon lowers the attacker\'s Speed stat.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			69 =>
			array(
				'id' => 70,
				'name' => 'Gorilla Tactics',
				'game_text' => 'Boosts the Pokémon\'s Attack stat but only allows the use of the first selected move.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			70 =>
			array(
				'id' => 71,
				'name' => 'Grass Pelt',
				'game_text' => 'Boosts the Defense stat in Grassy Terrain.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			71 =>
			array(
				'id' => 72,
				'name' => 'Grassy Surge',
				'game_text' => 'The Pokémon creates a Grassy Terrain when it enters a battle.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			72 =>
			array(
				'id' => 73,
				'name' => 'Gulp Missile',
				'game_text' => 'When the Pokémon uses Surf or Dive, it will come back with prey. When it takes damage, it will spit out the prey to attack.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			73 =>
			array(
				'id' => 74,
				'name' => 'Guts',
				'game_text' => 'Boosts Attack if there is a status problem.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			74 =>
			array(
				'id' => 75,
				'name' => 'Harvest',
				'game_text' => 'May create another Berry after one is used.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			75 =>
			array(
				'id' => 76,
				'name' => 'Healer',
				'game_text' => 'May heal an ally\'s status conditions.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			76 =>
			array(
				'id' => 77,
				'name' => 'Heatproof',
				'game_text' => 'Weakens the power of Fire-type moves.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			77 =>
			array(
				'id' => 78,
				'name' => 'Heavy Metal',
				'game_text' => 'Doubles the Pokémon\'s weight.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			78 =>
			array(
				'id' => 79,
				'name' => 'Honey Gather',
				'game_text' => 'The Pokémon may gather Honey from somewhere.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			79 =>
			array(
				'id' => 80,
				'name' => 'Huge Power',
				'game_text' => 'Raises the Pokémon\'s Attack stat.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			80 =>
			array(
				'id' => 81,
				'name' => 'Hunger Switch',
				'game_text' => 'The Pokémon changes its form, alternating between its Full Belly Mode and Hangry Mode after the end of each turn.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			81 =>
			array(
				'id' => 82,
				'name' => 'Hustle',
				'game_text' => 'Boosts the Attack stat, but lowers accuracy.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			82 =>
			array(
				'id' => 83,
				'name' => 'Hydration',
				'game_text' => 'Heals status problems if it is raining.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			83 =>
			array(
				'id' => 84,
				'name' => 'Hyper Cutter',
				'game_text' => 'Prevents other Pokémon from lowering Attack stat.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			84 =>
			array(
				'id' => 85,
				'name' => 'Ice Body',
				'game_text' => 'The Pokémon gradually regains HP in a hailstorm.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			85 =>
			array(
				'id' => 86,
				'name' => 'Ice Face',
				'game_text' => 'The Pokémon\'s ice head can take a physical attack as a substitute, but the attack also changes the Pokémon\'s appearance. The ice will be restored when it hails.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			86 =>
			array(
				'id' => 87,
				'name' => 'Ice Scales',
				'game_text' => 'The Pokémon is protected by ice scales, which halve the damage taken from special moves.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			87 =>
			array(
				'id' => 88,
				'name' => 'Illuminate',
				'game_text' => 'Raises the likelihood of meeting wild Pokémon.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			88 =>
			array(
				'id' => 89,
				'name' => 'Illusion',
				'game_text' => 'Enters battle disguised as the last Pokémon in the party.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			89 =>
			array(
				'id' => 90,
				'name' => 'Immunity',
				'game_text' => 'Prevents the Pokémon from getting poisoned.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			90 =>
			array(
				'id' => 91,
				'name' => 'Imposter',
				'game_text' => 'It transforms itself into the Pokémon it is facing.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			91 =>
			array(
				'id' => 92,
				'name' => 'Infiltrator',
				'game_text' => 'Passes through the foe\'s barrier and strikes.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			92 =>
			array(
				'id' => 93,
				'name' => 'Innards Out',
				'game_text' => 'Deals damage upon fainting.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			93 =>
			array(
				'id' => 94,
				'name' => 'Inner Focus',
				'game_text' => 'The Pokémon is protected from flinching.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			94 =>
			array(
				'id' => 95,
				'name' => 'Insomnia',
				'game_text' => 'Prevents the Pokémon from falling asleep.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			95 =>
			array(
				'id' => 96,
				'name' => 'Intimidate',
				'game_text' => 'Lowers the foe\'s Attack stat.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			96 =>
			array(
				'id' => 97,
				'name' => 'Intrepid Sword',
				'game_text' => 'Boosts the Pokémon\'s Attack stat when the Pokémon enters a battle.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			97 =>
			array(
				'id' => 98,
				'name' => 'Iron Barbs',
				'game_text' => 'Inflicts damage to the Pokémon on contact.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			98 =>
			array(
				'id' => 99,
				'name' => 'Iron Fist',
				'game_text' => 'Boosts the power of punching moves.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			99 =>
			array(
				'id' => 100,
				'name' => 'Justified',
				'game_text' => 'Raises Attack when hit by a Dark-type move.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			100 =>
			array(
				'id' => 101,
				'name' => 'Keen Eye',
				'game_text' => 'Prevents other Pokémon from lowering accuracy.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			101 =>
			array(
				'id' => 102,
				'name' => 'Klutz',
				'game_text' => 'The Pokémon can\'t use any held items.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			102 =>
			array(
				'id' => 103,
				'name' => 'Leaf Guard',
				'game_text' => 'Prevents problems with status in sunny weather.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			103 =>
			array(
				'id' => 104,
				'name' => 'Levitate',
				'game_text' => 'Gives immunity to Ground type moves.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			104 =>
			array(
				'id' => 105,
				'name' => 'Libero',
				'game_text' => 'Changes the Pokémon\'s type to the type of the move it\'s about to use.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			105 =>
			array(
				'id' => 106,
				'name' => 'Light Metal',
				'game_text' => 'Halves the Pokémon\'s weight.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			106 =>
			array(
				'id' => 107,
				'name' => 'Lightning Rod',
				'game_text' => 'Draws in all Electric-type moves to up Sp. Attack.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			107 =>
			array(
				'id' => 108,
				'name' => 'Limber',
				'game_text' => 'The Pokémon is protected from paralysis.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			108 =>
			array(
				'id' => 109,
				'name' => 'Liquid Ooze',
				'game_text' => 'Damages attackers using any draining move.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			109 =>
			array(
				'id' => 110,
				'name' => 'Liquid Voice',
				'game_text' => 'All sound-based moves become Water-type moves.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			110 =>
			array(
				'id' => 111,
				'name' => 'Long Reach',
				'game_text' => 'The Pokémon uses its moves without making contact with the target.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			111 =>
			array(
				'id' => 112,
				'name' => 'Magic Bounce',
				'game_text' => 'Reflects status- changing moves.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			112 =>
			array(
				'id' => 113,
				'name' => 'Magic Guard',
				'game_text' => 'Protects the Pokémon from indirect damage.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			113 =>
			array(
				'id' => 114,
				'name' => 'Magician',
				'game_text' => 'The Pokémon steals the held item of a Pokémon it hits with a move.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			114 =>
			array(
				'id' => 115,
				'name' => 'Magma Armor',
				'game_text' => 'Prevents the Pokémon from becoming frozen.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			115 =>
			array(
				'id' => 116,
				'name' => 'Magnet Pull',
				'game_text' => 'Prevents Steel-type Pokémon from escaping.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			116 =>
			array(
				'id' => 117,
				'name' => 'Marvel Scale',
				'game_text' => 'Ups Defense if there is a status problem.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			117 =>
			array(
				'id' => 118,
				'name' => 'Mega Launcher',
				'game_text' => 'Boosts the power of aura and pulse moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			118 =>
			array(
				'id' => 119,
				'name' => 'Merciless',
				'game_text' => 'The Pokémon\'s attacks become critical hits if the target is poisoned.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			119 =>
			array(
				'id' => 120,
				'name' => 'Mimicry',
				'game_text' => 'Changes the Pokémon\'s type depending on the terrain.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			120 =>
			array(
				'id' => 121,
				'name' => 'Minus',
				'game_text' => 'Ups Sp. Atk if another Pokémon has Plus or Minus.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			121 =>
			array(
				'id' => 122,
				'name' => 'Mirror Armor',
				'game_text' => 'Bounces back only the stat-lowering effects that the Pokémon receives.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			122 =>
			array(
				'id' => 123,
				'name' => 'Misty Surge',
				'game_text' => 'The Pokémon creates a Misty Terrain when it enters a battle.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			123 =>
			array(
				'id' => 124,
				'name' => 'Mold Breaker',
				'game_text' => 'Moves can be used regardless of Abilities.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			124 =>
			array(
				'id' => 125,
				'name' => 'Moody',
				'game_text' => 'Raises one stat and lowers another.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			125 =>
			array(
				'id' => 126,
				'name' => 'Motor Drive',
				'game_text' => 'Raises Speed if hit by an Electric-type move.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			126 =>
			array(
				'id' => 127,
				'name' => 'Moxie',
				'game_text' => 'Boosts Attack after knocking out any Pokémon.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			127 =>
			array(
				'id' => 128,
				'name' => 'Multiscale',
				'game_text' => 'Reduces damage when HP is full.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			128 =>
			array(
				'id' => 129,
				'name' => 'Multitype',
				'game_text' => 'Changes type to match the held Plate.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			129 =>
			array(
				'id' => 130,
				'name' => 'Mummy',
				'game_text' => 'Contact with this Pokémon spreads this Ability.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			130 =>
			array(
				'id' => 131,
				'name' => 'Natural Cure',
				'game_text' => 'All status problems heal when it switches out.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			131 =>
			array(
				'id' => 132,
				'name' => 'Neuroforce',
				'game_text' => 'Powers up moves that are super effective.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			132 =>
			array(
				'id' => 133,
				'name' => 'Neutralizing Gas',
				'game_text' => 'If the Pokémon with Neutralizing Gas is in the battle, the effects of all Pokémon\'s Abilities will be nullified or will not be triggered.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			133 =>
			array(
				'id' => 134,
				'name' => 'No Guard',
				'game_text' => 'Ensures attacks by or against the Pokémon land.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			134 =>
			array(
				'id' => 135,
				'name' => 'Normalize',
				'game_text' => 'All the Pokémon\'s moves become the Normal type.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			135 =>
			array(
				'id' => 136,
				'name' => 'Oblivious',
				'game_text' => 'Prevents it from becoming infatuated.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			136 =>
			array(
				'id' => 137,
				'name' => 'Overcoat',
				'game_text' => 'Protects the Pokémon from weather damage.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			137 =>
			array(
				'id' => 138,
				'name' => 'Overgrow',
				'game_text' => 'Powers up Grass-type moves in a pinch.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			138 =>
			array(
				'id' => 139,
				'name' => 'Own Tempo',
				'game_text' => 'Prevents the Pokémon from becoming confused.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			139 =>
			array(
				'id' => 140,
				'name' => 'Parental Bond',
				'game_text' => 'Allows the Pokémon to attack twice.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			140 =>
			array(
				'id' => 141,
				'name' => 'Pastel Veil',
				'game_text' => 'Protects the Pokémon and its ally Pokémon from being poisoned.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			141 =>
			array(
				'id' => 142,
				'name' => 'Perish Body',
				'game_text' => 'When hit by a move that makes direct contact, the Pokémon and the attacker will faint after three turns unless they switch out of battle.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			142 =>
			array(
				'id' => 143,
				'name' => 'Pickpocket',
				'game_text' => 'Steals an item when hit by another Pokémon.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			143 =>
			array(
				'id' => 144,
				'name' => 'Pickup',
				'game_text' => 'The Pokémon may pick up items.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			144 =>
			array(
				'id' => 145,
				'name' => 'Pixilate',
				'game_text' => 'Turns Normal-type moves into Fairy-type moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			145 =>
			array(
				'id' => 146,
				'name' => 'Plus',
				'game_text' => 'Ups Sp. Atk if another Pokémon has Plus or Minus.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			146 =>
			array(
				'id' => 147,
				'name' => 'Poison Heal',
				'game_text' => 'Restores HP if the Pokémon is poisoned.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			147 =>
			array(
				'id' => 148,
				'name' => 'Poison Point',
				'game_text' => 'Contact with the Pokémon may poison the attacker.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			148 =>
			array(
				'id' => 149,
				'name' => 'Poison Touch',
				'game_text' => 'May poison targets when a Pokémon makes contact.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			149 =>
			array(
				'id' => 150,
				'name' => 'Power Construct',
				'game_text' => 'Changes form when HP drops below half.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			150 =>
			array(
				'id' => 151,
				'name' => 'Power of Alchemy',
				'game_text' => 'The Pokémon copies the Ability of a defeated ally.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			151 =>
			array(
				'id' => 152,
				'name' => 'Power Spot',
				'game_text' => 'Just being next to the Pokémon powers up moves.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			152 =>
			array(
				'id' => 153,
				'name' => 'Prankster',
				'game_text' => 'Gives priority to a status move.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			153 =>
			array(
				'id' => 154,
				'name' => 'Pressure',
				'game_text' => 'The Pokémon raises the foe\'s PP usage.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			154 =>
			array(
				'id' => 155,
				'name' => 'Primordial Sea',
				'game_text' => 'Makes it rain heavily when the ability activates.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			155 =>
			array(
				'id' => 156,
				'name' => 'Prism Armor',
				'game_text' => 'Reduces damage from super-effective attacks.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			156 =>
			array(
				'id' => 157,
				'name' => 'Propeller Tail',
				'game_text' => 'Ignores the effects of opposing Pokémon\'s Abilities and moves that draw in moves.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			157 =>
			array(
				'id' => 158,
				'name' => 'Protean',
				'game_text' => 'Changes the Pokémon\'s type to its last used move.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			158 =>
			array(
				'id' => 159,
				'name' => 'Psychic Surge',
				'game_text' => 'The Pokémon creates a Psychic Terrain when it enters a battle.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			159 =>
			array(
				'id' => 160,
				'name' => 'Punk Rock',
				'game_text' => 'Boosts the power of sound-based moves. The Pokémon also takes half the damage from these kinds of moves.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			160 =>
			array(
				'id' => 161,
				'name' => 'Pure Power',
				'game_text' => 'Raises the Pokémon\'s Attack stat.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			161 =>
			array(
				'id' => 162,
				'name' => 'Queenly Majesty',
				'game_text' => 'Prevents use of priority moves.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			162 =>
			array(
				'id' => 163,
				'name' => 'Quick Feet',
				'game_text' => 'Boosts Speed if there is a status problem.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			163 =>
			array(
				'id' => 164,
				'name' => 'Rain Dish',
				'game_text' => 'The Pokémon gradually regains HP in rain.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			164 =>
			array(
				'id' => 165,
				'name' => 'Rattled',
				'game_text' => 'Bug, Ghost or Dark type moves scare it and boost its Speed.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			165 =>
			array(
				'id' => 166,
				'name' => 'Receiver',
				'game_text' => 'Inherits an ally\'s ability when it faints.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			166 =>
			array(
				'id' => 167,
				'name' => 'Reckless',
				'game_text' => 'Powers up moves that have recoil damage.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			167 =>
			array(
				'id' => 168,
				'name' => 'Refrigerate',
				'game_text' => 'Turns Normal-type moves into Ice-type moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			168 =>
			array(
				'id' => 169,
				'name' => 'Regenerator',
				'game_text' => 'Restores a little HP when withdrawn from battle.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			169 =>
			array(
				'id' => 170,
				'name' => 'Ripen',
				'game_text' => 'Ripens Berries and doubles their effect.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			170 =>
			array(
				'id' => 171,
				'name' => 'Rivalry',
				'game_text' => 'Deals more damage to a Pokémon of same gender.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			171 =>
			array(
				'id' => 172,
				'name' => 'RKS System',
				'game_text' => 'Changes type depending on held item.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			172 =>
			array(
				'id' => 173,
				'name' => 'Rock Head',
				'game_text' => 'Protects the Pokémon from recoil damage.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			173 =>
			array(
				'id' => 174,
				'name' => 'Rough Skin',
				'game_text' => 'Inflicts damage to the attacker on contact.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			174 =>
			array(
				'id' => 175,
				'name' => 'Run Away',
				'game_text' => 'Enables a sure getaway from wild Pokémon.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			175 =>
			array(
				'id' => 176,
				'name' => 'Sand Force',
				'game_text' => 'Boosts certain moves\' power in a sandstorm.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			176 =>
			array(
				'id' => 177,
				'name' => 'Sand Rush',
				'game_text' => 'Boosts the Pokémon\'s Speed in a sandstorm.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			177 =>
			array(
				'id' => 178,
				'name' => 'Sand Spit',
				'game_text' => 'The Pokémon creates a sandstorm when it\'s hit by an attack.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			178 =>
			array(
				'id' => 179,
				'name' => 'Sand Stream',
				'game_text' => 'The Pokémon summons a sandstorm in battle.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			179 =>
			array(
				'id' => 180,
				'name' => 'Sand Veil',
				'game_text' => 'Boosts the Pokémon\'s evasion in a sandstorm.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			180 =>
			array(
				'id' => 181,
				'name' => 'Sap Sipper',
				'game_text' => 'Boosts Attack when hit by a Grass-type move.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			181 =>
			array(
				'id' => 182,
				'name' => 'Schooling',
				'game_text' => 'Changes Wishiwashi to School Form.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			182 =>
			array(
				'id' => 183,
				'name' => 'Scrappy',
				'game_text' => 'Enables moves to hit Ghost-type Pokémon.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			183 =>
			array(
				'id' => 184,
				'name' => 'Screen Cleaner',
				'game_text' => 'When the Pokémon enters a battle, the effects of Light Screen, Reflect, and Aurora Veil are nullified for both opposing and ally Pokémon.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			184 =>
			array(
				'id' => 185,
				'name' => 'Serene Grace',
				'game_text' => 'Boosts the likelihood of added effects appearing.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			185 =>
			array(
				'id' => 186,
				'name' => 'Shadow Shield',
				'game_text' => 'Reduces damage when HP is full.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			186 =>
			array(
				'id' => 187,
				'name' => 'Shadow Tag',
				'game_text' => 'Prevents the foe from escaping.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			187 =>
			array(
				'id' => 188,
				'name' => 'Shed Skin',
				'game_text' => 'The Pokémon may heal its own status problems.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			188 =>
			array(
				'id' => 189,
				'name' => 'Sheer Force',
				'game_text' => 'Removes added effects to increase move damage.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			189 =>
			array(
				'id' => 190,
				'name' => 'Shell Armor',
				'game_text' => 'The Pokémon is protected against critical hits.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			190 =>
			array(
				'id' => 191,
				'name' => 'Shield Dust',
				'game_text' => 'Blocks the added effects of attacks taken.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			191 =>
			array(
				'id' => 192,
				'name' => 'Shields Down',
				'game_text' => 'Changes stats when HP drops below half.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			192 =>
			array(
				'id' => 193,
				'name' => 'Simple',
				'game_text' => 'Doubles all stat changes.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			193 =>
			array(
				'id' => 194,
				'name' => 'Skill Link',
				'game_text' => 'Increases the frequency of multi-strike moves.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			194 =>
			array(
				'id' => 195,
				'name' => 'Slow Start',
				'game_text' => 'Temporarily halves Attack and Speed.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			195 =>
			array(
				'id' => 196,
				'name' => 'Slush Rush',
				'game_text' => 'Boosts the Pokémon\'s Speed stat in a hailstorm.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			196 =>
			array(
				'id' => 197,
				'name' => 'Sniper',
				'game_text' => 'Powers up moves if they become critical hits.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			197 =>
			array(
				'id' => 198,
				'name' => 'Snow Cloak',
				'game_text' => 'Raises evasion in a hailstorm.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			198 =>
			array(
				'id' => 199,
				'name' => 'Snow Warning',
				'game_text' => 'The Pokémon summons a hailstorm in battle.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			199 =>
			array(
				'id' => 200,
				'name' => 'Solar Power',
				'game_text' => 'In sunshine, Sp. Atk is boosted but HP decreases.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			200 =>
			array(
				'id' => 201,
				'name' => 'Solid Rock',
				'game_text' => 'Reduces damage from super-effective attacks.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			201 =>
			array(
				'id' => 202,
				'name' => 'Soul-Heart',
				'game_text' => 'Raises Special Attack when an ally faints.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			202 =>
			array(
				'id' => 203,
				'name' => 'Soundproof',
				'game_text' => 'Gives immunity to sound-based moves.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			203 =>
			array(
				'id' => 204,
				'name' => 'Speed Boost',
				'game_text' => 'Its Speed stat is gradually boosted.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			204 =>
			array(
				'id' => 205,
				'name' => 'Stakeout',
				'game_text' => 'Deals double damage to Pokémon switching in.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			205 =>
			array(
				'id' => 206,
				'name' => 'Stall',
				'game_text' => 'The Pokémon moves after all other Pokémon do.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			206 =>
			array(
				'id' => 207,
				'name' => 'Stalwart',
				'game_text' => 'Ignores the effects of opposing Pokémon\'s Abilities and moves that draw in moves.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			207 =>
			array(
				'id' => 208,
				'name' => 'Stamina',
				'game_text' => 'Raises Defense when attacked.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			208 =>
			array(
				'id' => 209,
				'name' => 'Stance Change',
				'game_text' => 'Changes form depending on moves used.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			209 =>
			array(
				'id' => 210,
				'name' => 'Static',
				'game_text' => 'Contact with the Pokémon may cause paralysis.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			210 =>
			array(
				'id' => 211,
				'name' => 'Steadfast',
				'game_text' => 'Raises Speed each time the Pokémon flinches.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			211 =>
			array(
				'id' => 212,
				'name' => 'Steam Engine',
				'game_text' => 'Boosts the Pokémon\'s Speed stat drastically if hit by a Fire- or Water-type move.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			212 =>
			array(
				'id' => 213,
				'name' => 'Steelworker',
				'game_text' => 'Powers up Steel-type moves.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			213 =>
			array(
				'id' => 214,
				'name' => 'Steely Spirit',
				'game_text' => 'Powers up ally Pokémon\'s Steel-type moves.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			214 =>
			array(
				'id' => 215,
				'name' => 'Stench',
				'game_text' => 'The stench may cause the target to flinch.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			215 =>
			array(
				'id' => 216,
				'name' => 'Sticky Hold',
				'game_text' => 'Protects the Pokémon from item theft.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			216 =>
			array(
				'id' => 217,
				'name' => 'Storm Drain',
				'game_text' => 'Draws in all Water-type moves to up Sp. Attack.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			217 =>
			array(
				'id' => 218,
				'name' => 'Strong Jaw',
				'game_text' => 'Boosts the power of biting moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			218 =>
			array(
				'id' => 219,
				'name' => 'Sturdy',
				'game_text' => 'It cannot be knocked out with one hit.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			219 =>
			array(
				'id' => 220,
				'name' => 'Suction Cups',
				'game_text' => 'Negates all moves that force switching out.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			220 =>
			array(
				'id' => 221,
				'name' => 'Super Luck',
				'game_text' => 'Heightens the critical-hit ratios of moves.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			221 =>
			array(
				'id' => 222,
				'name' => 'Surge Surfer',
				'game_text' => 'Doubles Speed during Electric Terrain.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			222 =>
			array(
				'id' => 223,
				'name' => 'Swarm',
				'game_text' => 'Powers up Bug-type moves in a pinch.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			223 =>
			array(
				'id' => 224,
				'name' => 'Sweet Veil',
				'game_text' => 'Prevents the Pokémon and allies from falling asleep.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			224 =>
			array(
				'id' => 225,
				'name' => 'Swift Swim',
				'game_text' => 'Boosts the Pokémon\'s Speed in rain.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			225 =>
			array(
				'id' => 226,
				'name' => 'Symbiosis',
				'game_text' => 'The Pokémon can pass an item to an ally.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			226 =>
			array(
				'id' => 227,
				'name' => 'Synchronize',
				'game_text' => 'Passes a burn, poison, or paralysis to the foe.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			227 =>
			array(
				'id' => 228,
				'name' => 'Tangled Feet',
				'game_text' => 'Raises evasion if the Pokémon is confused.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			228 =>
			array(
				'id' => 229,
				'name' => 'Tangling Hair',
				'game_text' => 'Contact with the Pokémon lowers the attacker\'s Speed stat.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			229 =>
			array(
				'id' => 230,
				'name' => 'Technician',
				'game_text' => 'Powers up the Pokémon\'s weaker moves.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			230 =>
			array(
				'id' => 231,
				'name' => 'Telepathy',
				'game_text' => 'Anticipates an ally\'s attack and dodges it.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			231 =>
			array(
				'id' => 232,
				'name' => 'Teravolt',
				'game_text' => 'Moves can be used regardless of Abilities.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			232 =>
			array(
				'id' => 233,
				'name' => 'Thick Fat',
				'game_text' => 'Ups resistance to Fire- and Ice-type moves.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			233 =>
			array(
				'id' => 234,
				'name' => 'Tinted Lens',
				'game_text' => 'Powers up “not very effective” moves.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			234 =>
			array(
				'id' => 235,
				'name' => 'Torrent',
				'game_text' => 'Powers up Water-type moves in a pinch.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			235 =>
			array(
				'id' => 236,
				'name' => 'Tough Claws',
				'game_text' => 'Boosts the power of contact moves.',
				'battle_effect' => '',
				'generation_id' => 6,
			),
			236 =>
			array(
				'id' => 237,
				'name' => 'Toxic Boost',
				'game_text' => 'Powers up physical attacks when poisoned.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			237 =>
			array(
				'id' => 238,
				'name' => 'Trace',
				'game_text' => 'The Pokémon copies a foe\'s Ability.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			238 =>
			array(
				'id' => 239,
				'name' => 'Triage',
				'game_text' => 'Gives priority to restorative moves.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			239 =>
			array(
				'id' => 240,
				'name' => 'Truant',
				'game_text' => 'Pokémon can\'t attack on consecutive turns.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			240 =>
			array(
				'id' => 241,
				'name' => 'Turboblaze',
				'game_text' => 'Moves can be used regardless of Abilities.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			241 =>
			array(
				'id' => 242,
				'name' => 'Unaware',
				'game_text' => 'Ignores any stat changes in the Pokémon.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			242 =>
			array(
				'id' => 243,
				'name' => 'Unburden',
				'game_text' => 'Raises Speed if a held item is used.',
				'battle_effect' => '',
				'generation_id' => 4,
			),
			243 =>
			array(
				'id' => 244,
				'name' => 'Unnerve',
				'game_text' => 'Makes the foe nervous and unable to eat Berries.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			244 =>
			array(
				'id' => 245,
				'name' => 'Victory Star',
				'game_text' => 'Boosts the accuracy of its allies and itself.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			245 =>
			array(
				'id' => 246,
				'name' => 'Vital Spirit',
				'game_text' => 'Prevents the Pokémon from falling asleep.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			246 =>
			array(
				'id' => 247,
				'name' => 'Volt Absorb',
				'game_text' => 'Restores HP if hit by an Electric-type move.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			247 =>
			array(
				'id' => 248,
				'name' => 'Wandering Spirit',
				'game_text' => 'The Pokémon exchanges Abilities with a Pokémon that hits it with a move that makes direct contact.',
				'battle_effect' => '',
				'generation_id' => 8,
			),
			248 =>
			array(
				'id' => 249,
				'name' => 'Water Absorb',
				'game_text' => 'Restores HP if hit by a Water-type move.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			249 =>
			array(
				'id' => 250,
				'name' => 'Water Bubble',
				'game_text' => 'Halves damage from Fire-type moves, doubles power of Water-type moves used, and prevents burns.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			250 =>
			array(
				'id' => 251,
				'name' => 'Water Compaction',
				'game_text' => 'Sharply raises Defense when hit by a Water-type move.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			251 =>
			array(
				'id' => 252,
				'name' => 'Water Veil',
				'game_text' => 'Prevents the Pokémon from getting a burn.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			252 =>
			array(
				'id' => 253,
				'name' => 'Weak Armor',
				'game_text' => 'Physical attacks lower Defense and raise Speed.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			253 =>
			array(
				'id' => 254,
				'name' => 'White Smoke',
				'game_text' => 'Prevents other Pokémon from lowering its stats.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			254 =>
			array(
				'id' => 255,
				'name' => 'Wimp Out',
				'game_text' => 'Switches out when HP drops below half.',
				'battle_effect' => '',
				'generation_id' => 7,
			),
			255 =>
			array(
				'id' => 256,
				'name' => 'Wonder Guard',
				'game_text' => 'Only super-effective moves will hit.',
				'battle_effect' => '',
				'generation_id' => 3,
			),
			256 =>
			array(
				'id' => 257,
				'name' => 'Wonder Skin',
				'game_text' => 'Makes status-changing moves more likely to miss.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
			257 =>
			array(
				'id' => 258,
				'name' => 'Zen Mode',
				'game_text' => 'Changes form when HP drops below half.',
				'battle_effect' => '',
				'generation_id' => 5,
			),
		));
	}
}
