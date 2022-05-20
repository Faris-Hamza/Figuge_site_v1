<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Rapport_Activite;
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
       $demandes = count(Demande::all());
       return view('home');
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
