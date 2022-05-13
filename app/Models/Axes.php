<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Axes extends Model
{
    protected $fillable = ['nom', 'icon'];

    public function Activite()
    {
        return $this->hasMany(Activite::class,'id_Axe');
    }
}
