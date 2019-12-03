<?php

use Illuminate\Database\Seeder;

class StatsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('stats')->insert([
			'name' => 'HP',
			'generation_id' => 1
		]);

		DB::table('stats')->insert([
			'name' => 'Attack',
			'generation_id' => 1
		]);

		DB::table('stats')->insert([
			'name' => 'Defense',
			'generation_id' => 1
		]);

		DB::table('stats')->insert([
			'name' => 'Special',
			'generation_id' => 1
		]);

		DB::table('stats')->insert([
			'name' => 'Speed',
			'generation_id' => 1
		]);

		DB::table('stats')->insert([
			'name' => 'Accuracy',
			'generation_id' => 1,
			'in_battle_only' => true
		]);

		DB::table('stats')->insert([
			'name' => 'Evasion',
			'generation_id' => 1,
			'in_battle_only' => true
		]);

		DB::table('stats')->insert([
			'name' => 'Sp. Attack',
			'generation_id' => 2
		]);

		DB::table('stats')->insert([
			'name' => 'Sp. Defense',
			'generation_id' => 2
		]);
	}
}
