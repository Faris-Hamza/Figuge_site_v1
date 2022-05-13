<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use Illuminate\Http\Request;
use App\Models\Projets;
use App\Models\Media;
use App\Models\Axes;
use Illuminate\Support\Facades\File;

class ActiviteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        $activite = Activite::all();
        return view('activites.index')->with('activite', $activite);
    }

    public function create()
    {
        $projets = Projets::all();
        $Axes = Axes::all();
        return view('activites.create')->with('projets', $projets)->with('Axes', $Axes);
    }

    public function store(Request $request)
    {
        if (count($request->photo)>5) {
            return Redirect::back()->withErrors(['msg' => 'Le nombre maximum de photos autorisé est de 5']);
        }
        $this->validate($request, [
            'name'           => 'required',
            'detail'         => 'required',
            'lieu'           => 'required',
            'date_debut'     => 'required',
            'date_fin'       => 'required',
            'photo.*'          => 'max:2048'
        ]);


        $activite = Activite::create([

            'name'        =>$request->name,
            'id_proj'     =>$request->id_proj,
            'detail'      =>$request->detail,
            'id_Axe'      =>$request->id_Axe,
            'lieu'        =>$request->lieu,
            'date_debut'  =>$request->date_debut,
            'date_fin'    =>$request->date_fin,
            
        ]);
        $activite = Activite::latest()->first();
        foreach ($request->video as $item) {
            $video=Media::create([
                'id_activite'=>$activite->id,
                'id_proj'=>0,
                'URL'=>$item,
                'types'=>"video"
            ]);
        }
        foreach ($request->photo as $item) {
            $photo=$item;
            $newPhoto = time().$photo->getClientOriginalName();
            $photo->move('uploads/activites',$newPhoto);
            $photo=Media::create([
                'id_activite'=>$activite->id,
                'id_proj'=>0,
                'URL'=>'uploads/activites/'.$newPhoto,
                'types'=>'photo'
            ]);
        }
        return redirect()->back();
    }

    public function show($id)
    {
        $activite = Activite::where('id', $id)->first();
        return view('activites.show')->with('activite', $activite);
    }

    public function edit($id)
    {
        $projets = Projets::all();
        $activite = Activite::where('id', $id)->first();
        $Axes = Axes::all();
        return view('activites.edit')->with('activite',$activite)->with('Axes', $Axes)->with('projets', $projets);
    }

    
    public function update(Request $request,$id)
    {
        if (count($request->photo)>5) {
            return Redirect::back()->withErrors(['msg' => 'Le nombre maximum de photos autorisé est de 5']);
        }
        $activite = Activite::where('id', $id)->first();
        $this->validate($request, [
            'name'           => 'required',
            'detail'         => 'required',
            'lieu'           => 'required',
            'date_debut'     => 'required',
            'date_fin'       => 'required',
            'photo.*'        => 'max:2048'
        ]);

        if ($request->has('photo')) {
            foreach ($activite->Media as $item) {
                if (File::exists(public_path($item->URL))) {
                    File::delete(public_path($item->URL));
                }
                $item->forceDelete();
            }
            foreach ($request->photo as $item) {
                $newPhoto = time().$item->getClientOriginalName();
                $item->move('uploads/activites',$newPhoto);
                $item->URL = 'uploads/activites/'.$newPhoto;
                $item=Media::create([
                    'id_activite'=>$activite->id,
                    'id_proj'=>0,
                    'URL'=>'uploads/activites/'.$newPhoto,
                    'types'=>'photo'
                ]);
                
            }
        }
        
        if ($request->has('video')) {
            foreach ($activite->Media as $item) {
                $item->forceDelete();
            }
            foreach ($request->video as $item) {
                $video=Media::create([
                    'id_proj'=>0,
                    'id_activite'=>$activite->id,
                    'URL'=>$item,
                    'types'=>"video"
                ]);
            }
        } 

        $activite->name         = $request->name;
        $activite->id_proj      = $request->id_proj;
        $activite->id_Axe      = $request->id_Axe;
        $activite->detail       = $request->detail;
        $activite->lieu         = $request->lieu;
        $activite->date_debut   = $request->date_debut;
        $activite->date_fin     = $request->date_fin;
        $activite->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $activite = Activite::where('id', $id)->first();
        foreach ($activite->Media as $item) {
            if (File::exists(public_path($item->URL))) {
                File::delete(public_path($item->URL));
            }
            $item->forceDelete();
        }
        $activite->forceDelete();
        return redirect()->back();
    }
}
