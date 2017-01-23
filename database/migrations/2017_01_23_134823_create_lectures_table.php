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
	        $table->integer('author_id')->nullable();
	        $table->integer('category_id')->nullable();
	        $table->string('title_en')->nullable();
	        $table->string('title_ru')->nullable();
	        $table->string('title_uk')->nullable();
	        $table->string('title2_en')->nullable();
	        $table->string('title2_ru')->nullable();
	        $table->string('title2_uk')->nullable();
	        $table->string('description_en')->nullable();
	        $table->string('description_ru')->nullable();
	        $table->string('description_uk')->nullable();
	        $table->text('text_en')->nullable();
	        $table->text('text_ru')->nullable();
	        $table->text('text_uk')->nullable();
	        $table->text('text2_en')->nullable();
	        $table->text('text2_ru')->nullable();
	        $table->text('text2_uk')->nullable();
	        $table->string('image')->nullable();
	        $table->string('video')->nullable();
	        $table->date('date')->nullable();
	        $table->boolean('published')->nullable();
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
