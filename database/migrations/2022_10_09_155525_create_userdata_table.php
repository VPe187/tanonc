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
            $table->string('vezeteknev', 50)->index();
            $table->string('keresztnev1', 50);
            $table->string('keresztnev2', 50)->nullable();
            $table->string('becenev', 50)->nullable();
            $table->string('anyja_neve', 100)->nullable();
            $table->string('orszag', 50)->nullable();
            $table->string('iranyitoszam', 4)->nullable();
            $table->string('telepules', 100)->nullable();
            $table->string('kozterulet_neve', 50)->nullable();
            $table->integer('kozterulet_tipus_id')->nullable();
            $table->string('hazszam', 10)->nullable();
            $table->string('emelet', 10)->nullable();
            $table->string('ajto', 10)->nullable();
            $table->dateTime('szuletesi_ido')->nullable();
            $table->string('szuletesi_hely', 50)->nullable();
            $table->string('telefonszam', 20)->nullable();
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
