<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
			$table->bigIncrements('id');
			$table->unsignedBigInteger('attacking_type');
			$table->unsignedBigInteger('defending_type');
			$table->unsignedDecimal('damage_multiplier');

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
