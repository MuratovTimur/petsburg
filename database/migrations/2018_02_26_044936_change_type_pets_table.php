<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTypePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('type_pets', function (Blueprint $table) {
            // изменить название поля
            $table->renameColumn('type_pet', 'type_pet_en');
            //добавть поле
            $table->string('type_pet_ru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('type_pets', function (Blueprint $table) {
            //rollback fields
            $table->renameColumn('type_pet_en', 'type_pet');
            $table->dropColumn('type_pet_ru');
        });
    }
}
