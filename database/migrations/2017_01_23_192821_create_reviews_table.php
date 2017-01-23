<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('title_en')->nullable();
	        $table->string('title_ru')->nullable();
	        $table->string('title_uk')->nullable();
	        $table->string('signature_en')->nullable();
	        $table->string('signature_ru')->nullable();
	        $table->string('signature_uk')->nullable();
	        $table->string('image')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
