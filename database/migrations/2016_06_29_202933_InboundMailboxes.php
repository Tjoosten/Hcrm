<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InboundMailboxes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('InboundMailboxes', function (Blueprint $table) {
        $table->increments('id');
        $table->string('type');
        $table->string('server');
        $table->string('port');
        $table->string('ssl');
        $table->string('fromName');
        $table->string('fromAddress');
        $table->string('password');
        $table->string('createTicket');
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
      Schema::drop('InboundMailboxes');
    }
}
