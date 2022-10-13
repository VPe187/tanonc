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
        Schema::create('masterdata', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->integer('oktazon');
            $table->string('viselt_nev_elotag', 10)->nullable();
            $table->string('viselt_nev_vezeteknev1', 50);
            $table->string('viselt_nev_keresztnev2', 50)->nullable();
            $table->string('viselt_nev_nevsorrend', 1);                   // V - vezetéknév, K - keresztnév
            $table->string('szuletesi_nev_elotag', 10)->nullable();
            $table->string('szuletesi_nev_vezeteknev', 50);
            $table->string('szuletesi_nev_keresztnev', 50);
            $table->string('szuletesi_nev_nevsorrend', 1);
            $table->string('anyja_neve_elotag', 10)->nullable();
            $table->string('anyja_neve_vezeteknev', 50);
            $table->string('anyja_neve_keresztnev', 50);
            $table->string('anyja_neve_nevsorrend', 1);                   // V - vezetéknév, K - keresztnév
            $table->dateTime('szuletesi_datum');
            $table->string('szuletesi_hely', 50);
            $table->string('szuletesi_orszag', 50);
            $table->string('allampolgarsag_1', 50);
            $table->string('allampolgarsag_2', 50)->nullable();
            $table->string('nem', 5);                                   // férfi - nő
            $table->string('tajszam', 9);                              // 123456789
            $table->string('taj_ellenorzes', 10);
            $table->string('allando_lakcim_iranyitoszam', 4);
            $table->string('allando_lakcim_telepules', 50);               
            $table->string('allando_lakcim_kozteruletnev', 50);
            $table->string('allando_lakcim_kozterulet_jelleg', 50);        // másik táblából legördülőbe
            $table->string('allando_lakcim_hazszam', 50);
            $table->string('allando_lakcim_pontositas', 50);
            $table->integer('tartozkodasi_cim_iranyitoszam')->nullable();
            $table->string('tartozkodasi_cim_telepules', 50)->nullable();
            $table->string('tartozkodasi_cim_kozteruletnev', 50)->nullable();
            $table->string('tartozkodasi_cim_kozterulet_jelleg', 50)->nullable();
            $table->string('tartozkodasi_cim_hazszam', 50)->nullable();
            $table->string('tartozkodasi_cim_pontositas', 50)->nullable();
            $table->string('adat_kezelo_intezmeny_om_azonositoja', 20);
            $table->string('adat_kezelo_intezmeny_neve', 200);
            $table->string('adat_kezelo_intezmeny_cime', 200);
            $table->dateTime('tankotelezettseg_vege');
            $table->boolean('tankotelezettseget_teljesito');           // 0:nem - 1:igen
            $table->boolean('sajatos_nevelesi_igenyu');                 // 0:nem - 1:igen
            $table->boolean('beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd');        // 0:nem - 1:igen
            $table->string('ervenyes_diak_igazolvany_szama', 10);
            $table->string('kozoktatasi_intezmeny_neve', 200);
            $table->string('kozoktatasi_intezmeny_szekhelye', 200);
            $table->string('om_azonosito', 11);
            $table->string('ugyviteli_hely', 200);
            $table->string('jogviszony_statusza', 50);
            $table->dateTime('jogviszony_kezdete');
            $table->dateTime('jogviszony_varhato_befejezese');
            $table->string('jogviszony_jellege', 20);
            $table->boolean('vendegtanulo');                         // 0:nem - 1:igen
            $table->boolean('egyeni_munkarend');                      // 0:nem - 1:igen
            $table->boolean('ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony');  // 0:nem - 1:igen
            $table->string('osztaly', 6);
            $table->string('nyitott_szolgaltatasok', 200);
            $table->string('lezart_szolgaltatasok', 200);
            $table->boolean('a_bm_szemelyiadat_nyilvantartasaban_beazonositott');      // 0:nem - 1:igen
            $table->dateTime('utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja');
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
        Schema::dropIfExists('masterdata');
    }
};
