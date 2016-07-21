<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDedicatedServerSipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dedicated_server_sips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('server_id');
            $table->string('type');
            $table->string('ip');
            $table->string('reverse_lookup');
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
        Schema::drop('dedicated_server_sips');
    }
}
