<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familydata extends Model
{
    protected $table ='familydata';
    use HasFactory;

    protected $fillable = [

        'oktazon',
        'gondviseloazon',
        'gondviseloneve',
        'gondviselotelefonszama',
        'gondviseloemail',
        'torvenyeskepviselo',
        'haziorvosneve',
        'haziorvostelefon',
        'covidoltas'
          
        
    ];

    //Primery Key
    public function Masterdata(){
        // táblák összekapcsolása, először idegentábla, utána saját tábla
        return $this->hasOne('App\Models\Masterdata','oktazon','oktazon'); 
    }
   
}
