<?php

namespace App\Http\Controllers;

use App\Models\Rapport_Activite;
use Illuminate\Http\Request;

class RapportActiviteController extends Controller
{
    
    public function index()
    {
        $Rapports = Rapport_Activite::all();
        return view('rapports.index')->with('rapports',$Rapports);
    }

    public function create()
    {
        return view('rapports.create');
    }

  
    public function store($id)
    {
       $this->validate($request, [
        'id_act'    => 'required',  
        'context'    => 'required', 
        'lieu'      => 'required', 
        'date'     => 'required', 
        'nbr_femme'=> 'required',
        'nbr_homme' => 'required', 
        'reference' => 'required6 max:5000'
       ]);

        $newFile = time().$request->reference->getClientOriginalName();
        $request->reference->move('uploads/Rapport_Activite',$newFile);

        $Rapport = Rapport_Activite::create([
            'id_act'    => $request->id_act,
            'context'   => $request->context,
            'lieu'      => $request->lieu,
            'date'      => $request->date,
            'nbr_femme' => $request->nbr_femme,
            'nbr_homme' => $request->nbr_homme,
            'reference' => 'uploads/Rapport_Activite/'.$newFile
        ]);

        return redirect()->back();
    }

    
    public function show($id)
    {
       
    }

    public function edit($id)
    {
        $Rapport = Rapport_Activite::where('id', $id)->first();
        return view('rapports.edit')->with('rapport',$Rapport);
    }

  
    public function update(Request $request, $id)
    {
        $Rapport = Rapport_Activite::where('id', $id)->first();
        $this->validate($request, [
            'id_act'    =>'required',
            'context'   =>'required',
            'lieu'      =>'required',
            'date'      =>'required',
            'nbr_femme' =>'required',
            'nbr_homme' =>'required',
            'reference' =>'max:5000',
        ]);

        if ($request->has('reference')) {
            if (File::exists(public_path($Rapport->reference)))
            {
                File::delete(public_path($Rapport->reference));
            }
            $newFile = time().$request->reference->getClientOriginalName();
            $request->reference->move('uploads/Depenses',$newFile);
            $request->reference = 'uploads/Depenses/'.$newFile;
        }

        $Rapport->id_act      = $request->id_act;
        $Rapport->context     = $request->context;
        $Rapport->lieu        = $request->lieu;
        $Rapport->date        = $request->date;
        $Rapport->nbr_femme   = $request->nbr_femme;
        $Rapport->nbr_homme   = $request->nbr_homme;
        $Rapport->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $Rapport = Rapport_Activite::where('id', $id)->first();   
        if (File::exists(public_path($Rapport->reference)))
        {
            File::delete(public_path($Rapport->reference));
        }
        $Rapport->forceDelete();
        return redirect()->back();
    }
}
