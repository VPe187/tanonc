<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterdata;

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
}