<?php

namespace App\Http\Controllers;

use App\Models\Demande;
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
       $demandes = Demande::all();
       return view('demandes.index')->with('demandes', $demandes);
    }


    public function pdfRapportParDate(Date $dateD, Date $dateF)
    {
        $Rapport = Rapport_Activite::where([
            [$Rapport->activite->date_debut, '>=', $dateD],
            [$Rapport->activite->date_fin, '>=', $dateF],
            
        ]);
        $pdf = PDF::loadView('rapports/pdfRapport',compact('Rapport'));
        $pdf->setPaper('A4');
       return $pdf->stream("rapport".$Rapport->activite()->first()->name.'.pdf');
       
    }

    

    


}
