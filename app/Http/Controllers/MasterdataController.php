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
    public function uniquedata()
    {
        return view('uniquedataquery');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function student()
    {
        $tanulok = Masterdata::all();
 
        return view('uniquedataquery')->with('diak', $tanulok);
    }

    public function bulkdata()
    {
        $tanulok = Masterdata::all();
 
        return view('bulkdataquery')->with('diak', $tanulok);

    }
}