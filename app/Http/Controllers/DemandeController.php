<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DemandeController extends Controller
{
    public function index()
    {
       $demandes = Demande::all();
       return view('demandes.index')->with('demandes', $demandes);
    }


    public function create()
    {
        return view('demandes.create');
    }

    public function store(Request $request)
    {
       $this->validate($request, [
        'nom'          =>'required', 
        'prenom'       =>'required',
        'cin'          =>'required',
        'email'        =>'required',
        'Tel'          =>'required',
        'adresse'      =>'required',
        'nbrRamed'     =>'required',
        'genreDemande' =>'required',
        'montant'      =>'required',
        'pieceJustifs' =>'required|max:5000',
       ]);

        if ($request->has('pieceJustifs')) {
            $newPhoto = time().$request->pieceJustifs->getClientOriginalName();
            $request->pieceJustifs->move('uploads/Justifs',$newPhoto);
        }

        $demande = Demande::create([
            'nom'          =>$request->nom,
            'prenom'       =>$request->prenom,
            'cin'          =>$request->cin,
            'email'        =>$request->email,
            'Tel'          =>$request->Tel,
            'adresse'      =>$request->adresse,
            'nbrRamed'     =>$request->nbrRamed,
            'genreDemande' =>$request->genreDemande,
            'montant'      =>$request->montant,
            'pieceJustifs' =>'uploads/Justifs/'.$newPhoto,
        
        ]);
        return redirect()->back();
    }

    public function show($id)
    {
        
    }

    public function edit( $id)
    {
        $demande = Demande::where('id',$id)->first();
        return view('demandes.edit')->with('demande',$demande);
    }

    public function update(Request $request, $id)
    {
        $demande = Demande::where('id', $id)->first();
        $this->validate($request, [
            'nom'          =>'required', 
            'prenom'       =>'required',
            'cin'          =>'required',
            'email'        =>'required',
            'Tel'          =>'required',
            'adresse'      =>'required',
            'nbrRamed'     =>'required',
            'genreDemande' =>'required',
            'montant'      =>'required',
            'pieceJustifs' =>'max:5000',
        ]);

        if ($request->has('pieceJustifs')) {
            if (File::exists(public_path($equipes->pieceJustifs)))
            {
                File::delete(public_path($equipes->pieceJustifs));
            }
            $file = $request->pieceJustifs;
            $newfile = time().$file->getClientOriginalName();
            $file->move('uploads/equipes',$newfile);
            $demande->pieceJustifs='uploads/equipes/'.$newfile;
            
        }
       
        $demande->nom          = $request->nom;
        $demande->prenom       =  $request->prenom;
        $demande->cin          = $request->cin;
        $demande->email        = $request->email;
        $demande->Tel          = $request->Tel;
        $demande->adresse      = $request->adresse;
        $demande->nbrRamed     = $request->nbrRamed;
        $demande->genreDemande = $request->genreDemande;
        $demande->montant      = $request->montant;
        $demande->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $demande = Demande::where('id', $id)->first();
        if (File::exists(public_path($equipes->pieceJustifs)))
            {
                File::delete(public_path($equipes->pieceJustifs));
            }
        $demande->forceDelete();
        return redirect()->back();
    }
}
