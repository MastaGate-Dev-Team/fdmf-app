<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    /** @use HasFactory<\Database\Factories\VolunteerFactory> */
    use HasFactory;

    protected $fillable = [
        'nom',
        'postNom',
        'prenom',
        'nationalite',
        'sexe',
        'lieuNaiss',
        'dateNaiss',
        'avenue',
        'commune',
        'telephone',
        'email',
        'personneUrgence',
        'niveauEtude',
        'statut',
        'domaine',
        'fonction'
    ];
}
