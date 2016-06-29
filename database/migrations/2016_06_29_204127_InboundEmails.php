<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InboundEmails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('InboundEmails', function (Blueprint $table) {
      $table->string('messageId');
      $table->string('date');
      $table->string('subject');
      $table->string('fromName');
      $table->string('fromAddress');
      $table->string('to');
      $table->string('replyTo');
      $table->string('textPlain');
      $table->string('textHtml');
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
      Schema::drop('InboundEmails');
    }
}
