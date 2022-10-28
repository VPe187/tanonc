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
            Schema::table('social_status', function (Blueprint $table) {
            $table->string('oktazon', 11)->change();
            $table->boolean('gyermekvedelmikedvezmeny')->nullable()->change();;
            $table->date('gyermekvedelmikedvezmeny_kezdete')->nullable()->change();;
            $table->date('gyermekvedelmikedvezmeny_vege')->nullable()->change();;
            $table->boolean('hatranyoshelyzetu')->nullable()->change();;
            $table->date('hhkezdete')->nullable()->change();;
            $table->date('hhvege')->nullable()->change();;
            $table->boolean('halmozottanhatranyoshelyzetu')->nullable()->change();;
            $table->date('hhh_kezdete')->nullable()->change();;
            $table->date('hhh_vege')->nullable()->change();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('social_status', function (Blueprint $table) {
            $table->integer('oktazon')->change();
    });
    }
};
