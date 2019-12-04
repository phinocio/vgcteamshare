<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
			$table->bigIncrements('id');
			$table->string('name');
			$table->unsignedInteger('new_pokemon');
			$table->unsignedInteger('total_pokemon');
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
