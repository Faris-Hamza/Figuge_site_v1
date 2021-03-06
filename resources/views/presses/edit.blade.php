@extends('layouts.dashboard')

@section('Content')
<body>
       <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Modifier les infos d'presse</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. Ceci afin de permettre un meilleur contrôle sur les informations affichées sur votre site afin qu'elles ne soient pas dépendantes</p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('presse')}}" class="btn btn-primary btn-lg px-4 gap-3">Tout les Presse</a>
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
        <form action="{{route('presse/update', $presse->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="logo" class="form-label fw-bold">Logo</label>
                    <input type="file" accept="image/*" class="form-control" name="logo" >
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nom </label>
                    <input type="text" class="form-control" name="name"  value="{{$presse->name}}">
                </div>
                <div class="mb-3">
                    <label for="lieu" class="form-label fw-bold">Lieu </label>
                    <input type="text" class="form-control" name="lieu" value="{{$presse->lieu}}" >
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label fw-bold">Date de Presse </label>
                    <input type="date" class="form-control" name="date"  value="{{$presse->date}}">
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label fw-bold">Lieu vere L'article</label>
                    <input type="text" class="form-control" name="url" value="{{$presse->url}}" >
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
      </form>
    </div>
    @endsection 

