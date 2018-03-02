<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeAnalysisResultAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_analysis_result_analyses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_pet_id');
            $table->integer('analysis_id');
            $table->integer('result_analysis_id');

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
        Schema::dropIfExists('type_analysis_result_analyses');
    }
}
