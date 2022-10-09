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
    public function up()                                        // fizikai művelet, a userdata tábla létrehozása a szerveren
    {
        Schema::create('userdata', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index()->references('id')->on('users');
            $table->string('vezeteknev', 50);
            $table->string('keresztnev1', 50);
            $table->string('keresztnev2', 50);
            $table->string('becenev', 50);
            $table->string('anyja_neve', 100);
            $table->string('orszag', 50);
            $table->string('iranyitoszam', 4);
            $table->string('telepules', 100);
            $table->string('kozterulet_neve', 50);
            $table->integer('kozterulet_tipus_id');
            $table->string('hazszam', 10);
            $table->string('emelet', 10);
            $table->string('ajto', 10);
            $table->dateTime('szuletesi_ido');
            $table->string('szuletesi_hely', 50);
            $table->string('telefonszam', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()                                        // fizikai művelet, a userdata tábla eldobása a szerveren, ha létezik
    {
        Schema::dropIfExists('userdata');
    }
};
