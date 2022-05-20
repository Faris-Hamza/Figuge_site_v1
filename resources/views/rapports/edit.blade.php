@extends('layouts.dashboard')

@section('Content')
    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Create un noveau rapport</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. Ceci afin de permettre un meilleur contrôle sur les informations affichées sur votre site afin qu'elles ne soient pas dépendantes</p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('rapports')}}" class="btn btn-primary btn-lg px-4 gap-3">Tout les rapports</a>
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
        <form action="{{route('rapport/update', $rapport->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="id_act" class="form-label fw-bold">Titre d'activité</label>
                    <select name="id_act"  class="form-control">
                        <option value="--" hidden></option>
                        @foreach ($activites as $item)
                           <option value="{{$item->id}}" {{($item->id==$rapport->id_act)?"selected":""}}>{{$item->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label for="context" class="form-label fw-bold">Context</label>
                    <textarea  class="form-control" name="context" >{{$rapport->context}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="lieu" class="form-label fw-bold">Lieu</label>
                    <input type="text" class="form-control" name="lieu" value="{{$rapport->lieu}}" >
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label fw-bold">Date</label>
                    <input type="date" class="form-control" name="date" value="{{$rapport->date}}" >
                </div>
                <div class="mb-3">
                    <label for="nbr_femme" class="form-label fw-bold">Nomber de femme</label>
                    <input type="text" class="form-control" name="nbr_femme" value="{{$rapport->nbr_femme}}">
                </div>
                <div class="mb-3">
                    <label for="nbr_homme" class="form-label fw-bold">Nomber de homme</label>
                    <input type="text" class="form-control" name="nbr_homme" value="{{$rapport->nbr_homme}}">
                </div>
                
               
                <div class="mb-3">
                    <label for="reference" class="form-label fw-bold">Référence</label>
                    <input type="file" min="0" accept=".pdf" class="form-control" name="reference" value="{{$rapport->reference}}" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </form>
    </div>
    

@endsection
