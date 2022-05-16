<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $demandes = Demande::all();
       return view('demandes.index')->with('demandes', $demandes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $demande = Demande::where('id',$id)->first();
        return view('demandes.edit')->with('demande',$demande);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
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
            'pieceJustifs' =>'required|max:5000',
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
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
