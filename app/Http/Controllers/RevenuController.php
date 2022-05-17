<?php

namespace App\Http\Controllers;

use App\Models\Revenu;
use Illuminate\Http\Request;

class RevenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Revenus = Revenu::all();

        return view('revenus.index')->with('revenus', $Revenus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revenus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Revenu  $revenu
     * @return \Illuminate\Http\Response
     */
    public function show(Revenu $revenu)
    {
       
    }

    public function edit( $id)
    {
        $Revenu = Revenu::where('id', $id)->first();
        return view('revenus.edit');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Revenu  $revenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Revenu $revenu)
    {
        
        $Revenu = Revenu::where('id', $id)->first();
        $Revenu->forecDelete();
        return redirect()->back();
    }
}
