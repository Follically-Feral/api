<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_category', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('photo_id')->unsigned();

            $table->primary(['category_id', 'photo_id']);
        });

        Schema::table('photo_category', function($table) {
            $table->foreign('category_id')
                ->references('id')->on('category')
                ->onDelete('cascade');

            $table->foreign('photo_id')
                ->references('id')->on('photo')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photo_category');
    }
}
