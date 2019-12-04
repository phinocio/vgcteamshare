<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
			$table->unsignedBigInteger('move_id');
			$table->unsignedBigInteger('type_id');
			$table->unsignedBigInteger('category_id');
			$table->string('power');
			$table->string('accuracy');
			$table->string('pp');
			$table->text('effect');
			$table->string('effect_chance');
			$table->unsignedBigInteger('generation_id');


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
