<?php

namespace App\Exports;

use App\Models\Masterdata;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Familydata;
use App\Models\Socialstatus;
use Illuminate\Support\Facades\DB;

class UsersExport implements FromCollection,WithHeadings
{

    public function headings():array{
        return[
            'id',
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
            'utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja',
            'created',
            'modified',   
            'gondviseloazon',      
            'gondviseloneve',
            'gondviselotelefonszama',
            'gondviseloemail',
            'torvenyeskepviselo',
            'haziorvosneve',
            'haziorvostelefon',
            'covidoltas',
            'szocazon',
            
            'gyermekvedelmikedvezmeny',
            'gyermekvedelmikedvezmeny_kezdete',
            'gyermekvedelmikedvezmeny_vege',
            'hatranyoshelyzetu',
            'hhkezdete',
            'hhvege',
            'halmozottanhatranyoshelyzetu',
            'hhh_kezdete',
            'hhh_vege'

      
        ];
    }
    //private $fileName= "users.xlsx";
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection() //    (Request $request)
    {
        $Master_res = DB::table('masterdata')
        ->join('familydata', 'familydata.oktazon', '=', 'masterdata.oktazon')
        ->join('social_status', 'social_status.oktazon', '=', 'masterdata.oktazon')
        ->select(
            'masterdata.id',
            'masterdata.oktazon',
            'masterdata.viselt_nev_elotag',
            'masterdata.viselt_nev_vezeteknev1',
            'masterdata.viselt_nev_keresztnev2',
            'masterdata.viselt_nev_nevsorrend',
            'masterdata.szuletesi_nev_elotag',
            'masterdata.szuletesi_nev_vezeteknev',
            'masterdata.szuletesi_nev_keresztnev',
            'masterdata.szuletesi_nev_nevsorrend',
            'masterdata.anyja_neve_elotag',
            'masterdata.anyja_neve_vezeteknev',
            'masterdata.anyja_neve_keresztnev',
            'masterdata.anyja_neve_nevsorrend',
            'masterdata.szuletesi_datum',
            'masterdata.szuletesi_hely',
            'masterdata.szuletesi_orszag',
            'masterdata.allampolgarsag_1',
            'masterdata.allampolgarsag_2',
            'masterdata.nem',
            'masterdata.tajszam',
            'masterdata.taj_ellenorzes',
            'masterdata.allando_lakcim_iranyitoszam',
            'masterdata.allando_lakcim_telepules',
            'masterdata.allando_lakcim_kozteruletnev',
            'masterdata.allando_lakcim_kozterulet_jelleg',
            'masterdata.allando_lakcim_hazszam',
            'masterdata.allando_lakcim_pontositas',
            'masterdata.tartozkodasi_cim_iranyitoszam',
            'masterdata.tartozkodasi_cim_telepules',
            'masterdata.tartozkodasi_cim_kozteruletnev',
            'masterdata.tartozkodasi_cim_kozterulet_jelleg',
            'masterdata.tartozkodasi_cim_hazszam',
            'masterdata.tartozkodasi_cim_pontositas',
            'masterdata.adat_kezelo_intezmeny_om_azonositoja',
            'masterdata.adat_kezelo_intezmeny_neve',
            'masterdata.adat_kezelo_intezmeny_cime',
            'masterdata.tankotelezettseg_vege',
            'masterdata.tankotelezettseget_teljesito',
            'masterdata.sajatos_nevelesi_igenyu',
            'masterdata.beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd',
            'masterdata.ervenyes_diak_igazolvany_szama',
            'masterdata.kozoktatasi_intezmeny_neve',
            'masterdata.kozoktatasi_intezmeny_szekhelye',
            'masterdata.om_azonosito',
            'masterdata.ugyviteli_hely',
            'masterdata.jogviszony_statusza',
            'masterdata.jogviszony_kezdete',
            'masterdata.jogviszony_varhato_befejezese',
            'masterdata.jogviszony_jellege',
            'masterdata.vendegtanulo',
            'masterdata.egyeni_munkarend',
            'masterdata.ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony',
            'masterdata.osztaly',
            'masterdata.nyitott_szolgaltatasok',
            'masterdata.lezart_szolgaltatasok',
            'masterdata.a_bm_szemelyiadat_nyilvantartasaban_beazonositott',
            'masterdata.utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja',
            'masterdata.created_at',
            'masterdata.updated_at',

            'familydata.gondviseloazon',      
            'familydata.gondviseloneve',
            'familydata.gondviselotelefonszama',
            'familydata.gondviseloemail',
            'familydata.torvenyeskepviselo',
            'familydata.haziorvosneve',
            'familydata.haziorvostelefon',
            'familydata.covidoltas', 
            
            'social_status.szocazon',
            
            'social_status.gyermekvedelmikedvezmeny',
            'social_status.gyermekvedelmikedvezmeny_kezdete',
            'social_status.gyermekvedelmikedvezmeny_vege',
            'social_status.hatranyoshelyzetu',
            'social_status.hhkezdete',
            'social_status.hhvege',
            'social_status.halmozottanhatranyoshelyzetu',
            'social_status.hhh_kezdete',
            'social_status.hhh_vege')
        ->get();
        
        /*
        ->where('szuletesi_hely', $request->szuletesi_hely , 'or',
             'allando_lakcim_telepules', $request->allando_lakcim_telepules, 'or',
             'kozoktatasi_intezmeny_neve', $request->kozoktatasi_intezmeny_neve )
        ->get();
        */
        //$Family_res = Familydata::all();
        //$Social_res = Socialstatus::all();
        //$ResultArray = ($Master_res $Family_res $Social_res); //, $Family_res, $Social_res];
        
        return $Master_res;

        //return Masterdata::all();
        
        
        
        //$tables='SELECT * FROM masterdata inner join familydata on masterdata.oktazon = familydata.oktazon';
        //return $tables::all();
        /*$shares = DB::table('masterdata')
        ->join('familydata', 'familtydata.oktazon', '=', 'masterdata.oktazon')
        ->join('socialstatus', 'socialstatus.oktazon', '=', 'familydata.oktazon')
        ->where('socialstatus.oktazon', '=', 'masterdata.oktazon', 'familydata.oktazon')
        ->get();
        
        return $shares::all();*/

        //return collect(masterdata::getStudents()familydata::getStudentsfamilydata());
    }
    /*public function collection2()
    {
        return Familydata::all();
    }*/
    
}