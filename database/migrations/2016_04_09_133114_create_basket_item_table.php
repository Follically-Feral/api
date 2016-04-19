<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_item', function (Blueprint $table) {
            $table->integer('basket_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->double('quantity');

            $table->primary(['basket_id', 'product_id']);
        });

        Schema::table('basket_item', function($table) {
            $table->foreign('basket_id')
                ->references('id')->on('basket')
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
        Schema::drop('basket_item');
    }
}
