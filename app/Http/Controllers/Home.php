<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

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
use App\Models\User;

class Home extends Controller
{
    public function index()
    {
        $user = User::all()->first();
        if ($user==null) {
             User::create([
                'name' => "Admin",
                'email' => "Admin@gmail.com",
                'password' => Hash::make("Admin"),
            ]);
        }

        $Info = info::all()->first();
        if ($Info==null) {
            $Info = info::create();
        }
        $Acts = Activite::paginate(3);
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
        $Acts = Activite::latest()->paginate(3);
        $Axes = Axes::paginate(9);
        return view('frontEnd.Activites')->with('Activites',$Acts)->with('Axes',$Axes);
    }

    public function projets()
    {
        $projets = Projets::latest()->paginate(3);
        $Axes = Axes::paginate(5);
        return view('frontEnd.Project')->with('projets',$projets)->with('Axes',$Axes);
    }


    public function showActivite($id)
    {
        $Acts = Activite::where('id',$id)->first();
        $Photos = $Acts->Media->where('types','photo');
        $Videos = $Acts->Media->where('types','video');
        return view('frontEnd.Titre_Activite')->with('Activite',$Acts)->with('Photos', $Photos)->with('Videos', $Videos);
    }


    public function showProjet($id)
    {
        $Projet = Projets::where('id',$id)->first();
        $Photos = $Projet->Media->where('types','photo');
        $Videos = $Projet->Media->where('types','video');
        return view('frontEnd.Activités_projet')->with('Projets',$Projet)->with('Photos', $Photos)->with('Videos', $Videos);
    }

    public function getInsc()
    {
        $Info = info::latest()->first();
        return view('frontEnd.inscription')->with('info',$Info);
    }
}
