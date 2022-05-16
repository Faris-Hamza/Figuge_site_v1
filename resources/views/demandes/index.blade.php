@extends('layouts.dashboard')

@section('Content')
<div class="px-4 py-5 my-1 text-center">
    <h1 class="display-5 fw-bold">Votre Demande</h1>
    <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Sur cette page, vous devez entrer toutes les Axes </p>
    <hr>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a  href="{{route('demande/create')}}" class="btn btn-primary btn-lg px-4 gap-3">Nouvau Demande</a>
    </div>
    </div>
</div>
{{-- tables_of_members --}}

<div class="container">
    @php
        $i=1;
    @endphp
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">CIN</th>
            <th scope="col">N° de carte RAMED</th>
            <th scope="col">Montant demandé</th>
            <th scope="col">Genre d'aide demandée</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($demandes as $item)
         <tr >
            <th class="align-middle" scope="row">{{$i++}}</th>
            <td class="align-middle">{{$item->nom}}</td>
            <td class="align-middle">{{$item->prenom}}</td>
            <td class="align-middle">{{$item->cin}}</td>
            <td class="align-middle">{{$item->nbrRamed}}</td>
            <td class="align-middle">{{$item->montant}}</td>
            <td class="align-middle">{{$item->genreDemande}}</td>
            <td class="align-middle">{{$item->Tel}}</td>
            <td class="align-middle">{{$item->email}}</td>
            <td class="align-middle">{{$item->adresse}}</td>
            <td class="align-middle"><a href="{{route('demande/edit',$item->id)}}" class="btn btn-primary"><i class='bx bxs-edit-alt'></i></a></td>
            <td class="align-middle"><a href="{{route('demande/destroy',$item->id)}}" class="btn btn-danger"><i class='bx bx-trash' ></i></a></td>
        </tr>
         @endforeach
         
        </tbody>
    </table>
</div>
    @endsection