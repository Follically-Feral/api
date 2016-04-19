<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sub_category', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();

            $table->primary(['product_id', 'sub_category_id']);
        });

        Schema::table('product_sub_category', function($table) {
            $table->foreign('product_id')
                ->references('id')->on('product')
                ->onDelete('cascade');

            $table->foreign('sub_category_id')
                ->references('id')->on('sub_category')
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
        Schema::drop('product_sub_category');
    }
}
