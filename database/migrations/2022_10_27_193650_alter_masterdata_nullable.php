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
        //
        Schema::table('masterdata', function (Blueprint $table) {
            $table->string('allando_lakcim_pontositas', 1000)->nullable()->change();
            $table->string('adat_kezelo_intezmeny_om_azonositoja', 1000)->nullable()->change();
            $table->string('adat_kezelo_intezmeny_neve', 1000)->nullable()->change();
            $table->string('adat_kezelo_intezmeny_cime', 1000)->nullable()->change();
            $table->dateTime('tankotelezettseg_vege')->nullable()->change();
            $table->boolean('tankotelezettseget_teljesito')->nullable()->change();           // 0:nem - 1:igen
            $table->boolean('sajatos_nevelesi_igenyu')->nullable()->change();                 // 0:nem - 1:igen
            $table->boolean('beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd')->nullable()->change();        // 0:nem - 1:igen
            $table->string('ervenyes_diak_igazolvany_szama', 10)->nullable()->change();
            $table->string('kozoktatasi_intezmeny_neve', 1000)->nullable()->change();
            $table->string('kozoktatasi_intezmeny_szekhelye', 1000)->nullable()->change();
            $table->string('om_azonosito', 11)->nullable()->change();
            $table->string('ugyviteli_hely', 1000)->nullable()->change();
            $table->string('jogviszony_statusza', 1000)->nullable()->change();
            $table->dateTime('jogviszony_kezdete')->nullable()->change();
            $table->dateTime('jogviszony_varhato_befejezese')->nullable()->change();
            $table->string('jogviszony_jellege', 1000)->nullable()->change();
            $table->boolean('vendegtanulo')->nullable()->change();                         // 0:nem - 1:igen
            $table->boolean('egyeni_munkarend')->nullable()->change();                      // 0:nem - 1:igen
            $table->boolean('ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony')->nullable()->change();  // 0:nem - 1:igen
            $table->string('osztaly', 10)->nullable()->change();
            $table->string('nyitott_szolgaltatasok', 1000)->nullable()->change();
            $table->string('lezart_szolgaltatasok', 1000)->nullable()->change();
            $table->boolean('a_bm_szemelyiadat_nyilvantartasaban_beazonositott')->nullable()->change();      // 0:nem - 1:igen
            $table->dateTime('utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
