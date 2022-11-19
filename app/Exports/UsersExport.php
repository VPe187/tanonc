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
            'oktazon',
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
        ->select('masterdata.*', 'familydata.*', 'social_status.*')
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