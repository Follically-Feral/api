<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_ingredient', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();

            $table->primary(['product_id', 'ingredient_id']);
        });

        Schema::table('product_ingredient', function($table) {
            $table->foreign('product_id')
                ->references('id')->on('product')
                ->onDelete('cascade');

            $table->foreign('ingredient_id')
                ->references('id')->on('ingredient')
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
        Schema::drop('product_ingredient');
    }
}
