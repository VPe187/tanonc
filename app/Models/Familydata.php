<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familydata extends Model
{
    protected $table ='family_data';
    use HasFactory;

    //Primery Key
    public function Masterdata(){
        // táblák összekapcsolása, először idegentábla, utána saját tábla
        return $this->hasOne('App\Models\Masterdata','oktazon','oktazon'); 
    }
    //Foreign Key
    public function Guardian(){
        // táblák összekapcsolása, először idegentábla, utána saját tábla
        return $this->hasOne('App\Models\Guardian','gondviseloazon','gondviseloazon'); 
    }
}
