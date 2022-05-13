@extends('layouts.dashboard')

@section('Content')
    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Create un noveau Axe</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les Axe requises </p>
        <hr>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('Axe')}}" class="btn btn-primary btn-lg px-4 gap-3">Tout les Axes</a>
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
        <form action="{{route('Axe/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control"name="nom" placeholder="entrer votre nom" >
                </div>
                <div class="mb-3">
                <label for="icon" class="form-label">Icon</label>
                <input type="file" accept="image/*" class="form-control" name="icon" placeholder="entrer votre Icon" >
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
@endsection