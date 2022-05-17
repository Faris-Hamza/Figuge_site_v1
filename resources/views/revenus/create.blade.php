@extends('layouts.dashboard')

@section('Content')

    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Create un noveau revenu</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. Ceci afin de permettre un meilleur contrôle sur les informations affichées sur votre site afin qu'elles ne soient pas dépendantes</p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('revenus')}}" class="btn btn-primary btn-lg px-4 gap-3">Tout les Revenus</a>
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
        <form action="{{route('revenu/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="libelle" class="form-label">libellé</label>
                    <input type="text" class="form-control" name="libelle"  >
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date de revenu</label>
                    <input type="date" class="form-control" name="date"  >
                </div>
                <div class="mb-3">
                    <label for="montant" class="form-label">Monatant</label>
                    <input type="text"  class="form-control" name="montant"  >
                </div>
                <div class="mb-3">
                    <label for="source" class="form-label">Source</label>
                    <input type="text"  class="form-control" name="source"  >
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    @endsection