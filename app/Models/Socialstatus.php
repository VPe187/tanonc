<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialstatus extends Model
{
    protected $table = 'social_status';
    use HasFactory;

    protected $fillable = [
            'szocazon',
            'oktazon',
            'gyermekvedelmikedvezmeny',
            'gyermekvedelmikedvezmeny_kezdete',
            'gyermekvedelmikedvezmeny_vege',
            'hatranyoshelyzetu',
            'hhkezdete',
            'hhvege',
            'halmozottanhatranyoshelyzetu',
            'hhh_kezdete',
            'hhh_vege'
    ];

        //Primery Key
    public function Masterdata(){
 // táblák összekapcsolása, először idegentábla, utána saját tábla
    return $this->hasOne('App\Models\Masterdata','oktazon','oktazon'); 
    }
    
}
