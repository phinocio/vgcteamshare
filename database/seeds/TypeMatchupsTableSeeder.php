<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeMatchupsTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		DB::table('type_matchups')->delete();

		DB::table('type_matchups')->insert(array(
			0 =>
			array(
				'id' => '1',
				'attacking_type' => '1',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			1 =>
			array(
				'id' => '2',
				'attacking_type' => '1',
				'defending_type' => '2',
				'damage_multiplier' => '2.00',
			),
			2 =>
			array(
				'id' => '3',
				'attacking_type' => '1',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			3 =>
			array(
				'id' => '4',
				'attacking_type' => '1',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			4 =>
			array(
				'id' => '5',
				'attacking_type' => '1',
				'defending_type' => '5',
				'damage_multiplier' => '0.50',
			),
			5 =>
			array(
				'id' => '6',
				'attacking_type' => '1',
				'defending_type' => '6',
				'damage_multiplier' => '0.50',
			),
			6 =>
			array(
				'id' => '7',
				'attacking_type' => '1',
				'defending_type' => '7',
				'damage_multiplier' => '0.50',
			),
			7 =>
			array(
				'id' => '8',
				'attacking_type' => '1',
				'defending_type' => '8',
				'damage_multiplier' => '0.50',
			),
			8 =>
			array(
				'id' => '9',
				'attacking_type' => '1',
				'defending_type' => '9',
				'damage_multiplier' => '0.50',
			),
			9 =>
			array(
				'id' => '10',
				'attacking_type' => '1',
				'defending_type' => '10',
				'damage_multiplier' => '2.00',
			),
			10 =>
			array(
				'id' => '11',
				'attacking_type' => '1',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			11 =>
			array(
				'id' => '12',
				'attacking_type' => '1',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			12 =>
			array(
				'id' => '13',
				'attacking_type' => '1',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			13 =>
			array(
				'id' => '14',
				'attacking_type' => '1',
				'defending_type' => '14',
				'damage_multiplier' => '0.50',
			),
			14 =>
			array(
				'id' => '15',
				'attacking_type' => '1',
				'defending_type' => '15',
				'damage_multiplier' => '2.00',
			),
			15 =>
			array(
				'id' => '16',
				'attacking_type' => '1',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			16 =>
			array(
				'id' => '17',
				'attacking_type' => '1',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			17 =>
			array(
				'id' => '18',
				'attacking_type' => '1',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			18 =>
			array(
				'id' => '19',
				'attacking_type' => '2',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			19 =>
			array(
				'id' => '20',
				'attacking_type' => '2',
				'defending_type' => '2',
				'damage_multiplier' => '0.50',
			),
			20 =>
			array(
				'id' => '21',
				'attacking_type' => '2',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			21 =>
			array(
				'id' => '22',
				'attacking_type' => '2',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			22 =>
			array(
				'id' => '23',
				'attacking_type' => '2',
				'defending_type' => '5',
				'damage_multiplier' => '0.50',
			),
			23 =>
			array(
				'id' => '24',
				'attacking_type' => '2',
				'defending_type' => '6',
				'damage_multiplier' => '0.50',
			),
			24 =>
			array(
				'id' => '25',
				'attacking_type' => '2',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			25 =>
			array(
				'id' => '26',
				'attacking_type' => '2',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			26 =>
			array(
				'id' => '27',
				'attacking_type' => '2',
				'defending_type' => '9',
				'damage_multiplier' => '2.00',
			),
			27 =>
			array(
				'id' => '28',
				'attacking_type' => '2',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			28 =>
			array(
				'id' => '29',
				'attacking_type' => '2',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			29 =>
			array(
				'id' => '30',
				'attacking_type' => '2',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			30 =>
			array(
				'id' => '31',
				'attacking_type' => '2',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			31 =>
			array(
				'id' => '32',
				'attacking_type' => '2',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			32 =>
			array(
				'id' => '33',
				'attacking_type' => '2',
				'defending_type' => '15',
				'damage_multiplier' => '2.00',
			),
			33 =>
			array(
				'id' => '34',
				'attacking_type' => '2',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			34 =>
			array(
				'id' => '35',
				'attacking_type' => '2',
				'defending_type' => '17',
				'damage_multiplier' => '1.00',
			),
			35 =>
			array(
				'id' => '36',
				'attacking_type' => '2',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			36 =>
			array(
				'id' => '37',
				'attacking_type' => '3',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			37 =>
			array(
				'id' => '38',
				'attacking_type' => '3',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			38 =>
			array(
				'id' => '39',
				'attacking_type' => '3',
				'defending_type' => '3',
				'damage_multiplier' => '2.00',
			),
			39 =>
			array(
				'id' => '40',
				'attacking_type' => '3',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			40 =>
			array(
				'id' => '41',
				'attacking_type' => '3',
				'defending_type' => '5',
				'damage_multiplier' => '0.00',
			),
			41 =>
			array(
				'id' => '42',
				'attacking_type' => '3',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			42 =>
			array(
				'id' => '43',
				'attacking_type' => '3',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			43 =>
			array(
				'id' => '44',
				'attacking_type' => '3',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			44 =>
			array(
				'id' => '45',
				'attacking_type' => '3',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			45 =>
			array(
				'id' => '46',
				'attacking_type' => '3',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			46 =>
			array(
				'id' => '47',
				'attacking_type' => '3',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			47 =>
			array(
				'id' => '48',
				'attacking_type' => '3',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			48 =>
			array(
				'id' => '49',
				'attacking_type' => '3',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			49 =>
			array(
				'id' => '50',
				'attacking_type' => '3',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			50 =>
			array(
				'id' => '51',
				'attacking_type' => '3',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			51 =>
			array(
				'id' => '52',
				'attacking_type' => '3',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			52 =>
			array(
				'id' => '53',
				'attacking_type' => '3',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			53 =>
			array(
				'id' => '54',
				'attacking_type' => '3',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			54 =>
			array(
				'id' => '55',
				'attacking_type' => '4',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			55 =>
			array(
				'id' => '56',
				'attacking_type' => '4',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			56 =>
			array(
				'id' => '57',
				'attacking_type' => '4',
				'defending_type' => '3',
				'damage_multiplier' => '0.50',
			),
			57 =>
			array(
				'id' => '58',
				'attacking_type' => '4',
				'defending_type' => '4',
				'damage_multiplier' => '0.50',
			),
			58 =>
			array(
				'id' => '59',
				'attacking_type' => '4',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			59 =>
			array(
				'id' => '60',
				'attacking_type' => '4',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			60 =>
			array(
				'id' => '61',
				'attacking_type' => '4',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			61 =>
			array(
				'id' => '62',
				'attacking_type' => '4',
				'defending_type' => '8',
				'damage_multiplier' => '2.00',
			),
			62 =>
			array(
				'id' => '63',
				'attacking_type' => '4',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			63 =>
			array(
				'id' => '64',
				'attacking_type' => '4',
				'defending_type' => '10',
				'damage_multiplier' => '0.50',
			),
			64 =>
			array(
				'id' => '65',
				'attacking_type' => '4',
				'defending_type' => '11',
				'damage_multiplier' => '0.00',
			),
			65 =>
			array(
				'id' => '66',
				'attacking_type' => '4',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			66 =>
			array(
				'id' => '67',
				'attacking_type' => '4',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			67 =>
			array(
				'id' => '68',
				'attacking_type' => '4',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			68 =>
			array(
				'id' => '69',
				'attacking_type' => '4',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			69 =>
			array(
				'id' => '70',
				'attacking_type' => '4',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			70 =>
			array(
				'id' => '71',
				'attacking_type' => '4',
				'defending_type' => '17',
				'damage_multiplier' => '1.00',
			),
			71 =>
			array(
				'id' => '72',
				'attacking_type' => '4',
				'defending_type' => '18',
				'damage_multiplier' => '2.00',
			),
			72 =>
			array(
				'id' => '73',
				'attacking_type' => '5',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			73 =>
			array(
				'id' => '74',
				'attacking_type' => '5',
				'defending_type' => '2',
				'damage_multiplier' => '2.00',
			),
			74 =>
			array(
				'id' => '75',
				'attacking_type' => '5',
				'defending_type' => '3',
				'damage_multiplier' => '2.00',
			),
			75 =>
			array(
				'id' => '76',
				'attacking_type' => '5',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			76 =>
			array(
				'id' => '77',
				'attacking_type' => '5',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			77 =>
			array(
				'id' => '78',
				'attacking_type' => '5',
				'defending_type' => '6',
				'damage_multiplier' => '2.00',
			),
			78 =>
			array(
				'id' => '79',
				'attacking_type' => '5',
				'defending_type' => '7',
				'damage_multiplier' => '0.50',
			),
			79 =>
			array(
				'id' => '80',
				'attacking_type' => '5',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			80 =>
			array(
				'id' => '81',
				'attacking_type' => '5',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			81 =>
			array(
				'id' => '82',
				'attacking_type' => '5',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			82 =>
			array(
				'id' => '83',
				'attacking_type' => '5',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			83 =>
			array(
				'id' => '84',
				'attacking_type' => '5',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			84 =>
			array(
				'id' => '85',
				'attacking_type' => '5',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			85 =>
			array(
				'id' => '86',
				'attacking_type' => '5',
				'defending_type' => '14',
				'damage_multiplier' => '0.50',
			),
			86 =>
			array(
				'id' => '87',
				'attacking_type' => '5',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			87 =>
			array(
				'id' => '88',
				'attacking_type' => '5',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			88 =>
			array(
				'id' => '89',
				'attacking_type' => '5',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			89 =>
			array(
				'id' => '90',
				'attacking_type' => '5',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			90 =>
			array(
				'id' => '91',
				'attacking_type' => '6',
				'defending_type' => '1',
				'damage_multiplier' => '0.50',
			),
			91 =>
			array(
				'id' => '92',
				'attacking_type' => '6',
				'defending_type' => '2',
				'damage_multiplier' => '2.00',
			),
			92 =>
			array(
				'id' => '93',
				'attacking_type' => '6',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			93 =>
			array(
				'id' => '94',
				'attacking_type' => '6',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			94 =>
			array(
				'id' => '95',
				'attacking_type' => '6',
				'defending_type' => '5',
				'damage_multiplier' => '0.50',
			),
			95 =>
			array(
				'id' => '96',
				'attacking_type' => '6',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			96 =>
			array(
				'id' => '97',
				'attacking_type' => '6',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			97 =>
			array(
				'id' => '98',
				'attacking_type' => '6',
				'defending_type' => '8',
				'damage_multiplier' => '0.50',
			),
			98 =>
			array(
				'id' => '99',
				'attacking_type' => '6',
				'defending_type' => '9',
				'damage_multiplier' => '0.00',
			),
			99 =>
			array(
				'id' => '100',
				'attacking_type' => '6',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			100 =>
			array(
				'id' => '101',
				'attacking_type' => '6',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			101 =>
			array(
				'id' => '102',
				'attacking_type' => '6',
				'defending_type' => '12',
				'damage_multiplier' => '2.00',
			),
			102 =>
			array(
				'id' => '103',
				'attacking_type' => '6',
				'defending_type' => '13',
				'damage_multiplier' => '2.00',
			),
			103 =>
			array(
				'id' => '104',
				'attacking_type' => '6',
				'defending_type' => '14',
				'damage_multiplier' => '0.50',
			),
			104 =>
			array(
				'id' => '105',
				'attacking_type' => '6',
				'defending_type' => '15',
				'damage_multiplier' => '0.50',
			),
			105 =>
			array(
				'id' => '106',
				'attacking_type' => '6',
				'defending_type' => '16',
				'damage_multiplier' => '2.00',
			),
			106 =>
			array(
				'id' => '107',
				'attacking_type' => '6',
				'defending_type' => '17',
				'damage_multiplier' => '2.00',
			),
			107 =>
			array(
				'id' => '108',
				'attacking_type' => '6',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			108 =>
			array(
				'id' => '109',
				'attacking_type' => '7',
				'defending_type' => '1',
				'damage_multiplier' => '2.00',
			),
			109 =>
			array(
				'id' => '110',
				'attacking_type' => '7',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			110 =>
			array(
				'id' => '111',
				'attacking_type' => '7',
				'defending_type' => '3',
				'damage_multiplier' => '0.50',
			),
			111 =>
			array(
				'id' => '112',
				'attacking_type' => '7',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			112 =>
			array(
				'id' => '113',
				'attacking_type' => '7',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			113 =>
			array(
				'id' => '114',
				'attacking_type' => '7',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			114 =>
			array(
				'id' => '115',
				'attacking_type' => '7',
				'defending_type' => '7',
				'damage_multiplier' => '0.50',
			),
			115 =>
			array(
				'id' => '116',
				'attacking_type' => '7',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			116 =>
			array(
				'id' => '117',
				'attacking_type' => '7',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			117 =>
			array(
				'id' => '118',
				'attacking_type' => '7',
				'defending_type' => '10',
				'damage_multiplier' => '2.00',
			),
			118 =>
			array(
				'id' => '119',
				'attacking_type' => '7',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			119 =>
			array(
				'id' => '120',
				'attacking_type' => '7',
				'defending_type' => '12',
				'damage_multiplier' => '2.00',
			),
			120 =>
			array(
				'id' => '121',
				'attacking_type' => '7',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			121 =>
			array(
				'id' => '122',
				'attacking_type' => '7',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			122 =>
			array(
				'id' => '123',
				'attacking_type' => '7',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			123 =>
			array(
				'id' => '124',
				'attacking_type' => '7',
				'defending_type' => '16',
				'damage_multiplier' => '0.50',
			),
			124 =>
			array(
				'id' => '125',
				'attacking_type' => '7',
				'defending_type' => '17',
				'damage_multiplier' => '2.00',
			),
			125 =>
			array(
				'id' => '126',
				'attacking_type' => '7',
				'defending_type' => '18',
				'damage_multiplier' => '0.50',
			),
			126 =>
			array(
				'id' => '127',
				'attacking_type' => '8',
				'defending_type' => '1',
				'damage_multiplier' => '2.00',
			),
			127 =>
			array(
				'id' => '128',
				'attacking_type' => '8',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			128 =>
			array(
				'id' => '129',
				'attacking_type' => '8',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			129 =>
			array(
				'id' => '130',
				'attacking_type' => '8',
				'defending_type' => '4',
				'damage_multiplier' => '0.50',
			),
			130 =>
			array(
				'id' => '131',
				'attacking_type' => '8',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			131 =>
			array(
				'id' => '132',
				'attacking_type' => '8',
				'defending_type' => '6',
				'damage_multiplier' => '2.00',
			),
			132 =>
			array(
				'id' => '133',
				'attacking_type' => '8',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			133 =>
			array(
				'id' => '134',
				'attacking_type' => '8',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			134 =>
			array(
				'id' => '135',
				'attacking_type' => '8',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			135 =>
			array(
				'id' => '136',
				'attacking_type' => '8',
				'defending_type' => '10',
				'damage_multiplier' => '2.00',
			),
			136 =>
			array(
				'id' => '137',
				'attacking_type' => '8',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			137 =>
			array(
				'id' => '138',
				'attacking_type' => '8',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			138 =>
			array(
				'id' => '139',
				'attacking_type' => '8',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			139 =>
			array(
				'id' => '140',
				'attacking_type' => '8',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			140 =>
			array(
				'id' => '141',
				'attacking_type' => '8',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			141 =>
			array(
				'id' => '142',
				'attacking_type' => '8',
				'defending_type' => '16',
				'damage_multiplier' => '0.50',
			),
			142 =>
			array(
				'id' => '143',
				'attacking_type' => '8',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			143 =>
			array(
				'id' => '144',
				'attacking_type' => '8',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			144 =>
			array(
				'id' => '145',
				'attacking_type' => '9',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			145 =>
			array(
				'id' => '146',
				'attacking_type' => '9',
				'defending_type' => '2',
				'damage_multiplier' => '0.50',
			),
			146 =>
			array(
				'id' => '147',
				'attacking_type' => '9',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			147 =>
			array(
				'id' => '148',
				'attacking_type' => '9',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			148 =>
			array(
				'id' => '149',
				'attacking_type' => '9',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			149 =>
			array(
				'id' => '150',
				'attacking_type' => '9',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			150 =>
			array(
				'id' => '151',
				'attacking_type' => '9',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			151 =>
			array(
				'id' => '152',
				'attacking_type' => '9',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			152 =>
			array(
				'id' => '153',
				'attacking_type' => '9',
				'defending_type' => '9',
				'damage_multiplier' => '2.00',
			),
			153 =>
			array(
				'id' => '154',
				'attacking_type' => '9',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			154 =>
			array(
				'id' => '155',
				'attacking_type' => '9',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			155 =>
			array(
				'id' => '156',
				'attacking_type' => '9',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			156 =>
			array(
				'id' => '157',
				'attacking_type' => '9',
				'defending_type' => '13',
				'damage_multiplier' => '0.00',
			),
			157 =>
			array(
				'id' => '158',
				'attacking_type' => '9',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			158 =>
			array(
				'id' => '159',
				'attacking_type' => '9',
				'defending_type' => '15',
				'damage_multiplier' => '2.00',
			),
			159 =>
			array(
				'id' => '160',
				'attacking_type' => '9',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			160 =>
			array(
				'id' => '161',
				'attacking_type' => '9',
				'defending_type' => '17',
				'damage_multiplier' => '1.00',
			),
			161 =>
			array(
				'id' => '162',
				'attacking_type' => '9',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			162 =>
			array(
				'id' => '163',
				'attacking_type' => '10',
				'defending_type' => '1',
				'damage_multiplier' => '0.50',
			),
			163 =>
			array(
				'id' => '164',
				'attacking_type' => '10',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			164 =>
			array(
				'id' => '165',
				'attacking_type' => '10',
				'defending_type' => '3',
				'damage_multiplier' => '0.50',
			),
			165 =>
			array(
				'id' => '166',
				'attacking_type' => '10',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			166 =>
			array(
				'id' => '167',
				'attacking_type' => '10',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			167 =>
			array(
				'id' => '168',
				'attacking_type' => '10',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			168 =>
			array(
				'id' => '169',
				'attacking_type' => '10',
				'defending_type' => '7',
				'damage_multiplier' => '0.50',
			),
			169 =>
			array(
				'id' => '170',
				'attacking_type' => '10',
				'defending_type' => '8',
				'damage_multiplier' => '0.50',
			),
			170 =>
			array(
				'id' => '171',
				'attacking_type' => '10',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			171 =>
			array(
				'id' => '172',
				'attacking_type' => '10',
				'defending_type' => '10',
				'damage_multiplier' => '0.50',
			),
			172 =>
			array(
				'id' => '173',
				'attacking_type' => '10',
				'defending_type' => '11',
				'damage_multiplier' => '2.00',
			),
			173 =>
			array(
				'id' => '174',
				'attacking_type' => '10',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			174 =>
			array(
				'id' => '175',
				'attacking_type' => '10',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			175 =>
			array(
				'id' => '176',
				'attacking_type' => '10',
				'defending_type' => '14',
				'damage_multiplier' => '0.50',
			),
			176 =>
			array(
				'id' => '177',
				'attacking_type' => '10',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			177 =>
			array(
				'id' => '178',
				'attacking_type' => '10',
				'defending_type' => '16',
				'damage_multiplier' => '2.00',
			),
			178 =>
			array(
				'id' => '179',
				'attacking_type' => '10',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			179 =>
			array(
				'id' => '180',
				'attacking_type' => '10',
				'defending_type' => '18',
				'damage_multiplier' => '2.00',
			),
			180 =>
			array(
				'id' => '181',
				'attacking_type' => '11',
				'defending_type' => '1',
				'damage_multiplier' => '0.50',
			),
			181 =>
			array(
				'id' => '182',
				'attacking_type' => '11',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			182 =>
			array(
				'id' => '183',
				'attacking_type' => '11',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			183 =>
			array(
				'id' => '184',
				'attacking_type' => '11',
				'defending_type' => '4',
				'damage_multiplier' => '2.00',
			),
			184 =>
			array(
				'id' => '185',
				'attacking_type' => '11',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			185 =>
			array(
				'id' => '186',
				'attacking_type' => '11',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			186 =>
			array(
				'id' => '187',
				'attacking_type' => '11',
				'defending_type' => '7',
				'damage_multiplier' => '2.00',
			),
			187 =>
			array(
				'id' => '188',
				'attacking_type' => '11',
				'defending_type' => '8',
				'damage_multiplier' => '0.00',
			),
			188 =>
			array(
				'id' => '189',
				'attacking_type' => '11',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			189 =>
			array(
				'id' => '190',
				'attacking_type' => '11',
				'defending_type' => '10',
				'damage_multiplier' => '0.50',
			),
			190 =>
			array(
				'id' => '191',
				'attacking_type' => '11',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			191 =>
			array(
				'id' => '192',
				'attacking_type' => '11',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			192 =>
			array(
				'id' => '193',
				'attacking_type' => '11',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			193 =>
			array(
				'id' => '194',
				'attacking_type' => '11',
				'defending_type' => '14',
				'damage_multiplier' => '2.00',
			),
			194 =>
			array(
				'id' => '195',
				'attacking_type' => '11',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			195 =>
			array(
				'id' => '196',
				'attacking_type' => '11',
				'defending_type' => '16',
				'damage_multiplier' => '2.00',
			),
			196 =>
			array(
				'id' => '197',
				'attacking_type' => '11',
				'defending_type' => '17',
				'damage_multiplier' => '2.00',
			),
			197 =>
			array(
				'id' => '198',
				'attacking_type' => '11',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			198 =>
			array(
				'id' => '199',
				'attacking_type' => '12',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			199 =>
			array(
				'id' => '200',
				'attacking_type' => '12',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			200 =>
			array(
				'id' => '201',
				'attacking_type' => '12',
				'defending_type' => '3',
				'damage_multiplier' => '2.00',
			),
			201 =>
			array(
				'id' => '202',
				'attacking_type' => '12',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			202 =>
			array(
				'id' => '203',
				'attacking_type' => '12',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			203 =>
			array(
				'id' => '204',
				'attacking_type' => '12',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			204 =>
			array(
				'id' => '205',
				'attacking_type' => '12',
				'defending_type' => '7',
				'damage_multiplier' => '0.50',
			),
			205 =>
			array(
				'id' => '206',
				'attacking_type' => '12',
				'defending_type' => '8',
				'damage_multiplier' => '2.00',
			),
			206 =>
			array(
				'id' => '207',
				'attacking_type' => '12',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			207 =>
			array(
				'id' => '208',
				'attacking_type' => '12',
				'defending_type' => '10',
				'damage_multiplier' => '2.00',
			),
			208 =>
			array(
				'id' => '209',
				'attacking_type' => '12',
				'defending_type' => '11',
				'damage_multiplier' => '2.00',
			),
			209 =>
			array(
				'id' => '210',
				'attacking_type' => '12',
				'defending_type' => '12',
				'damage_multiplier' => '0.50',
			),
			210 =>
			array(
				'id' => '211',
				'attacking_type' => '12',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			211 =>
			array(
				'id' => '212',
				'attacking_type' => '12',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			212 =>
			array(
				'id' => '213',
				'attacking_type' => '12',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			213 =>
			array(
				'id' => '214',
				'attacking_type' => '12',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			214 =>
			array(
				'id' => '215',
				'attacking_type' => '12',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			215 =>
			array(
				'id' => '216',
				'attacking_type' => '12',
				'defending_type' => '18',
				'damage_multiplier' => '0.50',
			),
			216 =>
			array(
				'id' => '217',
				'attacking_type' => '13',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			217 =>
			array(
				'id' => '218',
				'attacking_type' => '13',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			218 =>
			array(
				'id' => '219',
				'attacking_type' => '13',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			219 =>
			array(
				'id' => '220',
				'attacking_type' => '13',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			220 =>
			array(
				'id' => '221',
				'attacking_type' => '13',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			221 =>
			array(
				'id' => '222',
				'attacking_type' => '13',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			222 =>
			array(
				'id' => '223',
				'attacking_type' => '13',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			223 =>
			array(
				'id' => '224',
				'attacking_type' => '13',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			224 =>
			array(
				'id' => '225',
				'attacking_type' => '13',
				'defending_type' => '9',
				'damage_multiplier' => '0.00',
			),
			225 =>
			array(
				'id' => '226',
				'attacking_type' => '13',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			226 =>
			array(
				'id' => '227',
				'attacking_type' => '13',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			227 =>
			array(
				'id' => '228',
				'attacking_type' => '13',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			228 =>
			array(
				'id' => '229',
				'attacking_type' => '13',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			229 =>
			array(
				'id' => '230',
				'attacking_type' => '13',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			230 =>
			array(
				'id' => '231',
				'attacking_type' => '13',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			231 =>
			array(
				'id' => '232',
				'attacking_type' => '13',
				'defending_type' => '16',
				'damage_multiplier' => '0.50',
			),
			232 =>
			array(
				'id' => '233',
				'attacking_type' => '13',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			233 =>
			array(
				'id' => '234',
				'attacking_type' => '13',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			234 =>
			array(
				'id' => '235',
				'attacking_type' => '14',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			235 =>
			array(
				'id' => '236',
				'attacking_type' => '14',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			236 =>
			array(
				'id' => '237',
				'attacking_type' => '14',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			237 =>
			array(
				'id' => '238',
				'attacking_type' => '14',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			238 =>
			array(
				'id' => '239',
				'attacking_type' => '14',
				'defending_type' => '5',
				'damage_multiplier' => '2.00',
			),
			239 =>
			array(
				'id' => '240',
				'attacking_type' => '14',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			240 =>
			array(
				'id' => '241',
				'attacking_type' => '14',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			241 =>
			array(
				'id' => '242',
				'attacking_type' => '14',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			242 =>
			array(
				'id' => '243',
				'attacking_type' => '14',
				'defending_type' => '9',
				'damage_multiplier' => '0.50',
			),
			243 =>
			array(
				'id' => '244',
				'attacking_type' => '14',
				'defending_type' => '10',
				'damage_multiplier' => '2.00',
			),
			244 =>
			array(
				'id' => '245',
				'attacking_type' => '14',
				'defending_type' => '11',
				'damage_multiplier' => '0.50',
			),
			245 =>
			array(
				'id' => '246',
				'attacking_type' => '14',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			246 =>
			array(
				'id' => '247',
				'attacking_type' => '14',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			247 =>
			array(
				'id' => '248',
				'attacking_type' => '14',
				'defending_type' => '14',
				'damage_multiplier' => '0.50',
			),
			248 =>
			array(
				'id' => '249',
				'attacking_type' => '14',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			249 =>
			array(
				'id' => '250',
				'attacking_type' => '14',
				'defending_type' => '16',
				'damage_multiplier' => '0.50',
			),
			250 =>
			array(
				'id' => '251',
				'attacking_type' => '14',
				'defending_type' => '17',
				'damage_multiplier' => '0.00',
			),
			251 =>
			array(
				'id' => '252',
				'attacking_type' => '14',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			252 =>
			array(
				'id' => '253',
				'attacking_type' => '15',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			253 =>
			array(
				'id' => '254',
				'attacking_type' => '15',
				'defending_type' => '2',
				'damage_multiplier' => '0.00',
			),
			254 =>
			array(
				'id' => '255',
				'attacking_type' => '15',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			255 =>
			array(
				'id' => '256',
				'attacking_type' => '15',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			256 =>
			array(
				'id' => '257',
				'attacking_type' => '15',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			257 =>
			array(
				'id' => '258',
				'attacking_type' => '15',
				'defending_type' => '6',
				'damage_multiplier' => '2.00',
			),
			258 =>
			array(
				'id' => '259',
				'attacking_type' => '15',
				'defending_type' => '7',
				'damage_multiplier' => '1.00',
			),
			259 =>
			array(
				'id' => '260',
				'attacking_type' => '15',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			260 =>
			array(
				'id' => '261',
				'attacking_type' => '15',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			261 =>
			array(
				'id' => '262',
				'attacking_type' => '15',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			262 =>
			array(
				'id' => '263',
				'attacking_type' => '15',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			263 =>
			array(
				'id' => '264',
				'attacking_type' => '15',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			264 =>
			array(
				'id' => '265',
				'attacking_type' => '15',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			265 =>
			array(
				'id' => '266',
				'attacking_type' => '15',
				'defending_type' => '14',
				'damage_multiplier' => '2.00',
			),
			266 =>
			array(
				'id' => '267',
				'attacking_type' => '15',
				'defending_type' => '15',
				'damage_multiplier' => '0.50',
			),
			267 =>
			array(
				'id' => '268',
				'attacking_type' => '15',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			268 =>
			array(
				'id' => '269',
				'attacking_type' => '15',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			269 =>
			array(
				'id' => '270',
				'attacking_type' => '15',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			270 =>
			array(
				'id' => '271',
				'attacking_type' => '16',
				'defending_type' => '1',
				'damage_multiplier' => '2.00',
			),
			271 =>
			array(
				'id' => '272',
				'attacking_type' => '16',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			272 =>
			array(
				'id' => '273',
				'attacking_type' => '16',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			273 =>
			array(
				'id' => '274',
				'attacking_type' => '16',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			274 =>
			array(
				'id' => '275',
				'attacking_type' => '16',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			275 =>
			array(
				'id' => '276',
				'attacking_type' => '16',
				'defending_type' => '6',
				'damage_multiplier' => '0.50',
			),
			276 =>
			array(
				'id' => '277',
				'attacking_type' => '16',
				'defending_type' => '7',
				'damage_multiplier' => '2.00',
			),
			277 =>
			array(
				'id' => '278',
				'attacking_type' => '16',
				'defending_type' => '8',
				'damage_multiplier' => '2.00',
			),
			278 =>
			array(
				'id' => '279',
				'attacking_type' => '16',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			279 =>
			array(
				'id' => '280',
				'attacking_type' => '16',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			280 =>
			array(
				'id' => '281',
				'attacking_type' => '16',
				'defending_type' => '11',
				'damage_multiplier' => '0.50',
			),
			281 =>
			array(
				'id' => '282',
				'attacking_type' => '16',
				'defending_type' => '12',
				'damage_multiplier' => '2.00',
			),
			282 =>
			array(
				'id' => '283',
				'attacking_type' => '16',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			283 =>
			array(
				'id' => '284',
				'attacking_type' => '16',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			284 =>
			array(
				'id' => '285',
				'attacking_type' => '16',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			285 =>
			array(
				'id' => '286',
				'attacking_type' => '16',
				'defending_type' => '16',
				'damage_multiplier' => '1.00',
			),
			286 =>
			array(
				'id' => '287',
				'attacking_type' => '16',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			287 =>
			array(
				'id' => '288',
				'attacking_type' => '16',
				'defending_type' => '18',
				'damage_multiplier' => '1.00',
			),
			288 =>
			array(
				'id' => '289',
				'attacking_type' => '17',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			289 =>
			array(
				'id' => '290',
				'attacking_type' => '17',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			290 =>
			array(
				'id' => '291',
				'attacking_type' => '17',
				'defending_type' => '3',
				'damage_multiplier' => '1.00',
			),
			291 =>
			array(
				'id' => '292',
				'attacking_type' => '17',
				'defending_type' => '4',
				'damage_multiplier' => '0.50',
			),
			292 =>
			array(
				'id' => '293',
				'attacking_type' => '17',
				'defending_type' => '5',
				'damage_multiplier' => '2.00',
			),
			293 =>
			array(
				'id' => '294',
				'attacking_type' => '17',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			294 =>
			array(
				'id' => '295',
				'attacking_type' => '17',
				'defending_type' => '7',
				'damage_multiplier' => '0.50',
			),
			295 =>
			array(
				'id' => '296',
				'attacking_type' => '17',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			296 =>
			array(
				'id' => '297',
				'attacking_type' => '17',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			297 =>
			array(
				'id' => '298',
				'attacking_type' => '17',
				'defending_type' => '10',
				'damage_multiplier' => '1.00',
			),
			298 =>
			array(
				'id' => '299',
				'attacking_type' => '17',
				'defending_type' => '11',
				'damage_multiplier' => '1.00',
			),
			299 =>
			array(
				'id' => '300',
				'attacking_type' => '17',
				'defending_type' => '12',
				'damage_multiplier' => '2.00',
			),
			300 =>
			array(
				'id' => '301',
				'attacking_type' => '17',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			301 =>
			array(
				'id' => '302',
				'attacking_type' => '17',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			302 =>
			array(
				'id' => '303',
				'attacking_type' => '17',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			303 =>
			array(
				'id' => '304',
				'attacking_type' => '17',
				'defending_type' => '16',
				'damage_multiplier' => '2.00',
			),
			304 =>
			array(
				'id' => '305',
				'attacking_type' => '17',
				'defending_type' => '17',
				'damage_multiplier' => '0.50',
			),
			305 =>
			array(
				'id' => '306',
				'attacking_type' => '17',
				'defending_type' => '18',
				'damage_multiplier' => '0.50',
			),
			306 =>
			array(
				'id' => '307',
				'attacking_type' => '18',
				'defending_type' => '1',
				'damage_multiplier' => '1.00',
			),
			307 =>
			array(
				'id' => '308',
				'attacking_type' => '18',
				'defending_type' => '2',
				'damage_multiplier' => '1.00',
			),
			308 =>
			array(
				'id' => '309',
				'attacking_type' => '18',
				'defending_type' => '3',
				'damage_multiplier' => '0.50',
			),
			309 =>
			array(
				'id' => '310',
				'attacking_type' => '18',
				'defending_type' => '4',
				'damage_multiplier' => '1.00',
			),
			310 =>
			array(
				'id' => '311',
				'attacking_type' => '18',
				'defending_type' => '5',
				'damage_multiplier' => '1.00',
			),
			311 =>
			array(
				'id' => '312',
				'attacking_type' => '18',
				'defending_type' => '6',
				'damage_multiplier' => '1.00',
			),
			312 =>
			array(
				'id' => '313',
				'attacking_type' => '18',
				'defending_type' => '7',
				'damage_multiplier' => '2.00',
			),
			313 =>
			array(
				'id' => '314',
				'attacking_type' => '18',
				'defending_type' => '8',
				'damage_multiplier' => '1.00',
			),
			314 =>
			array(
				'id' => '315',
				'attacking_type' => '18',
				'defending_type' => '9',
				'damage_multiplier' => '1.00',
			),
			315 =>
			array(
				'id' => '316',
				'attacking_type' => '18',
				'defending_type' => '10',
				'damage_multiplier' => '0.50',
			),
			316 =>
			array(
				'id' => '317',
				'attacking_type' => '18',
				'defending_type' => '11',
				'damage_multiplier' => '2.00',
			),
			317 =>
			array(
				'id' => '318',
				'attacking_type' => '18',
				'defending_type' => '12',
				'damage_multiplier' => '1.00',
			),
			318 =>
			array(
				'id' => '319',
				'attacking_type' => '18',
				'defending_type' => '13',
				'damage_multiplier' => '1.00',
			),
			319 =>
			array(
				'id' => '320',
				'attacking_type' => '18',
				'defending_type' => '14',
				'damage_multiplier' => '1.00',
			),
			320 =>
			array(
				'id' => '321',
				'attacking_type' => '18',
				'defending_type' => '15',
				'damage_multiplier' => '1.00',
			),
			321 =>
			array(
				'id' => '322',
				'attacking_type' => '18',
				'defending_type' => '16',
				'damage_multiplier' => '2.00',
			),
			322 =>
			array(
				'id' => '323',
				'attacking_type' => '18',
				'defending_type' => '17',
				'damage_multiplier' => '1.00',
			),
			323 =>
			array(
				'id' => '324',
				'attacking_type' => '18',
				'defending_type' => '18',
				'damage_multiplier' => '0.50',
			),
		));
	}
}
