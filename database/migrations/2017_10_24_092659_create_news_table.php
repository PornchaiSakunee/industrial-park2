<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('news', function (Blueprint $table) {
            $table->increments('id_news')->length(10);
            $table->string('subject')->length(255);
            $table->string('story')->length(1000);
            $table->integer('views')->length(8);
            $table->string('logo')->length(30);
            $table->string('menu_link')->length(255);
            $table->integer('status_del')->length(2);
            $table->integer('status_news')->length(2);
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
        Schema::drop('news');
    }
}
