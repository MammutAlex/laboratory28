<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teams', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name_en')->nullable();
			$table->string('first_name_ru')->nullable();
			$table->string('first_name_uk')->nullable();
			$table->string('last_name_en')->nullable();
			$table->string('last_name_ru')->nullable();
			$table->string('last_name_uk')->nullable();
			$table->string('position_en')->nullable();
			$table->string('position_ru')->nullable();
			$table->string('position_uk')->nullable();
			$table->string('photo')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('teams');
	}
}
