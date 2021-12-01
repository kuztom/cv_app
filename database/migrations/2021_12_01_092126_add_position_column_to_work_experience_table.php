<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPositionColumnToWorkExperienceTable extends Migration
{

    public function up()
    {
        Schema::table('work_experiences', function (Blueprint $table) {
            $table->string('position')->after('company');
        });
    }

    public function down()
    {
        Schema::table('work_experiences', function (Blueprint $table) {
            $table->dropColumn('position');
        });
    }
}
