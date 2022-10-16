<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //Felhasználó ellenőrzés, csak autentikált felhasznála érheti el a user funkciókat
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $felhasznalok = User::all();
            /*
        foreach ($felhasznalok as $felhasznalo){
            echo $felhasznalok;
            echo "<br />";
        }
       */

        return view('users')->with('fhk' , $felhasznalok);
    }
}
