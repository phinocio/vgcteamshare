<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionNamesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('version_names', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('generation_id')->unsigned();
			$table->integer('region_id')->unsigned();
			$table->timestamp('release_date');

			$table->foreign('generation_id')->references('id')->on('generations');
			$table->foreign('region_id')->references('id')->on('regions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('version_names');
	}
}
