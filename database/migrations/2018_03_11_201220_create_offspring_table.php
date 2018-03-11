<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffspringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offspring', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id_parent');
            $table->integer('type_pet_id');
            $table->integer('breed_id');
            $table->integer('sex_id');
            $table->integer('spayed_id');
            $table->string('name',64);
            $table->date('birthday');
            $table->string('color');
            $table->string('chip');
            $table->string('stigma');
            $table->string('notes');
            $table->string('fullname_owner');
            $table->string('address_owner');
            $table->string('phone_owner');
            $table->string('email_owner');

            $table->string('photo',24);

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
        Schema::dropIfExists('offspring');
    }
}
