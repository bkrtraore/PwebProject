<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appartement extends Model
{
    protected $fillable = [
        'reftype',
       'refMaison',
       'refSecurite',
       'nbhabitants'
    ];
}
