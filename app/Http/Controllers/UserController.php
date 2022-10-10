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
}
