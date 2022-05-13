@extends('layouts.dashboard')

@section('Content')
    
    <div class="px-4 py-5 my-1 text-center">
        <h1 class="display-5 fw-bold">Informations Générale de l'association</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Sur cette page, vous devez entrer toutes les informations requises pour qu'elles soient affichées à l'endroit approprié. Ceci afin de permettre un meilleur contrôle sur les informations affichées sur votre site afin qu'elles ne soient pas dépendantes</p>
        <hr>
        </div>
    </div>

    {{-- form_edit --}}

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
        <form action="{{route('info/update',$info->id)}}" method="POST">
       @csrf
       @method('POST')
            <legend>Information générale</legend>
            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                        <label for="Apropo" class="form-label  fw-bold">Apropos de l'association</label>
                        <textarea name="Apropo" class="form-control">{{$info->Apropo}}</textarea>
                      </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                        <label for="bienvenu" class="form-label fw-bold">text de bienvenu</label>
                        <textarea name="bienvenu" class="form-control">{{$info->bienvenu}}</textarea>
                      </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                        <label for="whatsapp" class="form-label fw-bold">Whatsapp de l'association</label>
                        <input type="text" name="whatsapp" class="form-control" value="{{$info->whatsapp}}">
                    </div>
                  </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                        <label for="fb" class="form-label fw-bold">Facebook de l'association</label>
                        <input type="text" name="fb" class="form-control" value="{{$info->fb}}">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                        <label for="instagram" class="form-label fw-bold">Instagram de l'association</label>
                        <input type="text" name="instagram" class="form-control" value="{{$info->instagram}}">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                        <label for="Linkedin" class="form-label fw-bold">Linkedin de l'association</label>
                        <input type="text" name="Linkedin" class="form-control" value="{{$info->Linkedin}}">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                        <label for="twitter" class="form-label fw-bold">twitter de l'association</label>
                        <input type="text" name="twitter" class="form-control" value="{{$info->twitter}}">
                    </div>
                  </div>
                  <div class="col">
                    <div class="mb-3">
                        <label for="youtube" class="form-label fw-bold">Youtube de l'association</label>
                        <input type="text" name="youtube" class="form-control" value="{{$info->youtube}}">
                    </div>
                  </div>
                </div>
              </div>
            
            <div class="mb-3">
                <label for="vision" class="form-label">vision de la siciation </label>
                <textarea name="vision" class="form-control">{{$info->vision}}</textarea>
            </div>
            <div class="mb-3">
                <label for="stratigie" class="form-label">stratigie de la sociation </label>
                <textarea name="stratigie" class="form-control">{{$info->stratigie}}</textarea>
            </div>
            <div class="mb-3">
                <label for="programmes" class="form-label">programmes de l'association </label>
                <textarea name="programmes" class="form-control">{{$info->programmes}}</textarea>
            </div>
            <div class="mb-3">
                <label for="txtAdherent" class="form-label">text de l'adherent</label>
                <textarea name="txtAdherent" class="form-control">{{$info->txtAdherent}}</textarea>
            </div>
            <div class="mb-3">
                <label for="txtSetunez" class="form-label">ttxtSetunez de l'association </label>
                <textarea name="txtSetunez" class="form-control">{{$info->txtSetunez}}</textarea>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    @endsection