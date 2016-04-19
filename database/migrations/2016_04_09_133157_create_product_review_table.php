<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('title');
            $table->string('body');
            $table->integer('star_rating');
            $table->timestamps();

            $table->primary(['user_id', 'product_id']);
        });

        Schema::table('product_review', function($table) {
            $table->foreign('user_id')
                ->references('id')->on('user')
                ->onDelete('cascade');

            $table->foreign('product_id')
                ->references('id')->on('product')
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
        Schema::drop('product_review');
    }
}
