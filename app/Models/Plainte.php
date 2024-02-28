<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    // use HasFactory;
    protected $primarykey = 'plainte_id';
    protected $fillable = [
        'prenom',
        'nom',
        'genre_plaignant',
        'tel_plaignant',
        'date_depot',
        'date_convocation',
        'date_seance',
    ];
}
