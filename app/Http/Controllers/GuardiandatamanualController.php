<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardiandataManualController extends Controller
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
//route-okban familydatamanual, új controller a route-ra, view-ra hivatkozni, .blade-et létrehozni rá,
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guardiandatamanual');
    }
}