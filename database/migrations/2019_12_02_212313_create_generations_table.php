<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('generations', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('new_pokemon')->unsigned();
			$table->integer('total_pokemon')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('generations');
	}
}
