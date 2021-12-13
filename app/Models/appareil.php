<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appareil extends Model
{
    
    protected $fillable = [
        'emplacement',
        'descriptionEmplacement', 
        'description'
    ];

}
