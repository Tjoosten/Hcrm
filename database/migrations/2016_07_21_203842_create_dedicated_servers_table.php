<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDedicatedServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedicated_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('server_name');
            $table->string('reference');
            $table->string('status');
            $table->string('provider');
            $table->integer('provider_id');
            $table->string('location');
            $table->string('diskspace');
            $table->string('traffic');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('sla');
            $table->string('vendor');
            $table->string('vendor_product');
            $table->timestamps();
        });

        Schema::create('customers_dedicated_servers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customers_id')->unsigned()->index();
            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('dedicated_servers_id')->unsigned()->index();
            $table->foreign('dedicated_servers_id')->references('id')->on('dedicated_servers')->onDelete('cascade');
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
        Schema::drop('dedicated_servers');
        Schema::drop('customers_dedicated_servers');
    }
}
