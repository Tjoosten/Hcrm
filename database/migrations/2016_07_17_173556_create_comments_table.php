<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('comment');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('comments_tickets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tickets_id')->unsigned()->index();
            $table->foreign('tickets_id')->references('id')->on('tickets')->onDelete('cascade');

            $table->integer('comments_id')->unsigned()->index();
            $table->foreign('comments_id')->references('id')->on('comments')->onDelete('cascade');
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
        Schema::dropIfExists('comments');
        Schema::dropIfExists('comments_tickets');
    }
}
