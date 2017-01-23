<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_en');
			$table->string('name_ru');
			$table->string('name_uk');
			$table->string('position_en');
			$table->string('position_ru');
			$table->string('position_uk');
			$table->string('institute_en');
			$table->string('institute_ru');
			$table->string('institute_uk');
			$table->string('image');
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
		Schema::dropIfExists('authors');
	}
}
