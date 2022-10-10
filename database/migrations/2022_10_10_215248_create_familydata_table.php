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
        Schema::create('familydata', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('oktazon')->index()->references('oktazon')->on('Masterdata');
            $table->string('gondviseloazon',20);
            $table->string('gondviseloneve',50);
            $table->string('gondviselotelefonszama',20); //+36301234567
            $table->string('gondviseloemail',40);
            $table->string('torvenyeskepviselo',50);
            $table->string('haziorvosneve',50);
            $table->string('haziorvostelefon',20);
            $table->boolean('covidoltas');
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
        Schema::dropIfExists('familydata');
        
    }
};
