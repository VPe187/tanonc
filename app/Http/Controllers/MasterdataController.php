<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterdata;
use App\Models\Familydata;

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
        $tanulok_res->allando_lakcim_kozteruletnev = $request->get('field_allando_lakcim_kozteruletnev');
        $tanulok_family_res->haziorvosneve = $request->get('field_haziorvosneve');
     
        $tanulok_res->save();
        $tanulok_family_res->save();

        //return view('studentedit')->with('diakok', $tanulok_res);
        return redirect ('/studentedit/'.$request->oktazon)->with('success_message','Rögzítés sikeresen megtörtént');

        

    }    
}