<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name_en',255);
            $table->string('category_name_ru',255);
            $table->string('category_name_am',255);
            $table->string('main',255);
            $table->string('hide',255);
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
        Schema::drop('home_categories');
    }
}
