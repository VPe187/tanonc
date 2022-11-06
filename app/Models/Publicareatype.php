<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicareatype extends Model
{
    protected $table = 'publicareatype';
    use HasFactory;

    protected $fillable = [
        'kozterulet_tipus'
        
    ];

}