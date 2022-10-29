<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $table ='guardian';
    use HasFactory;

    protected $fillable = [
        'gondviseloazon',
        'oktazon',
        'telefonszam',
        'email',
        'torvenyes_kepviselo'

    ];

public function Masterdata(){
    // táblák összekapcsolása, először idegentábla, utána saját tábla
    return $this->hasOne('App\Models\Masterdata','oktazon','oktazon'); 
}

public function Familydata(){
    // táblák összekapcsolása, először idegentábla, utána saját tábla
    return $this->hasMany('App\Models\Familydata','gondviseloazon','gondviseloazon'); 
}
}
