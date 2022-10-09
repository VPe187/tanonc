<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    protected $table = 'userdata';
    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');         // mihez kapcsolódik a model, idegen tábla, saját tábla azonosítója
    }
}
