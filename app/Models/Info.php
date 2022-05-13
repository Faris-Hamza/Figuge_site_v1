<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [   'Apropo', 'bienvenu', 'vision', 'stratigie', 'programmes', 'whatsapp', 
    'fb', 'instagram', 'youtube', 'Linkedin', 'twitter', 'txtAdherent', 'txtSetunez'];
}
