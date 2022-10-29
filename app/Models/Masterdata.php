<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterdata extends Model
{
    protected $table = 'masterdata';

    use HasFactory;

    protected $fillable = [
      'oktazon',
      'viselt_nev_elotag',
      'viselt_nev_vezeteknev1',
      'viselt_nev_keresztnev2',
      'viselt_nev_nevsorrend',
      'szuletesi_nev_elotag',
      'szuletesi_nev_vezeteknev',
      'szuletesi_nev_keresztnev',
      'szuletesi_nev_nevsorrend',
      'anyja_neve_elotag',
      'anyja_neve_vezeteknev',
      'anyja_neve_keresztnev',
      'anyja_neve_nevsorrend',
      'szuletesi_datum',
      'szuletesi_hely',
      'szuletesi_orszag',
      'allampolgarsag_1',
      'allampolgarsag_2',
      'nem',
      'tajszam',
      'taj_ellenorzes',
      'allando_lakcim_iranyitoszam',
      'allando_lakcim_telepules',
      'allando_lakcim_kozteruletnev',
      'allando_lakcim_kozterulet_jelleg',
      'allando_lakcim_hazszam',
      'allando_lakcim_pontositas',
      'tartozkodasi_cim_iranyitoszam',
      'tartozkodasi_cim_telepules',
      'tartozkodasi_cim_kozteruletnev',
      'tartozkodasi_cim_kozterulet_jelleg',
      'tartozkodasi_cim_hazszam',
      'tartozkodasi_cim_pontositas',
      'adat_kezelo_intezmeny_om_azonositoja',
      'adat_kezelo_intezmeny_neve',
      'adat_kezelo_intezmeny_cime',
      'tankotelezettseg_vege',
      'tankotelezettseget_teljesito',
      'sajatos_nevelesi_igenyu',
      'beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd',
      'ervenyes_diak_igazolvany_szama',
      'kozoktatasi_intezmeny_neve',
      'kozoktatasi_intezmeny_szekhelye',
      'om_azonosito',
      'ugyviteli_hely',
      'jogviszony_statusza',
      'jogviszony_kezdete',
      'jogviszony_varhato_befejezese',
      'jogviszony_jellege',
      'vendegtanulo',
      'egyeni_munkarend',
      'ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony',
      'osztaly',
      'nyitott_szolgaltatasok',
      'lezart_szolgaltatasok',
      'a_bm_szemelyiadat_nyilvantartasaban_beazonositott',
      'utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja'

  ];

    

    public function familydata()
    {
      //  return $this->hasOne('App\Models\AuxiliaryData1', 'oktazon', 'oktazon');  //mihez kapcsolodik a model, idegentabla, sajat tabla azonositoja
      return $this->hasOne('App\Models\Familydata', 'oktazon', 'oktazon');
    }
    
}
