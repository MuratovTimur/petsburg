<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('type_pet_id');
            $table->integer('breed_id');
            $table->integer('sex_id');
            $table->integer('spayed_id');
            $table->string('name',64);
            $table->date('birthday');
            $table->string('color');
            $table->string('notes');
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
        Schema::dropIfExists('pets');
    }
}
