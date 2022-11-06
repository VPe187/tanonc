<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterdata;
use App\Models\Familydata;
use App\Models\Socialstatus;
use App\Models\Guardian;

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

    public function poststudentedit(Request $request)
    {
        /*echo $request->oktazon;
        echo $request->tanulonev;
        die();*/
        
        //$tanulok_res = Masterdata::select("*")->where('oktazon', $request->oktazon)->first();
        $tanulok_res = Masterdata::select("*")->where('oktazon', $request->oktazon)->get()->first();
        $tanulok_family_res = Familydata::select("*")->where('oktazon', $request->oktazon)->get()->first();
        $tanulok_social_res = Socialstatus::select("*")->where('oktazon', $request->oktazon)->get()->first();
        $tanulok_guardian_res = Guardian::select("*")->where('oktazon', $request->oktazon)->get()->first();


        //Masterdata
        $tanulok_res->allando_lakcim_kozteruletnev = $request->get('field_allando_lakcim_kozteruletnev');




















            //familydata
            $tanulok_family_res->haziorvosneve = $request->get('field_haziorvosneve');
            $tanulok_family_res->haziorvostelefon = $request->get('field_haziorvostelefon');
            $tanulok_family_res->covidoltas = $request->get('field_covidoltas');
            $tanulok_family_res->gondviselotelefonszama = $request->get('field_gondviselotelefonszama');
            $tanulok_family_res->gondviseloemail = $request->get('field_gondviseloemail');
            $tanulok_family_res->torvenyeskepviselo = $request->get('field_torvenyeskepviselo');
           // $tanulok_family_res->gondviseloazonosito = $request->get('field_gondviseloazonosito');


            //Socialdata
            $tanulok_social_res->gyermekvedelmikedvezmeny = $request->get('field_gyermekvedelmikedvezmeny');
            $tanulok_social_res->gyermekvedelmikedvezmeny_kezdete = $request->get('field_gyermekvedelmikedvezmeny_kezdete');
            $tanulok_social_res->gyermekvedelmikedvezmeny_vege = $request->get('field_gyermekvedelmikedvezmeny_vege');
            $tanulok_social_res->hatranyoshelyzetu = $request->get('field_hatranyoshelyzetu');
            $tanulok_social_res->hhkezdete = $request->get('field_hhkezdete');
            $tanulok_social_res->hhvege = $request->get('field_hhvege');
            $tanulok_social_res->halmozottanhatranyoshelyzetu = $request->get('field_halmozottanhatranyoshelyzetu');
            $tanulok_social_res->hhh_kezdete = $request->get('field_hhh_kezdete');
            $tanulok_social_res->hhh_vege = $request->get('field_hhh_vege');


            //Socialdata






     
        $tanulok_res->save();
        $tanulok_family_res->save();
        $tanulok_social_res->save();
        $tanulok_guardian_res->save();

        //return view('studentedit')->with('diakok', $tanulok_res);
        return redirect ('/studentedit/'.$request->oktazon)->with('success_message','Rögzítés sikeresen megtörtént');

        

    }    
}