<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable = [
        'id_Axe',
        'id_proj',
        'name'      ,
        'detail'    ,
        'lieu'      ,
        'date_debut',
        'date_fin'
    ];
     
    public function projet()
    {
        return $this->belongsTo(Projets::class,'id_proj');
    }
    public function Axes()
    {
        return $this->belongsTo(Axes::class,'id_Axe');
    }

    public function Media()
    {
        return $this->hasMany(Media::class,'id_activite');
    }
 }
