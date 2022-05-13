@extends('layouts.dashboard')

@section('Content')
    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Votre équipe</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. </p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a  href="{{route('equipes/create')}}" class="btn btn-primary btn-lg px-4 gap-3">Nouvau membre</a>
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
                <th scope="col">Photo</th>
                <th scope="col">Nom</th>
                <th scope="col">Statu</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($equipes as $item)
             <tr >
                <th class="align-middle" scope="row">{{$i++}}</th>
                <td><img style="height: 50px; border-radius: 30px;" src="{{asset($item->photo)}}" alt=""></td>
                <td class="align-middle">{{$item->nom}}</td>
                <td class="align-middle">{{$item->statu}}</td>
                <td class="align-middle"><a href="{{route('equipes/edit',$item->id)}}" class="btn btn-primary"><i class='bx bxs-edit-alt'></i></a></td>
                <td class="align-middle"><a href="{{route('equipes/destroy',$item->id)}}" class="btn btn-danger"><i class='bx bx-trash' ></i></a></td>
            </tr>
             @endforeach
             
            </tbody>
        </table>
    </div>
    @endsection