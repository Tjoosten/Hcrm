<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fname');
            $table->string('street');
            $table->string('zipcode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('email');
            $table->string('mobile');
            $table->string('phone');
            $table->integer('type');
            $table->timestamps();
        });

        Schema::create('contacts_customers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('customers_id')->unsigned()->index();
            $table->foreign('customers_id')->references('id')->on('customers')->onDelete('cascade');

            $table->integer('contacts_id')->unsigned()->index();
            $table->foreign('contacts_id')->references('id')->on('contacts')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('contacts_contact_types', function (Blueprint $table) {
            $table->increments('id');

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
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('contacts_contact_types');
        Schema::dropIfExists('contacts_customers');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
