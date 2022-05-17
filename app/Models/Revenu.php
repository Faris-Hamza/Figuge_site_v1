<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenu extends Model
{
    protected $fillable = ['id', 'libelle', 'date', 'montant', 'source'];
}
