<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateVersionGroupsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('version_groups', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->unsignedBigInteger('generation_id');
			$table->unsignedBigInteger('region_id');

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
		Schema::drop('version_groups');
	}
}
