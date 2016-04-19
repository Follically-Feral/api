<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->double('price');
            $table->double('weight_amount');
            $table->integer('weight_id')->unsigned();
        });

        Schema::table('ingredient', function($table) {
            $table->foreign('weight_id')
                ->references('id')->on('weight')
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
        Schema::drop('ingredient');
    }
}
