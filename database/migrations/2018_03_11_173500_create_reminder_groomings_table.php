<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReminderGroomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reminder_groomings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('description');
            $table->integer('type_reminder_id');
            $table->boolean('sound_yes_no');
            $table->string('address_groomer');
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
        Schema::dropIfExists('reminder_groomings');
    }
}
