<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abilities', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('game_text');
			$table->text('battle_effect');
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
		Schema::drop('abilities');
	}
}
