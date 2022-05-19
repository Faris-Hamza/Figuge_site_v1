@extends('layouts.dashboard')

@section('Content')

    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Edite les'info des depense</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. Ceci afin de permettre un meilleur contrôle sur les informations affichées sur votre site afin qu'elles ne soient pas dépendantes</p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('depenses')}}" class="btn btn-primary btn-lg px-4 gap-3">Tout les Depenses</a>
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
            $ModePayment = ["Chéque", "Virement banquaire", "Espice"];
        @endphp
        <form action="{{route('depense/store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="libelle" class="form-label">Libellé</label>
                <input type="text" class="form-control" name="libelle" value="{{$depense->libelle}}"  >
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" value="{{$depense->date}}">
            </div>
            <div class="mb-3">
                <label for="contrante" class="form-label">Contrante</label>
                <input type="text" class="form-control" name="contrante" value="{{$depense->contrante}}">
            </div>
            <div class="mb-3">
                <label for="Beneficiaire" class="form-label">Beneficiaire</label>
                <input type="text" class="form-control" name="Beneficiaire" value="{{$depense->Beneficiare}}">
            </div>
            <div class="mb-3">
                <label for="montant" class="form-label">Montant dépensé</label>
                <input type="text" class="form-control" name="montant" value="{{$depense->montant}}">
            </div>
            <div class="mb-3">
                <label for="modePayment" class="form-label">Mode de payment</label>
                <select class="form-control"  name="modePayment"   >
                    @foreach ($ModePayment as $item)
                        <option value="{{$item}}" (({{$depense->montant}}=={{$item}})?"selected":"")>{{$item}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="mb-3">
                <label for="justif" class="form-label">Piéce justificatif</label>
                <input type="file" accept=".pdf" class="form-control" name="justif"  >
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       
    </div>

    @endsection