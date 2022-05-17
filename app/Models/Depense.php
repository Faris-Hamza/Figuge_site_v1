<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    protected $fillable =[
        'libelle',
        'date',
        'contrante',
        'Beneficiaire',
        'montant',
        'modePayment',
        'justif',
    ];
}
