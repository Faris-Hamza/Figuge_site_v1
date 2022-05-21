<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    protected $fillable = [
        'titre',
        'detail',
        'responsable',
        'lieu',
        'date_debut',
        'date_fin'
    ];
    
    public function Partenaire()
    {
        return $this->hasMany(Projet_partenaires::class,'id_proj');
    }

    public function Media()
    {
        return $this->hasMany(Media::class,'id_proj');
    }

    public function activites()
    {
        return $this->hasMany(Activite::class,'id_proj');
    }

   

}
