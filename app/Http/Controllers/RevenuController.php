<?php

namespace App\Http\Controllers;

use App\Models\Revenu;
use Illuminate\Http\Request;

class RevenuController extends Controller
{
   
    public function index()
    {
        $Revenus = Revenu::all();

        return view('revenus.index')->with('revenus', $Revenus);
    }

   
    public function create()
    {
        return view('revenus.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'id'      =>'required',  
            'libelle' =>'required',
            'date'    =>'required', 
            'montant' =>'required',
            'source'  =>'required'
        ]);

        $Revenu = Revenu::create($request->all());
        
        return redirect()->back();
    }

   
    public function show(Revenu $revenu)
    {
       
    }

    public function edit( $id)
    {
        $Revenu = Revenu::where('id', $id)->first();
        return view('revenus.edit')->with('revenu', $Revenu);
    }

  
    public function update(Request $request, $id)
    {
        $Revenu = Revenu::where('id', $id)->first();
        $this->validate($request,[
            'id'      =>'required',  
            'libelle' =>'required',
            'date'    =>'required', 
            'montant' =>'required',
            'source'  =>'required'
        ]);

        $Revenu = Revenu::upadate($request->all());
        
        return redirect()->back();
    }

    
    public function destroy(Revenu $revenu)
    {
        
        $Revenu = Revenu::where('id', $id)->first();
        $Revenu->forceDelete();
        return redirect()->back();
    }
}