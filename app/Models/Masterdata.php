<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterdata extends Model
{
    protected $table = 'masterdata';
    use HasFactory;

    

    public function familydata()
    {
      //  return $this->hasOne('App\Models\AuxiliaryData1', 'oktazon', 'oktazon');  //mihez kapcsolodik a model, idegentabla, sajat tabla azonositoja
      return $this->hasOne('App\Models\Familydata', 'oktazon', 'oktazon');
    }
    
}
