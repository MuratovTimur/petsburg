<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddLitterInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_litter_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id');
            $table->date('date_start_estrus');
            $table->string('description_estrus');
            $table->string('name_partner');
            $table->date('date1_pairing');
            $table->date('date2_pairing');
            $table->date('date3_pairing');
            $table->date('date4_pairing');
            $table->string('description_pairing');
            $table->date('date_parturition');
            $table->integer('offspring_man');
            $table->integer('offspring_women');


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
        Schema::dropIfExists('add_litter_informations');
    }
}
