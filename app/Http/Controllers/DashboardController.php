<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Rapport_Activite;
use App\Models\Activite;
use App\Models\Revenu;
use App\Models\Depense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PDF;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function demande()
    {
       return view('demandes.index');
    }

    public function index()
    {
       $demandes = count(Demande::all());
       $activites = count(Activite::all());
       $revunus = Revenu::all();
       $revunu=0;
       $depense=0;
       foreach ($revunus as $key) {
           $revunu +=  $key->montant;
       }
       $depenses = Depense::all();
       foreach ($depenses as $key) {
           $depense +=  $key->montant;
       }

       return view('home')->with('demandes',$demandes)->with('activites',$activites)->with('revunu',$revunu)->with('depense',$depense);
    }


    public function pdfRapportParDate(Request $request )
    {
        $this->validate($request, [
            "dateD" => 'required',
            "dateF" => 'required'
        ]);

      
       
        $Rapports = Rapport_Activite::where( [['date', '>=', $request->dateD],['date', '<=', $request->dateF] ])->paginate(50);

        // dd(count( $Rapports) );
        $pdf = PDF::loadView('rapports/pdfRapportParDate',compact('Rapports'));
        $pdf->setPaper('A4');
       return $pdf->stream("rapport".'.pdf');
       
    }

    

    


}
