@extends('layouts.dashboard')

@section('Content')

    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Create un noveau Demande </h1>
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
        <form action="{{route('demande/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="entrer votre nom" >
                </div>
                <div class="mb-3">
                <label for="statu" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" placeholder="entrer votre prénom " >
                </div>
                <div class="mb-3">
                    <label for="cin" class="form-label">CIN</label>
                    <input type="text"  class="form-control" name="cin" placeholder="entrer votre CIN" >
                </div>
                <div class="mb-3">
                    <label for="nbrRamed" class="form-label">N° de carte RAMED</label>
                    <input type="text"  class="form-control" name="nbrRamed" placeholder="entrer votre N° de carte RAMED" >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email"  class="form-control" name="email" placeholder="entrer votre Email" >
                </div>
                <div class="mb-3">
                    <label for="Tel" class="form-label">Téléphone</label>
                    <input type="text"  class="form-control" name="Tel" placeholder="entrer votre Téléphone" >
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text"  class="form-control" name="adresse" placeholder="entrer votre Adresse" >
                </div>
                <div class="mb-3">
                    <label for="genreDemande" class="form-label">Genre d’aide demandée</label>
                    <select id="genre" class="form-control" name="genreDemande"  onchange="Ajoute()">
                        @foreach ($GenreArray as $item)
                        <option value="{{$item}}">{{$item}}</option>
                        @endforeach  
                    </select>
                </div>
                
                

                <div class="mb-3">
                    <label for="montant" class="form-label">Montant demandé</label>
                    <input type="text"  class="form-control" name="montant" placeholder="entrez le monatant demandez" >
                </div>

                <div class="mb-3">
                    <label for="pieceJustifs" class="form-label">Joindre les pièces justificatives </label>
                    <input type="file"  class="form-control" name="pieceJustifs" placeholder="Joindre les pièces justificatives " >
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <script>
        function Ajoute(){
            document.getElementById("Autre").style.display = "none"
            var Genre=document.getElementById("genre");
            if (Genre.value == "Autres") {
                document.getElementById("Autre").style.display = "block"
            }
        }
    </script>

    @endsection