<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->integer('category_id')->unsigned();
        });

        Schema::table('sub_category', function($table) {
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
        Schema::drop('sub_category');
    }
}
