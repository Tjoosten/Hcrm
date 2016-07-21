<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->comment('affected user relation');
            $table->integer('assigned_id')->comment('assigned staff relation');
            $table->integer('status_id')->comment('ticket status relation');
            $table->string('type');
            $table->string('priority');
            $table->string('subject');
            $table->string('description');
            $table->integer('is_closed');
            $table->softDeletes();
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('tickets');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
