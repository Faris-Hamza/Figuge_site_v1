<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Axes;
use App\Models\Activite;
use App\Models\Projets;
use App\Models\Adherent;
use App\Models\info;
use App\Models\Presse;
use App\Models\Partenaire;
use App\Models\Mails;
use App\Models\Media;
use App\Models\Equipes;

class Home extends Controller
{
    public function index()
    {
        $Info = info::latest()->first();
        $Acts = Activite::all();
        $Axes = Axes::all();
        $Presse = Presse::all();
        $Projet = Projets::all();
        $partenaire= Partenaire::all();
        return view('frontEnd.home')->with('info',$Info)->with('Acts',$Acts)->with('Projet',$Projet)->with('Part',$partenaire)->with("Presse",$Presse)->with('Axes',$Axes);
    }


    public function about()
    {
        $Info = info::latest()->first();
        $Equipe = Equipes::all();
        return view('frontEnd.About')->with('info',$Info)->with('Equipe',$Equipe);
    }

    public function soutenezNous()
    {
        $Info = info::latest()->first();
        return view('frontEnd.Soutenez-nous')->with('info',$Info);
    }

    public function activites()
    {
        $Acts = Activite::paginate(9);
        
        return view('frontEnd.Activites')->with('Activites',$Acts);
    }

    public function projets()
    {
        $projets = Projets::paginate(3);
        return view('frontEnd.Project')->with('projets',$projets);
    }


    public function showActivite($id)
    {
        $Acts = Activite::where('id',$id)->first();
        return view('frontEnd.Titre_Activite')->with('Activite',$Acts);
    }


    public function showProjet($id)
    {
        $Projet = Projets::where('id',$id)->first();
        return view('frontEnd.Activités_projet')->with('Projets',$Projet);
    }

    public function getInsc()
    {
        return view('frontEnd.inscription');
    }
}
