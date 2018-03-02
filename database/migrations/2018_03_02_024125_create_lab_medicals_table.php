<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_medicals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('condition_medical_id');
            $table->integer('analysis_id');
            $table->integer('result_analysis_id');
            $table->string('value');
            $table->integer('analysis_meaning_id');


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
        Schema::dropIfExists('lab_medicals');
    }
}
