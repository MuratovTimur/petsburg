<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeReminderMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reminder_medications', function (Blueprint $table) {
            //
            if (Schema::hasColumn('reminder_medications','name_medications')) {
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
        Schema::table('reminder_medications', function (Blueprint $table) {
            //
            if (Schema::hasColumn('reminder_medications','medications_name')) {
                $table->dropColumn('medications_name');
            }
            $table->integer('name_medications');
        });
    }
}
