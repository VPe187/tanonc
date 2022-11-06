<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterdata;
use App\Models\Familydata;
use App\Models\Socialstatus;

use App\Models\Publicareatype;

class MasterdataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function masterdata()
    {
        return view('masterdataimport');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function uniquedata(Request $request)    
    {
        $tanulok_res = Masterdata::select("oktazon", "viselt_nev_vezeteknev1", "viselt_nev_keresztnev2")->where('oktazon', $request->oktazon)->get();
        return view('uniquedataquery')->with('diakok', $tanulok_res);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function student()
    {
        $tanulok_res = Masterdata::all();
 
        return view('uniquedataquery')->with('diakok', $tanulok_res);
    }

    public function query()
    {
        $tanulok_res = Masterdata::all();
 
        return view('query')->with('diakok', $tanulok_res);
    }



    // Keresés eredménye
    public function studentedit(Request $request)
    {
        /*echo $request->oktazon;
        echo $request->tanulonev;
        die();*/
        
        $tanulok_res = Masterdata::select("*")->where('oktazon', $request->oktazon)->get();
        return view('studentedit')->with('diakok', $tanulok_res);

    }

    public function studenteditname(Request $request)
    {
        
        /*echo $request->oktazon;
        echo $request->tanulonev;
        die();*/
        
        $tanulok_res = Masterdata::select("*")->where('viselt_nev_vezeteknev1', $request->tanulonev)->get();
        return view('studentedit')->with('diakok', $tanulok_res);

    }

    public function studentprofile(Request $request) {
        //$user_id = Auth::user()->id;
 
        //$settl_res = Settlement::select("telepules")->orderBy("telepules")->get();
        //$user_res = Userdata::where('user_id', $user_id)->get()->first();
        //$country_res = Country::select('orszag')->orderBy("orszag")->get();
        //$Birthplace_res = Settlement::select('telepules')->orderBy("telepules")->get();
        $publicareatype_res = Publicareatype::select('kozterulet_tipus')->orderBy("kozterulet_tipus")->get();

        
        return view('studentedit/'.$request->oktazon)->with('publicareatypes', $publicareatype_res);
    }
    // Tanuló update
    public function poststudentedit(Request $request)
    {
        /*echo $request->oktazon;
        echo $request->tanulonev;
        die();*/
        
        // Tanuló azonosítása és az adatok behívása a Masterdata táblából oktazon alapján
        
        $tanulok_res = Masterdata::select("*")->where('oktazon', $request->oktazon)->get()->first();

        // Tanuló azonosítása és a családi adatok behívása a Familydata táblában oktazon alapján
        
        $tanulok_family_res = Familydata::select("*")->where('oktazon', $request->oktazon)->get()->first();
        
        // Tanuló azonosítása és a szociális adatok behívása a Socialdata táblából
        
        $tanulok_social_res = Socialstatus::select("*")->where('oktazon', $request->oktazon)->get()->first();

        // Tanuló KIR adatanak módosítása
        
        $tanulok_res->viselt_nev_elotag = $request->get('field_viselt_nev_elotag');
        $tanulok_res->viselt_nev_vezeteknev1 = $request->get('field_viselt_nev_vezeteknev1');
        $tanulok_res->viselt_nev_keresztnev2 = $request->get('field_viselt_nev_keresztnev2');
        $tanulok_res->viselt_nev_nevsorrend = $request->get('field_viselt_nev_nevsorrend');
        $tanulok_res->allampolgarsag_1 = $request->get('field_allampolgarasag_1');
        $tanulok_res->allampolgarsag_2 = $request->get('field_allampolgarasag_2');
        $tanulok_res->taj_ellenorzes = $request->get('field_taj_ellenorzes');
        $tanulok_res->allando_lakcim_iranyitoszam = $request->get('field_allando_lakcim_iranyitoszam');
        $tanulok_res->allando_lakcim_telepules = $request->get('field_allando_lakcim_telepules');
        $tanulok_res->allando_lakcim_kozteruletnev = $request->get('field_allando_lakcim_kozteruletnev');
        $tanulok_res->allando_lakcim_kozterulet_jelleg = $request->get('field_allando_lakcim_kozterulet_jelleg');
        $tanulok_res->allando_lakcim_hazszam = $request->get('field_allando_lakcim_hazszam');
        $tanulok_res->allando_lakcim_pontositas = $request->get('field_allando_lakcim_pontositas');
        $tanulok_res->tartozkodasi_cim_iranyitoszam = $request->get('field_tartozkodasi_cim_iranyitoszam');
        $tanulok_res->tartozkodasi_cim_telepules = $request->get('field_tartozkodasi_cim_telepules');
        $tanulok_res->tartozkodasi_cim_kozteruletnev = $request->get('field_tartozkodasi_cim_kozteruletnev');
        $tanulok_res->tartozkodasi_cim_kozterulet_jelleg = $request->get('field_tartozkodasi_cim_kozterulet_jelleg');
        $tanulok_res->tartozkodasi_cim_hazszam = $request->get('field_tartozkodasi_cim_hazszam');
        $tanulok_res->tartozkodasi_cim_pontositas = $request->get('field_tartozkodasi_cim_pontositas');
        $tanulok_res->adat_kezelo_intezmeny_om_azonositoja = $request->get('field_adat_kezelo_intezmeny_om_azonositoja');
        $tanulok_res->adat_kezelo_intezmeny_neve = $request->get('field_adat_kezelo_intezmeny_neve');
        $tanulok_res->adat_kezelo_intezmeny_cime = $request->get('field_adat_kezelo_intezmeny_cime');
        $tanulok_res->tankotelezettseg_vege = $request->get('field_tankotelezettseg_vege');
        $tanulok_res->tankotelezettseget_teljesito = $request->get('field_tankotelezettseget_teljesito');
        $tanulok_res->sajatos_nevelesi_igenyu = $request->get('field_sajatos_nevelesi_igenyu');
        $tanulok_res->beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd = $request->get('field_beilleszkedessel_tanulasi_magatartasi_nehezseggel_kuzd');
        $tanulok_res->ervenyes_diak_igazolvany_szama = $request->get('field_ervenyes_diak_igazolvany_szama');
        $tanulok_res->kozoktatasi_intezmeny_neve = $request->get('field_kozoktatasi_intezmeny_neve');
        $tanulok_res->kozoktatasi_intezmeny_szekhelye = $request->get('field_kozoktatasi_intezmeny_szekhelye');
        $tanulok_res->om_azonosito = $request->get('field_om_azonosito');
        $tanulok_res->ugyviteli_hely = $request->get('field_ugyviteli_hely');
        $tanulok_res->jogviszony_statusza = $request->get('field_jogviszony_statusza');
        $tanulok_res->jogviszony_kezdete = $request->get('field_jogviszony_kezdete');
        $tanulok_res->jogviszony_varhato_befejezese = $request->get('field_jogviszony_varhato_befejezese');
        $tanulok_res->jogviszony_jellege = $request->get('field_jogviszony_jellege');
        $tanulok_res->vendegtanulo = $request->get('field_vendegtanulo');
        $tanulok_res->egyeni_munkarend = $request->get('field_egyeni_munkarend');
        $tanulok_res->ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony = $request->get('field_ideiglenes_ovodai_ideiglenes_vendegtanuloi_jogviszony');
        $tanulok_res->osztaly = $request->get('field_osztaly');
        $tanulok_res->nyitott_szolgaltatasok = $request->get('field_nyitott_szolgaltatasok');
        $tanulok_res->lezart_szolgaltatasok = $request->get('field_lezart_szolgaltatasok');
        $tanulok_res->a_bm_szemelyiadat_nyilvantartasaban_beazonositott = $request->get('field_a_bm_szemelyiadat_nyilvantartasaban_beazonositott');
        $tanulok_res->utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja = $request->get('field_utolso_szemelyiadat_es_lakcimnyilvantartas_frissites_idopontja');
        
        // Tanuló családi adatainak módosítása

        $tanulok_family_res->gondviseloneve = $request->get('field_gondviseloneve');
        $tanulok_family_res->gondviselotelefonszama = $request->get('field_gondviselotelefonszama');
        $tanulok_family_res->gondviseloemail = $request->get('field_gondviseloemail');
        $tanulok_family_res->torvenyeskepviselo = $request->get('field_torvenyeskepviselo');
        $tanulok_family_res->haziorvosneve = $request->get('field_haziorvosneve');
        $tanulok_family_res->haziorvostelefon = $request->get('field_haziorvostelefon');
        $tanulok_family_res->covidoltas = $request->get('field_covidoltas');

        // Tanuló szociális adatainak módosítása

        
        $tanulok_social_res->gyermekvedelmikedvezmeny = $request->get('field_gyermekvedelmikedvezmeny');
        $tanulok_social_res->gyermekvedelmikedvezmeny_kezdete = $request->get('field_gyermekvedelmikedvezmeny_kezdete');
        $tanulok_social_res->gyermekvedelmikedvezmeny_vege = $request->get('field_gyermekvedelmikedvezmeny_vege');
        $tanulok_social_res->hatranyoshelyzetu = $request->get('field_hatranyoshelyzetu');
        $tanulok_social_res->hhkezdete = $request->get('field_hatranyoshelyzetu_kezdete');
        $tanulok_social_res->hhvege = $request->get('field_hatranyoshelyzetu_vege');
        $tanulok_social_res->halmozottanhatranyoshelyzetu = $request->get('field_halmozottanhatranyoshelyzetu');
        $tanulok_social_res->hhh_kezdete = $request->get('field_halmozottanhatranyoshelyzetu_kezdete');
        $tanulok_social_res->hhh_vege = $request->get('field_halmozottanhatranyoshelyzetu_vege');
        
     
        $tanulok_res->save();
        $tanulok_family_res->save();
        $tanulok_social_res->save();

        //return view('studentedit')->with('diakok', $tanulok_res);
        return redirect ('studentedit/'.$request->oktazon)->with('success_message','Az adatok módosítása sikeresen megtörtént');

        

    }    
}