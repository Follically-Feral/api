<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->primary(['product_id', 'category_id']);
        });

        Schema::table('product_category', function($table) {
            $table->foreign('product_id')
                ->references('id')->on('product')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')->on('category')
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
        Schema::drop('product_category');
    }
}
