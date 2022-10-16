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
        Schema::create('social_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('szocazon');
            $table->integer('oktazon')->index()->references('oktazon')->on('Masterdata');
            $table->boolean('gyermekvedelmikedvezmeny');
            $table->date('gyermekvedelmikedvezmeny_kezdete');
            $table->date('gyermekvedelmikedvezmeny_vege');
            $table->boolean('hatranyoshelyzetu');
            $table->date('hhkezdete');
            $table->date('hhvege');
            $table->boolean('halmozottanhatranyoshelyzetu');
            $table->date('hhh_kezdete');
            $table->date('hhh_vege');
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
        Schema::dropIfExists('social_status');
    }
};
