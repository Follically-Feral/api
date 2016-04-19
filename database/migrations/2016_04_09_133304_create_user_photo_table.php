<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_photo', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('photo_id')->unsigned();

            $table->primary(['user_id', 'photo_id']);
        });

        Schema::table('user_photo', function($table) {
            $table->foreign('user_id')
                ->references('id')->on('user')
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
        Schema::drop('user_photo');
    }
}
