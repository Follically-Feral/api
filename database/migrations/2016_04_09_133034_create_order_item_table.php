<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->double('quantity');

            $table->primary(['order_id', 'product_id']);
        });

        Schema::table('order_item', function($table) {
            $table->foreign('order_id')
                ->references('id')->on('order')
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
        Schema::drop('order_item');
    }
}
