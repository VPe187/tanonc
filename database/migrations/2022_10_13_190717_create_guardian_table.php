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
        Schema::create('guardian', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->timestamps();
            $table->integer('gondviseloazon');//->references('gondviseloazon')->on('Familydata');
            $table->integer('oktazon')->index()->references('oktazon')->on('Masterdata');
            $table->string('telefonszam',20)->nullable();
            $table->string('email',50)->nullable();
            $table->string('torvenyes_kepviselo',100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guardian');
    }
};
