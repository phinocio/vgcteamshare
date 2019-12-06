<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_data', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('pokemon_id');
            $table->string('evs');
            $table->string('ivs');
            $table->unsignedBigInteger('ability_id');
			$table->unsignedBigInteger('item_id');
			$table->unsignedBigInteger('nature_id');
            $table->unsignedBigInteger('move1_id');
            $table->unsignedBigInteger('move2_id');
            $table->unsignedBigInteger('move3_id');
            $table->unsignedBigInteger('move4_id');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('pokemon_id')->references('id')->on('pokemon');
            $table->foreign('ability_id')->references('id')->on('abilities');
			$table->foreign('item_id')->references('id')->on('items');
			$table->foreign('nature_id')->references('id')->on('natures');
            $table->foreign('move1_id')->references('id')->on('moves');
            $table->foreign('move2_id')->references('id')->on('moves');
            $table->foreign('move3_id')->references('id')->on('moves');
            $table->foreign('move4_id')->references('id')->on('moves');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_data');
    }
}
