<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_cares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id');
            $table->integer('care_id');
            $table->date('date_care');
            $table->dateTime('date_time_care');
            $table->string('note');
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
        Schema::dropIfExists('plan_cares');
    }
}
