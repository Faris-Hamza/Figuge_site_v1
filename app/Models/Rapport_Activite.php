<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport_Activite extends Model
{
    protected $fillable =[
        'id_act',
        'context',
        'lieu',
        'date',
        'nbr_femme',
        'nbr_homme',
        'reference'
    ];

    public function activites(): BelongsTo
    {
        return $this->belongsTo(Activite::class, 'id_act');
    }
}
