<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhatDosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('what_dos', function(Blueprint $table) {
			$table->increments('id');
			$table->string('image')->nullable();
			$table->text('text_en')->nullable();
			$table->text('text_ru')->nullable();
			$table->text('text_uk')->nullable();
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
		Schema::dropIfExists('what_dos');
	}
}
