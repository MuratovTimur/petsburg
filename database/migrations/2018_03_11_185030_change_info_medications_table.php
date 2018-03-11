<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeInfoMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_medications', function (Blueprint $table) {
            //
            if (Schema::hasColumn('info_medications','name_medications')) {
                $table->dropColumn('name_medications');
            }
            $table->string('medications_name',128);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_medications', function (Blueprint $table) {
            //
            if (Schema::hasColumn('info_medications','medications_name')) {
                $table->dropColumn('medications_name');
            }
            $table->integer('name_medications');
        });
    }
}
