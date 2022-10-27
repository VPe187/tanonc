<?php

namespace App\Imports;

use App\Models\Masterdata;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class MasterdataImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Masterdata([
            'oktazon'=>$row[0],
            'viselt_nev_elotag'=>$row[1],
            'viselt_nev_vezeteknev1'=>$row[2],
            'viselt_nev_keresztnev2'=>$row[3],
            'viselt_nev_nevsorrend'=>$row[4],
            'szuletesi_nev_elotag'=>$row[5],
            'szuletesi_nev_vezeteknev'=>$row[6],
            'szuletesi_nev_keresztnev'=>$row[7],
            'szuletesi_nev_nevsorrend'=>$row[8],
            'anyja_neve_elotag'=>$row[9],
            'anyja_neve_vezeteknev'=>$row[10],
            'anyja_neve_keresztnev'=>$row[11],
            'anyja_neve_nevsorrend'=>$row[12],
            'szuletesi_datum'=>$row[13],
            'szuletesi_hely'=>$row[14],
            'szuletesi_orszag'=>$row[15],
            'allampolgarsag_1'=>$row[16],
            'allampolgarsag_2'=>$row[17],
            'nem'=>$row[18],
            'tajszam'=>$row[19],
            'taj_ellenorzes'=>$row[20],
            'allando_lakcim_iranyitoszam'=>$row[21],
            'allando_lakcim_telepules'=>$row[22],
            'allando_lakcim_kozteruletnev'=>$row[23],
            'allando_lakcim_kozterulet_jelleg'=>$row[24],
            'allando_lakcim_hazszam'=>$row[25],
            'allando_lakcim_pontositas'=>$row[26],
            'tartozkodasi_cim_iranyitoszam'=>$row[27],
            'tartozkodasi_cim_telepules'=>$row[28],
            'tartozkodasi_cim_kozteruletnev'=>$row[29],
            'tartozkodasi_cim_kozterulet_jelleg'=>$row[30],
            'tartozkodasi_cim_hazszam'=>$row[31],
            'tartozkodasi_cim_pontositas'=>$row[32],
            'adat_kezelo_intezmeny_om_azonositoja'=>$row[33],
            'adat_kezelo_intezmeny_neve'=>$row[34],
            'adat_kezelo_intezmeny_cime'=>$row[35],
            'tankotelezettseg_vege'=>$row[36],
            'tankotelezettseget_teljesito'=>$row[37],
            'sajatos_nevelesi_igenyu'=>$row[38],
            'beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd'=>$row[39],
            'ervenyes_diak_igazolvany_szama'=>$row[40],
            'kozoktatasi_intezmeny_neve'=>$row[41],
            'kozoktatasi_intezmeny_szekhelye'=>$row[42],
            'om_azonosito'=>$row[43],
            'ugyviteli_hely'=>$row[44],
            'jogviszony_statusza'=>$row[45],
            'jogviszony_kezdete'=>$row[46],
            'jogviszony_varhato_befejezese'=>$row[47],
            'jogviszony_jellege'=>$row[48],
            'vendegtanulo'=>$row[49],
            'egyeni_munkarend'=>$row[50],
            'ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony'=>$row[51],
            'osztaly'=>$row[52],
            'nyitott_szolgaltatasok'=>$row[53],
            'lezart_szolgaltatasok'=>$row[54],
            'a_bm_szemelyiadat_nyilvantartasaban_beazonositott'=>$row[55],
            'utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja'=>$row[56]

        ]);
    }
}
