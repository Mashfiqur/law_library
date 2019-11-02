<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToLawCases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('law_cases', function (Blueprint $table) {
            $table->string('case_number');
            $table->string('year');
            $table->string('judges');
            $table->string('petitioner');
            $table->string('opposite_parties');
            $table->string('judges_for_petitioner');
            $table->string('judges_for_opposite');
            $table->string('heard_on');
            $table->string('judgement_on');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('law_cases', function (Blueprint $table) {
            $table->dropColumn('case_number');
            $table->dropColumn('year');
            $table->dropColumn('judges');
            $table->dropColumn('petitioner');
            $table->dropColumn('opposite_parties');
            $table->dropColumn('judges_for_petitioner');
            $table->dropColumn('judges_for_opposite');
            $table->dropColumn('heard_on');
            $table->dropColumn('judgement_on');
        });
    }
}
