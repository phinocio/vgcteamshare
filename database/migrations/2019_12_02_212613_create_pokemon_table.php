<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
			$table->bigIncrements('id');
			$table->string('name');
			$table->integer('hit_points');
			$table->integer('attack');
			$table->integer('defense');
			$table->integer('special_attack');
			$table->integer('special_defense');
			$table->integer('speed');
			$table->string('image')->default('no-image.jpg');
			$table->unsignedBigInteger('generation_id');

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
