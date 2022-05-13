@extends('layouts.dashboard')

@section('Content')
<body>
    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Votre Emails</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les mail </p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            {{-- <a  href="{{route('mail/create')}}" class="btn btn-primary btn-lg px-4 gap-3">Nouvau Axes</a> --}}
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
                <th scope="col">N°</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($mail as $item)
             <tr >
                <th class="align-middle" scope="row">{{$i++}}</th>
                <td class="align-middle">{{$item->mail}}</td>
                <td class="align-middle"><a href="{{route('mail/edit',$item->id)}}" class="btn btn-primary"><i class='bx bxs-edit-alt'></i></a></td>
                <td class="align-middle"><a href="{{route('mail/destroy',$item->id)}}" class="btn btn-danger"><i class='bx bx-trash' ></i></a></td>
            </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    @endsection