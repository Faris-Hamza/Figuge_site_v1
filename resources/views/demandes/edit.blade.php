@extends('layouts.dashboard')

@section('Content')

    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Edite les'info des Demandes</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. Ceci afin de permettre un meilleur contrôle sur les informations affichées sur votre site afin qu'elles ne soient pas dépendantes</p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('demandes')}}" class="btn btn-primary btn-lg px-4 gap-3">Tout les Demande</a>
        </div>
        </div>
    </div>
    {{-- Form_for create a new member --}}
    <div class="container">
        @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    @php
    $GenreArray = ["Achat médicaments","Intervention chirugicale","Frais de transport","Articles de parapharmacie","Analyses","Autres"];
@endphp
<form action="{{route('demande/update',$demande->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" value="{{$demande->nom}}" >
        </div>
        <div class="mb-3">
        <label for="statu" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="prenom" value="{{$demande->prenom}}" >
        </div>
        <div class="mb-3">
            <label for="cin" class="form-label">CIN</label>
            <input type="text"  class="form-control" name="cin" value="{{$demande->cin}}" >
        </div>
        <div class="mb-3">
            <label for="nbrRamed" class="form-label">N° de carte RAMED</label>
            <input type="text"  class="form-control" name="nbrRamed" value="{{$demande->nbrRamed}}" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email"  class="form-control" name="email" value="{{$demande->email}}" >
        </div>
        <div class="mb-3">
            <label for="Tel" class="form-label">Téléphone</label>
            <input type="text"  class="form-control" name="Tel" value="{{$demande->Tel}}" >
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text"  class="form-control" name="adresse" value="{{$demande->adresse}}" >
        </div>
        <div class="mb-3">
            <label for="genreDemande" class="form-label">Genre d’aide demandée</label>
            <select id="genre" class="form-control" name="genreDemande"  onchange="Ajoute()">
                @foreach ($GenreArray as $item)
                <option value="{{$item}}" (({{$item}}=={{$demande->genreDemande}})? "Selected":"")>{{$item}}</option>
                @endforeach  
            </select>
        </div>
        
        

        <div class="mb-3">
            <label for="montant" class="form-label">Montant demandé</label>
            <input type="text"  class="form-control" name="montant" value="{{$demande->montant}}" >
        </div>

        <div class="mb-3">
            <label for="pieceJustifs" class="form-label">Joindre les pièces justificatives </label>
            <input type="file"  class="form-control" name="pieceJustifs" value="{{$demande->pieceJustifs}}" >
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

    @endsection