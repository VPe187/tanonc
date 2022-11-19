<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

class UserImportExportController extends Controller
{

    public function importExport()
    {
       return view('welcome');
    }
   
    public function importFile(Request $request) 
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();
    }

    public function exportFile() 
    {
        return Excel::download(new UsersExport, 'tanuloi adatok.xlsx');
    }  
}