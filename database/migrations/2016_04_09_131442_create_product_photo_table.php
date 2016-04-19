<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_photo', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('photo_id')->unsigned();

            $table->primary(['product_id', 'photo_id']);
        });

        Schema::table('product_photo', function($table) {
            $table->foreign('product_id')
                ->references('id')->on('product')
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
        Schema::drop('product_photo');
    }
}
