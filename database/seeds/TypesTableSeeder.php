<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('types')->insert([
			'name' => 'Bug',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Dark',
			'generation_id' => 2,
		]);

		DB::table('types')->insert([
			'name' => 'Dragon',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Electric',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Fairy',
			'generation_id' => 6,
		]);

		DB::table('types')->insert([
			'name' => 'Fighting',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Fire',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Flying',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Ghost',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Grass',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Ground',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Ice',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Normal',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Poison',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Psychic',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Rock',
			'generation_id' => 1,
		]);

		DB::table('types')->insert([
			'name' => 'Steel',
			'generation_id' => 2,
		]);

		DB::table('types')->insert([
			'name' => 'Water',
			'generation_id' => 1,
		]);
	}
}
