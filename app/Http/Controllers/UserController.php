<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userdata;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // Felhasználó ellenőrzés, csak bejelentkezett felhasználó érheti el a user funkciókat
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $felhasznalok = User::all();

        return view('users')->with('fhk', $felhasznalok);
    }

    public function userprofile() {
        $user_id = Auth::user()->id;
        return view('userprofile');
    }

    public function testuserdata(){
        print('userdatatest');          // képernyő ellenőrzése
        
        $nev = explode(' ', Auth::user()->name, 2);

        $actualuser = Auth::user()->id;
        $userdata = Userdata::firstOrNew(['user_id' => $actualuser]);
        $userdata->vezeteknev = $nev[0];
        $userdata->keresztnev1 = $nev[1];
        $userdata->keresztnev2 = '';
        
        $userdata->save();

        return redirect('/users');
    }

    public function userprofileedit(Request $request){
        //echo $request->get('fieldUserName')."<br>";
        //echo $request->get('fieldUserSureName')."<br>";
        //echo $request->get('fieldUserFirstName')."<br>";

        $newuserdata_record = Userdata::firstOrNew(['user_id' => Auth::user()->id]);
        $newuserdata_record->user_id = Auth::user()->id;     

        $newuserdata_record->vezeteknev = (null !== $request->get('fieldUserSureName') ? $request->get('fieldUserSureName') : NULL);
        $newuserdata_record->keresztnev1 = $request->get('fieldUserFirstName');
        $newuserdata_record->keresztnev2 = $request->get('fieldUserFirstName2');
        $newuserdata_record->becenev = $request->get('fieldUserNickName');
        $newuserdata_record->anyja_neve = $request->get('fieldUserMotherName');
        $newuserdata_record->orszag = $request->get('fieldUserCountry');
        $newuserdata_record->iranyitoszam = $request->get('fieldUserZipCode');
        $newuserdata_record->telepules = $request->get('fieldUserCity');
        $newuserdata_record->kozterulet_neve = $request->get('fieldUserStreet');
        $newuserdata_record->kozterulet_tipus_id = 0;
        $newuserdata_record->hazszam = $request->get('fieldUserHouseNumber');
        $newuserdata_record->emelet = $request->get('fieldUserFloorNumber');
        $newuserdata_record->ajto = $request->get('fieldUserDoorNumber');
        $newuserdata_record->szuletesi_ido = $request->get('fieldUserBirthdate');
        $newuserdata_record->szuletesi_hely = $request->get('fieldUserBirthPlace');
        $newuserdata_record->telefonszam = $request->get('fieldUserPhoneNumber');

        $newuserdata_record->save();
        return redirect ('/userprofile')->with('message','Rögzítés sikeresen megtörtént');

    }
}
