<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxContainsBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box_contains_boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_box_id')->unsigned();
            $table->integer('box_id')->unsigned();
            $table->foreign('parent_box_id')
                  ->references('id')->on('boxes')
                  ->onDelete('cascade');
            $table->foreign('box_id')
                  ->references('id')->on('boxes')
                  ->onDelete('cascade');
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
        Schema::drop('box_contains_boxes');
    }
}
