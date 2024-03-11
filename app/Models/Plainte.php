<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'sexe_plaignant',
        'tel_plaignant',
        'objet_plainte',
        'entreprise',
        'secteur_activite',
        'fonction',
        'departement',
        'date_depot',
        'date_convocation',
        'date_seance',
    ];
}
