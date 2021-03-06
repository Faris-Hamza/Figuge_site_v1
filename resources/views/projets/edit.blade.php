@extends('layouts.dashboard')

@section('Content')
        <div class="px-4 py-5 my-1 text-center">
            <h1 class="display-5 fw-bold">Create un noveau Projet</h1>
            <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. Ceci afin de permettre un meilleur contrôle sur les informations affichées sur votre site afin qu'elles ne soient pas dépendantes</p>
            <hr>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="{{route('projets')}}" class="btn btn-primary btn-lg px-4 gap-3">Tout les projets</a>
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
            <form action="{{route('projet/update', $projet->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="titre" class="form-label fw-bold">Titre de projet</label>
                        <input type="text" class="form-control" name="titre" value="{{$projet->titre}}">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label fw-bold">Bréf description</label>
                        <textarea  class="form-control" name="detail"> {{$projet->detail}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="responsable" class="form-label fw-bold">Responsable</label>
                        <input type="text" class="form-control" name="responsable"  value="{{$projet->responsable}}">
                    </div>
                    <div class="mb-3">
                        <label for="lieu" class="form-label fw-bold">Lieu</label>
                        <input type="text" class="form-control"name="lieu"  value="{{$projet->lieu}}">
                    </div>
                    <div class="mb-3">
                        <label for="date_debut" class="form-label fw-bold">Date Debut</label>
                        <input type="date" class="form-control"name="date_debut"  value="{{$projet->date_debut}}">
                    </div>
                    <div class="mb-3">
                        <label for="date_fin" class="form-label fw-bold">Date fin</label>
                        <input type="date" class="form-control"name="date_fin"  value="{{$projet->date_fin}}">
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label fw-bold">Images</label>
                        <input type="file" accept="image/*" min="0" class="form-control" name="photo[]" multiple="multiple" value="{{$projet->photo}}">
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label fw-bold">Video</label>
                        <div class="container">
                            <div id="Vids" class="row">
                                @foreach ($projet->Media->Where('types', 'video') as $item)
                                <div class="col">
                                    <input type="text" min="0" value="{{$item->URL}}" class="form-control my-2" name="video[]" >
                                </div>
                                @endforeach
                            <div class="col">
                                <button type="button" class="btn btn-primary my-2" onclick="Ajoute()">+</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
        </div>
        @include('layouts.inc.scriptBtn_Url')
@endsection
   

