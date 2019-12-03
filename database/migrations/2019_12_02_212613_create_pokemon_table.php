<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pokemon', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('hit_points');
			$table->integer('attack');
			$table->integer('defense');
			$table->integer('special_attack');
			$table->integer('special_defense');
			$table->integer('speed');
			$table->integer('generation_id')->unsigned();

			$table->foreign('generation_id')->references('id')->on('generations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pokemon');
	}
}
