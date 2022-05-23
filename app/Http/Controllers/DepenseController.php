<?php

namespace App\Http\Controllers;


use App\Models\Depense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;

class DepenseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pdfDepense()
    {
        $Depenses = Depense::all();
       $pdf = PDF::loadView('depenses/pdfDepense', compact('Depenses'));
       $pdf->setPaper('A4', 'landscape');
       return $pdf->stream('invoice.pdf');
       
    }

    public function index()
    {
        $Depenses = Depense::latest()->paginate(10);
        return view('depenses.index')->with('depenses',$Depenses);
    }

    
    public function create()
    {
        return view('depenses.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'libelle'      =>'required',
            'date'         =>'required',
            'contrante'    =>'required',
            'Beneficiaire' =>'required',
            'montant'      =>'required',
            'modePayment'  =>'required',
            'justif'       =>'required|max:5000',
        ]);

        $newFile = time().$request->justif->getClientOriginalName();
        $request->justif->move('uploads/Depenses',$newFile);

        $Depense = Depense::create([
            'libelle'      => $request->libelle,
            'date'         => $request->date,
            'contrante'    => $request->contrante,
            'Beneficiaire' => $request->Beneficiaire,
            'montant'      => $request->montant,
            'modePayment'  => $request->modePayment,
            'justif'       => 'uploads/Depenses/'.$newFile
        ]);

        return redirect()->back();
    }

    

    
    public function show($id)
    {
        
    }

    
    public function edit( $id)
    {
        $Depense = Depense::where('id', $id)->first();
        return view('depenses.edit')->with('depense',$Depense);
    }

    
    public function update(Request $request,  $id)
    {
        $Depense = Depense::where('id', $id)->first();
        $this->validate($request, [
            'libelle'      =>'required',
            'contrante'    =>'required',
            'date'         =>'required',
            'Beneficiaire' =>'required',
            'montant'      =>'required',
            'modePayment'  =>'required',
            'justif'       =>'max:5000',
        ]);

        if ($request->has('justif')) {
            if (File::exists(public_path($Depense->justif)))
            {
                File::delete(public_path($Depense->justif));
            }
            $newFile = time().$request->justif->getClientOriginalName();
            $request->justif->move('uploads/Depenses',$newFile);
            $request->justif = 'uploads/Depenses/'.$newFile;
        }

        $Depense->libelle       = $request-> libelle;
        $Depense->contrante     = $request->contrante;
        $Depense->date          = $request->date;
        $Depense->Beneficiaire  = $request->Beneficiair;
        $Depense->montant       = $request->montant;
        $Depense->modePayment   = $request->modePayment;
        $Depense->save();

        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $Depense = Depense::where('id', $id)->first();   
        if (File::exists(public_path($Depense->justif)))
        {
            File::delete(public_path($Depense->justif));
        }
        $Depense->forceDelete();
        return redirect()->back();
    }
}
