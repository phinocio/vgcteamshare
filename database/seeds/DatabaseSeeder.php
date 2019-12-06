<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UsersTableSeeder::class);
		$this->call(RegionsTableSeeder::class);
		$this->call(GenerationsTableSeeder::class);
		$this->call(TypesTableSeeder::class);
		$this->call(AbilitiesTableSeeder::class);
		$this->call(TypeMatchupsTableSeeder::class);
		$this->call(MoveCategoriesTableSeeder::class);
		$this->call(StatsTableSeeder::class);
		$this->call(PokemonTableSeeder::class);
		$this->call(VersionNamesTableSeeder::class);
		$this->call(MovesTableSeeder::class);
		$this->call(MoveStatsTableSeeder::class);
		$this->call(VersionGroupsTableSeeder::class);
	    $this->call(ItemsTableSeeder::class);
        $this->call(FormatsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(NaturesTableSeeder::class);
        $this->call(TeamDataTableSeeder::class);
    }
}
