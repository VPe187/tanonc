<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userdata;
use App\Models\Settlement;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
 
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
 
        $settl_res = Settlement::select("telepules")->orderBy("telepules")->get();
        $user_res = Userdata::where('user_id', $user_id)->get()->first();
        $country_res = Country::select('orszag')->orderBy("orszag")->get();
        $countryplace_res = Country::select('orszag')->orderBy("orszag")->get();

        
        return view('userprofile')->with('userdata', $user_res)->with('settlements', $settl_res)->with('countries', $country_res)->with('countryplaces', $countryplace_res);
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
 
    public function userprofilestore(Request $request){
 
        $request->validate(
            [
                'fieldUserSureName' => 'required | string | min:2 | max:30',
                'fieldUserFirstName' => 'required | string | min:3 | max:30',
                'fieldUserFirstName2' => 'nullable | min:3 | max:30'      
            ],
            [
                'fieldUserSureName.required' => 'Vezetéknév megadása kötelező!',
                'fieldUserSureName.min' => 'A Vezetéknév legalább 2 karaktert tartalmazzon!',
                'fieldUserSureName.max' => 'A vezetéknév nem lehet hosszabb 30 karakternél!',
                'fieldUserFirstName.required' => 'Keresztnév megadása kötelező!',
                'fieldUserFirstName.min' => 'A keresztnév legalább 3 karaktert tartalmazzon!',
                'fieldUserFirstName.max' => 'A keresztnév nem lehet hosszabb 30 karakternél!',
                'fieldUserFirstName2.min' => 'A 2. keresztnév (ha ki van töltve) legalább 3 karaktert tartalmazzon!',
                'fieldUserFirstName2.max' => 'A 2. keresztnév nem lehet hosszabb 30 karakternél!'
            ]
        );
 
        $user_res = Userdata::firstOrNew(['user_id' => Auth::user()->id]);
 
        $user_res->user_id = Auth::user()->id;    
        //$user_res->vezeteknev = (null !== $request->get('fieldUserSureName') ? $request->get('fieldUserSureName') : NULL);
        $user_res->vezeteknev = $request->get('fieldUserSureName');
        $user_res->keresztnev1 = $request->get('fieldUserFirstName');
        $user_res->keresztnev2 = (null !== $request->get('fieldUserFirstName2') ? $request->get('fieldUserFirstName2') : "");
        $user_res->becenev = $request->get('fieldUserNickName');
        $user_res->anyja_neve = $request->get('fieldUserMotherName');
        $user_res->orszag = $request->get('fieldUserCountry');
        $user_res->iranyitoszam = $request->get('fieldUserZipCode');
        $user_res->telepules = $request->get('fieldUserCity');
        $user_res->kozterulet_neve = $request->get('fieldUserStreet');
        $user_res->kozterulet_tipus_id = 0;
        $user_res->hazszam = $request->get('fieldUserHouseNumber');
        $user_res->emelet = $request->get('fieldUserFloorNumber');
        $user_res->ajto = $request->get('fieldUserDoorNumber');
        $user_res->szuletesi_ido = $request->get('fieldUserBirthdate');
        $user_res->szuletesi_hely = $request->get('fieldUserBirthPlace');
        $user_res->telefonszam = $request->get('fieldUserPhoneNumber');
 
        $user_res->save();
 
        return redirect ('/userprofile')->with('success_message','Rögzítés sikeresen megtörtént');
    }
}