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
            $table->integer('gondviseloazon');//->index()->references('gondviseloazon')->on('Guardian');
            $table->string('gondviseloneve',50);
            $table->string('gondviselotelefonszama',20)->nullable(); //+36301234567
            $table->string('gondviseloemail',40)->nullable();
            $table->string('torvenyeskepviselo',100);
            $table->string('haziorvosneve',50);
            $table->string('haziorvostelefon',20)->nullable();
            $table->boolean('covidoltas')->nullable();
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
