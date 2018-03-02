<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id');
            $table->integer('care_id');
            $table->date('date_care');
            $table->dateTime('date_time_care');
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
        Schema::dropIfExists('fact_cares');
    }
}
