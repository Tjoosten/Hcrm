<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category');
            $table->string('disk_space');
            $table->string('data_traffic');
            $table->string('memory');
            $table->string('Operating_System');
            $table->timestamps();
        });

        Schema::create('products_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
        Schema::drop('products_categories');
    }
}
