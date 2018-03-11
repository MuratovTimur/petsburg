<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteOffspringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offspring', function (Blueprint $table) {
            Schema::dropIfExists('offspring');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offspring', function (Blueprint $table) {
            $table->increments('id');
            //родитель
            $table->integer('pet_id_parent');
            //потомок
            $table->integer('pet_id_child');
            //commentary
            $table->string('comment');

            $table->timestamps();
        });
    }
}
