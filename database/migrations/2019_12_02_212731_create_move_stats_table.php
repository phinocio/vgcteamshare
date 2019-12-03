<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoveStatsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('move_stats', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('move_id')->unsigned();
			$table->integer('type_id')->unsigned();
			$table->integer('category_id')->unsigned();
			$table->string('power');
			$table->string('accuracy');
			$table->string('pp');
			$table->text('effect');
			$table->string('effect_chance');
			$table->integer('generation_id')->unsigned();


			$table->foreign('move_id')->references('id')->on('moves');
			$table->foreign('type_id')->references('id')->on('types');
			$table->foreign('category_id')->references('id')->on('move_categories');
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
		Schema::drop('move_stats');
	}
}
