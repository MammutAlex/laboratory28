<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('title_en');
	        $table->string('title_ru');
	        $table->string('title_uk');
	        $table->string('description_en');
	        $table->string('description_ru');
	        $table->string('description_uk');
	        $table->text('text_en');
	        $table->text('text_ru');
	        $table->text('text_uk');
	        $table->string('image');
	        $table->date('date');
	        $table->boolean('published');
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
        Schema::dropIfExists('lectures');
    }
}
