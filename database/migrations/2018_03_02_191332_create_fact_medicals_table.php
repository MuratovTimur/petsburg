<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_medicals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id');
            $table->integer('medical_id');
            $table->date('date_medical');
            $table->dateTime('date_time_medical');
            $table->string('plan_note');
            $table->string('fact_note');

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
        Schema::dropIfExists('fact_medicals');
    }
}
