<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string("name_agency");
            $table->longText("departure_station");
            $table->longText("arrival_station");
            $table->time('departure_time', $precision = 0);
            $table->time('arrival_time')->default(0);
            $table->char("train_code", 100);
            $table->char("number_carriages", 100);
            $table->boolean("in_time")->nullable()->default(true);
            $table->boolean("delete")->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn("name_agency");
            $table->dropColumn("departure_station");
            $table->dropColumn("arrival_station");
            $table->dropColumn("departure_time");
            $table->dropColumn("arrival_time");
            $table->dropColumn("train_code");
            $table->dropColumn("number_carriages");
            $table->dropColumn("in_time");
            $table->dropColumn("delete"); 
        });
    }
};
