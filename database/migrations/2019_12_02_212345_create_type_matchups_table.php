<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeMatchupsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('type_matchups', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('attacking_type')->unsigned();
			$table->integer('defending_type')->unsigned();
			$table->float('damage_multiplier')->unsigned();

			$table->foreign('attacking_type')->references('id')->on('types');
			$table->foreign('defending_type')->references('id')->on('types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('type_matchups');
	}
}
